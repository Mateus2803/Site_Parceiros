<section class="container-fluid m-0 p-0" style="background-color: #000;">
    <div class="container-md" style="text-align:center; padding: 20px; color: #fff; ">
        <div class="row row-cols-1 row-cols-md-3 g-2" style="max-width: 900px; margin: 0 auto;">
            <div class="col">
                <div class="card " style="text-align:center; background-color:transparent; border: none;">
                    <div class="card-body">
                        <a href="inicio.php" style="text-decoration: none;">
                            <img src="https://static.wixstatic.com/media/fa3eb5_a9b643e778ea482286d39587368188c3~mv2.png/v1/fill/w_129,h_69,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/360%20LOGO_edited.png 1x, https://static.wixstatic.com/media/fa3eb5_a9b643e778ea482286d39587368188c3~mv2.png/v1/fill/w_258,h_138,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/360%20LOGO_edited.png 2x" width="129" height="69" style="width: 129px; height: 69px; margin: 0 auto; object-fit: fill;" class="card-img-top" alt="...">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card footerTxtCard" style="text-align:center; background-color:transparent; border: none; padding-top: 17px;">
                    <div class="card-body">
                        <p class="card-text footerTxt" style="font-size: 12px; font-weight: normal; text-align: left;  color:#FFF;">
                            <?php echo 'Telefone: '.$celular.'<br>'.$numContato.'<br>'.$email?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card footerTxtCard" style="text-align:center; background-color:transparent; border: none; padding-top: 17px;">
                    <div class="card-body">
                        <p class="card-text footerTxt" style="font-size: 12px; font-weight: normal; text-align: left;  color:#FFF;">
                            <?php
                            echo $endereco.', '.$numero.' - '.$complemento.' - '.$bairro.'<br> '.$cidade.' - '.$uf.'<br>CEP '.$cep;
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <span style="font-size: 15px; line-height: 0.2em; font-weight: 400; color:#DBDBDB">
            360 SaaS © 2024 - Todos os direitos reservados - Política de Privacidade
        </span>
        </div>
    </div>
</section>