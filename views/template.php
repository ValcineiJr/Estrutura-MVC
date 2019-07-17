<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo BASE; ?>/assets/css/estilo.css">
	<meta charset="utf-8">
	<title>Meu template</title>
</head>
<body>
<h1>Topo do meu site</h1>

<?php $this->loadViewInTemplate($viewName, $viewData); ?>


<h1>Rodapé</h1>
</body>
</html>