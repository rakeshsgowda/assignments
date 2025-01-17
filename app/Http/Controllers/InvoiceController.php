<?php
namespace App\Http\Controllers;
use App\Models\Invoice;
use App\Models\Items;
use Illuminate\Routing\Controller;
use App\Models\User;
use App\Models\Address;

class InvoiceController extends Controller{
    
    function get_data() {
        $result= Invoice::get();
        return view('invoice',['invoices'=>$result]);
    }
    function view_data($id) {
        $result= Invoice::where('invoice_no',$id)->get();
        if(!$result->isEmpty()){
            $result[0]['items']= Items::where('invoice_id',$id)->get();
            $user= User::where('id',$result[0]->user_id)->get();
            $address = Address::where('user_id',$result[0]->user_id)->get();
            $result[0]['user']=$user[0];
            $result[0]['address']=$address[0];
            if(Invoice::where('invoice_no',$id)->update(['status' =>"success"])){
                $result[0]['status']="success";
            }
            $result=$result[0];
        }else{
            $result=array();
        }
        return view('invoiceView',['invoice'=>$result]);
    }
}