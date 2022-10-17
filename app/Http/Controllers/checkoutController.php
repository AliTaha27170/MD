<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\User;
use App\OrderItem;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class checkoutController extends Controller
{

    


    public function checkout(Request $request)
    {
     
        // $this->validate(
        //    $request , [ 
        //     "product" => "required" ,
        //     "qty"     => "required" ,

        //     "name"     => "required" ,
        //     "address"     => "required" ,
        //     "state"     => "required" ,
        //     "zip_Code"     => "required" ,
        //     "telephone"     => "required" ,
        //     "email"     => "required" ,

        //    ]);

        if(Auth::check())
        {
            $user = Customer::where("email",Auth::user()->email)->get()->first();

            if((auth()->user()->role_id ==1))
                $user = User::find(auth()->user()->id) ;

              
            $request["email"] = $user->email ;
            $request["telephone"] = $user->phone ;
            $request["zip_Code"] = $user->zip_code ;
            $request["state"] = $user->state;
            $request["address"] = $user->address ;
            $request["fax"] = $user->name ;
            $request["name"] = $user->name ;

         
        }


     $check_email = User::where("email",$request['email'])->get()->first();
     $user        =  null ;


            $past = time() - 3600;
        foreach ( $_COOKIE as $key => $value )
        {
            setcookie( $key, $value, $past, '/' );
        }

        if(!Auth::check())
        {

     setcookie("name",  $request['name'] , time() + (86400 * 365), "/");
     setcookie("company",  $request['company'] , time() + (86400 * 365), "/");
     setcookie("address",  $request['address'] , time() + (86400 * 365), "/");
     setcookie("city",  $request['city'] , time() + (86400 * 365), "/");
     setcookie("state",  $request['state'] , time() + (86400 * 365), "/");
     setcookie("zip_Code",  $request['zip_Code'] , time() + (86400 * 365), "/");
     setcookie("telephone",  $request['telephone'] , time() + (86400 * 365), "/");
     setcookie("fax",  $request['fax'] , time() + (86400 * 365), "/");
     setcookie("email",  $request['email'] , time() + (86400 * 365), "/");
     setcookie("copy",  $request['copy'] , time() + (86400 * 365), "/");
    }

     if(!isset($check_email))
     {
        $user = User::create([
            "name"     =>   $request['name'],
            "company"  =>   $request['company'],
            "address"  =>   $request['address'],
            "city"     =>   $request['city'],
            "state"    =>   $request['state'],
            "zip_Code" =>   $request['zip_code'],
            "phone"    =>   $request['telephone'],
            "fax"      =>   $request['fax'],
            "email"    =>   $request['email'],
            // "comments" =>   $request['comments'],

        ]);

        $customer = Customer::create([
            "name"     =>   $request['name'],
            "company"  =>   $request['company'],
            "address"  =>   $request['address'],
            "city"     =>   $request['city'],
            "state"    =>   $request['state'],
            "zip_Code" =>   $request['zip_Code'],
            "phone"    =>   $request['telephone'],
            "fax"      =>   $request['fax'],
            "email"    =>   $request['email'],

        ]);

     }
     else
        $user        =  $check_email ;

       

        $order = Order::create([
            "user_id"  => $user->id ,
            "name"     =>   $request['name'],
            "company"  =>   $request['company'],
            "address"  =>   $request['address'],
            "city"     =>   $request['city'],
            "state"    =>   $request['state'],
            "zip_Code" =>   $request['zip_Code'],
            "telephone"=>   $request['telephone'],
            "fax"      =>   $request['fax'],
            "email"    =>   $request['email'],
            "comments" =>   $request['comments'],
            "cart_table"    =>   $request['table'],
        ]);

        $key =0 ;

        foreach ($request["product"] as $item) {
            $product = Product::find($item);
            
            OrderItem::create([
                "order_id"   => $order->id,
                "product_id" => $item ,
                "code"       => $product->ItemID ,
                "name"       => $product->ItemName ,
                "quantity"   => $request["qty"][$key++] ,
            ]);
            
        }

        // return redirect()->back()->with('success', 'your message,here');   
        $data =
        [
            "subject"   =>  'New Order | MD' . $order->id ,
            "msg"       => $request["table"],
            "address"   => $request["address"],
            "state"     => $request["state"],
            "zip_code"  => $request["zip_code"],
            "customer"  => $request["name"],
            "telephone" => $request["telephone"],
            "email"     => $request["email"]
        ];

    try {
        //Customer
        Mail::send('email.send', $data, function ($message) use ($data) {
            $message->to($data["email"])->subject($data['subject']);
            $message->from('OnlineOrders@mdgoods.com', 'MDGoods');
        });

        //Admin
        Mail::send('email.send_admin', $data, function ($message) use ($data) {
            $message->to('info@mdgoods.com')->subject($data['subject']);
            $message->from('OnlineOrders@mdgoods.com', 'MDGoods');
        });

    } catch (\Throwable $th) {
        //throw $th;
    }



        return redirect()->back()->with("msg" , "Your request has been received, we will contact you as soon as possible");

        $info = array(
            'name' => "Alex"
        );
        Mail::send(['text' => 'mail'], $info, function ($message)
        {
            $message->to([], 'W3SCHOOLS')
                ->subject('Basic test eMail from W3schools.');
            $message->from('sender@example.com', 'Alex');
        });

     
}

}
