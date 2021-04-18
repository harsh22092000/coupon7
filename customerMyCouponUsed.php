<?php ob_start();?>
<?php include './customerDashboard.php'; ?>
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
        <table id="example" class="display" style="width:100%">
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
        $result="select tbl_shop.shopName ,tbl_coupon.offer,tbl_coupon.couponImage, tbl_redeemcoupon.udate,tbl_redeemcoupon.mrp,tbl_redeemcoupon.discount,tbl_redeemcoupon.finalAmount from tbl_redeemcoupon INNER JOIN tbl_coupon on tbl_redeemcoupon.couponId=tbl_coupon.couponId INNER join tbl_shop on tbl_coupon.shopId= tbl_shop.shopId where tbl_redeemcoupon.customerId='".$_SESSION["sId"]."'";
       
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
    $('#example').DataTable();
} );

function approve(cid){

    var id = cid;
            // var mail = $('#hid_Email').val();
            $.ajax({
              type:"GET",
              url:"app_rej.php",
              // data: "id="+id,
              data: { id: id, action: 'approve' },
              success:function(data)
              {                
                  alert('Approved');
//                  $("#example").load(location.href);
                                    location.reload();
//                                  setInterval( function () {
//    $("#example").load(location.href); // user paging is not reset on reload
//}, 1000 )

              }
            });
}

function reject(cid){
    var id = cid;
            // var mail = $('#hid_Email').val();
            $.ajax({ 
              type:"GET",
              url:"app_rej.php",
              // data: "id="+id,
              data: { id: id, action: 'reject' },
              success:function(data)
              {
                // $(#userTable).html(data);
    

                  alert('Rejected');
//                                    $("#example").load(location.href);

                  location.reload();
              }
            });
}
</script>
</div>
<?php        ob_flush();?>