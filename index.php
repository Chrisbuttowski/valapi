<?php
Header('Content-Type: application/json');
$api_url='https://api.tracker.gg/api/v2/valorant/standard/matches/riot/7AM%20FakeAnanas%23TTV?type=competitive';

$json_data = file_get_contents($api_url);
$json_response = json_decode($json_data);

echo json_encode($json_response);

?>
