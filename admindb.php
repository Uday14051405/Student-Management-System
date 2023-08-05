<?php
    include 'conn.php';
    if(isset($_POST['new']))
    {
        $id = $_POST['txtid'];	
        $img = $_POST['uploadfile'];	
        $name = $_POST['txtname'];	
		$email = $_POST['txtemail'];	
		$cont = $_POST['txtcont'];	
		$pass = $_POST['txtpass'];	
        
        $sql = "INSERT INTO `stutb`(`Id`,`Image`,`Name`,`Email`,`Contact`,`Password`) VALUES('$id','$img','$name','$email','$cont','$pass')";
        $result = mysqli_query($con,$sql);
        
        if($result)
        echo "The Table has been Insert Succesfully!";
        else
        echo "The Table was not Insert succesfully -->".mysqli_error($conn1);
    }
?>
