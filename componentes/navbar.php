	<nav class="navbar navbar-expand-lg">
		<a class="navbar-brand" href="/evaluador/index.php"><img src="/evaluador/img/tn logo.png" alt="logo tn" width="50px"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav">
				<span class="nav-left">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Home</a>
					</li>
	
					<?php if (!empty($_SESSION['area'])): ?>
	
						<li class="nav-item">
							<a class="nav-link" href="evaluar.php">Evaluar</a>
						</li>
						
					<?php endif ?>
				</span>

				<span class="nav-right">
					<?php if (empty($_SESSION['name'])) { ?>
						<li class="nav-item">
							<a class="nav-link" href="login.php">Login</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="signup.php">Registrarse</a>
						</li>
					<?php } else { ?>
						<li class="nav-item">
							<a class="nav-link" href="logout.php">Logout</a>
						</li>
					<?php } ?>
				</span>

				
				
				
				
			</ul>
		</div>
	</nav>