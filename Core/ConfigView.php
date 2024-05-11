<?php

namespace Core;

class ConfigView {
    
    private $Name;
    private $Data;

    public function __construct($Name, array $Data = null) {
        $this->Name = (string) $Name;
        $this->Data = $Data;
    }
    
    public function render() {
        if(file_exists('app/'.$this->Name.'.php')){        
            include 'app/'.$this->Name.'.php';
        }else{
            echo "Erro ao carregar a view: {$this->Name}";
        }
    }
}