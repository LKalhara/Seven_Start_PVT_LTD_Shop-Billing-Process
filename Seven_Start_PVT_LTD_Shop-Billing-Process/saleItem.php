<?php
    session_start();
   
    $_SESSION['PineappleName'] = 'Pineapple';
    $_SESSION['AppleName'] = 'Apple';
    $_SESSION['MangoName'] = 'Mango';
    $_SESSION['WaterMelonName'] = 'Water Melon';
    $_SESSION['PomegrantName'] = 'Pomegrant';
    $_SESSION['OrangeName'] = 'Orange';
    $_SESSION['PearsName'] = 'Pears';
    $_SESSION['KatuAnodaName'] = 'Katu Anoda';
    $_SESSION['WoodappleName'] = 'Woodapple';
    $_SESSION['MangosteenName'] = 'Mangosteen';

    $_SESSION['PineapplePrice'] = number_format("227.00",2);
    $_SESSION['ApplePrice'] = number_format("105.00",2);
    $_SESSION['MangoPrice'] = number_format("70.00",2);
    $_SESSION['WaterMelonPrice'] = number_format("90.00",2);
    $_SESSION['PomegrantePrice'] = number_format("348.00",2);
    $_SESSION['OrangePrice'] = number_format("64.00",2);
    $_SESSION['PearsPrice'] = number_format("123.00",2);
    $_SESSION['KatuAnodaPrice'] = number_format("175.00",2);
    $_SESSION['WoodapplePrice'] = number_format("46.00",2);
    $_SESSION['MangosteenPrice'] = number_format("133.00",2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/salesItem-page-style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
    <title>Products Page</title>
</head>
<body>
<div class="outte-containeer">  
        <div class="inner-containeer">
            <div class="header-containeer">
                <?php include_once ('./header-page.php');?>
            </div>
            <hr  size="5">
            <div class="page-title">
                <h4>Products Info</h4>
            </div>
            <form action="./purchase.php" method="POST">
                <div class="user-input-containeer">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Price (Rs.)</th>
                            <th scope="col">Quantity</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Pineapple</td>
                                <td><?php echo $_SESSION['PineapplePrice']; ?></td>
                                <td><div class="input-qty"><input type="text" name="item1"></div></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Apple</td>
                                <td><?php echo $_SESSION['ApplePrice']; ?></td>
                                <td><div class="input-qty"><input type="text" name="item2"></div></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Mango</td>
                                <td><?php echo $_SESSION['MangoPrice']; ?></td>
                                <td><div class="input-qty"><input type="text" name="item3"></div></td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Water Melon</td>
                                <td><?php echo $_SESSION['WaterMelonPrice']; ?></td>
                                <td><div class="input-qty"><input type="text" name="item4"></div></td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Pomegrante</td>
                                <td><?php echo $_SESSION['PomegrantePrice']; ?></td>
                                <td><div class="input-qty"><input type="text" name="item5"></div></td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Orange</td>
                                <td><?php echo $_SESSION['OrangePrice']; ?></td>
                                <td><div class="input-qty"><input type="text" name="item6"></div></td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td>Pears</td>
                                <td><?php echo $_SESSION['PearsPrice']; ?></td>
                                <td><div class="input-qty"><input type="text" name="item7"></div></td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td>Katu Anoda</td>
                                <td><?php echo $_SESSION['KatuAnodaPrice']; ?></td>
                                <td><div class="input-qty"><input type="text" name="item8"></div></td>
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td>Woodapple</td>
                                <td><?php echo $_SESSION['WoodapplePrice']; ?></td>
                                <td><div class="input-qty"><input type="text" name="item9"></div></td>
                            </tr>
                            <tr>
                                <th scope="row">10</th>
                                <td>Mangosteen</td>
                                <td><?php echo $_SESSION['MangosteenPrice']; ?></td>
                                <td><div class="input-qty"><input type="text" name="item10"></div></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="sub-rest-btn">
                    <button class="button res-btn" type="reset" name="reset">Reset</button>
                    <button class="button sub-btn" type="submit" name="submit">Submit</button>
                </div>
            </form>
            
        </div>
        
    </div>
</body>
</html>