
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>alumno</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="alumno.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.24.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700">
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Site1",
		"logo": "images/LOGO.png",
		"sameAs": []
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="alumno">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body"><header class="u-clearfix u-custom-color-3 u-header" id="sec-ee9f" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <a href="Index.php"class="u-image u-logo u-image-1" data-image-width="2150" data-image-height="1280">
          <img src="images/LOGO.png" class="u-logo-image u-logo-image-1" data-image-width="96">
        </a>
        <?php
        include("mostrar.php"); 
        ?>
        <?php
        if (isset($_GET['enviar'])) {
  $h = $_GET['enviar'];
}
$inc = include("con_db.php");
if(!isset($_SESSION)){
session_start();
$seccion=$_SESSION['email'];}
{
$resultado = mysqli_query($conex,"SELECT * FROM datos where email ='".$seccion."'" );
$i=0;
  if ($resultado) {
        while ($row = $resultado -> fetch_array()){
          $materia= $row['materias'];
          $cursos = $row['cursos'];
          $id = $row['id'];
          $i++; 

    }
  }
  $cons=$conex->query("SELECT id FROM datos where tipousuario ='Profesor' and materias='".$h."' and cursos='".$cursos."' ");
          $filas= mysqli_num_rows($cons);

}
?>
        <a href="materias.php" data-page-id="237575894" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-5 u-hover-custom-color-3 u-radius-10 u-text-custom-color-3 u-text-hover-custom-color-5 u-btn-3">Volver atras</a>
      </div></header>
    <section class="u-clearfix u-grey-15 u-section-1" id="sec-7e7f">
      <div class="u-clearfix u-sheet u-sheet-1" >
        <div class="u-container-style u-group u-radius-20 u-shape-round u-white u-group-1" >
          <div class="u-container-layout u-container-layout-1">
            <div class="u-custom-color-5 u-expanded-width u-radius-20 u-shape u-shape-round u-shape-1"></div>
            <div class="u-custom-color-3 u-radius-20 u-shape u-shape-round u-shape-2"></div>
            <div class="u-image u-image-circle u-image-1" alt="" data-image-width="920" data-image-height="800"></div>
            <h6 class="u-text u-text-1">
              
            </h6>
            <h6 class="u-text u-text-2">
              <font color="#ffffff"><?php echo "$name";?><br><?php echo "$tipo";?></font>
            </h6>
            <div class="u-list u-list-1" >
              <div class="datos2" style="margin: 0px 0px 50px 0px; ">
          
              <form  action="tutorialesA.html" class="u-custom-color-5 u-hover-custom-color-3 u-radius-10 u-text-custom-color-3 u-text-hover-custom-color-5 u-btn-3" >
                      <input style="background: transparent; padding: 24px 900px 24px 50px; border-color: transparent; font: Oswald;" type="submit" value="Tutoriales"><br>
                      </form>
       </div>
              <div class="u-repeater u-repeater-1">
                <div class="u-container-style u-custom-color-5 u-list-item u-radius-15 u-repeater-item u-shape-round u-list-item-1">
                  <div class="u-container-layout u-similar-container u-container-layout-2"><span class="u-icon u-icon-circle u-text-custom-color-3 u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="-27 0 512 512.00001" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-baef"></use></svg><svg class="u-svg-content" viewBox="-27 0 512 512.00001" id="svg-baef"><path d="m399.996094 0h-341.996094c-31.980469 0-58 26.019531-58 58v369.996094c0 16.542968 13.457031 30 30 30h131.332031c5.523438 0 10-4.476563 10-10 0-5.523438-4.476562-10-10-10h-131.332031c-5.515625 0-10-4.484375-10-10v-369.996094c0-20.953125 17.046875-38 38-38h298.234375c-8.855469 10.1875-14.238281 23.472656-14.238281 38v322.265625c0 9.226563-7.503906 16.730469-16.730469 16.730469-7.210937 0-13.589844-4.597656-15.875-11.4375l-15.070313-45.21875c-4.253906-12.765625-16.15625-21.339844-29.609374-21.339844-17.210938 0-31.210938 14-31.210938 31.207031v7.789063h-51.832031c-5.523438 0-10 4.480468-10 10 0 5.523437 4.476562 10 10 10h51.832031v49.75c0 14.765625 2.878906 29.164062 8.558594 42.789062l14.710937 35.308594c1.601563 3.839844 5.316407 6.15625 9.234375 6.15625 1.28125 0 2.585938-.246094 3.839844-.769531 5.101562-2.125 7.511719-7.980469 5.386719-13.078125l-14.710938-35.308594c-4.65625-11.175781-7.019531-22.984375-7.019531-35.09375v-77.539062c0-6.183594 5.027344-11.210938 11.210938-11.210938 4.832031 0 9.109374 3.078125 10.636718 7.664062l15.070313 45.21875c5.007812 15.019532 19.011719 25.113282 34.847656 25.113282 20.253906 0 36.730469-16.476563 36.730469-36.730469v-171.449219l13.363281 13.335938c23.84375 23.796875 36.972656 55.457031 36.972656 89.140625v106.300781c0 27.535156-6.238281 55.238281-18.035156 80.117188-2.367187 4.988281-.238281 10.953124 4.75 13.320312s10.953125.242188 13.320313-4.75c13.058593-27.539062 19.964843-58.207031 19.964843-88.6875v-106.300781c0-39.035157-15.214843-75.71875-42.84375-103.296875l-27.492187-27.441406v-9.554688h66c16.542968 0 30-13.457031 30-30v-83c0-31.980469-26.015625-58-58-58zm38 141c0 5.511719-4.484375 10-10 10h-66v-93c0-20.953125 17.046875-38 38-38s38 17.046875 38 38zm0 0"></path><path d="m205 437.996094c-2.632812 0-5.210938 1.070312-7.070312 2.929687-1.859376 1.863281-2.929688 4.441407-2.929688 7.070313 0 2.632812 1.070312 5.210937 2.929688 7.070312 1.859374 1.859375 4.4375 2.929688 7.070312 2.929688 2.628906 0 5.207031-1.070313 7.070312-2.929688 1.859376-1.859375 2.929688-4.4375 2.929688-7.070312 0-2.628906-1.070312-5.207032-2.929688-7.070313-1.863281-1.859375-4.441406-2.929687-7.070312-2.929687zm0 0"></path><path d="m137.667969 74c0-11.027344-8.972657-20-20-20h-44c-11.03125 0-20 8.972656-20 20v44c0 11.027344 8.96875 20 20 20h44c11.027343 0 20-8.972656 20-20zm-20 44h-44v-44h44l.011719 44s-.003907 0-.011719 0zm0 0"></path><path d="m137.667969 194c0-11.027344-8.972657-20-20-20h-44c-11.03125 0-20 8.972656-20 20v44c0 11.027344 8.96875 20 20 20h44c11.027343 0 20-8.972656 20-20zm-20 44h-44v-44h44l.011719 44s-.003907 0-.011719 0zm0 0"></path><path d="m117.667969 294h-44c-11.03125 0-20 8.96875-20 20v43.996094c0 11.03125 8.96875 20 20 20h44c11.027343 0 20-8.96875 20-20v-43.996094c0-11.03125-8.972657-20-20-20zm0 63.996094h-44v-43.996094h44l.011719 43.996094s-.003907 0-.011719 0zm0 0"></path><path d="m296.332031 138c5.523438 0 10-4.476562 10-10s-4.476562-10-10-10h-68.9375c-5.523437 0-10 4.476562-10 10s4.476563 10 10 10zm0 0"></path><path d="m181.667969 138c2.632812 0 5.210937-1.070312 7.070312-2.929688 1.859375-1.859374 2.929688-4.441406 2.929688-7.070312s-1.070313-5.210938-2.929688-7.070312c-1.859375-1.859376-4.4375-2.929688-7.070312-2.929688-2.640625 0-5.210938 1.070312-7.070313 2.929688-1.867187 1.859374-2.929687 4.441406-2.929687 7.070312s1.0625 5.210938 2.929687 7.070312c1.859375 1.859376 4.429688 2.929688 7.070313 2.929688zm0 0"></path><path d="m181.664062 258h114.667969c5.523438 0 10-4.476562 10-10s-4.476562-10-10-10h-114.667969c-5.519531 0-10 4.476562-10 10s4.480469 10 10 10zm0 0"></path></svg></span>
                    <a href="alumno.html#sec-100c" data-page-id="60152624" class="u-btn u-button-style u-custom-font u-font-oswald u-text-custom-color-3 u-btn-1">Tareas</a>
                  </div>
                </div>
                <div class="u-container-style u-custom-color-5 u-list-item u-radius-15 u-repeater-item u-shape-round u-list-item-2">
                  <div class="u-container-layout u-similar-container u-container-layout-3"><span class="u-icon u-icon-circle u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-6bc4"></use></svg><svg class="u-svg-content" viewBox="0 0 512 512" id="svg-6bc4"><g><g><path d="m349.186 467.449h-186.373c-4.142 0-7.5-3.358-7.5-7.5s3.358-7.5 7.5-7.5h186.373c4.143 0 7.5 3.358 7.5 7.5s-3.357 7.5-7.5 7.5z"></path>
