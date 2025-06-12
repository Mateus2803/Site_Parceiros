<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/_variables.scss">
    <link rel="stylesheet" href="../css/style.css?v=1">
</head>                                       
<body>
    
    <?php include('header.php'); ?>

    <section class="container-fluid m-0 p-0" style="position: relative;">
        <video id="comp-lxksv4iv1_video" class="K8MSra" crossorigin="anonymous" loop muted autoplay="autoplay" src="https://video.wixstatic.com/video/11062b_9f5be459b4df4554a327ae70dcbe06d7/1080p/mp4/file.mp4" style="position: absolute; top:0;height: 100%; width: 100%; object-fit: cover; object-position: center center; opacity: 1; z-index: 1;"></video>
        <div style="position: absolute; top:0; height: 100%; width: 100%; background-color: #000; opacity: 0.6; z-index: 2;"></div>
        <div style="text-align:center; max-width: 730px; margin: 0 auto; padding: 120px 0; color: #fff; position: relative; z-index: 10;">
            <p style="font-size: 46px; letter-spacing: normal; line-height: normal; font-weight: bold;">
                O sistema que entrega tudo o que você precisa para 
            </p>
            <p style="font-size: 46px; letter-spacing: normal; line-height: normal; font-weight: bold; color: #000; background-color: #66ADFF; width: fit-content; margin: 0 auto;">
                Beleza e Estética
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
        <div class="row" style="padding: 50px;">
            <div class="col">
                <div style="margin: 62px 0px 0 calc((100% - 350px) * 0.5); width: 390px; height: auto;">
                    <p class="text-secondary" style="font-size: 17px; line-height: 1.4em; font-weight: 400; color: #2f2e2e!important;">                        
                        Gestão profissional para a sua empresa de beleza.<br>Conte com um sistema que facilita a rotina do seu salão de beleza ou clínica de estética.
                    </p>
                    <p class="text-secondary" style="font-size: 17px; line-height: 1.4em; font-weight: 400; color: #2f2e2e!important;">
                        Com o 360, você faz um controle de agenda automatizado e organizado, libera pagamentos para funcionários, emite ordens de serviço, recibos, notas fiscais e acompanha seu estoque e as vendas realizadas na frente de caixa.
                    </p>
                    <p class="text-secondary" style="font-size: 17px; line-height: 1.4em; font-weight: 400; color: #2f2e2e!important;">
                        Um sistema completo que acelera o crescimento do seu negócio no ramo de beleza e auxilia na organização e fidelização de clientes.
                    </p>
                </div>
            </div>
            <div class="col">
                <div style="margin: 0px 0px 65px calc((100% - 488) * 0.5); width: 488px; height: 485px;">
                    <img fetchpriority="high" sizes="488px" srcset="https://static.wixstatic.com/media/fa3eb5_5441726940bc418dbfb2f68f0227b449~mv2.png/v1/fill/w_488,h_485,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/BELEZA.png 1x, https://static.wixstatic.com/media/fa3eb5_5441726940bc418dbfb2f68f0227b449~mv2.png/v1/fill/w_976,h_970,al_c,q_90,usm_0.66_1.00_0.01,enc_avif,quality_auto/BELEZA.png 2x" id="img_comp-m2n808zc" src="https://static.wixstatic.com/media/fa3eb5_5441726940bc418dbfb2f68f0227b449~mv2.png/v1/fill/w_488,h_485,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/BELEZA.png" alt="BELEZA.png" class="BI8PVQ Tj01hh" width="488" height="485" style="object-fit: cover;">
                </div>
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
        document.getElementById("comp-lxksv4iv1_video").load();
    </script>
</body>
</html>