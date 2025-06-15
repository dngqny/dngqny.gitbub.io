<!DOCTYPE html>
<html>
<head>
	<title>Confirm Room Book</title>
</head>
<style>
	body {
	  margin: 0;
	  background: #f2f2f2;
	}
	table {
		font-size: 22px;
	}
	p {
		font-size: 24px;
	}
	#td1
	{
		background-color: #203D70;
		color: white;
		border: 10px;
		margin-top: -10px;
		padding: 10px;
		text-align: center;
	}
	td {
		text-align: left;
	}
	th {
		font-weight: bold;
		text-align: left;
	}
	ul {
	  	list-style-type: none;
	  	margin: 0;
	  	padding: 0;
	  	width: 22%;
	  	font-size: 24px;
	  	background-color: #203D70;
	  	text-decoration: none;
	  	position: fixed;
	  	height: 100%;
	  	overflow: auto;
	}
	li {
		color: white;
	}
	a {
	  	display: block;
	  	color: white;
	  	padding: 8px 16px;
	  	text-decoration: none;
	}
	a:active {
	  	background-color: #e6b800;
	  	color: white;
	  	text-decoration: underline;		
	}
	a:hover {
	  	background-color: #e6b800;
	  	color: white;
	  	text-decoration: underline;
	}
</style>
<body>
	<?php
		$conn = new mysqli("localhost","root","root", "iwp");
		if($conn->connect_error)
		{
			die("Connection failed: ".$conn->connect_error);
		}
		$sql = "SELECT * from temp_session";
		$result=mysqli_query($conn, $sql);
		$row=mysqli_fetch_row($result); ?>
	<table style="width: 100%;">
		<tr>
			<td id="td1" style="padding: 10px; font-size: 48px;">THE <p style="color: #e6b800; font-size: 48px; display: inline;">DELUXE</p> HOTEL</td>
			<td id="td1" style="font-size: 25px; text-align: right;">Hello, <?php echo $row[2]; ?></td>
		</tr>
	</table>
	<ul>
		<li><a href="bookroom.php">我的信息</a></li>
		<li><a href="bookroom.php">预订房间</a></li>
		<li><a href="user_room_status.php">显示预订状态</a></li>
		<li><a href="user_payment.php">支付</a></li>
		<li><a href="user_booking_history.php">预订历史</a></li>
		<li><a href="index.php">登出</a></li>
	</ul>
	<div style="margin-left:25%;padding:1px 16px;height:1000px;">
		<p>房间预订请求已成功提交！<br>现在请等待管理员确认该请求。</p>
		<P><br>点击"下一步"以跳转至首页。</P>
		<a href="user_view.php" style="width: 10%; text-align: center; color: black; border: 3px solid #e6b800;">Next</a>
	</div>
</body>
</html>