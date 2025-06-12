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
        <video id="comp-lxksh0401_video" class="K8MSra" crossorigin="anonymous" loop muted autoplay="autoplay" src="https://video.wixstatic.com/video/11062b_edf7139cd7854e50a67e824e22586d1c/1080p/mp4/file.mp4" style="position: absolute; top:0;height: 100%; width: 100%; object-fit: cover; object-position: center center; opacity: 1; z-index: 1;"></video>
        <div style="position: absolute; top:0; height: 100%; width: 100%; background-color: #000; opacity: 0.6; z-index: 2;"></div>
        <div style="text-align:center; max-width: 730px; margin: 0 auto; padding: 120px 0; color: #fff; position: relative; z-index: 10;">
            <p style="font-size: 46px; letter-spacing: normal; line-height: normal; font-weight: bold;">
                O sistema que entrega tudo o que você precisa para 
            </p>
            <p style="font-size: 46px; letter-spacing: normal; line-height: normal; font-weight: bold; color: #000; background-color: #66ADFF; width: fit-content; margin: 0 auto;">
                Tecnologia e Informática
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
                <div style="margin: 22px 0px 0 calc((100% - 350px) * 0.5); width: 390px; height: auto;">
                    <p class="text-secondary" style="font-size: 17px; line-height: 1.4em; font-weight: 400; color: #2f2e2e!important;">                        
                        Acelere o crescimento do seu negócio de tecnologia e informática.
                    </p>
                    <p class="text-secondary" style="font-size: 17px; line-height: 1.4em; font-weight: 400; color: #2f2e2e!important;">
                        Ter tempo para cuidar da gestão e organização da empresa pode ser um desafio.
                    </p>
                    <p class="text-secondary" style="font-size: 17px; line-height: 1.4em; font-weight: 400; color: #2f2e2e!important;">
                        Com o sistema 360, você conta com funcionalidades que organizam e facilitam a gestão de todas as áreas da sua empresa de tecnologia e informática, tornando a sua rotina mais ágil e automatizada.
                    </p>
                    <p class="text-secondary" style="font-size: 17px; line-height: 1.4em; font-weight: 400; color: #2f2e2e!important;">
                        Organize informações de clientes, acompanhe cada etapa do serviço executado, faça o controle de estoque de peças e equipamentos, obtenha dados de lucros e contas a pagar e gerencie todas as áreas da empresa em um só lugar.
                    </p>
                </div>
            </div>
            <div class="col">
                <div style="margin: 0px 0px 65px calc((100% - 488) * 0.5); width: 488px; height: 485px;">
                    <img fetchpriority="high" sizes="488px" srcset="https://static.wixstatic.com/media/fa3eb5_48528258e4ad413e81d216aca12c0b78~mv2.png/v1/fill/w_488,h_485,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/TECNO.png 1x, https://static.wixstatic.com/media/fa3eb5_48528258e4ad413e81d216aca12c0b78~mv2.png/v1/fill/w_976,h_970,al_c,q_90,usm_0.66_1.00_0.01,enc_avif,quality_auto/TECNO.png 2x" id="img_comp-m2n834vz" src="https://static.wixstatic.com/media/fa3eb5_48528258e4ad413e81d216aca12c0b78~mv2.png/v1/fill/w_488,h_485,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/TECNO.png" alt="TECNO.png" class="BI8PVQ Tj01hh" width="488" height="485" style="object-fit: cover;">
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
        document.getElementById("comp-lxksh0401_video").load();
    </script>
</body>
</html>