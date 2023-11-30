<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>voto</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="header">
        
        <div class="menu container">
            <a href="#" class="VARR">VR&AR</a>
            <input type="Checkbox" id="menu"/>
            <label for="menu">
                <img src="images/menu.png" class="menu-icono" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Como funciona el voto electronico</a></li>
                    <li><a href="#">Candidatos</a></li>
                    <li><a href="#">vota</a></li>
                </ul>
            </nav>    
        </div>
        
        <div class="header-content container">
            <div class="header-txt">
                <h1>El voto como derecho humano</h1>
                <p>
                    El derecho al voto se establece como uno de los pilares fundamentales de los derechos humanos, 
                    representando la esencia misma de la participación ciudadana en la toma de decisiones. 
                    En su expresión más pura, el voto no es simplemente un acto cívico, sino un derecho esencial 
                    a la condición humana, uniendo a la sociedad al proceso democrático que da forma a 
                    sus comunidades y países.
                </p>
                <br>
                <p>
                    A través del sufragio, las personas pueden influir en la elección de líderes y representantes, 
                    así como en la definición de políticas que afectan directamente su calidad de vida. 
                    En este sentido, el acto de votar trasciende el papel de un simple deber cívico; 
                    se convierte en un ejercicio activo de autodeterminación y empoderamiento.
                </p>
                <a href="https://www.google.com/search?q=historia+del+voto&sca_esv=586549689&rlz=1C1EJFC_enMX851MX851&biw=681&bih=609&tbm=vid&sxsrf=AM9HkKkvYb8FW50GNGLtTWfyI1pNev8kQA%3A1701327612388&ei=_DJoZduZF6OhqtsPlo6vyAc&ved=0ahUKEwjbh-6fk-uCAxWjkGoFHRbHC3kQ4dUDCA0&uact=5&oq=historia+del+voto&gs_lp=Eg1nd3Mtd2l6LXZpZGVvIhFoaXN0b3JpYSBkZWwgdm90bzIFEAAYgAQyBRAAGIAEMgUQABiABEjLPFDRC1ifKnABeACQAQCYAYABoAHsCqoBBDEyLjO4AQPIAQD4AQHCAgQQIxgnwgIIEAAYgAQYsQPCAgoQABiABBgUGIcCwgILEAAYgAQYsQMYgwHCAgcQABiABBgKwgIHECMYsAIYJ8ICChAAGIAEGA0YsQPCAgcQABiABBgNwgINEAAYgAQYDRixAxiDAcICCRAAGIAEGA0YCsICCBAAGAcYHhgTwgIGEAAYBxgewgIGEAAYHhgNwgILEAAYHhgNGPEEGArCAggQABgeGA0YCsICCRAAGIAEGA0YE8ICCBAAGB4YDRgTwgIIEAAYCBgeGA2IBgE&sclient=gws-wiz-video#fpstate=ive&vld=cid:0d5e6bfb,vid:YhMBP_awKbg,st:0" target="_blank" class="btn-1">Información</a>
            </div>
            <div class="header-img">
                <img src="images/tro.png"alt="">
            </div>    
        </div>


    
    </header>    

    <section class="abaut container">

        <div class="abaut-img">
            <img src="images/vtor.png"alt="">
        </div>
        <div class="abaut-txt">
            <h2>¿Cómo funciona el voto electronico?</h2>
            <p>
                El voto electrónico es un método de votación que utiliza tecnología digital para facilitar el proceso
                de emisión y recuento de votos en elecciones. En lugar de utilizar papeletas de papel, los votantes utilizan
                dispositivos electrónicos, como máquinas de votación o sistemas en línea, para emitir sus votos.
            </p>
            <br>
            <p>
                Este sistemas permiten a los votantes emitir sus votos a través de Internet desde la comodidad de sus hogares.
            </p>
        </div>
    </section>
    
    <main class="Candidatos">

        <h2>Candidatos</h2>
        <div class="Candidatos-content container">

            <div class="Candidato-1">
                <i class="fa-sharp fa-solid fa-circle-user"></i>
                <h3>Elizabeth Rubio (1)</h3>
            </div>    

            <div class="Candidato-1">
                <i class="fa-sharp fa-solid fa-circle-user"></i>
                <h3>Ricardo Arroyo (2)</h3>
            </div>
            
            <div class="Candidato-1">
                <i class="fa-sharp fa-solid fa-circle-user"></i>
                <h3>Albert Espinosa (3)</h3>
            </div>
            
            <div class="Candidato-1">
                <i class="fa-sharp fa-solid fa-circle-user"></i>
                <h3>Rogelio Hidalgo (4)</h3>
            </div>    
        </div>
    </main>


    <section class="formulario container">
    <form method="post" autocomplete="off">
        <h2>Realiza tu Voto</h2>
        <div class="input-group">
            <div class="input-container">
                <input type="text" name="name" placeholder="Nombre y Apellido">
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="input-container">
                <input type="email" name="email" placeholder="Correo">
                <i class="fa-solid fa-envelope"></i>
            </div>
            <div class="input-container">
                <input type="text" name="sexo" placeholder="Genero (M ó F)">
                <i class="fa-solid fa-cloud"></i>
            </div>
            <div class="input-container">
                <input type="number" name="edad" min="18" placeholder="Edad">
                <i class="fa-solid fa-cake"></i>
            </div>
            <div class="input-container">
                <input type="text" name="localidad" placeholder="Localidad">
                <i class="fa-solid fa-building"></i>
            </div>
            <div class="input-container">
                <input type="number" name="voto" min="1" max="4" placeholder="Vota por tu Candidato">
                <i class="fa-solid fa-box"></i>
            </div>
            <a href="http://www.diputados.gob.mx/LeyesBiblio/pdf/LGPDPPSO.pdf" target="_blank">Terminos y Condiciones</a>
            <input type="submit" name="send" class="btn" value="Enviar">
        </div>
    </form>
    </section>

    <footer class="footer">
        <div class="footer-content container">
            <div class="link">
                <a href="#" class="VARR">VR&AR</a>
            </div>

            <div class="link">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Como funciona el voto electronico</a></li>
                    <li><a href="#">Candidatos</a></li>
                    <li><a href="#">vota</a></li>
                </ul>
            </div>
        </div>
    </footer>

    
    <?php
        include("send.php");
    ?>

    <script>
        function myFunction() {
            window.location.href="http://localhost/voto"
        }
    </script>

</body>
</html>