<meta charset="utf-8">
<?
				$host ="localhost";
				$user="root";
				$pass ="1234";
				$db = "web";
				$conn = mysql_connect($host,$user,$pass);
				mysql_select_db($db,$conn)  or die ("error");
				mysql_query("SET NAME UTF-8");

					$sql = "SELECT register.`user`, register.firstname, register.lastname, orders.nameorder, `preorder`.statusorder, `preorder`.money, register.address
                               FROM register, orders, `preorder` WHERE register.`user` = `preorder`.`user` =`preorder`.orders = orders.orders ";
					$re = mysql_query($sql,$conn);





?>



<link rel="stylesheet" href="css/testadmin.css">
<h1><span class="blue">&lt;</span>Admin<span class="blue">&gt;</span> <span class="yellow">จัดการฐานข้อมูลครับ</pan></h1>
<h2><a href="testadmin.php">สมาชิก</a>&nbsp;&nbsp;<a href="manager.php">รายการสั่งซื้อ</a>&nbsp;&nbsp;<a href="pro.php">คลังสินค้า</a>&nbsp;&nbsp;<a href="index.php">กลับสู่หน้าหลัก</a>&nbsp;&nbsp;<a href="showtotal.php">เเสดงรายการสั่งซื้อทั้งหมด</a></h2>
<?
			echo '<table class="container">';
			echo  '<thead>';
			echo '<tr>';
			echo '<th><h1>user (PK)</h1></th>';
			echo '<th><h1>firstname</h1></th>';
			echo '<th><h1>lastname</h1></th>';
			echo '<th><h1>สินค้า</h1></th>';
			echo '<th><h1>จำนวน</h1></th>';
			echo '<th><h1>ยอดเงินรวม</h1></th>';
			echo '<th><h1>ที่อยู่</h1></th>';
			//echo '<th><h1>แก้ไขข้อมูล</h1></th>';
			echo '<th><h1>ลบข้อมูล</h1></th>';
			echo '</tr>';
			echo '</thead>';
			echo '</thead>';
	
	while ($result = mysql_fetch_array ($re)){
		echo '<tr>';
			echo "<td>".$result['user']."</td>";
			echo "<td>".$result['firstname']."</td>";
			echo "<td>".$result['lastname']."</td>";
		    echo "<td>".$result['nameorder']."</td>";
			echo "<td>".$result['statusorder']."</td>";
			echo "<td>".$result['money']."</td>";
			echo "<td>".$result['address']."</td>";
			
			//echo "<td ><a href ='edituser.php?id=".$result['user']." '>แก้ไข</a></td>";
			echo "<td ><a href ='deleteshow.php?id=".$result['orders']." '>ลบข้อมูล</a></td>";
			echo '</tr>';

	}



?>