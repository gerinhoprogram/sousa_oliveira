<div class='banner-container'>
    <div class="w3-display-container">
        <div class="banner-home mySlides w3-animate-zoom w3-animate-opacity b1">
            <div class="linha">
            <div class="colunas lg-8 md-8 pq-12 texto-topo">
                <h1>
                    Soluções jurídicas<br> 
                    <strong>personalizadas.</strong>
                </h1>
                <a href="contato">
                <div class="btn-topo">
                    Fale com nossos especialistas
                </div>
                </a>
            </div>
            </div>
        </div>
        <div class="banner-home mySlides w3-animate-zoom w3-animate-opacity b2">
        <div class="linha">
            <div class="colunas lg-8 md-8 pq-12 texto-topo">
                <h1>
                    <strong>Atendimento virtual</strong> para<br> 
                    todo Estado de São Paulo.
                </h1>
                <a href="contato">
                <div class="btn-topo">
                    Fale com nossos especialistas
                </div>
                </a>
            </div>
            </div>
        </div>
    </div>
</div>

<script>
    var slideIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > x.length) {
            slideIndex = 1
        }
        x[slideIndex - 1].style.display = "block";
        setTimeout(carousel, 6000);
    }
</script>