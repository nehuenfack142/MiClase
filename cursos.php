<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>cursos</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="cursos.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.24.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700">
    
    <style>
        .atras{
          margin-right: 210px;
          z-index: 1;
        }
        .mostrar{
        float: left;
        position: absolute;
        z-index:0 ;
      }
    </style>

    <script type="application/ld+json">
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "Site1",
    "logo": "images/LOGO.png",
    "sameAs": []
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="cursos">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body"><header class="u-clearfix u-custom-color-3 u-header" id="sec-ee9f" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <a href="Index.php" class="u-image u-logo u-image-1" data-image-width="2150" data-image-height="1280">
          <img src="images/LOGO.png" class="u-logo-image u-logo-image-1" data-image-width="96">
        </a>
        
        <?php
        include("mostrar.php"); 
        ?>
        <div class=atras>
        <a href="Index.php" data-page-id="237575894" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-5 u-hover-custom-color-3 u-radius-10 u-text-custom-color-3 u-text-hover-custom-color-5 u-btn-3" style="margin: -30px 10px 30px 950px ">volver atras</a></div>
      </div></header> 
    <section class="u-clearfix u-grey-15 u-section-1" id="sec-4f9d">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-container-style u-group u-radius-20 u-shape-round u-white u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <div class="u-custom-color-5 u-expanded-width u-radius-20 u-shape u-shape-round u-shape-1"></div>
            <div class="u-custom-color-3 u-radius-20 u-shape u-shape-round u-shape-2"></div>
            <div class="u-image u-image-circle u-image-1" alt="" data-image-width="920" data-image-height="800"></div>
            <h6 class="u-text u-text-1">
              
            </h6>
            <h6 class="u-text u-text-2">
              <font color="#ffffff"><?php echo "$name";?><br><?php echo "$tipo";?></font>
            </h6>
            <div class="u-list u-list-1">
             <?php
              include("cursosProf.php"); 
              ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="politca-y-terminos.html" target="_blank">
        <span>Terminos y condicines</span>
      </a>
    </section>
  </body>
</html>