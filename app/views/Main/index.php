<?php
/**
 * Created by PhpStorm.
 * User: A0297
 * Date: 21.03.2018
 * Time: 19:24
 */

 echo 'Это индекс';
 echo '<br>';
 //myDebug($rt);
 //echo print_r($posts);
 ?>

<?php foreach($posts as $post): ?>
    <h3><?=$post->title;?></h3>
<?php endforeach;?>