</g><g><path d="m473.44 324.87c4.143 0 7.5-3.358 7.5-7.5v-123.49c0-7.666-5.69-7.547-15.54-7.5v-132.28c0-4.142-3.357-7.5-7.5-7.5h-79.69c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h72.19v124.78h-16.06l.003-85.513c0-4.142-3.357-7.5-7.5-7.5h-341.686c-4.142 0-7.5 3.358-7.5 7.5l.002 85.513h-16.059v-171.38h144.703l44.393 44.403c1.406 1.407 3.314 2.197 5.304 2.197h89.53c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-86.423l-44.393-44.403c-1.407-1.406-3.315-2.197-5.304-2.197h-155.31c-4.142 0-7.5 3.358-7.5 7.5v178.88c-8.836.112-15.54-.166-15.54 7.5v310.62c0 4.142 3.358 7.5 7.5 7.5h434.88c4.143 0 7.5-3.358 7.5-7.5v-154.45c0-4.142-3.357-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v146.95h-419.88v-295.62h87.73c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-41.13v-16.07h326.68v16.07h-252.87c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h299.47v115.99c0 4.142 3.358 7.5 7.5 7.5zm-380.783-216.503h326.685v15.853h-326.685zm0 46.916v-15.854h326.685v15.854z"></path><path d="m155.313 333.893c0 55.519 45.168 100.687 100.687 100.687 54.537 0 100.687-46.005 100.687-100.687 0-55.519-45.168-100.687-100.687-100.687s-100.687 45.168-100.687 100.687zm155.118 66.128c-31.066 25.616-78.023 25.579-109.056-.164v-33.179c0-2.941 2.138-5.614 5.339-6.705l33.205-8.372h31.968l33.204 8.372c3.202 1.09 5.34 3.764 5.34 6.705zm-77.993-86.767v-10.637c0-12.875 10.57-23.349 23.562-23.349s23.562 10.475 23.562 23.349v10.637c0 12.856-10.539 23.317-23.504 23.348h-.116c-12.966-.031-23.504-10.492-23.504-23.348zm109.248 20.639c0 18.706-6.043 36.019-16.255 50.125v-17.34c0-9.562-6.424-18.025-15.983-21.062-.145-.046-.29-.087-.437-.125l-24.707-6.229c6.361-6.841 10.257-15.979 10.257-26.01v-10.637c0-21.146-17.299-38.349-38.562-38.349s-38.562 17.203-38.562 38.349v10.637c0 10.01 3.881 19.134 10.22 25.97l-24.862 6.268c-.147.037-.292.079-.437.124-9.561 3.036-15.984 11.5-15.984 21.062v17.068c-10.094-14.057-16.062-31.266-16.062-49.854 0-47.248 38.439-85.687 85.687-85.687 47.249.003 85.687 38.442 85.687 85.69z"></path>
</g>
</g></svg></span>
                    <a href="https://docs.google.com/document/u/0/?hl=es" data-page-id="60152624" class="u-btn u-button-style u-custom-font u-font-oswald u-text-custom-color-3 u-btn-2">Carpeta</a>
                  </div>
                </div>
                <div class="u-container-style u-custom-color-5 u-list-item u-radius-15 u-repeater-item u-shape-round u-list-item-3">
                  <div class="u-container-layout u-similar-container u-container-layout-4"><span class="u-icon u-icon-circle u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-df7d"></use></svg><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" id="svg-df7d" style="enable-background:new 0 0 512 512;"><g><g><path d="M304,96H112c-8.832,0-16,7.168-16,16c0,8.832,7.168,16,16,16h192c8.832,0,16-7.168,16-16C320,103.168,312.832,96,304,96z"></path>
