<?php   
		$con = mysqli_connect('127.0.0.1', 'root','','gegle');
		$q = mysqli_query($con, 'SELECT * FROM users');
		$num = mysqli_num_rows($q);
		for ($i=0; $i < $num ; $i++) { 
		$stroka = $q->fetch_assoc();
			if ($_POST['user'] == $stroka['name'] && $_POST['pass'] == $stroka['password']  ) {
				header("Location: home.php?lol={$stroka['id']}");
				break;

			} 
		}
		if ($i == $num) {
			header("Location: index.php");
		}

	?>