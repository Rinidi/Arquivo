var $doc = $('html, body');
$(document).ready(function() {
        $("#ajaxPagination a").click(function(e){
            e.preventDefault();
            var href =$(this).attr('href');
            $("#RegistrosPagina").load(href); //eliminar ".conteudo" e trocar ".conteudo" por "#conteudo"
        });
});

$('.scrollSuave').click(function() {
	$doc.animate({
		scrollTop: $($.attr(this, 'href')).offset().top
	}, 500);
	return false;
});
$(".page-item a").attr('class','page-link');
	

