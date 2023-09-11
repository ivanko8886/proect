<?php
function loadDataFromFile($file)
{
if (!file_exists($file))
throw new Exception("Ошибка: файл $file не существует!");
if (!filesize($file))
throw new Exception("Файл $file пустой!");
// Открываем поток и получаем его дескриптор
$f = fopen($file, "r");
// В переменную $content запишем то, что прочитали из файла
$content = fread($f, filesize ($file));
// Заменяем переносы строки в файле на тег BR. Заменить можно что угодно
$content = str_replace("\r\n","<br>", $content);
// Закрываем поток
    //поток для html - распределения
fclose ($f);
// Возвращаем содержимое
return $content;
}

// Файл, с которым работаем
$file = __DIR__.'\data.txt';

// Выводим информацию из файла
try {
echo loadDataFromFile($file);
} catch (Exception $e) {
echo $e->getMessage();
}
?>
