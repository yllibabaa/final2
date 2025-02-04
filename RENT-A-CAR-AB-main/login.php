<?php

include_once("header.php");
include_once('sessions.php');
include_once('config.php');

if(isset($_SESSION['userId'])){
    header('Location:index.php');
}


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];
    try{
        $query = 'SELECT * FROM users WHERE email = :email AND password = :password;';

        $prep = $pdo->prepare($query);

        $prep->bindParam(':email',$email);
        $prep->bindParam(':password',$password);

        $prep->execute();

        $fetched = $prep->fetch(PDO::FETCH_ASSOC);

        if($fetched){
            $_SESSION['userId'] = $fetched['id'];
            header('Location:index.php');
        }else{
            echo "Wrong Password";
        }
    } catch(PDOException $e){
        echo "Failed " . $e->getMessage();
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Car Rental - Login</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Arial', sans-serif;
  background-color: #2e2e2e;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  color: #fff;
}

.container {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
}

.form-box {
  background-color: #3a3a3a;
  padding: 30px;
  border-radius: 10px;
  width: 350px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
}

h2 {
  text-align: center;
  margin-bottom: 20px;
  color: #f1c40f;
}

.input-group {
  margin-bottom: 20px;
}

.input-group label {
  display: block;
  font-size: 14px;
  margin-bottom: 5px;
  color: #ccc;
}

.input-group input {
  width: 100%;
  padding: 10px;
  font-size: 16px;
  border-radius: 5px;
  border: none;
  background-color: #444;
  color: #fff;
}

.input-group input:focus {
  outline: none;
  border: 2px solid #f1c40f;
}

.btn {
  width: 100%;
  padding: 12px;
  background-color: #f1c40f;
  border: none;
  border-radius: 5px;
  color: #333;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s;
}

.btn:hover {
  background-color: #e1b90f;
}

p {
  text-align: center;
  margin-top: 15px;
  color: #ccc;
}

a {
  color: #f1c40f;
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}
  </style>
</head>
<body>
  <div class="container">
    <!-- Login Form -->
    <div class="form-box" id="login-box">
      <h2>Login</h2>
      <form action="" method="POST">
        <div class="input-group">
          <label for="login-email">Email</label>
          <input type="email" id="login-email" placeholder="Enter your email" name="email" required>
        </div>
        <div class="input-group">
          <label for="login-password">Password</label>
          <input type="password" id="login-password" placeholder="Enter your password" name="password" required>
        </div>
        <button type="submit" class="btn">Login</button>
        <p>Don't have an account? <a href="register.html">Register here</a></p>
      </form>
    </div>
  </div>
</body>
</html>


<?php include('footer.php')?>