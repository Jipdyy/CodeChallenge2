<?php 
    $x = isset($_POST['x']) ? $_POST['x'] : null;
    function isPalindrome(int $x) {
        $strNum = strval($x);
        $reversed = strrev($x);
        return $strNum === $reversed;
    }
    
    function tampilkanHasil(int $angka) {
        $hasil = isPalindrome($angka);
        $hasilStr = $hasil ? 'true' : 'false';

        echo "Input: {$angka}<br>";
        echo "Output: {$hasilStr}<br>";
        if (!$hasil) {
            echo "Ini bukan bilangan palindrome<br>";
        } else {
            echo "Ini adalah bilangan palindrome<br>";
        }
        echo "<hr>";
    }

    tampilkanHasil(121);
    tampilkanHasil(-121);
    tampilkanHasil(10);
    tampilkanHasil(505);
    tampilkanHasil(1032);
    tampilkanHasil(0201);
    tampilkanHasil(02020);
?>