<!DOCTYPE html>
<html>
  <head>
    <title>Home</title>
    <link rel='icon' href='ellipsisIcon.png' type='image/x-icon'/>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto+Slab&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=stylesheet href=index.css>
    <script type="text/javascript" src = "script.js"></script>
    <div class=topnav id=myTopnav>
      <a href=index.php><img class="logo" src=ellipsisLong.svg></a>
      <div class="container" onclick="menuBtnToggle(this)">
        <span class="menuBtn" onclick="openOrCloseNav()">
          <div class="bar1"></div>
          <div class="bar2"></div>
          <div class="bar3"></div>
      
        </span>
    </div>
      <div id="mySidenav" class="sidenav">
        
        <a href=index.php>Home</a>
        <a href=about.php>About us</a>
        <a href=latestMeditations.html>Latest</a>
        <a href=search.html>Search</a>
        <a href=data.php style=color:black>Test</a>
        
      </div>
      
      
    </div>
    <?php 
      $articles = array(
        array("The First Autobiography: Augustine's Confessions","augustine.jpeg","meditation4.html","Thoughts on the work and the author.","Desmond Jones"),
        array("Thoughts on London's \"Sea-Wolf\".","jlondon.jpeg","meditation3.html","Is the will to power admirable or reprehensible?","Eric Claassen"),
      );
      $article1 = array(
        "title" => "The First Autobiography: Augustine's Confessions",
        "img" => "augustineMeditating.jpg",
        "link" => "meditation4.html",
      );
      $article2 = array(
        "title" => "Thoughts on London's \"Sea-Wolf\".",
        "img" => "seawolfPic.jpg",
      );
      $sideVal = array(
        "<a href=index.html>Home</a>",
        "<a href=latestMeditations.html>Latest</a>",
        "<a href=search.html>Search</a>",
        "<a href=test.html style=color:black>Test</a>",
      );
      ?>
    <h1 style="margin-bottom: 5%;">About us</h1>
  
  </head>
  <body>
    <div id="rSidebar" class = "rSidebar">
      <script type="text/javascript" src="//rf.revolvermaps.com/0/0/8.js?i=59xkqm0n5p1&amp;m=6&amp;c=ff0000&amp;cr1=ffffff&amp;f=arial&amp;l=33" async="async"></script>
    </div>
    
<div class="writingBody">
      
    <blockquote>"Man is a mystery: if you spend your entire life trying to puzzle it out, then do not say that you have wasted your time. I occupy myself with this mystery, because I want to be a man.” </blockquote>
<div class="writings">
    <p>&emsp;&emsp;Ellipsis is a meditative publication that aims to find and develop the omissions made by the ellipses of modern culture. This publication hopes to make these ellipses develop and mature into complete ideas that you may carry forever. May you develop the ellipses in your own life, and get closer to solving the mystery of man.</p>
  <div class="signature">
    <p style="text-align:right">
      Sincerely,<br>
      Desmond Jones <br> Founder and editor of Ellipsis
      </p>
      <img src="djSignature.svg">
      </div>
    </div>
    </div>  
  </div>
    </div>
<br>
<hr style="margin-top:15%">
<div class="endList">
  <?php
    foreach($articles as $article){
      echo "
    <a href=". $article[2] ." style=\"text-decoration:none;color:black;\">
    <div class=paneUpdate id=myPane style=\"margin-top:2%\">
    <img src=". $article[1] .">
    <div class=banner-text>
    <h4>" . $article[0] ."</h4>
    <p>". $article[3] ."</p>
       <h5>" . $article[4] . "</h5>
    </div>
  </div></a>
  "
  ;
    }
    
  ?>
</div>
<style>
.footer {
  position: bottom;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: whitesmoke;
  color: black;
  text-align: left;
}
.footerText{
  margin-left: 5%
}
</style>



<hr style="margin-top:15%">
<div class=topnav id=myTopnav style="margin-top:2.5%">
      <a href=index.html style="color:black;text-decoration:none">Contact us</a>
      <a href=latestMeditations.html style="color:black;text-decoration:none">&emsp;The Latest Meditations</a>
      <a href=search.html style="color:black;text-decoration:none">&emsp;Search</a>
      <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><img alt="Creative Commons License" style="border-width:0;float:right;" src="https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png" /></a>
    </div>

<!--
<div class="footer">
  <p class="footerText">Footer</p>
</div>
-->

  </body>
</html>
