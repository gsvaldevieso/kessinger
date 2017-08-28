<?php

namespace App;

class ModelFactory{
    public function get($modelName){
        switch($modelName){
            case 'Periodico':
                return new Periodico();
            case 'Publicacao':
                return new Publicacao();
            default:
                return null;
        }
    }
}