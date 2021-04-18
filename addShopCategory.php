<?php ob_start(); ?>

<?php include './index.php'; ?>
<?php include './connection.php'; ?>
<?php 
$flag=0;
if(isset($_REQUEST["submit"])){
       
       
        if(empty($_POST["shopCategory"]))
        {
            $fnamemsg="This Field must be Filled";
            $flag=1;
        }
        else
        {
//             if(!preg_match("/^([a-zA-Z]{3,30})$/",$_POST["shopCategory"])){
//               $fnamemsg='Only alphabet can be use in Fname.';
//             $flag=1;  
//            } 
        }
       
        
   
        if($flag==0){

$sql = "INSERT INTO tbl_ShopCategory (shopCategory)
VALUES ('".$_POST[shopCategory]."')";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('Shop Category Added');</script>";
   header('location:addShopCategory.php');

} else {
     echo '<script>alert("Shop Category Already Exist");</script>'; 
   header('location:addShopCategory.php');

//  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}        
 else {
 echo '<script>alert("Failed");</script>'; 
    
}
}

?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
<style>
    .form-icon{
	text-align: center;
    background-color: #5891ff;
    border-radius: 50%;
    font-size: 40px;
    color: white;
    width: 100px;
    height: 100px;
    margin: auto;
    /*margin-bottom: 10px;*/
    line-height: 100px;
}
    
</style>
<div class="content-wrapper">
    <form action="#" method="post">
    <div class="container" style="font-size: 100%;">
        <div class="row">
            <div class="col-lg-12" style="margin-top: 10px;">
                <center>
                    <div class="form-icon" style="padding-top: 0px;">
                 <span><i class="icon icon-basket-loaded" style="text-align: center; padding-top: 100%"></i></span>
              </div>
                    
                </center>
            </div>
        </div>
        
               <center> <h1>Add Shop Category</h1></center>
                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                        <label for="shopCategory">Shop Category:</label>
                        
                        <input type="text" name="shopCategory" id="shopCategory" placeholder="Enter Shop Category" class="form-control" >
                        <?php echo $fnamemsg;?>
                        </div>
                    </div>
            

                          </div>
                   
                </div>

                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <center>   <input type="submit" name="submit" value="Add Shop Category" rows="3"  class="btn btn-outline-primary"></center>
                        </div>
                    </div>
                </div>
                
                
            </div>
                        
            
    
    </form>
</div>

<?php include 'footer.php';?>
<?php ob_flush(); ?>
