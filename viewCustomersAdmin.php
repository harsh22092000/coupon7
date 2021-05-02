<?php include './index.php';?>
        <div class="content-wrapper">

<?php include 'connection.php'; ?>
      
        <!--edit update-->
        <!-- <link href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/> -->
        <!-- <script src="plugins/Others/datatables/jquery.dataTables.min.js" type="text/javascript"></script> -->

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

        <meta charset="UTF-8">
        <center><h1 id="reportHead">Approved Customers</h1></center>
        <span class="exportas"> </span>
        
        <table id="example" class="display" style="width:100%">
        <thead>
           
            <tr>
                <th>Name</th>
                <th>Contact No</th>
                <th>Date of Registration</th>
                <th>End Date of Subscription</th>
                <th>Email</th>
                <th style="width: 10%;">Address</th>
                <th>Email Verified</th>
                <th>Manage</th>

            </tr>
        </thead>
                <tbody>

            <?php
        $result="select * from tbl_Customer where isApprove=1";
       
        $query=$conn->query($result);
      while ($r= mysqli_fetch_array($query))
            {
                $endsub = date('Y-m-d', strtotime('+1 year', strtotime($r["DateofRegistration"])) );
          ?>
          <tr>
              <td><?php echo $r["fName"].' '. $r["lName"]." - ".$r["gender"]; ?></td>
                <td><?php  echo $r["contactNo"];?></td>
                <td><?php  echo $r["DateofRegistration"];?></td>
                <td><?php  echo $endsub; ?></td>
                <td><?php  echo $r["email"];?></td>
                <td><?php  echo $r["address"];?></td>
                <td><?php 
                if ($r["is_Verified"]==1)
                {?>
                    <span class="badge bg-success">
                <?php echo "Verified"; ?>
                    </span>
                <?php }
                else {
                ?>
                    <span class="badge bg-danger">  
                   <?php echo 'Not Verified'; ?>
                    </span>
                 <?php   
                }
                ?>
                </td>
                <td>
                <a href="javascript:void(0)" onclick="reject(<?php echo $r['cId'];?>)" >Reject</a> 
                <?php
              
                 if (date('Y-m-d') > $endsub)
                {?>
                <a href="javascript:void(0)" onclick="sub(<?php echo $r['cId']; ?>)">Renew </a>
                       
                
                <?php    }                 ?>
                    <!-- <f>sfdg</f> -->
                
                    <?php  
//                echo $r["isApprove"];
                ?></td>

          </tr>
            <?php
            }
        ?>
       
           
        </tbody>
    </table>
       
    </body>
   
<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable({
        "responsive":true,
        "buttons": ["copy", "csv", "pdf", "print"]
      }).buttons().container().appendTo('.exportas');
} );
function sub(cid){
    var id=cid;
    $.ajax({ 
              type:"GET",
              url:"app_rej.php",
              // data: "id="+id,
              data: { id: id, action: 'renew' },
              success:function(data)
              {
                  alert('Renewed');
                  location.reload();
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

//var employeeData = $('#example').DataTable({
//	"lengthChange": false,
//	"processing":true,
//	"serverSide":true,
//	"order":[],
//	"ajax":{
//		url:"action.php",
//		type:"POST",
//		data:{action:'listEmployee'},
//		dataType:"json"
//	},
//	"columnDefs":[
//		{
//			"targets":[0, 6, 7],
//			"orderable":false,
//		},
//	],
//	"pageLength": 10
//});		

</script>
</html>

<?php
//if(isset($_POST["display"]))
//{  
// $query= mysqli_query($conn,"select * from tbl_coupon");
// 
//while ($row = mysqli_fetch_array($query)) {  
//    echo "
//           <div class='col-lg-4'>
//    <div class='card' style='width: 18rem;'>
//                    <img src='image/coupons/".$row['couponImage']."' class='card-img-top' alt='...'>
//                      <div class='card-body'>
//                        <p class='card-text'>".$row['offer']."</p>
//                    <center>    <input type='submit' value='Apply Now' class='btn btn-primary'> </center>
//                      </div>
//                </div>
//                </div>
//                
//	";
//      
// }   
//  
//
//
//mysqli_close($conn);
// 
//}
//?>
<!--        <form action="#" method="post" enctype="multipart/form-data">
        
        <input type="submit" name="display" class="btn btn-outline-primary" value="Display">
       
         </form>-->
        </div>
    
