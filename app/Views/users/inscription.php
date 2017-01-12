<?php $this->layout('layout', ['title' => 'Inscription']) ?>

<?php $this->start('main_content') ?>

<h2>Inscription</h2>

<form method="post">
    <label for="pseudo">pseudo</label><input type="text" name="pseudo"><br>
    <label for="email">email</label><input type="email" name="email"><br>
    <label for="password">password</label><input type="password" name="password"><br>
    <label for="lastname">lastname</label><input type="text" name="lastname"><br>
    <label for="firstname">firstname</label><input type="text" name="firstname"><br>
    <input name="inscription" type="submit">
</form>

<?php $this->stop('main_content') ?>
