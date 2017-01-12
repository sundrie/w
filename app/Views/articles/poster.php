<?php $this->layout('layout', ['title' => 'Poster un article']) ?>

<?php $this->start('main_content') ?>


<h2>Inscription</h2>

<form method="post" action="index.php">
  <form method="post">
  <label for="title">Title</label><input type="text" name="title"><br>
  <label for="chapo">Chapo</label><input type="text" name="chapo"><br>
  <label for="content">Content</label><textarea cols="50" rows="10" name="content"></textarea><br>
  <input name="Poster" type="submit" value="Poster">
</form>

<?php $this->stop('main_content') ?>
