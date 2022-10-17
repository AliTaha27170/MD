<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
   public function update ($key='')
   {
    $customers = Customer::where("added_to_user_col",0)->get();

    foreach ($customers as $customer ) {
        $user = User::where("email",$customer->email)->get();
        if(count($user))
        {
            $user->first()->update(
                [
                    "email"   => $customer->email ,
                    "password"=>  Hash::make($customer->password)
                ]
                );
        }
        else
        {
            User::create(
                [
                    "name"   => $customer->name ,
                    "email"   => $customer->email ,
                    "password"=>  Hash::make($customer->password)
                ]
                );
        }

        $customer->update(["added_to_user_col" => 1]);

    }
    if($key=="login")
    {
        return redirect('/admin/login');
    }
    else{
        return redirect('/admin/customers');
    }
   }
}
