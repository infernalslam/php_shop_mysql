<meta charset="utf-8">
<?
				$host ="localhost";
				$user="root";
				$pass ="1234";
				$db = "web";
				$conn = mysql_connect($host,$user,$pass);
				mysql_select_db($db,$conn)  or die ("error");

				$sqledit = "select * from  register  where user = '$id'  ";
				//echo "$id";
				$resultedit = mysql_query($sqledit,$conn);
				$result = mysql_fetch_array ($resultedit);
				//echo $result ['address'];

?>
				<form method="post" action="#">
						<table>
						<tr>
							<td>user</td>
							<td><input type="text" name="username" value="<? echo $result['user'];?>"></td>
						</tr>
						<tr>
							<td>password</td>
							<td><input type="password" name="password" value="<?echo $result ['password']; ?>"></td>
						</tr>
						<tr>
							<td>firstname</td>
							<td><input type="text" name="firstname" value="<?echo $result ['firstname']; ?>"></td>
						</tr>
						<tr>
							<td>lastname</td>
							<td><input type="text" name="lastname" value="<?echo $result ['lastname']; ?>"></td>
						</tr>
						<tr>
							<td>address</td>
							<td><textarea name="address" rows="4" cols="14" ><?echo $result ['address']; ?></textarea></td>
						</tr>
						<tr>
							<td>phone</td>
							<td><input type="tel" name="phone" value="<?echo $result ['phone']; ?>"></td>
						</tr>
						<tr>
							<td>email</td>
							<td><input type="email" name="email" value="<?echo $result ['email']; ?>"></td>
						</tr>
						<tr>
							<td><input type="reset" value="ลบข้อมูล"></td>
							<td><input type="submit" value="แก้ไขข้อมูล"name="sub"></td>
						</tr>
						</table>
					
				</form>
				<a href="admin.php">กลับไปหน้าดูข้อมูล</a>

				<?
						 $username = $_POST['username'];
						 $password = $_POST['password'];
						 $firstname = $_POST['firstname'];
						 $lastname = $_POST['lastname'];
						 $address = $_POST['address'];
						 $phone = $_POST['phone'];
						 $email = $_POST['email'];
						 $sub = $_POST['sub'];

						  if ($sub!=null){
						  
			$sqlUpdate = "Update register  set user='$username', password='$password',firstname='$firstname', lastname = '$lastname', address = '$address', phone ='$phone',email='$email' WHERE user = '$id' ";
			$resultUpdate = mysql_query($sqlUpdate);
						if ($resultUpdate){
													echo "<script type='text/javascript'>";
													echo "window.location='admin.php'";
													echo "</script>";
						}
						else echo "error insert";
						  
						  }
				
				
				?>
				