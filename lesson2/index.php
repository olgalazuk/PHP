<?php
// 1. Создать  ассоциативный массив из 10 элементов
$arr = [
        "key1" => 1,
        "key2" => 2,
        "key3" => 3,
        "key4" => 4,
        "key5" => 5,
        "key6" => 6,
        "key7" => 7,
        "key8" => 8,
        "key9" => 9,
        "key10" => 10,
];

//2. При помощи foreach вывести элементы массива на экран
foreach ($arr as $key => $value) {
    echo "[$key] => ", $value, "<br>";
}

//3. при помощи for создать массив из 20 элементов при помощи функции ранд
$array = [];
for ($i = 0; $i < 20; $i++) {
    $val =  rand (0, 100);
    $array [] = $val;
}
print_r($array);

//4.  Вывести элементы массива которые делятся на 3 и на 5 без остатка
for ($i = 0; $i < 20; $i++) {
    if ($array [$i] % 3 == 0 && $array [$i] % 5 == 0) {
        print_r($array[$i]);
    }
}
?>