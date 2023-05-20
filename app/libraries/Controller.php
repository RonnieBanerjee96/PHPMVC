<?php
    class Controller {

        //loads Model
        public function loadModel($model){
           require_once "../app/models/" . $model . ".php";

           return new $model();

        }

        //loads view
        public function loadView($view, $data=[]){
            if(file_exists("../app/views/" . $view . ".php")){
                require_once "../app/views/" . $view . ".php";
            }

            else {

                die("The View " . $view . " doesn't exist!");
            }
        }
    }