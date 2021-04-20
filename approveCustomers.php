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
        <center><h1 id="reportHead">Approve Customers</h1></center>
        <table id="example" class="display" style="width:100%">
        <thead>
           
            <tr>
                <th>Name</th>
                <th>Contact No</th>
                <th style="width: 10%;" >Date of Registration</th>
                <th style="width: 10%;">Email</th>
                <th style="width: 10%;">Address</th>
                <th style="width: 10%;" >Email Verified</th>
                <th>Approve</th>

            </tr>
        </thead>
                <tbody>

            <?php
        $result="select * from tbl_Customer where isApprove=0";
       
        $query=$conn->query($result);
      while ($r= mysqli_fetch_array($query))
            {
          ?>
          <tr>
              <td><?php echo $r["fName"].' '. $r["lName"]." - ".$r["gender"]; ?></td>
                <td><?php  echo $r["contactNo"];?></td>
                <td><?php  echo $r["DateofRegistration"];?></td>
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
                ?></td>
                <td>
                    <a href="javascript:void(0)" onclick="approve(<?php echo $r['cId']; ?>)" >Approve</a>
                    <a href="javascript:void(0)" onclick="reject(<?php echo $r['cId'];?>)" >Reject</a> 

                       
                    <!--<input type="submit" name="submit" value="Approve" class="action btn btn-outline-primary">-->
                    <!--<input type="submit" name="submit" value="Reject" class="action btn btn-outline-danger">-->

                    <?php //  echo $r["isApprove"];?></td>

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