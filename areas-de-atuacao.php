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
        $titulo = 'Direito Civil';
        $texto = '
            <p>O Direito Civil é possivelmente a área mais abrangente do direito brasileiro, afinal, ele compreende todas as questões jurídicas de pessoas naturais e físicas na esfera privada. É a vertente do direito que lida com as relações jurídicas, como os direitos e as obrigações, de pessoas dentro da esfera civil. 
            <p>Está constantemente presente na rotina das pessoas, por isso também é conhecido como "direito cidadão". Por exemplo, quando alguém adquire um imóvel, se casa, e até mesmo quando morre, deixando bens para seus herdeiros, entre outras inúmeras situações.
            ';

    }
    if($area == 'direito-penal'){
        $pagina=true;
        $titulo = 'Direito Penal';
        $texto = '
                <p>O Direito Penal pode ser considerado o equilíbrio entre poder punitivo do Estado e o papel do indivíduo na sociedade. É ele quem rege a aplicação de penas frente a crimes, delitos e infrações. Através dele também se define quais ações são consideradas criminosas, ou que configuram um delito. 
                <p>Seu conceito tem 3 pilares fundamentais para o seu entendimento. A primeira instância é a formal. Nesse sentido, esta área é vista como as normas em si . A segunda instância é definida pelo ponto de vista material, diz respeito aos comportamentos. A terceira e última instância é a sociológica, o direito visto como uma ferramenta, utilizada pelo Estado, para assegurar o bem estar e a paz da sociedade.
                
                ';
    }
    if($area == 'direito-empresarial'){
        $pagina=true;
        $titulo = 'Direito Empresarial';
        $texto = '
                <p>O Direito Empresarial surge pela necessidade das relações geradas pelos mundos dos negócios precisarem ser reguladas, também podendo ser chamado de Direito Comercial. Ele estrutura toda a organização empresarial moderna e regular e não é imutável, se adaptando conforme as mudanças do mercado.
       
        ';
    }
    if($area == 'outras-areas'){
        $pagina=true;
        $titulo = 'Demais áreas do Direito';
        $texto = '
        <p>Nossa equipe possui expertise e está preparada para atender seu caso com a excelência que ele merece, independentemente de sua natureza e complexidade. Procure um dos nossos advogados.

        ';
    }
    if($area == 'falencia-e-recuperacao-judicial'){
        $pagina=true;
        $titulo = 'Falência e Recuperação Judicial';
        $texto = '
        <p>A recuperação judicial é a reorganização financeira da empresa que está passando por um momento de instabilidade, mas que ainda tem chances de se manter ativa. Já a falência é a sua liquidação. Algumas das principais diferenças entre elas é o papel de cada parte na decisão sobre o decreto,  	já que a falência é decretada pela justiça, e a recuperação judicial parte da própria empresa. Quando a falência é decretada, sua sede é lacrada e a empresa não pode mais realizar nenhuma operação, na recuperação judicial ela ainda consegue manter sua atividade econômica ativa enquanto se organiza para pagar seus credores.

        ';
    }
    ?>
    <title>
        <?php echo $ttl . " - " . "Áreas de atuação"; ?>
    </title>

    <style>
        .servicos .linha img{
            height: 200px; width: 100%; object-fit: cover; border-radius: 10px !important
        }
    </style>
</head>

