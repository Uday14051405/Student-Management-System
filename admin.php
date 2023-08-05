<?php
    include 'conn.php';
?>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="adminstyle.css" type="text/css">
</head>
<body>
   <form action="" method="POST">
    <div class="container">
        <div class="heading">Admin Panel</div>
        <a href="index.php">
            <img src="./img/back1.png" height="20px" width="20px">
        </a>
        <label for="email" class="txtemail">E-mail:</label>
        <input type="text"  class="Mno" name="Mno" placeholder="Mobile number or Email address"> 
        <label for="password" class="txtpass">Password:</label>
        <input type="text"  id= "pass" name="pass" placeholder="New Password">
         <button class = "lgn" name="lgn">Login</button>
    </div>
    </form>
</body>
<?php
    if(isset($_POST['lgn']))
    {

        $sql = "SELECT * FROM `admintb`";
        $result = mysqli_query($conn,$sql);
		while($d = mysqli_fetch_array($result))
		{
            if($d['Email'] == $_POST['Mno'])
            {
                if($d['Password'] == $_POST['pass'])
                {
                    header("Location:admindashboard.php");
                }
                else
                {
                    echo "<center><span style='color:Red'>Wrong Password</span></center>";
                    break;
                }
            }
            else{
                echo "<center><span style='color:Red'>you input Wrong Email Address!</span></center>";
                break;
            }
        }
    }
?>