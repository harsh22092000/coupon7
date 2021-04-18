<?php ob_start(); ?>
<?php  include './index.php';?>
        <div class="content-wrapper">
<?php include 'connection.php'; ?>
          
 <?php

        $j=0;   
        $press=array();
        
        $sqlcp = "SELECT s.shopName,s.fName,s.lName,c.couponCode,c.couponImage,c.couponId,c.discount,c.offer,c.couponDate,c.couponExpireDate,c.isApprove
FROM tbl_coupon as c
INNER JOIN tbl_Shop as s
ON c.shopId = s.shopId where c.isApprove=0 and c.couponExpireDate >'".date('Y-m-d')."'";


                $query= mysqli_query($conn,$sqlcp);

        echo "<div class='container'> <form action='#' method='post'>";
 $cnt=0;
 $b=0;   
        
        
            
           $j=0; 
           $coups = array();

            while ($r= mysqli_fetch_array($query))
            {
                            $press[$j]="submit".$j."";
                            $k="submit".$j."";
                            $v=$r['couponId'];
                            $coups += [$k => $v];
                            
                if($cnt==0)
    {
        echo "<div class='row'>";
    } 
    echo "
           <div class='col-lg-4'>
                <div class='card' style='width: 18rem;'>
                    <img src='image/coupons/".$r['couponImage']."' class='card-img-top' alt='...'>
                      <div class='card-body'>
                        <p class='card-text'>
                            
                            <table>
                            <tr><td style='width:100%'>Shop Name:</td><td>".$r['shopName']."</td></tr>
                            <tr><td>Shop keeper Name:</td><td>".$r['fName']." ".$r['lName']."</td></tr>
                            <tr><td>Offer:</td><td>".$r['offer']."</td></tr>
                            <tr><td>Discount%:</td><td>".$r['discount']."</td></tr>
                            <tr><td>Valid upto:</td><td style='color:red;'>".$r['couponExpireDate']."</td></tr>

                            </table>
                        </p>
                            
                        <center><input type='submit' name='submit".$j."' id='submit".$j."' value='Approve ' class='btn btn-primary'><input type='submit' name='reject".$j."' id='reject".$j."' value='Reject ' class='btn btn-danger' style='margin-left:1%;'> </center>
                      </div>
                </div>
            </div>
                
	";
    $b++;
    if($cnt==2)
    {
        echo "</div>";
        
        $cnt=0;
    }
    else{
    $cnt++;
    }
                
                
                $j++;
                
            }
             echo "</form> </div>";
//             end if
        
        ?>
        </div>
        
           
        <?php 
        $j=0;
                for ($i=1; $i<= count($press); $i++)
                {
        if (isset($_POST["submit".$j.""]))
        {
$sql3 ="update tbl_coupon set isApprove =1 where couponId=".$coups[$press[$j]];
                $query3= mysqli_query($conn,$sql3);
                
                
if ($conn->query($sql3) === TRUE) {
                echo "<script>alert('Coupon Approved success');</script>";
                header('location:approveCouponAdmin.php');
                  exit();
} else {
    echo "Btn =".$press[$j];
  echo "Errorin approve: " . $sql3 . "<br>" . $conn->error;
}
    }
    elseif (isset($_POST["reject".$j])) {
        $sql3 ="update tbl_coupon set isApprove =2 where couponId=".$coups[$press[$j]];
                $query3= mysqli_query($conn,$sql3);
                                echo "<script>alert('Coupon Rejected success');</script>";

                
if ($conn->query($sql3) === TRUE) {
                echo "<script>alert('Coupon Rejected success');</script>";
                header('location:approveCouponAdmin.php');
                  exit();
  echo "New record created successfully";
} else {
  echo "Error in reject: " . $sql3 . "<br>" . $conn->error;
}
    }
                
        $j++;
        }
         ?>

<?php ob_flush(); ?>
