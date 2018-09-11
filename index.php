<?php 
require 'vendor/autoload.php'; 
use  App\VerifyBot;
use App\ReceivedMessage;
use App\SendMessage;

require 'cloudinary/Cloudinary.php';
require 'cloudinary/Uploader.php';
require 'cloudinary/Api.php';



$verifyBot = new VerifyBot();
\Cloudinary::config(array( 
  "cloud_name" => "my4immobile", 
  "api_key" => "943586383896581", 
  "api_secret" => "-8hvTxkLkhMz4hN_Wi0WFAfGAl8" 
));

 
$input = json_decode(file_get_contents('php://input'), true);


$receivedMessage = new ReceivedMessage($input);
$sendMessage = new SendMessage($input);

 
if(!empty($receivedMessage->textMessage)) {   
     $sendMessage->text("hello coder");
    
}
 
if($receivedMessage->attachmentType === "image") {
		
	
   $imageProperties = \Cloudinary\Uploader::upload($receivedMessage->attachmentURL,array("resource_type" => "image"));
   $imageUploadURL =$imageProperties['secure_url'];
   $sendMessage->text($imageUploadURL);
			   		 
}else{   
     $sendMessage->text("I was born to handle images, please send me one. ):");
    
}



 
