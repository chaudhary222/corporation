<?php
$access_token = '1525816170.72745c5.87f6f7a30b544c3593d1f3a45482e001';
$user_id = 'instasagars';
$json_profile = file_get_contents("https://api.instagram.com/v1/users/{$user_id}/?access_token={$access_token}");
$json = file_get_contents("https://api.instagram.com/v1/users/self/media/recent/?access_token=" . $access_token . "&count=9");
$a_json_profile = json_decode($json_profile, true);
$a_json = json_decode($json, true);
//echo "<pre>";
//print_r($json2);
//echo "</pre>"; exit;
$i = 0;
foreach ($a_json['data'] as $key => $value) {
    //if ($i < 9) {
    $a_images[$i]['link'] = $value['link'];
    $a_images[$i]['url'] = $value['images']['thumbnail']['url'];
    //$a_images[$value['id']]['caption'] = $value['caption']['text'];

    $i++;
    //}
}
shuffle($a_images);
$finalData = array('info'=>$a_json_profile, 'images'=>$a_images);
echo json_encode($finalData);
exit;