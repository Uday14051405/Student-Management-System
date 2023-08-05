<?php
    include "conn.php";
?>
<html>
    <head>
        <title>Admin dashboard</title>
        <style>
            body::before{
                        content: "";
                        background: url(./img/bgadmin1.jpg) no-repeat center center/cover;
                        position: absolute;
                        top: 0px;
                        left: 0px;
                        height: 100%;
                        width: 100%;
                        z-index: -1;
                        opacity:0.6;
                        }
            body{
                height: 96%;
                width: 89%;
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
                left: 448px;
                border-radius: 84px;
                background-color: white;
                box-shadow: #9e9e9e 10px 61px 65px, #9e9e9e 0px -12px 30px, #9e9e9e 0px 18px 29px, #9e9e9e 0px 30px 29px, rgb(0 0 0 / 9%) 0px -11px 16px;

                }
            .container{
                        height: 538px;
                        width: 141px;
                        position: relative;
                        /* right: 0px; */
                        top: 0px;
                        background-color: #000000ed;
                        box-shadow: #9e9e9e 10px 61px 65px, #9e9e9e 0px -12px 30px, #9e9e9e 0px 18px 29px, #9e9e9e 0px 30px 29px, rgb(0 0 0 / 9%) 0px -11px 16px;
                        /* border-radius: 129px; */
                        border-radius: 10px 106px 7px 95px;
                    }
            .innercon{
                        position:relative;
                        top:141px;
                    }
            .action{
                position: relative;
                top: 61px;
                    }
            .bar{
                    opacity: 0.8;
                    /* overflow: scroll; */
                    /* border: 2px solid black; */
                    height: 483px;
                    width: 1049px;
                    left: 159px;
                    position: relative;
                    /* top: -483px; */
                    bottom: 478px;
                    background-color: white;
                    border-radius: 105px;
                }
            .tablesrh{
                        height: 459px;
                        margin: 2px;
                        width: 1062px;
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
                    top: 22px;
                    cursor:pointer;
                }
            .btn1:hover{
                font-size:19px;
                }
            .allsearch{
                        position: absolute;
                        border-radius: 13px;
                        left: 5px;
                        height: 34px;
                        width: 133px;
                        top: 6px;
                        border: 2px solid #8080804a;
                        cursor: pointer;
                     }
            .allsearch:hover{
                width:120px;
                }
            .new:hover{
                    width:120px;
                }
            .del:hover{
                    width:120px;
                }
            .upd:hover{
                    width:120px;
                }
            .adminnew:hover{
                    width:120px;
                }
            .search{
                    height: 32px;
                    position: absolute;
                    border-radius: 13px;
                    left: 4px;
                    top: 47px;
                    width: 133px;
                    border: 2px solid #8080804a;
                    cursor: pointer;
                }
            .search:hover{
                    width:120px;
                }
            .new{
                position: relative;
                top: 75px;
                border-radius: 41px;
                height: 33px;
                width: 133px;
                left: 0px;
                cursor: pointer;
                border: 2px solid #05050526;
                 }
            .del{
                position: relative;
                top: 77px;
                border-radius: 13px;
                height: 32px;
                left: 1px;
                cursor: pointer;
                border: 2px solid #80808059;
                width: 133px;
                 }
            .upd{
                width: 133px;
                position: relative;
                top: 79px;
                border-radius: 13px;
                height: 32px;
                left: 1px;
                border: 2px solid #80808063;
                cursor: pointer;
                }
            .adminnew{
                position: relative;
                top: 82px;
                left: 2px;
                height: 32px;
                width: 133px;
                border-radius: 13px;
                border: 2px solid #8080804d;
                cursor: pointer;
                    }
            .inpall{
                        position: relative;
                        top: 210px;
                }
            .td1 input{
            width: 80px;
            border: white;
                    }
            .table2{
            position:relative;
            top: 45px;
                }
      
            .divinput{
            
                    overflow-y: scroll;
                    top: 69px;
                    width: 1033px;
                    left: 6px;
                    position: relative;
                    height:350px;
                        }
            .table1{
            position:relative;
            top: 45px;
                }
            .table1 th{
            width: 77px;
                }
        </style> 
    </head>
    <body>
        <div class="txthead">Admin Panel</div>
        <div >
            <a href="admin.php">
                <button class="btn1">Logout</button>
            </a>
        </div>
        <div class="container">
            <form action="" method="POST">
                <div class="innercon">
                <table>
                    <tr>
                        <td><input type="submit" name=" allsearch" value="ALL Student Data" class="allsearch"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="search" value="Search Student" class="search"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="new" value="New Student" class="new"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="del" value="Delete Student" class="del"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="update" value="Update Student" class="upd"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="adminins" value="Admin Registration" class="adminnew"></td>
                    </tr>
                </table></div>
            </form>
            
        </div>
        <div class="bar">
             <!-- ALL Student data -->
            <div class="all">
             <?php
                    if(isset($_POST['allsearch']))
                    {
                        echo "<div class='divinput'><center>
                            <table border='1' class='table1'>
                            <tr>
                                <th><center>Id</center</th> 
                                <th><center>Images</center</th> 
                                <th><center>First name</center</th>
                                <th><center>Last name</center</th>
                                <th><center>College</center</th>
                                <th><center>Department</center</th>  
                                <th><center>Course</center</th>  
                                <th><center>Contact</center</th>
                                <th><center>Email</center</th>
                                <th><center>Password</center</th>   
                                <th><center>Gender</center</th>
                                <th><center>Status</center</th> 
                                </table>
                                </center>
                            <tr>";
                        $sql = "SELECT * FROM `stutb` ORDER BY Id DESC";
                        
                        $result = mysqli_query($conn,$sql);
                        while($d = mysqli_fetch_assoc($result))
                        {
                            echo "<div class='divinput1'><center><table border='2' class='table2'>
                            <tr>
                                <td class='td1'><center><input type='text' value='$d[Id]'></center></td>
                                 <td ><center><img src='$d[Image]'  height='40px' width='40px'></center></td>
                                <td class='td1'><center><input type='text' value='$d[Fname]'></center></td>
                                <td class='td1'><center><input type='text' value='$d[Lname]'></center></td>
                                <td class='td1'><center><input type='text' value='$d[College]'></center></td>
                                <td class='td1'><center><input type='text' value='$d[Department]'</center></td>
                           
                                <td class='td1'><center><input type='text' value='$d[Course]'</center></td>
                          
                                <td class='td1'><center><input type='text' value='$d[Contact]'</center></td>
                           
                                <td class='td1'><center><input type='text' value='$d[Email]'</center></td>
                           
                                <td class='td1'><center><input type='password' value='$d[Password]'></center> </td>
                        
                                <td class='td1'><center><input type='text' value='$d[Gender]'></center> </td>
                           
                                <td class='td1'><center> <input type='text' value='$d[Status]'></center> </td>
                            </tr>
                        </table>
                    </center></div>";
                                }
                    }
                ?>
                </div>
            <!-- SEARCH -->
            <div class="sear">
                <?php
                if(isset($_POST['search']))
                {   ?>
                    
                    <center>
                    <form action="" method="POST" >
                            <div class="inpall">

                                
                                <label>Enter Name : </label>
                                <input type='text' name='txtsearch' >
                                <input type='submit' name='submitbtn' value='Search'>
                            </div>
                        </form>
                    </center>
                    <?php
                }
                    if(isset($_POST['submitbtn']))
                    {

                        $sql = "SELECT * FROM `stutb` WHERE `Fname` = '$_POST[txtsearch]'";
                        $result = mysqli_query($conn,$sql);
                        while($d = mysqli_fetch_assoc($result))
                        {
                            echo "<div class='divinput'><center>
                            <table border='1' class='table'>
                            <tr>
                                <td><center>Image</center</td> 
                                <td><center><img src='$d[Image]'  height='40px' width='40px'></center></td>
                            </tr>
                            <tr>
                                <td><center>Id</center</td> 
                                <td><center><input type='text' value='$d[Id]'></td></center>
                            </tr>
                            <tr>
                                <td><center>First name</center</td> 
                                <td><center><input type='text' value='$d[Fname]'></td></center>
                            </tr>
                            <tr>
                                <td><center>Last name</center</td> 
                                <td><center><input type='text' value='$d[Lname]'></td></center>
                            </tr>
                            <tr>
                                <td><center>College</center</td> 
                                <td><center><input type='text' value='$d[College]'></td></center>
                            </tr>
                            <tr>
                                <td><center>Department</center</td> 
                                <td><center><input type='text' value='$d[Department]'</center></td>
                            </tr>
                            <tr>
                                <td><center>Course</center</td> 
                                <td><center><input type='text' value='$d[Course]'</center></td>
                            </tr>
                            <tr>
                                <td><center>Contact</center</td> 
                                <td><center><input type='text' value='$d[Contact]'</center></td>
                            </tr>
                            <tr>
                                <td><center>Email</center</td> 
                                <td><center><input type='text' value='$d[Email]'</center></td>
                            </tr>
                            <tr>
                                <td><center>Password</center</td> 
                                <td><center><input type='password' value='$d[Password]'></center> </td>
                            </tr>
                            <tr>
                                <td><center>Gender</center</td> 
                                <td><center><input type='text' value='$d[Gender]'></center> </td>
                            </tr>
                            <tr>
                                <td><center>Status</center</td> 
                                <td><center> <input type='text' value='$d[Status]'></center> </td>
                            </tr>
                        </table>
                    </center></div>";
                                }
                    }
                ?>
                </div>
            <!-- INSERT -->
            <div class="add">
                <?php
                if(isset($_POST['new']))
                {
                    ?>
                    <center>
                        <h2>Enter Student Details</h2>
                        <form action="#" method="POST" enctype="multipart/form-data">
                            <table border=2>
                                <tr>
                                    <td><center>Image : </center></td>
                                    <td><center> 
                                            <input type="file" name="uploadfile" id=""> 
                                            <!-- <input type="submit"  name = "submit" value="Uplode File"> -->
                                        </center></td>
                                </tr>
                                <tr>
                                    <td><center>First Name : </center></td>
                                    <td><center><input type="text" name="fname"></center></td>
                                </tr>
                                <tr>
                                    <td><center>Last Name : </center></td>
                                    <td><center><input type="text" name="lname"></center></td>
                                </tr>
                                <tr>
                                    <td><center>College : </center></td>
                                    <td><center><input type="text" name="col"></center></td>
                                </tr>
                                <tr>
                                    <td><center>Department : </center></td>
                                    <td><center><input type="text" name="dep"></center></td>
                                </tr>
                                <tr>
                                    <td><center>Course : </center></td>
                                    <td><center><input type="text" name="cou"></center></td>
                                </tr>
                                <tr>
                                    <td><center>Contact : </center></td>
                                    <td><center><input type="text" name="con"></center></td>
                                </tr>
                                <tr>
                                    <td><center>Email : </center></td>
                                    <td><center><input type="text" name="email"></center></td>
                                </tr>
                                <tr>
                                    <td><center>Password : </center></td>
                                    <td><center><input type="password" name="pass"></center></td>
                                </tr>
                                <tr>
                                    <td><center>Gender : </center></td>
                                    <td><center>
                                            <input type="radio" name="gender" value="Male"> Male
                                            <input type="radio" name="gender" value="Female"> Female
                                            <input type="radio" name="gender" value="Others"> Others
                                        </center>
                                    </td>
                                </tr>
                                <tr>
                                    <td><center>Status : </center></td>
                                    <td><center><input type="text" name="status"></center></td>
                                </tr>
                                <tr>
                                    <td colspan=2><center><input type="submit" name="add_stu" value="Submit" id="b"></center></td>
                                </tr>
                            </table>
                        </form>
                        <?php
                }
                if(isset($_POST['add_stu']))
                {
                    //Image php
                    $filename = $_FILES["uploadfile"]["name"];
                    $tmpname = $_FILES["uploadfile"]["tmp_name"];
                    $folder = "images/".$filename;
                    move_uploaded_file($tmpname,$folder);



                    $fname = $_POST["fname"]; $lname = $_POST["lname"]; $pass = $_POST["pass"];
                    $college = $_POST["col"]; $dept = $_POST["dep"]; $course = $_POST["cou"];
                    $contact = $_POST["con"]; $email = $_POST["email"]; $gender = $_POST["gender"];
                    $status = $_POST["status"];
                    
                    $query1 = "INSERT INTO `stutb` (`Image`,`Fname`, `Lname`, `College`, `Department`, `Course`, `Contact`, `Email`, `Password`, `Gender`, `Status`) VALUES ('$folder','$fname', '$lname', '$college', '$dept', '$course', $contact, '$email', '$pass', '$gender', '$status')";
                    $result1 = mysqli_query($conn, $query1);
                    if(!$result1)
                    {
                        die(mysqli_error($conn));
                    }
                    else
                    {
                        echo "<center>Data_Successfully_Inserted</center>";
                    }
                }
                ?>
                </center>
            </div>
             <!-- DELETE        -->
            <div class="delete">
                    <?php
                        if(isset($_POST['del']))
                        {   ?>
                    
                    <center>
                        <form action="" method="post">
                        <div class="inpall">
                            <label>Enter ID : </label>
                            <input type='text' name='txtdel' >
                            <input type='submit' name='submitbtndel' value='Delete'>
                        </div>
                        </form>
                    </center>
                    <?php
                        }
                    if(isset($_POST['submitbtndel']))
                    {

                        $sql = "DELETE FROM `stutb` WHERE `ID` = '$_POST[txtdel]'";
                        $result = mysqli_query($conn,$sql);
                         if($result)
                                echo "Record Delete From Database";
                            else
                                echo "<font color='Red'>Failed to Record Delete From Database";
    
                    }
                    
                        ?>
                 </div>
            <!-- UPDATE  -->
            <div class="edit">
                <?php
                if(isset($_POST['update']))
                {   ?>
                    
                    <center>
                        <form action="" method="post" >
                        <div class="inpall">
                            <label>Enter ID : </label>
                            <input type='text' name='txtedit' >
                            <input type='submit' name='submitbtnedit' value='Update'>

                        </div>
                        </form>
                    </center>
                    <?php
                }
                    if(isset($_POST['submitbtnedit']))
                    {
                        $sql = "SELECT * FROM `stutb` WHERE `Id`='$_POST[txtedit]'";
                        $result = mysqli_query($conn,$sql);
                        $row = mysqli_fetch_assoc($result);
                        ?>
		                    <center>
			                    <form method="POST" action="" enctype="multipart/form-data"> 
			                        <table border="2" >
				                        <tr>
					                        <td>ID</td>
					                        <td><input name="txtid"  type="number" value = "<?php echo $row['Id']; ?>"></td>
				                        </tr>
				                        <tr>
					                        <td><center><img src= "<?php echo $row['Image']; ?>"  height="30px" width="30px"></center></td>
					                        <td> <input type="file" name="uploadfile" id=""   value = "<?php echo $row['Image']; ?>"> </td>
				                        </tr>
				                        <tr>
					                        <td>Enter First Name</td>
					                        <td><input name="txtfname"  type="text" value = "<?php echo $row['Fname']; ?>"></td>
				                        </tr>
				                        <tr>
					                        <td>Enter Last Name</td>
					                        <td><input name="txtlname"  type="text" value = "<?php echo $row['Lname']; ?>"></td>
				                        </tr>
					                        <td>Enter College</td>
					                        <td><input name="txtclg"  type="text" value = "<?php echo $row['College']; ?>"></td>
				                        </tr>
				                        </tr>
					                        <td>Enter Department</td>
					                        <td><input name="txtdp"  type="text" value = "<?php echo $row['Department']; ?>"></td>
				                        </tr>
				                        </tr>
					                        <td>Enter Course</td>
					                        <td><input name="txtcourse"  type="text" value = "<?php echo $row['Course']; ?>"></td>
				                        </tr>
					                        <td>Enter Contact</td>
					                        <td><input name="txtct"  type="text" value = "<?php echo $row['Contact']; ?>"></td>
				                        </tr>
				                        </tr>
					                        <td>Enter Email</td>
					                        <td><input name="txtemail"  type="text" value = "<?php echo $row['Email']; ?>"></td>
				                        </tr>
				                        </tr>
					                        <td>Enter Password</td>
					                        <td><input name="txtpass"  type="Password" value = "<?php echo $row['Password']; ?>"></td>
				                        </tr>
				                        </tr>
					                        <td>Enter Gender</td>
					                        <td>
                                                <center>
                                                    <input type="radio" name="txtgen" value="Male" <?php echo ($row['Gender']=='Male')?'checked':'' ?>> Male
                                                    <input type="radio" name="txtgen" value="Female" <?php echo ($row['Gender']=='Female')?'checked':'' ?>> Female
                                                    <input type="radio" name="txtgen" value="Others" <?php echo ($row['Gender']=='Others')?'checked':'' ?>> Others
                                                </center>
                                            </td>
				                        </tr>
				                        </tr>
					                        <td>Enter Status</td>
					                        <td><input name="txtstatus"  type="text" value = "<?php echo $row['Status']; ?>"></td>
				                        </tr>
				                        <tr>
					                        <td colspan=2><center><input name="submitbtnup" type="submit" value="Update"></center></td>
				                        </tr>
			                        </table>
			                    </form>
                            </center>
                    <?php
                    }
                     if(isset($_POST['submitbtnup']))
                     {
                        //Image php
                    $filename = $_FILES["uploadfile"]["name"];
                    $tmpname = $_FILES["uploadfile"]["tmp_name"];
                    
                    //  print_r($_FILES["uploadfile"]);
                        

                        $sqlu = "UPDATE `stutb` SET `Fname`='$_POST[txtfname]',
                       
                      
                        `Lname`='$_POST[txtlname]',
                        `College`='$_POST[txtclg]',
                        `Department`='$_POST[txtdp]',
                        `Course`='$_POST[txtcourse]',
                        `Contact`='$_POST[txtct]',
                        `Email`='$_POST[txtemail]',
                        `Password`='$_POST[txtpass]',
                        `Gender`='$_POST[txtgen]',
                        `Status`='$_POST[txtstatus]'  
                        WHERE `ID` = '$_POST[txtid]'";

                        if(!($filename == NULL))
                        {
                            $folder = "images/".$filename;
                            move_uploaded_file($tmpname,$folder);

                            $sqlu = "UPDATE `stutb` SET `Image`='$folder'   WHERE `ID` = '$_POST[txtid]'";
                        }
                        
                        $resul = mysqli_query($conn,$sqlu);
                         if($resul)
                         {

                             echo "<center style=' position: relative; top: 191px;'><font size='20px'>Record Update From Database</center>";
                            }
                            else
                                echo "<center><font color='Red'>Failed to Record Update From Database<center>";
                
                    }
                
                ?>
            </div>

             <!-- Admin Registration -->
             <div class="adminreg">
                <?php
                if(isset($_POST['adminins']))
                {
                    ?>
                    <center>
                        <h2>Admin  Details</h2>
                        <form action="" method="post">
                            <table border=2>
                                <tr>
                                    <td><center>Name : </center></td>
                                    <td><center><input type="text" name="name"></center></td>
                                </tr>
                                <tr>
                                    <td><center>Contact : </center></td>
                                    <td><center><input type="text" name="cont"></center></td>
                                </tr>
                                <tr>
                                    <td><center>Email : </center></td>
                                    <td><center><input type="text" name="email"></center></td>
                                </tr>
                                <tr>
                                    <td><center>Password : </center></td>
                                    <td><center><input type="password" name="passw"></center></td>
                                </tr>
                                <tr>
                                    <td colspan=2><center><input type="submit" name="addadmin" value="Submit" id="b"></center></td>
                                </tr>
                            </table>
                        </form>
                        <?php
                }
                if(isset($_POST['addadmin']))
                {
                    $name = $_POST["name"]; $cont = $_POST["cont"]; $pass = $_POST["passw"]; $email = $_POST["email"];
                    
                    $query1 = "INSERT INTO `admintb` (`Name`, `Contact`, `Email`, `Password`) VALUES ('$name', $cont, '$email', '$pass')";
                    $result1 = mysqli_query($conn, $query1);
                    if(!$result1)
                    {
                        die(mysqli_error($conn));
                    }
                    else
                    {
                        echo "<center>Data_Successfully_Inserted</center>";
                    }
                }
                ?>
                </center>
        </div>
        </div>
        </body>
        </head>
</html>