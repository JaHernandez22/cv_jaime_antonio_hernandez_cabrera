<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CV_estilo.css">
    <title>CV</title>
</head>
<body>
   


 


    <ul class = "Nav_bar">
    <li><a  href="#Datos personales">Datos personales</a></li>
    <li><a href="#Formacion educativa">Formacion educativa</a></li>
    <li><a href="#Experiencia laboral">Experiencia laboral</a></li>
    <li><a href="#Habilidades">Habilidades</a></li>
    <li><a href="#Area de contacto">Área de contact</a></li>
    </ul>
    
    <?php
 
  
                if(isset($_POST['nombre'])){
                    $nombre = $_POST['nombre'];
                    $correo = $_POST['correo'];
                    $mensaje = $_POST['mensaje'];


                    $campos = array();
                    if($nombre == "" || $correo == "" || $mensaje == ""){
                        array_push($campos,"Todo los campos deben ser llenados!");
                    }

                    if(count($campos) > 0){
                        echo " <div class='error' >";
                        for($i = 0; $i < count($campos); $i++){
                            echo "".$campos[$i]."<br> </div>";
                        }
                    }
                    else{
                        echo " <div class='correcto'>
                        Datos correctos</dic>"; 
                    }
                   
                }
                
        
    ?> 

    <a name = "Datos personales"></a>
    <label><h1 class = "Titulo">Datos Personales</h1></label>
        <div id = "contenedor">
            <div id = "foto_perfil">
                <img src="fotoPerfil.jpg" alt="foto de perfil" class="circular--square">
                </div>
                <div id = "Datos_Personales">
                    <section class = "Datos">
                        <p>Jaime Anotnio Hernandéz Cabrera</p>
                        <p>Edad: 29 años</p>
                        <p>Ingeniero de Software</p>
                        <p class = "objetivo_datos">Mi objetivo ncontrar una empresa que me permita 
                        aplicar los conocimientos adquiridos en los años de estudio, así 
                        como mi capacidad de planificación, organización y dirección del 
                        funcionamiento de una empresa en compañías y afines.</p>
                    </section>
                </div>
        </div>

   
   
    <a name = "Formacion educativa"></a>
    <label><h1 class = "Titulo">Formacón Educativa</h1></label>
    <div id = "formacion_flex">
        <div id = "formacion_academica">
            <div id = "inf_form">
                <p>Tecnologico de Monterrey</p>
                <p>Periodo 2017 - 2021</p>
                <p>Ingenieria de Software</p>
            </div>
            <div id = "inf_forms">
                <img src="logotec.jpg" alt="Logo del Tec de Monterrey" class="circular--square2">
            </div>
        </div>
    </div>


   <a name = "Experiencia laboral"></a>
   <label><h1 class = "Titulo">Experiencia Laboral</h1></label>

   <div id = "exp_laboral">

            <div id = "exp_sect">
                <h3 id = "titulo_exp"> Jefe de Desarrollo</h3>
                <p id = "exp_curp">Encargados de dirigir y coordinar las actividades relacionadas 
                con el análisis y desarrollo de productos de la empresa. </p>
                <p id = "titulo_exp">Junio 2018 - Junio 2021</p>
            </div>

            <div id = "exp_sect">
                <h3 id = "titulo_exp"> Programador Senior</h3>
                <p id = "exp_curp">encargado de supervisar a los desarrolladores junior en proyectos
                 y respaldar diversas tareas de desarrollo </p>
                <p id = "titulo_exp">Junio 2018 - Junio 2021</p>
            </div>

            <div id = "exp_sect"> 
                <h3 id = "titulo_exp">Programador semi-senior</h3>
                <p id = "exp_curp">Encargado de las etapas del desarrollo: análisis, desarrollo, prueba, 
                implementación, documentación, etcétera.</p>
                <p id = "titulo_exp">Junio 2018 - Junio 2021</p>
            </div>   

            <div id = "exp_sect">
                <h3 id = "titulo_exp"> Programador Jr</h3>
                <p id = "exp_curp">Trabajo en un equipo de desarrollo escribiendo y
                 manteniendo código para aplicaciones informáticas.</p>
                <p id = "titulo_exp">Junio 2018 - Junio 2021</p>
            </div>
   </div>


   <a name = "Habilidades"></a>
   <label><h1 class = "Titulo">Habilidades</h1></label>
   <div id = "box_habilidades">
        <p id = "box_titulo">HTML</p>
        <div class="container">
        <div class="skills html">90%</div>
        </div>

        <p id = "box_titulo">CSS</p>
        <br>
        <div class="container">
        <div class="skills css">80%</div>
        </div>

        <p id = "box_titulo">JavaScript</p>
        <div class="container">
        <div class="skills js">65%</div>
        </div>

        <p id = "box_titulo">PHP</p>
        <div class="container">
        <div class="skills php">60%</div>
        </div>
   </div>
   <br>
   <div id = "box_habilidades">
        <p id = "box_titulo">Adobe XD</p>
        <div class="container">
        <div class="skills ingles">90%</div>
        </div>

        <p id = "box_titulo">MySQL</p>
        <div class="container">
        <div class="skills html">90%</div>
        </div>    
        
      
   </div>
   <br>
   <div id = "box_habilidades">
         <p id = "box_titulo">INGLES</p>
        <div class="container">
        <div class="skills ingles">90%</div>
        </div>

        <p id = "box_titulo">ITALIANO</p>
        <div class="container">
        <div class="skills italiano">70%</div>
        </div>
   </div>

   <a name = "Area de contacto"></a>
   <label><h1 class = "Titulo">Área de Contacto</h1></label>

   <section id = "contacto_box">
        <form action="db_contacto.php" method="post">
            <div id = "contacto">
                <label>Ingresa tu nombre</label><br>
            </div>
            <div id = "contacto">
                <input type="text" name = "nombre" id = "nombre2" placeholder="Nombre" maxlength="70" required autofocus>
            </div>
            <div id = "contacto">
                <label>Intesa tu Correo</label><br>
            </div>
            <div id = "contacto">
                <input type="text" name = "correo" id = "correo2" placeholder="Correo electrónico" required>
            </div>
            <div id = "contacto">
                <label>Mensaje</label>
            </div>
            <div id = "contacto">
            <textarea name="mensaje"  cols="40" rows="10" maxlength="300" minlength="50" id = "mensaje2" placeholder="¿Cuál es el motivo de tu mensaje?" rows="6" required></textarea>
            </div>
            <div id = "contacto">
                
                <input type="submit" value="Enviar" onclick="myFunction(correo.value)"> 
            </div>
        </form>
   </section>
    <br>
    <hr>
    <a href="https://www.facebook.com/tonny.hcabrera/"><img src="logo/facebook.png" alt="Logo facebook" id ="redes_sociales"></a>
    <a href="https://www.instagram.com/estatus.deviaje/"><img src="logo/instagram.png" alt="Logo instagram" id="redes_sociales"></a>
    <a href="https://www.youtube.com/channel/UCKlqnX1c7QMZPGdohgPL_tA"><img src="logo/youtube.png" alt="Logo youtube" id="redes_sociales"></a>
    <p>Ultima Actualización de los datos: 15 de Septiembre 2021</p>
        
    
</body>
</html>

<script>
function myFunction(valor) {
    re=/^([\da-z_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/
    if(document.getElementById("nombre2").value == "" | !re.exec(valor) | document.getElementById("mensaje2").value == ""){
        
        alert("Error: Todo los campos deben ser llenados correctamente!");
        
    }
    else{
        
        alert("Su mensaje fue enviado!");
        
    }
}
</script>