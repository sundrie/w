<?php $this->layout('layout', ['title' => 'Poster Articles']) ?>

<?php $this->start('main_content') ?>
    <h1>Modifier article</h1>
    <form action="poster/" method="post">
        <label>Titre</label><input type="text" name="titre"><br>
        <label>Chapo</label><input type="text" name="chapo"><br>
        <label>contenu</label><textarea name="contenu" rows="10" cols="50"></textarea><br>
        <input type="submit" name="modArticle" value="Modifier">
    </form>

<?php $this->stop('main_content') ?>