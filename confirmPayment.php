<!-- 

-- Developed by Nnaemeka Nweke.
-- I am a software engineer open for freelance work.
-- You can reach on Twitter @codegenty
-- I am also avalibale on linkedin // https://www.linkedin.com/in/nnaemekanweke
-- My email address nnaemeka.nweke2@gmail.com

-->


	<?php

   //Get payment status passed to URL
	if(isset($_GET['status']))
	{
		// Redirect to homepage if transaction is cancelled
       if($_GET['status'] === 'cancelled'){
           
           header('Location: /index.php');
       }
       elseif($_GET['status'] === 'successful')
		{
            // Store transaction ID in a variable
			$txid = $_GET['transaction_id'];

            $curl = curl_init();

			curl_setopt_array($curl, array(
			CURLOPT_URL => "https://api.flutterwave.com/v3/transactions/{$txid}/verify", // Pass transaction ID for validation
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => array(
			"Content-Type: application/json",
			'Authorization: Bearer {SECRETE_KEY}', //Get your Secrete key from flutterwave dashboard.
			),
			));

			$response = curl_exec($curl);

			curl_close($curl);

			// echo  '<pre>';
			// echo $response;
			// echo '</pre>';

			$res = json_decode($response);

            // Confirm status is 'success'
			if ($res->status === 'success') {
				
				//Store transaction amount and amount charged to array for further validation
				$amountPaid = $res->data->charged_amount;
				$amountToPay = $res->data->meta->price;

                // Checking amount paid is actually higher or equal to amount paid
				if($amountPaid >= $amountToPay) {

					echo "Payment successful";
				}
				else{

					 echo "Fraudulent transaction";
				}
			}
			else
			{
               echo "Can not process payment";
			}


		}
	}

?>
