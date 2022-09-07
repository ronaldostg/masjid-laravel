<?php
namespace App\Helpers;

class Helper{

  


    public function __construct($aes_key, $iv)
    {
 

        $this->aes_key = $aes_key;
        $this->iv = $iv;

    } 
    

    public function decrypt_aes($ivCiphertextB64)
	{

        // return $ivCiphertextB64;
        // exit;

		$ivCiphertext  = base64_decode($ivCiphertextB64);
		// print_r($ivCiphertext);
		// echo '</br>';
		// exit;
		// $ciphertext = substr($ivCiphertext, 16);
		// $decryptedData = openssl_decrypt($ivCiphertext, "aes-256-cbc", $key, OPENSSL_RAW_DATA, $iv);
		$decryptedData = openssl_decrypt($ivCiphertext, "aes-256-cbc", env("KEY_AES"), OPENSSL_RAW_DATA, env("IV_AES"));
		return $decryptedData;
	}

	public function encrypt_aes($plaintext, $key, $iv)
	{
		$ciphertext = openssl_encrypt($plaintext, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);
		$ivCiphertext = $ciphertext;
		$ivCiphertextB64 = base64_encode($ivCiphertext);
		return $ivCiphertextB64;
	}
}


?>