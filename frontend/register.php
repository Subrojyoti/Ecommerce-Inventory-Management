<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0"
		/>
        <link rel="stylesheet" href="../css/register.css">
		<title>Registration Form</title>
	</head>

	<body>
		<div class="main">
			<h2>Registration Form</h2>
			<form action="../backend/register.php" method="post">
				<label for="first"
					>First Name:</label
				>
				<input
					type="text"
					id="f_name"
					name="first"
					required
				/>

				<label for="last"
					>Last Name:</label
				>
				<input
					type="text"
					id="last"
					name="last"
					required
				/>
                
                <label for="username"
					>Username:</label
				>
				<input
					type="text"
					id="username"
					name="username"
					required
				/>
				<label for="password"
					>Password:</label
				>
				<input
					type="password"
					id="password"
					name="password"
					pattern="^(?=.*\d)(?=.*[a-zA-Z])(?=.*[^a-zA-Z0-9])\S{8,}$"
					title="Password must contain at least one number, 
						one alphabet, one symbol, and be at 
						least 8 characters long"
					required
				/>

				<button type="submit">
					Submit
				</button>
			</form>
		</div>
	</body>
</html>
