<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
<meta http-equiv="Content-Language" content="pt-br">

<head>
    <?php
    include('header.php');
    ?>
    <title>
        <?php echo $ttl . " - " . "Quem somos"; ?>
    </title>
</head>

<body>
    <header>
        <?php
        include('core/mod_topo/topo.php');
        ?>

        <style>
            .advogados {
                text-align: center;
                margin-bottom: 50px

            }


            .advogados img {
                height: 80px;
                object-fit: contain;
                width: 100%;
                margin-top: 30px;
            }

            .advogados .colunas{
                float: left !important;
                margin-bottom: 15px
            }
            .fotos img{
                height: 450px;
                width: 100%;
                object-fit: cover
            }
        </style>

    </header>

    <main>
        <div class="linha">
            <div class="colunas lg-12">
            <h2>
                    Quem somos
                </h2>
            </div>
            <div class="colunas lg-5 fotos">
            <img src="core/imagens/escritorio/2.webp" alt="">
            </div>
            <div class="colunas lg-7 md-7 pq-12">
                <p>
                    Somos um escritório com mais de 30 anos, fundado pelo doutor Jurandir de Sousa Oliveira para seus 3 filhos. Contamos com diversos especialistas na prática do Direito, focados em Direito Civil, Direito Penal, Direito Empresarial, estendendo consultorias para outras áreas.
                </p>
                <p>
                    Nosso escritório não parou no tempo e está sempre em busca de inovações para atender seu caso da melhor forma. Acreditamos que todo caso merece total empenho e dedicação.
                </p>

                <p>
                    A Sousa Oliveira Advogados é uma empresa familiar que zela pelo seu nome, se esforçando ao máximo para entregar a justiça que você merece. Afinal, “o fim do direito é a paz, o meio de atingi-lo, a luta” já dizia Rudolf Von Ihering. Um trabalho que exala primor e zelo que só um negócio que atravessou gerações pode oferecer.

                </p>
            </div>
            

        </div>

        <div class="linha advogados">
                        <h5>
                        Advogados especialistas em diversos campos de atuação
                        </h5>

                        <div class="colunas lg-4 md-6 pq-12">

                            <div style="border: 1px solid #2E4052; padding-bottom: 25px; margin-bottom: 15px">
                                <img src="core/imagens/logo.png" alt="<?= $ttl ?>" title="<?= $ttl ?>">
                                <p>
                                    Jurandir de Sousa Oliveira
                                </p>
                                <a href="nossos-profissionais/dr-jurandir-de-sousa-oliveira">
                                <div class="btn">Confira o curriculo</div>
                                </a>
                            </div>
                        </div>
                        <div class="colunas lg-4 md-6 pq-12">

                            <div style="border: 1px solid #2E4052; padding-bottom: 25px">
                                <img src="core/imagens/logo.png" alt="<?= $ttl ?>" title="<?= $ttl ?>">
                                <p>
                                    Jurandir de Sousa Oliveira Filho
                                </p>
                                <a href="nossos-profissionais/dr-jurandir-de-sousa-oliveira-filho">
                                <div class="btn">Confira o curriculo</div>
                                </a>
                            </div>
                        </div>

                        <div class="colunas lg-4 md-6 pq-12">

                            <div style="border: 1px solid #2E4052; padding-bottom: 25px">
                                <img src="core/imagens/logo.png" alt="<?= $ttl ?>" title="<?= $ttl ?>">
                                <p>
                                    Dr. Luiz Felipe De Oliveira Báez
                                </p>
                                <a href="nossos-profissionais/dr-luiz-felipe-de-oliveira-baez">
                                <div class="btn">Confira o curriculo</div>
                                </a>
                            </div>
                        </div>

        </div>

        <div class="linha fotos">
            <div class="colunas lg-4">
                <img src="core/imagens/escritorio/1.webp" alt="">
            </div>
          
        
            <div class="colunas lg-4">
                <img src="core/imagens/escritorio/4.webp" alt="">
            </div>
            <div class="colunas lg-4">
                <img src="core/imagens/escritorio/5.webp" alt="">
            </div>
        </div>

        <section class="section-form">
            <?php include('formulario.php') ?>
        </section>
    </main>

    <?php include('core/mod_rodape/rodape.php') ?>

</body>

</html>