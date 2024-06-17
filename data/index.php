<?php
echo "<h1 align="center">Hello, PHP!</h1>";
// <body/p/font bgcolor="white" size="24" face="courier" color="red">
// <hr></hr> //lines // <br> //enter
// <ol type="i" start="2"> <li></ol>
// <ul type="square"> <ul> //default=circle
// <dl> <dt></dt><dd></dd> </dl>
// <a href=""><img src=".jpg"></img></a> //".com" or "file.html", target="_blank"
//<table border="1" cellpadding='' cellspacing="" width="">
//<th/><th/><tr/><td colspan="" rowspan="" bgcolor=""/></table>
// echo "</td></tr></table>";
// input[type="text"] = can remember value
// input[type="number"] =  have button to auto fill

// Variables=wadah and Data Types, case-sensitive=huruf kecil, besar
$heat = 25;      // Integer variable //echo {$heat};
$_height2 = 1.75; // Float variable
$noValue = null; //null
$colors = array("red", "green", "blue"); // Array echo $colors[0];
echo "Hi".$heat." Welcome <br> I'm".$_height2;

$colors = array("Red", "Green", "Blue", "Yellow"); // Array echo $colors[0];
foreach ($colors as $color) { //foreach L.
    // echo "$color<br>";
}

// Operators and Expressions //Arithmetic
$ac = 10 - 4;   // Subtraction
$temperature = $heat + $ac;     // Addition, multiple *, divide /, modulus %

$ac++; // Increment by 1 (equivalent to $count = $count + 1)
$otherCount = $ac--; // Decrement by 1 after assigning the value (post-decrement)

//Logical
$hasPermission = true; // Boolean variable
$isAdmin = false;
$canAccess = $hasPermission && $isAdmin; // AND (both conditions are true)
$canEdit = $hasPermission || $isAdmin; // OR (at least one condition is true) = | vertical bar
$cannotEdit = !$canEdit; // NOT (negation)

//Assignment Operators
$x = 10;
$y = 5;
$x += $y; // Equivalent to $x = $x + $y;
$x -= $y; // Equivalent to $x = $x - $y;
$x *= $y; // Equivalent to $x = $x * $y;
$x /= $y; // Equivalent to $x = $x / $y;
$x %= $y; // Equivalent to $x = $x % $y;

//Type Casting
$number = "123";
$intNumber = (int)$number; // Convert to integer
$floatNumber = (float)$number; // Convert to float
$stringNumber = (string)$number; // Convert to string
$booleanValue = (bool)$number; // Convert to boolean

// Functions
function greet($firstName, $lastName) {
    echo "<table style='border-collapse: collapse;'>";
    echo "<tr><td style='border: 1px solid black;padding:5px'>Hello, $firstName $lastName, ";
}
greet($firstName, $lastName);
?>
=====================================================================
// ASSOCIATIVE ARRAY
<?php
$person = array(
    "name" => "Alice",
    "age" => 30,
    "isStudent" => false
);
echo "Name: " . $person["name"] . "<br>";
echo "Age: " . $person["age"] . "<br>";
echo "Is Student: " . ($person["isStudent"] ? "Yes" : "No") . "<br>";
?>

//MULTI DIMENSION
<?php
$students = array(
    array("name" => "Alice", "age" => 20),
    array("name" => "Bob", "age" => 22),
    array("name" => "Charlie", "age" => 21)
);
echo "Name of the first student: " . $students[0]["name"] . "<br>"; // Concatenate 
echo "Age of the second student: " . $students[1]["age"] . "<br>";
?>
//MIXED ARRAY
<?php
$mixedArray = array(
    "person" => array(
        "name" => "Alice",
        "age" => 30,
        "isStudent" => false
    ),
    "students" => array(
        array("name" => "Bob", "age" => 22),
        array("name" => "Charlie", "age" => 21)
    )
);
echo "Name: " . $mixedArray["person"]["name"] . "<br>";
echo "Age: " . $mixedArray["person"]["age"] . "<br>";
echo "Is Student: " . ($mixedArray["person"]["isStudent"] ? "Yes" : "No") . "<br>";

echo "Name of the first student: " . $mixedArray["students"][0]["name"] . "<br>";
echo "Age of the second student: " . $mixedArray["students"][1]["age"] . "<br>";

$firstName = "Alice";  // String variable
$lastName = "Einzbern";
$fullName = "{$firstName} {$lastName}";
?>