</g>
</g><g><g><path d="M240,160H112c-8.832,0-16,7.168-16,16c0,8.832,7.168,16,16,16h128c8.832,0,16-7.168,16-16    C256,167.168,248.832,160,240,160z"></path>
</g>
</g><g><g><path d="M352,0H64C28.704,0,0,28.704,0,64v320c0,6.208,3.584,11.872,9.216,14.496C11.36,399.488,13.696,400,16,400    c3.68,0,7.328-1.28,10.24-3.712L117.792,320H352c35.296,0,64-28.704,64-64V64C416,28.704,387.296,0,352,0z M384,256    c0,17.632-14.336,32-32,32H112c-3.744,0-7.36,1.312-10.24,3.712L32,349.856V64c0-17.632,14.336-32,32-32h288    c17.664,0,32,14.368,32,32V256z"></path>
</g>
</g><g><g><path d="M448,128c-8.832,0-16,7.168-16,16c0,8.832,7.168,16,16,16c17.664,0,32,14.368,32,32v270.688l-54.016-43.2    c-2.816-2.24-6.368-3.488-9.984-3.488H192c-17.664,0-32-14.368-32-32v-16c0-8.832-7.168-16-16-16c-8.832,0-16,7.168-16,16v16    c0,35.296,28.704,64,64,64h218.368l75.616,60.512C488.896,510.816,492.448,512,496,512c2.336,0,4.704-0.512,6.944-1.568    C508.48,507.744,512,502.144,512,496V192C512,156.704,483.296,128,448,128z"></path>
</g>
</g></svg></span>
                    <a href="javascript:abrir()" class="u-btn u-button-style u-custom-font u-font-oswald u-text-custom-color-3 u-btn-3">Chat<br>
                      
                    </a>
                  </div>
                </div>
              </div>
              
                  <?php
                  $prof = mysqli_query($conex,"SELECT * FROM datos where tipousuario ='Profesor' and cursos='".$cursos."'and materias='".$materia."'");
                  $i=0;
                  while ($row = $prof -> fetch_array()){
                          $nom[$i] = $row['nombre'];
                          $ema[$i] = $row['email'];
                          $i++;
                          }
                          ?>

        <div class="calendar2" id="calendar2" style="background-color: #89d0ca; margin: 20px 0px; height:  430px; border-radius: 20px">
                        <form method="POST"  style="background-color: #5e35b1; margin: -10px 10px 10px 10px ; height: auto; border-radius: 20px">
                          <h1 style="margin: 20px; color: #fff">Cominicacion</h1>
                          <select name="mail" required="" style="margin: 15px;padding: 10px;width: 640px;font-size: 18px;border: none;margin-bottom: 5px">
                          <?php for($i=0;$i<$filas;$i++){ ?>
                            <option value="<?php echo "$ema[$i]";?>"><?php echo "$nom[$i]";?></option>
                            <?php } ?>
                          </select>

                          <input type="text" placeholder ="Asunto" name="asunto" required=""  style="margin: 15px;padding: 10px;width: 640px;font-size: 18px;border: none;margin-bottom: 5px">
                          <textarea placeholder ="Mensaje" name="msg" style="margin: 15px;padding: 10px;width: 640px;font-size: 18px;border: none;margin-bottom: 5px; min-height: 100px;max-height: 200px;min-width: 640px;max-width: 640px;" ></textarea>
                          <input type="submit" name="enviar" style="margin: 0px 0px 0px 500px; padding: 10px 20px 10px 20px;  background-color: #89d0ca; border-radius: 20px; color: white">
                          <a href="javascript:cerrar()" style="margin: -200px 0px 0px 650px; color: red; ">X</a>
                        </form>
                           </div>
              <!--<div class="calendar2" id="calendar2" style="display: none; position: absolute center;">
                        <form method="POST" style="width: 700px; margin: auto; background-color: #89d0ca; margin-top: 100px;">
                          <select name="mail" required="" style="margin: 15px;padding: 10px;width: 640px;font-size: 18px;border: none;margin-bottom: 5px">
                            <option value="">Profe1</option>
                            <option value="01josueluna@gmail.com">Profe2</option>
                            <option value="01lunajosue@gmail.com">Profe3</option>
                            <option value="triaccanehuen.nt56@gmail.com">Profe4</option>
                          </select>

                          <input type="text" placeholder ="Asunto" name="asunto" required="" style="margin: 15px;padding: 10px;width: 640px;font-size: 18px;border: none;margin-bottom: 5px">
                          <textarea placeholder ="Mensaje" name="msg" style="margin: 15px;padding: 10px;width: 640px;font-size: 18px;border: none;margin-bottom: 5px; min-height: 100px;max-height: 200px;min-width: 640px;max-width: 640px;"></textarea>
                          <input type="submit" name="enviar" style="margin: 15px;padding: 10px;width: 640px;font-size: 18px;border: none;margin-bottom: 5px">
                          <a href="javascript:cerrar()" style="margin: 630px; color: red;padding: 10px;width: 640px;font-size: 18px;border: none;margin-bottom: 5px">X</a>
                        </form>
                           </div>-->
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-grey-15 u-section-2" id="sec-100c">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-container-style u-expanded-width u-group u-radius-20 u-shape-round u-white u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <div class="u-custom-color-5 u-expanded-width u-radius-20 u-shape u-shape-round u-shape-1"></div>
            <div class="u-custom-color-3 u-radius-20 u-shape u-shape-round u-shape-2"></div>
            <h6 class="u-text u-text-1"  style=" color: #fff;  margin: -80px 0px 100px 50px; ">Tareas&nbsp;</h6>
            

          


           
              
                
                 <?php
                   include("Tareas.php");
                 ?>
                
          </div>
        </div>
      </div>
    </section>
    
    
    
    
    <section class="u-backlink u-clearfix u-grey-80">
      <a href= "politca-y-terminos.html"class="u-link" href="politca-y-terminos.html" target="_blank">
        <span>Terminos y condicines</span>
      </a>
    </section>
    <script>
      function abrir(){
        document.getElementById("calendar2").style.display="block"
      }
      function cerrar(){
        document.getElementById("calendar2").style.display="none"
      }
      </script>
      <?php
        include("Correo.php");
      ?>
  </body>
</html>