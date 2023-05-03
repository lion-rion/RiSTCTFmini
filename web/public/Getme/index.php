<?php 

$method = $_SERVER['REQUEST_METHOD'];

if ($method == "GET") {
  // jsonを返す
  header('Content-Type: application/json; charset=utf-8');
  echo json_encode([
    "success" => "false",
    "message" => "Sorry ! You can't GET me :P"
  ]);
} else if ($method == "POST") {
  header('Content-Type: application/json; charset=utf-8');
  echo json_encode([
    "success" => "true",
    "message" => "You got me ! RiSTCTF{get_or_post}"
  ]);
}
