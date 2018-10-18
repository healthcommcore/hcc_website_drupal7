<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>

<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
	<meta property="og:image" content="http://www.healthcommcore.org/sites/default/files/images/hcc_homepage.jpg" />
  <?php print $styles; ?>
	<!--[if lt IE 9]>
		<script src="<?php print $base_path . $directory; ?>/js/html5.js"></script>
	<![endif]-->
  <?php print $scripts; ?>

		<!--GOGLE ANALYTICS-->
	<script type="text/javascript">
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-16351946-1', 'auto');
    ga('send', 'pageview');

/*
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
*/
		</script>
		<script type="text/javascript">
/*
		try {
		var pageTracker = _gat._getTracker("UA-16351946-1");
		pageTracker._trackPageview();
		} catch(err) {}
*/
	</script>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
<!-- Popup window for external links -->
<script>
(function($){
	var extLinks = $('.popup');
	var width = $(window).width() / 1.5;
	var height = $(window).height();
	var xPos = window.screenX + (window.outerWidth - width) / 2;
	var yPos = window.screenY + (window.outerHeight - height) / 2;;
	var options = "resizable=yes,menubar=yes,toolbar=yes,status=yes,location=yes," + 
		"height=" + height + ",width=" + width + 
		",top=" + yPos + ",left=" + xPos;
	for(var i = 0; i < extLinks.length; i++){
		extLinks[i].onclick = function(){
			window.open(this.href, this.value, options);
			return false;
		}
	}
})(jQuery);

(function($) {
  var jumplink = $('.jumplink');
  if (jumplink.length > 0) {
    var target = '#' + jumplink.attr('data-target');
    var scrollTo = $(target).offset().top;

    jumplink.on('click', function(e) {
      e.preventDefault();
      window.scroll(0, scrollTo);
    });
  }
})(jQuery);

</script>
</body>
</html>
