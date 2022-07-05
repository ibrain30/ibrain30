
  <div class="container" style="margin-top:100px">
    
    <?php 
    $data = $db->query('select * from article where id ='.$_GET['id'],'\App\Table\Article');?>
        <h2> <?= $data[0] -> titre ?></h2>
        <p> <?= $data[0] ->contenu ?> </p>
  
   
          


