To get started:

unsure PHP and composer are installed by running in your terminal:

```php --version```<br>
```composer --version```
<br>
<br>

If neither or one is not installed, follow install instructions here:<br>
<a href= "https://www.php.net/manual/en/install.php">PHP Installation instructions</a><br>
<a href= "https://getcomposer.org/download/">Composer Installation instructions</a>
<br>
<br>

Then Create a Twilio Account here:<br> <a href="https://www.twilio.com/try-twilio"> Twilio sign up </a>
<br>
<br>
Once PHP and composer are installed run, to add Twilio helper library:<br>
```composer require twilio/sdk```

then run: ```composer require vlucas/phpdotenv``` and add a .env file to the root level of your project. 
<br>
<br>

An example of what the structure of the .env file should look like is locacted in the ```.env.example``` file.

Copy .env.example over to .env and change out TWILIO_ACCOUNT_SID and TWILIO_AUTH_TOKEN for the auth token and account sid found under the account->general settings tab on your <a href ="https://console.twilio.com/">Twilio console</a># twilio_brewery_411
