<?php

/**
 * Skin file for Foreground
 *
 * @file
 * @ingroup Skins
 */

class Skinforeground extends SkinTemplate {
	public $skinname = 'foreground', $stylename = 'foreground', $template = 'foregroundTemplate', $useHeadElement = true;

	public function setupSkinUserCss( OutputPage $out ) {
		parent::setupSkinUserCss($out);

		$styles = array( 'mediawiki.skinning.interface', 'skins.foreground.styles' );
		global $wgForegroundFeatures;
		$wgForegroundFeaturesDefaults = array(
			'showActionsForAnon' => true,
			'NavWrapperType' => 'divonly',
			'showHelpUnderTools' => true,
			'showRecentChangesUnderTools' => true,
			'useForegroundTabs' => 'true',
			'wikiName' => &$GLOBALS['wgSitename'],
			'navbarIcon' => false,
			'IeEdgeCode' => 1,
			'showFooterIcons' => 0,
			'addThisFollowPUBID' => ''
		);
		foreach ($wgForegroundFeaturesDefaults as $fgOption => $fgOptionValue) {
			if ( !isset($wgForegroundFeatures[$fgOption]) ) {
				$wgForegroundFeatures[$fgOption] = $fgOptionValue;
			}
		}
		switch ($wgForegroundFeatures['IeEdgeCode']) {
			case 1:
				$out->addHeadItem('ie-meta', '<meta http-equiv="X-UA-Compatible" content="IE=edge" />');
				break;
			case 2:
				if (isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false))
					header('X-UA-Compatible: IE=edge');
				break;
		}
		if ( version_compare( $GLOBALS['wgVersion'], '1.25c', '<' ) ) {
			wfRunHooks( 'SkinforegroundStyleModules', array( $this, &$styles ) );
		} else {
			Hooks::run( 'SkinforegroundStyleModules', array( $this, &$styles ) );
		}
		$out->addModuleStyles( $styles );
	}

	public function initPage( OutputPage $out ) {
		global $wgLocalStylePath;
		parent::initPage($out);

		$viewport_meta = 'width=device-width, user-scalable=yes, initial-scale=1.0';
		$out->addMeta('viewport', $viewport_meta);
		$out->addModules( array( 'skins.foreground.js' ) );
	}

}

