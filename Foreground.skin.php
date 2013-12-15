<?php

/**
 * Skin file for skin WikiWonders' Foreground
 *
 * @file
 * @ingroup Skins
 */
 

class Skinforeground extends SkinTemplate {
	public $skinname = 'foreground', $stylename = 'foreground', $template = 'foregroundTemplate', $useHeadElement = true;

	public function setupSkinUserCss(OutputPage $out) {
		parent::setupSkinUserCss($out);
		$out->addHeadItem('ie-meta', '<meta http-equiv="X-UA-Compatible" content="IE=edge" />');
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
		global $wgForegroundFeatures;
		wfSuppressWarnings();
		$this->html('headelement');
		$wgForegroundFeaturesDefaults = array(
			'showActionsForAnon' => true,
			'makeNavFixed' => false,
		);
		foreach ($wgForegroundFeaturesDefaults as $fgOption => $fgOptionValue) {
			if ( !isset($wgForegroundFeatures[$fgOption]) ) {
				$wgForegroundFeatures[$fgOption] = $fgOptionValue;
			}
		}
		if ($wgForegroundFeatures['makeNavFixed']) echo "<div class='fixed'>";
?>
<!-- START FOREGROUNDTEMPLATE -->
		<nav class="top-bar">
						<ul class="title-area">
							<li class="name"><h1><a href="<?php echo $this->data['nav_urls']['mainpage']['href']; ?>"><?php echo $this->text('sitename'); ?></a></h1></li>
						   <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
						</ul>

						<section class="top-bar-section">

		    		<ul id="top-bar-left" class="left">
		 						<li class="divider"></li>
									<?php foreach ( $this->getSidebar() as $boxName => $box ) { if ( ($box['header'] != wfMessage( 'toolbox' )->text())  ) { ?>
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

		        <ul id="top-bar-right" class="right">
			      <li class="has-form">
		        	<form action="<?php $this->text( 'wgScript' ); ?>" id="searchform" class="mw-search">
		        		<div class="row collapse">
		            	<div class="small-8 columns">
		        				<?php echo $this->makeSearchInput(array('placeholder' => 'Search...', 'id' => 'searchInput') ); ?>
		        			</div>
		        			 <div class="small-4 columns">
		        				<button type="submit" class="button search"><?php echo wfMessage( 'search' )->text() ?></button>
		        			</div>
		        		</div>
		        	</form>
		        </li>
		         <li class="divider show-for-small"></li>
		         <li class="has-form">

								<li class="has-dropdown active"><a href="#"><i class="icon-cogs"></i></a>
									<ul class="dropdown">
										<?php foreach ( $this->getToolbox() as $key => $item ) { echo $this->makeListItem($key, $item); } ?>
										<li id="n-recentchanges"><?php echo Linker::specialLink('Recentchanges') ?></li>
										<li id="n-help" <?php echo Linker::tooltip('help') ?>><a href="/wiki/Help:Contents"><?php echo wfMessage( 'help' )->text() ?></a></li>
									</ul>
								</li>

							<?php if ($wgUser->isLoggedIn()): ?>
								<li id="personal-tools-dropdown" class="has-dropdown active"><a href="#"><i class="icon-user"></i></a>
									<ul class="dropdown">
									<?php foreach ( $this->getPersonalTools() as $key => $item ) { echo $this->makeListItem($key, $item); } ?>
									</ul>
								</li>

							<?php else: ?>
							<li>
								<?php if (isset($this->data['personal_urls']['anonlogin'])): ?>
									<a href="<?php echo $this->data['personal_urls']['anonlogin']['href']; ?>">Sign In</a>
								<?php elseif (isset($this->data['personal_urls']['login'])): ?>
									<a href="<?php echo htmlspecialchars($this->data['personal_urls']['login']['href']); ?>"><?php echo wfMessage( 'login' )->text() ?></a>
								<?php else: ?>
									<?php echo Linker::link(Title::newFromText('Special:UserLogin'), 'Sign In'); ?>
								<?php endif; ?>
							</li>

							<?php endif; ?>

		       </ul>
		     </section>
		</nav>
		<?php if ($wgForegroundFeatures['makeNavFixed']) echo "</div>"; ?>
		<div class="row">
				<div class="large-12 columns">
				<!--[if lt IE 9]>
				<div id="siteNotice" class="sitenotice panel radius"><?php echo $this->text('sitename'); ?> may not look as expected in this version of Internet Explorer. We recommend you upgrade to a newer version of Internet Explorer or switch to a browser like Firefox or Chrome.</div>
				<![endif]-->

				<?php if ( $this->data['sitenotice'] ) { ?><div id="siteNotice" class="sitenotice panel radius"><?php $this->html( 'sitenotice' ); ?></div><?php } ?>
				<?php if ( $this->data['newtalk'] ) { ?><div id="usermessage" class="newtalk panel radius"><?php $this->html( 'newtalk' ); ?></div><?php } ?>
				</div>
		</div>

		<div id="mw-js-message" style="display:none;"></div>

		<div class="row">
				<div id="p-cactions" class="large-12 columns">
					<?php if ($wgUser->isLoggedIn() || $wgForegroundFeatures['showActionsForAnon']): ?>
						<a href="#" data-dropdown="drop1" class="button dropdown small secondary radius"><i class="icon-cog"><span class="show-for-medium-up">&nbsp;<?php echo wfMessage( 'actions' )->text() ?></span></i></a>
						<ul id="drop1" class="views large-12 columns f-dropdown">
							<?php foreach( $this->data['content_actions'] as $key => $item ) { echo $this->makeListItem($key, $item); } ?>
							<?php wfRunHooks( SkinTemplateToolboxEnd, array( &$this, true ) );  ?>
						</ul>
					<?php endif;
					$namespace = str_replace('_', ' ', $this->getSkin()->getTitle()->getNsText());
					$displaytitle = $this->data['title'];
					if (!empty($namespace)) {
						$pagetitle = $this->getSkin()->getTitle();
						$newtitle = str_replace($namespace.':', '', $pagetitle);
						$displaytitle = str_replace($pagetitle, $newtitle, $displaytitle);
					?><h4 class="namespace label"><?php print $namespace; ?></h4><?php } ?>
					<h2 class="title"><?php print $displaytitle; ?></h2>
					<?php if ( $this->data['isarticle'] ) { ?><h3 id="tagline"><?php $this->msg( 'tagline' ) ?></h3><?php } ?>
					<h5 class="subtitle"><?php $this->html('subtitle') ?></h5>
					<div class="clear_both"></div>
					<?php $this->html('bodytext') ?>
		    	<div class="group"><?php $this->html('catlinks'); ?></div>
		    	<?php $this->html('dataAfterContent'); ?>
		    </div>
		</div>

		<footer class="row">

		<ul class="large-12 columns">
		<?php foreach ( $this->getFooterLinks( "flat" ) as $key ) { ?>
			<li id="footer-<?php echo $key ?>"><?php $this->html( $key ) ?></li>
		<?php } ?>
		</ul>
		<ul> <?php foreach ( $this->getFooterIcons( "nocopyright" ) as $blockName => $footerIcons ) { ?>
	<li class="<?php echo $blockName ?>"><?php foreach ( $footerIcons as $icon ) { ?>
	    <?php echo $this->getSkin()->makeFooterIcon( $icon, 'withoutImage' ); ?>
 						<?php } ?>
        </li>
				<?php } ?>
		</ul>
		</footer>

		<?php $this->printTrail(); ?>

		</body>
		</html>

<?php
		wfRestoreWarnings();
	}
}
?>
