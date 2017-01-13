<?php $this->layout('layout', ['title' => 'Utilisateurs']) ?>

<?php $this->start('main_content') ?>
	<h2>Let's code.</h2>
	<p>Vous avez atteint la page d'utilisateurs. Bravo.</p>
	<p><a href="inscription/" title="Inscription">Inscription</a></p>
	<p><a href="connexion/" title="Connexion">Connexion</a></p>
	<?php if (isset($_SESSION['user'])) {	 ?><p><a href="deconnexion/" title="Deconnexion">D&eacute;connexion</a></p><?php } ?>
<?php $this->stop('main_content') ?>
