<?php
// DOCS: https://www.php.net/manual/en/function.stream-context-create.php


// Open the file using the HTTP headers set above
// DOCS: https://www.php.net/manual/en/function.file-get-contents.php
/*$opts = [
    "http" => [
        "method" => "GET",
        "header" => "Content-Type: text/html,application/json\r\n" .
    ]
];
$context = stream_context_create($opts);
*/
Header('Content-Type: application/json');
$api_url='https://api.tracker.gg/api/v2/valorant/standard/matches/riot/7AM%20FakeAnanas%23TTV?type=competitive';

$json_data = file_get_contents($api_url);
$json_response = json_decode($json_data);

echo json_encode($json_response);

?>


