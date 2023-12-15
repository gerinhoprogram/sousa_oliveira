<?php 
$ttl = 'Sousa Oliveira';
$base = "http://".$_SERVER['HTTP_HOST'].'/';

?>
<base href='<?=$base?>' />
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
<meta http-equiv="Content-Language" content="pt-br">

<!--META TAGS-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5.0">
<meta charset="utf-8">
<meta property="" content="" />
<meta property="og:locale" content="pt_BR" />
<meta property="og:type" content="website" />
<meta property="og:title" content="<?=$ttl?>" />
<meta property="og:description" content="Somos um escritório com mais de 30 anos, fundado pelo doutor Jurandir de Sousa Oliveira para seus 3 filhos. Contamos com diversos especialistas na prática do Direito, focados em Direito Civil, Direito Penal, Direito Empresarial, estendendo consultorias para outras áreas.
" />
<meta property="og:url" content="http://sousaoliveiraadv.com.br/" />
<meta property="og:image" content="http://sousaoliveiraadv.com.br/core/imagens/favicon.png">
<meta name="copyright" content="MogiComp Soluções Web">
<meta name="robots" content="">
<meta name="revisit-after" content="1 day">
<meta name="description" content="Somos um escritório com mais de 30 anos, fundado pelo doutor Jurandir de Sousa Oliveira para seus 3 filhos. Contamos com diversos especialistas na prática do Direito, focados em Direito Civil, Direito Penal, Direito Empresarial, estendendo consultorias para outras áreas.
">
<meta name="keywords" content="advocacia, Direito Civil, Direito Penal, Direito Empresarial, Falência e Recuperação Judicial, advogados, reorganização financeira da empresa, mundos dos negócios, sociedada, estado">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Crimson+Text:wght@400;700&family=Inter&display=swap" rel="stylesheet">

<!-- ESTILO CSS -->
<link rel="stylesheet" type="text/css" href="<?=$base?>core/css/estilo.css">
<link rel="stylesheet" type="text/css" href="<?=$base?>core/css/foundation.css">

<!-- OUTROS LINKS -->
<link rel="shortcut icon" href="<?=$base?>core/imagens/favicon.png">

<script src="https://kit.fontawesome.com/650f618ca2.js" crossorigin="anonymous"></script>

<script>
    /// INICIO MASCARA TELEFONE ///
function mascara(o,f){
    v_obj=o
    v_fun=f
    setTimeout("execmascara()",1)
}
function execmascara(){
    v_obj.value=v_fun(v_obj.value)
}
function mtel(v){
    v=v.replace(/\D/g,"");             //Remove tudo o que não é dígito
    v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
    v=v.replace(/(\d)(\d{4})$/,"$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos
    return v;
}
function id( el ){
	return document.getElementById( el );
}
function mascaraTELEFONE(campo)
{		
	mascara( campo, mtel );
}

/// FIM MASCARA TELEFONE ///
</script>