<!--  Full-Stack = databases (MySQL, PostgreSQL), php/python (server-side) (Back-End)=scripting-manage: html, css, js (client-side=tampil di web) (Front-End)
eksekusi source code=tampil ke web
akses=kita client - server - php 
mekanisme eksekusi code: xampp 1) check .php files 2) from open>close tag
langkah eksekusi: xampp>apache /xampp/htdocs/php/index.php http://localhost/php/index.php
running=berhasil eksekusi, debugging=fix error eksekusi, executable file=php >

parse E.=misplaced parentheses, semicolons, quotes, or brackets. - fatal E.=redeclare a function or class/incorrect syntax/false call
eksekusi jalan = notice=var, unused library, warning E.=non-existent file/deprecated functions

xampp>mysql
http://localhost/phpmyadmin
>new>create>tabbar "SQL"

Aplikasi Mockup: Figma, Pencil Project
implementasi UI - drag & drop: Dreamweaver, Google Web Designer
-->
=====================================================================
//PENJUMLAHAN
<?php
$angka = array(1, 2, 3, 4, 5);
// $angka = [1, 2, 3, 4, 5];
$total = 0; 

foreach ($angka as $nilai) { 
    $total += $nilai;
}

echo "Array: " . implode(", ", $angka) . "<br>";
echo "Total: " . $total;
?>
=====================================================================
//RATA-RATA
<?php
$angka = array(1, 2, 3, 4, 5); 
$total = 0; 

$jumlah_angka = count($angka);

for ($i = 0; $i < $jumlah_angka; $i++) {
    $total += $angka[$i];
}

$rata_rata = $total / $jumlah_angka; 

echo "Array: " . implode(", ", $angka) . "<br>"; 
echo "Rata-rata: " . $rata_rata;
?>
=====================================================================
//ARIMATIKA 2 parameter
<?php
$angka1 = 10;
$angka2 = 5;

function tambah($a, $b) { 
    return $a + $b;
}
function kurang($a, $b) { 
    return $a - $b;
}
function kali($a, $b) { 
    return $a * $b;
}
function bagi($a, $b) { 
    if ($b == 0) { // Mencegah pembagian oleh nol
        return "Tidak bisa membagi oleh nol";
    } else {
        return $a / $b;
    }
}

echo "Hasil penambahan: " . tambah($angka1, $angka2) . "<br>";
echo "Hasil pengurangan: " . kurang($angka1, $angka2) . "<br>";
echo "Hasil perkalian: " . kali($angka1, $angka2) . "<br>";
echo "Hasil pembagian: " . bagi($angka1, $angka2) . "<br>";
?>

//ARIMATIKA 3 parameter
<?php
function hitung($angka1, $angka2, $operator) { 
    switch ($operator) {
        case '+':
            return $angka1 + $angka2;
        case '-':
            return $angka1 - $angka2;
        case 'x':
            return $angka1 * $angka2;
        default:
            return "Operator tidak valid";
    }
}

$angka1 = 10;
$angka2 = 5;
$operator = 'x'; // '+' '-' 'x'

echo "Hasil operasi: " . hitung($angka1, $angka2, $operator) . "<br>";
?>
// Aplikasi
<!DOCTYPE html>
<html>
<head>
    <style>
        .line {
            width: 100%;
            border-top: 1px solid black;
            border-bottom: 1px solid black;
			padding: 1px;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <form method="post">
        <label for="bilangan1">Bilangan 1:</label>
        <input type="number" id="bilangan1" name="bilangan1" required>
        <br>
        <label for="bilangan2">Bilangan 2:</label>
        <input type="number" id="bilangan2" name="bilangan2" required>
        <br>
        <input type="submit" value="Hitung">
        <br>
        <br>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bilangan1 = $_POST["bilangan1"];
        $bilangan2 = $_POST["bilangan2"];

        $penjumlahan = $bilangan1 + $bilangan2;
        $pengurangan = $bilangan1 - $bilangan2;
        $perkalian = $bilangan1 * $bilangan2;
        $pembagian = $bilangan1 / $bilangan2;

        echo "Bilangan 1: $bilangan1<br>";
        echo "Bilangan 2: $bilangan2<br>";
        echo "<div class='line'></div>";
        echo "Hasil Penjumlahan: $penjumlahan<br>";
        echo "Hasil Pengurangan: $pengurangan<br>";
        echo "Hasil Perkalian: $perkalian<br>";
        echo "Hasil Pembagian: $pembagian<br>";
    }
    ?>
</body>
</html>
=====================================================================
//GREATER OR LOWER: int & string
<?php
$angka = 500000;  // $angka = 2000000; // $angka = 3000000; 

