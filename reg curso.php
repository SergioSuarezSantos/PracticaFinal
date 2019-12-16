<HTML>
    <HEAD>
       <TITLE>grupo 3</TITLE>
    </HEAD>
    <BODY>
    <?php
            session_start();
            echo "Has iniciado sesion con el usuario " .$_SESSION['Usuario1'];
        ?>
        <form action="index.html" method="get">
			<p>Registro de curso</p>
                <input type="text" placeholder="Código Curso" name="codigo"/>
                <input type="text" placeholder="Nombre" name="nombre"/>
                <a href="./registro_aula.php">Página Aula</a>
                <?php
                $valoresarray=array("presencial", "a distancia" , "semipresencial");
                ?>
                <select name="genero">
                    <?php foreach ($valoresarray as $val){ ?>
                <option value="<?php echo $val?>"><?php echo $val?></option>
                <?php
                }
                ?>
        </form>
    </BODY>
 </HTML>