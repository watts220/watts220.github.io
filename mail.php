<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$company = $_POST['company'];
$site = $_POST['site'];

$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$phone = htmlspecialchars($phone);
$message = htmlspecialchars($message);
$company = htmlspecialchars($company);
$site = htmlspecialchars($site);

$name = urldecode($name);
$email = urldecode($email);
$phone = urldecode($phone);
$message = urldecode($message);
$company = urldecode($company);
$site = urldecode($site);

$name = trim($name);
$email = trim($email);
$phone = trim($phone);
$message = trim($message);
$company = trim($company);
$site = trim($site);

if (mail("watts220@gmail.com", "Заявка web studio", "Имя: ".$name.".\r\nE-mail: ".$email.".\r\nPhone: ".$phone.".\r\nCompany: ".$company.".\r\nSite: ".$site.".\r\nMessage: ".$message ,"From: admin@cosmos-boutique.com.ua \r\n")){
    echo "1"; 
} else { 
    echo "0";
}
?>