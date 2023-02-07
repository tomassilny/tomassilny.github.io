
<html lang="en">
<head>
<meta name="robots" content="noindex,nofollow">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<link rel="icon" href="https://softlogicsoftware.com/wp-content/uploads/2020/07/cropped-softlogic_simple-1-32x32.png">
<title>Tomas Silny</title>
<script src="particles.min.js" charset="utf-8"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css"
/>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
<style>
body {
  background-color: #262626;
  font-family: Montserrat,serif,sans-serif;
  overflow-x: hidden;
  margin: 0;
}
img {
  max-width: 100%;
}

.ag-format-container {
  width: 1160px;
  margin: 0 auto;

  position: relative;
}

.ag-timeline-block {
  padding: 20px 0;
}
.ag-timeline_title-box {
  padding: 0 0 30px;

  text-align: center;
}
.ag-timeline_tagline {
  font-size: 40px;
  color: rgb(84, 89, 95);
}
.ag-timeline_title {
  background-image: url(https://raw.githubusercontent.com/SochavaAG/example-mycode/master/pens/timeline/images/bg.jpg);
  background-repeat: no-repeat;
  background-position: 50% 50%;

  background-size: cover;
  -webkit-background-clip: text;
  background-clip: text;
  color: #4bfbba;
  font-weight: bold;
  font-size: 40px;
}

.ag-timeline_item {
  margin: 0 0 50px;

  position: relative;
}
.ag-timeline_item:nth-child(2n) {
  text-align: right;
}

.ag-timeline {
  display: inline-block;
  width: 100%;
  max-width: 100%;
  margin: 0 auto;

  position: relative;
}
.ag-timeline_line {
  width: 2px;
  background-color: #393935;

  position: absolute;
  top: 2px;
  left: 50%;
  bottom: 0;

  overflow: hidden;

  -webkit-transform: translateX(-50%);
  -moz-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  -o-transform: translateX(-50%);
  transform: translateX(-50%);
}

.ag-timeline_line-progress {
  width: 100%;
  height: 20%;
  background-color: #4bfbba;
}

.ag-timeline-card_box {
  padding: 0 0 20px 50%;
}
.ag-timeline_item:nth-child(2n) .ag-timeline-card_box {
  padding: 0 50% 20px 0;
}
.ag-timeline-card_point-box {
  display: inline-block;
  margin: 0 14px 0 -28px;
}
.ag-timeline_item:nth-child(2n) .ag-timeline-card_point-box {
  margin: 0 -28px 0 14px;
}
.ag-timeline-card_point {
  height: 50px;
  line-height: 50px;
  width: 50px;
  border: 3px solid #4bfbba;
  background-color: #1d1d1b;

  text-align: center;
  font-size: 17px;
  color: #FFF;

  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
}
.js-ag-active .ag-timeline-card_point {
  color: #1d1d1b;
  background-color: #4bfbba;
}
.ag-timeline-card_meta-box {
  display: inline-block;
}
.ag-timeline-card_meta {
  margin: 10px 0 0;

  font-weight: bold;
  font-size: 28px;
  color: #4bfbba;
}
.ag-timeline-card_meta_descr{
  margin: 10px 0 0;

  font-size: 16px;
  color: #fff;
}
.ag-timeline-card_meta_descr a{
  color: #4bfbba;
  text-decoration: underline;
}
.ag-timeline-card_item {
  display: inline-block;
  width: 45%;
  margin: -77px 0 0;
  background-color: #282828;

  opacity: 0;

  -webkit-border-radius: 6px;
  -moz-border-radius: 6px;
  border-radius: 6px;

  -webkit-box-shadow: 0 0 0 0 rgba(0,0,0,.5);
  -moz-box-shadow: 0 0 0 0 rgba(0,0,0,.5);
  -o-box-shadow: 0 0 0 0 rgba(0,0,0,.5);
  box-shadow: 0 0 0 0 rgba(0,0,0,.5);

  -webkit-transition: -webkit-transform .5s, opacity .5s;
  -moz-transition: -moz-transform .5s, opacity .5s;
  -o-transition: -o-transform .5s, opacity .5s;
  transition: transform .5s, opacity .5s;

  position: relative;
}
.ag-timeline_item:nth-child(2n+1) .ag-timeline-card_item {
  -webkit-transform: translateX(-200%);
  -moz-transform: translateX(-200%);
  -ms-transform: translateX(-200%);
  -o-transform: translateX(-200%);
  transform: translateX(-200%);
}
.ag-timeline_item:nth-child(2n) .ag-timeline-card_item {
  -webkit-transform: translateX(200%);
  -moz-transform: translateX(200%);
  -ms-transform: translateX(200%);
  -o-transform: translateX(200%);
  transform: translateX(200%);
}
.js-ag-active.ag-timeline_item:nth-child(2n+1) .ag-timeline-card_item,
.js-ag-active.ag-timeline_item:nth-child(2n) .ag-timeline-card_item {
  opacity: 1;

  -webkit-transform: translateX(0);
  -moz-transform: translateX(0);
  -ms-transform: translateX(0);
  -o-transform: translateX(0);
  transform: translateX(0);
}
.ag-timeline-card_arrow {
  height: 18px;
  width: 18px;
  margin-top: 20px;
  background-color: #282828;

  z-index: -1;
  position: absolute;
  top: 0;
  right: 0;

  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  transform: rotate(45deg);
}
.ag-timeline_item:nth-child(2n+1) .ag-timeline-card_arrow {
  margin-left: calc(-18px / 2);
  margin-right: calc(-18px / 2);
}
.ag-timeline_item:nth-child(2n) .ag-timeline-card_arrow {
  margin-left: -10px;

  right: auto;
  left: 0;
}
.ag-timeline-card_img {
  width: 100%;
}
.ag-timeline-card_info {
  padding: 20px 30px;
}
.ag-timeline-card_title {
  display: none;
  margin: 10px 0 0;

  font-weight: bold;
  font-size: 18px;
  color: #4bfbba;
}
.ag-timeline-card_desc {
  line-height: 1.45;

  font-size: 16px;
  color: #FFF;
}


@media only screen and (max-width: 979px) {
  .ag-timeline_line {
    left: 30px;
  }

  .ag-timeline_item:nth-child(2n) {
    text-align: left;
  }

  .ag-timeline-card_box,
  .ag-timeline_item:nth-child(2n) .ag-timeline-card_box {
    padding: 0 0 20px;
  }
  .ag-timeline-card_meta-box {
    display: none;
  }
  .ag-timeline-card_point-box,
  .ag-timeline_item:nth-child(2n) .ag-timeline-card_point-box {
    margin: 0 0 0 8px;
  }
  .ag-timeline-card_point {
    height: 40px;
    line-height: 40px;
    width: 40px;
  }
  .ag-timeline-card_item {
    width: auto;
    margin: -65px 0 0 75px
  }
  .ag-timeline_item:nth-child(2n+1) .ag-timeline-card_item,
  .ag-timeline_item:nth-child(2n) .ag-timeline-card_item {
    -webkit-transform: translateX(200%);
    -moz-transform: translateX(200%);
    -ms-transform: translateX(200%);
    -o-transform: translateX(200%);
    transform: translateX(200%);
  }
  .ag-timeline_item:nth-child(2n+1) .ag-timeline-card_arrow {
    right: auto;
    left: 0;
  }
  .ag-timeline-card_title {
    display: block;
  }
  .ag-timeline-card_arrow {
    margin-top: 12px;
  }
}

@media only screen and (max-width: 767px) {
  .ag-format-container {
    width: 96%;
  }

  .ag-timeline-card_img {
    height: auto;
    width: auto;
  }
}

@media only screen and (max-width: 639px) {
  .ag-timeline_title {
    font-size: 60px;
  }

  .ag-timeline-card_info {
    padding: 10px 15px;
  }
  .ag-timeline-card_desc {
    font-size: 14px;
  }
}

@media only screen and (max-width: 479px) {

}

@media (min-width: 768px) and (max-width: 979px) {
  .ag-format-container {
    width: 750px;
  }

}

@media (min-width: 980px) and (max-width: 1161px) {
  .ag-format-container {
    width: 960px;
  }

}
a{
  text-decoration: none;
}

.social-buttons{
  margin-bottom: 100px;
}
.social-buttons a{
  margin-right: 10px;
}
</style>

<script>
(function ($) {
  $(function () {


    $(window).on('scroll', function () {
      fnOnScroll();
    });

    $(window).on('resize', function () {
      fnOnResize();
    });


    var agTimeline = $('.js-timeline'),
      agTimelineLine = $('.js-timeline_line'),
      agTimelineLineProgress = $('.js-timeline_line-progress'),
      agTimelinePoint = $('.js-timeline-card_point-box'),
      agTimelineItem = $('.js-timeline_item'),
      agOuterHeight = $(window).outerHeight(),
      agHeight = $(window).height(),
      f = -1,
      agFlag = false;

    function fnOnScroll() {
      agPosY = $(window).scrollTop();

      fnUpdateFrame();
    }

    function fnOnResize() {
      agPosY = $(window).scrollTop();
      agHeight = $(window).height();

      fnUpdateFrame();
    }

    function fnUpdateWindow() {
      agFlag = false;

      agTimelineLine.css({
        top: agTimelineItem.first().find(agTimelinePoint).offset().top - agTimelineItem.first().offset().top,
        bottom: agTimeline.offset().top + agTimeline.outerHeight() - agTimelineItem.last().find(agTimelinePoint).offset().top
      });

      f !== agPosY && (f = agPosY, agHeight, fnUpdateProgress());
    }

    function fnUpdateProgress() {
      var agTop = agTimelineItem.last().find(agTimelinePoint).offset().top;

      i = agTop + agPosY - $(window).scrollTop();
      a = agTimelineLineProgress.offset().top + agPosY - $(window).scrollTop();
      n = agPosY - a + agOuterHeight / 2;
      i <= agPosY + agOuterHeight / 2 && (n = i - a);
      agTimelineLineProgress.css({height: n + "px"});

      agTimelineItem.each(function () {
        var agTop = $(this).find(agTimelinePoint).offset().top;

        (agTop + agPosY - $(window).scrollTop()) < agPosY + .5 * agOuterHeight ? $(this).addClass('js-ag-active') : $(this).removeClass('js-ag-active');
      })
    }

    function fnUpdateFrame() {
      agFlag || requestAnimationFrame(fnUpdateWindow);
      agFlag = true;
    }


  });
})(jQuery);

particlesJS.load('particles-js', 'particles.json', function() {
  console.log('callback - particles.js config loaded');
});

</script>
</head>
<body>
<div id="particles-js" style="position:absolute;width:100%;height:100%;z-index:-1;"></div>

<div class="ag-timeline-block">
  <div class="ag-timeline_title-box">
    <div class="social-buttons">
      <a target="_blank" href="https://www.linkedin.com/in/tomas-silny/">
        <img src="linkedin.png" width="40" alt="Social button"/>
      </a>
      <a target="_blank" href="https://www.github.com/tomassilny">
        <img src="github.png" width="40" alt="Social button"/>
      </a>
      <a target="_blank" href="https://stackoverflow.com/users/5236839/tomassilny">
        <img src="stackoverflow.png" width="40" alt="Social button"/>
      </a>
      <a target="_blank" href="https://www.facebook.com/tsilny">
        <img src="fb.png" width="40" alt="Social button"/>
      </a>
      <a target="_blank" href="https://www.softlogicsoftware.com">
        <img src="www.png" width="40" alt="Social button"/>
      </a>
    </div>
    <img src="photo.png" width="150" alt="Me" style="border-radius:50%;border: 5px solid #fff;margin-bottom:10px;z-index:500;"/>
    <div class="ag-timeline_title">Tomas Silny, MSc.</div>
    <p style="color:#fff;text-align:center;padding-left:30%;padding-right:30%;margin-bottom:80px;">Welcome to my Portfolio. I'm a passionate Web & Mobile Developer from <span class="fi fi-sk"></span> <span class="fi fi-eu"></span> moving to Toronto
      <span class="fi fi-ca"></span> in January. Here you can find more details about some of my finished projects in chronological order. If you want to know more about me, please visit my
      <a target="_blank" href="https://www.linkedin.com/in/tomas-silny/" style="color:#4bfbba;text-decoration:underline;">
        <img src="linkedin.png" width="12" alt="Social button"/> Linkedin
      </a> or <a href="TomasSilny_CV2.pdf" target="_blank" style="color:#4bfbba;text-decoration:underline;">Download my resume</a>. </p>
  </div>
  <section class="ag-section">
    <div class="ag-format-container">
      <div class="js-timeline ag-timeline">
        <div class="js-timeline_line ag-timeline_line">
          <div class="js-timeline_line-progress ag-timeline_line-progress"></div>
        </div>
        <div class="ag-timeline_list">
          <div class="js-timeline_item ag-timeline_item">
            <div class="ag-timeline-card_box">
              <div class="js-timeline-card_point-box ag-timeline-card_point-box">
                <div class="ag-timeline-card_point">2022</div>
              </div>
              <div class="ag-timeline-card_meta-box">
                <div class="ag-timeline-card_meta">MeowVPN</div>
                <div class="ag-timeline-card_meta_descr"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
  <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
</svg>&nbsp;September 2022 - December 2022</div>
                <div class="ag-timeline-card_meta_descr"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-code-slash" viewBox="0 0 16 16">
  <path d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294l4-13zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0zm6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0z"/>
</svg>
 React, Laravel (PHP), WordPress, C#, WPF</div>
<div class="ag-timeline-card_meta_descr">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">
 <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z"/>
 <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z"/>
 </svg>&nbsp;<a href="https://meowvpn.com" target="_blank">https://meowvpn.com</a></div>
              </div>
            </div>
            <div class="ag-timeline-card_item">
              <div class="ag-timeline-card_inner">
                <div class="ag-timeline-card_img-box">
                  <img src="meow.jpg" class="ag-timeline-card_img" width="640" height="300" style="object-fit:cover;" />
                </div>
                <div class="ag-timeline-card_info">
                  <div class="ag-timeline-card_title">MeowVPN</div>
                  <div class="ag-timeline-card_desc">
                    My own free and unlimited VPN service. You can download either Windows App (BETA) or Android App (apk).
                    This service is managing 20+ free VPN networks around the world. Our scripts are checking every day if the
                    networks are correctly runnings and they are regularly updating the list of available VPN networks. I built this
                    project in my free time because I was tired of paid and limited VPN networks.
                  </div>
                </div>
              </div>
              <div class="ag-timeline-card_arrow"></div>
            </div>
          </div>

          <div class="js-timeline_item ag-timeline_item">
            <div class="ag-timeline-card_box">
                        <div class="ag-timeline-card_meta-box" style="margin-right:25px;">
                  <div class="ag-timeline-card_meta">Body Motion</div>
                  <div class="ag-timeline-card_meta_descr"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
          <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
          <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
          </svg>&nbsp;December 2019 - January 2023</div>
                  <div class="ag-timeline-card_meta_descr"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-code-slash" viewBox="0 0 16 16">
          <path d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294l4-13zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0zm6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0z"/>
          </svg>
          React, React Native, NextJS, C#, Laravel (PHP), Unity, Azure</div>
          <div class="ag-timeline-card_meta_descr">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">
          <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z"/>
          <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z"/>
        </svg>&nbsp;<a href="https://bodymotion.vercel.app" target="_blank">https://bodymotion.vercel.app</a></div>
        <div class="ag-timeline-card_meta_descr">Test account: tomas.silny7@gmail.com, password: password</div>
                </div>
              <div class="js-timeline-card_point-box ag-timeline-card_point-box" style="margin-top: -40px;">
                <div class="ag-timeline-card_point">2022</div>
              </div>
            </div>
            <div class="ag-timeline-card_item">
              <div class="ag-timeline-card_inner">
                <div class="ag-timeline-card_img-box">
                  <img src="body.jpg" class="ag-timeline-card_img" width="640" height="270" style="object-fit:cover;" />
                </div>
                <div class="ag-timeline-card_info">
                  <div class="ag-timeline-card_title">Body Motion</div>
                  <div class="ag-timeline-card_desc">
                    I developed an app for Body Motion analysis together with doctors - neurologists. I started working on this in December 2019 during my study at the university. Later in June 2021, I started working on this project as a full-time full-stack developer. We created a company called SensoHealth Solutions s.r.o. which is focusing on research in human body movements. Today I am still working for this company as a consultant. My responsibility was to develop the frontend and backend as well. We also created our own hardware - a wireless 3D camera where I participated as a C# developer.
                  </div>
                </div>
              </div>
              <div class="ag-timeline-card_arrow"></div>
            </div>
          </div>

          <div class="js-timeline_item ag-timeline_item">
            <div class="ag-timeline-card_box">
              <div class="js-timeline-card_point-box ag-timeline-card_point-box">
                <div class="ag-timeline-card_point">2022</div>
              </div>
              <div class="ag-timeline-card_meta-box">
                <div class="ag-timeline-card_meta">ByteShare</div>
                <div class="ag-timeline-card_meta_descr"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
  <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
</svg>&nbsp;September 2021 - November 2022</div>
                <div class="ag-timeline-card_meta_descr"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-code-slash" viewBox="0 0 16 16">
  <path d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294l4-13zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0zm6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0z"/>
  </svg>
  Laravel (PHP), Python, SQL, JavaScript, CDN</div>
  <div class="ag-timeline-card_meta_descr">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">
  <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z"/>
  <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z"/>
</svg>&nbsp;<a href="https://byteshare.net" target="_blank">https://byteshare.net</a></div>
              </div>
            </div>
            <div class="ag-timeline-card_item">
              <div class="ag-timeline-card_inner">
                <div class="ag-timeline-card_img-box">
                  <img src="byteshare.jpg" class="ag-timeline-card_img" width="640" height="330" style="object-fit:cover;" />
                </div>
                <div class="ag-timeline-card_info">
                  <div class="ag-timeline-card_title">ByteShare</div>
                  <div class="ag-timeline-card_desc">
                    File manager that allows uploading large files including remote upload from any URL, via FTP and my own built API. I built this
                    project in my free time. You can try to create a new account and try to upload some files. You can share those files or make
                    them available public in our list on the homepage.
                  </div>
                </div>
              </div>
              <div class="ag-timeline-card_arrow"></div>
            </div>
          </div>



          <div class="js-timeline_item ag-timeline_item">
            <div class="ag-timeline-card_box">
                        <div class="ag-timeline-card_meta-box" style="margin-right:25px;">
                  <div class="ag-timeline-card_meta">CodeDocs</div>
                  <div class="ag-timeline-card_meta_descr"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
          <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
          <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
        </svg>&nbsp;March 2021 - April 2021</div>
                  <div class="ag-timeline-card_meta_descr"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-code-slash" viewBox="0 0 16 16">
          <path d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294l4-13zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0zm6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0z"/>
          </svg>
          Plain HTML, CSS, JS and SQL</div>
          <div class="ag-timeline-card_meta_descr">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">
          <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z"/>
          <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z"/>
        </svg>&nbsp;<a href="https://codedocs.org" target="_blank">https://codedocs.org</a></div>
                </div>
              <div class="js-timeline-card_point-box ag-timeline-card_point-box" style="margin-top: -40px;">
                <div class="ag-timeline-card_point">2021</div>
              </div>
            </div>
            <div class="ag-timeline-card_item">
              <div class="ag-timeline-card_inner">
                <div class="ag-timeline-card_img-box">
                  <img src="code.jpg" class="ag-timeline-card_img" width="640" height="300" style="object-fit:cover;" />
                </div>
                <div class="ag-timeline-card_info">
                  <div class="ag-timeline-card_title">CodeDocs</div>
                  <div class="ag-timeline-card_desc">
                    Website generated using Wikipedia API. This includes more than 5000 generated pages about software development and IT.
                  </div>
                </div>
              </div>
              <div class="ag-timeline-card_arrow"></div>
            </div>
          </div>

          <div class="js-timeline_item ag-timeline_item">
            <div class="ag-timeline-card_box">
              <div class="js-timeline-card_point-box ag-timeline-card_point-box">
                <div class="ag-timeline-card_point">2021</div>
              </div>
              <div class="ag-timeline-card_meta-box">
                <div class="ag-timeline-card_meta">Unigram</div>
                <div class="ag-timeline-card_meta_descr"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
      </svg>&nbsp;September 2020 - February 2021</div>
                <div class="ag-timeline-card_meta_descr"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-code-slash" viewBox="0 0 16 16">
        <path d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294l4-13zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0zm6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0z"/>
        </svg>
        React Native, Laravel (PHP), MySQL, Expo</div>
        <div class="ag-timeline-card_meta_descr">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">
        <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z"/>
        <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z"/>
      </svg>&nbsp;<a href="https://github.com/tomassilny/unigram-social-network" target="_blank">Unigram on GitHub</a></div>
              </div>
            </div>
            <div class="ag-timeline-card_item">
              <div class="ag-timeline-card_inner">
                <div class="ag-timeline-card_img-box">
                  <img src="unigram.png" class="ag-timeline-card_img" width="640" height="300" style="object-fit:cover;" />
                </div>
                <div class="ag-timeline-card_info">
                  <div class="ag-timeline-card_title">Unigram</div>
                  <div class="ag-timeline-card_desc">
                    I built a Social Network App for students with my friend from university. This network allows you to find and follow your friends, share images and your opinions among your friends and this app allows you to chat with your friend or make a group. It is basically a copy of Instagram.
                  </div>
                </div>
              </div>
              <div class="ag-timeline-card_arrow"></div>
            </div>
          </div>


          <div class="js-timeline_item ag-timeline_item">
            <div class="ag-timeline-card_box">
                        <div class="ag-timeline-card_meta-box" style="margin-right:25px;">
                  <div class="ag-timeline-card_meta">Explorea</div>
                  <div class="ag-timeline-card_meta_descr"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
          <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
          <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
        </svg>&nbsp;January 2021</div>
                  <div class="ag-timeline-card_meta_descr"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-code-slash" viewBox="0 0 16 16">
          <path d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294l4-13zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0zm6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0z"/>
          </svg>
          React Native, TypeScript, PHP, MySQL</div>
          <div class="ag-timeline-card_meta_descr">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">
          <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z"/>
          <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z"/>
        </svg>&nbsp;<a href="https://github.com/tomassilny/explorea" target="_blank">Explorea on GitHub</a></div>
                </div>
              <div class="js-timeline-card_point-box ag-timeline-card_point-box" style="margin-top: -40px;">
                <div class="ag-timeline-card_point">2021</div>
              </div>
            </div>
            <div class="ag-timeline-card_item">
              <div class="ag-timeline-card_inner">
                <div class="ag-timeline-card_img-box">
                  <img src="explo.png" class="ag-timeline-card_img" width="640" height="300" style="object-fit:cover;" />
                </div>
                <div class="ag-timeline-card_info">
                  <div class="ag-timeline-card_title">Explorea</div>
                  <div class="ag-timeline-card_desc">
                    Explorea is a really simple React Mobile App that allows finding interesting places near you to discover. It allows you to save this
                      point, find more information about this point and request a place to add to the Exploria. This App is using PHP as the backend. The places
                      have been generated using a free API.
                  </div>
                </div>
              </div>
              <div class="ag-timeline-card_arrow"></div>
            </div>
          </div>

          <div class="js-timeline_item ag-timeline_item">
            <div class="ag-timeline-card_box">
              <div class="js-timeline-card_point-box ag-timeline-card_point-box">
                <div class="ag-timeline-card_point">2019</div>
              </div>
              <div class="ag-timeline-card_meta-box">
                <div class="ag-timeline-card_meta">Bank App</div>
                <div class="ag-timeline-card_meta_descr"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
      </svg>&nbsp;November 2019 - December 2019</div>
                <div class="ag-timeline-card_meta_descr"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-code-slash" viewBox="0 0 16 16">
        <path d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294l4-13zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0zm6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0z"/>
        </svg>
        React Native, Expo</div>
        <div class="ag-timeline-card_meta_descr">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">
        <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z"/>
        <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z"/>
      </svg>&nbsp;<a href="https://github.com/tomassilny/bank-app-reactjs" target="_blank">Bank App on GitHub</a></div>
              </div>
            </div>
            <div class="ag-timeline-card_item">
              <div class="ag-timeline-card_inner">
                <div class="ag-timeline-card_img-box">
                  <img src="bank.png" class="ag-timeline-card_img" width="640" height="300" style="object-fit:cover;" />
                </div>
                <div class="ag-timeline-card_info">
                  <div class="ag-timeline-card_title">Bank App</div>
                  <div class="ag-timeline-card_desc">
                    My first React Native application. Just simple fronted with charts and interesting interactive UI. Source code available on GitHub.
                  </div>
                </div>
              </div>
              <div class="ag-timeline-card_arrow"></div>
            </div>
          </div>

          <div class="js-timeline_item ag-timeline_item">
            <div class="ag-timeline-card_box">
                        <div class="ag-timeline-card_meta-box" style="margin-right:25px;">
                  <div class="ag-timeline-card_meta">Melodie</div>
                  <div class="ag-timeline-card_meta_descr"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
          <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
          <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
        </svg>&nbsp;July 2019 - December 2019</div>
                  <div class="ag-timeline-card_meta_descr"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-code-slash" viewBox="0 0 16 16">
          <path d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294l4-13zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0zm6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0z"/>
          </svg>
          Java, PHP, MySQL, Android SDK</div>
          <div class="ag-timeline-card_meta_descr">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">
          <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z"/>
          <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z"/>
        </svg>&nbsp;<a href="https://github.com/tomassilny/melodie-free-music-app" target="_blank">Melodie on GitHub</a></div>
                </div>
              <div class="js-timeline-card_point-box ag-timeline-card_point-box" style="margin-top: -40px;">
                <div class="ag-timeline-card_point">2019</div>
              </div>
            </div>
            <div class="ag-timeline-card_item">
              <div class="ag-timeline-card_inner">
                <div class="ag-timeline-card_img-box">
                  <img src="melodie.png" class="ag-timeline-card_img" width="640" height="300" style="object-fit:cover;" />
                </div>
                <div class="ag-timeline-card_info">
                  <div class="ag-timeline-card_title">Melodie</div>
                  <div class="ag-timeline-card_desc">
                    App for listening to free music using YouTube API. This app allows you to show a chart of the TOP 50 songs from any country,
                    play music in the background, add songs to playlists, and search for any song. This app was not published because it was violating Google
                    policies so I had to remove the background play and for now is app is only available on my GitHub.
                  </div>
                </div>
              </div>
              <div class="ag-timeline-card_arrow"></div>
            </div>
          </div>


        </div>

        <p style="color:#fff;text-align:center;font-size: 20px;">For more references please visit my     <a style="color:#4bfbba;text-decoration:underline;" target="_blank" href="https://www.github.com/tomassilny">
              <img src="github.png" width="40" alt="Social button"/> Github
            </a></p>
      </div>
    </div>
  </section>
</div>

<div style="width:100%;padding:20px;text-align:center;background-color:#000;color:#fff;">
 <span>Tomas Silny &copy; <?php echo date('Y'); ?></span>
</div>

</body>
</html>
