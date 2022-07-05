<?php
use \App\Autoload;
use \App\Database;
use \App\Table\Article;
require '../app/Autoload.php';
Autoload::register();

if(isset($_GET['p'])){    
    $p=$_GET['p'];
  
}else{
      $p='home';
    
}

//Initialisation de la base 
$db = new Database('blog');
$article = new Article();



ob_start();
if($p==='home')
  {
    require '../pages/home.php';
  }
elseif($p==='single')
  {
    require '../pages/single.php';
  }
$content = ob_get_clean();

require '../pages/template/defaut.php';

