<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\HelperServiceProvider as helper;

class RoutingController extends Controller
{
    //

    private $aes_key = '3edf567hgfd345gr56jhbvfer4dfg567';
    private $iv = '1287594054376367';
    
    
    public function index(){
        //  echo '{"client_id":"6910"}';
        //  exit;

        $parameter = json_encode(array(
            'client_id'=>'6910'
        ));

        $ch = curl_init('https://mesjidapi.unibroomindonesia.com/v1/allinstansi'); 

        // curl_setopt($ch, CURLOPT_URL, "https://mesjidapi.unibroomindonesia.com/v1/allinstansi"); 
        // curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $parameter);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        // Return response instead of outputting
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        // Execute the POST request
        $result = curl_exec($ch);
        
        curl_close ($ch);
        
      
        $objRes = json_decode($result);


        // if($result !== false) {
        //     echo '<p class="response2">'.$result.'</p>';
        //     $response = $result;

        // }else{
            
        // }
        $variabelView=[
            'jumlah_masjid'=>$objRes->data->datas_count
        ];
        // echo json_encode($variabelView);
        // exit;

        return view('parts/main', $variabelView);

 

        

    }
    public function saldo(){

        $parameter = json_encode(array(
            'client_id'=>'6910'
        ));

        $ch = curl_init('https://mesjidapi.unibroomindonesia.com/v1/allinstansi'); 

        // curl_setopt($ch, CURLOPT_URL, "https://mesjidapi.unibroomindonesia.com/v1/allinstansi"); 
        // curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $parameter);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        // Return response instead of outputting
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        // Execute the POST request
        $result = curl_exec($ch);
        
        curl_close ($ch);
        
      
        $objRes = json_decode($result);


        // if($result !== false) {
        //     echo '<p class="response2">'.$result.'</p>';
        //     $response = $result;

        // }else{
            
        // }

        //echo json_encode($objRes->data->datas_detail);
        foreach ($objRes->data->datas_detail as $dt){
            // echo \Helper::decrypt_aes($dt->id);
            $dt->id = \Helper::decrypt_aes($dt->id,$this->aes_key,$this->iv);
        }


        // echo json_encode($objRes->data->datas_detail);
        // exit;
        $variabelView=[
            'jumlah_masjid'=>$objRes->data->datas_count,
            'all_data'=>$objRes->data->datas_detail
        ];



        return view('parts/saldo',  $variabelView);

    }
    public function detailSaldo($id){
        //echo $id;

        return view('parts/detailsaldo');
        exit;
        $parameter = json_encode(array(
            'client_id'=>'6910'
            
        ));

        $ch = curl_init('https://mesjidapi.unibroomindonesia.com/v1/allinstansi'); 

        // curl_setopt($ch, CURLOPT_URL, "https://mesjidapi.unibroomindonesia.com/v1/allinstansi"); 
        // curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $parameter);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        // Return response instead of outputting
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        // Execute the POST request
        $result = curl_exec($ch);
        
        curl_close ($ch);
        
      
        $objRes = json_decode($result);


        // if($result !== false) {
        //     echo '<p class="response2">'.$result.'</p>';
        //     $response = $result;

        // }else{
            
        // }

        //echo json_encode($objRes->data->datas_detail);
        foreach ($objRes->data->datas_detail as $dt){

            $dt->id = $this->decrypt_aes($dt->id,$this->aes_key,$this->iv);
        }


        // echo json_encode($objRes->data->datas_detail);
        // exit;
        $variabelView=[
            'jumlah_masjid'=>$objRes->data->datas_count,
            'all_data'=>$objRes->data->datas_detail
        ];



        return view('parts/saldo',  $variabelView);

    }







    

    function decrypt_aes($ivCiphertextB64, $key = '', $iv = '')
	{

		$ivCiphertext  = base64_decode($ivCiphertextB64);
		// print_r($ivCiphertext);
		// echo '</br>';
		// exit;
		// $ciphertext = substr($ivCiphertext, 16);
		$decryptedData = openssl_decrypt($ivCiphertext, "aes-256-cbc", $key, OPENSSL_RAW_DATA, $iv);
		return $decryptedData;
	}

	function encrypt_aes($plaintext, $key, $iv)
	{
		$ciphertext = openssl_encrypt($plaintext, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);
		$ivCiphertext = $ciphertext;
		$ivCiphertextB64 = base64_encode($ivCiphertext);
		return $ivCiphertextB64;
	}
}
