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
    
    <section class="container-fluid m-0 p-0" style="position: relative; overflow: hidden; height: 526px;">
        <img src="https://static.wixstatic.com/media/fa3eb5_9edf0cf652ba44008f0c9385b8829d50~mv2.png/v1/fill/w_1151,h_667,al_c,q_90,usm_0.33_1.00_0.00,enc_avif,quality_auto/fa3eb5_9edf0cf652ba44008f0c9385b8829d50~mv2.png" alt="FACHADA.png" width="980" height="783" style="position: absolute; top:-144px; width: 100%; height: 783px; object-fit: cover; object-position: 50% 50%; z-index: 1;" fetchpriority="high">
        <div class="container-md" style="text-align:center; padding: 50px; color: #2f2e2e; position: relative; max-width: 955px; margin: 0 auto; z-index: 10;">
            <span style="font-size:42px; line-height: 1.2em; font-weight: 200;">
                Seu <b>SUCESSO</b> é o nosso <b>COMPROMISSO!</b>
            </span>
            <br>
            <br>
            <p style="text-align:left; font-size: 16px; letter-spacing: normal; line-height: 1.4em; font-weight: normal;">
                Com uma equipe experiente e uma estrutura robusta, estamos prontos para acompanhar você em cada etapa da sua jornada de empreendedor.
            ​</p>
            
            <p style="text-align:left; font-size: 16px; letter-spacing: normal; line-height: 1.4em; font-weight: normal;">
                Fornecemos não apenas as melhores soluções, mas também o suporte estratégico que sua empresa precisa para alcançar novos patamares de crescimento.
            ​</p>
        </div>
    </section>

    <section class="container-fluid m-0 p-0" style="background-color: #4486f6;">
        <div class="container-md" style="text-align:center; color: #fff; padding-top: 30px; padding-bottom: 20px;">
            <div class="d-flex justify-content-center">
                <p class="card-text" style="font-size: 25px; line-height: 1.6em; font-weight: bold; color:#FFF; margin-right: 45px;">
                    Agende uma demonstração agora!
                </p>
                <a href="<?php echo $link_whats.$text_whats;?>" target="_blank">
                    <button type="button" id="btn-entrar-contato" class="btn btn-dark rounded-pill" style="color: #4486f6; font-size: 15px; font-weight: 700; width: 186px; height: 43px;">
                        Entrar em contato
                    </button>
                </a>
            </div>
        </div>
    </section>

    <section class="container-md">
        <div style="text-align:center; padding: 50px; color:#605e5e">
            <h1 style="font-size: 30px; font-weight: 300;">
                Mais do que apenas palavras;
            </h1>
            <h1 style="font-size: 42px; font-weight: 400;">
                Um compromisso com o seu sucesso!
            </h1>
        </div>
        <div class="row">
            <div class="col">
                <div style="margin: 12px 0px 0 calc((100% - 350px) * 0.5); width: 525px; height: auto;">
                    <p class="text-secondary" style="font-size: 15px; line-height: 1.4em; font-weight: 400;">
                        Na Prontosoft, nosso objetivo é simples: <b>desenvolver soluções de automação comercial confiáveis e práticas</b>, que atendam às necessidades dos nossos clientes e parceiros.
                    </p>
                    <p class="text-secondary" style="font-size: 15px; line-height: 1.4em; font-weight: 400;">
                        Buscamos sempre a qualidade em cada produto que oferecemos, criando <b>oportunidades de crescimento mútuo</b> ao lado de nossos colaboradores e parceiros.
                    </p>
                    <p class="text-secondary" style="font-size: 15px; line-height: 1.4em; font-weight: 400;">
                        Acreditamos que o sucesso só é alcançado com <b>integridade, dedicação</b> e um <b>forte compromisso com a ética e o profissionalismo</b>.
                    </p>
                    <br>
                    <p class="text-secondary" style="font-size: 15px; line-height: 1.4em; font-weight: 400;">
                        Nossa cultura é baseada em valores sólidos, como <b>honestidade, respeito e trabalho em equipe</b>, e nos empenhamos em construir <b>relações de confiança</b> com nossos parceiros.
                    </p>
                    <p class="text-secondary" style="font-size: 15px; line-height: 1.4em; font-weight: 400;">
                        Na Prontosoft, valorizamos a <b>seriedade e o comprometimento</b> em cada ação, acreditando que <b>parceria e excelência</b> são os pilares do nosso sucesso compartilhado.
                    </p>
                </div>
            </div>
            <div class="col">
                <div style="margin: 0px 0px 65px calc((100% - 525px) * 0.5); width: 525px; height: 433px;">
                    <img src="https://static.wixstatic.com/media/fa3eb5_735e12b411bc47daaaf5b6bbb454dbdc~mv2.png/v1/fill/w_525,h_433,al_c,q_85,usm_0.33_1.00_0.00,enc_avif,quality_auto/fa3eb5_735e12b411bc47daaaf5b6bbb454dbdc~mv2.png" alt="PRODUTOS 03.png" style="width:525px; height:433px; object-fit:cover;" width="525" height="433" fetchpriority="high">
                </div>
            </div>
        </div>
    </section>
    
    <?php
    $bgFaleConosco = '#4486f6;';
    include('fale-conosco.php');
    
    include('footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="../js/fontAwesome.js"></script>
    
    <script>
        document.getElementById("comp-jbmm8xrl_video").load();
    </script>
</body>
</html>