</div>  <!-- END WRAP -->
<div id="footer">
	<?php if(User::isConnected()){ echo '<div class="text-center"><a class="disconnect" href="' . WEBROOT . 'logout">Déconnexion</a></div>'; } ?>
</div>
<script src="<?=WEBROOT?>style/js/bootstrap.min.js"></script>
</body>
</html>