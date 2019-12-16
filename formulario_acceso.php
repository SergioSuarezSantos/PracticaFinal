<HTML>
    <HEAD>
    <?php
if(isset($_GET['Acceder'])){
    if(isset($_GET['usuario'])){
        if($_GET['usuario']=="administrador"){
            header('location:registro_aula.php');
        }else if($_GET['usuario']=='profesor'){
            header('location:reg curso.php');
        }
    }
}
?>
       <TITLE>grupo 3</TITLE>
    </HEAD>
    <BODY>
    <?php
     ?>
        <form action="" method="get">
			<p>Formulario de acceso</p>
            <input type="text" placeholder="Usuario" name="usuario"/>
            <input type="submit" name="acceder" value="Acceder" />
        </form>
    </BODY>
 </HTML>
