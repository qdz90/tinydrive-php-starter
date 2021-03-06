<?php
$config = array();

// Replace this with your api key from the "API Key Manager" at the tiny.cloud account page
$config["apiKey"] = "your-api-key";

// Replace the contents of the private.key file with the one from the "JWT Key Manager" at the tiny.cloud account page
$config['privateKeyFile'] = "./private.key";

// This is the fake database that the login authenticates against
$config["users"] = [
  ["username" => "johndoe", "password" => "password", "fullname" => "John Doe"],
  ["username" => "janedoe", "password" => "password", "fullname" => "Jane Doe"]
];

// If this is enabled the root of Tiny Drive will be within a directory named as the user login
$config["scopeUser"] = false;
