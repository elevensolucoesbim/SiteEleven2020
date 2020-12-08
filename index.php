<?php
session_start();
?>
<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ELEVEN SOLUÇÕES BIM</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/main.css" />
	<script src="/static/js/jquery.js"></script>
</head>

<body class="is-preload">
<div id="page-wrapper">
<header id="header" class="alt">
					<h1><a href="home.php">Eleven</a> Soluções BIM</h1>
					
  </header>         
  </div>         
    <section class="hero is-success is-fullheight">
            <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                <img src="assets/css/images/eleven03.png">
                    <?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div class="notification is-danger">
                    <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>
                        <div class="box">
                            <form action="login.php" method="POST">
                                <div class="field">
                                    <div class="control">
                                        <input name="usuario" name="text" class="input is-large" placeholder="Seu usuário" autofocus="">
                                    </div>
                                </div>
                                    <div class="field">
                                    <div class="control">
                                        <input name="senha" class="input is-large" type="password" placeholder="Sua senha">
                                    </div>
                                </div>
                                <button type="submit" class="button is-block is-link is-large is-fullwidth">Entrar</button><br>
                                
                                <a href="formulario.php" class="button is-block is-link is-large is-fullwidth">Cadastre-se</a>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
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
            whatsapp: "5581999193122", // WhatsApp number
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
</body>

</html>
