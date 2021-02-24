<?php
$fullname = $phoneNumber = $email = $country = "";
$fullname_err = $phoneNumber_err = $email_err = $country_err = "";
$invest_from = $invest_to = $accrinvest = "";
$invest_from_err = $invest_to_err = $accrinvest_err = "";
$single_family = $residential_multifamily = $commercial_retail = $commercial_industrial = $commercial_hospital = $commercial_warehousing = $commercial_office = $other ="";
$multi_checkbox_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $input_fullname = $_POST["fullname"];
  if (empty($input_fullname)) {
    $fullname_err = "Enter your full name";
  } else if (!preg_match("/^[a-zA-Z ]*$/", $input_fullname)) {
    $fullname_err = "Full name must be letters only";
  } else {
    $fullname = $input_fullname;
  }

  //print($fullname);

  $input_phoneNumber = $_POST["phoneNumber"]["full"];
  if (empty($input_phoneNumber)) {
    $phoneNumber_err =  "Enter your phone number";
  } else if (!is_numeric($input_phoneNumber)) {
    $phoneNumber_err = "Phone number must be digits only";
  } else {
    $phoneNumber = $input_phoneNumber;
  }

  //print($phoneNumber);

  $input_email = $_POST["email"];
  if (empty($input_email)) {
    $email_err = "Enter your email address";
  } else if (!filter_var($input_email, FILTER_VALIDATE_EMAIL)) {
    $email_err = "Invalid email format";
  } else {
    $email = $input_email;
  }

  //print($email);

  $input_country = $_POST["country"];
  if ($input_country == " ") {
    $country_err = "Select your country";
  } else {
    $country  = $input_country;
  }

  //print($country);

  $input_invest_from  = $_POST["from"];
  if (empty($input_invest_from)) {
    $invest_from_err = "Enter min value you want to invest";
  } else if (preg_match("~^0\d+$~", $input_invest_from)) {
    $invest_from_err = "Number cant start with 0";
  } else {
    $invest_from = $input_invest_from;
  }

  //print($invest_from);

  $input_invest_to  = $_POST["to"];
  if (empty($input_invest_to)) {
    $invest_to_err = "Enter max value you want to invest";
  } else if (preg_match("~^0\d+$~", $input_invest_from)) {
    $invest_to_err = "Number cant start with 0";
  } else {
    $invest_to = $input_invest_to;
  }

  //print($invest_to);

  $input_accrinvestor = $_POST['investor'];
  if (!isset($input_accrinvestor)) {
    $accrinvest_err = "Answer question above";
  } else {
    $accrinvest = $input_accrinvestor;
  }

  //print($accrinvest);

  if (!empty($_POST['checkbox'])) {
    $checkbox = $_POST['checkbox'];
		$single_family = isset($checkbox[0]) ? 1 : 0;
		$residential_multifamily = isset($checkbox[1]) ? 1 : 0;
		$commercial_retail = isset($checkbox[2]) ? 1 : 0;
		$commercial_industrial = isset($checkbox[3]) ? 1 : 0;
    $commercial_hospital = isset($checkbox[4]) ? 1 : 0;
    $commercial_warehousing = isset($checkbox[5]) ? 1 : 0;
    $commercial_office  = isset($checkbox[6]) ? 1 : 0;
    $other = isset($checkbox[7]) ? 1 : 0;
	} else {
		$multi_checkbox_err = "At least one option must be selected";
  }
  
}
