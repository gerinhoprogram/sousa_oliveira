<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
<meta http-equiv="Content-Language" content="pt-br">

<head>
    <?php
    include('header.php');
    ?>
    <title>
        <?php echo $ttl . " - " . "Contato"; ?>
    </title>
</head>

<body>
    <header>
        <?php
        include('core/mod_topo/topo.php');
        ?>

    </header>

    <main>

        <section class="section-form">
            <?php include('formulario.php') ?>
        </section>
     
    </main>

    <?php include('core/mod_rodape/rodape.php') ?>

</body>

</html>