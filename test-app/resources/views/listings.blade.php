<h1><?php echo $heading ?></h1>

<?php foreach($listings as $lsiting): ?>
    <h2><?php echo $lsiting['title']; ?></h2>
    <p><?php echo $lsiting['description']; ?></p>


<?php endforeach;?>