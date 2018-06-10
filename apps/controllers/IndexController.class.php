<?php

// application/controllers/admin/IndexController.class.php


class IndexController extends BaseController{


    public function indexAction(){

        //                $userModel = new UserModel("user");

        // $users = $userModel->getUsers();

        // Load View template

        // include  CURR_VIEW_PATH . "index.html";
        $this->loader->view('index');

    }

}