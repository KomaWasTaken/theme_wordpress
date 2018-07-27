<form method="get" id="searchform" class="col-3" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="input-group">
		<input type="text" class="form-control" id="inlineFormInputGroup" placeholder="<?php esc_attr_e( "Recherche", 'kraken3000' ); ?>">
		<div class="col-auto">
      		<input type="submit" id="searchsubmit" name="submit" class="btn btn-outline-secondary" value="<?php esc_attr_e( "GO", 'kraken3000' ); ?>">
    	</div>
	</div>
</form>