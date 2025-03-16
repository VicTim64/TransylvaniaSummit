<?php
require_once( 'speakers.php' );

?>
<!DOCTYPE html>
<html data-wf-page="660a7f150de08fa8f4e221ae" data-wf-site="65fa9f8900e1a6ad89ad8940">
<head>
  <meta charset="utf-8">
  <title>Speakers</title>
  <meta content="The most important networking event of the year from Transylvania" name="description">
  <meta content="Speakers" property="og:title">
  <meta content="The most important networking event of the year from Transylvania" property="og:description">
  <meta content="Speakers" property="twitter:title">
  <meta content="The most important networking event of the year from Transylvania" property="twitter:description">
  <meta property="og:type" content="website">
  <meta content="summary_large_image" name="twitter:card">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="../css/normalize.css" rel="stylesheet" type="text/css">
  <link href="../css/webflow.css" rel="stylesheet" type="text/css">
  <link href="../css/transylvania-summit-77ca1c.webflow.css" rel="stylesheet" type="text/css">
  <link href="../css/custom.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Barlow Condensed:regular,500,600,700,800,900","Barlow:300,regular,italic,500,600,700"]  }});</script>
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="https://transylvaniasummit.com/favicon-16x16.png" rel="shortcut icon" type="image/x-icon">
  <link href="https://transylvaniasummit.com/apple-touch-icon.png" rel="apple-touch-icon">
  <style>
	body {
  		-webkit-font-smoothing: antialiased;
  		-moz-osx-font-smoothing: grayscale;
	}
