<?php
function myLoader($name) {
    $prefix = "Sun\\";
    $base_dir = __ROOT . __DS . "src" . __DS;
    $prefixLen = strlen($prefix);
    if(strncmp($prefix, $name, $prefixLen) == 0) {
        $realName = substr($name, $prefixLen);
        //앞부분의 prefix를 모두 제거한다.
        $realName = str_replace("\\", "/", $realName);
        $file = "{$base_dir}{$realName}.php";
        if(file_exists($file)) {
            require_once($file);
        }
    }
}
spl_autoload_register("myLoader");