<form method="get" id="searchform" class="col-3" action="<?php bloginfo('url'); ?>">
	<div id="recherche" class="input-group">
		<input type="text" class="form-control" id="s" name="s" placeholder="<?php esc_attr_e( "Recherche", 'kraken3000' ); ?>">
      	<input type="submit" id="searchsubmit" name="submit" class="btn btn-outline-secondary" value="<?php esc_attr_e( "GO", 'kraken3000' ); ?>">
	</div>
</form>