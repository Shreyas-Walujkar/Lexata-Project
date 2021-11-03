<?php
class Openai{
    private function secret_key(){
        return $secret_key = '';
    }

   
    public function search($engine, $file, $query){ 

        $request_body = [
        "max_tokens" => 10,
        "temperature" => 0.7,
        "top_p" => 1,
        "presence_penalty" => 0.75,
        "frequency_penalty"=> 0.75,
        "file" => $file,
        "query" => $query,
	"return_metadata"=> True
        ];

        $postfields = json_encode($request_body);
        $curl = curl_init();
        curl_setopt_array($curl, [
        CURLOPT_URL => "https://api.openai.com/v1/engines/" . $engine . "/search",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $postfields,
        CURLOPT_HTTPHEADER => [
            'Content-Type: application/json',
            'Authorization: ' . $this->secret_key()
        ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "Error #:" . $err;
        } else {        


            		 // to handle the error - when no $response is null
			//echo $response;

			//$decoded_errmsg = json_decode($response);
			//$property_name = 'type';
			//$property = 'error';
			//echo $decoded_errmsg->$property->$property_name;

				
			// check to display if the response is null
			//if(json_decode($response)->$property->$property_name == "invalid_request_error")
			{
				
				//echo "No results Retrieved";
			}
			
			//else{
			
			$decoded = json_decode($response);

			// for loop to display each postid
			echo "Displaying each postid";
			echo "<br>";
			for ($x = 0; $x <= 5; $x++) {
			echo ($decoded->data[$x]->metadata);
			echo "<br>";
			}

			//}
			
			
        }

    }

}

?>