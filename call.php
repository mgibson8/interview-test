<?php

//Load Twilio Library
require_once('/includes/twilio-php/Services/Twilio.php');

// Set path to CSV file
$csvFile = 'numbers.csv';
//Read CSV into array
$csv = array_map('str_getcsv', file($csvFile));

//Iterate through the array of contacts and make the calls
function makeCall($contacts){
	foreach($contacts as $contact){
		$number = $contact[0];
		$name = $contact[1];

		$sid = "ACf9a3cac612205e7484316faf2f5cede4"; 
		$token = "6340f97d97d98dd1ec2613e344c4a6e6"; 
		$client = new Services_Twilio($sid, $token);
		
		try{
			$call = $client->account->calls->create("+442033221257", $number, "http://demo.twilio.com/docs/voice.xml", array());
			echo 'Call placed to ' . $name . '... ID:' . $call->sid . '<br>';
			echo 'Status: ' . $call->status . '<br>';
		} catch (Exception $e) {
			echo 'Error: ' . $e->getMessage();
		}
	}
}

makeCall($csv);

?>