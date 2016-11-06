<?php
/*
 * Plugin Name: LifeSupport
 * Plugin URI: https://www.nirmankarta.com
 * Description: Wordpress plugin to display a custom maintenance mode page for anyone who's not logged in.
 * Version: 1.0
 * Author: Prabhanshu, Nirmankarta (http:///prabhanshu.com)
 * Author URI: https://www.nirmankarta.com
 * License: GPL2
 *
 * @package maintenance-mode
 * @copyright Copyright (c) 2016
 * @license AGPL-3.0
*/

/**
 * LifeSupport
 *
 * Wordpress plugin to display the coming soon page for anyone who's not logged in.
 * The login page gets excluded so that you can login if necessary.
 *
 * @return void
 */
?>
<html>
<head>
  <title>Veja Du | Prabhanshu Attri</title>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
  <link href='/wp-content/plugins/maintenance-mode/assets/css/maintenance.css' rel='stylesheet' type='text/css'>
  
</head>
<body>
  <div id="primary" class="content-area">
    <h1 class="entry-title">Uh oh! I am working on my website.</h1>
    <div class="shell-wrap">
      <p class="shell-top-bar">webserver@prabhanshu.com ~/root</p>
      <div class="shell-body span12" id="shell-body"></div>
    </div>
    <p class="footer">
      <span>It looks like server is spilling some beans. Please ignore.</span><br/><br/>
      <span>Let&#39;s get connected</span><br/><br/>
      <span><a href="mailto:contact/prabhanshu.com" target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i></a> <a href="/linkedin" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a> <a href="/twitter" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a> <a href="/quora" target="_blank"><i class="fa fa-quora" aria-hidden="true"></i></a></span>
    </p>
  </div>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="/wp-content/plugins/maintenance-mode/assets/js/maintenance.js"></script>
</body>
</html>
                            