<?php
// Set headers to allow cross-origin access
header("Access-Control-Allow-Origin: *"); 
header("Content-Type: text/html"); 

// URL of the target site
$url = 'https://cancerimagingarchive.net/datascope/TCGA_TilMap/';

// Make sure the page is fetched properly
$options = [
    "http" => [
        "header" => "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36\r\n"
    ]
];

// Create context with the custom header
$context = stream_context_create($options);

// Fetch the target page content
$html = file_get_contents($url, false, $context);

// If the fetching fails, show an error
if ($html === false) {
    die('Unable to fetch content. The server may have restrictions.');
}

// Display the content of the target page
echo $html;
?>
