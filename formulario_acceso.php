<HTML>
    <HEAD>
    <?php
if(isset($_GET['Acceder'])){
    if(isset($_GET['Usuario'])){
        if($_GET['Usuario']=="administrador"){
            header('location: registro_aula.php');
        }else if($_GET['Usuario']=='profesor'){
            header('location: reg curso.php');
        }else{
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
            <input type="text" placeholder="Usuario" name="Usuario"/>
            <input type="submit" name="acceder" value="Acceder" />
        </form>
    </BODY>
 </HTML>
 <?php
    }
 ?>