if ($angka > 1500000) { 
    echo "Mahal";
} elseif ($angka <= 1500000 && $angka >= 1000000) {
    echo "Sedang";
//} elseif ($angka < 1000000) {
} else {
    echo "Murah";
}
?>

<?php
$nilai = 'A';

if ($nilai == 'A') {
    echo "Sangat Bagus";
} elseif ($nilai == 'B') {
    echo "Bagus";
} elseif ($nilai == 'C') {
    echo "Cukup";
} elseif ($nilai == 'D') {
    echo "Buruk";
} else {
    echo "Sangat Buruk";
}
?>

<?php
$day = "Wednesday";
switch ($day) {
    case "Monday":
    case "Tuesday":
    case "Wednesday":
    case "Thursday":
    case "Friday":
        echo "It's a regular weekday.";
        break;
    case "Saturday":
    case "Sunday":
        echo "It's the weekend!";
        break;
    default:
        echo "Invalid day.";
        break;
}
//It's a regular weekday.
<?php

<?php
//Ternary
$score1 = 85;
$result1 = ($score1 >= 60) ? "Passed" : "Failed"; //greaterOrEqual
$result2 = ($temperature <= 60) ? "Failed" : "Passed"; //lessOrEqual
echo "You have $result1 your exam, and $result2 your physic test <br>";
?>
=====================================================================

// MENGHITUNG KARAKTER DI STRING
<?php
$kata = "Malvin";

function hitungJumlahKarakter($kata) { 
    $jumlah_karakter = strlen($kata);
    return $jumlah_karakter;
}

echo "Nama: " . $kata . "<br>"; 
echo "Jumlah karakter: " . hitungJumlahKarakter($kata);
?>

// MENGHITUNG SPASI/SIMBOL DI STRING
<?php
$kata = "Raditya Aji Sasmoyo"; 
if (strpos($kata, ' ') !== false) { // ' ' spasi ',' koma
    echo "Mengandung spasi";
} else {
    echo "Tidak mengandung spasi";
}
?>
=====================================================================
tampilkan hanya ganjil atau genap
<?php

for ($i = 1; $i <= 1000; $i += 2) { //$i = 2
    echo $i . " ";
}
?>


<?php
echo "===============CETAK BILANGAN GANJIL GENAP 1-100:===============<br>";

for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo "$i adalah Bilangan Genap<br>";
    } else {
        echo "$i adalah Bilangan Ganjil.<br>";
    }
}
?>

<?php
$i = 1;
while ($i <= 100) {
    if ($i % 2 == 0) {
        echo "$i adalah Bilangan Genap<br>";
    } else {
        echo "$i adalah Bilangan Ganjil.<br>";
    }
    $i++;
}
?>

// MENGHITUNG JUMLAH GANJIL ATAU GENAP
<?php
$randomNumbers = array(42, 18, 65, 33, 91);

//1st cara
// $total = array_sum($randomNumbers);
//2nd cara
$total = 0;
foreach ($randomNumbers as $number) {
    $total += $number;
}

if ($total % 2 == 0) {
    echo "Genap";
} else {
    echo "Ganjil";
}
?>





//hitung ada berapa ganjil dan genapnya
<?php
$randomNumbers = array(42, 18, 65, 33, 91);
$countOdd = 0;
$countEven = 0;

foreach ($randomNumbers as $number) {
    if ($number % 2 == 0) {
        $countEven++;
    } else {
        $countOdd++;
    }
}

echo "Jumlah angka ganjil: " . $countOdd . "<br>";
echo "Jumlah angka genap: " . $countEven;
?>







//Banyakan ganjil atau genap
<?php
$angka = array(1, 2, 3, 6, 9, 10, 12);
$jumlah_ganjil = 0;
$jumlah_genap = 0;

foreach ($angka as $nilai) {
    if ($nilai % 2 == 0) {
        $jumlah_genap++;
    } else {
        $jumlah_ganjil++;
    }
}

if ($jumlah_ganjil > $jumlah_genap) {
    echo "ganjil";
} elseif ($jumlah_genap > $jumlah_ganjil) {
    echo "genap";
} else {
    echo "sama banyak ganjil dan genap";
}
?>

=====================================================================
<?php
$angka = 100;
$numbers = array(1, 2, 3, 4, 5);
$totalNumbers = array_sum($numbers);

$hasil = $angka - $totalNumbers;
echo "Hasil dari pengurangan variabel angka dengan total angka dalam array: $hasil";
?>





===================
break; //stopping the looping