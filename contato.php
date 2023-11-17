<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
<meta http-equiv="Content-Language" content="pt-br">

<head>
    <?php
        include('header.php'); 
        $pagina = 'contato';
    ?>
        <title>
            <?php echo $ttl ." - ". "Contato"; ?>
        </title>
        <script>
            $(document).ready(function() {
                $('html, body').animate({
                    scrollTop: 400
                }, 900);
            });
        </script>
</head>

<body>
    <header>
        <?php
            include('core/mod_topo/topo.php');
        ?>
        <div class="banner-servicos"></div>
    </header>

    <main>
        <div class="linha servicos">
            <div class="colunas lg-12 md-12 pq-12">
                <h2>
                    Contato
                </h2>
                <?php include('formulario.php') ?>
            </div>
        </div>
        
    </main>

    <?php include('core/mod_rodape/rodape.php') ?>

</body>

</html>