<HTML>
    <HEAD>
       <TITLE>grupo 3</TITLE>
    </HEAD>
    <BODY>
    <?php
            session_start();
            echo $_SESSION['Usuario1'];
        ?>
        <form action="index.html" method="get">
			<p>Registro de curso</p>
                <input type="text" placeholder="Código Curso" name="codigo"/>
                <input type="text" placeholder="Nombre" name="nombre"/>
                <a href="./registro_aula.php">Página Aula</a>
        </form>
    </BODY>
 </HTML>