

<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/config.inc.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/db_helper.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/time_manip.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/user_helper.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/s/classes/video_helper.php"); ?>

<?php $__video_h = new video_helper($__db); ?>
<?php $__user_h = new user_helper($__db); ?>
<?php $__db_h = new db_helper(); ?>
<?php $__time_h = new time_helper(); ?>
<!DOCTYPE html>
<html>
   <head>
      <title><?php echo $__server->page_embeds->page_title; ?></title>
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
                              <div class="yt-lockup-thumbnail"><a href="/watch?v=k0BWlvnBmIE" class="ux-thumb-wrap contains-addto result-item-thumb"><span class="video-thumb ux-thumb yt-thumb-default-138 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="//i4.ytimg.com/vi/k0BWlvnBmIE/default.jpg" alt="Thumbnail" onerror="this.onerror=null;this.src='/dynamic/thumbs/default.jpg';" width="138"><span class="vertical-align"></span></span></span></span><span class="video-time">4:37</span>
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
                           <span class="video-thumb ux-thumb yt-thumb-default-138 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="http://i2.ytimg.com/vi/U30hHXToi5E/default.jpg" alt="Thumbnail" onerror="this.onerror=null;this.src='/dynamic/thumbs/default.jpg';" width="138"><span class="vertical-align"></span></span></span></span>
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
                           <span class="video-thumb ux-thumb yt-thumb-default-138 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="http://i2.ytimg.com/vi/IWcRtSZMN-Q/default.jpg" alt="Thumbnail" onerror="this.onerror=null;this.src='/dynamic/thumbs/default.jpg';" width="138"><span class="vertical-align"></span></span></span></span>
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
                           <span class="video-thumb ux-thumb yt-thumb-default-138 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="http://i4.ytimg.com/vi/CyUkmHBW26g/default.jpg" alt="Thumbnail" onerror="this.onerror=null;this.src='/dynamic/thumbs/default.jpg';" width="138"><span class="vertical-align"></span></span></span></span>
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
                           <span class="video-thumb ux-thumb yt-thumb-default-138 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="http://i2.ytimg.com/vi/iyKsSPHM0wE/default.jpg" alt="Thumbnail" onerror="this.onerror=null;this.src='/dynamic/thumbs/default.jpg';" width="138"><span class="vertical-align"></span></span></span></span>
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
                           <span class="video-thumb ux-thumb yt-thumb-default-138 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="http://i1.ytimg.com/vi/hZKMBhVoTu8/default.jpg" alt="Thumbnail" onerror="this.onerror=null;this.src='/dynamic/thumbs/default.jpg';" width="138"><span class="vertical-align"></span></span></span></span>
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
                           <span class="video-thumb ux-thumb yt-thumb-default-138 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="http://i1.ytimg.com/vi/hZNaDowboFU/default.jpg" alt="Thumbnail" onerror="this.onerror=null;this.src='/dynamic/thumbs/default.jpg';" width="138"><span class="vertical-align"></span></span></span></span>
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
                           <span class="video-thumb ux-thumb yt-thumb-default-138 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="http://i4.ytimg.com/vi/SFkurNxZHkM/default.jpg" alt="Thumbnail" onerror="this.onerror=null;this.src='/dynamic/thumbs/default.jpg';" width="138"><span class="vertical-align"></span></span></span></span>
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
                           <span class="video-thumb ux-thumb yt-thumb-default-138 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="http://i3.ytimg.com/vi/6cAVl1NiyA4/default.jpg" alt="Thumbnail" onerror="this.onerror=null;this.src='/dynamic/thumbs/default.jpg';" width="138"><span class="vertical-align"></span></span></span></span>
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
                  <!--<div class="playlist-bar-next-thumb"><span class="video-thumb ux-thumb yt-thumb-default-74 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="//i4.ytimg.com/vi/__video_encrypted_id__/default.jpg" alt="Thumbnail" onerror="this.onerror=null;this.src='/dynamic/thumbs/default.jpg';" width="74" ><span class="vertical-align"></span></span></span></span></div>-->
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

