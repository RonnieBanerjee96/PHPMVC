<?php

class Pages extends Controller {
    public function __construct()
    {
        
    }
    
    public function about($Username, $Etc){
        $this->loadView("/pages/aboutView", ["Name" => $Username]);
        
    }
    public function index($Username, $Etc){
        
        $this->loadView("/pages/indexView",["Name" => $Etc]);

    }

    public function etcLoader($viewToLoad){
        $this->loadView("/pages/" .$viewToLoad .".php");
    }
}