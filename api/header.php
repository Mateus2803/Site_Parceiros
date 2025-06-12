<?php include('dados-parceiro.php'); ?>
<nav class="navbar navbar-expand-lg bg-body">
    <div class="container-xl">
        <a class="navbar-brand" href="#" style="margin: 31px 0px 31px 0px;">
            <img src="https://static.wixstatic.com/media/fa3eb5_3c46a3ef19634e8ca03debec6e996f01~mv2.png/v1/fill/w_109,h_58,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/360%20LOGO%20escura_edited.png 1x, https://static.wixstatic.com/media/fa3eb5_3c46a3ef19634e8ca03debec6e996f01~mv2.png/v1/fill/w_218,h_116,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/360%20LOGO%20escura_edited.png 2x" alt="Bootstrap" width="109" >
        </a>
        
        <div class="collapse navbar-collapse" id="navbarScroll">
        <div class="w-100">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll justify-content-center" style="--bs-scroll-height: 100px;">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="empresa.php">Empresa</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Soluções <i class="fa-solid fa-chevron-down" style="position: relative; font-size: 10px; top: -1px;"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="360-ultra.php">360 ULTRA</a></li>
                    <li><a class="dropdown-item" href="360-pro.php">360 PRO</a></li>
                    <li><a class="dropdown-item" href="360-plus.php">360 PLUS</a></li>
                    <li><a class="dropdown-item" href="360-evo.php">360 EVO</a></li>
                    <li><a class="dropdown-item" href="360-nota.php">360 NOTA</a></li>
                    <li><a class="dropdown-item" href="360-service.php">360 SERVICE</a></li>
                    <li><a class="dropdown-item" href="360-mei.php">360 MEI</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="funcionalidades.php">Funcionalidades</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="planos.php">Planos</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Segmentos <i class="fa-solid fa-chevron-down" style="position: relative; font-size: 10px; top: -1px;"></i>
                </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="alimentos-e-bebidas.php">Alimentos e Bebidas</a></li>
                <li><a class="dropdown-item" href="autopecas.php">Autopeças</a></li>
                <li><a class="dropdown-item" href="beleza-e-estetica.php">Beleza e Estética</a></li>
                <li><a class="dropdown-item" href="distribuidoras.php">Distribuidoras</a></li>
                <li><a class="dropdown-item" href="pet-shop.php">Pet Shop</a></li>
                <li><a class="dropdown-item" href="mei.php">MEI</a></li>
                <li><a class="dropdown-item" href="mecanica.php">Mecânica</a></li>
                <li><a class="dropdown-item" href="moda-e-vestuario.php">Moda e Vestuário</a></li>
                <li><a class="dropdown-item" href="material-de-construcao.php">Material de Construção</a></li>
                <li><a class="dropdown-item" href="tecnologia.php">Tecnologia</a></li>
                <li><a class="dropdown-item" href="home.php" style="color: #3d9be9;">E muito mais.</a></li>
            </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#fale-conosco-section">Contato</a>
            </li>
            <!-- <li class="nav-item">
            <a class="nav-link" href="#" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Sobre</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Ajuda</a>
            </li> -->
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
    </div>
</nav>