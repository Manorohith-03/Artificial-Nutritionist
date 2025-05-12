<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style type="text/css">
        .back {
            background-image: url('https://images.unsplash.com/photo-1485470733090-0aae1788d5af?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1517&q=80');
            background-size: cover;
            background-position: center;
            min-height: 100vh;
            width: 100%;
        }

        #text {
            height: 25px;
            border-radius: 5px;
            padding: 4px;
            border: solid thin #aaa;
            width: 95%;
        }

        #button {
            padding: 10px;
            width: 100px;
            color: white;
            background-color: lightblue;
            border: none;
        }

        #box {
            background-color: grey;
            margin: 0 auto;
            width: 400px;
            padding: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>
<body>
    <div class="back">
        <div id="box">
            <form method="post">
                <div style="font-size: 20px; margin: 10px; color: white;">Login</div>
                <div style="font-size: 20px; margin: 10px; color: white;">Mail : </div><input id="text" type="text" name="user_name"><br><br>
                <div style="font-size: 20px; margin: 10px; color: white;">Password : </div><input id="text" type="password" name="password"><br><br>
                <input id="button" type="submit" value="Login"><br><br>
                <a href="signup.php">Click to Signup</a><br><br>
            </form>
        </div>
    </div>
</body>
</html>
