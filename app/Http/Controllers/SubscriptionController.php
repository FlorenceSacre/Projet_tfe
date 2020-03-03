<?php

namespace App\Http\Controllers;

use App\Models\Subscriptions;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class SubscriptionController extends Controller
{
     public function __invoke() {
        request()->validate([
            'stripeToken' => ['required'],
            'amount' => ['required', Rule::in([5,12,25])],
            'email' => ['required', 'email'],
            'street' => ['required'],
            'postcode' => ['required'],
            'city' => ['required'],
            'country' => ['required']
        ]);

        \Stripe\Stripe::setApiKey(config('services.stripe.secret'));

        $customer = \Stripe\Customer::create([
            'source' => request('stripeToken'),
            'name' => request('name'),
            'email' => request('email'),
        ]);

        \Stripe\Subscription::create([
            'customer' => $customer->id,
            'items' => [['plan' => request('amount')]],
        ]);

        $subscription = Subscriptions::create([
            'stripe_id' => $customer->id,
            'email' => request('email'),
            'name' => request('name'),
            'amount' => request('amount'),
            'street' => request('street'),
            'postcode' => request('postcode'),
            'city' => request('city'),
            'country' => request('country'),
            'unsubscription_token' => Str::random(),
        ]);

        $subscription->sendMeAnEmail();

        dd($customer, $subscription);
    }
}
