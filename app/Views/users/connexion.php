<?php $this->layout('layout', ['title' => 'Connexion']) ?>

<?php $this->start('main_content') ?>

<h2>Connexion</h2>

<form method="post">
    <label for="email">email</label><input type="text" name="email"><br>
    <label for="password">password</label><input type="password" name="password"><br>
    <input name="connexion" type="submit" value="connexion">
</form>

<?php $this->stop('main_content') ?>
