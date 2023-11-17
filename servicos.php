<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
<meta http-equiv="Content-Language" content="pt-br">

<head>
    <?php
        include('header.php');
        $pagina = $_GET['p'];   

        $sql = "SELECT * FROM cadastro_servicos
        WHERE serv_url = :serv_url";
        $stmt = $PDO->prepare($sql);
        $stmt->bindParam(':serv_url', 	$pagina);
        $stmt->execute();
        while($result = $stmt->fetch())
        {
            $serv_id = $result['serv_id'];
            $serv_titulo = $result['serv_titulo']; 
            $serv_descricao = $result['serv_descricao'];
            $serv_pergunta = $result['serv_pergunta'];
        }
    ?>
        <title>
            <?php echo $ttl ." - ". $serv_titulo ?>
        </title>
        <script src="core/mod_includes/js/funcoes.js"></script>
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
            <div class="colunas lg-6 md-6 pq-12">
                <div class="bloco-conteudo">
                    <h2>
                        <?php echo $serv_titulo ?>
                    </h2>
                    <?php 
                    echo "<p>" . $serv_descricao ."</p>
                    <p class='pergunta'>".$serv_pergunta."</p>";
                    $sql = "SELECT * FROM cadastro_servicos_topicos
                    WHERE topico_servico = $serv_id 
                    ORDER BY top_descricao";
                    $stmt = $PDO->prepare($sql);
                    $stmt->execute();
                    $rows = $stmt->rowCount();
                    if($rows > 0)
                    {
                        echo"<ul>";
                        while($result = $stmt->fetch()){
                            echo"<li>".$result['top_descricao']."</li>";
                        }
                        echo"</ul>";
                    }
                ?>
                </div>
            </div>
            <div class="colunas lg-6 md-6 pq-12">
                <div class="bloco-formulario">
                    <h6>Nós podemos avaliar qual é a <br>melhor opção para o seu negócio.</h6>
                    <form action="envia-contato" method="POST">
                        <label for="nome">Nome:</label>
                        <input type="text" name="nome" id="nome" required maxlength="70">
                        <label for="Telefone">Telefone:</label>
                        <input type="text" name="telefone" id="telefone" onkeypress='return mascaraTELEFONE(this);' maxlength="15">
                        <label for="email">E-mail:</label>
                        <input type="email" name="email" id="email" maxlength="90">
                        <label for="mensagem">Assunto:</label>
                        <input type="text" name="assunto" id="assunto" maxlength="90" value="<?php echo $serv_titulo ?>" readonly>
                        <input type="submit" value="Quero mais detalhes" title="Quero mais detalhes">
                    </form>
                </div>
                <div class="accordions">
                    <div class="accordion-item">
                        <input type="checkbox" name="accordion" id="accordion-1" />
                        <label for="accordion-1" title="Clique e veja mais">Veja serviços relacionados <span class="seta"></span></label>
                        <?php
                                $sql = "SELECT * FROM cadastro_servicos
                                ORDER BY serv_titulo";
                                $stmt = $PDO->prepare($sql);
                                $stmt->execute();
                                $rows = $stmt->rowCount();
                                if($rows > 0)
                                {
                                    while($result = $stmt->fetch()){
                                        echo"<div class='accordion-content'><a href='servicos/".$result['serv_url']."'>".$result['serv_titulo']."</a></div>";
                                    }
                                }
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include('core/mod_rodape/rodape.php') ?>

</body>

</html>