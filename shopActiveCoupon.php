<?php ob_start();?>
<?php include './shopKeeperDashboard.php'; ?>
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
        
<link rel="stylesheet" href="plugins\datatables\jquery.dataTables.min.css">
        <link rel="stylesheet" href="plugins\datatables\buttons.dataTables.min.css">
        
        <script src="./plugins/jquery/jquery.min.js"></script>
         <script src="./plugins/Others/datatables/jquery.dataTables.min.js"></script>
<script src="./plugins/Others/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="./plugins/Others/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="./plugins/Others/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="./plugins/Others/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="./plugins/Others/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="./plugins/Others/jszip/jszip.min.js"></script>
<script src="./plugins/Others/pdfmake/pdfmake.min.js"></script>
<script src="./plugins/Others/pdfmake/vfs_fonts.js"></script>
<script src="./plugins/Others/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="./plugins/Others/datatables-buttons/js/buttons.print.min.js"></script>
<script src="./plugins/Others/datatables-buttons/js/buttons.colVis.min.js"></script>

        <!-- pdf -->

        <style>
            .action{
                width: 70px;
            }
        </style>
         <center><h1>Shop Coupon</h1></center>
        <span class="exportas"> </span>
        <table id="example" class="display" style="width:100%">
        <thead>
           
            <tr>
                <th>Sr.No</th>
                <th>couponCode</th>
                <th>Offer</th>
                <th>Discount</th>
                <th style="width: 10%; " >Image</th>
                <th style="width: 10%;">Start Date</th>
                <th style="width: 10%;">expire Date</th>
                <!-- <th style="width: 10%;" > is approve</th> -->
                <th>Status</th>
                

            </tr>
        </thead>
                <tbody>

            <?php
        $result="SELECT tbl_coupon.couponCode, tbl_coupon.couponImage,offer,discount,couponDate,couponExpireDate,isApprove FROM tbl_coupon WHERE shopId='".$_SESSION["sId"]."'";
       $sr=1;
        $query=$conn->query($result);
      while ($r= mysqli_fetch_array($query))
            {
          ?>
          <tr>
            <td><?php echo $sr;?></td>
             <td><?php echo $r["couponCode"];?></td>
                <td><?php  echo $r["offer"];?></td>
                <td><?php echo $r["discount"]."%";?></td>
                <td  ><img style=" height: 100px;" src="./image/coupons/<?php  echo $r["couponImage"];?>" alt="" srcset=""></td>
                <td><?php  echo $r["couponDate"];?></td>
                <td><?php  echo $r["couponExpireDate"];?></td>
                
                <td><?php 
            if($r["couponExpireDate"]>date('Y-m-d')){
                if ($r["isApprove"]==1)
                {?>
                    <span class="badge bg-success">
                <?php echo "Active"; ?>
                    </span>
                <?php }
                else if($r["isApprove"]==2){
                ?>
                    <span class="badge bg-secondary">  
                   <?php echo 'Rejected'; ?>
                    </span>
                 <?php   
                }
                else { ?>
                    <span class="badge bg-warning">  

                    <?php echo "pending";?>
                    </span>

            <?php
                }
            }
            else
            {?>
                                <span class="badge bg-danger">  
                   <?php echo 'Expired'; ?>
            <?php
            }
                ?></td>
                </tr>
            <?php
            $sr++;
            }
        ?>
       
           
        </tbody>
    </table>
       
<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable({
        "responsive":true,
        "buttons": ["copy", "csv", "pdf", "print"]
      }).buttons().container().appendTo('.exportas');
} );


</script>
</div>
<?php        ob_flush();?>