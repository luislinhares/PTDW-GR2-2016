<html lang="pt">

<head>

    <meta charset=utf-8>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>3R - Pacientes/Familiares</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-frontpage.css" rel="stylesheet">
	<link href="css/pacientes.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<!-- Navigation -->
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
			<a class="navbar-brand" href="index.html"><img src="img/logo_3r.jpg" alt="3R" height="50" width="50" border="0" style="position: absolute; top: 0px;"></a><a class="navbar-brand hidden-xs hidden-sm titulo" href="index.html">Plataforma de Reabilitação <br>Respiratória em Rede</a>
		  </div>
			
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="postPac.php"> <span class="glyphicon glyphicon-home"></span> </a></li>
					<li class="active"><a href="#">Avaliação</a></li>
					<li><a href="#">Exercício Físico</a></li>
					<li><a href="#">Apoio Psicossocial</a></li>
					<li><a href="index.html#contactos">Contactos</a></li>
                </ul> 
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	
	<header class="header">
        <div class="text-header">
			<div class="container">
			<span>Pacientes / Familiares</span>
		</div>
		</div>
    </header>
	
    <!-- Page Content -->
	<div class="container">				
		<div class="post" style="position: relative; top: 0px;">
			<br>
			<div class="crumbs"><a href="postPac.php">Home </a>> <a href="#">Avaliação</a></div>
			<hr>
			<div class="row">
				<div class="col-md-3">
					<div class="list-group">
						<a href="#" class="list-group-item active">Com que frequência?</a>
						<a href="#" class="list-group-item">Como se organiza?</a>
						<a href="#" class="list-group-item">O que se avalia?</a>
					</div>
				</div>
						
				<div class="col-md-8">
					<!-- Post Content -->
					<p class="lead">Avaliação dos Pacientes e Familiares</p>
					<p>A avaliação dos pacientes e familiares tem dois objetivos:</p>
					<p>1. Individualizar a intervenção, respondendo às necessidades específicas de cada participante.</p>
					<p>2. Avaliar os resultados do programa, tendo em consideração os objetivos inicialmente propostos.</p>
					<p class="lead">Com que frequência?</p>
					<p>A avaliação é realizada antes e após o programa, e depois em intervalos de tempo de 3 meses para acompanhar a evolução do estado de saúde do paciente.</p>
				</div>
				<div class="col-md-1">
					<div class="glyphicon glyphicon-minus" id="btnMinus"></div>
					<div class="glyphicon glyphicon-plus" id="btnPlus"></div>
				</div>
			</div>
		</div>
		
	</div>
	
	<!-- Footer -->
	<footer>
		<div class="row">
			<div class="col-lg-3"></div>
			<div class="col-lg-3">
				<h3>Plataforma 3R</h3>
				<li><a href="postPac.php">Pacientes / Familiares</a></li>
				<li><a href="postProf.php">Profissionais de Saúde</a></li>
				<li><a href="index.html#contactos">Contactos</a></li>
			</div>
			<div class="col-lg-3">
				<h3>Links Úteis</h3>
				<li><a href="http://www.saude24.pt">Saúde 24</a></li>
				<li><a href="http://www.sppneumologia.pt">Sociedade Portuguesa de Pneumologia</a></li>
				<li><a href="http://www.fundacaoportuguesadopulmao.org">Fundação Portuguesa do Pulmão</a></li>
				<li><a href="http://www.respira.pt">Respira</a></li>
			</div>
			<div class="col-lg-3"></div>
		</div>
		<div class="row" style="padding-top: 20px;">
			<div class="col-lg-12" align="center">
				<p>Copyright &copy; Grupo 2 PTDW 2016</p>
			</div>
		</div>
	</footer>
			
	<!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	<!-- Accessibility -->
	<script src="js/accessibility.js"></script>

</body>

</html>
