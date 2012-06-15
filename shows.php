<?
//set POST variables
$url = 'http://rss.hulu.com/HuluPopularVideosThisWeek?format=xml';

//open connection
$ch = curl_init();

curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);


//execute post
$result = curl_exec($ch);

echo $_GET['json'] . "(" . json_encode(simplexml_load_string($result)) . ");";

//close connection
curl_close($ch);
