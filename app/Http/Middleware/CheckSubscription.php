<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Payments;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class CheckSubscription
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $userID = Auth::user()->id;
        $currentTime = Carbon::now()->timestamp;

        $sub = false;

        $payment = Payments::where('user_id', $userID)->get();

        foreach ($payment as $payment) {

            // Log::info($payment->success);
            // Log::info($payment->expired);
            // Log::info($currentTime);

            // update if expired
            if ($payment->success === 1 && $payment->expired < $currentTime && $payment->has_expired != 1) {
            $payments = Payments::where('reference', $payment->reference)
            ->update([
            'has_expired' => 1,
            ]);
            }

            // check for recent payment
            if ($payment->success === 1 && $payment->expired >= $currentTime) {
                $sub = true;
            }
        }
        
        if ($sub === false) {
            return redirect()->route('payments.pricing')->withErrors(['errors' => "you are not subscribed, Please subscribe to use our services"]);
        }

        return $next($request);
    }
}