<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/_variables.scss">
    <link rel="stylesheet" href="../css/style.css?v=2">
</head>                                       
<body>
    
    <?php
    $pet_shop = "color: #3d9be9;";
    include('header.php');
    ?>

    <section class="container-fluid m-0 p-0" style="position: relative;">
        <video id="comp-lxksrv9s_video" class="K8MSra" crossorigin="anonymous" loop muted autoplay="autoplay" src="https://video.wixstatic.com/video/11062b_3bdb666e13074a17baa75d906d18f214/1080p/mp4/file.mp4" style="position: absolute; top:0;height: 100%; width: 100%; object-fit: cover; object-position: center center; opacity: 1; z-index: 1;"></video>
        <div style="position: absolute; top:0; height: 100%; width: 100%; background-color: #000; opacity: 0.6; z-index: 2;"></div>
        <div style="text-align:center; max-width: 730px; margin: 0 auto; padding: 120px 0; color: #fff; position: relative; z-index: 10;">
            <p style="font-size: 46px; letter-spacing: normal; line-height: normal; font-weight: bold;">
                O sistema que entrega tudo o que você precisa para 
            </p>
            <p style="font-size: 46px; letter-spacing: normal; line-height: normal; font-weight: bold; color: #000; background-color: #66ADFF; width: fit-content; margin: 0 auto;">
                Pet Shop
            </p>
            <br>
            <br>
            <br>
            <p style="font-size: 19px; letter-spacing: normal; line-height: normal; font-weight: 600;">
                Conheça nosso software para gerenciar sua empresa.
            </p>
            <p style="font-size: 19px; letter-spacing: normal; line-height: normal; font-weight: 400;">
                Venha explorar todas as funções do sistema.
            </p>
        </div>
    </section>

    <section class="container-md">
        <div id="row-segmentos" class="row" style="padding: 50px;">
            <div class="col">
                <div id="txt-inicio-segmentos" style="margin: 62px 0px 0 calc((100% - 390px) * 0.5); width: 390px; height: auto;">
                    <p class="text-secondary" style="font-size: 17px; line-height: 1.4em; font-weight: 400; color: #2f2e2e!important;">                        
                        Mantenha a organização do seu pet shop com o 360.
                    </p>
                    <p class="text-secondary" style="font-size: 17px; line-height: 1.4em; font-weight: 400; color: #2f2e2e!important;">
                        O sistema para pet shop para oferecer um controle completo de vendas, estoque e financeiro.
                    </p>
                    <p class="text-secondary" style="font-size: 17px; line-height: 1.4em; font-weight: 400; color: #2f2e2e!important;">
                        Com ele você não precisa mais se preocupar com conciliações bancárias demoradas, pois todas as cobranças e recebimentos são unificados e automatizados em um único lugar, o seu sistema de gestão.
                    </p>
                    <p class="text-secondary" style="font-size: 17px; line-height: 1.4em; font-weight: 400; color: #2f2e2e!important;">
                        Deixe o 360 otimizar o seu dia a dia e tenha mais tempo para dedicar ao crescimento do seu pet shop.
                    </p>
                </div>
            </div>
            <div class="col">
                <img id="img-inicio-segmentos" fetchpriority="high" sizes="488px" srcset="https://static.wixstatic.com/media/fa3eb5_fa1b317383264d3b82a761462e8f5dd3~mv2.png/v1/fill/w_488,h_485,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/PET.png 1x, https://static.wixstatic.com/media/fa3eb5_fa1b317383264d3b82a761462e8f5dd3~mv2.png/v1/fill/w_976,h_970,al_c,q_90,usm_0.66_1.00_0.01,enc_avif,quality_auto/PET.png 2x" id="img_comp-m2n813bs" src="https://static.wixstatic.com/media/fa3eb5_fa1b317383264d3b82a761462e8f5dd3~mv2.png/v1/fill/w_488,h_485,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/PET.png" alt="PET.png" class="BI8PVQ Tj01hh" width="488" style="object-fit: cover;">
            </div>
        </div>
    </section>

    <?php
    $bgFaleConosco = '#605E5E;';
    include('fale-conosco.php');
    
    include('footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="../js/fontAwesome.js"></script>
    
    <script>
        document.getElementById("comp-lxksrv9s_video").load();
    </script>
</body>
</html>