<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Mail;
use App\Mail\ContactMail;
use Stripe;
use Charge;

class MainController extends Controller
{
    function index(){
        return view('front.index');
    }
    function stripePayment(Request $request){
      // dd($request);
         Stripe\Stripe::setApiKey('sk_test_51LxpoiIHIgjMjhjeZEu5V8poG3suICL7K5t3WO2Pu4qozcv396J7EHFugZaGH4nDVlfLu4SXfIS4mNtS0EMtyGfB003FVtPnGQ');

        // Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

  

        $customer = Stripe\Customer::create(array(
                "email" => $request->email,
                "name" => $request->name,
                "source" => $request->stripeToken
    
             ));
            //  dd($customer);
            //  $stripe = new \Stripe\StripeClient(
            //   'sk_test_51LxpoiIHIgjMjhjeZEu5V8poG3suICL7K5t3WO2Pu4qozcv396J7EHFugZaGH4nDVlfLu4SXfIS4mNtS0EMtyGfB003FVtPnGQ'
            // );
            // $stripe->plans->create([
            //   'amount' => ($request->amount )*100,
            //   'currency' => 'usd',
            //   'interval' => $request->type,
            //   'product' => $request->package,
            // ]);
            // $stripe = new \Stripe\StripeClient(
            //   'sk_test_51LxpoiIHIgjMjhjeZEu5V8poG3suICL7K5t3WO2Pu4qozcv396J7EHFugZaGH4nDVlfLu4SXfIS4mNtS0EMtyGfB003FVtPnGQ'
            // );
            // $stripe->subscriptionItems->create([
            //   'subscription' => $request->package,
            //   'price' => $request->price,
            //   'quantity' => $request->type
            // ]);
          
      
    
             Stripe\Charge::create ([

                "amount" => ($request->amount )*100,
    
                "currency" => "usd",
    
                "customer" => $customer->id,
    
                "description" => "Test payment from FOX",
    
                "shipping" => [
    
                  "name" => $request->name,
    
                  "address" => [
    
                    "line1" => "Dhaka",
    
                    "postal_code" => "360001",

                    "city" => "Mohammadpur",

                    "state" => "Dhaka",

                    "country" => "Bangladesh",
    
                  ],
    
                ]
    
        ]); 
    
        $stripe = new \Stripe\StripeClient(
          'sk_test_51LxpoiIHIgjMjhjeZEu5V8poG3suICL7K5t3WO2Pu4qozcv396J7EHFugZaGH4nDVlfLu4SXfIS4mNtS0EMtyGfB003FVtPnGQ'
        );
        $stripe->subscriptions->create([
          // 'customer_id'=>,
          'customer' => $customer->id,
          'items' => [
            ['price' => $request->price],
          ],
        ]);
    
      
    
               
    
        return back()->with('status','Your Payment has been successfull!');
        
    }

    function PrivacyPolicy(){
      return view('front.PrivacyPolicy');
    }
    function terms(){
      return view('front.terms');
    }
    function sendMail(Request $request){
      $subject = $request->title;
      $email = $request->email;
      $details = [
        'name' => $request->name,
        'title' => $request->title,
        'body' => $request->body,
        'email' => $request->email,
        ];
        \Mail::to('support@searchconsolesheet.com')->send(new \App\Mail\ContactMail($details));
        return back()->with('message','Message has been send successfully');
    }
    function contact(){
      return view('front.contact');
    }
}
