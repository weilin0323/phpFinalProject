<?php
 session_start();
 $link=@mysqli_connect('localhost','root','','php');
	// $account = $_POST["account"];
	// if($_GET["logout"]=="yes"){
    //     unset($_SESSION["manager"]);
    //     echo "請登入";
    //     header("Refresh:2;url=signin.php");
    // }
	if(!isset($_SESSION["manager"])){
		echo "非法進入!!!2秒後回登入首頁";
		header("Refresh:2;url=signin.php");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>管理者首頁</title>
	<!-- <link rel="stylesheet" href="admin.css"/> -->
	<link rel="stylesheet" href="all.css">
	<link rel="stylesheet" href="all2.css">
	<script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
</head>
<body>
<div class="wrap">
        <div class="header">
            <div class="logo">
                <a href="home.php"><img src="https://scontent.fkhh1-1.fna.fbcdn.net/v/t1.0-9/59887336_2148001515320668_3034674628355162112_n.jpg?_nc_cat=102&_nc_ht=scontent.fkhh1-1.fna&oh=3e3b0a3597d9b5d9d1618160a6ef6f59&oe=5D5B49C3" alt=""></a>
            </div>
            <div class="function">
             <div class="list">
                 <ul>
					<li ><a href="classscore.php">課程評價</a></li>
					<li ><a href="uploadfile.php">考古</a></li>
					<li ><a href="commentmanager.php">評論區</a></li>
					<li ><a href="boardmanager.php">布告欄</li>
					<li ><a href="admin.php">功能分析</a></li>
                </ul>
            </div>
            </div>
            <div class="clear"></div>
            <div class="title">
                <div class="welcome"><marquee scrollamount="10" behavior="alternate">管理員 Welcome!!</marquee></div>
                
            </div>
        </div>
    <div class="content">
		<div class="top"><h1>功能分析</h1></div>
		<div class="clear"></div>
		<div class="innerText">
		<?php
			session_start();
			$i=$_COOKIE["count"];
			$x=$_COOKIE["count2"];
			$y=$_COOKIE["count3"];

			$link=@mysqli_connect('localhost','root','','php');

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
		?>
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
		</div>
	</div>
    <div class="clear"></div>
    <div class="footer"></div>
    </div>

</body>
</html>



