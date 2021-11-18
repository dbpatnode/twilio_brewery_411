<?php
require __DIR__ . '/vendor/autoload.php';
use Twilio\TwiML\VoiceResponse;

// Start our TwiML response
$response = new VoiceResponse;

// Read a message aloud to the caller
$response->say(
    "Thank you for calling Daniels Brewery Helpline! Working on finding a beer near you.", 
    array("voice" => "alice")
);

echo $response;