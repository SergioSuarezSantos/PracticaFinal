<HTML>
    <HEAD>

       <TITLE>grupo 3</TITLE>
    </HEAD>
    <BODY>
    <?php
    session_start();
if(isset($_GET['acceder'])){
    if(isset($_GET['Usuario'])){
        $_SESSION['Usuario']==$_GET['Usuario'];
        if($_GET['Usuario']=="administrador"){
            header('location: registro_aula.php');
        }else if($_GET['Usuario']=='profesor'){
            header('location: reg curso.php');
        }
}
}

?>
        <form action="" method="get">
			<p>Formulario de acceso</p>
            <input type="text" placeholder="Usuario" name="Usuario"/>
            <input type="password" name="contraseña" />
            <input type="submit" name="acceder" value="Acceder" />
        </form>
    </BODY>
 </HTML>

