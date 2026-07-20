<?php
    function twoSum(array $numbers, int $target): array {
        $seen = [];

        foreach ($numbers as $index => $value) { //looping ke semua angka di array
            $complement = $target - $value; //menghitung angka yang dibutuhkan untuk mencapai target
            if (isset($seen[$complement])) { 
                return [$seen[$complement], $index];
            }
            $seen[$value] = $index;
        }
        return [];
    }

    function tampilkanHasil(array $numbers, int $target) {
        $hasil = twoSum($numbers, $target);
        
        if (empty($hasil)) {
            echo "Input:<br>";
            echo "numbers = [" . implode(", ", $numbers) . "]<br>";
            echo "Output:<br>";
            echo "[] (tidak ditemukan pasangan)<br><br>";
            echo "<hr>";
            return;
        }
            
        [$i, $j] = $hasil;

        echo "Input:<br>";
        echo "numbers = [" . implode(", ", $numbers) . "]<br>";
        echo "target = {$target}<br><br>";
        echo "Output:<br>";
        echo "[{$i}, {$j}]<br><br>";
        echo "<hr>";
    }


    tampilkanHasil([2, 7, 11, 15], 9);
    tampilkanHasil([2, 3, 6, 8, 1, 9], 7);
    tampilkanHasil([5, 10, 15], 1);
    tampilkanHasil([5, 6, 2, 1], 95);
?>