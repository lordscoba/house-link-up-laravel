<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

use App\Models\User;
use App\Models\Payments;
use Carbon\Carbon;



class PaymentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function pricing(){
        
        return view('dashboard.payment.pricing');

    }

    public function index(){
        return view('dashboard.payment.index', [
            'payments' => Payments::where('user_id',Auth::user()->id )->paginate(5),
        ]);

    }

     public function create(){
        
        return view('dashboard.payment.create');

    }

     public function view($ref){

    try {

        // call api
        $apiKey = env('PAYSTACK_SECRET_KEY');

        // API endpoint URL
        $apiUrl = env('PAYSTACK_PAYMENT_VERIFY_URL');

        $client = new Client();

        // Make the POST request with authorization header
        $response = $client->get($apiUrl.$ref, [
        'headers' => [
        'Authorization' => 'Bearer ' . $apiKey,
        'Content-Type' => 'application/json',
        ],
        ]);

        $responseBody = $response->getBody()->getContents();

        // Convert JSON string to PHP array
        $data = json_decode($responseBody, true);

        // Log::info($data);
        // Log::info($data['data']['status']);
        
        if ($response->getStatusCode() === 200) {

        if ($data['data']['status'] === "success") {
            # code...
            $success =  1;
            $processing =  0;
            $failed =  0;

        }else {
            # code...
            $success =  0;
            $processing =  0;
            $failed =  1;
        }

        $payments = Payments::where('reference', $ref)
        ->update([
            'success' => $success,
            "processing" => $processing,
            "failed" => $failed,
            'status' => $data['data']['status'],
        ]);

        return view('dashboard.payment.view', [
           'status' => $data['data']['status'],
           'payment' => Payments::where('reference', $ref)->first(),
        ]);
        
        } 

        } catch (ClientException $exception) {
        // Log::info($exception);
        // Handle the exception and flash the error message
        $errorMessage = json_decode($exception->getResponse()->getBody()->getContents(), true)['message'];
        return Redirect::back()->withErrors(['email' => $errorMessage]);
        }

    }

    public function redirectToGateway(Request $request){


        //get user details
        $userID = Auth::user()->id;
        $name = Auth::user()->name;
        $user = User::findOrFail($userID);

        // The amount is in kobo (100 Naira)
        $amount = 100 * $request->input('amount');

        
        // Other necessary parameters
        $email = Auth::user()->email;
        $name = Auth::user()->name;


        // Log::info($created);

        try {

        $data = array(
        "amount" => $amount,
        "email" => $email,
        "currency" => "NGN",
        "orderID" => $userID,
        'callback_url' => route('payments.success'),
        );

        // call api
        $apiKey = env('PAYSTACK_SECRET_KEY');

        // API endpoint URL
        $apiUrl = env('PAYSTACK_PAYMENT_URL');

        $client = new Client();

        // Make the POST request with authorization header
        $response = $client->post($apiUrl, [
        'headers' => [
        'Authorization' => 'Bearer ' . $apiKey,
        'Content-Type' => 'application/json',
        ],
        'json' => $data,
        ]);

        $responseBody = $response->getBody()->getContents();

        // Convert JSON string to PHP array
        $data = json_decode($responseBody, true);

        // Log::info($data['message']);
        // Log::info($data['data']['authorization_url']);
        
        if ($response->getStatusCode() === 200) {
            // Process successful response
        $payment = Payments::create([
            "user_id" => $userID,
            "order_id" => $userID,
            "amount" => $amount / 100,
            "email" => $email,
            "type" => 'Business',
            "success" => 0,
            "processing" => 1,
            "failed" => 0,
            "name" => $name,
            "reference" => $data['data']['reference'],
            "authorization_url" => $data['data']['authorization_url'],
            "access_code" => $data['data']['access_code'],
            "status" => "processing",
        ]);

        return Redirect::to($data['data']['authorization_url']);
        
        } 

        } catch (ClientException $exception) {
        // Log::info($exception);
        // Handle the exception and flash the error message
        $errorMessage = json_decode($exception->getResponse()->getBody()->getContents(), true)['message'];
        return Redirect::back()->withErrors(['errors' => $errorMessage]);
        }
        
    }
    public function handleGatewayCallback(Request $request){

        $trxref = $request->query('reference');

        // Log::info($trxref);

        try {

        // call api
        $apiKey = env('PAYSTACK_SECRET_KEY');

        // API endpoint URL
        $apiUrl = env('PAYSTACK_PAYMENT_VERIFY_URL');

        $client = new Client();

        // Make the POST request with authorization header
        $response = $client->get($apiUrl.$trxref, [
        'headers' => [
        'Authorization' => 'Bearer ' . $apiKey,
        'Content-Type' => 'application/json',
        ],
        ]);

        $responseBody = $response->getBody()->getContents();

        // Convert JSON string to PHP array
        $data = json_decode($responseBody, true);

        // Log::info($data);
        // Log::info($data['data']['status']);
        
        if ($response->getStatusCode() === 200) {

        if ($data['data']['status'] === "success") {
            # code...
            $created =  Carbon::now()->timestamp;
            $duration =  30 * 24 * 60 * 60;
            $expired =  $created + $duration;
            $success =  1;
            $processing =  0;
            $failed =  0;

        }else {
            # code...
            $created =  Carbon::now()->timestamp;
            $duration =  null;
            $expired =  null;
            $success =  0;
            $processing =  0;
            $failed =  1;
        }

        $payments = Payments::where('reference', $trxref)
        ->update([
            'success' => $success,
            "processing" => $processing,
            "failed" => $failed,
            "created" => $created,
            "duration" => $duration,
            "expired" => $expired,
            'status' => $data['data']['status'],
        ]);

        return view('dashboard.payment.success', [
           'status' => $data['data']['status'],
        ]);
        
        } 

        } catch (ClientException $exception) {
        // Log::info($exception);
        // Handle the exception and flash the error message
        $errorMessage = json_decode($exception->getResponse()->getBody()->getContents(), true)['message'];
        return Redirect::back()->withErrors(['email' => $errorMessage]);
        }

    }
}