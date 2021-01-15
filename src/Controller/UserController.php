<?php
namespace Sun\Controller;
class UserController extends MasterController {
    public function register() {
        $this->render("user/register");
    }
    public function registerProcess() {
        
    }
}