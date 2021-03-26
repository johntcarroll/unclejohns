<?php
  session_start();
  $i = file_get_contents("php://input");
  $_POST = json_decode($i, true);
  $response = [
    'error' => false,
    'message' => null
  ];

  try{
    if($_POST['token'] != $_SESSION['token']) Throw new Exception('Invalid Token!');
    unset($_POST['token']);
    $message = '';
    foreach($_POST as $key => $value) $message .= $key . ': ' . $value . "\n";
    mail('carroll.johnt@gmail.com', 'Contact Form Submission Recieved', $message);
    if($_POST['token'] != $_SESSION['token']) Throw new Exception('Invalid Token!');
  }catch(Exception $e){
    $response['error'] = true;
    $response['message'] = $e->getMessage();
  }

  echo json_encode($response);
?>
