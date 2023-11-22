﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
<meta http-equiv="Content-Language" content="pt-br">

<head>
    <?php
            include ('header.php');
            $titulo = 'Home';
        ?>
        <title>
            <?php echo $ttl . " | " . $titulo ?>
        </title>
</head>

<body>
    <header>
        <?php
					include ('core/mod_topo/topo.php');
					include ('banner.php'); 
		?>
    </header>
    <main>
        <section>
            <div class="linha home">
                <div class="colunas lg-12 md-12 pq-12">
                    <h2>
                    Advogados especialistas em diversos campos de atuação
                    </h2>
                    <div style="text-align: center">
                    <div class="btn">Confira o currurículo dos profissionais</div>
                    </div>
                    
                </div>
            </div>
        </section>

        <section style="background-image: url('core/imagens/banner-areas.png'); background-size: cover; padding-top: 50px; padding-bottom: 70px; margin-top:50px">
        <h3 style="text-align: center; font-size: 30pt; line-height: 32pt; color: #fff; margin-bottom: 100px">EM QUAL ÁREA DE ATUAÇÃO<BR>NÓS PODEMOS TE AJUDAR</h3>
            <div class="linha">
                <div class="colunas lg-3 md-6 pq-12">
                    <a href="servicos/direito-civil" target="_parent">
                    <div class='box'>
                        <div class="icone-servico direito-civil"></div>
                        <h3>Direito Civil</h3>
                        
                    </div>
                    </a>
                </div>

                <div class="colunas lg-3 md-6 pq-12">
                    <a href="servicos/direito-penal" target="_parent">
                        <div class='box'>
                            <div class="icone-servico direito-penal"></div>
                            <h3>Direito Penal</h3>
                            
                        </div>
                        </a>
                </div>

                <div class="colunas lg-3 md-6 pq-12">
                    <a href="servicos/direito-empresarial" target="_parent">
                        <div class='box'>
                            <div class="icone-servico direito-empresarial"></div>
                            <h3>Direito Empresarial</h3>
                            
                        </div>
                        </a>
                </div>

                <div class="colunas lg-3 md-6 pq-12">
                    <a href="servicos/outras-areas" target="_parent">
                        <div class='box'>
                            <div class="icone-servico outras-areas"></div>
                            <h3>Outras Áreas</h3>
                       
                        </div>
                        </a>
                </div>
                </div>
        </section>

        <section class="section-form">
        <?php include('formulario.php') ?>
        </section>

        
    </main>
    <?php include('core/mod_rodape/rodape.php') ?>

</body>

</html>