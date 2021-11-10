<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>asignar</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="asignar.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.29.1, nicepage.com">
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
    <meta property="og:title" content="asignar">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body"><header class="u-clearfix u-custom-color-3 u-header" id="sec-ee9f" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <a href="index.php" class="u-image u-logo u-image-1" data-image-width="2150" data-image-height="1280">
          <img src="images/LOGO.png" class="u-logo-image u-logo-image-1" data-image-width="96">
        </a>
        <?php
                     include("mostrar.php");
                    ?>
        <a href="preceptor.php" data-page-id="237575894" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-5 u-hover-custom-color-3 u-radius-10 u-text-custom-color-3 u-text-hover-custom-color-5 u-btn-1" style="margin: -30px 10px 30px 950px ">volver atras</a>
      </div></header>
    <section class="u-clearfix u-section-1" id="sec-9027">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-container-style u-grey-25 u-group u-radius-15 u-shape-round u-group-1">
          <div class="u-container-layout u-container-layout-1" style="height: 800px">
            <div class="u-container-style u-custom-color-5 u-group u-radius-15 u-shape-round u-group-2">
              <div class="u-container-layout u-container-layout-2">
                <div class="u-custom-color-3 u-expanded-width u-radius-15 u-shape u-shape-round u-shape-1" style=" padding: -500px 0px 0px 0px "></div>
                <h1 class="u-text u-text-body-alt-color u-text-1 " >Asignar Rol</h1>
                <form method="POST">
                <input placeholder="Nombre" class=" u-text-3" type="text" name="name">
                <input placeholder="ejemplomail@gmail.com" class=" u-text-3" type="email" name="mail">
                <select placeholder="Rol:" class=" u-text-3" type="text" name="rol">
                  <option disabled="">Seleccione el rol adecuado:</option>
                  <option>Alumno</option>
                  <option>Profesor</option>
                  <option>Preceptor</option>
                  
                </select>
               
                <input type="submit" name="guardar" href="https://nicepage.com/static-site-generator" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-3 u-hover-custom-color-3  u-radius-10 u-text-custom-color-5 u-text-hover-custom-color-3 u-btn-1" style="margin: 50px 0px 0px 500px;"> 
              </form>

                    
              </div>
            </div>
            <?php
                     include("asignarCa.php");
                    ?>
          </div>
        </div>
      </div>
    </section>
    
    
    
     </section>
 
    <style class="u-overlap-style">.u-overlap:not(.u-sticky-scroll) .u-header {
}</style>
    
    
    
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="politca-y-terminos.html" target="_blank">
        <span>Terminos y condicines</span>
      </a>
    </section>
  </body>
</html>