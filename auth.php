<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
     session_start(); 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $type = $_POST['type'];
      $servername = "localhost";
      $username = "root";
      $dbname = "weather";
      $conn = new mysqli($servername, $username, null, $dbname);

      if ($conn->connect_error) {
        header("Location: 404.html");
        die();
      }

      if ($type == 'register') {
        
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['floatingInput'];
        $password = $_POST['floatingPassword'];
        $hash = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (FirstName, LastName, Email, Password) VALUES ('$firstName', '$lastName', '$email', '$hash')";
        if ($conn->query($sql) === TRUE) {
          header("Location: login.html");
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }

      }
      elseif ($type == 'login') {
        $email = $_POST['floatingInput'];
        $password = $_POST['floatingPassword'];

        $sql = "SELECT Email, Password, UserID, FirstName, LastName FROM users WHERE Email='$email'";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            $unhash = password_verify($password, $row["Password"]); 
            if ($unhash) {
              $_SESSION['user'] = $row['UserID'];
              header("Location: home.php");
            } else {
              header("Location: login.html");
            }
          }
        } else {
          echo "No account found";
        }
      }
      else {
        header("Location: 404.html");
        die();
      }
      $conn->close();      
    }
  ?>
  
</body>
</html>