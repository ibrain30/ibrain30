<!-- 
  <div class="container" style="margin-top:100px">

    <h1>Page HOME</h1>
    <p><a href="../public/index.php?p=single">Single</a></p>
 
  </div> -->
  <div class="container" style="margin-top:100px">
</ul >

<?php foreach($db->query('select * from article','\App\Table\Article') as $post):?>
          <h2><a href=<?=$post->getUrl()?> > <?= $post -> titre ?></a></h2>
          <p> <?= $post -> titre ?> </p>
<?php endforeach; ?>
</ul>
</div>