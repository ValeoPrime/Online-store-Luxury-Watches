<h1>Шаблон внутри мэйна</h1>

<p><?=$name; ?></p>
<p><?=$age; ?></p>
<?php debug($names); ?>
<?php foreach($posts as $post): ?>
    <h3><?=$post->text;?></h3>
<?php endforeach; ?>


