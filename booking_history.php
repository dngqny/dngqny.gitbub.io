<!DOCTYPE html>
<html>
<head>
	<title>Admin Booking History</title>
</head>
<style>
	body {
	  margin: 0;
	  background: #f2f2f2;
	}
	table {
		font-size: 22px;
	}
	td {
		text-align: center;
	}
	.basic_box {
		border: 1px solid #ccc;
		border-radius: 15px;
		margin: auto;
		width: 600px;
		padding: 50px;
		box-shadow: 0 10px 20px rgba(0,0,0,0.19);
	}
	#td1
	{
		background-color: rgba(09,41,98,0.9);
		color: white;
		border: 10px;
		margin-top: -10px;
		padding: 10px;
	}
	th {
		font-weight: bold;
		padding-left: 15px;
	}
	ul {
	  	list-style-type: none;
	  	margin: 0;
	  	padding: 0;
	  	width: 22%;
	  	font-size: 24px;
	  	background-color: rgba(09,41,98,0.9);
	  	text-decoration: none;
	  	position: fixed;
	  	height: 100%;
	  	overflow: auto;
	}
	li {
		color: white;
	}
	li a {
	  	display: block;
	  	color: white;
	  	padding: 8px 16px;
	  	text-decoration: none;
	}

	li a.active {
	  	background-color: #e6b800;
	  	color: white;
	}

	li a:hover:not(.active) {
	  	background-color: #e6b800;
	  	color: white;
	  	text-decoration: underline;
	}
</style>
<body>
	<table style="width: 100%;">
		<tr>
			<td id="td1" style="padding: 10px; font-size: 48px;">THE <p style="color: #e6b800; display: inline;">DELUXE</p> HOTEL</td>
		</tr>
	</table>
	<ul>
	<li><a href="admin_view.php" class="active">房间信息</a></li>
		<li><a href="add_room_admin.php">添加房间</a></li>
		<li><a href="remove_room_admin.php">移除房间</a></li>
		<li><a href="admin_room_status.php">预订请求</a></li>
		<li><a href="confirmed_bookings.php">预订确认</a></li>
		<li><a href="booking_history.php">预订历史</a></li>
		<li><a href="index.php">登出</a></li>
	</ul>
	<div style="margin-left:25%;padding:1px 16px;height:1000px;">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>
			<table class="basic_box">
				<tr>
					<td colspan="6"><p style="font-size: 28px; text-align: center; text-decoration: underline;"><b>预订历史</b></p>
				</td>
				<tr>
					<th>订单编号</th>
					<th>客户姓名</th>
					<th>房间类型</th>
					<th>入住时间</th>
					<th>退房时间</th>
					<th>价格</th>
				</tr>
				<tr>
				<?php
					$conn = new mysqli("localhost","root","root", "iwp");
					if($conn->connect_error)
					{
						die("Connection failed: ".$conn->connect_error);
					}
					$sql1 = "SELECT * from booked_hist";
					if ($result=mysqli_query($conn,$sql1))
				  	{
				  		while ($row=mysqli_fetch_row($result))
				    	{
				    		?>
				    		<td><?php echo $row[14]; ?></td>
				   			<td><?php echo $row[1]; ?></td>
				   			<td><?php echo $row[3]; ?></td>
				   			<td><?php echo $row[4]; ?></td>
				    		<td><?php echo $row[5]; ?></td>
				    		<td><?php echo $row[13]; ?></td>
				</tr><?php
				    	}
				    	mysqli_free_result($result); 
				    }?>
			</table><br><br>
			<table class="basic_box">
				<tr>
					<td colspan="1">输入订单编号:</td>
					<td colspan="2">
						<form action="admin_room_history.php" method="post">
							<input type="number" name="book_id">
					</td>
				</tr>
				<tr>
					<td></td>
					<td style="text-align: center;"><button type="submit">查看细节</button></td></form>	
				</tr>
			</table>
		</div>
	</body>
</html>