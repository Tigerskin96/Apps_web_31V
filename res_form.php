<!DOCTYPE html>  <!-- Tipo de documento -->
<html lang="es">

<head>
    <title>Formulario</title> <!-- titulo en pestaña -->
    <meta charset="UTF-8">
    <meta name="description" content="Este es un documento HTML5">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <link rel="stylesheet" href="Css/hoja_estilos.css"> <!-- enlace Css -->
</head>

<body>
    <header id="cabecera_logo">
        <div>
            <h1><img src=""> Titulo Prron</h1>
        </div>
    </header>
    <nav id="menu_principal">
    </nav>
    <main>
        <div>
            <section id="articulos_principales">
                <?php 
                    echo 'bienvenido'."<br>";
                    echo 'Tu nombre es : '.$_POST["Nombre"]."<br>";
                    echo 'Tu apellido Paterno es: '.$_POST["APaterno"]."<br>";
                    echo 'Tu apellido Materno es: '.$_POST["AMaterno"]."<br>";
                    echo 'Tu genero es :  '.$_POST["Sexo"]."<br>";
                    echo 'Tu fecha de nacimiento es : '.date('d/m/Y', strtotime($_POST["Calendario"]))."<br>";
                    echo 'Tu hobbie es :  '.$_POST["Hobbie"]."<br>";
                    echo 'Tu carrera es : '.$_POST["Carrera"]."<br>";
                    echo 'Tu archivo es : '.$_POST["adjunto"]."<br>";
                ?>
            </section>
            
            <div class="recuperar"></div>
        </div>
    </main>
    <footer id="pie_logo">
        <div>
            <section class="seccion_pie">
                
            </section>
            <section class="seccion_pie">
                
            </section>
            <section class="seccion_pie">
              
                <small>&copy; Derechos Reservados 2022 Tigerskin </small>
            </section>
            <div class="recuperar"></div>
        </div>
    </footer>
</body>

</html>