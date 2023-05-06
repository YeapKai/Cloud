<!DOCTYPE html>
<html>
<head>
	<title>Modify Password</title>
	<style>
		body {
			background-color: #f2f2f2;
			font-family: Arial, sans-serif;
		}

		.container {
			background-color: #fff;
			border: 1px solid #ddd;
			border-radius: 5px;
			padding: 20px;
			width: 400px;
			margin: auto;
			margin-top: 50px;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
		}

		h2 {
			text-align: center;
			color: #5d5d5d;
		}

		form label {
			display: block;
			font-size: 16px;
			font-weight: bold;
			color: #5d5d5d;
			margin-bottom: 10px;
		}

		form input[type="text"],
		form input[type="password"] {
			width: 100%;
			padding: 10px;
			font-size: 16px;
			border: 1px solid #ddd;
			border-radius: 5px;
			margin-bottom: 20px;
			box-sizing: border-box;
		}

		form input[type="submit"] {
			background-color: #2f9cb2;
			color: #fff;
			border: none;
			border-radius: 5px;
			padding: 10px 20px;
			font-size: 16px;
			cursor: pointer;
                        
		}

		form input[type="submit"]:hover {
			background-color: #2f9cb2;

		}

        .submit-btn-container {
            text-align: center;
        }
         a {
                display: block;
                margin-top: 10px;
                text-align: center;
                color: #999;
                font-size: 14px;
                text-decoration: none;
            }
            
            a:hover {
                color: #257f92;
            }
	</style>
</head>
<body>
	<div class="container">
		<h2>Change Password</h2>
		<form action="modify_password.php" method="POST">
			<label for="email">Username:</label>
			<input type="text" name="email" required><br><br>

			<label for="password">Current Password:</label>
			<input type="password" name="password" required><br><br>

			<label for="new_password">New Password:</label>
			<input type="password" name="new_password" required><br><br>

			<div class="submit-btn-container">
                            <input type="submit" name="update" value="Submit">
                              <a href="index.php" style="display: inline-block; margin-left: 10px; font-weight: bold">Login</a>
            </div>
		</form>
	</div>
</body>
</html>
