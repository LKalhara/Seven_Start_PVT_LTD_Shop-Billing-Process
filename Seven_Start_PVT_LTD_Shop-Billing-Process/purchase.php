<?php
    session_start();

    $_SESSION['PineappleQty'] = $_POST['item1'];
    $_SESSION['AppleQty'] = $_POST['item2'];
    $_SESSION['MangoQty'] = $_POST['item3'];
    $_SESSION['WaterMelonQty'] = $_POST['item4'];
    $_SESSION['PomegranteQty'] = $_POST['item5'];
    $_SESSION['OrangeQty'] = $_POST['item6'];
    $_SESSION['PearsQty'] = $_POST['item7'];
    $_SESSION['KatuAnodaQty'] = $_POST['item8'];
    $_SESSION['WoodappleQty'] = $_POST['item9'];
    $_SESSION['MangosteenQty'] = $_POST['item10'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/purchase-page-style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
    <title>Purchase Page</title>
</head>
<body>
<div class="outte-containeer">  
        <div class="inner-containeer">
            <div class="header-containeer">
                <?php include_once ('./header-page.php');?>
            </div>
            <hr  size="5">
            <div class="page-title">
                <h4>Purchase Info</h4>
            </div>
            <form action="./checkout.php" method="POST">
                <div class="user-input-containeer">
                    <div class="table-purchase">
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Item Name</th>
                                <th scope="col">Price (Rs.)</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Line Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $fruitQty = array('PineappleQty','AppleQty','MangoQty','WaterMelonQty','PomegranteQty','OrangeQty','PearsQty','KatuAnodaQty','WoodappleQty','MangosteenQty');
                                    $fruitName =  array('PineappleName','AppleName','MangoName','WaterMelonName','PomegrantName','OrangeName','PearsName','KatuAnodaName','WoodappleName','MangosteenName');
                                    $fruitPrice = array('PineapplePrice','ApplePrice','MangoPrice','WaterMelonPrice','PomegrantePrice','OrangePrice','PearsPrice','KatuAnodaPrice','WoodapplePrice','MangosteenPrice');
                                    
                                    $total=0.00;
                                    for($x = 0; $x <= 9; $x++){
                                        if(($_SESSION[$fruitQty[$x]]) == null or ($_SESSION[$fruitQty[$x]]==0)){
                                            continue;
                                        } 
                                        else{
                                            $amount = $_SESSION[$fruitPrice[$x]]*$_SESSION[$fruitQty[$x]];
                                            $total += $amount;
                                            $y = $x + 1;
                                            echo '<tr>';
                                                echo '<th scope="row">'.$y.'</th>';
                                                echo '<td>'.$_SESSION[$fruitName[$x]].'</td>';
                                                echo '<td>'.$_SESSION[$fruitPrice[$x]].'</td>';
                                                echo '<td>'.$_SESSION[$fruitQty[$x]].'</td>';
                                                echo '<td>'.number_format($amount,2).'</td>';
                                            echo '</tr>';
                                        }  
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="lable-total-amount">
                        <div class="total"><Label><h4>Total Amount:</h4></Label></div>
                        <div class="amount"><label><h4><?php echo number_format($total,2); ?> </h4></label></div>
                    </div>                    
                </div>
                <div class="sub-rest-btn">
                    <a href="home.php"><button class="button res-btn" type="button" name="cancel">Back to home</button></a>
                    <button class="button sub-btn" type="submit" name="checkout">Proceed</button>
                </div>
            </form>
            
        </div>
        
    </div>
</body>
</html>