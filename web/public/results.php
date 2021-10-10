

<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/config.inc.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/db_helper.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/time_manip.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/user_helper.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/video_helper.php"); ?>
<?php $__server->page_title = "test"; ?>
<?php $__video_h = new video_helper($__db); ?>
<?php $__user_h = new user_helper($__db); ?>
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
         <div id="masthead-container"><?php require($_SERVER['DOCUMENT_ROOT'] . "/s/mod/header.php"); ?></div>
         <div id="content">
            <noscript>
               <div class="yt-alert yt-alert-default yt-alert-error  ">
                  <div class="yt-alert-icon"><img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon"></div>
                  <div class="yt-alert-buttons">  <button type="button" class="close yt-uix-close yt-uix-button yt-uix-button-close" onclick=";return false;" data-close-parent-class="yt-alert" role="button"><span class="yt-uix-button-content">Close </span></button>
                  </div>
                  <div class="yt-alert-content" role="alert">
                     <span class="yt-alert-vertical-trick"></span>
                     <div class="yt-alert-message">
                        Hello, you seem to have JavaScript turned off.  Please enable it to see search results properly.
                     </div>
                  </div>
               </div>
            </noscript>
            <div id="search-header">
               <div id="search-header-inner">
                  <p class="num-results">
                     About <strong>559,000,000</strong> results
                  </p>
                  <h2>
                     Search results for
                     <strong class="query"></strong>
                  </h2>
               </div>
               <hr class="yt-horizontal-rule">
            </div>
            <div id="search-refinements">
               <div id="search-section-header" class="ytg-box">
                  <div id="search-option-expander" class="floatL" onclick="yt.www.search.toggleToolbelt();">
                     <button type="button" class=" yt-uix-button yt-uix-button-text" onclick=";return false;" data-button-toggle="true" data-button-menu-id="some-nonexistent-menu" data-button-action="" role="button"><span class="yt-uix-button-content">Filter </span><img class="yt-uix-button-arrow" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button>
                  </div>
                  <div class="clear"></div>
                  <div id="toolbelt-top" class="hid">
                     <div id="toolbelt-container">
                        <div class="search-option-box search-option-box-first">
                           <div class="search-option-label">
                              Result type:
                           </div>
                           <div class="search-option">
                              All
                           </div>
                           <div class="search-option">
                              <a href="/results?search_type=videos&amp;uni=3">Videos</a>
                           </div>
                           <div class="search-option">
                              <a href="/results?search_type=search_users&amp;uni=3">Channels</a>
                           </div>
                           <div class="search-option">
                              <a href="/results?search_type=search_playlists&amp;uni=3">Playlists</a>
                           </div>
                        </div>
                        <div class="search-option-box">
                           <div class="search-option-label">
                              Sort by:
                           </div>
                           <div class="search-option">
                              Relevance
                           </div>
                           <div class="search-option">
                              <a href="/results?search_type=videos&amp;uni=3&amp;search_sort=video_date_uploaded">Upload date</a>
                           </div>
                           <div class="search-option">
                              <a href="/results?search_type=videos&amp;uni=3&amp;search_sort=video_view_count">View count</a>
                           </div>
                           <div class="search-option">
                              <a href="/results?search_type=videos&amp;uni=3&amp;search_sort=video_avg_rating">Rating</a>
                           </div>
                        </div>
                        <div class="search-option-box">
                           <div class="search-option-label">
                              Upload date:
                           </div>
                           <div class="search-option">
                              Anytime
                           </div>
                           <div class="search-option">
                              <a href="/results?uploaded=d&amp;search_type=videos&amp;uni=3">Today</a>
                           </div>
                           <div class="search-option">
                              <a href="/results?uploaded=w&amp;search_type=videos&amp;uni=3">This week</a>
                           </div>
                           <div class="search-option">
                              <a href="/results?uploaded=m&amp;search_type=videos&amp;uni=3">This month</a>
                           </div>
                        </div>
                        <div class="search-option-box">
                           <div class="search-option-label">
                              Categories:
                           </div>
                           <div class="search-option">
                              All
                           </div>
                           <div class="search-option">
                              <a href=" /results?search_type=videos&amp;search_category=10&amp;uni=3">Music</a>
                           </div>
                           <div class="search-option">
                              <a href=" /results?search_type=videos&amp;search_category=43&amp;uni=3">Shows</a>
                           </div>
                           <div class="search-option">
                              <a href=" /results?search_type=videos&amp;search_category=24&amp;uni=3">Entertainment</a>
                           </div>
                           <div class="search-option">
                              <a href=" /results?search_type=videos&amp;search_category=2&amp;uni=3">Autos &amp; Vehicles</a>
                           </div>
                        </div>
                        <div class="search-option-box">
                           <div class="search-option-label">
                              Duration:
                           </div>
                           <div class="search-option">
                              All
                           </div>
                           <div class="search-option">
                              <a href="/results?search_type=videos&amp;uni=3&amp;search_duration=short">Short (~4 minutes)</a>
                           </div>
                           <div class="search-option">
                              <a href="/results?search_type=videos&amp;uni=3&amp;search_duration=long">Long (20~ minutes)</a>
                           </div>
                        </div>
                        <div class="search-option-box">
                           <div class="search-option-label">
                              Features:
                           </div>
                           <div class="search-option">
                              All
                           </div>
                           <div class="search-option">
                              <a href="/results?search_type=videos&amp;closed_captions=1&amp;uni=3">Closed captions</a>
                           </div>
                           <div class="search-option">
                              <a href="/results?search_type=videos&amp;uni=3&amp;high_definition=1">HD (high definition)</a>
                           </div>
                           <div class="search-option">
                              <a href="/results?search_type=videos&amp;partner=1&amp;uni=3">Partner videos</a>
                           </div>
                           <div class="search-option">
                              <a href="/results?search_type=videos&amp;uni=3&amp;rental=1">Rental</a>
                           </div>
                           <div class="search-option">
                              <a href="/results?search_type=videos&amp;uni=3&amp;webm=1">WebM</a>
                           </div>
                        </div>
                        <div class="clear"></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="yt-horizontal-rule "><span class="first"></span><span class="second"></span><span class="third"></span></div>
            <div id="search-base-div">
               <div id="search-main" class="ytg-4col new-snippets">
                  <div id="results-main-content">
                     <ol id="search-results">
                        <li class="yt-grid-box result-item-video *sr ">
                           <div id="" class="yt-uix-tile yt-lockup-list yt-tile-default yt-grid-box ">
                              <div class="yt-lockup-thumbnail"><a href="/watch?v=k0BWlvnBmIE" class="ux-thumb-wrap contains-addto result-item-thumb"><span class="video-thumb ux-thumb yt-thumb-default-138 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="//i4.ytimg.com/vi/k0BWlvnBmIE/default.jpg" alt="Thumbnail" width="138"><span class="vertical-align"></span></span></span></span><span class="video-time">4:37</span>
                                 <button onclick=";return false;" title="Watch Later" type="button" class="addto-button video-actions addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="k0BWlvnBmIE" role="button"><span class="yt-uix-button-content">  <span class="addto-label">
                                 Watch Later
                                 </span>
                                 <span class="addto-label-error">
                                 Error
                                 </span>
                                 <img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif">
                                 </span><img class="yt-uix-button-arrow" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button>
                                 </a>
                              </div>
                              <div class="yt-lockup-content">
                                 <h3><a class="yt-uix-tile-link result-item-translation-title" dir="ltr" title="Katy Perry - Wide Awake" href="/watch?v=k0BWlvnBmIE">Katy Perry - Wide Awake</a></h3>
                                 <p class="description " dir="ltr">Official music video for "Wide Awake," the final chapter from 'Teenage Dream: The Complete Confection' on iTunes: smarturl.it Written by Katy <b>...</b></p>
                                 <div class="yt-lockup-meta">
                                    <ul class="single-line-lego-list">
                                       <li><a href="/results?search_type=videos&amp;search_sort=video_recently_uploaded" class="yt-badge-std">NEW</a></li>
                                       <li><a href="/results?search_type=videos&amp;high_definition=1" class="yt-badge-std">HD</a></li>
                                    </ul>
                                    <p class="facets">
                                       <span class="username-prepend">by     <a href="/user/KatyPerryVEVO" class="yt-user-name " dir="ltr">KatyPerryVEVO</a>
                                       </span>
                                       <span class="metadata-separator">|</span>  <span class="date-added">8 hours ago</span>
                                       <span class="metadata-separator">|</span>  <span class="viewcount">337,829 views</span>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="yt-grid-box result-item-video *sr ">
                           <div id="" class="yt-uix-tile yt-lockup-list yt-tile-default yt-grid-box ">
                              <div class="yt-lockup-thumbnail"><a href="/watch?v=xBNgFSSy3Wo" class="ux-thumb-wrap contains-addto result-item-thumb"><span class="video-thumb ux-thumb yt-thumb-default-138 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="//i1.ytimg.com/vi/xBNgFSSy3Wo/default.jpg" alt="Thumbnail" width="138"><span class="vertical-align"></span></span></span></span><span class="video-time">5:23</span>
                                 <button onclick=";return false;" title="Watch Later" type="button" class="addto-button video-actions addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="xBNgFSSy3Wo" role="button"><span class="yt-uix-button-content">  <span class="addto-label">
                                 Watch Later
                                 </span>
                                 <span class="addto-label-error">
                                 Error
                                 </span>
                                 <img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif">
                                 </span><img class="yt-uix-button-arrow" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button>
                                 </a>
                              </div>
                              <div class="yt-lockup-content">
                                 <h3><a class="yt-uix-tile-link result-item-translation-title" dir="ltr" title="WWE No Way Out : John Cena vs. Big Show - Steel Cage Match Highlights 2012 [ 720p HD ]" href="/watch?v=xBNgFSSy3Wo">WWE No Way Out : John Cena vs. Big Show - Steel Cage Match Highlights 2012 [ 720p HD ]</a></h3>
                                 <p class="description " dir="ltr">Read More : SUBSCRIBE CelTic SwiTch : BEST VIDEOS EVER BELIVE ME !! www.youtube.com Song Used : Skillet - Comatose WWE No Way Out : John Cena vs <b>...</b></p>
                                 <div class="yt-lockup-meta">
                                    <ul class="single-line-lego-list">
                                       <li><a href="/results?search_type=videos&amp;search_sort=video_recently_uploaded" class="yt-badge-std">NEW</a></li>
                                       <li><a href="/results?search_type=videos&amp;high_definition=1" class="yt-badge-std">HD</a></li>
                                    </ul>
                                    <p class="facets">
                                       <span class="username-prepend">by     <a href="/user/xF4nT4sTic" class="yt-user-name " dir="ltr">xF4nT4sTic</a>
                                       </span>
                                       <span class="metadata-separator">|</span>  <span class="date-added">1 day ago</span>
                                       <span class="metadata-separator">|</span>  <span class="viewcount">145,495 views</span>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="yt-grid-box result-item-video *sr ">
                           <div id="" class="yt-uix-tile yt-lockup-list yt-tile-default yt-grid-box ">
                              <div class="yt-lockup-thumbnail"><a href="/watch?v=jTCiurois-E" class="ux-thumb-wrap contains-addto result-item-thumb"><span class="video-thumb ux-thumb yt-thumb-default-138 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="//i3.ytimg.com/vi/jTCiurois-E/default.jpg" alt="Thumbnail" width="138"><span class="vertical-align"></span></span></span></span><span class="video-time">13:57</span>
                                 <button onclick=";return false;" title="Watch Later" type="button" class="addto-button video-actions addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="jTCiurois-E" role="button"><span class="yt-uix-button-content">  <span class="addto-label">
                                 Watch Later
                                 </span>
                                 <span class="addto-label-error">
                                 Error
                                 </span>
                                 <img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif">
                                 </span><img class="yt-uix-button-arrow" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button>
                                 </a>
                              </div>
                              <div class="yt-lockup-content">
                                 <h3><a class="yt-uix-tile-link result-item-translation-title" dir="ltr" title="WWE No Way Out 2012 Highlights + Results!" href="/watch?v=jTCiurois-E">WWE No Way Out 2012 Highlights + Results!</a></h3>
                                 <p class="description " dir="ltr">WWE No Way Out 2012 Pay-Per-View PPV! Pre-Show Match Brodus Clay vs. David Otunga Match Result: Brodus Clay defeats David Otunga via count-out <b>...</b></p>
                                 <div class="yt-lockup-meta">
                                    <ul class="single-line-lego-list">
                                       <li><a href="/results?search_type=videos&amp;search_sort=video_recently_uploaded" class="yt-badge-std">NEW</a></li>
                                       <li><a href="/results?search_type=videos&amp;high_definition=1" class="yt-badge-std">HD</a></li>
                                    </ul>
                                    <p class="facets">
                                       <span class="username-prepend">by     <a href="/user/CMPuLs3" class="yt-user-name " dir="ltr">CMPuLs3</a>
                                       </span>
                                       <span class="metadata-separator">|</span>  <span class="date-added">1 day ago</span>
                                       <span class="metadata-separator">|</span>  <span class="viewcount">128,662 views</span>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="yt-grid-box result-item-video *sr ">
                           <div id="" class="yt-uix-tile yt-lockup-list yt-tile-default yt-grid-box ">
                              <div class="yt-lockup-thumbnail"><a href="/watch?v=C1EFn6IifVc" class="ux-thumb-wrap contains-addto result-item-thumb"><span class="video-thumb ux-thumb yt-thumb-default-138 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="//i4.ytimg.com/vi/C1EFn6IifVc/default.jpg" alt="Thumbnail" width="138"><span class="vertical-align"></span></span></span></span><span class="video-time">3:32</span>
                                 <button onclick=";return false;" title="Watch Later" type="button" class="addto-button video-actions addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="C1EFn6IifVc" role="button"><span class="yt-uix-button-content">  <span class="addto-label">
                                 Watch Later
                                 </span>
                                 <span class="addto-label-error">
                                 Error
                                 </span>
                                 <img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif">
                                 </span><img class="yt-uix-button-arrow" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button>
                                 </a>
                              </div>
                              <div class="yt-lockup-content">
                                 <h3><a class="yt-uix-tile-link result-item-translation-title" dir="ltr" title="Cheryl - Under The Sun" href="/watch?v=C1EFn6IifVc">Cheryl - Under The Sun</a></h3>
                                 <p class="description " dir="ltr">Music video by Cheryl performing Under The Sun. (C) 2012 Polydor Ltd. (UK)</p>
                                 <div class="yt-lockup-meta">
                                    <ul class="single-line-lego-list">
                                       <li><a href="/results?search_type=videos&amp;search_sort=video_recently_uploaded" class="yt-badge-std">NEW</a></li>
                                       <li><a href="/results?search_type=videos&amp;high_definition=1" class="yt-badge-std">HD</a></li>
                                    </ul>
                                    <p class="facets">
                                       <span class="username-prepend">by     <a href="/user/CherylColeVEVO" class="yt-user-name " dir="ltr">CherylColeVEVO</a>
                                       </span>
                                       <span class="metadata-separator">|</span>  <span class="date-added">3 days ago</span>
                                       <span class="metadata-separator">|</span>  <span class="viewcount">168,427 views</span>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="yt-grid-box result-item-video *sr ">
                           <div id="" class="yt-uix-tile yt-lockup-list yt-tile-default yt-grid-box ">
                              <div class="yt-lockup-thumbnail"><a href="/watch?v=xP4_0z2M85Q" class="ux-thumb-wrap contains-addto result-item-thumb"><span class="video-thumb ux-thumb yt-thumb-default-138 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Thumbnail" data-thumb="//i1.ytimg.com/vi/xP4_0z2M85Q/default.jpg" width="138"><span class="vertical-align"></span></span></span></span><span class="video-time">3:39</span>
                                 <button onclick=";return false;" title="Watch Later" type="button" class="addto-button video-actions addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="xP4_0z2M85Q" role="button"><span class="yt-uix-button-content">  <span class="addto-label">
                                 Watch Later
                                 </span>
                                 <span class="addto-label-error">
                                 Error
                                 </span>
                                 <img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif">
                                 </span><img class="yt-uix-button-arrow" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button>
                                 </a>
                              </div>
                              <div class="yt-lockup-content">
                                 <h3><a class="yt-uix-tile-link result-item-translation-title" dir="ltr" title="Nas - Daughters" href="/watch?v=xP4_0z2M85Q">Nas - Daughters</a></h3>
                                 <p class="description " dir="ltr">Buy Now! iTunes: smarturl.it Amazon: smarturl.it Music video by Nas performing Daughters. © 2012 The Island Def Jam Music Group</p>
                                 <div class="yt-lockup-meta">
                                    <ul class="single-line-lego-list">
                                       <li><a href="/results?search_type=videos&amp;high_definition=1" class="yt-badge-std">HD</a></li>
                                    </ul>
                                    <p class="facets">
                                       <span class="username-prepend">by     <a href="/user/NasVEVO" class="yt-user-name " dir="ltr">NasVEVO</a>
                                       </span>
                                       <span class="metadata-separator">|</span>  <span class="date-added">3 weeks ago</span>
                                       <span class="metadata-separator">|</span>  <span class="viewcount">2,896,059 views</span>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="yt-grid-box result-item-video *sr ">
                           <div id="" class="yt-uix-tile yt-lockup-list yt-tile-default yt-grid-box ">
                              <div class="yt-lockup-thumbnail"><a href="/watch?v=DTmwGXP2c6Q" class="ux-thumb-wrap contains-addto result-item-thumb"><span class="video-thumb ux-thumb yt-thumb-default-138 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Thumbnail" data-thumb="//i1.ytimg.com/vi/DTmwGXP2c6Q/default.jpg" width="138"><span class="vertical-align"></span></span></span></span><span class="video-time">5:22</span>
                                 <button onclick=";return false;" title="Watch Later" type="button" class="addto-button video-actions addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="DTmwGXP2c6Q" role="button"><span class="yt-uix-button-content">  <span class="addto-label">
                                 Watch Later
                                 </span>
                                 <span class="addto-label-error">
                                 Error
                                 </span>
                                 <img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif">
                                 </span><img class="yt-uix-button-arrow" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button>
                                 </a>
                              </div>
                              <div class="yt-lockup-content">
                                 <h3><a class="yt-uix-tile-link result-item-translation-title" dir="ltr" title="Birdman - Born Stunna (Explicit Version) ft. Rick Ross" href="/watch?v=DTmwGXP2c6Q">Birdman - Born Stunna (Explicit Version) ft. Rick Ross</a></h3>
                                 <p class="description " dir="ltr">Music video by Birdman performing Born Stunna. (C) 2012 Cash Money Records Inc. Under exclusive license to Universal Republic Records</p>
                                 <div class="yt-lockup-meta">
                                    <ul class="single-line-lego-list">
                                       <li><a href="/results?search_type=videos&amp;high_definition=1" class="yt-badge-std">HD</a></li>
                                    </ul>
                                    <p class="facets">
                                       <span class="username-prepend">by     <a href="/user/BirdmanVEVO" class="yt-user-name " dir="ltr">BirdmanVEVO</a>
                                       </span>
                                       <span class="metadata-separator">|</span>  <span class="date-added">1 week ago</span>
                                       <span class="metadata-separator">|</span>  <span class="viewcount">394,495 views</span>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="yt-grid-box result-item-video *sr ">
                           <div id="" class="yt-uix-tile yt-lockup-list yt-tile-default yt-grid-box ">
                              <div class="yt-lockup-thumbnail"><a href="/watch?v=-p0bNOxBhgc" class="ux-thumb-wrap contains-addto result-item-thumb"><span class="video-thumb ux-thumb yt-thumb-default-138 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Thumbnail" data-thumb="//i2.ytimg.com/vi/-p0bNOxBhgc/default.jpg" width="138"><span class="vertical-align"></span></span></span></span><span class="video-time">4:37</span>
                                 <button onclick=";return false;" title="Watch Later" type="button" class="addto-button video-actions addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="-p0bNOxBhgc" role="button"><span class="yt-uix-button-content">  <span class="addto-label">
                                 Watch Later
                                 </span>
                                 <span class="addto-label-error">
                                 Error
                                 </span>
                                 <img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif">
                                 </span><img class="yt-uix-button-arrow" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button>
                                 </a>
                              </div>
                              <div class="yt-lockup-content">
                                 <h3><a class="yt-uix-tile-link result-item-translation-title" dir="ltr" title="Take It To The Head (Explicit)" href="/watch?v=-p0bNOxBhgc">Take It To The Head (Explicit)</a></h3>
                                 <p class="description " dir="ltr">Music video by DJ Khaled performing Take It To The Head (Explicit). (C) 2012 Cash Money Records Inc.</p>
                                 <div class="yt-lockup-meta">
                                    <ul class="single-line-lego-list">
                                       <li><a href="/results?search_type=videos&amp;high_definition=1" class="yt-badge-std">HD</a></li>
                                    </ul>
                                    <p class="facets">
                                       <span class="username-prepend">by     <a href="/user/DJKhaledVEVO" class="yt-user-name " dir="ltr">DJKhaledVEVO</a>
                                       </span>
                                       <span class="metadata-separator">|</span>  <span class="date-added">3 weeks ago</span>
                                       <span class="metadata-separator">|</span>  <span class="viewcount">2,654,236 views</span>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="yt-grid-box result-item-video *sr ">
                           <div id="" class="yt-uix-tile yt-lockup-list yt-tile-default yt-grid-box ">
                              <div class="yt-lockup-thumbnail"><a href="/watch?v=Fzw5i14ewXY" class="ux-thumb-wrap contains-addto result-item-thumb"><span class="video-thumb ux-thumb yt-thumb-default-138 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Thumbnail" data-thumb="//i3.ytimg.com/vi/Fzw5i14ewXY/default.jpg" width="138"><span class="vertical-align"></span></span></span></span><span class="video-time">2:07</span>
                                 <button onclick=";return false;" title="Watch Later" type="button" class="addto-button video-actions addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="Fzw5i14ewXY" role="button"><span class="yt-uix-button-content">  <span class="addto-label">
                                 Watch Later
                                 </span>
                                 <span class="addto-label-error">
                                 Error
                                 </span>
                                 <img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif">
                                 </span><img class="yt-uix-button-arrow" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button>
                                 </a>
                              </div>
                              <div class="yt-lockup-content">
                                 <h3><a class="yt-uix-tile-link result-item-translation-title" dir="ltr" title="Anthony Davidson Huge Crash 2012 Le Mans 24 Hours" href="/watch?v=Fzw5i14ewXY">Anthony Davidson Huge Crash 2012 Le Mans 24 Hours</a></h3>
                                 <p class="description " dir="ltr">Anthony Davidson gets together with F458 Italia driven by Perrazini, goes airborne and crashes hard into the wall. Both drivers got out of the car <b>...</b></p>
                                 <div class="yt-lockup-meta">
                                    <ul class="single-line-lego-list">
                                       <li><a href="/results?search_type=videos&amp;search_sort=video_recently_uploaded" class="yt-badge-std">NEW</a></li>
                                    </ul>
                                    <p class="facets">
                                       <span class="username-prepend">by     <a href="/user/MT89MotorsportMedia" class="yt-user-name " dir="ltr">MT89MotorsportMedia</a>
                                       </span>
                                       <span class="metadata-separator">|</span>  <span class="date-added">2 days ago</span>
                                       <span class="metadata-separator">|</span>  <span class="viewcount">2,646,089 views</span>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="yt-grid-box result-item-video *sr ">
                           <div id="" class="yt-uix-tile yt-lockup-list yt-tile-default yt-grid-box ">
                              <div class="yt-lockup-thumbnail"><a href="/watch?v=k08_vxNKJr4" class="ux-thumb-wrap contains-addto result-item-thumb"><span class="video-thumb ux-thumb yt-thumb-default-138 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Thumbnail" data-thumb="//i4.ytimg.com/vi/k08_vxNKJr4/default.jpg" width="138"><span class="vertical-align"></span></span></span></span><span class="video-time">2:56</span>
                                 <button onclick=";return false;" title="Watch Later" type="button" class="addto-button video-actions addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="k08_vxNKJr4" role="button"><span class="yt-uix-button-content">  <span class="addto-label">
                                 Watch Later
                                 </span>
                                 <span class="addto-label-error">
                                 Error
                                 </span>
                                 <img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif">
                                 </span><img class="yt-uix-button-arrow" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button>
                                 </a>
                              </div>
                              <div class="yt-lockup-content">
                                 <h3><a class="yt-uix-tile-link result-item-translation-title" dir="ltr" title="Conor Maynard - Becoming Conor Maynard (VEVO LIFT UK)" href="/watch?v=k08_vxNKJr4">Conor Maynard - Becoming Conor Maynard (VEVO LIFT UK)</a></h3>
                                 <p class="description " dir="ltr">Conor talks about his early days as a musician, getting his big break and his first album 'Vegas Girl' out 22nd July. Pre-Order the single here <b>...</b></p>
                                 <div class="yt-lockup-meta">
                                    <ul class="single-line-lego-list">
                                       <li><a href="/results?search_type=videos&amp;search_sort=video_recently_uploaded" class="yt-badge-std">NEW</a></li>
                                       <li><a href="/results?search_type=videos&amp;high_definition=1" class="yt-badge-std">HD</a></li>
                                    </ul>
                                    <p class="facets">
                                       <span class="username-prepend">by     <a href="/user/ConorMaynardVEVO" class="yt-user-name " dir="ltr">ConorMaynardVEVO</a>
                                       </span>
                                       <span class="metadata-separator">|</span>  <span class="date-added">1 day ago</span>
                                       <span class="metadata-separator">|</span>  <span class="viewcount">33,282 views</span>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="yt-grid-box result-item-video *sr ">
                           <div id="" class="yt-uix-tile yt-lockup-list yt-tile-default yt-grid-box ">
                              <div class="yt-lockup-thumbnail"><a href="/watch?v=AqAB1Rh61tQ" class="ux-thumb-wrap contains-addto result-item-thumb"><span class="video-thumb ux-thumb yt-thumb-default-138 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Thumbnail" data-thumb="//i2.ytimg.com/vi/AqAB1Rh61tQ/default.jpg" width="138"><span class="vertical-align"></span></span></span></span><span class="video-time">12:03</span>
                                 <button onclick=";return false;" title="Watch Later" type="button" class="addto-button video-actions addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="AqAB1Rh61tQ" role="button"><span class="yt-uix-button-content">  <span class="addto-label">
                                 Watch Later
                                 </span>
                                 <span class="addto-label-error">
                                 Error
                                 </span>
                                 <img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif">
                                 </span><img class="yt-uix-button-arrow" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button>
                                 </a>
                              </div>
                              <div class="yt-lockup-content">
                                 <h3><a class="yt-uix-tile-link result-item-translation-title" dir="ltr" title="Happy Wheels - ANAL PROBE - Part 5" href="/watch?v=AqAB1Rh61tQ">Happy Wheels - ANAL PROBE - Part 5</a></h3>
                                 <p class="description " dir="ltr">Check me out on Cartoon Network Mondays at 8;30/7;30 Central on The Annoying Orange TV Show! Join the Audience! Facebook.com twitter.com Thanks <b>...</b></p>
                                 <div class="yt-lockup-meta">
                                    <ul class="single-line-lego-list">
                                       <li><a href="/results?search_type=videos&amp;search_sort=video_recently_uploaded" class="yt-badge-std">NEW</a></li>
                                       <li><a href="/results?search_type=videos&amp;high_definition=1" class="yt-badge-std">HD</a></li>
                                    </ul>
                                    <p class="facets">
                                       <span class="username-prepend">by     <a href="/user/TobyGames" class="yt-user-name " dir="ltr">TobyGames</a>
                                       </span>
                                       <span class="metadata-separator">|</span>  <span class="date-added">3 days ago</span>
                                       <span class="metadata-separator">|</span>  <span class="viewcount">732,952 views</span>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="yt-grid-box result-item-video *sr ">
                           <div id="" class="yt-uix-tile yt-lockup-list yt-tile-default yt-grid-box ">
                              <div class="yt-lockup-thumbnail"><a href="/watch?v=iU6zaWknoIA" class="ux-thumb-wrap contains-addto result-item-thumb"><span class="video-thumb ux-thumb yt-thumb-default-138 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Thumbnail" data-thumb="//i2.ytimg.com/vi/iU6zaWknoIA/default.jpg" width="138"><span class="vertical-align"></span></span></span></span><span class="video-time">11:29</span>
                                 <button onclick=";return false;" title="Watch Later" type="button" class="addto-button video-actions addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="iU6zaWknoIA" role="button"><span class="yt-uix-button-content">  <span class="addto-label">
                                 Watch Later
                                 </span>
                                 <span class="addto-label-error">
                                 Error
                                 </span>
                                 <img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif">
                                 </span><img class="yt-uix-button-arrow" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button>
                                 </a>
                              </div>
                              <div class="yt-lockup-content">
                                 <h3><a class="yt-uix-tile-link result-item-translation-title" dir="ltr" title="PISS OFF YOUR WIFE!! (6.13.12 - Day 1140)" href="/watch?v=iU6zaWknoIA">PISS OFF YOUR WIFE!! (6.13.12 - Day 1140)</a></h3>
                                 <p class="description " dir="ltr">LAST CHANCE!! get your CTFxC hoodie here! ctfxcmerch.com also get a snazzy CTFxC posters here: bit.ly *Twitter: twitter.com &amp; twitter.com <b>...</b></p>
                                 <div class="yt-lockup-meta">
                                    <span class="yt-badge-std">Episode</span>
                                    <ul class="single-line-lego-list">
                                       <li><a href="/results?search_type=videos&amp;search_sort=video_recently_uploaded" class="yt-badge-std">NEW</a></li>
                                       <li><a href="/results?search_type=videos&amp;high_definition=1" class="yt-badge-std">HD</a></li>
                                       <li><a href="/results?search_type=videos&amp;closed_captions=1" class="yt-badge-std">CC</a></li>
                                    </ul>
                                    <p class="facets">
                                       <span class="video-type"><strong>Full Episode:</strong> Season 4, Episode 1140
                                       </span>
                                       <span class="metadata-separator">|</span>  <span><strong><a href="/show?p=7H59sBsmEaA" rel="nofollow">Internet Killed TV</a></strong></span>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="yt-grid-box result-item-video *sr ">
                           <div id="" class="yt-uix-tile yt-lockup-list yt-tile-default yt-grid-box ">
                              <div class="yt-lockup-thumbnail"><a href="/watch?v=OvtfCPFbKwk" class="ux-thumb-wrap contains-addto result-item-thumb"><span class="video-thumb ux-thumb yt-thumb-default-138 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Thumbnail" data-thumb="//i4.ytimg.com/vi/OvtfCPFbKwk/default.jpg" width="138"><span class="vertical-align"></span></span></span></span><span class="video-time">10:01</span>
                                 <button onclick=";return false;" title="Watch Later" type="button" class="addto-button video-actions addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="OvtfCPFbKwk" role="button"><span class="yt-uix-button-content">  <span class="addto-label">
                                 Watch Later
                                 </span>
                                 <span class="addto-label-error">
                                 Error
                                 </span>
                                 <img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif">
                                 </span><img class="yt-uix-button-arrow" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button>
                                 </a>
                              </div>
                              <div class="yt-lockup-content">
                                 <h3><a class="yt-uix-tile-link result-item-translation-title" dir="ltr" title="2012 EURO CUP RIOT, MAC FAILS, AND LADIES IN BODY PAINT" href="/watch?v=OvtfCPFbKwk">2012 EURO CUP RIOT, MAC FAILS, AND LADIES IN BODY PAINT</a></h3>
                                 <p class="description " dir="ltr">In today's show we talk about an Oatmeal vs FunnyJunk followup, a guy who brought his 18 month old daughter along on a robbery, a quick piece on <b>...</b></p>
                                 <div class="yt-lockup-meta">
                                    <ul class="single-line-lego-list">
                                       <li><a href="/results?search_type=videos&amp;search_sort=video_recently_uploaded" class="yt-badge-std">NEW</a></li>
                                       <li><a href="/results?search_type=videos&amp;high_definition=1" class="yt-badge-std">HD</a></li>
                                    </ul>
                                    <p class="facets">
                                       <span class="username-prepend">by     <a href="/user/sxephil" class="yt-user-name " dir="ltr">sxephil</a>
                                       </span>
                                       <span class="metadata-separator">|</span>  <span class="date-added">5 days ago</span>
                                       <span class="metadata-separator">|</span>  <span class="viewcount">1,358,773 views</span>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="yt-grid-box result-item-video *sr ">
                           <div id="" class="yt-uix-tile yt-lockup-list yt-tile-default yt-grid-box ">
                              <div class="yt-lockup-thumbnail"><a href="/watch?v=gsLR9FVytr4" class="ux-thumb-wrap contains-addto result-item-thumb"><span class="video-thumb ux-thumb yt-thumb-default-138 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Thumbnail" data-thumb="//i4.ytimg.com/vi/gsLR9FVytr4/default.jpg" width="138"><span class="vertical-align"></span></span></span></span><span class="video-time">2:41</span>
                                 <button onclick=";return false;" title="Watch Later" type="button" class="addto-button video-actions addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="gsLR9FVytr4" role="button"><span class="yt-uix-button-content">  <span class="addto-label">
                                 Watch Later
                                 </span>
                                 <span class="addto-label-error">
                                 Error
                                 </span>
                                 <img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif">
                                 </span><img class="yt-uix-button-arrow" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button>
                                 </a>
                              </div>
                              <div class="yt-lockup-content">
                                 <h3><a class="yt-uix-tile-link result-item-translation-title" dir="ltr" title="#ArabsGotTalent - S2 - Ep9 - شما حمدان" href="/watch?v=gsLR9FVytr4">#ArabsGotTalent - S2 - Ep9 - شما حمدان</a></h3>
                                 <p class="description " dir="rtl">شاهد الحلقات الكاملة على شاهد.نت shahid.mbc.net Arabs Got Talent www.mbc.net www.facebook.com twitter.com MBC4 www.mbc.net www.facebook.com <b>...</b></p>
                                 <div class="yt-lockup-meta">
                                    <ul class="single-line-lego-list">
                                       <li><a href="/results?search_type=videos&amp;high_definition=1" class="yt-badge-std">HD</a></li>
                                    </ul>
                                    <p class="facets">
                                       <span class="username-prepend">by     <a href="/user/mbc" class="yt-user-name " dir="ltr">mbc</a>
                                       </span>
                                       <span class="metadata-separator">|</span>  <span class="date-added">2 weeks ago</span>
                                       <span class="metadata-separator">|</span>  <span class="viewcount">2,619,209 views</span>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="yt-grid-box result-item-video *sr ">
                           <div id="" class="yt-uix-tile yt-lockup-list yt-tile-default yt-grid-box ">
                              <div class="yt-lockup-thumbnail"><a href="/watch?v=kGQrV_tStJI" class="ux-thumb-wrap contains-addto result-item-thumb"><span class="video-thumb ux-thumb yt-thumb-default-138 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Thumbnail" data-thumb="//i4.ytimg.com/vi/kGQrV_tStJI/default.jpg" width="138"><span class="vertical-align"></span></span></span></span><span class="video-time">3:57</span>
                                 <button onclick=";return false;" title="Watch Later" type="button" class="addto-button video-actions addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="kGQrV_tStJI" role="button"><span class="yt-uix-button-content">  <span class="addto-label">
                                 Watch Later
                                 </span>
                                 <span class="addto-label-error">
                                 Error
                                 </span>
                                 <img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif">
                                 </span><img class="yt-uix-button-arrow" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button>
                                 </a>
                              </div>
                              <div class="yt-lockup-content">
                                 <h3><a class="yt-uix-tile-link result-item-translation-title" dir="ltr" title="Justin Bieber - Believe (Audio)" href="/watch?v=kGQrV_tStJI">Justin Bieber - Believe (Audio)</a></h3>
                                 <p class="description " dir="ltr">Amazon: amzn.to Video of Justin Bieber performing "Believe" (Audio). © 2012 The Island Def Jam Music Group | Universal Music Group Follow Me On <b>...</b></p>
                                 <div class="yt-lockup-meta">
                                    <ul class="single-line-lego-list">
                                       <li><a href="/results?search_type=videos&amp;search_sort=video_recently_uploaded" class="yt-badge-std">NEW</a></li>
                                    </ul>
                                    <p class="facets">
                                       <span class="username-prepend">by     <a href="/user/believepromo" class="yt-user-name " dir="ltr">believepromo</a>
                                       </span>
                                       <span class="metadata-separator">|</span>  <span class="date-added">6 days ago</span>
                                       <span class="metadata-separator">|</span>  <span class="viewcount">353,551 views</span>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="yt-grid-box result-item-video *sr ">
                           <div id="" class="yt-uix-tile yt-lockup-list yt-tile-default yt-grid-box ">
                              <div class="yt-lockup-thumbnail"><a href="/watch?v=1o3fcUH-yPQ" class="ux-thumb-wrap contains-addto result-item-thumb"><span class="video-thumb ux-thumb yt-thumb-default-138 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Thumbnail" data-thumb="//i2.ytimg.com/vi/1o3fcUH-yPQ/default.jpg" width="138"><span class="vertical-align"></span></span></span></span><span class="video-time">18:12</span>
                                 <button onclick=";return false;" title="Watch Later" type="button" class="addto-button video-actions addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="1o3fcUH-yPQ" role="button"><span class="yt-uix-button-content">  <span class="addto-label">
                                 Watch Later
                                 </span>
                                 <span class="addto-label-error">
                                 Error
                                 </span>
                                 <img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif">
                                 </span><img class="yt-uix-button-arrow" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button>
                                 </a>
                              </div>
                              <div class="yt-lockup-content">
                                 <h3><a class="yt-uix-tile-link result-item-translation-title" dir="ltr" title="The Adventurous Adventures of One Direction" href="/watch?v=1o3fcUH-yPQ">The Adventurous Adventures of One Direction</a></h3>
                                 <p class="description " dir="ltr">*Watch in HD, y'all.* The evil Lord Faptaguise is back! And he has a plan so dastardly, only one hero can stop him! Well, five heroes. ONE <b>...</b></p>
                                 <div class="yt-lockup-meta">
                                    <ul class="single-line-lego-list">
                                       <li><a href="/results?search_type=videos&amp;high_definition=1" class="yt-badge-std">HD</a></li>
                                    </ul>
                                    <p class="facets">
                                       <span class="username-prepend">by     <a href="/user/chimpshrimp" class="yt-user-name " dir="ltr">chimpshrimp</a>
                                       </span>
                                       <span class="metadata-separator">|</span>  <span class="date-added">2 weeks ago</span>
                                       <span class="metadata-separator">|</span>  <span class="viewcount">6,231,341 views</span>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="yt-grid-box result-item-video *sr ">
                           <div id="" class="yt-uix-tile yt-lockup-list yt-tile-default yt-grid-box ">
                              <div class="yt-lockup-thumbnail"><a href="/watch?v=IELEscmVSnA" class="ux-thumb-wrap contains-addto result-item-thumb"><span class="video-thumb ux-thumb yt-thumb-default-138 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Thumbnail" data-thumb="//i2.ytimg.com/vi/IELEscmVSnA/default.jpg" width="138"><span class="vertical-align"></span></span></span></span><span class="video-time">24:05</span>
                                 <button onclick=";return false;" title="Watch Later" type="button" class="addto-button video-actions addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="IELEscmVSnA" role="button"><span class="yt-uix-button-content">  <span class="addto-label">
                                 Watch Later
                                 </span>
                                 <span class="addto-label-error">
                                 Error
                                 </span>
                                 <img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif">
                                 </span><img class="yt-uix-button-arrow" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button>
                                 </a>
                              </div>
                              <div class="yt-lockup-content">
                                 <h3><a class="yt-uix-tile-link result-item-translation-title" dir="ltr" title="#ArabsGotTalent Plus With Raya" href="/watch?v=IELEscmVSnA">#ArabsGotTalent Plus With Raya</a></h3>
                                 <p class="description " dir="rtl">برعاية Chevrolet Arabs Got Talent Plus with Raya Abirached شاهد الحلقات الكاملة على شاهد.نت shahid.mbc.net Arabs Got Talent www.mbc.net www <b>...</b></p>
                                 <div class="yt-lockup-meta">
                                    <ul class="single-line-lego-list">
                                       <li><a href="/results?search_type=videos&amp;search_sort=video_recently_uploaded" class="yt-badge-std">NEW</a></li>
                                    </ul>
                                    <p class="facets">
                                       <span class="username-prepend">by     <a href="/user/mbc" class="yt-user-name " dir="ltr">mbc</a>
                                       </span>
                                       <span class="metadata-separator">|</span>  <span class="date-added">3 days ago</span>
                                       <span class="metadata-separator">|</span>  <span class="viewcount">130,864 views</span>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="yt-grid-box result-item-video *sr ">
                           <div id="" class="yt-uix-tile yt-lockup-list yt-tile-default yt-grid-box ">
                              <div class="yt-lockup-thumbnail"><a href="/watch?v=PUOSceO7kac" class="ux-thumb-wrap contains-addto result-item-thumb"><span class="video-thumb ux-thumb yt-thumb-default-138 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Thumbnail" data-thumb="//i1.ytimg.com/vi/PUOSceO7kac/default.jpg" width="138"><span class="vertical-align"></span></span></span></span><span class="video-time">3:17</span>
                                 <button onclick=";return false;" title="Watch Later" type="button" class="addto-button video-actions addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="PUOSceO7kac" role="button"><span class="yt-uix-button-content">  <span class="addto-label">
                                 Watch Later
                                 </span>
                                 <span class="addto-label-error">
                                 Error
                                 </span>
                                 <img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif">
                                 </span><img class="yt-uix-button-arrow" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button>
                                 </a>
                              </div>
                              <div class="yt-lockup-content">
                                 <h3><a class="yt-uix-tile-link result-item-translation-title" dir="ltr" title="Let it Shine's§Moment of Truth (final rap battle)" href="/watch?v=PUOSceO7kac">Let it Shine's§Moment of Truth (final rap battle)</a></h3>
                                 <p class="description " dir="ltr">One of Disney channel's newest original movies Let It Shine.This is a lyric video for the final rap battle between Brandon Mychal Smith§Tyler <b>...</b></p>
                                 <div class="yt-lockup-meta">
                                    <ul class="single-line-lego-list">
                                       <li><a href="/results?search_type=videos&amp;search_sort=video_recently_uploaded" class="yt-badge-std">NEW</a></li>
                                    </ul>
                                    <p class="facets">
                                       <span class="username-prepend">by     <a href="/channel/UCWvtfK5NTRePY6kARDGl97w" class="yt-user-name " dir="ltr">jada gowilddnisbett</a>
                                       </span>
                                       <span class="metadata-separator">|</span>  <span class="date-added">2 days ago</span>
                                       <span class="metadata-separator">|</span>  <span class="viewcount">95,014 views</span>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="yt-grid-box result-item-video *sr ">
                           <div id="" class="yt-uix-tile yt-lockup-list yt-tile-default yt-grid-box ">
                              <div class="yt-lockup-thumbnail"><a href="/watch?v=FJt7gNi3Nr4" class="ux-thumb-wrap contains-addto result-item-thumb"><span class="video-thumb ux-thumb yt-thumb-default-138 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Thumbnail" data-thumb="//i3.ytimg.com/vi/FJt7gNi3Nr4/default.jpg" width="138"><span class="vertical-align"></span></span></span></span><span class="video-time">5:04</span>
                                 <button onclick=";return false;" title="Watch Later" type="button" class="addto-button video-actions addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="FJt7gNi3Nr4" role="button"><span class="yt-uix-button-content">  <span class="addto-label">
                                 Watch Later
                                 </span>
                                 <span class="addto-label-error">
                                 Error
                                 </span>
                                 <img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif">
                                 </span><img class="yt-uix-button-arrow" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button>
                                 </a>
                              </div>
                              <div class="yt-lockup-content">
                                 <h3><a class="yt-uix-tile-link result-item-translation-title" dir="ltr" title="No Church In The Wild" href="/watch?v=FJt7gNi3Nr4">No Church In The Wild</a></h3>
                                 <p class="description " dir="ltr">Buy it Now! idj.to Music video by Jay-Z &amp; Kanye West performing No Church In The Wild feat. Frank Ocean &amp; The-Dream. © 2012 Roc-A-Fella Records, LLC</p>
                                 <div class="yt-lockup-meta">
                                    <ul class="single-line-lego-list">
                                       <li><a href="/results?search_type=videos&amp;high_definition=1" class="yt-badge-std">HD</a></li>
                                    </ul>
                                    <p class="facets">
                                       <span class="username-prepend">by     <a href="/user/KanyeWestVEVO" class="yt-user-name " dir="ltr">KanyeWestVEVO</a>
                                       </span>
                                       <span class="metadata-separator">|</span>  <span class="date-added">2 weeks ago</span>
                                       <span class="metadata-separator">|</span>  <span class="viewcount">6,235,984 views</span>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="yt-grid-box result-item-video *sr ">
                           <div id="" class="yt-uix-tile yt-lockup-list yt-tile-default yt-grid-box ">
                              <div class="yt-lockup-thumbnail"><a href="/watch?v=zimkYhUU0W0" class="ux-thumb-wrap contains-addto result-item-thumb"><span class="video-thumb ux-thumb yt-thumb-default-138 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Thumbnail" data-thumb="//i3.ytimg.com/vi/zimkYhUU0W0/default.jpg" width="138"><span class="vertical-align"></span></span></span></span><span class="video-time">3:11</span>
                                 <button onclick=";return false;" title="Watch Later" type="button" class="addto-button video-actions addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="zimkYhUU0W0" role="button"><span class="yt-uix-button-content">  <span class="addto-label">
                                 Watch Later
                                 </span>
                                 <span class="addto-label-error">
                                 Error
                                 </span>
                                 <img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif">
                                 </span><img class="yt-uix-button-arrow" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button>
                                 </a>
                              </div>
                              <div class="yt-lockup-content">
                                 <h3><a class="yt-uix-tile-link result-item-translation-title" dir="ltr" title="Cat Stole My Pants - funny CCTV of cat stealing items" href="/watch?v=zimkYhUU0W0">Cat Stole My Pants - funny CCTV of cat stealing items</a></h3>
                                 <p class="description " dir="ltr">Cat Stole My Pants - CCTV of Denis stealing household items compilation check me out on facebook/deniscatburglarnewman or twitter @deniscatburglar <b>...</b></p>
                                 <div class="yt-lockup-meta">
                                    <ul class="single-line-lego-list">
                                       <li><a href="/results?search_type=videos&amp;search_sort=video_recently_uploaded" class="yt-badge-std">NEW</a></li>
                                       <li><a href="/results?search_type=videos&amp;high_definition=1" class="yt-badge-std">HD</a></li>
                                    </ul>
                                    <p class="facets">
                                       <span class="username-prepend">by     <a href="/user/DenisCatBurglarNewma" class="yt-user-name " dir="ltr">DenisCatBurglarNewma</a>
                                       </span>
                                       <span class="metadata-separator">|</span>  <span class="date-added">6 days ago</span>
                                       <span class="metadata-separator">|</span>  <span class="viewcount">86,353 views</span>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="yt-grid-box result-item-video *sr ">
                           <div id="" class="yt-uix-tile yt-lockup-list yt-tile-default yt-grid-box ">
                              <div class="yt-lockup-thumbnail"><a href="/watch?v=IWkKvVJhNBk" class="ux-thumb-wrap contains-addto result-item-thumb"><span class="video-thumb ux-thumb yt-thumb-default-138 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="http://s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Thumbnail" data-thumb="//i2.ytimg.com/vi/IWkKvVJhNBk/default.jpg" width="138"><span class="vertical-align"></span></span></span></span><span class="video-time">2:23</span>
                                 <button onclick=";return false;" title="Watch Later" type="button" class="addto-button video-actions addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="IWkKvVJhNBk" role="button"><span class="yt-uix-button-content">  <span class="addto-label">
                                 Watch Later
                                 </span>
                                 <span class="addto-label-error">
                                 Error
                                 </span>
                                 <img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif">
                                 </span><img class="yt-uix-button-arrow" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></button>
                                 </a>
                              </div>
                              <div class="yt-lockup-content">
                                 <h3><a class="yt-uix-tile-link result-item-translation-title" dir="ltr" title="Chris Brown vs Drake Fight - WIP In NYC Nightclub , Tony Parker Hurt [!!!!! REAL VIDEO HD !!!!]" href="/watch?v=IWkKvVJhNBk">Chris Brown vs Drake Fight - WIP In NYC Nightclub , Tony Parker Hurt [!!!!! REAL VIDEO HD !!!!]</a></h3>
                                 <p class="description " dir="ltr">If you look good at the background then you can see breezy and drizzy fighting. Chris Brown Vs Drake Fight At WIP In NYC Nightclub , Tony Parker <b>...</b></p>
                                 <div class="yt-lockup-meta">
                                    <ul class="single-line-lego-list">
                                       <li><a href="/results?search_type=videos&amp;search_sort=video_recently_uploaded" class="yt-badge-std">NEW</a></li>
                                       <li><a href="/results?search_type=videos&amp;high_definition=1" class="yt-badge-std">HD</a></li>
                                    </ul>
                                    <p class="facets">
                                       <span class="username-prepend">by     <a href="/user/momo13ii" class="yt-user-name " dir="ltr">momo13ii</a>
                                       </span>
                                       <span class="metadata-separator">|</span>  <span class="date-added">3 days ago</span>
                                       <span class="metadata-separator">|</span>  <span class="viewcount">236,325 views</span>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="yt-grid-box playlist *sr">
                           <div id="" class="yt-uix-tile yt-lockup-list yt-tile-default yt-grid-box ">
                              <div class="yt-lockup-thumbnail"><a class="playlist-thumb" href="/watch?v=8YaLoXRmRMQ&amp;feature=results_main&amp;playnext=1&amp;list=PL33AA901EB6479621"><span class="playlist-large-thumb"><span class="video-thumb ux-thumb yt-thumb-default-138 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="//i1.ytimg.com/vi/8YaLoXRmRMQ/default.jpg" alt="Thumbnail" width="138"><span class="vertical-align"></span></span></span></span></span></a><a href="/watch?v=dPC8mBjXwcs"><span class="playlist-small-thumb "><span class="video-thumb ux-thumb yt-thumb-default-64 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="//i1.ytimg.com/vi/dPC8mBjXwcs/default.jpg" alt="Thumbnail" width="64"><span class="vertical-align"></span></span></span></span></span></a><a href="/watch?v=aHdtJ_tuWQA"><span class="playlist-small-thumb "><span class="video-thumb ux-thumb yt-thumb-default-64 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="//i2.ytimg.com/vi/aHdtJ_tuWQA/default.jpg" alt="Thumbnail" width="64"><span class="vertical-align"></span></span></span></span></span></a><a href="/watch?v=8YaLoXRmRMQ"><span class="playlist-small-thumb playlist-small-thumb-last"><span class="video-thumb ux-thumb yt-thumb-default-64 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="//i1.ytimg.com/vi/8YaLoXRmRMQ/default.jpg" alt="Thumbnail" width="64"><span class="vertical-align"></span></span></span></span><span class="playlist-arrow"><img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></span></span></a></div>
                              <div class="yt-lockup-content">
                                 <h3><a class="yt-uix-tile-link result-item-translation-title" dir="ltr" title="yttest101's videos" href="/watch?v=8YaLoXRmRMQ&amp;feature=results_main&amp;playnext=1&amp;list=PL33AA901EB6479621">yttest101's videos</a></h3>
                                 <ul class="playlist-videos">
                                    <li class="playlist-video"><a href="/watch?v=8YaLoXRmRMQ&amp;feature=results_video&amp;playnext=1&amp;list=PL33AA901EB6479621" class="playlist-detail-title"><img class="tiny-video-icon" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="">Klingons Aikido</a></li>
                                    <li class="playlist-video"><a href="/watch?v=dPC8mBjXwcs&amp;feature=results_video&amp;playnext=1&amp;list=PL33AA901EB6479621" class="playlist-detail-title"><img class="tiny-video-icon" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="">Dancelicious Animated logo for dance show</a></li>
                                    <li class="playlist-video"><a href="/watch?v=aHdtJ_tuWQA&amp;feature=results_video&amp;playnext=1&amp;list=PL33AA901EB6479621" class="playlist-detail-title"><img class="tiny-video-icon" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="">Clint Bowyer video</a></li>
                                 </ul>
                                 <div class="yt-lockup-meta">
                                    <ul class="single-line-lego-list">
                                       <li><a href="/results?search_query=playlist" class="yt-badge-std">playlist</a></li>
                                    </ul>
                                    <p class="facets">
                                       <span class="username-prepend">by     <a href="/user/yttest102" class="yt-user-name " dir="ltr">yttest102</a>
                                       </span>
                                       <span class="metadata-separator">|</span>  <a href="/playlist?list=PL33AA901EB6479621" class="video-count">
                                       3 videos
                                       </a>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="yt-grid-box playlist *sr">
                           <div id="" class="yt-uix-tile yt-lockup-list yt-tile-default yt-grid-box ">
                              <div class="yt-lockup-thumbnail"><a class="playlist-thumb" href="/watch?v=PLsJae5aVzo&amp;feature=results_main&amp;playnext=1&amp;list=PL661B8DE72C7C678C"><span class="playlist-large-thumb"><span class="video-thumb ux-thumb yt-thumb-default-138 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="//i1.ytimg.com/vi/PLsJae5aVzo/default.jpg" alt="Thumbnail" width="138"><span class="vertical-align"></span></span></span></span></span></a><a href="/watch?v=FmjmxGGOgVQ"><span class="playlist-small-thumb "><span class="video-thumb ux-thumb yt-thumb-default-64 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="//i3.ytimg.com/vi/FmjmxGGOgVQ/default.jpg" alt="Thumbnail" width="64"><span class="vertical-align"></span></span></span></span></span></a><a href="/watch?v=XvCkWUYIC1A"><span class="playlist-small-thumb "><span class="video-thumb ux-thumb yt-thumb-default-64 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="//i1.ytimg.com/vi/XvCkWUYIC1A/default.jpg" alt="Thumbnail" width="64"><span class="vertical-align"></span></span></span></span></span></a><a href="/watch?v=PLsJae5aVzo"><span class="playlist-small-thumb playlist-small-thumb-last"><span class="video-thumb ux-thumb yt-thumb-default-64 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="//i1.ytimg.com/vi/PLsJae5aVzo/default.jpg" alt="Thumbnail" width="64"><span class="vertical-align"></span></span></span></span><span class="playlist-arrow"><img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""></span></span></a></div>
                              <div class="yt-lockup-content">
                                 <h3><a class="yt-uix-tile-link result-item-translation-title" dir="ltr" title="blah2" href="/watch?v=PLsJae5aVzo&amp;feature=results_main&amp;playnext=1&amp;list=PL661B8DE72C7C678C">blah2</a></h3>
                                 <ul class="playlist-videos">
                                    <li class="playlist-video"><a href="/watch?v=PLsJae5aVzo&amp;feature=results_video&amp;playnext=1&amp;list=PL661B8DE72C7C678C" class="playlist-detail-title"><img class="tiny-video-icon" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="">1203 sin_combo1_3</a></li>
                                    <li class="playlist-video"><a href="/watch?v=FmjmxGGOgVQ&amp;feature=results_video&amp;playnext=1&amp;list=PL661B8DE72C7C678C" class="playlist-detail-title"><img class="tiny-video-icon" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="">1203 kay_combo4_new</a></li>
                                    <li class="playlist-video"><a href="/watch?v=XvCkWUYIC1A&amp;feature=results_video&amp;playnext=1&amp;list=PL661B8DE72C7C678C" class="playlist-detail-title"><img class="tiny-video-icon" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="">Renault 5 Turbo Vs Renault 8 Gordini</a></li>
                                 </ul>
                                 <div class="yt-lockup-meta">
                                    <ul class="single-line-lego-list">
                                       <li><a href="/results?search_query=playlist" class="yt-badge-std">playlist</a></li>
                                    </ul>
                                    <p class="facets">
                                       <span class="username-prepend">by     <a href="/user/ytautomation3" class="yt-user-name " dir="ltr">ytautomation3</a>
                                       </span>
                                       <span class="metadata-separator">|</span>  <a href="/playlist?list=PL661B8DE72C7C678C" class="video-count">
                                       3 videos
                                       </a>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ol>
                  </div>
               </div>
               <div id="search-pva-content">
                  <ul id="search-pva" class="ytg-2col-b ytg-last yt-vertical-rule new-snippets">
                     <li></li>
                     <div id="ad_creative_1" class="ad-div " style="z-index: 1">
                        <iframe id="ad_creative_iframe_1" height="250" width="300" scrolling="no" frameborder="0" style="z-index: 1" src="//ad-emea.doubleclick.net/adi/com.ytsrc.enter/multimediacontent_videoclipsmoviedownloads;sz=300x250;tile=1;plat=pc;dc_dedup=1;kcr=nl;kga=-1;kgg=-1;klg=en;kmyd=ad_creative_1;kr=F;kt=K;kw=site:youtube.com;ord=8412342972014305?"></iframe>
                        <div style="font-size: 10px; padding-top: 3px;" class="alignC grayText">
                           <a href="/t/ads_preferences">
                           Advertisement
                           </a>
                        </div>
                        <script>
                           (function() {
                             var addTimestamp = (Math.floor(Math.random() * 1000) == 0);
                             if (addTimestamp) {
                               var kts = new Date().getTime();
                               var iframeSrc = "//ad-emea.doubleclick.net/adi/com.ytsrc.enter/multimediacontent_videoclipsmoviedownloads;sz=300x250;tile=1;plat=pc;dc_dedup=1;kcr=nl;kga=-1;kgg=-1;klg=en;kmyd=ad_creative_1;kr=F;kt=K;kw=site:youtube.com;kts=" + kts + ";ord=8412342972014305?";
                             } else {
                               var iframeSrc = "//ad-emea.doubleclick.net/adi/com.ytsrc.enter/multimediacontent_videoclipsmoviedownloads;sz=300x250;tile=1;plat=pc;dc_dedup=1;kcr=nl;kga=-1;kgg=-1;klg=en;kmyd=ad_creative_1;kr=F;kt=K;kw=site:youtube.com;ord=8412342972014305?";
                             }
                             var adIframe = document.getElementById("ad_creative_iframe_1");
                             adIframe.src = iframeSrc;
                           })();
                        </script>
                     </div>
                     <p class="ads-promoted">
                        <a href="//support.google.com/youtube/bin/answer.py?answer=143421&amp;hl=en-US" class="grayText">
                        Featured Videos
                        </a>
                     </p>
                     <li class="sidebar-ads  featured yt-uix-tile yt-tile-default">
                        <div class="thumb-container">
                           <a href="http://www.youtube.com/watch?v=U30hHXToi5E" class="ux-thumb-wrap result-item-thumb">
                           <span class="video-thumb ux-thumb yt-thumb-default-138 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="http://i2.ytimg.com/vi/U30hHXToi5E/default.jpg" alt="Thumbnail" width="138"><span class="vertical-align"></span></span></span></span>
                           <span class="video-time">4:45</span>
                           </a>
                        </div>
                        <div class="result-item-main-content">
                           <h3 dir="ltr">
                              <a href="http://www.youtube.com/watch?v=U30hHXToi5E" title="" class="yt-uix-tile-link">Classic Game Room - RAPTOR GAMING LK1 gaming keyboard review</a>
                           </h3>
                           <p class="search-ad-description">
                              <span dir="ltr">Raptor-Gaming LK1 review. Classic Game Room reviews the RAPTOR GAMING ...</span>
                           </p>
                           <p class="facets">
                              <span class="ads-by" dir="ltr">by <a href="/user/InecomCompany?feature=chclk">InecomCompany</a></span>
                              <span class="metadata-separator">|</span>    <strong dir="ltr">32,061 views</strong>
                           </p>
                        </div>
                     </li>
                     <li class="sidebar-ads  featured yt-uix-tile yt-tile-default">
                        <div class="thumb-container">
                           <a href="http://www.youtube.com/watch?v=IWcRtSZMN-Q" class="ux-thumb-wrap result-item-thumb">
                           <span class="video-thumb ux-thumb yt-thumb-default-138 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="http://i2.ytimg.com/vi/IWcRtSZMN-Q/default.jpg" alt="Thumbnail" width="138"><span class="vertical-align"></span></span></span></span>
                           <span class="video-time">15:16</span>
                           </a>
                        </div>
                        <div class="result-item-main-content">
                           <h3 dir="ltr">
                              <a href="http://www.youtube.com/watch?v=IWcRtSZMN-Q" title="" class="yt-uix-tile-link">Coe's Quest - E084 - Educated Farming</a>
                           </h3>
                           <p class="search-ad-description">
                              <span dir="ltr">Thanks to the billions of advice comments I got on the last video, I t...</span>
                           </p>
                           <p class="facets">
                              <span class="ads-by" dir="ltr">by <a href="/user/Coestar?feature=chclk">Coestar</a></span>
                              <span class="metadata-separator">|</span>    <strong dir="ltr">52,079 views</strong>
                           </p>
                        </div>
                     </li>
                     <li class="sidebar-ads  featured yt-uix-tile yt-tile-default">
                        <div class="thumb-container">
                           <a href="http://www.youtube.com/watch?v=CyUkmHBW26g" class="ux-thumb-wrap result-item-thumb">
                           <span class="video-thumb ux-thumb yt-thumb-default-138 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="http://i4.ytimg.com/vi/CyUkmHBW26g/default.jpg" alt="Thumbnail" width="138"><span class="vertical-align"></span></span></span></span>
                           <span class="video-time">2:11:30</span>
                           </a>
                        </div>
                        <div class="result-item-main-content">
                           <h3 dir="ltr">
                              <a href="http://www.youtube.com/watch?v=CyUkmHBW26g" title="" class="yt-uix-tile-link">Jai Santoshi Maa</a>
                           </h3>
                           <p class="search-ad-description">
                              <span dir="ltr">Jai Santoshi Maa Full hindi bollywood movie starring Nusrat Bharucha a...</span>
                           </p>
                           <p class="facets">
                              <span class="ads-by" dir="ltr">by <a href="/user/TheCinecurry?feature=chclk">TheCinecurry</a></span>
                              <span class="metadata-separator">|</span>    <strong dir="ltr">203,619 views</strong>
                           </p>
                        </div>
                     </li>
                     <li class="sidebar-ads  featured yt-uix-tile yt-tile-default">
                        <div class="thumb-container">
                           <a href="http://www.youtube.com/watch?v=iyKsSPHM0wE" class="ux-thumb-wrap result-item-thumb">
                           <span class="video-thumb ux-thumb yt-thumb-default-138 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="http://i2.ytimg.com/vi/iyKsSPHM0wE/default.jpg" alt="Thumbnail" width="138"><span class="vertical-align"></span></span></span></span>
                           <span class="video-time">45:26</span>
                           </a>
                        </div>
                        <div class="result-item-main-content">
                           <h3 dir="ltr">
                              <a href="http://www.youtube.com/watch?v=iyKsSPHM0wE" title="" class="yt-uix-tile-link">This Week in IPad - iPad 2 is here!</a>
                           </h3>
                           <p class="search-ad-description">
                              <span dir="ltr">iPad 2 is here and we got our hands on one! Jacob reviews iMovie, and ...</span>
                           </p>
                           <p class="facets">
                              <span class="ads-by" dir="ltr">by <a href="/user/ThisWeekIn?feature=chclk">ThisWeekIn</a></span>
                              <span class="metadata-separator">|</span>    <strong dir="ltr">160,581 views</strong>
                           </p>
                        </div>
                     </li>
                     <li class="sidebar-ads  featured yt-uix-tile yt-tile-default">
                        <div class="thumb-container">
                           <a href="http://www.youtube.com/watch?v=hZKMBhVoTu8" class="ux-thumb-wrap result-item-thumb">
                           <span class="video-thumb ux-thumb yt-thumb-default-138 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="http://i1.ytimg.com/vi/hZKMBhVoTu8/default.jpg" alt="Thumbnail" width="138"><span class="vertical-align"></span></span></span></span>
                           <span class="video-time">6:34</span>
                           </a>
                        </div>
                        <div class="result-item-main-content">
                           <h3 dir="ltr">
                              <a href="http://www.youtube.com/watch?v=hZKMBhVoTu8" title="" class="yt-uix-tile-link">Metka - Przemiana Frytki - styl i elegancja</a>
                           </h3>
                           <p class="search-ad-description">
                              <span dir="ltr">Zobacz więcej na METKA.wp.tv Celebrytka upodobała sobie ubrania szczeg...</span>
                           </p>
                           <p class="facets">
                              <span class="ads-by" dir="ltr">by <a href="/user/wptvwppl?feature=chclk">wptvwppl</a></span>
                              <span class="metadata-separator">|</span>    <strong dir="ltr">9,494 views</strong>
                           </p>
                        </div>
                     </li>
                     <li class="sidebar-ads  featured yt-uix-tile yt-tile-default">
                        <div class="thumb-container">
                           <a href="http://www.youtube.com/watch?v=hZNaDowboFU" class="ux-thumb-wrap result-item-thumb">
                           <span class="video-thumb ux-thumb yt-thumb-default-138 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="http://i1.ytimg.com/vi/hZNaDowboFU/default.jpg" alt="Thumbnail" width="138"><span class="vertical-align"></span></span></span></span>
                           <span class="video-time">4:52</span>
                           </a>
                        </div>
                        <div class="result-item-main-content">
                           <h3 dir="ltr">
                              <a href="http://www.youtube.com/watch?v=hZNaDowboFU" title="" class="yt-uix-tile-link">The Haul - 5/14/11 - JLovesMac1 AndreasChoice vintageortacky lechatn0ir destinygodley</a>
                           </h3>
                           <p class="search-ad-description">
                              <span dir="ltr">Jarmaine, aka JLovesMac1, hosts a special 25th episode of The Haul wit...</span>
                           </p>
                           <p class="facets">
                              <span class="ads-by" dir="ltr">by <a href="/user/stylehaul?feature=chclk">stylehaul</a></span>
                              <span class="metadata-separator">|</span>    <strong dir="ltr">186,751 views</strong>
                           </p>
                        </div>
                     </li>
                     <li class="sidebar-ads  featured yt-uix-tile yt-tile-default">
                        <div class="thumb-container">
                           <a href="http://www.youtube.com/watch?v=SFkurNxZHkM" class="ux-thumb-wrap result-item-thumb">
                           <span class="video-thumb ux-thumb yt-thumb-default-138 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="http://i4.ytimg.com/vi/SFkurNxZHkM/default.jpg" alt="Thumbnail" width="138"><span class="vertical-align"></span></span></span></span>
                           <span class="video-time">54:45</span>
                           </a>
                        </div>
                        <div class="result-item-main-content">
                           <h3 dir="ltr">
                              <a href="http://www.youtube.com/watch?v=SFkurNxZHkM" title="" class="yt-uix-tile-link">Mists of Pandaria - Updated! Theorycrafting 2.0 with Jesse and Pride</a>
                           </h3>
                           <p class="search-ad-description">
                              <span dir="ltr">See the first video here: www.youtube.com Jesse and Pride officially n...</span>
                           </p>
                           <p class="facets">
                              <span class="ads-by" dir="ltr">by <a href="/user/OMFGcata?feature=chclk">OMFGcata</a></span>
                              <span class="metadata-separator">|</span>    <strong dir="ltr">169,296 views</strong>
                           </p>
                        </div>
                     </li>
                     <li class="sidebar-ads  featured yt-uix-tile yt-tile-default">
                        <div class="thumb-container">
                           <a href="http://www.youtube.com/watch?v=6cAVl1NiyA4" class="ux-thumb-wrap result-item-thumb">
                           <span class="video-thumb ux-thumb yt-thumb-default-138 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="http://i3.ytimg.com/vi/6cAVl1NiyA4/default.jpg" alt="Thumbnail" width="138"><span class="vertical-align"></span></span></span></span>
                           <span class="video-time">27:07</span>
                           </a>
                        </div>
                        <div class="result-item-main-content">
                           <h3 dir="ltr">
                              <a href="http://www.youtube.com/watch?v=6cAVl1NiyA4" title="" class="yt-uix-tile-link">Crochet Geek - Flower Power - Large Crochet Flower</a>
                           </h3>
                           <p class="search-ad-description">
                              <span dir="ltr">Written Instructions crochet-mania.blogspot.com crochet-mania.blogspot...</span>
                           </p>
                           <p class="facets">
                              <span class="ads-by" dir="ltr">by <a href="/user/tjw1963?feature=chclk">tjw1963</a></span>
                              <span class="metadata-separator">|</span>    <strong dir="ltr">52,933 views</strong>
                           </p>
                        </div>
                     </li>
                     <span class="yt-vertical-rule-main"></span>
                     <span class="yt-vertical-rule-corner-top"></span>
                     <span class="yt-vertical-rule-corner-bottom"></span>
                  </ul>
               </div>
            </div>
            <div id="search-footer-box" class="searchFooterBox">
               <div class="yt-uix-pager" role="navigation">
                  <a href="/results?page=1" class="yt-uix-button yt-uix-pager-page-num yt-uix-pager-button yt-uix-button-toggled yt-uix-button-default" data-page="1" aria-label="Go to page 1"><span class="yt-uix-button-content">1</span></a>&nbsp;
                  <a href="/results?page=2" class="yt-uix-button yt-uix-pager-page-num yt-uix-pager-button yt-uix-button-default" data-page="2" aria-label="Go to page 2"><span class="yt-uix-button-content">2</span></a>&nbsp;
                  <a href="/results?page=3" class="yt-uix-button yt-uix-pager-page-num yt-uix-pager-button yt-uix-button-default" data-page="3" aria-label="Go to page 3"><span class="yt-uix-button-content">3</span></a>&nbsp;
                  <a href="/results?page=4" class="yt-uix-button yt-uix-pager-page-num yt-uix-pager-button yt-uix-button-default" data-page="4" aria-label="Go to page 4"><span class="yt-uix-button-content">4</span></a>&nbsp;
                  <a href="/results?page=5" class="yt-uix-button yt-uix-pager-page-num yt-uix-pager-button yt-uix-button-default" data-page="5" aria-label="Go to page 5"><span class="yt-uix-button-content">5</span></a>&nbsp;
                  <a href="/results?page=6" class="yt-uix-button yt-uix-pager-page-num yt-uix-pager-button yt-uix-button-default" data-page="6" aria-label="Go to page 6"><span class="yt-uix-button-content">6</span></a>&nbsp;
                  <a href="/results?page=7" class="yt-uix-button yt-uix-pager-page-num yt-uix-pager-button yt-uix-button-default" data-page="7" aria-label="Go to page 7"><span class="yt-uix-button-content">7</span></a>&nbsp;
                  <a href="/results?page=2" class="yt-uix-button yt-uix-pager-next yt-uix-pager-button yt-uix-button-default" data-page="2"><span class="yt-uix-button-content">Next »</span></a>&nbsp;
               </div>
            </div>
         </div>
         <div id="footer-container"><?php require($_SERVER['DOCUMENT_ROOT'] . "/s/mod/footer.php"); ?></div>
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
                           <li class="empty playlist-bar-help-message">Your queue is empty. Add videos to your queue using this button: <img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="addto-button-help"><br> or <a href="/sign_in">sign in</a> to load a different list.</li>
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
            <a href="/sign_in" class="sign-in-link">Sign in</a> to add this to a playlist
         </div>
         <div id="shared-addto-menu" style="display: none;" class="hid sign-in">
            <div class="addto-menu">
               <div id="addto-list-panel" class="menu-panel active-panel">
                  <span class="yt-uix-button-menu-item yt-uix-tooltip sign-in" data-possible-tooltip="" data-tooltip-show-delay="750"><a href="/sign_in" class="sign-in-link">Sign in</a> to add this to a playlist
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

