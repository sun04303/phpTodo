<?php
namespace Sun\Controller;
use Sun\App\View;
class MasterController {
    public function render($page, $datas = []) {
        $view = new View($page, $datas);
    }
}