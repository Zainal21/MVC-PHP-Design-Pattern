<!DOCTYPE html>
<html lang="fr-FR">
<head>
	<meta charset="UTF-8">
	<title><?= htmlspecialchars($title); ?></title>
	<link rel="stylesheet" href="http://localhost/mvc-pattern-php/public/bootstrap.min.css">
</head>
<body>

	<header>
			<nav class="navbar-brand navbar-nav bg-dark navbar-dark mb-5">
					<div class="container">
						<div class="row">
							<div class="col text-center">
								<h3 class="text-white text-bold"><Strong>Daftar Buku</Strong></h3>
							</div>
						</div>
					</div>
			</nav>
  </header>

	<?= $contentInLayout; ?>

 <footer>
 <div class="container">
    <div class="row mt-5">
      <div class="col text-center">
        <p class="text-muted">Copyright by Muhamad Zainal Arifin</p>
      </div>
    </div>
  </div>
 </footer>

</body>
</html>