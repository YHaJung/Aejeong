<!DOCTYPE html>
<html>

<head>
<title> Login </title>
</head>

<body>
	<?php
		$id=$_POST['id'];
		$password=$_POST['password'];

		session_start();

		$db=new mysqli('localhost', 'aejeong', 'aejeong123', 'aejeong');
		if(mysqli_connect_errno()){
			echo "<p>Error: Could not connect to database. <br/>Please try again later.</p>";
			exit();
		}


		$query = "SELECT * FROM Users WHERE UserID='$id'";
		$result = $db->query($query);

		if(mysqli_num_rows($result)==1){
			$row=mysqli_fetch_assoc($result);

			if($row['Password']==md5($password)){
				$_SESSION['UserID']=$id;
				if(isset($_SESSION['UserID'])){
				?>	<script>
						alert("�α��� �Ǿ����ϴ�.");
						location.replace("(�α��ε� ȭ��)");
					</script>
	<?php
				}
				else{
					echo "session fail";
				}
			}
			else {
			?>	<script>
					alert("���̵� Ȥ�� ��й�ȣ�� �߸��Ǿ����ϴ�.");
					history.back();
				</script>
	<?php
			}
		}
		else {
		?>	<script>
				alert("���̵� Ȥ�� ��й�ȣ�� �߸��Ǿ����ϴ�.");
				history.back();
			</script>
<?php
		}
		$db->close();

	?>
</body>

</html>