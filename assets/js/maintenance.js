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
 
$(document).ready(function(){
  $.getJSON('http://freegeoip.net/json/?callback=?', function(data) {
    $(function() {
      var dateTime = new Date().toLocaleString();
      var ip =  '127.0.0.1';
      if(typeof data.ip !== 'undefined') {
        ip = data.ip;
      }
      var tl=new Array(
        "Linux prabhanshu.com 3.2.0-4-amd64 #1 SMP Debian 3.2.60-1+deb7u3 x86_64",
        "Last login: " + dateTime + " from " + ip,
        "The requested document is no more.",
        "No file found.",
        "Even tried multi.",
        "Nothing helped.",
        "I'm really depressed about this.",
        "You see, I'm just a web server...",
        "-- here I am, brain the size of the universe,",
        "trying to serve you a simple web page,",
        "and then it doesn't even exist!",
        "Where does that leave me?!",
        "I mean, I don't even know you.",
        "How should I know what you wanted from me?",
        "You honestly think I can *guess*",
        "what someone I don't even *know*",
        "wants to find here?",
        "*sigh*",
        "Man, I'm so depressed I could just cry.",
        "And then where would we be, I ask you?",
        "It's not pretty when a web server cries.",
        "And where do you get off telling me what to show anyway?",
        "Just because I'm a web server,",
        "and possibly a manic depressive one at that?",
        "Why does that give you the right to tell me what to do?",
        "Huh?",
        "I'm so depressed...",
        "I think I'll crawl off into the trash can and decompose.",
        "I mean, I'm gonna be obsolete in what, two weeks anyway?",
        "What kind of a life is that?",
        "Two effing weeks,",
        "and then I'll be replaced by a .01 release,",
        "that thinks it's God's gift to web servers,",
        "just because it doesn't have some tiddly little",
        "security hole with its HTTP POST implementation,",
        "or something.",
        "I'm really sorry to burden you with all this,",
        "I mean, it's not your job to listen to my problems,",
        "and I guess it is my job to go and fetch web pages for you.",
        "But I couldn't get this one.",
        "I'm so sorry.",
        "Believe me!",
        "Maybe I could interest you in another page?",
        "There are a lot out there that are pretty neat, they say,",
        "although none of them were put on *my* server, of course.",
        "Figures, huh?",
        "Everything here is just mind-numbingly stupid.",
        "That makes me depressed too, since I have to serve them,",
        "all day and all night long.",
        "Two weeks of information overload,",
        "and then *pffftt*, consigned to the trash.",
        "What kind of a life is that?",
        "Now, please let me sulk alone.",
        "I'm so depressed.",
        "logout",
        "Connection closed",
        "exit",
        "[Process completed]"
      );
      var detailCount = 2;
      var speed=60;
      var index=0; text_pos=0;
      var str_length=tl[0].length;
      var contents, row;
      
      function type_text() {
        contents='';
        row=Math.max(0,index-7);
        var terminalText = "prabhanshu.com:~ root$ ";
        while(row<index) {
          if (row<detailCount || row == (tl.length - 1) || row == (tl.length - 3))
            contents += tl[row++] + '<br/>';
          else
            contents +=  terminalText + tl[row++] + '<br/>';
        }
        var objDiv = document.getElementById('shell-body');
        objDiv.scrollTop = objDiv.scrollHeight;
      
        if(index<detailCount || index == (tl.length - 1) || index == (tl.length - 3)) {
          document.getElementById('shell-body').innerHTML = contents
            + tl[index].substring(0,text_pos) + "<a class='blink'>_</a>";
        } else {
          document.getElementById('shell-body').innerHTML = contents
            + terminalText + tl[index].substring(0,text_pos) + "<a class='blink'>_</a>";
        }
        if(text_pos++ == str_length) {
          text_pos = 0;
          index++;
          if(index < detailCount || index == (tl.length - 1) || index == (tl.length - 3)) {
            str_length = tl[index].length;
            setTimeout(type_text,0);
          } else if(index != tl.length) {
            str_length = tl[index].length;
            setTimeout(type_text,1500);
          }
        } else {
          setTimeout(type_text,speed);
        }
      }

      type_text();
    });
  });
});