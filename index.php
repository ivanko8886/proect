<?php
$filename = "data.txt";
$rows = file($filename, FILE_IGNORE_NEW_LINES);
$data = [];

foreach ($rows as $row) {
    // Убираем лишние пробелы с начала и конца строки
    $trimmedRow = trim($row);

    // Если строка не пуста, продолжаем обработку
    if (!empty($trimmedRow)) {
        $items = explode(" ", $trimmedRow);
        array_push($data, $items);
    }
}

echo json_encode($data);
?>