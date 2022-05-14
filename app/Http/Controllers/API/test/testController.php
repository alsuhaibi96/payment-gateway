<?php

namespace App\Http\Controllers\api\test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Route;


class testController extends Controller
{
  /**
   * This function is used to show the success page with the amount and the other details
   */
public function showTest(){
   $info = Route::current()->parameter('info');
  
    // $data=json_decode($info);
    $data= base64_decode($info);

     $data =json_decode($data,true);


      for($i=0;$i<count($data);$i++){
          $status=array_column($data,'status');
          $paid_amount=array_column($data,'paid_amount');
          $card_holder=array_column($data,'card_holder');
          $card_type= array_column($data,'card_type');
          $created_at=array_column($data,'created_at');
          $updated_at=array_column($data,'updated_at');


      }
      $card_type=str_replace('+',' ',$card_type[0]);
      $card_holder=str_replace('+',' ',$card_holder[0]);

      
return view('paymentView.testResponse',compact('paid_amount','status','card_holder','card_type','created_at'));
}

/**
   * This function is used to show the cancel page with
   * @param cancel 
   */
public function testCancel(){

  $cancel = Route::current()->parameter('cancel');

  // return $cancel;
  return view('paymentView.cancel_payment',compact('cancel'));

}

public function viewCancel(){

 
  return view('paymentView.cancel_payment');

}


/**
 * The index function which is used for posting the data to the api
 */
    public function index(){
        $data = [
            "order_reference" => "123412",
            
            "products" => [
              array(
                "id" => 1,
                "product_name" => "charger",
                "quantity" => 1,
                "unit_amount" => 1000
              ),
              array(
                "id" => 5,
                "product_name" => "mobile phone galexy s-9",
                "quantity" => 2,
                "unit_amount" => 100000
              ),
              array(
                "id" => 6,
                "product_name" => "i-phone headphones",
                "quantity" => 5,
                "unit_amount" => 10000
              )
            ], "currency" => "YER",
            "total_amount" => 111000,
            "success_url" => "http://127.0.0.1:8000/test/response",
            "cancel_url" => "http://127.0.0.1:8000/test/cancel",
            "metadata" => [
              "Customer name" => "somename",
              "order id" => 0
            ]
      
          ];
      
      
      
      
          $curl = curl_init();
      
          curl_setopt_array($curl, array(
            CURLOPT_URL => "https://waslpayment.com/api/test/merchant/payment_order",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30000,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($data),
      
            CURLOPT_HTTPHEADER => array(
           
              "private-key: rRQ26GcsZzoEhbrP2HZvLYDbn9C9et",
              "public-key: HGvTMLDssJghr9tlN9gr4DVYt0qyBy",
              "Content-Type:  application/x-www-form-urlencoded"
      
      
            ),
          ));
      
          $response = curl_exec($curl);
          $err = curl_error($curl);
      
          curl_close($curl);
      
          if ($err) {
            echo " Error #:" . $err;
          } else {
            echo $response;
        
      
          }
      
    }
}