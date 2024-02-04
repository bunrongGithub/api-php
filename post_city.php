<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
$data = [
   [
      'id' => '1',
      'name' => 'XMLHttpRequest'
   ],
   [
      'id' => '2',
      'name' => 'XMLHttpRequest1',
   ],
   [
      'id' => '3',
      'name' => 'XMLHttp',
   ]
];
if (!empty($_POST['name']) && !empty($_POST['id'])) {
   $newdata = [
      'id' => $_POST['id'],
      'name' => $_POST['name'],
   ];
   // Add the new data into $data,
   $data[] = $newdata;
   foreach ($data as $d) {
      $result['city'][] = [
         'id' => $d['id'],
         'name' => $d['name'],
      ];
   }
   $result['status'] = 'success';
} else {
   foreach ($data as $d) {
      $result['city'][] = array(
         'id' => $d['id'],
         'name' => $d['name'],
      );
   }
   $result['status'] = 'success';
}
http_response_code(200);
echo json_encode($result);