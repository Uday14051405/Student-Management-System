<?php
    include "conn.php";

?>

<html>
    <head>
        <title>Student dashboard</title>
        <style>
            body::before{
    content: "";
    background: url(./img/bgstu.jpg) no-repeat center center/cover;
    position: absolute;
    top: 0px;
    left: 0px;
    height: 100%;
    width: 100%;
    z-index: -1;
    opacity:0.6;
}
    .divinput{
        background-color: white;
    box-shadow:#ababab 31px 82px 133px, #989797 -23px 1px 64px, #a7a7a7 0px 0px 0px, #a4a4a4 53px 21px 53px, rgb(168 168 168 / 9%) 10px 18px 17px;
    width: 264px;
    margin: auto;
    margin-top: 142px;
    }
    .txthead{
        height: 93px;
    width: 509px;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: auto;
    font-weight: bold;
    font-size: xxx-large;
    color: black;
    position: absolute;
    left: 355px;
    top: 16px;
    border-radius: 84px;
    background-color: white;
    box-shadow:#9e9e9e 10px 28px 69px, #acacac 0px -11px 20px, #939393 0px 17px 6px, #000000 0px 21px 19px, rgb(245 245 245 / 9%) 0px 18px 16px;
        }

        .btn1{
            border-radius: 84px;
    background-color: white;
    box-shadow: #9e9e9e 10px 28px 69px, #acacac 0px -11px 20px, #939393 0px 17px 6px, #000000 0px 21px 19px, rgb(245 245 245 / 9%) 0px 18px 16px;
    border: 2px;
    font-size: 17px;
    font-weight: bold;
    font-family: fangsong;
    padding: 11px;
    position: relative;
    /* right: -11px; */
    left: 1102px;
    top: 34px;
    cursor:pointer;
        }
        </style>
</head>
    <body>
        <div class="txthead">Student Panel</div>
        <a href="stupanel.php">
            <button class="btn1">Logout</button>
        </a>
        <?php
            if(isset($_POST['lgn']))
            {
                $sql = "SELECT * FROM `stutb` WHERE `Email` = '$_POST[Mno]' AND `Password`='$_POST[pass]'";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_assoc($result);

            ?>
                <center>
                    <form method="POST" action="" enctype="multipart/form-data"> 
                        <table border="1" class="divinput">
                            <tr>
                                <td colspan=2><center><img src= "<?php echo $row['Image']; ?>"  height="30px" width="30px"></center></td>
                            </tr>
                            <tr>
                                <td>ID</td>
                                <td><input name="txtid"  type="text" value = "<?php echo $row['Id']; ?>"></td>
                            </tr>
                            <tr>
                                <td>First Name</td>
                                <td><input name="txtfname"  type="text" value = "<?php echo $row['Fname']; ?>"></td>
                            </tr>
                            <tr>
                                <td>Last Name</td>
                                <td><input name="txtlname"  type="text" value = "<?php echo $row['Lname']; ?>"></td>
                            </tr>
                                <td>College</td>
                                <td><input name="txtclg"  type="text" value = "<?php echo $row['College']; ?>"></td>
                            </tr>
                            </tr>
                                <td>Department</td>
                                <td><input name="txtdp"  type="text" value = "<?php echo $row['Department']; ?>"></td>
                            </tr>
                            </tr>
                                <td>Course</td>
                                <td><input name="txtcourse"  type="text" value = "<?php echo $row['Course']; ?>"></td>
                            </tr>
                                <td>Contact</td>
                                <td><input name="txtct"  type="text" value = "<?php echo $row['Contact']; ?>"></td>
                            </tr>
                            </tr>
                                <td>Email</td>
                                <td><input name="txtemail"  type="text" value = "<?php echo $row['Email']; ?>"></td>
                            </tr>
                            </tr>
                                <td>Password</td>
                                <td><p><?php echo $row['Password']; ?></p></td>
                            </tr>
                            </tr>
                                <td>Gender</td>
                                <td>
                                    <center>
                                        <input type="radio" name="txtgen" value="Male" <?php echo ($row['Gender']=='Male')?'checked':'' ?>> Male
                                        <input type="radio" name="txtgen" value="Female" <?php echo ($row['Gender']=='Female')?'checked':'' ?>> Female
                                        <input type="radio" name="txtgen" value="Others" <?php echo ($row['Gender']=='Others')?'checked':'' ?>> Others
                                    </center>
                                </td>
                            </tr>
                            </tr>
                                <td>Status</td>
                                <td><input name="txtstatus"  type="text" value = "<?php echo $row['Status']; ?>"></td>
                            </tr>
                            <tr>
                                
                                    <td colspan=2><center><a href="index.php"><input name="submitbtnup" type="submit" value="Edit"></a></center></td>
                                
                            </tr>
                        </table>
                    </form>
                </center>
        <?php
            }
            if(isset($_POST['submitbtnup']))
            {
                $sqlu = "UPDATE `stutb` SET `Fname`='$_POST[txtfname]',
                    `Lname`='$_POST[txtlname]',
                    `College`='$_POST[txtclg]',
                    `Department`='$_POST[txtdp]',
                    `Course`='$_POST[txtcourse]',
                    `Contact`='$_POST[txtct]',
                    `Email`='$_POST[txtemail]',
                    `Gender`='$_POST[txtgen]',
                    `Status`='$_POST[txtstatus]'  
                    WHERE `ID` = '$_POST[txtid]'";

                $resul = mysqli_query($conn,$sqlu);
                if($resul)
                {
                    echo "<center style=' position: relative; top: 265px;'><font size='30px'>Your data has been updated<center>";
                }
                else
                    echo "<center style=' position: relative; top: 224px;'><font size='30px'>You failed to update data<center>";

            }
        ?>
    </body>
</html>

