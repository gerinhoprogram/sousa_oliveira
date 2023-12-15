<script src="core/mod_includes/js/funcoes.js"></script>
<div class='linha'>

    <div class="colunas lg-2 md-12 pq-12">&nbsp;</div>

    <div class="colunas lg-8 md-12 pq-12">
        <div class="colunas lg-12 text-center">
            <h4>
                Deixe seu contato e sua mensagem<br>
                para os nossos especialistas
            </h4>
            <p>Preencha os campos abaixo.</p>
        </div>
        <form action="envia-contato" method="post" class="formulario" autocomplete="TRUE">
            <div class="colunas lg-12 md-12 pq-12">
                <label for="nome">*Nome:</label>
                <input type="text" name="nome" id="nome" maxlength="60" title="Digite seu nome" required>
            </div>
            <div class="colunas lg-6 md-6 pq-12 pr">
                <label for="telefone">Telefone:</label>
                <input type="text" name="telefone" id="telefone" title="Digite seu telefone" onkeypress='return mascaraTELEFONE(this);' maxlength="15">
            </div>
            <div class="colunas lg-6 md-6 pq-12 pr">
                <label for="whatsapp">Whatsapp:</label>
                <input type="text" name="whatsapp" id="whatsapp" title="Digite seu whatsapp" onkeypress='return mascaraTELEFONE(this);' maxlength="15">
            </div>
            <div class="colunas lg-12 md-12 pq-12 pl">
                <label for="email">*E-mail:</label>
                <input type="email" name="email" id="email" maxlength="90" title="Digite seu e-mail" required>
            </div>
            <div class="colunas lg-12 md-12 pq-12 pr">
                <label for="mensagem">Mensagem:</label>
                <textarea name="mensagem" id="mensagem" title="Digite sua mensagem"></textarea>
            </div>
            <div class="colunas lg-12 md-12 pq-12 pl">
                
                <button type="submit" title="Enviar">Mandar mensagem</button>
            </div>
        </form>
    </div>

    <div class="colunas lg-2 md-12 pq-12">&nbsp;</div>

</div>
</div>