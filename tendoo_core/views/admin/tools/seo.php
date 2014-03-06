<?php echo $lmenu;?>

<section id="content">
  <section class="vbox">
    <?php echo $inner_head;?>
	<footer class="footer bg-white b-t">
		<div class="row m-t-sm text-center-xs">
			<div class="col-sm-2" id="ajaxLoading">
			</div>
		</div>
	</footer>
    <section class="scrollable" id="pjax-container">
      <header>
      <div class="row b-b m-l-none m-r-none">
        <div class="col-sm-4">
          <h4 class="m-t m-b-none"><?php echo $this->core->tendoo->getTitle();?></h4>
          <p class="block text-muted">
            <?php echo $pageDescription;?>
          </p>
        </div>
      </div>
      </header>
      <section class="scrollable">
        <div class="wrapper">
          <div class="row">
			<div class="col-lg-6">
				<div class="panel">
					<div class="panel-heading">Cr&eacute;er un sitemap manuellement</div>
					<div class="panel-body">
						<?php
						echo tendoo_warning('N\'effectuez cette op&eacute;ration que si vous savez ce que vous faites. Le sitemap permet aux moteurs de recherche de correctement ajouter votre site dans leurs r&eacute;sultats.');
						?>
						<form fjax method="POST" action="<?php echo $this->core->url->site_url(array('admin','ajax','sm_manual'));?>">
							<div class="form-group">
								<textarea name="sitemap" class="form-control" rows="10"><?php echo $getSitemap;?></textarea>
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-primary" value="Cr&eacute;er / Mettre &agrave; jour le sitemap">
							</div>
						</form>
						<hr class="line">
						<form fjax method="POST" action="<?php echo $this->core->url->site_url(array('admin','ajax','sm_remove'));?>">
							<div class="form-group">
								<input type="submit" name="sm_remove" class="btn btn-danger" value="Supprimer le sitemap">
							</div>
						</form>
					</div>
				</div>
          	</div>
			<div class="col-lg-6">
				<div class="panel">
					<div class="panel-heading">Autres options</div>
					<div class="panel-body">
						<form method="post">
							<div class="form-group">
								<input class="btn btn-primary" type="submit" name="autoGenerate" value="Générer un sitemap automatiquement">
							</div>
						</form>
					</div>
				</div>
          	</div>
        </div>
      </section>
    </section>
  </section>
</section>
