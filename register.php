<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="utf-8"/>
	<title>REJESTRACJA</title>
	<link rel="stylesheet" type="text/css" href="stylereg.css">
</head>
<body>
<div class="final">
	<label><h1>finalsport.pl</h1></label>
</div>
<form autocomplete="off" action="register.php" method="post">
     	<h2>REJESTRACJA</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
		<div autocomplete="off" class="absolute-container">
			<input type="text" name="username" maxlength="30" placeholder="Nazwa użytkownika" required><br>
		</div>
		<div autocomplete="off" class="absolute-container">
			<input type="password" name="password" minlength="8" placeholder="Hasło" required><br>
		</div>
		<div autocomplete="off" class="absolute-container">
			<input type="text" name="email" minlength="5" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" placeholder="Email" required><br>
		</div>
		<div autocomplete="off" class="absolute-container">
			<div autocomplete="off" class="bottom-marg">
				<input type="text" name="phone" minlength="9" maxlength="9" pattern="[0-9]+" placeholder="Telefon" required><br>
			</div>
		</div>
		<div class="form-spacer"></div>
	 <div class="button-container-reg">
        <button class="reg-button" type="submit">Zarejestruj się</button>
    </div>
</form>	
<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "mywebdb";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Błąd połączenia z bazą danych: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = isset($_POST['username']) ? $_POST['username'] : '';
	$password = isset($_POST['password']) ? $_POST['password'] : '';
	$email = isset($_POST['email']) ? $_POST['email'] : '';
	$phone = isset($_POST['phone']) ? $_POST['phone'] : '';

	
	$stmt = mysqli_prepare($conn, "INSERT INTO users (username, upassword, email, phone) VALUES (?, ?, ?, ?)");
	mysqli_stmt_bind_param($stmt, "ssss", $username, $password, $email, $phone);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
}
?>
 
</body>
</html>