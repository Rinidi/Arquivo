<html>
	<head> 
		<!-- Meta Tags utilizadas no site -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<meta name="theme-color" content="#16489C"/>
		<meta name="description" content="Acesse o site oficial da câmara de Brazópolis e fique por dentro das últimas notícias, licitações, sessões da camara, Pedidos dos vereadores, infomção sobre os vereadores, recursos para contato e muito mais.">
		<meta property="og:title" content="Câmara Municipal De Brazópolis - Minas Gerais" />
		<meta NAME="KEYWORDS" CONTENT="Brazópolis, Brasópolis, Câmara Municipal, Câmara, Camara Brasópolis, Câmara Brazópolis, Câmara Municipal Brasópolis" >
		<meta property="og:description" content="Acesse o site oficial da câmara de Brazópolis e fique por dentro das últimas notícias, licitações, sessões da camara, Pedidos dos vereadores, infomção sobre os vereadores, recursos para contato e muito mais." />
		<meta property="og:image" content="<?php echo base_url();?>content/imagens/cabecalho.gif" />	
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, user-scalable=no">
		<meta NAME="LANGUAGE" CONTENT="PT" >
		<!-- Fim das meta Tags -->	

		<title>Câmara Municipal de Brazópolis - <?php ?></title>
		<?php ini_set("allow_url_fopen", 1);?>
		<?= link_tag('assets/css/bootstrap.min.css') ?>
		<?= link_tag('assets/css/camara.css') ?>
		<?= link_tag('assets/css/style.css') ?>
		<?= link_tag('assets/css/normalize.css') ?>
		<?= link_tag('assets/css/all.css') ?>
		<?= link_tag('assets/css/bootstrap.offcanvas.min.css') ?>
		<?= link_tag('content/imagens/logo_oficial.jpg', 'shortcut icon', 'image/png') ?>
		<script type="text/javascript" language="javascript" src='<?php echo base_url();?>/assets/js/jquery-3.1.1.min.js'></script>
		<script type="text/javascript" language="javascript" async src='<?php echo base_url();?>/assets/js/bootstrap.offcanvas.js'></script>
		<script type="text/javascript" language="javascript" async src='<?php echo base_url();?>/assets/js/bootstrap.min.js'></script>
		<script type="text/javascript" language="javascript" async src='<?php echo base_url();?>/assets/js/pace.min.js'></script>
		<script type="text/javascript" language="javascript" async src='<?php echo base_url();?>/assets/js/js.js'></script>
		<script type="text/javascript">
			var _paq = _paq || [];
			_paq.push(['trackPageView']);
			_paq.push(['enableLinkTracking']);
			(function() {
			var u="http://cluster-piwik.locaweb.com.br/";
			_paq.push(['setTrackerUrl', u+'piwik.php']);
			_paq.push(['setSiteId', 25050]);
			var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
			g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
			})();
			$('body').on('mouseenter mouseleave','.dropdown',function(e){
				var _d=$(e.target).closest('.dropdown');_d.addClass('show');
				setTimeout(function(){
				_d[_d.is(':hover')?'addClass':'removeClass']('show');
				},300);
				});
		</script>
	</head>
<body id="conteiner">
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	<div class="modal-header bg-info">
    		<h5 class="modal-title text-white" style="text-shadow: 0px 0px 2px rgba(0,0,0,.5)">Pedidos de Providência</h5>
    		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button></div>
    	<div class="bg-light" id="RegistrosPagina">
    		
    	</div>
    </div>
  </div>
</div>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/pt_BR/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="1156837047748369"
  theme_color="#0084ff"
  logged_in_greeting="Ola, Como posso ajudar você?"
  logged_out_greeting="Ola, Como posso ajudar você?">
</div>
