<?php
$url = "https://example.com/";
//^^^^^^^^^the url^^^^^^^
$pattern = "/<title>(.*?)<\/title>/i"; 
$opts = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3\r\n"  
  )
);
$context = stream_context_create($opts);
$content = file_get_contents($url,false,$context);
preg_match_all($pattern, $content, $matches);
print_r($matches[1]);
$ip = gethostbyname(parse_url($url, PHP_URL_HOST)); 
echo "Server IP address: $ip"; 
?>
