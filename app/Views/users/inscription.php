<?php $this->layout('layout', ['title' => 'Inscription']) ?>

<?php $this->start('main_content') ?>

<h2>Inscription</h2>

<form method="post">
    <label for="username">username</label><input type="text" name="username"><br>
    <label for="email">email</label><input type="email" name="email"><br>
    <label for="password">password</label><input type="password" name="password"><br>
    <input name="inscription" type="submit">
</form>

<?php $this->stop('main_content') ?>
