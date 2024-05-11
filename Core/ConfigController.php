<?php
namespace Core;
class ConfigController {
    private $Url;
    private $UrlFull;
    private $UrlControll;
    private $UrlMethod;
    private $Action;

    public function __construct() {
        if (!empty(filter_input(INPUT_GET, "url", FILTER_DEFAULT))) {
            $this->Url = filter_input(INPUT_GET, "url", FILTER_DEFAULT);
            $this->UrlFull = explode("/", $this->Url);

            if ((isset($this->UrlFull[0])) AND ( isset($this->UrlFull[1]))) {
                $this->UrlControll = $this->UrlFull[0];
                $this->UrlMethod = $this->UrlFull[1];
            } else {
                $this->UrlControll = 'home';
                $this->UrlMethod = 'index';
            }
        } else {
            $this->UrlControll = 'home';
            $this->UrlMethod = 'index';
        }
        echo "Classe: {$this->UrlControll} - Método: {$this->UrlMethod} <br>";
        echo "URL: {$this->Url} <br>";
        if(isset($this->UrlFull[0])){
            echo "Params: {$this->UrlFull[0]} <br>";
        }

        if(isset($_GET['act'])){
            if($_GET['act']=='add'){
                $this->Action = 'add';
            }
        }
        if(isset($_GET['act'])){
            if($_GET['act']=='edit'){
                $this->Action = 'edit';
            }
        }
        
    }
    public function load() {
        $class = "\\Sts\\Controllers\\".$this->UrlControll;
        $classLoad = new $class;

        if($this->Action=="add"){
            $classLoad->insert($_POST);
        }

        if($this->Action=="edit"){
            $classLoad->update($_POST);
        }

        if($this->Url=="new"){
            $classLoad->form_new();
        }else if($this->Url=="delete"){
            $classLoad->delete($_GET['id']);
        }else if($this->Url=="edit"){
            $classLoad->form_edit($_GET['id']);
        }else{
            $classLoad->index();
        }
        
    }
}

