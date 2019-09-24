	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="/evaluador/index.php"><img src="/evaluador/img/tn logo.png" alt="logo tn" width="50px"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="index.php">Home</a>
				</li>

				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Evaluar
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="evaluar_redaccion.php">Redacción</a>
						<a class="dropdown-item" href="#">Another action</a>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</li>
				<?php if (empty($_SESSION['name'])): ?>
					<li class="nav-item">
						<a class="nav-link" href="login.php">Login</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="signup.php">Registrarse</a>
					</li>
						
				<?php endif ?>

				
				<?php if (!empty($_SESSION['name'])): ?>
					<li class="nav-item">
						<a class="nav-link" href="logout.php">Logout</a>
					</li>
				<?php endif; ?>
				

				
				
			</ul>
		</div>
	</nav>