class foregroundTemplate extends BaseTemplate {
	public function execute() {
		global $wgUser;
		global $wgForegroundFeatures;
		wfSuppressWarnings();
		$this->html('headelement');
		switch ($wgForegroundFeatures['NavWrapperType']) {
			case '0':
				break;
			case 'divonly':
				echo "<div id='navwrapper'>";
				break;
			default:
				echo "<div id='navwrapper' class='". $wgForegroundFeatures['NavWrapperType']. "'>";
				break;
		}
		// Set default variables for footer and switch them if 'showFooterIcons' => true
		$footerLeftClass = 'small-8 large-centered columns text-center';
		$footerRightClass = 'large-12 small-12 columns';
		$poweredbyType = "nocopyright";
		$poweredbyMakeType = 'withoutImage';
		switch ($wgForegroundFeatures['showFooterIcons']) {
			case true:
				$footerLeftClass = 'large-8 small-12 columns';
				$footerRightClass = 'large-4 small-12 columns';
				$poweredbyType = "icononly";
				$poweredbyMakeType = 'withImage';
				break;
			default:
				break;	
		}
?>
<!-- START FOREGROUNDTEMPLATE -->
		<nav class="top-bar" data-topbar role="navigation">
			<ul class="title-area">
				<li class="name">
					<h1 class="title-name">
						<a href="<?php echo $this->data['nav_urls']['mainpage']['href']; ?>">
							<?php if ($wgForegroundFeatures['navbarIcon'] != '0') { ?>
								<img alt="<?php echo $this->text('sitename'); ?>" class="top-bar-logo" src="<?php echo $this->text('logopath') ?>">
							<?php } ?>
							<div class="title-name" style="display: inline-block;"><?php echo $wgForegroundFeatures['wikiName']; ?></div>
						</a>
					</h1>
				</li>
				<li class="toggle-topbar menu-icon">
					<a href="#"><span><?php echo wfMessage( 'foreground-menutitle' )->text(); ?></span></a>
				</li>
			</ul>

		<section class="top-bar-section">

			<ul id="top-bar-left" class="left">
				<li class="divider show-for-small"></li>
					<?php foreach ( $this->getSidebar() as $boxName => $box ) { if ( ($box['header'] != wfMessage( 'toolbox' )->text())  ) { ?>
						<li class="has-dropdown" id='<?php echo Sanitizer::escapeId( $box['id'] ) ?>'<?php echo Linker::tooltip( $box['id'] ) ?>>
							<a href="#"><?php echo htmlspecialchars( $box['header'] ); ?></a>
								<?php if ( is_array( $box['content'] ) ) { ?>
									<ul class="dropdown">
										<?php foreach ( $box['content'] as $key => $item ) { echo $this->makeListItem( $key, $item ); } ?>
									</ul>
								<?php
								}
					}
					} ?>
			</ul>

			<ul id="top-bar-right" class="right">
				<li class="has-form">
					<form action="<?php $this->text( 'wgScript' ); ?>" id="searchform" class="mw-search">
						<div class="row collapse">
							<div class="small-12 columns">
								<?php echo $this->makeSearchInput(array('placeholder' => wfMessage('searchsuggest-search')->text(), 'id' => 'searchInput') ); ?>
							</div>
							<div class="large-4 small-3 columns">
							<button type="submit" class="button search"><?php echo wfMessage( 'search' )->text() ?></button>
							</div>
						</div>
					</form>
				</li>
				<li class="divider show-for-small"></li>

				<li class="has-dropdown"><a href="#"><i class="fa fa-cogs"></i></a>
					<ul id="toolbox-dropdown" class="dropdown">
						<?php foreach ( $this->getToolbox() as $key => $item ) { echo $this->makeListItem($key, $item); } ?>
							<?php if ($wgForegroundFeatures['showRecentChangesUnderTools']) { ?><li id="n-recentchanges"><?php echo Linker::specialLink('Recentchanges') ?></li><?php } ?>
							<?php if ($wgForegroundFeatures['showHelpUnderTools']) { ?><li id="n-help" <?php echo Linker::tooltip('help') ?>><a href="<?php echo Skin::makeInternalOrExternalUrl( wfMessage( 'helppage' )->inContentLanguage()->text() )?>"><?php echo wfMessage( 'help' )->text() ?></a></li><?php } ?>
					</ul>
				</li>

				<li id="personal-tools-dropdown" class="has-dropdown"><a href="#"><i class="fa fa-user"></i></a>
					<ul class="dropdown">
						<?php foreach ( $this->getPersonalTools() as $key => $item ) { echo $this->makeListItem($key, $item); } ?>
					</ul>
				</li>

			</ul>
		</section>
		</nav>
		<?php if ($wgForegroundFeatures['NavWrapperType'] != '0') echo "</div>"; ?>
		
		<div id="page-content">
		<div class="row">
				<div class="large-12 columns">
				<!--[if lt IE 9]>
				<div id="siteNotice" class="sitenotice"><?php echo $this->text('sitename') . ' '. wfMessage( 'foreground-browsermsg' )->text(); ?></div>
				<![endif]-->

				<?php if ( $this->data['sitenotice'] ) { ?><div id="siteNotice" class="sitenotice panel radius"><?php $this->html( 'sitenotice' ); ?></div><?php } ?>
				<?php if ( $this->data['newtalk'] ) { ?><div id="usermessage" class="newtalk panel radius"><?php $this->html( 'newtalk' ); ?></div><?php } ?>
				</div>
		</div>

		<div id="mw-js-message" style="display:none;"></div>

		<div class="row">
				<div id="p-cactions" class="large-12 columns">
					<?php if ( $wgUser->isLoggedIn() || $wgForegroundFeatures['showActionsForAnon'] ) { ?>
						<a href="#" id="actions-button" data-dropdown="actions" data-options="is_hover: true; hover_timeout:400" class="button dropdown small secondary radius"><i class="fa fa-cog"><span class="show-for-medium-up">&nbsp;<?php echo wfMessage( 'actions' )->text() ?></span></i></a>
						<!--RTL -->
						<ul id="actions" class="f-dropdown" data-dropdown-content>
							<?php foreach( $this->data['content_actions'] as $key => $item ) { echo preg_replace(array('/\sprimary="1"/','/\scontext="[a-z]+"/','/\srel="archives"/'),'',$this->makeListItem($key, $item)); } ?>
							<?php
							if ( version_compare( $GLOBALS['wgVersion'], '1.25c', '<' ) ) {
								wfRunHooks( 'SkinTemplateToolboxEnd', array( &$this, true ) );
							} else {
								Hooks::run( 'SkinTemplateToolboxEnd', array( &$this, true ) );
							}
							?>
						</ul>
						<!--RTL -->
						<?php if ( $wgUser->isLoggedIn() ){ ?>
							<div id="echo-notifications">
							<div id="echo-notifications-alerts"></div>
							<div id="echo-notifications-messages"></div>
							</div>
						<?php } ?>
					<?php }
					if ( version_compare( $GLOBALS['wgVersion'], '1.25c', '>' ) ) {
						if ( is_callable( array( $this, 'getIndicators' ) ) ) {
							echo $this->getIndicators();
						}
					}
					$namespace = str_replace('_', ' ', $this->getSkin()->getTitle()->getNsText());
					$displaytitle = $this->data['title'];
					if (!empty($namespace)) {
						$pagetitle = $this->getSkin()->getTitle();
						$newtitle = str_replace($namespace.':', '', $pagetitle);
						$displaytitle = str_replace($pagetitle, $newtitle, $displaytitle);
					?><h4 class="namespace label"><?php print $namespace; ?></h4><?php } ?>
					<div id="content" class="mw-body" role="main">
						<h2 id="firstHeading" class="firstHeading" lang="<?php
						$this->data['pageLanguage'] =
							$this->getSkin()->getTitle()->getPageViewLanguage()->getHtmlCode();
						$this->text( 'pageLanguage' );
						?>"><?php print $displaytitle; ?></h2>
						<?php if ( $this->data['isarticle'] ) { ?><h3 id="tagline"><?php $this->msg( 'tagline' ) ?></h3><?php } ?>
						<h5 id="siteSub" class="subtitle"><?php $this->html('subtitle') ?></h5>
						<div id="contentSub" class="clear_both"></div>
						<div id="bodyContent" class="mw-body-content">
							<?php
								switch ($wgForegroundFeatures['useForegroundTabs']) {
									case 'true':
										$out = $this->html( 'bodycontent' );
										$markers = array("&lt;a", "&lt;/a", "&gt;");
										$tags = array("<a", "</a", ">");
										echo $body = str_replace($markers, $tags, $out);
										break;
									default:
										$this->html( 'bodycontent' );
										break;
								}
							?>
							<div class="clear_both"></div>
						</div>
					<div class="group"><?php $this->html('catlinks'); ?></div>
					<?php $this->html('dataAfterContent'); ?>
				</div>
			</div>
		</div>

			<footer class="row">
				<div id="footer">
					<?php if ($wgForegroundFeatures['addThisFollowPUBID'] != '') { ?>
						<div class="social-footer large-12 small-12 columns">
							<div class="social-links">
							<!-- Go to www.addthis.com/dashboard to customize your tools -->
							<div class="addthis_horizontal_follow_toolbox"></div>
							<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=<?php echo $wgForegroundFeatures['addThisFollowPUBID'];?>"></script>
							</div>
						</div>
					<?php } ?>
					<div id="footer-left" class="<?php echo $footerLeftClass;?>">
					<ul id="footer-left">
						<?php foreach ( $this->getFooterLinks( "flat" ) as $key ) { ?>
							<li id="footer-<?php echo $key ?>"><?php $this->html( $key ) ?></li>
						<?php } ?>									
					</ul>
					</div>	
					<div id="footer-right-icons" class="<?php echo $footerRightClass;?>">
					<ul id="poweredby">
						<?php foreach ( $this->getFooterIcons( $poweredbyType ) as $blockName => $footerIcons ) { ?>
							<li class="<?php echo $blockName ?>"><?php foreach ( $footerIcons as $icon ) { ?>
								<?php echo $this->getSkin()->makeFooterIcon( $icon, $poweredbyMakeType ); ?>
								<?php } ?>
							</li>
						<?php } ?>
					</ul>
					</div>
				</div>
			</footer>

		</div>
		
		<?php $this->printTrail(); ?>

		</body>
		</html>

<?php
		wfRestoreWarnings();
	}
}
