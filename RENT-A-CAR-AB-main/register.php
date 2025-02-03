<?php
    require 'config.php';
    if(isset($_SESSION['userId'])){
        header('Location:index.php');
    }


    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone_number = $_POST['phone_number'];

        try{
            $query = 'INSERT INTO users(full_name,email,phone_number,password) VALUES (:full_name,:email,:phone_number,:password);';
            $prep = $pdo->prepare($query);

            $prep->bindParam(':full_name',$full_name);
            $prep->bindParam(':email',$email);
            $prep->bindParam(':password',$password);
            $prep->bindParam(':phone_number',$phone_number);

            $prep->execute();

            if($prep->rowCount()){
                header('Location:logIn.php');
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
  <title>Car Rental - Login & Register</title>
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
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Car Rental - Register</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="container">
    <div class="form-box" id="register-box">
      <h2>Register</h2>
      <form action="" method="post">
        <div class="input-group">
          <label for="register-name">Full Name</label>
          <input type="text" id="register-name" placeholder="Enter your full name" name="full_name" required>
        </div>
        <div class="input-group">
          <label for="register-email">Email</label>
          <input type="email" id="register-email" placeholder="Enter your email" name="email" required>
        </div>
        <div class="input-group">
          <label for="register-phone">Phone Number</label>
          <input type="tel" id="register-phone" placeholder="Enter your phone number" name="phone_number" required>
        </div>
        <div class="input-group">
          <label for="register-password">Password</label>
          <input type="password" id="register-password" placeholder="Enter a password" name="password" required>
        </div>
        
        <button type="submit" class="btn">Register</button>
        <p>Already have an account? <a href="login.php">Login here</a></p>
      </form>
    </div>
  </div>
</body>
</html>

