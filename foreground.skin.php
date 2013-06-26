<?php

/**
 * Skin file for skin WWFoundation.
 *
 * @file
 * @ingroup Skins
 */

class Skinforeground extends SkinTemplate {
	public $skinname = 'foreground', $stylename = 'foreground', $template = 'foregroundTemplate', $useHeadElement = true;

	public function setupSkinUserCss(OutputPage $out) {
		parent::setupSkinUserCss($out);
		$out->addModuleStyles('skins.foreground');
	}

	public function initPage( OutputPage $out ) {
		global $wgLocalStylePath;
		parent::initPage($out);

		$viewport_meta = 'width=device-width, user-scalable=yes, initial-scale=1.0';
	  $out->addMeta('viewport', $viewport_meta);
		$out->addModuleScripts('skins.foreground');
	}

}


class foregroundTemplate extends BaseTemplate {
	public function execute() {
		global $wgUser;
		wfSuppressWarnings();
		$this->html('headelement');
?>
<!-- START FOREGROUNDTEMPLATE -->
		<nav class="top-bar">
							<section class="top-bar-section">

							<ul class="title-area">
							<li class="name"><h1><a href="<?php echo $this->data['nav_urls']['mainpage']['href']; ?>" class="name"><?php echo $this->text('sitename'); ?></h1></a>
							</li>
						   <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
						</ul>


		    		<ul class="left">
		 						<li class="divider"></li>
									<?php foreach ( $this->getSidebar() as $boxName => $box ) { if ($box['header'] != "Toolbox") { ?>
									<li class="has-dropdown active"  id='<?php echo Sanitizer::escapeId( $box['id'] ) ?>'<?php echo Linker::tooltip( $box['id'] ) ?>>
											<a href="#"><?php echo htmlspecialchars( $box['header'] ); ?></a>
											<?php if ( is_array( $box['content'] ) ) { ?>
												<ul class="dropdown">
													<?php foreach ( $box['content'] as $key => $item ) { echo $this->makeListItem( $key, $item ); } ?>
        								</ul>
											<?php } } ?>
									</li>
									<?php } ?>
		    		</ul>

		        <ul class="right">
			      <li class="has-form">
		        	<form action="<?php $this->text( 'wgScript' ); ?>" id="searchform" class="mw-search">
		        		<div class="row collapse">
		            	<div class="small-8 columns">
		        				<?php echo $this->makeSearchInput(array('placeholder' => 'Search...', 'id' => 'searchInput') ); ?>
		        			</div>
		        			 <div class="small-4 columns">
		        				<button type="submit" class="button search">Search</button>
		        			</div>
		        		</div>
		        	</form>
		        </li>
		         <li class="divider show-for-small"></li>
		         <li class="has-form">

								<li class="has-dropdown active"><a href="#"><i class="icon-cogs"></i></a>
									<ul class="dropdown">
										<?php foreach ( $this->getToolbox() as $key => $item ) { echo $this->makeListItem($key, $item); } ?>
										<li id="n-recentchanges"><a href="/wiki/Special:RecentChanges">Recent Changes</a></li>
										<li id="n-help"><a href="/wiki/Help:Contents">Help</a></li>
									</ul>
								</li>

							<?php if ($wgUser->isLoggedIn()): ?>
								<li class="has-dropdown active"><a href="#"><i class="icon-user"></i></a>
									<ul class="dropdown">
									<?php foreach ( $this->getPersonalTools() as $key => $item ) { echo $this->makeListItem($key, $item); } ?>
									</ul>
								</li>

							<?php else: ?>
							<li>
								<?php if (isset($this->data['personal_urls']['anonlogin'])): ?>
									<a href="<?php echo $this->data['personal_urls']['anonlogin']['href']; ?>">Sign In</a>
								<?php elseif (isset($this->data['personal_urls']['login'])): ?>
									<a href="<?php echo $this->data['personal_urls']['login']['href']; ?>">Sign In</a>
								<?php else: ?>
									<?php echo Linker::link(Title::newFromText('Special:UserLogin'), 'Sign In'); ?>
								<?php endif; ?>
							</li>

							<?php endif; ?>

		       </ul>
		     </section>
		</nav>

	<?php if ( $this->data['sitenotice'] ) { ?><div id="siteNotice" class="row notice large-12 columns"><?php $this->html( 'sitenotice' ); ?></div><?php } ?>
	<?php if ( $this->data['newtalk'] ) { ?><div class="usermessage row notice large-12 columns"><?php $this->html( 'newtalk' ); ?></div><?php } ?>
	<div id="mw-js-message" style="display:none;"></div>

		<div class="row">
				<div class="large-12 columns">
					<?php if ($wgUser->isLoggedIn()): ?>
						<a href="#" data-dropdown="drop1" class="button dropdown small secondary radius"><i class="icon-cog"><span class="show-for-medium-up">&nbsp;Actions<span></i></a>
						<ul id="drop1" class="views large-12 columns f-dropdown">
							<?php foreach( $this->data['content_actions'] as $key => $item ) { echo $this->makeListItem($key, $item); } ?>
							<?php wfRunHooks( SkinTemplateToolboxEnd, array( &$this, true ) );  ?>
						</ul>
					<?php endif; ?>
					<h2 class="title"><?php $this->html('title') ?></h2>
					<h5 class="subtitle"><?php $this->html('subtitle') ?></h5>
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
		<ul> <?php foreach ( $this->getFooterIcons( "nocopyright" ) as $blockName => $footerIcons ) { ?>
        <li><?php foreach ( $footerIcons as $icon ) { ?>
            <?php echo $this->getSkin()->makeFooterIcon( $icon, 'withoutImage' ); ?>
 						<?php } ?>
        </li>
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
