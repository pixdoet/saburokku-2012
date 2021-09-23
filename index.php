<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/bn/config.inc.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/bn/db_helper.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/bn/time_manip.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/bn/video_helper.php"); ?>
<?php $__video_h = new video_fetcher($__db); ?>
<?php $__db_h = new db_helper(); ?>
<?php $__time_h = new time_helper(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $__server->page_title; ?> - SubRocks</title>
		<meta property="og:title" content="<?php echo $__server->page_embeds->page_title; ?>" />
		<meta property="og:url" content="<?php echo $__server->page_embeds->page_url; ?>" />
		<meta property="og:description" content="<?php echo $__server->page_embeds->page_description; ?>" />
		<meta property="og:image" content="<?php echo $__server->page_embeds->page_image; ?>" />
        <script>
            var yt = yt || {};yt.timing = yt.timing || {};yt.timing.tick = function(label, opt_time) {var timer = yt.timing['timer'] || {};if(opt_time) {timer[label] = opt_time;}else {timer[label] = new Date().getTime();}yt.timing['timer'] = timer;};yt.timing.info = function(label, value) {var info_args = yt.timing['info_args'] || {};info_args[label] = value;yt.timing['info_args'] = info_args;};yt.timing.info('e', "904821,919006,922401,920704,912806,913419,913546,913556,919349,919351,925109,919003,920201,912706");if (document.webkitVisibilityState == 'prerender') {document.addEventListener('webkitvisibilitychange', function() {yt.timing.tick('start');}, false);}yt.timing.tick('start');yt.timing.info('li','0');try {yt.timing['srt'] = window.gtbExternal && window.gtbExternal.pageT() ||window.external && window.external.pageT;} catch(e) {}if (window.chrome && window.chrome.csi) {yt.timing['srt'] = Math.floor(window.chrome.csi().pageT);}if (window.msPerformance && window.msPerformance.timing) {yt.timing['srt'] = window.msPerformance.timing.responseStart - window.msPerformance.timing.navigationStart;}    
        </script>
        <link id="www-core-css" rel="stylesheet" href="/yt/cssbin/www-core-vfluMRDnk.css">
        <link rel="stylesheet" href="/yt/cssbin/www-guide-vflx0V5Tq.css">
        <script>
            if (window.yt.timing) {yt.timing.tick("ct");}    
        </script>
	</head>
	<body id="" class="date-20120930 en_US ltr   ytg-old-clearfix guide-feed-v2 " dir="ltr">
		<form name="logoutForm" method="POST" action="/logout">
			<input type="hidden" name="action_logout" value="1">
		</form>
		<!-- begin page -->
		<div id="page" class="">
			<div id="masthead-container">
				<!-- begin masthead -->
				<div id="masthead" class="" dir="ltr">
					<a id="logo-container" href="/" title="YouTube home">
					<img id="logo" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="YouTube home">
					</a>
					<div id="masthead-user-bar-container">
						<div id="masthead-user-bar">
							<div id="masthead-user">
								<div id="masthead-user-display"><span id="masthead-user-wrapper"><button href="https://accounts.google.com/ServiceLogin?passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26feature%3Dsign_in_button%26nomobiletemp%3D1%26hl%3Den_US%26next%3D%252F&amp;uilel=3&amp;hl=en_US&amp;service=youtube" type="button" id="masthead-user-button" onclick=";window.location.href=this.getAttribute('href');return false;" class=" yt-uix-button yt-uix-button-text" role="button"><span class="yt-uix-button-content">  <span id="masthead-user-image">
									<span class="clip">
									<span class="clip-center">
									<img src="//s.ytimg.com/yt/img/no_videos_140-vfl5AhOQY.png" alt="">
									<span class="vertical-center"></span>
									</span>
									</span>
									</span>
									<span class="masthead-user-username">Sign In</span>
									</span></button></span>
								</div>
							</div>
						</div>
					</div>
					<div id="masthead-search-bar-container">
						<div id="masthead-search-bar">
							<div id="masthead-nav"><a href="/videos?feature=mh">Browse</a><span class="masthead-link-separator">|</span><a href="/movies?feature=mh">Movies</a>                <span class="masthead-link-separator">|</span><a id="masthead-upload-link" class="" data-upsell="upload" href="//www.youtube.com/my_videos_upload">Upload</a></div>
							<form id="masthead-search" class="search-form consolidated-form" action="/results" onsubmit="if (_gel('masthead-search-term').value == '') return false;">
								<button class="search-btn-compontent search-button yt-uix-button yt-uix-button-default" onclick="if (_gel('masthead-search-term').value == '') return false; _gel('masthead-search').submit(); return false;;return true;" type="submit" id="search-btn" dir="ltr" tabindex="2" role="button"><span class="yt-uix-button-content">Search </span></button>
								<div id="masthead-search-terms" class="masthead-search-terms-border" dir="ltr"><label><input id="masthead-search-term" autocomplete="off" class="search-term" name="search_query" value="" type="text" tabindex="1" onkeyup="goog.i18n.bidi.setDirAttribute(event,this)" title="Search"></label></div>
							</form>
						</div>
					</div>
				</div>
				<div id="alerts"></div>
				<!-- end masthead -->
			</div>
			<div id="content-container">
				<!-- begin content -->
				<div id="content">
					<div class="guide-layout-container enable-fancy-subscribe-button">
						<div class="guide-container">
							<div id="guide-builder-promo">
								<h2>
									Sign in to add channels to your homepage
								</h2>
								<div id="guide-builder-promo-buttons" class="signed-out">
									<button href="https://accounts.google.com/ServiceLogin?passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26feature%3Dguide%26nomobiletemp%3D1%26hl%3Den_US%26next%3D%252Findex%253Ffeature%253Dsignin&amp;uilel=3&amp;hl=en_US&amp;service=youtube" type="button" class=" yt-uix-button yt-uix-button-dark" onclick=";window.location.href=this.getAttribute('href');return false;" role="button"><span class="yt-uix-button-content">Sign In </span></button>
								</div>
							</div>
							<div class="guide">
								<div class="guide-section yt-uix-expander  first ">
									<h3 class="guide-item-container selected-child">
										<a class="guide-item selected" data-feed-name="youtube" data-feed-type="system">
										<span class="thumb">
										<img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="" class="system-icon category">
										</span>
										<span class="display-name">
										From SubRocks
										</span>
										</a>
									</h3>
									<ul>
										<li class="guide-item-container ">
											<a class="guide-item" data-feed-name="trending" data-feed-type="system">
											<span class="thumb">
											<img class="system-icon system trending" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="">
											</span>
											<span class="display-name">
											Trending
											</span>
											</a>
										</li>
										<li class="guide-item-container ">
											<a class="guide-item" data-feed-name="music" data-feed-type="system">
											<span class="thumb">
											<img class="system-icon system music" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="">
											</span>
											<span class="display-name">
											Music
											</span>
											</a>
										</li>
										<li class="guide-item-container ">
											<a class="guide-item" data-feed-name="entertainment" data-feed-type="chart">
											<span class="thumb">
											<img class="system-icon chart entertainment" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="">
											</span>
											<span class="display-name">
											Entertainment
											</span>
											</a>
										</li>
										<li class="guide-item-container ">
											<a class="guide-item" data-feed-name="sports" data-feed-type="chart">
											<span class="thumb">
											<img class="system-icon chart sports" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="">
											</span>
											<span class="display-name">
											Sports
											</span>
											</a>
										</li>
										<li class="guide-item-container ">
											<a class="guide-item" data-feed-name="comedy" data-feed-type="chart">
											<span class="thumb">
											<img class="system-icon chart comedy" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="">
											</span>
											<span class="display-name">
											Comedy
											</span>
											</a>
										</li>
										<li class="guide-item-container ">
											<a class="guide-item" data-feed-name="film" data-feed-type="chart">
											<span class="thumb">
											<img class="system-icon chart film" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="">
											</span>
											<span class="display-name">
											Film &amp; Animation
											</span>
											</a>
										</li>
										<li class="guide-item-container ">
											<a class="guide-item" data-feed-name="gadgets" data-feed-type="chart">
											<span class="thumb">
											<img class="system-icon chart gadgets" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="">
											</span>
											<span class="display-name">
											Gaming
											</span>
											</a>
										</li>
										<li class="guide-item-container ">
											<a class="guide-item" data-external-id="W-B8MvkfS9LZW9X_jU6iJA" data-feed-name="W-B8MvkfS9LZW9X_jU6iJA" data-feed-type="user">
											<span class="thumb">  <span class="video-thumb ux-thumb yt-thumb-square-28 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Thumbnail" data-thumb="//i4.ytimg.com/i/W-B8MvkfS9LZW9X_jU6iJA/1.jpg?v=50343a63" width="28"><span class="vertical-align"></span></span></span></span>
											</span>
											<span class="display-name">
											OraTVnetwork
											</span>
											</a>
										</li>
										<li class="guide-item-container ">
											<a class="guide-item" data-external-id="f4FYTsGFFcdc68AUPIU3RA" data-feed-name="f4FYTsGFFcdc68AUPIU3RA" data-feed-type="user">
											<span class="thumb">  <span class="video-thumb ux-thumb yt-thumb-square-28 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Thumbnail" data-thumb="//i3.ytimg.com/i/f4FYTsGFFcdc68AUPIU3RA/1.jpg?v=5032a7d9" width="28"><span class="vertical-align"></span></span></span></span>
											</span>
											<span class="display-name">
											BuzzFeed
											</span>
											</a>
										</li>
										<li class="guide-item-container ">
											<a class="guide-item" data-external-id="l3Vf8heuOumLuC_toRYGXg" data-feed-name="l3Vf8heuOumLuC_toRYGXg" data-feed-type="user">
											<span class="thumb">  <span class="video-thumb ux-thumb yt-thumb-square-28 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Thumbnail" data-thumb="//i1.ytimg.com/i/l3Vf8heuOumLuC_toRYGXg/1.jpg?v=4fef5500" width="28"><span class="vertical-align"></span></span></span></span>
											</span>
											<span class="display-name">
											HplusDigitalSeries
											</span>
											</a>
										</li>
										<li class="guide-item-container ">
											<a class="guide-item" data-external-id="WljxewHlJE3M7U_6_zFNyA" data-feed-name="WljxewHlJE3M7U_6_zFNyA" data-feed-type="user">
											<span class="thumb">  <span class="video-thumb ux-thumb yt-thumb-square-28 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Thumbnail" data-thumb="//i4.ytimg.com/i/WljxewHlJE3M7U_6_zFNyA/1.jpg?v=4fbbd073" width="28"><span class="vertical-align"></span></span></span></span>
											</span>
											<span class="display-name">
											AwesomenessTV
											</span>
											</a>
										</li>
										<li class="guide-item-container ">
											<a class="guide-item" data-external-id="qnbDFdCpuN8CMEg0VuEBqA" data-feed-name="qnbDFdCpuN8CMEg0VuEBqA" data-feed-type="user">
											<span class="thumb">  <span class="video-thumb ux-thumb yt-thumb-square-28 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Thumbnail" data-thumb="//i2.ytimg.com/i/qnbDFdCpuN8CMEg0VuEBqA/1.jpg?v=66fa49" width="28"><span class="vertical-align"></span></span></span></span>
											</span>
											<span class="display-name">
											TheNewYorkTimes
											</span>
											</a>
										</li>
									</ul>
									<div class="guide-item-container">
										<span class="guide-item guide-item-action guide-item-fake">
										<a href="/videos?feature=hp">see all<img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="see-more-arrow" alt=""></a>        </span>
									</div>
								</div>
							</div>
						</div>
						<div class="guide-background"></div>
						<div id="video-sidebar">
							<div id="ad_creative_expand_btn_1" class="masthead-ad-control open hid">
								<a onclick="masthead.expand_ad(); return false;">
								<span>Show ad</span>
								<img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="">
								</a>
							</div>
							<h3 class="sidebar-module-header">
								Spotlight
							</h3>
							<h2>News and Documentary Emmy Nominees</h2>
							<p class="sidebar-module-description">
								These are just some of the News and Documentary Emmy nominees, celebrating the important work being done by journalists and documentarians, unearthing stories that might otherwise be left untold.
							</p>
							<p class="sidebar-module-description">
								Presented by: <a href="/theifilestv">theifilestv</a>
							</p>
							<ul>
								<li class="video-list-item "><a href="/watch?v=yuTBQ86r8o0&amp;feature=g-sptl&amp;cid=inp-hs-ytg" class="video-list-item-link yt-uix-sessionlink" data-sessionlink="ei=CNLr3rbS3rICFSwSIQodSW397Q%3D%3D&amp;feature=g-sptl%26cid%3Dinp-hs-ytg"><span class="ux-thumb-wrap contains-addto "><span class="video-thumb ux-thumb yt-thumb-default-120 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Where Soldiers Come From" data-thumb="//i2.ytimg.com/vi/yuTBQ86r8o0/default.jpg" width="120"><span class="vertical-align"></span></span></span></span><span class="video-time">4:04</span>
									<button onclick=";return false;" title="Watch Later" type="button" class="addto-button video-actions addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="yuTBQ86r8o0" role="button"><span class="yt-uix-button-content">  <img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
									</span><img class="yt-uix-button-arrow" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button>
									</span><span dir="ltr" class="title" title="Where Soldiers Come From">Where Soldiers Come From</span><span class="stat">by <span class="yt-user-name " dir="ltr">theifilestv</span></span><span class="stat view-count">  <span class="viewcount">307 views</span>
									</span></a>
								</li>
								<li class="video-list-item "><a href="/watch?v=XlVzvLHTIps&amp;feature=g-sptl&amp;cid=inp-hs-ytg" class="video-list-item-link yt-uix-sessionlink" data-sessionlink="ei=CNLr3rbS3rICFSwSIQodSW397Q%3D%3D&amp;feature=g-sptl%26cid%3Dinp-hs-ytg"><span class="ux-thumb-wrap contains-addto "><span class="video-thumb ux-thumb yt-thumb-default-120 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="A National Disgrace" data-thumb="//i1.ytimg.com/vi/XlVzvLHTIps/default.jpg" width="120"><span class="vertical-align"></span></span></span></span><span class="video-time">5:26</span>
									<button onclick=";return false;" title="Watch Later" type="button" class="addto-button video-actions addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="XlVzvLHTIps" role="button"><span class="yt-uix-button-content">  <img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
									</span><img class="yt-uix-button-arrow" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button>
									</span><span dir="ltr" class="title" title="A National Disgrace">A National Disgrace</span><span class="stat">by <span class="yt-user-name " dir="ltr">theifilestv</span></span><span class="stat view-count">  <span class="viewcount">308 views</span>
									</span></a>
								</li>
								<li class="video-list-item "><a href="/watch?v=kFvhpDg9naU&amp;feature=g-sptl&amp;cid=inp-hs-ytg" class="video-list-item-link yt-uix-sessionlink" data-sessionlink="ei=CNLr3rbS3rICFSwSIQodSW397Q%3D%3D&amp;feature=g-sptl%26cid%3Dinp-hs-ytg"><span class="ux-thumb-wrap contains-addto "><span class="video-thumb ux-thumb yt-thumb-default-120 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Punched Out | Part One" data-thumb="//i4.ytimg.com/vi/kFvhpDg9naU/default.jpg" width="120"><span class="vertical-align"></span></span></span></span><span class="video-time">12:01</span>
									<button onclick=";return false;" title="Watch Later" type="button" class="addto-button video-actions addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="kFvhpDg9naU" role="button"><span class="yt-uix-button-content">  <img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
									</span><img class="yt-uix-button-arrow" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button>
									</span><span dir="ltr" class="title" title="Punched Out | Part One">Punched Out | Part One</span><span class="stat">by <span class="yt-user-name " dir="ltr">TheNewYorkTimes</span></span><span class="stat view-count">  <span class="viewcount">621 views</span>
									</span></a>
								</li>
								<li class="video-list-item "><a href="/watch?v=s0y8smihQHI&amp;feature=g-sptl&amp;cid=inp-hs-ytg" class="video-list-item-link yt-uix-sessionlink" data-sessionlink="ei=CNLr3rbS3rICFSwSIQodSW397Q%3D%3D&amp;feature=g-sptl%26cid%3Dinp-hs-ytg"><span class="ux-thumb-wrap contains-addto "><span class="video-thumb ux-thumb yt-thumb-default-120 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Why Would Anyone Kill Kate? (20/20 1-14-2011)" data-thumb="//i4.ytimg.com/vi/s0y8smihQHI/default.jpg" width="120"><span class="vertical-align"></span></span></span></span><span class="video-time">6:55</span>
									<button onclick=";return false;" title="Watch Later" type="button" class="addto-button video-actions addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="s0y8smihQHI" role="button"><span class="yt-uix-button-content">  <img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
									</span><img class="yt-uix-button-arrow" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button>
									</span><span dir="ltr" class="title" title="Why Would Anyone Kill Kate? (20/20 1-14-2011)">Why Would Anyone Kill Kate? (20/20 1-14-2011)</span><span class="stat">by <span class="yt-user-name " dir="ltr">ABCNews</span></span><span class="stat view-count">  <span class="viewcount">1,508 views</span>
									</span></a>
								</li>
							</ul>
							<h3>
								Featured
							</h3>
							<ul>
								<li class="video-list-item "><a href="/watch?v=aAnhju9US0s&amp;feature=g-feat" class="video-list-item-link yt-uix-sessionlink" data-sessionlink="ei=CNLr3rbS3rICFSwSIQodSW397Q%3D%3D&amp;feature=g-feat&amp;context=G2e88192YFAAAAAAAAAA"><span class="ux-thumb-wrap contains-addto "><span class="video-thumb ux-thumb yt-thumb-default-120 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Serenity" data-thumb="//i2.ytimg.com/vi/aAnhju9US0s/default.jpg" width="120"><span class="vertical-align"></span></span></span></span><span class="video-time">1:50</span>
									<button onclick=";return false;" title="Watch Later" type="button" class="addto-button video-actions addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="aAnhju9US0s" role="button"><span class="yt-uix-button-content">  <img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
									</span><img class="yt-uix-button-arrow" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button>
									</span><span dir="ltr" class="title" title="Serenity">Serenity</span><span class="stat">by <span class="yt-user-name " dir="ltr">YoBoHoMusic</span></span><span class="stat view-count">  <span class="viewcount">1,503 views</span>
									</span></a>
								</li>
								<li class="video-list-item "><a href="/watch?v=DAR10PTHOcc&amp;feature=g-feat" class="video-list-item-link yt-uix-sessionlink" data-sessionlink="ei=CNLr3rbS3rICFSwSIQodSW397Q%3D%3D&amp;feature=g-feat&amp;context=G26b30daYFAAAAAAAAAQ"><span class="ux-thumb-wrap contains-addto "><span class="video-thumb ux-thumb yt-thumb-default-120 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Spanish Word of the Day - &quot;Chancla&quot;" data-thumb="//i1.ytimg.com/vi/DAR10PTHOcc/default.jpg" width="120"><span class="vertical-align"></span></span></span></span><span class="video-time">0:36</span>
									<button onclick=";return false;" title="Watch Later" type="button" class="addto-button video-actions addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="DAR10PTHOcc" role="button"><span class="yt-uix-button-content">  <img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
									</span><img class="yt-uix-button-arrow" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button>
									</span><span dir="ltr" class="title" title="Spanish Word of the Day - &quot;Chancla&quot;">Spanish Word of the Day - "Chancla"</span><span class="stat">by <span class="yt-user-name " dir="ltr">mitu</span></span><span class="stat view-count">  <span class="viewcount">8,666 views</span>
									</span></a>
								</li>
								<li class="video-list-item "><a href="/watch?v=i_mguvhu4jc&amp;feature=g-feat" class="video-list-item-link yt-uix-sessionlink" data-sessionlink="ei=CNLr3rbS3rICFSwSIQodSW397Q%3D%3D&amp;feature=g-feat&amp;context=G27dd993YFAAAAAAAAAg"><span class="ux-thumb-wrap contains-addto "><span class="video-thumb ux-thumb yt-thumb-default-120 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Beachy Kitchen Transformation" data-thumb="//i2.ytimg.com/vi/i_mguvhu4jc/default.jpg" width="120"><span class="vertical-align"></span></span></span></span><span class="video-time">3:21</span>
									<button onclick=";return false;" title="Watch Later" type="button" class="addto-button video-actions addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="i_mguvhu4jc" role="button"><span class="yt-uix-button-content">  <img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
									</span><img class="yt-uix-button-arrow" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button>
									</span><span dir="ltr" class="title" title="Beachy Kitchen Transformation">Beachy Kitchen Transformation</span><span class="stat">by <span class="yt-user-name " dir="ltr">HGTV</span></span><span class="stat view-count">  <span class="viewcount">4,068 views</span>
									</span></a>
								</li>
							</ul>
						</div>
						<div id="feed">
							<div id="feed-system-youtube" class="individual-feed" data-loaded="true" data-feed-name="youtube" data-feed-type="system">
								<div class="feed-header no-metadata">
									<div class="feed-header-thumb">
										<img class="feed-header-icon youtube" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="">
									</div>
									<div class="feed-header-details">
										<h2>    From SubRocks</h2>
									</div>
								</div>
								<div class="feed-container" data-filter-type="" data-view-type="">
									<div class="feed-page">
										<ul>
											<?php
												$stmt = $__db->prepare("SELECT * FROM videos ORDER BY id DESC LIMIT 20");
												$stmt->execute();
												$result = $stmt->get_result();
												while($video = $result->fetch_assoc()) {	
													$video['age'] = $__time_h->time_elapsed_string($video['publish']);		
													$video['duration'] = $__time_h->timestamp($video['duration']);
													$video['views'] = $__video_h->fetch_video_views($video['rid']);
													$video['author'] = htmlspecialchars($video['author']);		
													$video['title'] = htmlspecialchars($video['title']);
													$video['description'] = $__video_h->shorten_description($video['description'], 50);
											?>
											<li>
												<div class="feed-item-container first " data-channel-key="UCR2A9ZNliJfgC66IvIpe-Zw">
													<div class="feed-author-bubble-container">
														<a href="/user/<?php echo $video['author']; ?>" class="feed-author-bubble   ">  <span class="feed-item-author">
														<span class="video-thumb ux-thumb yt-thumb-square-28 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="<?php echo $video['author']; ?>" data-thumb="//i3.ytimg.com/i/6xBhF4QYIPPF2_-ExZzd2w/1.jpg?v=4f8c693b" width="28"><span class="vertical-align"></span></span></span></span>
														</span>
														</a>  
													</div>
													<div class="feed-item-main">
														<div class="feed-item-header">
															<span class="feed-item-actions-line ">
															<span class="feed-item-owner">    <a href="/user/<?php echo $video['author']; ?>" class="yt-uix-sessionlink yt-user-name " data-sessionlink="feature=g-logo-xit" dir="ltr"><?php echo $video['author']; ?></a>
															</span>
															uploaded a video
															<span class="feed-item-time">
															<?php echo $video['age']; ?>
															</span>
															</span>
														</div>
														<div class="feed-item-content-wrapper clearfix">
															<div class="feed-item-thumb">
																<a class="ux-thumb-wrap contains-addto  yt-uix-contextlink yt-uix-sessionlink" data-sessionlink="ei=CNLr3rbS3rICFSwSIQodSW397Q%3D%3D&amp;context=G266dc06FOAAAAAAAAAA" href="/watch?v=<?php echo $video['rid']; ?>">
																<span class="video-thumb ux-thumb yt-thumb-default-185 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Thumbnail" data-thumb="/dynamic/thumbs/<?php echo $video['thumbnail']; ?>" width="185"><span class="vertical-align"></span></span></span></span>
																<span class="video-time"><?php echo $video['duration']; ?></span>
																<button onclick=";return false;" title="Watch Later" type="button" class="addto-button video-actions addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="rLHU-_OhT8g" role="button"><span class="yt-uix-button-content">  <img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
																</span><img class="yt-uix-button-arrow" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button>
																</a>
															</div>
															<div class="feed-item-content">
																<h4>
																	<a class="feed-video-title title yt-uix-contextlink  yt-uix-sessionlink  secondary" href="/watch?v=<?php echo $video['rid']; ?>" data-sessionlink="ei=CNLr3rbS3rICFSwSIQodSW397Q%3D%3D&amp;feature=g-logo-xit&amp;context=G266dc06FOAAAAAAAAAA">
																		<?php echo $video['title']; ?>
																	</a>
																</h4>
																<div class="metadata">
																	<a href="/user/<?php echo $video['author']; ?>" class="yt-user-photo ">
																	<span class="video-thumb ux-thumb yt-thumb-square-18 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="<?php echo $video['author']; ?>" data-thumb="//i3.ytimg.com/i/6xBhF4QYIPPF2_-ExZzd2w/1.jpg?v=4f8c693b" width="18"><span class="vertical-align"></span></span></span></span>
																	</a>
																	<a href="/user/<?php echo $video['author']; ?>" class="yt-uix-sessionlink yt-user-name " data-sessionlink="ei=CNLr3rbS3rICFSwSIQodSW397Q%3D%3D&amp;feature=g-logo-xit" dir="ltr"><?php echo $video['author']; ?></a>
																	<span class="bull">•</span>
																	<span class="view-count">
																	<?php echo $video['views']; ?> views
																	</span>
																	<div class="description">
																		<p><?php echo $video['description']; ?></p>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="feed-item-dismissal-notices">
													<div class="feed-item-dismissal feed-item-dismissal-hide hid">This item has been hidden</div>
													<div class="feed-item-dismissal feed-item-dismissal-uploads hid">In the future you will only see uploads from   <span class="feed-item-owner">    <a href="/user/<?php echo $video['author']; ?>" class="yt-uix-sessionlink yt-user-name " data-sessionlink="feature=g-logo-xit" dir="ltr"><?php echo $video['author']; ?></a>
														</span>
													</div>
													<div class="feed-item-dismissal feed-item-dismissal-all-activity hid">In the future you will see all activity from   <span class="feed-item-owner">    <a href="/user/<?php echo $video['author']; ?>" class="yt-uix-sessionlink yt-user-name " data-sessionlink="feature=g-logo-xit" dir="ltr"><?php echo $video['author']; ?></a>
														</span>
													</div>
													<div class="feed-item-dismissal feed-item-dismissal-unsubscribe hid">You have been unsubscribed from   <span class="feed-item-owner">    <a href="/user/<?php echo $video['author']; ?>" class="yt-uix-sessionlink yt-user-name " data-sessionlink="feature=g-logo-xit" dir="ltr"><?php echo $video['author']; ?></a>
														</span>
													</div>
												</div>
											</li>
											<?php } $stmt->close(); ?>
										</ul>
									</div>
								</div>
							</div>
							<div id="feed-error" class="individual-feed hid">
								<p class="feed-message">
									We were unable to complete the request, please try again later.
								</p>
							</div>
							<div id="feed-loading-template" class="hid">
								<div class="feed-message">
									<p class="loading-spinner">
										<img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="">
										Loading...
									</p>
								</div>
							</div>
						</div>
						<div id="feed-background"></div>
						<div id="footer-ads">
							<div id="ad_creative_3" class="ad-div " style="z-index: 1">
								<iframe id="ad_creative_iframe_3" height="1" width="1" scrolling="no" frameborder="0" style="z-index: 1" src="//ad-g.doubleclick.net/N6762/adi/mkt.ythome_1x1/;sz=1x1;tile=3;plat=pc;dc_dedup=1;kcr=us;kga=-1;kgg=-1;klg=en;kmyd=ad_creative_3;kt=K;ord=7554901073022560?"></iframe>
								<script>
									(function() {
									  var addTimestamp = (Math.floor(Math.random() * 1000) == 0);
									  if (addTimestamp) {
									    var kts = new Date().getTime();
									    var iframeSrc = "//ad-g.doubleclick.net/N6762/adi/mkt.ythome_1x1/;sz=1x1;tile=3;plat=pc;dc_dedup=1;kcr=us;kga=-1;kgg=-1;klg=en;kmyd=ad_creative_3;kt=K;kts=" + kts + ";ord=7554901073022560?";
									  } else {
									    var iframeSrc = "//ad-g.doubleclick.net/N6762/adi/mkt.ythome_1x1/;sz=1x1;tile=3;plat=pc;dc_dedup=1;kcr=us;kga=-1;kgg=-1;klg=en;kmyd=ad_creative_3;kt=K;ord=7554901073022560?";
									  }
									  var adIframe = document.getElementById("ad_creative_iframe_3");
									  adIframe.src = iframeSrc;
									})();
								</script>
							</div>
						</div>
					</div>
				</div>
				<!-- end content -->
			</div>
			<div id="footer-container">
				<!-- begin footer -->
				<div id="footer">
					<div class="yt-horizontal-rule "><span class="first"></span><span class="second"></span><span class="third"></span></div>
					<div id="footer-logo">
						<a href="/" title="YouTube home">
						<img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="YouTube home">
						</a>
						<span class="copyright" dir="ltr">© 2012 YouTube, LLC</span>
						<span id="footer-divider"></span>
					</div>
					<div id="footer-main">
						<div id="in-product-help" class="yt-uix-clickcard">
							<button type="button" id="help-button" onclick=";return false;" class="yt-uix-clickcard-target yt-uix-button-reverse yt-uix-button yt-uix-button-default" data-orientation="vertical" data-locale="en_US" data-iph-anchor-text="More Help" data-iph-search-button-text="Search" data-iph-tracking="iph-questionmark" data-iph-js-url="//s.ytimg.com/yt/jsbin/www-help-vflyZa3c5.js" data-iph-search-input-text="Search YouTube's Help Center" data-iph-title-text="Need Help on this page?" data-iph-topic-id="1699306" data-iph-css-url="//s.ytimg.com/yt/cssbin/www-helpie-vflhT2yf3.css" data-help-center-host="//support.google.com/youtube" role="button"><span class="yt-uix-button-content">  <img class="questionmark" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif">
							<span>Help</span>
							<img class="yt-uix-button-arrow" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif">
							</span></button>
							<div class="yt-uix-clickcard-content" id="help-target">
								<p class="loading-spinner">
									<img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="">
									Loading...
								</p>
							</div>
						</div>
						<ul id="footer-links-primary">
							<li><a href="/t/about_youtube">About</a></li>
							<li><a href="/t/press">Press &amp; Blogs</a></li>
							<li><a href="/t/copyright_center">Copyright</a></li>
							<li><a href="/creators">Creators &amp; Partners</a></li>
							<li><a href="/t/advertising_overview">Advertising</a></li>
							<li><a href="/dev">Developers</a></li>
						</ul>
						<ul id="footer-links-secondary">
							<li><a href="/t/terms">Terms</a></li>
							<li><a href="http://www.google.com/intl/en/policies/privacy/">Privacy</a></li>
							<li><a href="//support.google.com/youtube/bin/request.py?contact_type=abuse&amp;hl=en-US">Safety</a></li>
							<li><a href="//www.google.com/tools/feedback/intl/en/error.html" onclick="return yt.www.feedback.start(yt.getConfig('FEEDBACK_LOCALE_LANGUAGE'), yt.getConfig('FEEDBACK_LOCALE_EXTRAS'));" id="reportbug">Report a bug</a></li>
							<li><a href="/testtube">Try something new!</a></li>
						</ul>
						<ul class="pickers yt-uix-button-group" data-button-toggle-group="optional">
							<li>
								Language:
								<button type="button" class=" yt-uix-button yt-uix-button-text" onclick=";return false;" data-button-toggle="true" data-picker-position="footer" data-button-menu-id="arrow-display" data-picker-key="language" data-button-action="yt.www.picker.load" role="button"><span class="yt-uix-button-content">English </span><img class="yt-uix-button-arrow" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button>
							</li>
							<li>
								Location:
								<button type="button" class=" yt-uix-button yt-uix-button-text" onclick=";return false;" data-button-toggle="true" data-picker-position="footer" data-button-menu-id="arrow-display" data-picker-key="country" data-button-action="yt.www.picker.load" role="button"><span class="yt-uix-button-content">Worldwide </span><img class="yt-uix-button-arrow" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button>
							</li>
							<li>
								Safety:
								<button type="button" class=" yt-uix-button yt-uix-button-text" onclick=";return false;" data-button-toggle="true" data-picker-position="footer" data-button-menu-id="arrow-display" data-picker-key="safetymode" data-button-action="yt.www.picker.load" role="button"><span class="yt-uix-button-content">Off
								</span><img class="yt-uix-button-arrow" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button>
							</li>
						</ul>
						<div id="yt-picker-language-footer" class="yt-picker" style="display: none">
							<p class="yt-spinner">
								<img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="yt-spinner-img" alt="">
								Loading...
							</p>
						</div>
						<div id="yt-picker-country-footer" class="yt-picker" style="display: none">
							<p class="yt-spinner">
								<img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="yt-spinner-img" alt="">
								Loading...
							</p>
						</div>
						<div id="yt-picker-safetymode-footer" class="yt-picker" style="display: none">
							<p class="yt-spinner">
								<img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="yt-spinner-img" alt="">
								Loading...
							</p>
						</div>
					</div>
				</div>
				<!-- end footer -->
			</div>
			<div id="playlist-bar" class="hid passive editable" data-video-url="/watch?v=&amp;feature=BFql&amp;playnext=1&amp;list=QL" data-list-id="" data-list-type="QL">
				<div id="playlist-bar-bar-container">
					<div id="playlist-bar-bar">
						<div class="yt-alert yt-alert-naked yt-alert-success hid " id="playlist-bar-notifications">
							<div class="yt-alert-icon">
								<img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon">
							</div>
							<div class="yt-alert-content" role="alert"></div>
						</div>
						<span id="playlist-bar-info"><span class="playlist-bar-active playlist-bar-group"><button onclick=";return false;" title="Previous video" type="button" id="playlist-bar-prev-button" class="yt-uix-tooltip yt-uix-tooltip-masked  yt-uix-button yt-uix-button-default yt-uix-tooltip yt-uix-button-empty" role="button"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-playlist-bar-prev" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Previous video"><span class="yt-valign-trick"></span></span></button><span class="playlist-bar-count"><span class="playing-index">0</span> / <span class="item-count">0</span></span><button type="button" class="yt-uix-tooltip yt-uix-tooltip-masked  yt-uix-button yt-uix-button-default yt-uix-button-empty" onclick=";return false;" id="playlist-bar-next-button" role="button"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-playlist-bar-next" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-valign-trick"></span></span></button></span><span class="playlist-bar-active playlist-bar-group"><button type="button" class="yt-uix-tooltip yt-uix-tooltip-masked  yt-uix-button yt-uix-button-default yt-uix-button-empty" onclick=";return false;" id="playlist-bar-autoplay-button" data-button-toggle="true" role="button"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-playlist-bar-autoplay" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-valign-trick"></span></span></button><button type="button" class="yt-uix-tooltip yt-uix-tooltip-masked  yt-uix-button yt-uix-button-default yt-uix-button-empty" onclick=";return false;" id="playlist-bar-shuffle-button" data-button-toggle="true" role="button"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-playlist-bar-shuffle" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-valign-trick"></span></span></button></span><span class="playlist-bar-passive playlist-bar-group"><button onclick=";return false;" title="Play videos" type="button" id="playlist-bar-play-button" class="yt-uix-tooltip yt-uix-tooltip-masked  yt-uix-button yt-uix-button-default yt-uix-tooltip yt-uix-button-empty" role="button"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-playlist-bar-play" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Play videos"><span class="yt-valign-trick"></span></span></button><span class="playlist-bar-count"><span class="item-count">0</span></span></span><span id="playlist-bar-title" class="yt-uix-button-group"><span class="playlist-title">Unsaved Playlist</span></span></span>
						<a id="playlist-bar-lists-back" href="#">
						Return to active list
						</a>
						<span id="playlist-bar-controls"><span class="playlist-bar-group"><button type="button" class="yt-uix-tooltip yt-uix-tooltip-masked  yt-uix-button yt-uix-button-text yt-uix-button-empty" onclick=";return false;" id="playlist-bar-toggle-button" role="button"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-playlist-bar-toggle" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-valign-trick"></span></span></button></span><span class="playlist-bar-group"><button type="button" class="yt-uix-tooltip yt-uix-tooltip-masked yt-uix-button-reverse flip yt-uix-button yt-uix-button-text" onclick=";return false;" data-button-menu-id="playlist-bar-options-menu" data-button-has-sibling-menu="true" role="button"><span class="yt-uix-button-content">Options </span><img class="yt-uix-button-arrow" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button></span></span>      
					</div>
				</div>
				<div id="playlist-bar-tray-container">
					<div id="playlist-bar-tray" class="yt-uix-slider yt-uix-slider-fluid">
						<button class="yt-uix-button playlist-bar-tray-button yt-uix-button-default yt-uix-slider-prev" onclick="return false;"><img class="yt-uix-slider-prev-arrow" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Previous video"></button><button class="yt-uix-button playlist-bar-tray-button yt-uix-button-default yt-uix-slider-next" onclick="return false;"><img class="yt-uix-slider-next-arrow" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Next video"></button>
						<div class="yt-uix-slider-body">
							<div id="playlist-bar-tray-content" class="yt-uix-slider-slide">
								<ol class="video-list"></ol>
								<ol id="playlist-bar-help">
									<li class="empty playlist-bar-help-message">Your queue is empty. Add videos to your queue using this button: <img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="addto-button-help"><br> or <a href="https://accounts.google.com/ServiceLogin?passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26feature%3Dplaylist%26nomobiletemp%3D1%26hl%3Den_US%26next%3D%252F&amp;uilel=3&amp;hl=en_US&amp;service=youtube">sign in</a> to load a different list.</li>
								</ol>
							</div>
							<div class="yt-uix-slider-shade-left"></div>
							<div class="yt-uix-slider-shade-right"></div>
						</div>
					</div>
					<div id="playlist-bar-save"></div>
					<div id="playlist-bar-lists" class="dark-lolz"></div>
					<div id="playlist-bar-loading"><img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Loading..."><span id="playlist-bar-loading-message">Loading...</span><span id="playlist-bar-saving-message" class="hid">Saving...</span></div>
					<div id="playlist-bar-template" style="display: none;" data-video-thumb-url="//i4.ytimg.com/vi/__video_encrypted_id__/default.jpg">
						<!--<li class="playlist-bar-item yt-uix-slider-slide-unit __classes__" data-video-id="__video_encrypted_id__"><a href="__video_url__" title="__video_title__" class="yt-uix-sessionlink" data-sessionlink="ei=CNLr3rbS3rICFSwSIQodSW397Q%3D%3D&amp;feature=BFa"><span class="video-thumb ux-thumb yt-thumb-default-106 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="__video_title__" data-thumb-manual="true" data-thumb="__video_thumb_url__" width="106" ><span class="vertical-align"></span></span></span></span><span class="screen"></span><span class="count"><strong>__list_position__</strong></span><span class="play"><img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif"></span><span class="yt-uix-button yt-uix-button-default delete"><img class="yt-uix-button-icon-playlist-bar-delete" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Delete"></span><span class="now-playing">Now playing</span><span dir="ltr" class="title"><span>__video_title__  <span class="uploader">by __video_display_name__</span>
							</span></span><span class="dragger"></span></a></li>-->
					</div>
					<div id="playlist-bar-next-up-template" style="display: none;">
						<!--<div class="playlist-bar-next-thumb"><span class="video-thumb ux-thumb yt-thumb-default-74 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="//i4.ytimg.com/vi/__video_encrypted_id__/default.jpg" alt="Thumbnail" width="74" ><span class="vertical-align"></span></span></span></span></div>-->
					</div>
				</div>
				<div id="playlist-bar-options-menu" class="hid">
					<div id="playlist-bar-extras-menu">
						<ul>
							<li><span class="yt-uix-button-menu-item" data-action="clear">
								Clear all videos from this list
								</span>
							</li>
						</ul>
					</div>
					<ul>
						<li><span class="yt-uix-button-menu-item" onclick="window.location.href='//support.google.com/youtube/bin/answer.py?answer=146749&amp;hl=en-US'">Learn more</span></li>
					</ul>
				</div>
			</div>
			<div id="shared-addto-watch-later-login" class="hid">
				<a href="https://accounts.google.com/ServiceLogin?passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26feature%3Dplaylist%26nomobiletemp%3D1%26hl%3Den_US%26next%3D%252F&amp;uilel=3&amp;hl=en_US&amp;service=youtube" class="sign-in-link">Sign in</a> to add this to a playlist
			</div>
			<div id="shared-addto-menu" style="display: none;" class="hid sign-in">
				<div class="addto-menu">
					<div id="addto-list-panel" class="menu-panel active-panel">
						<span class="yt-uix-button-menu-item yt-uix-tooltip sign-in" data-possible-tooltip="" data-tooltip-show-delay="750"><a href="https://accounts.google.com/ServiceLogin?passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26feature%3Dplaylist%26nomobiletemp%3D1%26hl%3Den_US%26next%3D%252F&amp;uilel=3&amp;hl=en_US&amp;service=youtube" class="sign-in-link">Sign in</a> to add this to a playlist
						</span>
					</div>
					<div id="addto-list-saved-panel" class="menu-panel">
						<div class="panel-content">
							<div class="yt-alert yt-alert-naked yt-alert-success  ">
								<div class="yt-alert-icon">
									<img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon">
								</div>
								<div class="yt-alert-content" role="alert">
									<span class="yt-alert-vertical-trick"></span>
									<div class="yt-alert-message">
										<span class="message">Added to <span class="addto-title yt-uix-tooltip yt-uix-tooltip-reverse" title="More information about this playlist" data-tooltip-show-delay="750"></span></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="addto-list-error-panel" class="menu-panel">
						<div class="panel-content">
							<img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif">
							<span class="error-details"></span>
							<a class="show-menu-link">Back to list</a>
						</div>
					</div>
					<div id="addto-note-input-panel" class="menu-panel">
						<div class="panel-content">
							<div class="yt-alert yt-alert-naked yt-alert-success  ">
								<div class="yt-alert-icon">
									<img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon">
								</div>
								<div class="yt-alert-content" role="alert">
									<span class="yt-alert-vertical-trick"></span>
									<div class="yt-alert-message">
										<span class="message">Added to playlist:</span>
										<span class="addto-title yt-uix-tooltip" title="More information about this playlist" data-tooltip-show-delay="750"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="yt-uix-char-counter" data-char-limit="150">
							<div class="addto-note-box addto-text-box"><textarea id="addto-note" class="addto-note yt-uix-char-counter-input" maxlength="150"></textarea><label for="addto-note" class="addto-note-label">Add an optional note</label></div>
							<span class="yt-uix-char-counter-remaining">150</span>
						</div>
						<button disabled="disabled" type="button" class="playlist-save-note yt-uix-button yt-uix-button-default" onclick=";return false;" role="button"><span class="yt-uix-button-content">Add note </span></button>
					</div>
					<div id="addto-note-saving-panel" class="menu-panel">
						<div class="panel-content loading-content">
							<img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif">
							<span>Saving note...</span>
						</div>
					</div>
					<div id="addto-note-saved-panel" class="menu-panel">
						<div class="panel-content">
							<img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif">
							<span class="message">Note added to:</span>
						</div>
					</div>
					<div id="addto-note-error-panel" class="menu-panel">
						<div class="panel-content">
							<img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif">
							<span class="message">Error adding note:</span>
							<ul class="error-details"></ul>
							<a class="add-note-link">Click to add a new note</a>
						</div>
					</div>
					<div class="close-note hid">
						<img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="close-button">
					</div>
				</div>
			</div>
		</div>
		<!-- end page -->
		<script id="www-core-js" src="//s.ytimg.com/yt/jsbin/www-core-vfl1pq97W.js" data-loaded="true"></script>
		<script>
			yt.setConfig({
			'XSRF_TOKEN': 'iz8jtUnR4Eomusl012h4goGYKHl8MTM0OTE0MDU3NEAxMzQ5MDU0MTc0',
			'XSRF_FIELD_NAME': 'session_token'
			});
			yt.pubsub.subscribe('init', yt.www.xsrf.populateSessionToken);
			
			yt.setConfig('XSRF_REDIRECT_TOKEN', 'DKwX8BwPtPQ3NCknEYmL0VtXh6x8MTM0OTE0MDU3NEAxMzQ5MDU0MTc0');
			
			yt.setConfig({
			'EVENT_ID': "CNLr3rbS3rICFSwSIQodSW397Q==",
			'CURRENT_URL': "http:\/\/www.youtube.com\/",
			'LOGGED_IN': false,
			'SESSION_INDEX': null,
			
			'WATCH_CONTEXT_CLIENTSIDE': false,
			
			'FEEDBACK_LOCALE_LANGUAGE': "en",
			'FEEDBACK_LOCALE_EXTRAS': {"logged_in": false, "experiments": "904821,919006,922401,920704,912806,913419,913546,913556,919349,919351,925109,919003,920201,912706", "guide_subs": "NA", "accept_language": null}    });
		</script>
		<script>
			if (window.yt.timing) {yt.timing.tick("js_head");}    
		</script>
		<script>
			_gel('masthead-search-term').focus();
			yt.setConfig('GUIDE_VERSION', 1);
		</script>
		<script>
			yt.setMsg('FLASH_UPGRADE', "\u003cdiv class=\"yt-alert yt-alert-default yt-alert-error  yt-alert-player\"\u003e  \u003cdiv class=\"yt-alert-icon\"\u003e\n    \u003cimg s\u0072c=\"\/\/s.ytimg.com\/yt\/img\/pixel-vfl3z5WfW.gif\" class=\"icon master-sprite\" alt=\"Alert icon\"\u003e\n  \u003c\/div\u003e\n\u003cdiv class=\"yt-alert-buttons\"\u003e\u003c\/div\u003e\u003cdiv class=\"yt-alert-content\" role=\"alert\"\u003e    \u003cspan class=\"yt-alert-vertical-trick\"\u003e\u003c\/span\u003e\n    \u003cdiv class=\"yt-alert-message\"\u003e\n            You need to upgrade your Adobe Flash Player to watch this video. \u003cbr\u003e \u003ca href=\"http:\/\/get.adobe.com\/flashplayer\/\"\u003eDownload it from Adobe.\u003c\/a\u003e\n    \u003c\/div\u003e\n\u003c\/div\u003e\u003c\/div\u003e");
			yt.setConfig({
			'PLAYER_CONFIG': {"url": "\/\/s.ytimg.com\/yt\/swf\/masthead_child-vflRMMO6_.swf", "min_version": "8.0.0", "args": {"enablejsapi": 1}, "url_v9as2": "", "params": {"bgcolor": "#FFFFFF", "allowfullscreen": "false", "allowscriptaccess": "always"}, "attrs": {"width": "1", "id": "masthead_child", "height": "1"}, "url_v8": "", "html5": false}
			});
			
			yt.flash.embed("masthead_child_div", yt.getConfig('PLAYER_CONFIG'));
		</script>
		<script src="//s.ytimg.com/yt/jsbin/www-guide-vflO6qP5Q.js" data-loaded="true"></script>
		<script>
			window.masthead = new yt.www.ads.MastheadAd(
			    "OC52H-osudk",
			    true);
			
			yt.www.guide.init();
			
			
		</script>
		<script>
			if (window.yt.timing) {yt.timing.tick("js_page");}    
		</script>
		<script>
			yt.setConfig('TIMING_ACTION', "glo");    
		</script>
		<script>yt.www.thumbnaildelayload.init(300);</script>
		<script>
			yt.setMsg({
			  'LIST_CLEARED': "List cleared",
			  'PLAYLIST_VIDEO_DELETED': "Video deleted.",
			  'ERROR_OCCURRED': "Sorry, an error occurred.",
			  'NEXT_VIDEO_TOOLTIP': "Next video:\u003cbr\u003e \u0026#8220;${next_video_title}\u0026#8221;",
			  'NEXT_VIDEO_NOTHUMB_TOOLTIP': "Next video",
			  'SHOW_PLAYLIST_TOOLTIP': "Show playlist",
			  'HIDE_PLAYLIST_TOOLTIP': "Hide playlist",
			  'AUTOPLAY_ON_TOOLTIP': "Turn autoplay off",
			  'AUTOPLAY_OFF_TOOLTIP': "Turn autoplay on",
			  'SHUFFLE_ON_TOOLTIP': "Turn shuffle off",
			  'SHUFFLE_OFF_TOOLTIP': "Turn shuffle on",
			  'PLAYLIST_BAR_PLAYLIST_SAVED': "Playlist saved!",
			  'PLAYLIST_BAR_ADDED_TO_FAVORITES': "Added to favorites",
			  'PLAYLIST_BAR_ADDED_TO_PLAYLIST': "Added to playlist",
			  'PLAYLIST_BAR_ADDED_TO_QUEUE': "Added to queue",
			  'AUTOPLAY_WARNING1': "Next video starts in 1 second...",
			  'AUTOPLAY_WARNING2': "Next video starts in 2 seconds...",
			  'AUTOPLAY_WARNING3': "Next video starts in 3 seconds...",
			  'AUTOPLAY_WARNING4': "Next video starts in 4 seconds...",
			  'AUTOPLAY_WARNING5': "Next video starts in 5 seconds...",
			  'UNDO_LINK': "Undo"  });
			
			
			yt.setConfig({
			  'DRAGDROP_BINARY_URL': "\/\/s.ytimg.com\/yt\/jsbin\/www-dragdrop-vflWKaUyg.js",
			  'PLAYLIST_BAR_PLAYING_INDEX': -1  });
			
			  yt.setAjaxToken('addto_ajax_logged_out', "fp0KWJkOgzvoH_zrQWDO1rTnfkx8MTM0OTE0MDU3NEAxMzQ5MDU0MTc0");
			
			  yt.pubsub.subscribe('init', yt.www.lists.init);

			    yt.events.listen(_gel('masthead-search-term'), 'focus', yt.www.home.ads.workaroundReset);
			  yt.setConfig({'SBOX_JS_URL': "\/\/s.ytimg.com\/yt\/jsbin\/www-searchbox-vflsHyn9f.js",'SBOX_SETTINGS': {"CLOSE_ICON_URL": "\/\/s.ytimg.com\/yt\/img\/icons\/close-vflrEJzIW.png", "SHOW_CHIP": false, "PSUGGEST_TOKEN": null, "REQUEST_DOMAIN": "us", "EXPERIMENT_ID": -1, "SESSION_INDEX": null, "HAS_ON_SCREEN_KEYBOARD": false, "CHIP_PARAMETERS": {}, "REQUEST_LANGUAGE": "en"},'SBOX_LABELS': {"SUGGESTION_DISMISS_LABEL": "Dismiss", "SUGGESTION_DISMISSED_LABEL": "Suggestion dismissed"}});
		</script>
		<script>
			yt.setMsg({
			  'ADDTO_WATCH_LATER_ADDED': "Added",
			  'ADDTO_WATCH_LATER_ERROR': "Error"
			});
		</script>
		<script>
			if (window.yt.timing) {yt.timing.tick("js_foot");}    
		</script>
	</body>
</html>