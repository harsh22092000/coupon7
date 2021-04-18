<?php include './shopKeeperDashboard.php';?>
<?php include './connection.php'; ?>
<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>-->

<!--fioajf;-->
<!--    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>-->
<!--asf;askf-->

<?php 
$flag=0;
if(isset($_REQUEST["createCoupon"])){
    if(empty($_POST["cCode"]))
        {
            $cCode="This Field must be Filled";
            $flag=1;
        }
        else
        {
             if(!preg_match("/^([a-zA-Z0-9]{3,30})$/",$_POST["cCode"])){
               $cCode='Only alphabet and digit can be use.';
             $flag=1;  
            } 
        }
       
        
        
       
       
       
        
	if(empty($_POST["disc"]))
        {
            $phonemsg="Discount must be Filled";
            $flag=1;
        }
        else 
        {
        if(!preg_match("/^([0-9]{1,30})$/",$_POST["disc"])){
               $phonemsg='Only digit can be use.';
             $flag=1;  
            }
        }
        
        
//        $phone = '0000000000';
       
        
        
        if(empty($_POST["offer"]))
        { 
                $offer= "offer must be filled...";
                $flag=1;

        }
        else
        {
                
         }
         
         
         
        if(empty($_POST["startDate"]))
        { 
                $sdate= "Start Date be filled...";
                $flag=1;
        }
        else
        {
          
        }
        if(empty($_POST["expireDate"]))
        { 
                $edate= "Expire date must be selected...";
                $flag=1;
        }
        else
        {
         
        }
        
        if($flag==0){
                    

    
     $filename = $_FILES["uploadfile"]["name"];
//          $filename = $_FILES["uploadfile"]uniqid(); 
      $fileun=uniqid().$filename;
      $tempname = $_FILES["uploadfile"]["tmp_name"];
      $folder = './image/coupons/'.$fileun; 
    
//$cImg=$_POST[cImg];
$sql = "INSERT INTO tbl_coupon (couponCode, shopId, couponImage,discount,offer,couponDate,couponExpireDate)
VALUES ('".$_POST[cCode]."','".$_SESSION['sId']."' ,'".$fileun."', '".$_POST[disc]."','".$_POST[offer]."','".$_POST[startDate]."','".$_POST[expireDate]."')";

if ($conn->query($sql) === TRUE) {
  if (move_uploaded_file($tempname, $folder))  
        { 
              echo "Success";
        }
        else
        { 
            echo "Image not uploaded";
        }
    
    
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

 echo '<script>alert("Successfully Inserted");</script>'; 
//  header('location:addCouponShop.php');
       
}        
}

?>
<div class="content-wrapper">
    
     <form action="#" method="post" enctype="multipart/form-data">
    <div class="container" style="font-size: 100%;">
        <div class="row">
            <div class="col-lg-12" style="margin-top: 10px;">
                <center>
                    <div class="form-icon" style="padding-top: 0px;">
                 <span><i class="icon icon-basket-loaded" style="text-align: center; padding-top: 100%"></i></span>
              </div>
                    
                <h1>Add Coupon</h1>
                </center>
            </div>
        </div>
        
        <div class="row fulform" style="margin-top: 20px; ">
            <div class="col-lg-12" style="border-right: black 3px double">
<!--               <center> <h3>Personal Information</h3></center>-->
                
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                        <label for="fName">Coupon Code:</label>
                        <input type="text" name="cCode" id="cCode" placeholder="Enter Coupon Code:" class="form-control" >
                        <?php echo $cCode;?>
                        </div>
                    </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="Cimg">Coupon Image:</label>
                    <input  type="file" name="uploadfile" class="inputFile form-control" >
                    <?php echo $Cimg;?>
                    </div>
                    </div>
                </div>

                <!-- row -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="disc">Discount %:</label>
                        <input type="text" name="disc" id="disc" placeholder="Enter Discount %:" class="form-control" >
                        <?php echo $phonemsg;?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                        <label for="offer">Enter Offer:</label>
                        
                        <textarea class="form-control"  id="offer" name="offer"  placeholder="Enter Offer" class="form-control"></textarea>
                        <?php $offer?>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="startDate">Enter Start Date:</label>
<!--                            <div class="input-group date">
    <input type="text" class="form-control" value="12-02-2012">
    <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
    </div>
</div>-->

<!--                            <div class='input-group date' id='datetimepickerDemo'>
                                <style scoped>
                                    </style>
                                <input type='text' name="startDate" class="form-control" />
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>-->
<input type="Date" name="startDate" id="startDate"  class="form-control" min="2021-03-21" required>
                        <?php echo $sdate;?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="startDate">Enter Expire Date:</label>
                            <input type="Date" name="expireDate" id="expireDate"  class="form-control" min="2021-03-22" >
                        <?php echo $edate;?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <center><input type="submit" value="Create Coupon" name="createCoupon" class="btn btn-outline-primary"><center></center>
                    </div>
                </div>
            </div>
        
        
           
            </div>
                        
            </div>  
                </div>
            </div>
        </div>
    
    </form>
</div>

  
<script type="text/javascript">
    $(function () {
        $('#datetimepickerDemo').datetimepicker({
            maxDate:new Date()
           
        });
        
        
    });
    
    
</script>