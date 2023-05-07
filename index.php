<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="Style.css">
    <style>
       
    </style>
</head>
<body>
    <div class="container">
        <div class="login-form">
            <form action="viewinfo.php" method="post" id="form">
            <input type="submit" value="User Data" class="submit"/>
            </form>
            <form action="process.php" method="post" id="myform" name="myform">
                <img src="./pic.jpg" alt="#">
                <div class="form-div">
                    <label for="name">Name: </label>
                     <input type="text" id ="name" name="name" placeholder=" your name">
                </div>
                <div class="form-div">
                    <label for="Email">Email: </label>
                    <input type="email" id = "email" name="email" placeholder=" your email">
                </div>
                <div class="form-div">
                    <label for="password">Password: </label>
                    <input type="password" name="password"id="password">
                </div>
                <div class="form-div">
                    <label for="phoneno">Phone Number: </label>
                    <input type="number" name="phonenumber" id ="phoneno">
                </div>
                <div class="form-div">
                    <label for="">Gender: </label>
                    <div>
                        <label>Male:</label>
                        <input type="radio" name="gender" value="male" >
                        <label>Female: </label>
                        <input type="radio" name="gender" id="" value="female" >
                        <label>Other: </label>
                        <input type="radio" name="gender" id="" value="others">
                    </div>    
                </div>
                <div class="form-div">
                    <label for="language">Language </label>
                    <?php 
                    $con = mysqli_connect("localhost","root","","forminfo");
                    $s = mysqli_query($con, "select * from Language")
                    ?>
                    <select name="language" id="">
                        <?php
                        while($r=mysqli_fetch_array($s))
                        {
                        ?>
                       <!--  <option>Select Language</option> -->
                        <option value="<?php echo $r['language'];?>"><?php echo $r['language'];?></option>
                        <?php 
                        }?>
                    </select>
                </div>
               <div class="form-div">
                <label for="">Zip Code: </label>
                <input type="text" name="zipcode" id="">
               </div>
                <div class="form-div">
                    <label for="">About: </label>
                    <textarea name="about" id="" cols="30" rows="2">Write about yourself...</textarea>
                </div>
                <button class="sumbit" onclick="return validateform()">Register</button>
            </form>
            </div>
    </div>
    <script src="script.js" type="text/javascript"></script>
</body>
</html>