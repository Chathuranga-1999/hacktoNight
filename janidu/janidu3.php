<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    * {
    box-sizing: border-box;
}

body{
    margin: 0; 
    background-image: url('../image/regiback.jpg');       
}
    

.thanks {
    text-align: center;
    align-items: center;
    padding: 2rem 1rem;
    width:100%;
    height:100vh;

    flex-direction: column;
    height: initial;
    max-width:620px;
    margin:0 auto;
    margin-top: 10rem;
    display: flex;
    box-shadow: 4px 8px 40px 8px rgba(88, 146, 255, 0.2);
}

.thanks-contant {
    padding: 30px;
    text-align: center;
}

.thanks h1 {
    font-size:4em;
    letter-spacing: 3px;
    font-family: 'Kaushan Script', cursive;
    color:green;
    margin: 0;
}

.thanks-contant p {
    letter-spacing: 1px;
    font-size: 1.3rem;
    color:#aaa;
    font-family: 'Source Sans Pro';
}

.thanks-to-home-btn {
    padding-top: 2rem;
    padding-bottom: 1.5rem;
    color: lightgreen;
}

.thanks .btn {
    color: #fff;
    background-color:#5892FF;
    text-decoration: none;
    padding: .8rem 2.5rem;
    border-radius: 20px;
}

.not-receved-mail p {
    margin:0;
    padding:4px;
    color:#5892FF;
    font-family: 'Source Sans Pro', sans-serif;
    letter-spacing:1px;   
}

.not-receved-mail a {
    text-decoration:none;
    color:#5892FF;
    font-weight:600;   
}
  </style>
</head>
<body>
  


<?php

if(isset($_POST['Name']) && isset($_POST['Email']) && isset($_POST['Password']) && isset($_POST['Country'])) {
    include 'regi.php';

    function validate($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    $Name = validate($_POST['Name']);
    $Email = validate($_POST['Email']);
    $Password = validate($_POST['Password']);
    $Country = validate($_POST['Country']);


    if(empty($Name) || empty($Email) || empty($Password) || empty($Country)) {
      header("Location: index.php");
        } else {
            $sql = "insert into registration(Name, Email, Password, Country ) values('$Name','$Email','$Password','$Country')";
            $res = mysqli_query($conn, $sql);

            if($res) {
              echo "";
            } else {
               echo "Your message could not be sent!";
            }
          }
} else {
  header("Location: index.php");
}

?>

<div class="thanks">
        <div class="thanks-contant">
            <h1>Thank you!</h1>
            <p>Thanks for subscribing to our news latter.
                you should receive a confirmation email soon
            </p>
            <div class="thanks-to-home-btn"><a class="btn" href="../html/HomePage.html">Go Home</a>
            </div>
        </div>
    </div>


</body>
</html>