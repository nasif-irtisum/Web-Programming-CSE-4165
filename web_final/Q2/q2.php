<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="roomType">Room Type</label>
        <select name="roomType" id="roomType">
            <option value="deluxe">Deluxe</option>
            <option value="standard">Standard</option>
            <option value="suite">Suite</option>
        </select>
        <br>
        <label for="weekday">Weekday Nights</label>
        <input type="number" name="weekday" id="weekday">
        <br>
        <label for="weekend">Weekend Nights</label>
        <input type="number" name="weekend" id="weekend">
        <br>
        <label for="guest">Number of Guest</label>
        <input type="number" name="guest" id="guest">
        <br>
        <button name="cal">Calculate</button>
    </form>

    <?php
    $st = 3000;
    $del = 5000;
    $su = 8000;
    $weekendDel = 0;
    $roomCharge =0;

    if (isset($_POST["cal"]) ) 
    {
        $totalDays = (int)$_POST["weekday"]+ (int)$_POST["weekend"];
        if ($_POST["roomType"]=="deluxe") {
            $roomCharge = (int)$_POST["weekday"] *  $del + (int)$_POST["weekend"] * 6250;
            echo "Room Charge: ". $roomCharge. "Tk<br>";

            if ($totalDays<3) echo "Discount: 0 Tk<br>";
            else if ($totalDays>=3 && $totalDays<=6) {
                $dis = $roomCharge*(5/100);
                echo "Discount: " .$dis. "Tk<br>";
            }
            else if ($totalDays>=7) {
                $dis = $roomCharge*(10/100);
                echo "Discount: " .$dis. "Tk<br>";
            }

            if ((int)$_POST["guest"]<3) echo "Extra Guest Cost: 0 Tk<br>";
            if ((int)$_POST["guest"]>=3) echo "Extra Guest Cost: ". (((int)$_POST["guest"]-2)*$totalDays*800). "Tk<br>";
        


        }
        if ($_POST["roomType"]=="standard") {
            $roomCharge = (int)$_POST["weekday"] *  $st + (int)$_POST["weekend"] * $st;
            echo "Room Charge: ". $roomCharge. "Tk<br>";

            if ($totalDays<3) echo "Discount: 0 Tk<br>";
            else if ($totalDays>=3 && $totalDays<=6) {
                $dis = $roomCharge*(5/100);
                echo "Discount: " .$dis. "Tk<br>";
            }
            else if ($totalDays>=7) {
                $dis = $roomCharge*(10/100);
                echo "Discount: " .$dis. "Tk<br>";
            }

            if ((int)$_POST["guest"]<3) echo "Extra Guest Cost: 0 Tk<br>";
            if ((int)$_POST["guest"]>=3) echo "Extra Guest Cost: ". (((int)$_POST["guest"]-2)*$totalDays*800). "Tk<br>";

            
        }
        if ($_POST["roomType"]=="suite") {
            $roomCharge = (int)$_POST["weekday"] *  $su + (int)$_POST["weekend"] * $su;
            echo "Room Charge: ". $roomCharge. "Tk<br>";

            if ($totalDays<3) echo "Discount: 0 Tk<br>";
            else if ($totalDays>=3 && $totalDays<=6) {
                $dis = $roomCharge*(5/100);
                echo "Discount: " .$dis. "Tk<br>";
            }
            else if ($totalDays>=7) {
                $dis = $roomCharge*(10/100);
                echo "Discount: " .$dis. "Tk<br>";
            }

            if ((int)$_POST["guest"]<3) echo "Extra Guest Cost: 0 Tk<br>";
            if ((int)$_POST["guest"]>=3) echo "Extra Guest Cost: ". (((int)$_POST["guest"]-2)*$totalDays*800). "Tk<br>";
        }

    }
    
    ?>
</body>

</html>