</style>
</head>
<body class="body">
  <div data-collapse="medium" data-animation="default" data-duration="400" style="opacity:0" data-easing="ease" data-easing2="ease" role="banner" class="navbar w-nav">
    <a href="https://transylvaniasummit.com/" class="brand white absolute w-nav-brand"></a>
    <nav role="navigation" class="nav-menu w-nav-menu">
      <div class="nav-menu-wrapper margin-tablet">
        <div class="display-none-mobile">
          <div class="caption font-white">Share</div>
          <div class="separator-line-horiz white"></div>
        </div>
        <a href="https://www.instagram.com/fouroomdotco/" target="_blank" class="icn-social-small facebook w-inline-block"></a>
        <a href="https://www.instagram.com/fouroomdotco/" target="_blank" class="icn-social-small twitter w-inline-block"></a>
        <a href="https://www.instagram.com/fouroomdotco/" target="_blank" class="icn-social-small linkedin w-inline-block"></a>
      </div>
    </nav>
    <div class="menu-button w-nav-button">
      <div class="w-icon-nav-menu"></div>
    </div>
  </div>
  <div class="main overflow-hidden bg-dark-grey">
    <div class="section">
      <div class="container large">
        <div class="content centered margin-paragraph_4x">
          <div data-w-id="5a60f18f-5444-f682-c6c1-8c98fad62a4f" style="-webkit-transform:translate3d(0, 16PX, 0) scale3d(0.9, 0.9, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 16PX, 0) scale3d(0.9, 0.9, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 16PX, 0) scale3d(0.9, 0.9, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 16PX, 0) scale3d(0.9, 0.9, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="show-item-onscroll margin-paragraph">
            <h2 class="display-2"  style="color:#ad9950">All the confirmed speakers <br />of the second edition of<br /><span>Transylvania Summit</span> </h2>
          </div>
        </div>
        <div class="w-layout-grid grid-speaker custom-grid">
            <?php
            $r = 1;
            $counter = count($speakers);
            foreach( $speakers as $speaker ) { ?>
                    <a id="" href="#" target="_blank" class="trigger w-inline-block">
                        <div class="content font-white">
                        <div class="show-item-onscroll"><img src="images/<?php echo $speaker['image']; ?>" sizes="(max-width: 479px) 93vw, (max-width: 767px) 92vw, (max-width: 909px) 88vw, 800px" srcset="images/<?php echo $speaker['image']; ?> 500w, images/<?php echo $speaker['image']; ?> 800w" alt="" class="margin-paragraph_2x"></div>
                        <div class="profile-description-shift right-padding">
                            <div class="show-item-onscroll">
                                <h4 class="uppercase margin-paragraph_half"><?php echo addBreakAfterFirstWord( $speaker['name'] ); ?></h4>
                            </div>
                            <div class="show-item-onscroll">
                                <div class="font-yellow margin-paragraph"><?php echo $speaker['title']; ?></div>
                            </div>
                            <div class="show-item-onscroll">
                            <div class="caption font-dim-grey margin-paragraph"><?php echo $speaker['description']; ?></div>
                            <div href="#" data-w-id="e0644dd8-bdfa-f767-b73f-ebfa28b3b88e" style="color:rgb(255,255,255)" class="button">
                                <div>Explore more</div>
                                <div style="width:10%" class="line-2"></div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </a>
            <?php 
                if ($r % 4 == 0 || $r == $counter) {
                    echo '</div><div class="w-layout-grid grid-speaker custom-grid">';
                }
       
            
            $r++; }
            ?>
          
        </div>
        
        
        
        
        
        
        
        
      </div>
    </div>
    <div data-w-id="45b9b5a5-926e-65e0-19df-c79de8eed6cc">
      <div class="section">
        <div class="container">
          <div data-w-id="061d75a7-65e2-9069-ae44-033e61f41b49" class="w-layout-grid grid-6 no-gap">
            <div id="w-node-_061d75a7-65e2-9069-ae44-033e61f41b4a-f4e221ae" class="section no-padding">
              <div class="bg-color white"></div>
              <div class="img-wrapper small stretch">
                <div class="bg-image education-home_3"></div>
              </div>
            </div>
            <div id="w-node-_061d75a7-65e2-9069-ae44-033e61f41b4e-f4e221ae" class="section centered">
              <div class="bg-color white"></div>
              <div class="content xs centered font-dark-grey">
                <div data-w-id="8933947d-09f6-8dc5-bb69-4174a6261137" style="-webkit-transform:translate3d(0, 16PX, 0) scale3d(0.9, 0.9, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 16PX, 0) scale3d(0.9, 0.9, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 16PX, 0) scale3d(0.9, 0.9, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 16PX, 0) scale3d(0.9, 0.9, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="show-item-onscroll">
                  <div class="font-yellow uppercase">Early Birds</div>
                </div>
                <div data-w-id="8933947d-09f6-8dc5-bb69-4174a626113a" style="-webkit-transform:translate3d(0, 16PX, 0) scale3d(0.9, 0.9, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 16PX, 0) scale3d(0.9, 0.9, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 16PX, 0) scale3d(0.9, 0.9, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 16PX, 0) scale3d(0.9, 0.9, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="show-item-onscroll margin-paragraph_2x">
                  <h2 class="display-2 small">Get early access<br></h2>
                </div>
                <div data-w-id="8933947d-09f6-8dc5-bb69-4174a626113e" style="-webkit-transform:translate3d(0, 16PX, 0) scale3d(0.9, 0.9, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 16PX, 0) scale3d(0.9, 0.9, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 16PX, 0) scale3d(0.9, 0.9, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 16PX, 0) scale3d(0.9, 0.9, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="show-item-onscroll margin-paragraph_2x">
                  <div>Be the first to experience Conferencos before it’s publically available.<br></div>
                </div>
                <div class="show-item-onscroll width-100">
                  <div class="form-block w-form">
                  <form id="email-form" action="https://transylvaniasummit.com/invite.php" name="email-form" data-name="Email Form" method="POST" data-wf-page-id="65fa9f8900e1a6ad89ad8984" data-wf-element-id="8933947d-09f6-8dc5-bb69-4174a6261144">
                      <div class="text-field-wrapper">
                        <div class="text-field-label">Email address</div><input class="text-field w-input" maxlength="256" name="Email-7" data-name="Email 7" placeholder="" type="email" id="Email-7" required="">
                      </div>
                      <input type="email" name="emailn" id="email-type-field">
                      <button type="submit" data-w-id="8933947d-09f6-8dc5-bb69-4174a6261149" style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" href="#" class="btn w-inline-block">
                        <div style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="btn-label">Get early access</div>
                        <div class="btn-hover purple"></div>
                        <div class="bg-color yellow"></div>
                      </button>
                    </form>
                    <div class="success-message w-form-done">
                      <div>Thank you! Your submission has been received!</div>
                    </div>
                    <div class="error-message w-form-fail">
                      <div>Oops! Something went wrong while submitting the form.</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="absolute">
          <div class="w-layout-grid grid-6 no-gap height-100">
            <div id="w-node-_061d75a7-65e2-9069-ae44-033e61f41b63-f4e221ae" class="content">
              <div class="bg-color dark-grey"></div>
            </div>
            <div id="w-node-_061d75a7-65e2-9069-ae44-033e61f41b65-f4e221ae" class="content"><img src="../images/shape-bottom-2.svg" alt="" class="img-shape"></div>
          </div>
        </div>
      </div>
      <div class="section">
        <div class="content centered">
          <div class="show-item-onscroll introduction">A grandiose private networking event, in the middle of Transylvania, about:<br>• the future of technologies • global economy • blockchain • investment opportunities in Romania <br></div>
        </div>
        <div class="bg-color dark-grey"></div>
      </div>
      <div class="section">
        <div class="bg-color dark-purple"></div>
        <div class="w-layout-grid main-grid">
          <div id="w-node-_147ce491-59b4-98ea-0255-9dd00d53371a-f4e221ae" class="content centered">
            <div class="show-item-onload margin-paragraph"><img src="../images/Orion_world-map.svg" alt="" class="icn-64 margin-paragraph_2x">
              <h1 class="display-1 small"><span class="marked">27-28 April 2024</span><br>Târgu Mureș</h1>
            </div>
            <div class="show-item-onload margin-paragraph_4x">
              <h5 class="display-3">Plaza Hotel<br></h5>
            </div>
          </div>
          <div id="w-node-_147ce491-59b4-98ea-0255-9dd00d533727-f4e221ae" class="content centered">
            <div class="container medium margin-bottom">
              <div class="w-layout-grid grid-contact border">
                <div id="w-node-_147ce491-59b4-98ea-0255-9dd00d53372a-f4e221ae" class="section padding-2rem">
                  <div class="content centered">
                    <div class="show-item-onload margin-paragraph">
                      <div class="font-yellow uppercase">General Request</div>
                    </div>
                    <div class="show-item-onload">
                      <a href="mailto:Info@conferencos.com" class="link-block w-inline-block">
                        <div class="uppercase font-white">contact@transylvaniasummit.com</div>
                        <div class="hover-line white"></div>
                      </a>
                    </div>
                  </div>
                </div>
                <div id="w-node-_147ce491-59b4-98ea-0255-9dd00d533734-f4e221ae" class="section padding-2rem">
                  <div class="line-left"></div>
                  <div class="content centered">
                    <div class="show-item-onload margin-paragraph">
                      <div class="font-yellow uppercase">Press</div>
                    </div>
                    <div class="show-item-onload">
                      <a href="mailto:press@conferencos.com" class="link-block w-inline-block">
                        <div class="uppercase font-white">press@transylvaniasummit.com</div>
                        <div class="hover-line white"></div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section no-padding overflow-hidden">
        <div class="container centered"><img src="../images/path.svg" alt="" class="img-path margin-paragraph_4x">
          <a data-w-id="a9331986-4ac1-6b93-4367-231d4e62f58e" style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" href="https://www.instagram.com/fouroomdotco/" target="_blank" class="btn w-inline-block">
            <div class="bg-color yellow"></div><img src="../images/Orion_entrance.svg" alt="" class="btn-icon">
            <div style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="btn-label">Get an invite</div>
            <div class="btn-hover purple"></div>
          </a>
          <div data-w-id="1e7b1239-747d-ce4d-0ec1-7e99236ed65d" style="display:none" class="path-hider"></div>
        </div>
        <div class="bg-color dark-grey"></div>
      </div>
      <div class="section">
        <div class="bg-color dark-grey"></div>
        <div class="container">
          <div class="w-layout-grid grid-conference-info border margin-paragraph_4x">
            <div id="w-node-_234090fd-b8e2-b374-7a8d-2642bc85cd56-f4e221ae" class="section padding-2rem"></div>
            <div id="w-node-_234090fd-b8e2-b374-7a8d-2642bc85cd60-f4e221ae" class="section padding-2rem">
              <div class="content centered">
                <div class="font-yellow uppercase margin-paragraph">Powered by</div>
                <a href="https://webflow.com/" target="_blank" class="horizontal centered w-inline-block"><img src="../images/logo_transylvania.png" alt="" class="logo-hosted"></a>
              </div>
            </div>
            <div id="w-node-_234090fd-b8e2-b374-7a8d-2642bc85cd67-f4e221ae" class="section padding-2rem"></div>
          </div>
          <div class="content centered">
            <div class="horizontal margin-paragraph_2x">
              <a href="https://www.instagram.com/fouroomdotco/" target="_blank" class="icn-social-big facebook w-inline-block"></a>
              <a href="https://www.instagram.com/fouroomdotco/" target="_blank" class="icn-social-big twitter w-inline-block"></a>
              <a href="https://www.instagram.com/fouroomdotco/" target="_blank" class="icn-social-big linkedin w-inline-block"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div style="-webkit-transform:translate3d(140%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(10DEG, 0);-moz-transform:translate3d(140%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(10DEG, 0);-ms-transform:translate3d(140%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(10DEG, 0);transform:translate3d(140%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(10DEG, 0);display:none" class="details">
    <a data-w-id="57b6f287-f8d1-4b12-4aea-8dba3eaaf15e" href="#" class="btn close w-inline-block">
      <div class="btn-label">Close</div>
      <div class="btn-hover purple"></div>
    </a>
    <div class="section scroll">
      <h2 class="display-2 small margin-paragraph">The details</h2>
      <p class="introduction small margin-paragraph_2x">All you need to know before joining us for this event.</p>
      <div class="uppercase font-yellow">What’s included?</div>
      <div class="margin-paragraph">Your ticket gives access to the hands-on workshops and intimate nightly discussions. Dinner and drinks will be included each night.</div>
      <div class="uppercase font-yellow">What’s included?</div>
      <div class="margin-paragraph">Your ticket gives access to the hands-on workshops and intimate nightly discussions. Dinner and drinks will be included each night.</div>
      <div class="uppercase font-yellow">FAQ</div>
      <div class="margin-paragraph">Your ticket gives access to the hands-on workshops and intimate nightly discussions. Dinner and drinks will be included each night.</div>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=65fa9f8900e1a6ad89ad8940" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="../js/webflow.js" type="text/javascript"></script>
</body>
</html>