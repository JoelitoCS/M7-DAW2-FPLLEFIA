
<html>
<head>
    <meta charset="UTF-8">
    <title><?= "Pp1-CanoJoel"; ?></title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <header>
        <img id="logo" src="imagen/logo-fpllefia.png" alt="FPLlefia">
        <h1><?= "Módulo 7 – Práctica 1. Mi primera aplicación en PHP"; ?></h1>
    </header>

    <main>
        <div id="perfil">
            <div id="columnaFoto">
                <img id="miFoto" src="imagen/yo.jpg" alt="Joel Cano">
                <h2 id="miNombre"><?= "Joel Cano"; ?></h2>
            </div>
            <p id="textoExplicativo"><?="Lo subrayado muestra cómo se llama a funciones de PHP dentro del HTML. Primero, se usa sayHello('remote world'); para mostrar el mensaje 'Hello remote world!' usando la función definida antes. Después, se llama a phpinfo();, que muestra información detallada sobre la configuración de PHP en el servidor. Ambas llamadas están dentro de etiquetas <?php ... ?>, lo que permite mezclar PHP y HTML en la misma página." ?> </p>
        </div>
        
    </main>
    
    <footer>
        <p>Mi nombre es <?="Joel Cano"; ?></p>
        <p>La fecha de hoy es <?= date("d/m/Y"); ?></p>
    </footer>

    
         
        
</body>

</html>


