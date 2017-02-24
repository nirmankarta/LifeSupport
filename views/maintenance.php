<?php
/*
 * Plugin Name: Life Support
 * Plugin URI: https://www.nirmankarta.com
 * Description: Wordpress plugin to display a custom maintenance mode page for anyone who's not logged in.
 * Version: 1.0
 * Author: Prabhanshu, Nirmankarta (http:///prabhanshu.com)
 * Author URI: https://www.nirmankarta.com
 *
 * @package life-support
 * @copyright Copyright (c) 2016
 * @license AGPL3
*/
?>
<html>
<head>
  <title>Veja Du | Prabhanshu Attri</title>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
  <link href='<?php echo plugins_url( 'assets/css/style.css', dirname( __FILE__ ) ); ?>' rel='stylesheet' type='text/css'>
  
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
      <span><a href="mailto:contact@prabhanshu.com" target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i></a> <a href="/twitter" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a> <a href="/linkedin" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a> <a href="/quora" target="_blank"><i class="fa fa-quora" aria-hidden="true"></i></a> <a href="/github-repo" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a></span>
    </p>
  </div>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="<?php echo plugins_url( 'assets/js/my-terminal.js', dirname( __FILE__ ) ); ?>"></script>
</body>
</html>
                            
                            
