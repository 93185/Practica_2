<?php session_start();
error_reporting(E_ALL^E_NOTICE);
 ?>
<!DOCTYPE html>
<head>
<meta charset="utf-8" />
<title>Sistema de login con php</title>
<link rel="stylesheet" href="style.css" type="text/css" />

<script type="text/javascript">
	function validarForm(formulario) {
		if(formulario.usuari.value.length==0) {
			formulario.usuari.focus();
			alert('Debes introducir tu nombre de usuario:');
		return false;
		}
		if(formulario.clave.value.length==0) {
			formulario.clave.focus();
			alert('Debes introducir tu nombre de usuario:');
		return false;
		}
		return true;
		}
</script>

</head>

<body>
<div id="header">

</div>
<div id="cuerpo">
 <?php 
 if($_SESSION['nickname_usuari']){?> 
<h1>Escola st.ParronCruzSalvador</h1>
<h3>Bienvenido: <?php echo $_SESSION['nickname_usuari']; ?>

<h2>Area solo para usuarios registrados </h2>
<h3><a href="salir.php">Salir</a></h3>
 <?php }else{?>
	<div id="login">
   <br />
    <form action="entrar.php" method="post" onsubmit="return validarForm(this);" >
    	<b>Usuario:</b><br />
        <!--<input type="text" placeholder="Correo electronico..." name="correo" id="texto"/><br />-->
		<input type="text" placeholder="Nombre usuario..." name="usuari" id="texto"/><br />
        <input type="password" placeholder="Clave de acceso..." name="clave" id="texto"/><br />
        <input type="submit" value="Identificarme" />
		<input type="reset" value="Borrar">
        </form>
	
    </div>
	
   
    <?php } ?>
</div>
</body>
</html>