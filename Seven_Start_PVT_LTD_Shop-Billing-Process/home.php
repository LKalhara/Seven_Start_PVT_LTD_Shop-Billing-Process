<?php
    session_start();

    $nameErr = $nicNoErr = $contactNoErr = $houseNoErr = $streetErr = $cityErr = $provinceErr = $postalNoErr = "";
    $nameState= $nicState= $contactState= $houseNoState= $streetState= $cityState= $provinceState= $postalState= FALSE;

    if(isset($_POST['submit2'])){
        //name validation
        if (empty($_POST['name'])) {  
            $nameErr = "Name is required";  
        } else {  
            $name = $_POST['name'];

            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
                $nameErr = "Only text value are allowed"; 
            }else{
                $_SESSION['Name'] = $_POST['name'];
                $nameState = TRUE;
            }  
        }  
        //nic validation
        if (empty($_POST['nic'])) {  
            $nicNoErr = "NIC no is required";  
        } else {  
            $nicNo = $_POST['nic'];
            
            if (!preg_match ("/^[0-9]*$/", $nicNo) ) {  
            $nicNoErr = "Only numeric value is allowed.";  
            }else{
                $_SESSION['NIC'] = $_POST['nic'];
                $nicState = TRUE;
            }  
        } 
        //contact no validation   
        if (empty($_POST['contact'])) {  
            $contactNoErr = "Contact Number is required";  
        } else {  
            $contactNo = $_POST['contact'];
            
            if ((!preg_match ("/^[0-9]*$/", $contactNo) || strlen($contactNo) != 10) ) {  
            $contactNoErr = "Only numeric value & 10 characters are allowed.";
            }else{
                $_SESSION['ContactNO'] = $_POST['contact'];
                $contactState = TRUE;
            }  
        }  
        //house no validation
        if (empty($_POST['houseNo'])) {  
            $houseNoErr = "House number is required";  
        } else {  
            $houseNo = $_POST['houseNo'];

            if (!preg_match ("/^[0-9]*$/", $houseNo) ) {  
            $houseNoErr = "Only numeric value is allowed.";  
            }else{
                $_SESSION['HouseNO'] = $_POST['houseNo'];
                $houseNoState = TRUE;
            }  
        }
        //Street address validation
        if (empty($_POST['street'])) {  
            $streetErr = "Street address is required";  
        } else {  
            $street = $_POST['street']; 

            if (!preg_match("/^[a-zA-Z ]*$/",$street)) {  
                $streetErr = "Only text value are allowed"; 
            }else{
                $_SESSION['StreetAddress'] = $_POST['street'];
                $streetState = TRUE;
            }  
        }  
        //city address validation
        if (empty($_POST['city'])) {  
            $cityErr = "City name is required";  
        } else {  
            $city = $_POST['city'];  

            if (!preg_match("/^[a-zA-Z ]*$/",$city)) {  
                $cityErr = "Only text value are allowed";  
            }else{
                $_SESSION['City'] = $_POST['city'];
                $cityState = TRUE;
            }  
        }  
        //province address validation
        if (empty($_POST['province'])) {  
            $provinceErr = "Province name is required";  
        } else {  
            $province = $_POST['province']; 

            if (!preg_match("/^[a-zA-Z ]*$/",$province)) {  
                $provinceErr = "Only text value are allowed";  
            }else{
                $_SESSION['Province'] = $_POST['province'];
                $provinceState = TRUE;
            }  
        } 
        //postal validation
        if (empty($_POST['postalCode'])) {  
            $postalNoErr = "Postal code is required";  
        } else {  
            $postalNo = $_POST['postalCode'];

            if (!preg_match ("/^[0-9]*$/", $postalNo) ) {  
                $postalNoErr = "Only numeric value is allowed.";  
            }else{
                $_SESSION['PostalCode'] = $_POST['postalCode'];
                $postalState = TRUE;
            }  
        } 
        
       if($nameState && $nicState && $contactState && $houseNoState && $streetState && $cityState && $provinceState && $postalState){
        header("Location: saleItem.php");
       } 
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/home-page-style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
    <title>Home Page</title>
</head>
<body>
    <div class="outte-containeer">  
        <div class="inner-containeer">
            <div class="header-containeer">
                <?php include_once ('./header-page.php');?>
            </div>
            <hr  size="5">
            <div class="page-title">
                <h4>Customer Info</h4>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                <div class="user-input-containeer">
                    <div class="itme box1">
                        <div class="lable-text"><label for="">Name </label><label id="erroeMsg"><?php echo $nameErr;?></label></div>
                        <div class="input-text"><input type="text" name="name"></div>
                    </div>
                    <div class="itme box2">
                        <div class="lable-text"><label for="">Gender</label></div>
                        <div class="input-text">
                            <select name="gender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="itme box3">
                        <div class="lable-text"><label for="">NIC Number </label><label id="erroeMsg"><?php echo $nicNoErr;?></label></div>
                        <div class="input-text"><input type="text" placeholder="No need to add 'V' or 'X'" name="nic"></div>
                    </div>
                    <div class="itme box4">
                        <div class="lable-text"><label for="">Contact Number </label><label id="erroeMsg"><?php echo $contactNoErr;?></label></div>
                        <div class="input-text"><input type="text" name="contact"></div>
                    </div>
                    <div class="itme box5">
                        <div class="lable-text"><label for="">House Number </label><label id="erroeMsg"><?php echo $houseNoErr;?></label></div>
                        <div class="input-text"><input type="text" name="houseNo"></div>
                    </div>
                    <div class="itme box6">
                        <div class="lable-text"><label for="">Street Address </label><label id="erroeMsg"><?php echo $streetErr;?></label></div>
                        <div class="input-text"><input type="text" name="street"></div>
                    </div>
                    <div class="itme box7">
                        <div class="lable-text"><label for="">City </label><label id="erroeMsg"><?php echo $cityErr;?></label></div>
                        <div class="input-text"><input type="text" name="city"></div>
                    </div>
                    <div class="itme box8">
                        <div class="lable-text"><label for="">Province </label><label id="erroeMsg"><?php echo $provinceErr;?></label></div>
                        <div class="input-text"><input type="text" name="province"></div>
                    </div>
                    <div class="itme box9">
                        <div class="lable-text"><label for="">Postal Code </label><label id="erroeMsg"><?php echo $postalNoErr;?></label></div>
                        <div class="input-text"><input type="text" name="postalCode"></div>
                    </div>
                </div>
                <div class="sub-rest-btn">
                    <button class="button res-btn" type="reset" name="reset">Reset</button>
                    <button class="button sub-btn" type="submit" name="submit2">Next</button>
                </div>
            </form>
            
        </div>
        
    </div>
</body>
</html>
