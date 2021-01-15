<?php
namespace Sun\Controller;
use Sun\App\View;
class MainController extends MasterController {
    public function index() {
        $datas = ['msg'=>'Hello world'];
        $this->render("main", $datas);
    }
}