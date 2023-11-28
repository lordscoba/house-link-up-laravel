<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Payments;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class HasSubscription
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

        $has_processing = false;



        $payment = Payments::where('user_id', $userID)->get();

        foreach ($payment as $payment) {
            
        // check for recent payment
        if ($payment->success === 1 && $payment->expired >= $currentTime) {
            $sub = true;
        }

        // check for processing payment
        if ($payment->processing === 1 ) {
            $has_processing = true;
        }
        }

        if ($sub === true) {
            return back()->withErrors(['errors' => "you are already subscribed, You can continue using our services till your subscription expires"]);
        }

        if ($has_processing === true) {
            return back()->withErrors(['errors' => "you have a processing subscription, Got to your list of subscriptions to continue from where you left off"]);
        }

        return $next($request);
    }
}