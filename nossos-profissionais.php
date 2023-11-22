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

            }

            .advogados h5 {
                font-size: 20pt
            }

            .advogados img{
                height: 110px;
                object-fit: contain;
                width: 100%;
                margin-top: 30px;
            }
        </style>

    </header>

    <main>
        <div class="linha">
            <div class="colunas lg-12 md-12 pq-12">
                <h2>
                    Quem somos
                </h2>
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
          
            <div class="colunas lg-2 md-12 pq-12">&nbsp;</div>
            <div class="colunas lg-4 md-6 pq-12">

                <img src="core/imagens/logo.png" alt="<?= $ttl ?>" title="<?= $ttl ?>">
                <p>
                    Jurandir de Sousa Oliveira
                </p>
                <div class="btn">Confira o curriculo</div>

            </div>
            <div class="colunas lg-4 md-6 pq-12">

                <img src="core/imagens/logo.png" alt="<?= $ttl ?>" title="<?= $ttl ?>">
                <p>
                    Jurandir de Sousa Oliveira Filho
                </p>
                <div class="btn">Confira o curriculo</div>
            </div>
            <div class="colunas lg-2 md-12 pq-12">&nbsp;</div>
            
        </div>

        <section class="section-form">
            <?php include('formulario.php') ?>
        </section>
    </main>

    <?php include('core/mod_rodape/rodape.php') ?>

</body>

</html>