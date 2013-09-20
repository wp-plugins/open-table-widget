<?php do_action( 'sunrise_page_before' ); ?>
<div id="sunrise-plugin-settings" class="wrap">
	<div id="icon-options-general" class="icon32 hide-if-no-js"><br /></div>
	<h2 id="sunrise-plugin-tabs" class="nav-tab-wrapper hide-if-no-js">
		<?php
			// Show tabs
			$this->render_tabs();
		?>
	</h2>
	<?php
		// Show notifications
		$this->notifications( array( 'js' => __( 'For full functionality of this page it is reccomended to enable javascript.', $this->textdomain ),
		                             'reseted' => __( 'Settings Reset Successfully', $this->textdomain ),
		                             'not-reseted' => __( 'Plugins already set to default settings', $this->textdomain ),
		                             'saved' => __( 'Settings saved successfully', $this->textdomain ),
		                             'not-saved' => __( 'Settings not saved due to no changes being made.', $this->textdomain ) ) );
	?>
	<form action="<?php echo $this->admin_url; ?>" method="post" id="sunrise-plugin-options-form">
		<?php
			// Show options
			$this->render_panes();
		?>
		<input type="hidden" name="action" value="save" />
	</form>
</div>
<?php do_action( 'sunrise_page_after' ); ?>
