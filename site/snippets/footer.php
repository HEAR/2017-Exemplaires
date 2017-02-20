<!-- snippets/footer.php -->

<footer class="footer cf" role="contentinfo">
	<div class="wrap wide">

		<p class="footer-copyright"><?php
			// Parse Kirbytext to support dynamic year,
			// but remove all HTML like paragraph tags:
			//echo html::decode($site->copyright()->kirbytext())
			?></p>

		</div>
</footer>

<?= js('assets/js/mousewheel.js') ?>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-36760558-2', 'auto');
  ga('send', 'pageview');

</script>
</body>

</html>