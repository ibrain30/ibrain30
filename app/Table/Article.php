<?php
namespace App\Table;
    
class Article {


    public function getUrl(){

        return 'index.php?p=article&id='. $this->id;
    }
    public function getExtrait(){
       $html = '<p>'. substr($this->contenu,0,200) .'</p>';
       $html.= '<a href='.$this->getUrl().'>voir plus</a> ...';
       return $html;
       
    }
    


    }