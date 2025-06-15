<!DOCTYPE html>
<html>
<head>
	<title>User Room Book</title>
</head>
<style>
	body {
	  margin: 0;
	  background: #f2f2f2;
	}
	table {
		font-size: 22px;
	}
	#td1
	{
		background-color: rgba(09,41,98,0.9);
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
	li a:active {
	  	background-color: #e6b800;
	  	color: white;
	  	text-decoration: underline;		
	}
	li a:hover {
	  	background-color: #e6b800;
	  	color: white;
	  	text-decoration: underline;
	}
	.basic_box {
		border: 1px solid #ccc;
		border-radius: 15px;
		margin: auto;
		width: 600px;
		padding: 50px;
		box-shadow: 0 10px 20px rgba(0,0,0,0.19);
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
			<td id="td1" style="padding: 10px; font-size: 48px;">THE <p style="color: #e6b800; display: inline;">DELUXE</p> HOTEL</td>
			<td id="td1" style="font-size: 25px; text-align: right;">Hello, <?php echo $row[2]; ?></td>
		</tr>
	</table>
	<ul>
		<li><a href="user_view.php">我的信息</a></li>
		<li><a href="bookroom.php">预订房间</a></li>
		<li><a href="user_room_status.php">显示预订状态</a></li>
		<li><a href="user_payment.php">支付</a></li>
		<li><a href="user_booking_history.php">预订历史</a></li>
		<li><a href="index.php">登出</a></li>
	</ul>
	<div style="margin-left:25%;padding:1px 16px;height:1000px;">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>
			<table class="basic_box">
				<tr>
					<th colspan="3"><p style="font-size: 28px; text-align: center; text-decoration: underline;">房间信息</p></th>
				</tr>
				<tr>
					<th>房间类型</th>
					<th>客床数量</th>
					<th>价格</th>
				</tr>
				<tr>
					<td>单床房</td>
					<td>1</td>
					<td>1000</td>
				</tr>
				<tr>
					<td>双床房</td>
					<td>2</td>
					<td>1800</td>
				</tr>
				<tr>
					<td>套床房</td>
					<td>4</td>
					<td>3000</td>
				</tr>
			</table><br><br>
			<form class="basic_box" action="bookroom1.php" method="post">
				<table>
					<br><br>
					<tr>
						<td style="text-align: left;">选择房间类型:</td>
						<td style="text-align: left;">
							<select name="rooms" required>
								<option value="">选择</option>
								<option value="Single bed">单床房</option>
								<option value="Double bed">双床房</option>
								<option value="Four bed">套房</option>
							</select>
						</td>
					</tr>
					<tr>
						<td style="text-align: left;">输入入住时间:</td>
						<td style="text-align: left;">
							<input type="date" name="checkin">
						</td>
					</tr>
					<tr>
						<td style="text-align: left;">输入退房时间:</td>
						<td style="text-align: left;">
							<input type="date" name="checkout">
						</td>
					</tr>
				</table>
				<tr>
						<td colspan="2" style="text-align: center;"><input type="submit" value="Submit"></td>
				</tr>
				<table>
					<br>
					<tr>
						<th>Features</th>
						<th>Service Cost per day</th>
					</tr>
					<tr>
						<td><input type="checkbox" name="ac" value="on">AC</td>
						<td style="text-align: center;">300</td>
					</tr>
					<tr>
						<td><input type="checkbox" name="breakfast" value="on">Breakfast</td>
						<td style="text-align: center;">150</td>
					</tr>
					<tr>
						<td><input type="checkbox" name="lunch" value="on">Lunch</td>
						<td style="text-align: center;">300</td>
					</tr>
					<tr>
						<td><input type="checkbox" name="snacks" value="on">Evening Snacks</td>
						<td style="text-align: center;">120</td>
					</tr>
					<tr>
						<td><input type="checkbox" name="dinner" value="on">Dinner</td>
						<td style="text-align: center;">250</td>
					</tr>
					<tr>
						<td><input type="checkbox" name="swimming" value="on">Swimming Pool Access</td>
						<td style="text-align: center;">300</td>
					</tr>
					<tr><br></tr>
					
				</table>
			</form>
	</div>
</body>
</html>