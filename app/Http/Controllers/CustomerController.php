<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function CustomerPage(Request $request){
        $user_id=$request->header('id');
        $data =  Customer::where('user_id',$user_id)->get();
        return view('pages.dashboard.customer.customer-page',compact('data'));
    }

    function CustomerCreate(Request $request){
        $user_id=$request->header('id');
        return Customer::create([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'mobile'=>$request->input('mobile'),
            'user_id'=>$user_id
        ]);
    }
    function CustomeryByID(Request $request,$id){
        $customer_id= $id;
        $user_id=$request->header('id');
        $data =  Customer::where('id',$customer_id)->where('user_id',$user_id)->first();
        return view("pages.dashboard.customer.customer-edit",compact('data'));
    }

    function CustomerUpdate(Request $request, $id){
        $customer_id = $id;
        $user_id = $request->header('id');
        $result = Customer::where('id', $customer_id)->where('user_id', $user_id)->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'mobile' => $request->input('mobile'),
        ]);

        if ($result) {
            return redirect('/customerPage')->with('success', 'Customer updated successfully!');
        } else {
            return redirect('/customerPage')->with('error', 'Failed to update Customer.');
        }
    }

    function CustomerDelete(Request $request, $id){
        $customer_id = $id;
        $user_id = $request->header('id');
        $result =  Customer::where('id', $customer_id)->where('user_id', $user_id)->delete();

        if ($result) {
            return redirect('/customerPage')->with('success', 'Category deleted successfully!');
        } else {
            return redirect('/customerPage')->with('error', 'Failed to delete category.');
        }
    }


}
