<HTML>
    <HEAD>
    <?php
if(isset($_POST['Acceder'])){
    if(isset($_POST['usuario'])){
        if($_POST['usuario']=="administrador"){
            header('location:registro_aula.php');
        }else if($_POST['usuario']=='profesor'){
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
        <form action="#" method="POST">
			<p>Formulario de acceso</p>
            <input type="text" placeholder="Usuario" name="usuario"/>
            <input type="password" placeholder="Clave" name="clave"/>
            <input type="button" name="acceder" value="Acceder" />
            <input type="submit" name="atras" value="Atras" />
        </form>
    </BODY>
 </HTML>
