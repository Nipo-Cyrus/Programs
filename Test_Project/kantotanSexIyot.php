<?php 
// Create the Functions that is needed for the program
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style text/css>
    textarea {
    width: 20px;
    height: 30px;
    }
    .order {
        text-align: 3px;
    }
    .table1 {
        border: 1px solid black;
        width: 80%;
        height: 100%;;
        background-size: cover;
        font-family: Verdana,Tahoma, sans-serif;
        color: black;
        border-collapse: collapse;
        text-align: center;
        font-weight: bold;
        justify-content: center;
    }
    .table2{
        border: 1px solid black;
        width:30%;
        margin-left: 440px;
    }
    </style>
    <title>Document</title>
</head>
<body>
    <h1>Hyphinx Cafe</h1>
    <hr>
    <center> <br><br>
    <form action="" method="post">
        <table  class="table1">
            <tr>
                <td><i><h2>Shop Menu</h2></i>
                    <table class="table2" border="0">
                        <tr>
                            <th colspan="3" align="center">Drinks <br>&nbsp;</th>
                        
                        </tr>
                        <tr>
                            <td class="order">Order</td>
                            <td>Price</td>
                            <td>Quantity</td>
                        </tr>
                        <tr>
                            <td align="left"><input type="checkbox" name="checkbox_cappucino" id="checkbox_cappucino"> Cappucino</td>
                            <td>2.00</td>
                            <td><input type="text" name="text_cappucino" id="text_cappucino" size="5" value="<?php   ?>"></td>
                        </tr>
                        <tr>   
                            <td align="left"><input type="checkbox" name="checkbox_espresso" id="checkbox_espresso">Espresso</td>
                            <td>2.25</td>
                            <td><input type="text" name="text_espresso" id="text_espresso" size="5"></td>
                        </tr>
                        <tr>
                            <td align="left"><input type="checkbox" name="checkbox__latte" id="checkbox__latte">Latte</td>
                            <td>1.75</td>
                            <td><input type="text" name="text_latte" id="text_latte" size="5"></td>
                        </tr>
                        <tr>
                            <td align="left"><input type="checkbox" name="checkbox_icedcappu" id="checkbox_icedcappu">Iced Cappucino</td>
                            <td>2.50</td>
                            <td><input type="text" name="text_icedcappu" id="text_icedcappu" size="5"></td>
                        </tr>
                        <tr>
                            <td align="left"><input type="checkbox" name="checkbox_icedlat" id="checkbox_icedlat">Iced Latte</td>
                            <td>2.50</td>
                            <td><input type="text" name="text_icedlat" id="text_icedlat" size="5"></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td><br></td>
            </tr>
            <tr>
                <td>Would you like to Dine in?
                    <input type="radio" name="dine-in" id="yes" value="yes">
                    <label for="yes">Yes</label>
                    <input type="radio" name="dine-in" id="no" value="no">
                    <label for="no">No</label>
                </td>                
            </tr>
            <tr><td><input type="submit" value="submit" name="submit"></td></tr>
        </table>
    </form>
</center>
<?php 
// Check if the form was submitted
if (isset($_POST['submit'])) {
 
    // Get the form data
    $cappucino = $_POST['checkbox_cappucino'];
    $espresso = $_POST['checkbox_espresso'];
    $latte = $_POST['checkbox__latte'];
    $icedcappu = $_POST['checkbox_icedcappu'];
    $icedlat = $_POST['checkbox_icedlat'];
    $dinein = $_POST['dine-in'];
    $text_cappucino = $_POST['text_cappucino'];
    $text_espresso = $_POST['text_espresso'];
    $text_latte = $_POST['text_latte'];
    $text_icedcappu = $_POST['text_icedcappu'];
    $text_icedlat = $_POST['text_icedlat'];
    

}


?>
</body>
</html>