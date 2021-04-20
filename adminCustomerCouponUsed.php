<?php ob_start();?>
<?php include './index.php'; ?>
<?php include './connection.php';?>
<div class="content-wrapper" style="padding: 30px;">
        <link href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/css/jquery.dataTables.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
        <!--fads-->
        
        <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/jquery.dataTables.min.js"></script>
        <style>
            .action{
                width: 70px;
            }
        </style>
        <center><h1 id="reportHead">Redeemed Coupons</h1></center>
        <table id="example" class="display" style="width:100%">
        <thead>
           
            <tr>
                <th>Sr.No</th>
                <th>Customer Name</th>
                <th>Contact Details</th>
                <th>Shop Name</th>
                <th>couponCode</th>
                <th>Offer</th>
                <th>Discount</th>
                <th style="width: 10%; " >Image</th>
                <th style="width:30%;">Transaction Details</th>
                <!-- <th style="width: 10%;">expire Date</th>
                <th style="width: 10%;" > is approve</th> -->
                

            </tr>
        </thead>
                <tbody>

            <?php
        $result="select c.fName,c.lName,c.gender,c.contactNo,c.email,s.shopName,ac.couponCode,ac.couponImage,ac.offer,rc.udate,rc.mrp,rc.discount,rc.finalAmount from tbl_customer as c inner join tbl_redeemcoupon as rc on c.cId=rc.customerId inner join tbl_coupon as ac on ac.couponId = rc.couponId inner join tbl_shop as s on ac.shopId=s.shopId";
       $sr=1;
        $query=$conn->query($result);
      while ($r= mysqli_fetch_array($query))
            {
          ?>
          <tr>
            <td><?php echo $sr;?></td>
            <td style="width:130px;"><?php echo $r["fName"]." ".$r["lName"]." - ".$r["gender"]; ?></td>
             <td><?php echo $r["contactNo"]."\n". $r["email"]; ?></td>
             <td><?php echo $r["shopName"]; ?> </td>
             <td><?php echo $r["couponCode"];?></td>
                <td><?php  echo $r["offer"];?></td>
                <td><?php echo $r["discount"]."%";?></td>
                <td  ><img style=" height: 100px;" src="./image/coupons/<?php  echo $r["couponImage"];?>" alt="" srcset=""></td>
                <td style="width:15%;"><center><?php  echo $r["udate"]."</br>Mrp:".$r['mrp']."</br>Discount:".$r['discount']."%</br>Final Amount:".$r['finalAmount'];?></center></td>
                 
                </tr>
            <?php
            $sr++;
            }
        ?>
       
           
        </tbody>
    </table>
       
<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
} );


</script>
</div>
<?php        ob_flush();?>