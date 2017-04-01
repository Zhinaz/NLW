<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>Nøvling Lan Week</title>
  
  <?php include filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/includes/body.php'; ?>
</head>

<body>
  <?php include filter_input(INPUT_SERVER, 'DOCUMENT_ROOT'). '/includes/upper-body.php'; ?>
  
  <div class="row">
    <div class="col-md-6">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h1 class="panel-title-large">Nyheder</h1>
        </div>
        <div class="panel-body">
          <div id="fb-root"></div>
            <script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/da_DK/sdk.js#xfbml=1&version=v2.8";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
          <div class="fb-page" data-href="https://www.facebook.com/NovlingLANWeek/" data-tabs="timeline" data-width="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/NovlingLANWeek/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/NovlingLANWeek/">Nøvling LAN Week - NLW</a></blockquote></div>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h1 class="panel-title-large">Konkurrencer</h1>
        </div>
        <div class="panel-body header-div">
          <div class="col-md-6 col-sm-6 col-xs-6 header-div-sub">
            <a  href="<?php echo filter_input(INPUT_SERVER, '__DIR__').'/konkurrence/counterstrike';?>"><img class="img-responsive tournament-image" src="/images/logo/cs-logo.png" alt="CS Tournament" height="80"></a>
            <!--<button type="button" class="btn btn-default">Tilmeld</button>-->
          </div>
          <div class="col-md-6 col-sm-6 col-xs-6 header-div-sub">
            <a href="<?php echo filter_input(INPUT_SERVER, '__DIR__').'/konkurrence/trackmania';?>"><img class="img-responsive tournament-image" src="/images/logo/trackmania-logo.png" alt="TM Tournament" height="80"></a>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-6 header-div-sub">
            <a href="<?php echo filter_input(INPUT_SERVER, '__DIR__').'/konkurrence/minecraft';?>"><img class="img-responsive tournament-image" src="/images/logo/minecraft-logo.png" alt="MC Tournament" height="80"></a>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-6 header-div-sub">
            <a href="<?php echo filter_input(INPUT_SERVER, '__DIR__').'/konkurrence/dinturnering';?>"><img class="img-responsive tournament-image" src="/images/logo/custom-logo.png" alt="Din Tournament" height="80"></a>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-6 header-div-sub">
            <a href="<?php echo filter_input(INPUT_SERVER, '__DIR__').'/konkurrence/udendors';?>"><img class="img-responsive tournament-image" src="/images/logo/udendors-logo.png" alt="Udendors" height="80"></a>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-6 header-div-sub">
            <a href="<?php echo filter_input(INPUT_SERVER, '__DIR__').'/konkurrence/feelinglucky';?>"><img class="img-responsive tournament-image" src="/images/logo/lucky-logo.png" alt="Feeling lucky" height="80"></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h1 class="panel-title-large">Program</h1>
    </div>
    <div class="panel-body">
      <div class="media">
        <div class="media-left">
          <img class="img-rounded" src="images/logo-program.PNG" alt="program-logo" height="170px" width="170px">
        </div>
        <div class="media-body">
          <p>Læs her program oversigten over det kommende NLW</p>
          <p><a class="btn btn-default btn-lg" href="<?php echo filter_input(INPUT_SERVER, '__DIR__').'/program';?>" role="button">Program</a></p>
        </div>
      </div>
    </div>
  </div>
  
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h1 class="panel-title-large">Kontakt</h1>
    </div>
    <div class="panel-body">
      <div class="media">
        <div class="media-left">
          <img class="img-rounded" src="images/logo-program.PNG" alt="program-logo" height="170px" width="170px">
        </div>
        <div class="media-body">
          <p>Tag kontakt til NLW's crew hvis du har spørgsmål omkring arrangementet</p>
          <p><a class="btn btn-default btn-lg" href="<?php echo filter_input(INPUT_SERVER, '__DIR__').'/kontakt';?>" role="button">Kontakt</a></p>
        </div>
      </div>
    </div>
  </div>
  
  <?php include filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/includes/lower-body.php';?>
</body>
</html>