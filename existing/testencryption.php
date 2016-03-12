<?php

$enteredpassword = 'testsvt';
$decodedpassword = crypt($enteredpassword,'dddffggg');
//$decodedpassword = crypt($enteredpassword,'$1$mK4.615.$/wHpOokys3jl.');
echo $decodedpassword;


 $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
    $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
    $key = "This is a very secret key";
    echo  mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key, $text, MCRYPT_MODE_ECB, $iv);

	

?> 
	
	