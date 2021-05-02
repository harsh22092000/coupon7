<?php 
    include_once './connection.php';
    $id= $_GET['id']; 
    // $email= $_GET['email']; 
    $action = $_GET['action'];

//    use PHPMailer\PHPMar\Exception;

//    $get_email = "select email from tbl_member where mid = $id";
//    $result = mysqli_query($conn,$get_email);
//    $data = mysqli_fetch_array($result);
//    $email = $data['email'];    
    
    if(strcmp($action,"approve") == 0)
    {
//    require './PHPMailer.php';
//    require './Exception.php';
//    require './SMTP.php';
//               $mail = new PHPMailer(true);
//            $mail->isSMTP();
//            $mail->Host = 'smtp.gmail.com';
//            $mail->Port = 587;
//            $mail->SMTPAuth = true;
//            $mail->Username = '18bmiit066@gmail.com';
//            $mail->Password = 'smit1234';
//            $mail->SMTPSecure = 'tls';
//            $mail->setFrom('18bmiit066@gmail.com');
//            $mail->addAddress("18bmiit113@gmail.com");
//            $mail->Subject = 'Status Changed Coupon7';
//            $message_body = "Approved" ;
//            $mail->Body = $message_body;
//            $mail->send();    
        $q = "update tbl_Customer set isApprove = 1 where cId = $id";
        mysqli_query($conn,$q);
    }
   if(strcmp($action,"reject") == 0)
    {
//            require '../PHPMailer/src/Exception.php';
//            require '../PHPMailer/src/PHPMailer.php';
//            require '../PHPMailer/src/SMTP.php';
//            $mail = new PHPMailer(true);
//            $mail->isSMTP();
//            $mail->Host = 'smtp.gmail.com';
//            $mail->Port = 587;
//            $mail->SMTPAuth = true;
//            $mail->Username = '';
//            $mail->Password = '';
//            $mail->SMTPSecure = 'tls';
//            $mail->setFrom('');
//            $mail->addAddress($email);
//            $mail->Subject = '';
//            $message_body = "" ;
//            $mail->Body = $message_body;
//            $mail->send();
    
        $q = "update tbl_Customer set isApprove = 2 where cId = $id";
        mysqli_query($conn,$q);
    }
    if(strcmp($action,"renew") == 0)
    {
//            require '../PHPMailer/src/Exception.php';
//            require '../PHPMailer/src/PHPMailer.php';
//            require '../PHPMailer/src/SMTP.php';
//            $mail = new PHPMailer(true);
//            $mail->isSMTP();
//            $mail->Host = 'smtp.gmail.com';
//            $mail->Port = 587;
//            $mail->SMTPAuth = true;
//            $mail->Username = '';
//            $mail->Password = '';
//            $mail->SMTPSecure = 'tls';
//            $mail->setFrom('');
//            $mail->addAddress($email);
//            $mail->Subject = '';
//            $message_body = "" ;
//            $mail->Body = $message_body;
//            $mail->send();
    
         $q = "update tbl_Customer set DateofRegistration='".date('Y-m-d')."' where cId = $id";
         mysqli_query($conn,$q);
    }