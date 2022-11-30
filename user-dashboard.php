
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "headerScript.php"?>
  </head>
  <body>
  
  <aside class="sidebar">

<div class="toggle">
  <a href="#" class="burger js-menu-toggle" data-toggle="collapse" data-target="#main-navbar">
        <span></span>
      </a>
</div>

<div class="side-inner">

  
  <div class="nav-menu">
    <ul>
      <li class="active"><a href="#"><span class="icon-home mr-3"></span>Feed</a></li>
      <li><a href="#"><span class="icon-search2 mr-3"></span>Explore</a></li>
      <li><a href="#"><span class="icon-notifications mr-3"></span>Notifications</a></li>
      <li><a href="#"><span class="icon-location-arrow mr-3"></span>Direct</a></li>
      <li><a href="#"><span class="icon-pie-chart mr-3"></span>Stats</a></li>
      <li><a href="#"><span class="icon-sign-out mr-3"></span>Sign out</a></li>
    </ul>
  </div>
</div>

</aside>
<main>

</main>
    
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script>
document.write(  alert("this section is under construction"))
// 
$(function () {
  "use strict";

  $(".js-menu-toggle").click(function (e) {
    var $this = $(this);

    if ($("body").hasClass("show-sidebar")) {
      $("body").removeClass("show-sidebar");
      $this.removeClass("active");
    } else {
      $("body").addClass("show-sidebar");
      $this.addClass("active");
    }

    e.preventDefault();
  });

  // click outisde offcanvas
  $(document).mouseup(function (e) {
    var container = $(".sidebar");
    if (!container.is(e.target) && container.has(e.target).length === 0) {
      if ($("body").hasClass("show-sidebar")) {
        $("body").removeClass("show-sidebar");
        $("body").find(".js-menu-toggle").removeClass("active");
      }
    }
  });
});
</script>
  <body>
  </html>  