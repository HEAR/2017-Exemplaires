<!-- snippets/footer.php -->

<footer class="footer cf" role="contentinfo">
	<div class="wrap wide">

		<p class="footer-copyright"><?php
			// Parse Kirbytext to support dynamic year,
			// but remove all HTML like paragraph tags:
			echo html::decode($site->copyright()->kirbytext())
			?></p>

		</div>
</footer>

<script src="scripts/jquery-3.1.0.min.js"></script>
<script src="scripts/mousewheel.js"></script>

</body>
</html>