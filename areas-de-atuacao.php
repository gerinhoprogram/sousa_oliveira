<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
<meta http-equiv="Content-Language" content="pt-br">

<head>
    <?php
    include('header.php');
    $area = $_GET['p'];
    $pagina = false;

    if($area == 'direito-civil'){
        $pagina=true;
        $titulo = 'Direito Cicil';
        $texto = 'O Direito Civil, resumidamente, é o direito do cidadão, na qual aborda tanto os direitos quanto às obrigações do indivíduo na sociedade. Questões como divórcio, contrato, pensão, herança, e outros inúmeros casos que determinam as regras e condutas que pessoas físicas e jurídicas devem ter na sociedade, são alguns exemplos desta área.';

    }
    if($area == 'direito-penal'){
        $pagina=true;
        $titulo = 'Direito Penal';
        $texto = 'O Direito Penal é criado a partir do Poder Legislativo, responsável por estabelecer as normas e punições para crimes cometidos. É uma das áreas mais complexas do Direito, pois é ela que define quais ações são criminosas ou que configuram um delito.';
    }
    if($area == 'direito-empresarial'){
        $pagina=true;
        $titulo = 'Direito Empresarial';
        $texto = 'O Direito Empresarial surge pela necessidade das relações geradas pelos mundos dos negócios precisarem ser reguladas, ele também pode ser chamado de Direito Comercial. Ele estrutura toda a organização empresarial moderna e regular, e não é imutável, se adaptando conforme as mudanças do mercado.
        ';
    }
    if($area == 'outras-areas'){
        $pagina=true;
        $titulo = 'Demais áreas do Direito';
        $texto = 'Nossa equipe possui expertise e está preparada para atender seu caso com a excelência que ele merece, independentemente de sua natureza e complexidade. Procure um dos nossos advogados.
        ';
    }
    ?>
    <title>
        <?php echo $ttl . " - " . "Áreas de atuação"; ?>
    </title>
</head>

<body>
    <header>
        <?php
        include('core/mod_topo/topo.php');
        ?>

    </header>

    <main>

        <section>
            <div class="linha">
                <?php if(!$pagina) :?>
                
                    <div class="colunas lg-12">
                        <h2>Conheça nossas áreas de atuação</h2>
                    </div>
                    <div class="colunas lg-6 md-6 pq-12">
                        <a href="areas-de-atuacao/direito-civil" target="_parent">
                            <div class='box'>
                                <div class="icone-servico direito-civil"></div>
                                <h3>Direito Civil</h3>

                            </div>
                        </a>
                    </div>

                    <div class="colunas lg-6 md-6 pq-12">
                        <a href="areas-de-atuacao/direito-penal" target="_parent">
                            <div class='box'>
                                <div class="icone-servico direito-penal"></div>
                                <h3>Direito Penal</h3>

                            </div>
                        </a>
                    </div>

                    <div class="colunas lg-6 md-6 pq-12">
                        <a href="areas-de-atuacao/direito-empresarial" target="_parent">
                            <div class='box'>
                                <div class="icone-servico direito-empresarial"></div>
                                <h3>Direito Empresarial</h3>

                            </div>
                        </a>
                    </div>

                    <div class="colunas lg-6 md-6 pq-12">
                        <a href="areas-de-atuacao/outras-areas" target="_parent">
                            <div class='box'>
                                <div class="icone-servico outras-areas"></div>
                                <h3>Outras Áreas</h3>

                            </div>
                        </a>
                    </div>
                
                <?php else :?>
                    <div class="colunas lg-12">
                        <h2><?=$titulo?></h2>
                        <p>
                            <?=$texto?>
                        </p>
                        <hr>
                    </div>
                <?php endif ?>
            </div>
        </section>

        <section class="section-form">
            <?php include('formulario.php') ?>
        </section>
    </main>

    <?php include('core/mod_rodape/rodape.php') ?>

</body>

</html>