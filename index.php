<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
<meta http-equiv="Content-Language" content="pt-br">

<head>
    <?php
    include('header.php');
    $titulo = 'Home';
    ?>
    <title>
        <?php echo $ttl . " | " . $titulo ?>
    </title>
</head>

<body>
    <header>
        <?php
        include('core/mod_topo/topo.php');
        include('banner.php');
        ?>
    </header>
    <main>
        <section>
            <div class="linha home">
                <div class="colunas lg-12 md-12 pq-12">
                    <h2>
                        Advogados especialistas em diversos campos de atuação
                    </h2>
                    <a href="nossos-profissionais" target="_parent">
                        <div style="text-align: center">
                            <div class="btn">Confira o currurículo dos profissionais</div>
                        </div>
                    </a>

                </div>
            </div>
        </section>

        <?php include('servicos.php') ?>

        <section class="section-form">
            <?php include('formulario.php') ?>
        </section>


    </main>
    <?php include('core/mod_rodape/rodape.php') ?>

</body>

</html>