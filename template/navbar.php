<div id="logo"><img src="/assets/images/Logo & assests/Proposition logos OrchistraLogo 2.webp" alt="logo Orchistra"></img></div>
<div id="menu-toggle">
	<i class="fas fa-bars before-icon"></i>
	<i class="fa-solid fa-xmark after-icon" style="display: none;"></i>
</div>
<script>
	document.addEventListener('DOMContentLoaded', function() {
		const menuToggle = document.getElementById('menu-toggle');
		const beforeIcon = menuToggle.querySelector('.before-icon');
		const afterIcon = menuToggle.querySelector('.after-icon');
		const nav = document.querySelector('nav');

		menuToggle.addEventListener('click', function() {
			const isMenuOpen = nav.classList.toggle('open');

			beforeIcon.style.display = isMenuOpen ? 'none' : 'inline';
			afterIcon.style.display = isMenuOpen ? 'inline' : 'none';
		});
	});
</script>
<nav>
	<ul>
		<li><a class="inscription" href="../../src/Controller/controller-inscription.php"><i class="fas fa-edit"></i> Inscription</a></li>
		<li><a class="connexion" href="../../src/Controller/controller-connexion.php"><i class="fas fa-link"></i> Connexion</a></li>
		<li><a class="taches" href="../../src/Controller/controller-general.php"><i class="fas fa-tasks"></i> Vos Tâches</a></li>
		<li><a class="creer" href="../../src/Controller/controller-add_tache.php"><i class="fas fa-plus"></i> Créer</a></li>
		<li>
			<a class="profil" href="../../src/Controller/controller-profile.php">
				<?php
				$avatar_path = '../../assets/images/users/' . ($_SESSION["user_id"] ?? 'default') . '/avatar/' . ($_SESSION["user_avatar"] ?? 'default.png');
				?>
				<img src="<?= htmlspecialchars($avatar_path) ?>" alt="Photo de profil"> Profil
			</a>
		</li>
		<li><a class="deconnexion" href="../../src/Controller/controller-deconnexion.php"><i class="fas fa-sign-out-alt"></i> Déconnexion</a></li>
	</ul>
</nav>