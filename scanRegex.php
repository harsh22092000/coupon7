<?php  include './customerDashboard.php';?>
<div class="content-wrapper">
    <!--<h1>hi this is harsh tejani and i am currently coding</h1>-->
    <center> <input type="text" id="txt" name="txt"></center>
<!--        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>-->
    <script src="instascan.min.js" type="text/javascript"></script>
    <script src="jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<style>
#preview{
   width:500px;
   height: 500px;
   margin:0px auto;
}
</style>
<center>
<video id="preview"></video>
</center>
        <script type="text/javascript">
    var scanner = new Instascan.Scanner({ video: document.getElementById('preview'), scanPeriod: 5, mirror: false });
    scanner.addListener('scan',function(content){
//        alert(content);
       // window.location.href=content;
       
       


const words = content.split('-');
console.log(words[0]);


        document.getElementById("txt").value=words[0];
//        var amt=words[0];



//        window.location.href="http://localhost:8888/dashboardadmin/couponDemoTry.php?mrp="+words[0]+"&shopId="+words[1];
                            window.location.href="http://localhost:8888/dashboardadmin/setSession.php?mrp="+words[0]+"&shopId="+words[1];

//            var str=content;
//            str.split();
//            document.getElementById("txt").value=content;

    });
    Instascan.Camera.getCameras().then(function (cameras){
        if(cameras.length>0){
            scanner.start(cameras[0]);
            $('[name="options"]').on('change',function(){
                if($(this).val()==1){
                    if(cameras[0]!=""){
                        scanner.start(cameras[0]);
                    }else{
                        alert('No Front camera found!');
                    }
                }else if($(this).val()==2){
                    if(cameras[1]!=""){
                        scanner.start(cameras[1]);
                    }else{
                        alert('No Back camera found!');
                    }
                }
            });
        }else{
            console.error('No cameras found.');
            alert('No cameras found.');
        }
    }).catch(function(e){
        console.error(e);
        alert(e);
    });
</script>

<center>
<div class="btn-group btn-group-toggle mb-5" data-toggle="buttons">
  <label class="btn btn-primary active">
    <input type="radio" name="options" value="1" autocomplete="off" checked> Front Camera
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="options" value="2" autocomplete="off"> Back Camera
  </label>
</div>
    </center>
</div>
<?php  
$amt = "<script>document.write(amt);</script>";
echo "hekk 9== ".$amt;
        ?>
<?php include 'footer.php';?>