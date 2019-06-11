<?php
    session_start();
    $i=$_COOKIE["count"];
    $x=$_COOKIE["count2"];
    $y=$_COOKIE["count3"];
    // echo $x;
    // echo "考古上傳使用次數".$i;
    $link=@mysqli_connect('localhost','root','jing1030','php');
    // if($link){
    //     echo "success";
    // }

    $SQLinsert="INSERT into usingnum(upload,download,comment) VALUES ('$i','$x','$y')";
    $result=mysqli_query($link,$SQLinsert);
    $SQL="SELECT DISTINCT upload,download,comment FROM usingnum";
    $result2=mysqli_query($link,$SQL);
    while($row = mysqli_fetch_array($result2)){ 
        $arr[0] = array( 
            "upload",(int)$row['upload']
        ); 
        $arr[1] = array("download",(int)$row['download']);
        $arr[2] = array("comment",(int)$row['comment']);
    } 
    $data = json_encode($arr);
// echo $data;
    // $SQLinsert2="INSERT into usingnum(download) VALUES ('$x')";
    // $result2=mysqli_query($link,$SQLinsert2);
    // $SQL2="SELECT DISTINCT dowload FROM usingnum";
    // $result3=mysqli_query($link,$SQL);
    // while($row = mysqli_fetch_array($result3)){ 
    //     $arr2[] = array( 
    //         "download",(int)$row['download'] 
    //     ); 
    // } 
    // $data2 = json_encode($arr2);
    // echo $data2;
    // echo $data;
?>
<html>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://code.highcharts.com/highcharts.js"></script>


    </head>
    <body>
   
    <script language="JavaScript">
    // <script type="text/javascript">
        
    $(document).ready(function(){
        // $(document).ready(function() {  
   var chart = {
       plotBackgroundColor: null,
       plotBorderWidth: null,
       plotShadow: false
   };
   var title = {
      text: '網站功能使用量分析'   
   };      
   var tooltip = {
      pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
   };
   var plotOptions = {
      pie: {
         allowPointSelect: true,
         cursor: 'pointer',
         dataLabels: {
         enabled: false           
         },
         showInLegend: true
      }
   };
   var series= [{
      type: 'pie',
      name: 'function',
      data: <?php echo $data ?>
   }];
 
   var json = {};   
   json.chart = chart; 
   json.title = title;     
   json.tooltip = tooltip;  
   json.series = series;
   json.plotOptions = plotOptions;
   $('#container').highcharts(json);     
    });  
      
    </script> 
     <form id="form1" runat="server">
     <div id="container" style="width: 1024px; height: 500px; margin: 0 auto"></div>
    </body>
    </html>
    <!-- <html><a href="admin.php">回到管理者介面</a></html> -->