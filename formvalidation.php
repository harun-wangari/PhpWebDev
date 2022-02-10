<?php

//clean input function
function cleanInput(&$array){
    foreach($array as $key=>$value){
        $temp=trim($value);
        $temp=stripslashes($temp);
        $temp=htmlspecialchars($temp);
        $array[$key]=$temp;
    }
}


$nameErr=$emailErr=$telErr=$genderErr="";
if($_SERVER['REQUEST_METHOD']=="POST"){
    $data=$_POST;
    cleanInput($data);
//    name validation
    if(empty($data['name'])){
        $nameErr="Enter your full name";
    }else{
        if(strlen($data['name'])<4 || strlen($data['name'])>32){
            $nameErr="Name must be 4 to 32 characters ";
        }elseif(!preg_match("/^[a-zA-Z-\s]*$/",$data['name'])){
            $nameErr="name can only contain characters and space";
        }else{
            $nameErr="";
        }
    }
//    email validation
    if(empty($data['email'])){
        $emailErr="Enter your email";
    }else{
        if(!filter_var($data['email'],FILTER_VALIDATE_EMAIL)){
            $emailErr="invalid email  address";
        }else{
            $emailErr="";
        }
    }
//    phone number validation
    if(empty($data['tel'])){
        $telErr="Enter phone number";
    }else{
        if(!preg_match("/^07[0-9]*$/",$data['tel']) && !preg_match("/^01[0-9]*$/",$data['tel']) ){
            $telErr="invalid phone should start with 07 or 01 and should contain digits only";
        }elseif(strlen($data['tel'])<10){
            $telErr="Invalid phone number, phone number should be 10 digits";
        }else{
            $telErr="";
        }
    }
//    gender validation
    if(empty($data['gender'])){
        $genderErr="select gender";
    }else{
        $genderErr="";
    }
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>signup Form</title>
    <style>
        body{
            padding: 0;
            margin: 0;
            background-color: #14e69f;
        }
        form{
            position: relative;
            margin-top: 8vh;
            padding: 5px;
            width: calc(300px + 10vw);
            height: calc(350px + 10vh);
            background-color: white;
            border: none;
            border-radius: 5px;
            box-shadow: #2222 2px 2px 2px 2px;
            left: 50%;
            transform: translate(-50%);
        }
        h2{
            text-align: center;
            font-family: "Courier 10 Pitch";
            color: chocolate;
        }
        .formcontrol{
            width: 100%;
            margin-top: 10px;
        }
        .input{
            width: 99%;
            height: 30px;
            border: solid #d2d5dd 1px;
            border-radius: 3px;
        }
        .input:focus{
            border: none;
            outline: dodgerblue 1px solid;
            box-shadow: #d2d5dd 1px 1px 1px 1px;
        }
        .radio{
            margin-top: 5px;
            margin-left: 5px;
        }

        #signup{
            margin-top: 10px;
            width: 99%;
            height: 30px;
            border: none;
            border-radius: 3px;
            background-color: #21c98b;
            color: white;
            font-family: "Courier 10 Pitch";
            font-size: 15px;
        }
        #signup:hover{
            background-color: #14e69f;
        }
        a{
            color: dodgerblue;
            font-family: "Courier 10 Pitch";
            font-size: 14px;
        }
        .error{
            color: red;
            font-size: 14px;
        }

    </style>
</head>
<body>
<h2 style="color: #13a3da">Welcome</h2>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
    <h2>Sign up Form</h2>
    <div class="formcontrol">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Enter your name" class="input" value="<?php echo $_POST['name']?>">
        <span class="error" ><?php echo $nameErr?></span>
    </div>
    <div class="formcontrol">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Enter your email" class="input" value="<?php echo $_POST['email']?>" >
        <span class="error" ><?php echo $emailErr?></span>
    </div>
    <div class="formcontrol">
        <label for="tel">Telephone</label>
        <input type="tel" name="tel" id="tel" placeholder="Enter your phone number" class="input" value="<?php echo $_POST['tel']?>">
        <span class="error" ><?php echo $telErr?></span>
    </div>
    <div class="formcontrol">
        <label for="gender">gender</label>
        <span class="radio">Male</span><input type="radio" name="gender" id="male" value="Male">
        <span class="radio">Female</span><input type="radio" name="gender" id="female" value="Female"><br>
        <span class="error"><?php echo $genderErr?></span>
    </div>
    <input type="submit" value="Sign up" id="signup">
    <div>Already have an account?:<a href="#">Login here</a></div>
</form>
</body>
</html>
