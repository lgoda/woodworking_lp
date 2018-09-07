<html>
<body>


Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>
<?php
function getRealUserIp(){
    switch(true){
      case (!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
      case (!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
      case (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
      default : return $_SERVER['REMOTE_ADDR'];
    }
 }

$ip = getRealUserIp();

$ipstacAPIKey = "568f83ee188c86b445c647d37cf38dac";

$url = "http://api.ipstack.com/".$ip."?access_key=".$ipstacAPIKey."&format=1";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$response = curl_exec($ch);
curl_close($ch);
$response = json_decode($response);
$city  = $response->city; //You can get all the details like longitude,latitude from the $response .
$country = $response->country_name;
//API Url
$url = 'https://api.getresponse.com/v3/contacts';

//Initiate cURL.
$ch = curl_init($url);


//The JSON data.
$jsonData = array(
    'name' => $_POST["name"],
    'email' => $_POST["email"],
    'dayOfCycle' => 0,
    'campaign' => array('campaignId' => '6t6tP'),
    'ipAddress' => $ip,
    'customFieldValues' => array(
      array(
        'customFieldId' => 'UbCmR',
        'value' => array($city)
      ),
      array(
        'customFieldId' => 'UbClJ',
        'value' => array($country)
      ),
      array(
        'customFieldId' => '1tQMF',
        'value' => array('none')
      )
    )
);



//Encode the array into JSON.
$jsonDataEncoded = json_encode($jsonData);

//Tell cURL that we want to send a POST request.
curl_setopt($ch, CURLOPT_POST, 1);

//Attach our encoded JSON string to the POST fields.
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);

 $headers = array(
    'Content-Type: application/json',
    'X-Auth-Token: api-key 58494894c4e87db9f0748ee7ff3584aa'
);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

//Set the content type to application/json
//curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

//Execute the request
$result = curl_exec($ch);
echo $jsonDataEncoded;
echo $result;
echo $ip;
echo $city;
echo $country;
header("Location: http://track.woodtask.com/signup");
exit;
?>
</body>
</html>
