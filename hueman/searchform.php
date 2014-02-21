<form method="get" class="searchform themeform" action="<?php echo home_url('/'); ?>">
	<div>
		<input type="text" class="search" name="s" onblur="if(this.value=='')this.value='<?php _e('Digite o que procura e aperte Enter','hueman'); ?>';" onfocus="if(this.value=='<?php _e('Digite o que procura e aperte Enter','hueman'); ?>')this.value='';" value="<?php _e('Digite o que procura e aperte Enter','hueman'); ?>" />
	</div>
</form>