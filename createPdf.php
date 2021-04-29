<?php ob_start();?>
<?php include './customerDashboard.php'; ?>
<?php include './connection.php';?>
<div class="content-wrapper" style="padding: 30px;">
        <!-- <link href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/> -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
        <!-- <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/css/jquery.dataTables.css"> -->

        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"/> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <!-- <script type="text/javascript" src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script> -->
        <!--fads-->
        
<!-- pdf -->
<!-- <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script> -->


<!-- pdf -->
        <!-- <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/jquery.dataTables.min.js"></script> -->
        <!--  -->
        <!-- <script src="plugins\datatables\buttons.html5.min.js"></script>
        <script src="plugins\datatables\buttons.print.min.js"></script>
        <script src="plugins\datatables\jquery-3.5.1.js"></script>
        <script src="plugins\datatables\dataTables.buttons.min.js"></script>
        <script src="plugins\datatables\jquery.dataTables.min.js"></script>
        <script src="plugins\datatables\jszip.min.js"></script>
        <script src="plugins\datatables\pdfmake.min.js"></script>
        <script src="plugins\datatables\vfs_fonts.js"></script>
         -->
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
        
        
         <!--  -->

        <style>
            .action{
                width: 70px;
            }
        </style>
<span class="exportas"> </span>
        <table id="example" class="display nowarp" style="width:100%">
        <thead>
           
            <tr>
                <th>Shop Name</th>
                <th>Offer</th>
                <th style="width: 10%; " >Image</th>
                <th style="width: 10%;">used Date</th>
                <th style="width: 10%;">Mrp</th>
                <th style="width: 10%;" >Discount</th>
                <th>Final Amount</th>

            </tr>
        </thead>
                <tbody>

            <?php
        $result="select tbl_shop.shopName ,tbl_coupon.offer,tbl_coupon.couponImage, tbl_redeemcoupon.udate,tbl_redeemcoupon.mrp,tbl_redeemcoupon.discount,tbl_redeemcoupon.finalAmount from tbl_redeemcoupon INNER JOIN tbl_coupon on tbl_redeemcoupon.couponId=tbl_coupon.couponId INNER join tbl_shop on tbl_coupon.shopId= tbl_shop.shopId where tbl_redeemcoupon.customerId='".$_SESSION["cId"]."'";
       
        $query=$conn->query($result);
      while ($r= mysqli_fetch_array($query))
            {
          ?>
          <tr>
              <td><?php echo $r["shopName"];?></td>
                <td><?php  echo $r["offer"];?></td>
                <td  ><img style=" height: 100px;" src="./image/coupons/<?php  echo $r["couponImage"];?>" alt="" srcset=""></td>
                <td><?php  echo $r["udate"];?></td>
                <td><?php  echo $r["mrp"];?></td>
                <td><?php echo $r["discount"];?></td>
                <td>
                    
                    <!--<input type="submit" name="submit" value="Approve" class="action btn btn-outline-primary">-->
                    <!--<input type="submit" name="submit" value="Reject" class="action btn btn-outline-danger">-->

                    <?php   echo $r["finalAmount"];?></td>

          </tr>
            <?php
            }
        ?>
       
           
        </tbody>
    </table>
       
<script type="text/javascript">
$(document).ready(function() {
    // $('#example').DataTable( {
    //     // dom: 'Bfrtip',
    //     buttons: [
    //         'copy', 'csv', 'excel', 'pdf', 'print'
    //     ]}).buttons().container().appendTo('.exportas');

    $("#example").DataTable({
        // "responsive": true, "lengthChange": true, "autoWidth": true,
      "buttons": ["copy", "csv", "pdf", "print"]
    }).buttons().container().appendTo('.exportas');

    //     $('#example').DataTable( {
//     buttons: [
//         {
//             extend: 'pdf',
//             text: 'Save current page',
//             exportOptions: {
//                 modifier: {
//                     page: 'current'
//                 }
//             }
//         }
//     ]
// } );

} );


</script>
</div>
<?php        ob_flush();?>