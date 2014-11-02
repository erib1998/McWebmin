<?php if(!user::isConnected()){
	header("Location: " . WEBROOT);
} ?>

<div class="container">
	<div class="row">
		<div class="col-xs-6">
			<div class="box">
				<div class="title">Serveur(s):</div>
				<?php
					// foreach ($servers as $server) {
					// 	echo $server['name'].$server['slots'];
					// }
				?>
				<div id="servers">
					<div class="server"><span class="online">@</span> <span class="name"><a href="<?=WEBROOT?>dahsboard/1">Lorem</a></span><span class="slots">32 slots</span></div>
					<div class="server"><span class="online">@</span> <span class="name">Ipsum</span><span class="slots">64 slots</span></div>
					<div class="server"><span class="offline">@</span> <span class="name">Dolor</span><span class="slots">24 slots</span></div>
					<div class="server"><span class="offline">@</span> <span class="name">Sit</span><span class="slots">12 slots</span></div>
					<div class="server"><span class="offline">@</span> <span class="name">Amet</span><span class="slots">36 slots</span></div>
				</div>
			</div>
		</div>
	</div>
</div>