<body>
    <header>
        <?php
        include('core/mod_topo/topo.php');
        ?>

    </header>

    <main>

        <section class="servicos">
            
                <?php if(!$pagina) :?>

                    <div class="linha">
                        <div class="colunas lg-12">
                            <h2>Conheça nossas áreas de atuação</h2>
                        </div>
                    </div>

                    <div class="linha" style="margin-bottom: 50px">

                            <div class="colunas lg-6 md-6 pq-12" style="margin-bottom: 50px">
                                    <div class="colunas lg-6 md-12">
                                        <img src="core/imagens/servicos/Direito_Civil.webp"  alt="">
                                        <h3>Direito Civil</h3>
                                    </div>
                                    <div class="colunas lg-6">
                                        <p>O Direito Civil é possivelmente a área mais abrangente do direito brasileiro, afinal, ele compreende todas as questões jurídicas de pessoas naturais e físicas na esfera privada. É a vertente do direito que lida com as relaç... 
                                        <a href="areas-de-atuacao/direito-civil" target="_parent">
                                            <div style="text-align: center">
                                                <div class="btn">Continue lendo</div>
                                            </div>
                                        </a>
                                    </div>
                                
                            </div>

                            <div class="colunas lg-6 md-6 pq-12">
                            
                                <div class="colunas lg-6 md-12">
                                    <img src="core/imagens/servicos/Direito_Penal.webp" alt="">
                                    <h3>Direito Penal</h3>
                                </div>
                                <div class="colunas lg-6">
                                    <p>O Direito Penal pode ser considerado o equilíbrio entre poder punitivo do Estado e o papel do indivíduo na sociedade. É ele quem rege a aplicação de penas frente a crimes, delitos e infrações. Através dele ta... 
                                    <a href="areas-de-atuacao/direito-penal" target="_parent">
                                            <div style="text-align: center">
                                                <div class="btn">Continue lendo</div>
                                            </div>
                                        </a>    
                                </div>
                          
                            </div>

                    </div>

                    <div class="linha" style="margin-bottom: 50px">

                        <div class="colunas lg-6 md-6 pq-12" style="margin-bottom: 50px">
                              
                                    <div class="colunas lg-6 md-12">
                                        <img src="core/imagens/servicos/Direito_Empresarial.webp"  alt="">
                                        <h3>Direito Empresarial</h3>
                                    </div>
                                    <div class="colunas lg-6">
                                        <p>O Direito Empresarial surge pela necessidade das relações geradas pelos mundos dos negócios precisarem ser reguladas, também podendo ser chamado de Direito Comercial. Ele estrutura toda a organiz...
                                        <a href="areas-de-atuacao/direito-empresarial" target="_parent">
                                            <div style="text-align: center">
                                                <div class="btn">Continue lendo</div>
                                            </div>
                                        </a>
                                    </div>
                               
                        </div>

                        <div class="colunas lg-6 md-6 pq-12">
                                
                                <div class="colunas lg-6 md-12">
                                    <img src="core/imagens/servicos/falencia_e_recuperacao_judicial.webp" alt="">
                                    <h3>Falência e Recuperação Judicial</h3>
                                </div>
                                <div class="colunas lg-6">
                                <p>A recuperação judicial é a reorganização financeira da empresa que está passando por um momento de instabilidade, mas que ainda tem chances de se manter ativa. Já a falência é a sua liquidação. Algum...
                                <a href="areas-de-atuacao/falencia-e-recuperacao-judicial" target="_parent">
                                            <div style="text-align: center">
                                                <div class="btn">Continue lendo</div>
                                            </div>
                                        </a>
                        </div>

                        
                    </div>

                    <div class="linha">

                        <div class="colunas lg-6 md-6 pq-12" style="float: left">
                            
                                <div class="colunas lg-6 md-12">
                                    <img src="core/imagens/servicos/Outras_Areas.webp" alt="">
                                    <h3>Outras Áreas</h3>
                                </div>
                                <div class="colunas lg-6">
                                    <p>Nossa equipe possui expertise e está preparada para atender seu caso com a excelência que ele merece, independentemente de sua natureza e complexidade. Procure um dos nossos advoga...
                                    <a href="areas-de-atuacao/outras-areas" target="_parent">
                                            <div style="text-align: center">
                                                <div class="btn">Continue lendo</div>
                                            </div>
                                        </a>
                                </div>
                        </div>

                        
                    </div>

                <?php else: ?>
                    <div class="linha">
                        <div class="colunas lg-12">
                            <h2><?=$titulo?></h2>
                            <?=$texto?>
                        </div>
                        <hr>
                    </div>    
                <?php endif ?>
            
        </section>

        <section class="section-form">
            <?php include('formulario.php') ?>
        </section>
    </main>

    <?php include('core/mod_rodape/rodape.php') ?>

</body>

</html>