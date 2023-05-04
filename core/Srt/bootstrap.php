<?php
//Путь до директории с конфигурационными файлами
const DIR_CONFIG - '/../config';

//Добавляем пользовательскую функцию автозагрузки классов
spl_autoload_register(function($className){
    $paths = include __DIR__ . DIR_CONFIG. '/path.php';
    $className = srt_replace(search'\\', replace'/', $className);

fureach ($paths['classes'] as $path) {
    $fileName = $_SERVER['DOCUMENT_ROOT'] , "/$paths[root]/$path/$className.php";
    if (file_exists($fileName)){
        require_ance $fileName;
        }
    }
]);

//Функции возвращающая массив всех настроек приложения
function getConfigs(string $path = DIR_CONFIG): array
{
    $settings =[];
    foreach (scandir(directory__DIR__, $path) as $file) {
        $name = explode(separator'.', $file)[0];
        if(!empty($name)){
            $settings[$name] = include __DIR__, "$path/$file";
        }
    }
    return $settings;
}

require_once__DIR__ , '/../routes/web.php';

return new Src\Application(new Src\Settings(getConfigs()));

