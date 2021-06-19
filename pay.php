<!-- 

-- Developed by Nnaemeka Nweke.
-- I am a software engineer open for freelance work.
-- You can reach on Twitter @codegenty
-- I am also avalibale on linkedin // https://www.linkedin.com/in/nnaemekanweke
-- My email address nnaemeka.nweke2@gmail.com

-->


<?php

   // Get form data from the frontend
	if(isset($_POST['pay']))
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$plan = $_POST['options'];


	//Payment processor parameters
		$request = [
		   "tx_ref" => 'FLW |'.time(),
		   "amount" => $plan,
		   "currency" =>"NGN",
		   "redirect_url" =>"http://localhost:5000/confirmPayment.php",
		   "payment_options" =>"card,banktransfer",
		   "meta" =>[
		      "consumer_id" =>23,
		      "consumer_mac" =>"92a3-912ba-1192a",
		      "price" => $plan
		   ],
		   "customer" =>[
		      "email" => $email,
		      "phone_number" =>"080****4528",
		      "name" => $name
		   ],
		   "customizations" =>[
		      "title" => "Pied Piper Payments",
		      "description" => "Middleout isn't free. Pay the price",
		      "logo" => "https://th.bing.com/th/id/R32be9fd5280ac7a66de9032638beb97b?rik=14frGejks3IxYw&pid=ImgRaw"
		   ]
		];

	}

    // Send payment to flutterwave for processing
	$curl = curl_init();

	curl_setopt_array($curl, array(
	CURLOPT_URL => 'https://api.flutterwave.com/v3/payments',
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => '',
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 0,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => 'POST',
	CURLOPT_POSTFIELDS => json_encode($request),
	CURLOPT_HTTPHEADER => array(
	   'Authorization: Bearer {SECRETE_KEY}', //Get your Secrete key from flutterwave dashboard.
	   'Content-Type: application/json'
  	  ),

    ));

	$response = curl_exec($curl);

	// echo  '<pre>';
	// echo $response;
	// echo '</pre>';

	curl_close($curl);

	$res = json_decode($response);

    // Redirect to payment validation
	if ($res->status === 'success') {
		
		$link = $res->data->link;
		header('Location: '.$link);
	}
	else{

		echo "We can't process your payment";
	 }


?>