<?php session_start(); ?>
<?php if(empty($_SESSION))
    {
    header("location:lander.php");
}
?>
<?php include './customerDashboard.php';?>
<div class="content-wrapper">
<!--<link
       rel="stylesheet"
       href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css"
     />-->
       
        <?php include './userProfile.php';?>

</div>