<div class="container">
	<div class="row">
		<?php if(!user::isConnected()): ?>
			<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
				<div class="box">
						<div class="row">
							<div class="col-xs-8 col-xs-offset-2">
								<?php
									foreach ($errors as $error) {
										echo '<div class="alert alert-danger"><button class="close" onclick="parentNode.remove()">X</button>' . $error . '</div>';
									}
									foreach ($success as $success) {
										echo '<div class="alert alert-success">' . $success . '</div>';
									}
								?>
								<form method="post" action="">
									<label for="email">Adresse email</label>
									<input type="email" placeholder="Adresse email" required name="email" id="email"></input>

									<label for="password">Mot de passe</label>
									<input type="password" placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;" required="" name="password" id="password"></input>

									<div class="text-center">
										<input type="submit" name="submit" value="CONNEXION">
									</div>
								</form>
							</div>
						</div>
				</div>
			</div>
		<?php else: ?>
			<div class="col-xs-12 col-sm-6">
				<div class="box">
					<div class="title">Nouveautés:</div>
					<div class="news">
						<?php foreach (getNews() as $news) {
							echo '<div class="title">' . Utils::shorten($news['title'],35) . '</div>';
							echo '<div class="news">' . Utils::shorten($news['news'],127) . '</div>';
							echo "<hr/>";
						} ?>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6">
				<div class="box">
					<div class="title">Travaux:</div>
					<div class="news">
						<?php foreach (getWorks() as $work) {
							echo '<div class="title">' . Utils::shorten($work['title'],35) . '</div>';
							echo '<div class="news">' . Utils::shorten($work['description'],127) . '</div>';
							echo "<hr/>";
						} ?>
					</div>
				</div>
			</div>
		<?php endif; ?>
	</div>
</div>