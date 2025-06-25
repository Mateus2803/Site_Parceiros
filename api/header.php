<?php
    
    include('dados-parceiro.php');

    //Menu
    if(!isset($inicio))         { $inicio            = ""; }
    if(!isset($funcionalidades)){ $funcionalidades = ""; }
    if(!isset($planos))         { $planos          = ""; }

    //Soluções
    if(!isset($ultra360))  { $ultra360   = ""; }
    if(!isset($pro360))    { $pro360     = ""; }
    if(!isset($plus360))   { $plus360    = ""; }
    if(!isset($evo360))    { $evo360     = ""; }
    if(!isset($nota360))   { $nota360    = ""; }
    if(!isset($service360)){ $service360 = ""; }
    if(!isset($mei360))    { $mei360     = ""; }
    
    //Segmentos
    if(!isset($alimentos_bebidas)) { $alimentos_bebidas = ""; }
    if(!isset($autopecas))         { $autopecas         = ""; }
    if(!isset($beleza_estetica))   { $beleza_estetica   = ""; }
    if(!isset($distribuidoras))    { $distribuidoras    = ""; }
    if(!isset($pet_shop))          { $pet_shop          = ""; }
    if(!isset($mei_segmento))      { $mei_segmento      = ""; }
    if(!isset($mecanica))          { $mecanica          = ""; }
    if(!isset($moda_vestuario))    { $moda_vestuario    = ""; }
    if(!isset($material_construcao)){ $material_construcao= ""; }
    if(!isset($tecnologia))        { $tecnologia        = ""; }
    
?>
<nav class="navbar navbar-expand-lg bg-body">
    <div class="container-xl">
        <a class="navbar-brand" href="inicio.php" style="margin: 31px 0px 31px 0px;">
            <img src="https://static.wixstatic.com/media/fa3eb5_3c46a3ef19634e8ca03debec6e996f01~mv2.png/v1/fill/w_109,h_58,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/360%20LOGO%20escura_edited.png 1x, https://static.wixstatic.com/media/fa3eb5_3c46a3ef19634e8ca03debec6e996f01~mv2.png/v1/fill/w_218,h_116,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/360%20LOGO%20escura_edited.png 2x" alt="Bootstrap" width="109" >
        </a>
        
        <div class="collapse navbar-collapse" id="navbarScroll">
        <div class="w-100">
        <ul id="menuDescktop" class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll justify-content-center" style="--bs-scroll-height: 100px;">
            <li class="nav-item">
                <a class="nav-link menuNavLink <?php echo $inicio; ?>" aria-current="page" href="inicio.php">Início</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link menuNavLink" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Soluções <i class="fa-solid fa-chevron-down" style="position: relative; font-size: 10px; top: -1px;"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" style="<?php echo $ultra360; ?>" href="360-ultra.php">360 ULTRA</a></li>
                    <li><a class="dropdown-item" style="<?php echo $pro360; ?>" href="360-pro.php">360 PRO</a></li>
                    <li><a class="dropdown-item" style="<?php echo $plus360; ?>" href="360-plus.php">360 PLUS</a></li>
                    <li><a class="dropdown-item" style="<?php echo $evo360; ?>" href="360-evo.php">360 EVO</a></li>
                    <li><a class="dropdown-item" style="<?php echo $nota360; ?>" href="360-nota.php">360 NOTA</a></li>
                    <li><a class="dropdown-item" style="<?php echo $service360; ?>" href="360-service.php">360 SERVICE</a></li>
                    <li><a class="dropdown-item" style="<?php echo $mei360; ?>" href="360-mei.php">360 MEI</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link menuNavLink <?php echo $funcionalidades; ?>" aria-current="page" href="funcionalidades.php">Funcionalidades</a>
            </li>
            <li class="nav-item">
                <a class="nav-link menuNavLink <?php echo $planos; ?>" aria-current="page" href="planos.php">Planos</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link menuNavLink" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Segmentos <i class="fa-solid fa-chevron-down" style="position: relative; font-size: 10px; top: -1px;"></i>
                </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" style="<?php echo $alimentos_bebidas; ?>" href="alimentos-e-bebidas.php">Alimentos e Bebidas</a></li>
                <li><a class="dropdown-item" style="<?php echo $autopecas; ?>" href="autopecas.php">Autopeças</a></li>
                <li><a class="dropdown-item" style="<?php echo $beleza_estetica; ?>" href="beleza-e-estetica.php">Beleza e Estética</a></li>
                <li><a class="dropdown-item" style="<?php echo $distribuidoras; ?>" href="distribuidoras.php">Distribuidoras</a></li>
                <li><a class="dropdown-item" style="<?php echo $pet_shop; ?>" href="pet-shop.php">Pet Shop</a></li>
                <li><a class="dropdown-item" style="<?php echo $mei_segmento; ?>" href="mei.php">MEI</a></li>
                <li><a class="dropdown-item" style="<?php echo $mecanica; ?>" href="mecanica.php">Mecânica</a></li>
                <li><a class="dropdown-item" style="<?php echo $moda_vestuario; ?>" href="moda-e-vestuario.php">Moda e Vestuário</a></li>
                <li><a class="dropdown-item" style="<?php echo $material_construcao; ?>" href="material-de-construcao.php">Material de Construção</a></li>
                <li><a class="dropdown-item" style="<?php echo $tecnologia; ?>" href="tecnologia.php">Tecnologia</a></li>
                <li><a class="dropdown-item" href="inicio.php" style="color: #3d9be9;">E muito mais.</a></li>
            </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link menuNavLink" aria-current="page" href="#fale-conosco-section">Contato</a>
            </li>
        </ul>
        </div>
        <div class="d-flex navbar-nav" style="min-width: 184px;">
           <a href="<?php echo $link_whats.$text_whats ;?>" target="_blank">
                <button type="button" id="btn-quero-conhecer" class="btn btn-primary rounded-pill">
                    QUERO CONHECER
                </button>
            </a>
        </div>
        </div>

        
        <button id="btn-menu-mobile" class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>



