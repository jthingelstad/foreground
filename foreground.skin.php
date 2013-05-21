<?php

/**
 * Skin file for skin WWFoundation.
 *
 * @file
 * @ingroup Skins
 */

class SkinForeground extends SkinTemplate {
	public $skinname = 'foreground', $stylename = 'foreground', $template = 'ForegroundTemplate', $useHeadElement = true;

	public function setupSkinUserCss(OutputPage $out) {
		parent::setupSkinUserCss($out);
		$out->addModuleStyles('skins.foreground');
	}

}
class ForegroundTemplate extends BaseTemplate {
	public function execute() {
		global $wgUser;
		wfSuppressWarnings();
		$this->html('headelement');
?>
<!-- START FOREGROUNDTEMPLATE -->
		<nav class="top-bar">
		    <section class="top-bar-section">
						<ul class="title-area">
							<li class="name"><h1><a href="<?php echo $this->data['nav_urls']['mainpage']['href']; ?>"><?php echo $this->text('sitename'); ?></a></h1></li>
						   <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
						</ul>

		    		<ul class="left">
		 						<li class="divider"></li>

		 						<li class="has-dropdown active"><a href="#">Toolbox</a>
									<ul class="dropdown">
		          			<?php foreach ($this->getToolbox() as $key => $item): ?>
										<?php echo $this->makeListItem($key, $item); ?>
										<?php endforeach; ?>
										<?php wfRunHooks('SkinTemplateToolboxEnd', array(&$this)); ?>
									</ul>
		 						</li>
								<li class="divider"></li>
		    		</ul>

		        <ul class="right">
			      <li class="has-form">
		        	<form action="<?php $this->text( 'wgScript' ); ?>" id="searchform" class="mw-search">
		        		<div class="row collapse">
		            	<div class="small-8 columns">
		        				<?php echo $this->makeSearchInput(array('placeholder' => 'Search...', 'id' => 'searchInput') ); ?>
		        			</div>
		        			 <div class="small-4 columns">
		        				<button type="submit" calass="alert button">Search</button>
		        			</div>
		        	</form>
		        </li>
		         <li class="divider show-for-small"></li>
		         <li class="has-form">
						<li>
							<?php if ($wgUser->isLoggedIn()): ?>
								<a href=""><?php echo Linker::link(Title::newFromText('Special:UserLogout'), 'Sign Out'); ?></a>
							<?php else: ?>
								<?php if (isset($this->data['personal_urls']['anonlogin'])): ?>
									<a href="<?php echo $this->data['personal_urls']['anonlogin']['href']; ?>">Sign In</a>
								<?php elseif (isset($this->data['personal_urls']['login'])): ?>
									<a href="<?php echo $this->data['personal_urls']['login']['href']; ?>">Sign In</a>
								<?php else: ?>
									<?php echo Linker::link(Title::newFromText('Special:UserLogin'), 'Sign In'); ?>
								<?php endif; ?>
							<?php endif; ?>
						</li>
		       </ul>
		     </section>
		</nav>

		<div class="row">
				<div class="large-12 columns">
					<h3><?php $this->html('title') ?></h3>
					<?php $this->html('bodytext') ?>
		    	<div class="group"><?php $this->html('catlinks'); ?></div>
		    	<?php $this->html('dataAfterContent'); ?>
		    </div>
		</div>

		<footer class="row">
		<ul class="large-12 columns">
		<?php foreach ( $this->getFooterLinks( "flat" ) as $key ) { ?>
		        <li><?php $this->html( $key ) ?></li>
		<?php } ?>
		</ul>
		</footer>

		<div id="mw-js-message" style="display:none;"></div>

		<?php $this->printTrail(); ?>

		</body>
		</html>

<?php
		wfRestoreWarnings();
	}
}
?>