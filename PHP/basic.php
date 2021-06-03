<?php
$jam = 10;

if ($jam < "10") {
    echo "Have a Good Morning!!";
} elseif ($jam < "20") {
    echo "Have A good Day!!";
} else {
    echo "Have a Good Night!!";
}
echo "\n";
$favcolor = "red";
switch ($favcolor) {
    case "red":
        echo "your Favorite color is Red!";
        break;
    case "blue":
        echo "your Favorite color is Blue!";
        break;
    case "green":
        echo "your Favorite color is Green!";
        break;
    default:
        echo "your favorite color is neither red, blue, or green !!";
}