<div class="container-fluid">
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                    <a class="nav-link menuNavLink <?php echo $inicio; ?>" aria-current="page" href="inicio.php">Início</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link menuNavLink" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Soluções <i class="fa-solid fa-chevron-down" style="position: relative; font-size: 10px; top: -1px;"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" style="<?php echo $ultra360; ?>" href="360-ultra.php">360 ULTRA</a></li>
                        <li><a class="dropdown-item" style="<?php echo $pro360; ?>" href="360-pro.php">360 PRO</a></li>
                        <li><a class="dropdown-item" style="<?php echo $plus360; ?>" href="360-plus.php">360 PLUS</a></li>
                        <li><a class="dropdown-item" style="<?php echo $evo360; ?>" href="360-evo.php">360 EVO</a></li>
                        <li><a class="dropdown-item" style="<?php echo $nota360; ?>" href="360-nota.php">360 NOTA</a></li>
                        <li><a class="dropdown-item" style="<?php echo $service360; ?>" href="360-service.php">360 SERVICE</a></li>
                        <li><a class="dropdown-item" style="<?php echo $mei360; ?>" href="360-mei.php">360 MEI</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link menuNavLink <?php echo $funcionalidades; ?>" aria-current="page" href="funcionalidades.php">Funcionalidades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menuNavLink <?php echo $planos; ?>" aria-current="page" href="planos.php">Planos</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link menuNavLink" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Segmentos <i class="fa-solid fa-chevron-down" style="position: relative; font-size: 10px; top: -1px;"></i>
                    </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" style="<?php echo $alimentos_bebidas; ?>" href="alimentos-e-bebidas.php">Alimentos e Bebidas</a></li>
                    <li><a class="dropdown-item" style="<?php echo $autopecas; ?>" href="autopecas.php">Autopeças</a></li>
                    <li><a class="dropdown-item" style="<?php echo $beleza_estetica; ?>" href="beleza-e-estetica.php">Beleza e Estética</a></li>
                    <li><a class="dropdown-item" style="<?php echo $distribuidoras; ?>" href="distribuidoras.php">Distribuidoras</a></li>
                    <li><a class="dropdown-item" style="<?php echo $pet_shop; ?>" href="pet-shop.php">Pet Shop</a></li>
                    <li><a class="dropdown-item" style="<?php echo $mei_segmento; ?>" href="mei.php">MEI</a></li>
                    <li><a class="dropdown-item" style="<?php echo $mecanica; ?>" href="mecanica.php">Mecânica</a></li>
                    <li><a class="dropdown-item" style="<?php echo $moda_vestuario; ?>" href="moda-e-vestuario.php">Moda e Vestuário</a></li>
                    <li><a class="dropdown-item" style="<?php echo $material_construcao; ?>" href="material-de-construcao.php">Material de Construção</a></li>
                    <li><a class="dropdown-item" style="<?php echo $tecnologia; ?>" href="tecnologia.php">Tecnologia</a></li>
                    <li><a class="dropdown-item" href="inicio.php" style="color: #3d9be9;">E muito mais.</a></li>
                </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link menuNavLink" aria-current="page" onclick="myFunction();" href="inicio.php#fale-conosco-section" >Contato</a>
                </li>
            </ul>
            <!-- Search 
            <form class="d-flex mt-3" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
            <button class="btn btn-outline-success" type="submit">Search</button>
            </form>-->
        </div>
    </div>
</div>
<script>
    function myFunction() {
        var $offcanvasNavbar    = document.getElementById('offcanvasNavbar');
        var $offcanvas_backdrop = document.querySelector('.offcanvas-backdrop').outerHTML = '';

            if ($offcanvasNavbar.classList.contains('show')) {
                $offcanvasNavbar.classList.remove('show');
            }

            $offcanvasNavbar.removeAttribute("aria-modal");
            $offcanvasNavbar.removeAttribute("role");
            document.querySelector('body').removeAttribute("style");
    }
</script>
