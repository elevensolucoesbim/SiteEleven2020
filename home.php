<?php
include('verifica_login.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Eleven Soluções BIM</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<script src="/static/js/jquery.js"></script>
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<h1><a href="home.php">Eleven</a> Soluções BIM</h1>
					<nav id="nav">
						<ul>
							<li><a href="home.php">Página Inicial</a></li>
							<li>
								<a href="#" class="icon solid fa-angle-down">BIM</a>
								<ul>
									<li><a href="quemsomos.php">Quem Somos</a></li>
									<li><a href="contato.php">Contato</a></li>
									<li><a href="softwares.php">Softwares</a></li>
									<li><a href="cursos.php">Cursos</a></li>
									<li><a href="vixes.php">Mineração VIXES</a></li>
									<li><a href="#">POWERBIM</a>
										<ul>
											<li><a href="https://app.powerbi.com/view?r=eyJrIjoiZGQwOWEzZTgtNTE2Yy00OTQwLWEyNjUtNmYxMjhhM2M2NmUzIiwidCI6IjYzMGQwNmE3LTIxMjktNGM3Yi1hOTUyLTAzZDI4YTRhMTdhNiJ9">Relatórios</a></li>
										    
										</ul>
									</li>
									<li>
										<a href="#">Plataforma BIM</a>
											<ul>
											<li><a href="plfgeral.php">Gerenciamento BIM</a></li>
											<li><a href="https://a360.autodesk.com/">A360</a></li>
											<li><a href="#">Compatibilização BIM</a></li>
											<li><a href="formBIM.php">Simulação 7D</a></li>
											<li><a href="decretobim.php">Decreto BIM Nº 9.377</a></li>
											</ul>
									</li>
								</ul>
							</li>
							<li><a href="index.php" class="button">Sair</a></li>
						</ul>
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner">
					<br>
					<br>
					<br>
					<br>
					<br>
					<h3><p>Não somos só mais um conceito no mercado da engenharia, somos o futuro.</p></h3>
					<ul class="actions special">
						<li><a href="formulario.php" class="button primary">Cadastre-se</a></li>
						<li><a href="contato.php" class="button">Saiba Mais</a></li>
					</ul>
				</section>

			<!-- Main -->
				

					
				</section>

			<!-- CTA -->
				<section id="cta">

					<h2>Faça seu acesso</h2>
					<p>Uma gestão de projetos como você nunca viu.</p>

					<form>
						<div class="row gtr-50 gtr-uniform">
							<div class="col-8 col-12-mobilep">
								<input type="email" name="email" id="email" placeholder="Insira seu Email" />
							</div>
							<div class="col-4 col-12-mobilep">
								<input type="submit" value="Cadastre" class="fit" />
							</div>
						</div>
					</form>

				</section>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="https://www.facebook.com/elevensolucaobim" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>

						<li><a href="https://www.instagram.com/elevenprojetosbim/" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>

						<li><a href="https://github.com/elevensolucoesbim" class="icon brands fa-github"><span class="label">Github</span></a></li>

						
					</ul>
					<ul class="copyright">
						<li>&copy; Eleven soluções BIM. Todos os Direitos Reservados.</li><li>Design: <a href="https://www.linkedin.com/in/junior-minervino-a2439bb6/">Junior Minervino</a></li>
					</ul>
					<!-- JUNIOR MINERVINO DE MEIRA widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "5581999193122",
            call_to_action: "Fale Conosco Agora!", // Call to action
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /JUNIORMINERVINO widget -->
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>

