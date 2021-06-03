<?php
$eksekusi = array('5', '+', '4', '-', '3', '*', '2', '**', '5', '%', '10', '/', '2');
$angka = array();
$operator = array();
//for ($eksekusi=0; $eksekusi );

foreach ($eksekusi as $value) {
    if (is_numeric($value)) {
        // echo "Angka $value \n";
        array_push($angka, $value);
    } else {
        // echo "Ini Operator $value \n";
        array_push($operator, $value);
    }
}
$temp = $angka[0];
for ($x = 1; $x < count($angka); $x++) {
    // echo "Urutan Angka $angka[$x] \n";
    switch ($operator[$x - 1]) {
        case '+':
            $temp = $temp + $angka[$x];
            echo "$temp \n";
            break;
        case '-':
            $temp = $temp - $angka[$x];
            echo "$temp \n";
            break;
        case '*':
            $temp = $temp * $angka[$x];
            echo "$temp \n";
            break;
        case '**':
            $temp = $temp ** $angka[$x];
            echo "$temp \n";
            break;
        case '%':
            $temp = $temp % $angka[$x];
            echo "$temp \n";
            break;
        case '/':
            $temp = $temp / $angka[$x];
            echo "$temp \n";
            break;
    }
}
