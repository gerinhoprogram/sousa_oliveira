<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
<meta http-equiv="Content-Language" content="pt-br">

<head>
    <?php
        include('header.php'); 
    ?>
        <title>
            <?php echo $ttl ." - ". "Quem somos"; ?>
        </title>
        <style>
            .foto-abreu {
                position: relative;
                height: 600px;
            }
            
            .foto-abreu img {
                width: 80%;
                position: absolute;
                bottom: -130px;
                margin-left: auto;
                margin-right: auto;
                left: 0;
                right: 0;
            }
            
            @media screen and (max-width: 975px) {
                .foto-abreu img {
                    bottom: -270px;
                }
            }
            
            @media screen and (max-width: 845px) {
                .quem-somos .md-6 {
                    width: 100%;
                }
                .foto-abreu img {
                    bottom: -100px;
                    width: 60%;
                }
            }
            
            @media screen and (max-width: 640px) {
                .foto-abreu {
                    height: 450px;
                }
                .foto-abreu img {
                    width: 100%;
                    height: 450px;
                    object-fit: contain;
                    bottom: -50px;
                }
            }
        </style>
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
        <div class="linha servicos quem-somos" style="margin-bottom: -40px;">
            <div class="colunas lg-6 md-6 pq-12">
                <h2>
                    Quem somos
                </h2>
                <p>Liderado por Lucas Abreu, somos a Abreu Empresarial.</p>
                <p>Acreditamos ser possível, por meio de estudo e dedicação, alcançar objetivos e o sucesso. Nós nos orgulhamos de ser uma empresa que conta com contadores profissionais e gabaritados para cuidar dos seus negócios.
                    <p>Dentro das possibilidades amplas em que trabalhamos, temos satisfação em atender cada empresário que chega necessitando do nosso apoio e consultoria. Para nós, isto é realização profissional e pessoal.
                        <p>Há anos demos o nosso primeiro passo, e hoje estamos consolidados na área contábil. Cada cliente, que por aqui chega, é o mesmo sentimento de força de vontade que tínhamos no começo. Cada etapa vencida, para nós, é mais um degrau
                            subido na escada do sucesso. É este o sentimento representado em nossos parceiros.
                            <p>Especializados nos mais diversos serviços de contabilidade, hoje, temos consolidado, também, a confiança em um mercado de acordos empresariais.

            </div>
            <div class="colunas lg-6 md-6 pq-12">
                <div class="foto-abreu">
                    <img src="core/imagens/abreu.jpg" alt="Lucas Abreu" title="Lucas Abreu">
                </div>
            </div>
        </div>
        <?php include('formulario.php') ?>
    </main>

    <?php include('core/mod_rodape/rodape.php') ?>

</body>

</html>