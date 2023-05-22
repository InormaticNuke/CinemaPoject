<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $age = $_POST["age"];
    $qtt = $_POST["qtt"];

    $discount = 0;
    switch ($age) {
        case "child":
            $discount = 0.3;
            break;
        case "adult":
            $discount = 0.05;
            break;
        case "senior":
            $discount = 0.55;
            break;
    }

    $total = $qtt * 6000;
    $totalDiscount = $total - ($total * $discount);

    echo "Ticket amount: " . $qtt . "<br>";
    echo "Discount: " . ($discount * 100) . "%<br>";
    echo "Total amount: $" . $totalDiscount . " CLP";
}

?>