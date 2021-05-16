//Объяснить, как работает данный код:

<?php
    $a = 5;
    $b = '05';
    var_dump($a == $b);         // Почему true? потому что это нестрогое равенство, которое не сравнивает типы данных, только значения
    var_dump((int)'012345');     // Почему 12345? - int - приведение к числу, строка 012345 будет равна 12345
    var_dump((float)123.0 === (int)123.0); // Почему false? - int - целое число, float - число с плавающей запятой. Т.к сравнение строгое, сравниваются и значения и тип данных. Поэтому false
    var_dump((int)0 === (int)'hello, world'); // Почему true? -  потому что при приведении строки, которая начинается с буквы, к типу int получаем 0, в итоге значения и типы одинаковые
?>