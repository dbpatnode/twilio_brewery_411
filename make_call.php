
<?php

require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;

$account_sid = $TWILIO_ACCOUNT_SID;
$auth_token = $TWILIO_AUTH_TOKEN;

// A Twilio number you own with Voice capabilities
$twilio_number = "+12063851928";

// Where to make a voice call (your cell phone?)
$to_number = "+12063888618";

$client = new Client($account_sid, $auth_token);
$client->account->calls->create(  
    $to_number,
    $twilio_number,
    array(
        "url" => "http://demo.twilio.com/docs/voice.xml"
    )
);