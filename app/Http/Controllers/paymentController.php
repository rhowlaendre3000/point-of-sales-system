<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paymentController extends Controller
{
    //
    public function index(){
        return view('payment');
    }


    public function acceptpayment(Request $request){

    if($request->has('btn-signup')){
      


//for converting float to minor amounts
    
    
        //for converting minor to float amount
   
    
    //for converting float to minor amounts
  
    
    
    //for generating new transaction id each time a new transaction in initiated
    
        $amount = floatToMinor($request->input('price'));
        $email  = $request->input('email');


        $payload = json_encode(["merchant_id"=>"TTM-00000127", "transaction_id"=>genTransactionID(),
            "desc"=>"Payment Using Checkout Page", "amount"=>$amount,
            "redirect_url"=>"https://3etechinn.com", "email"=>$email]);
    
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://test.theteller.net/checkout/initiate",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $payload,
            CURLOPT_HTTPHEADER => array(
                "Authorization: Basic ".base64_encode("3e-technologies5bc49c2b808cd:ZTlmMWI4MmEzOTVlZTZlYzE1MjdmN2EyZmJkNGEyMGE="),
                // "Authorization: Basic base64_encode('3e-technologies5bc49c2b808cd:ZTlmMWI4MmEzOTVlZTZlYzE1MjdmN2EyZmJkNGEyMGE=')",
                "Cache-Control: no-cache",
                "Content-Type: application/json"
            ),
        ));
    
        $response = curl_exec($curl);
        $err = curl_error($curl);
        var_dump($response);
        curl_close($curl);
    
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            //echo $response;
    
            $results=json_decode($response);
    //  echo $results->checkout_url;
           if ($results->code=='200'){
               $redirect = $results->checkout_url;
               //header("Location: $redirect");
               return redirect()->to($redirect);
           }
    
        }
    }
    
}  
}
?>


