<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Villa Agency - Real Estate HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-villa-agency.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!--

TemplateMo 591 villa agency

https://templatemo.com/tm-591-villa-agency

-->
<style>
    /*

TemplateMo 591 villa agency

https://templatemo.com/tm-591-villa-agency

*/

/* ---------------------------------------------
Table of contents
------------------------------------------------
01. font & reset css
02. reset
03. global styles
04. header
05. banner
06. features
07. testimonials
08. contact
09. footer

--------------------------------------------- */
/*
---------------------------------------------
font & reset css
---------------------------------------------
*/
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900");
/*
---------------------------------------------
reset
---------------------------------------------
*/
html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, div
pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, font, img, ins, kbd, q,
s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li,
figure, header, nav, section, article, aside, footer, figcaption {
  margin: 0;
  padding: 0;
  border: 0;
  outline: 0;
}

.clearfix:after {
  content: ".";
  display: block;
  clear: both;
  visibility: hidden;
  line-height: 0;
  height: 0;
}

.clearfix {
  display: inline-block;
}

html[xmlns] .clearfix {
  display: block;
}

* html .clearfix {
  height: 1%;
}

ul, li {
  padding: 0;
  margin: 0;
  list-style: none;
}

header, nav, section, article, aside, footer, hgroup {
  display: block;
}

* {
  box-sizing: border-box;
}

html, body {
  font-family: 'Poppins', sans-serif;
  -ms-text-size-adjust: 100%;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

a {
  text-decoration: none !important;
}

h1, h2, h3, h4, h5, h6 {
  color: #1e1e1e;
  margin-top: 0px;
  margin-bottom: 0px;
  font-weight: 700;
}

ul {
  margin-bottom: 0px;
}

p {
  font-size: 14px;
  line-height: 28px;
  color: #4a4a4a;
}

img {
  width: 100%;
  overflow: hidden;
}

/*
---------------------------------------------
Global Styles
---------------------------------------------
*/
html,
body {
  font-family: 'Poppins', sans-serif;
}

::selection {
  background: #0071f8;
  color: #fff;
}

::-moz-selection {
  background: #0071f8;
  color: #fff;
}

.section {
  margin-top: 120px;
}

.section-heading {
  margin-bottom: 70px;
}

.section-heading h2 {
  font-size: 40px;
  font-weight: 700;
  text-transform: capitalize;
  margin-top: 20px;
  line-height: 56px;
}

.section-heading h2 em {
  font-style: normal;
  color: #0071f8;
}

.section-heading h6 {
  color: #ee626b;
  font-size: 15px;
  text-transform: uppercase;
  font-weight: 700;
}

.icon-button a {
  display: inline-block;
  background-color: #1e1e1e;
  color: #fff;
  font-size: 14px;
  font-weight: 400;
  height: 50px;
  line-height: 50px;
  padding: 0px 30px 0px 0px;
  border-radius: 25px;
  transition: all .3s;
}

.icon-button a i {
  background-color: #f35525;
  height: 50px;
  width: 50px;
  text-align: center;
  border-radius: 50%;
  line-height: 50px;
  display: inline-block;
  margin-right: 15px;
  margin-left: -1px;
}

.icon-button a:hover {
  color: #f35525;
}

.icon-button a:hover i {
  color: #fff;
}

.main-button a {
  display: inline-block;
  background-color: #1e1e1e;
  color: #fff;
  font-size: 14px;
  font-weight: 500;
  height: 40px;
  line-height: 40px;
  padding: 0px 30px;
  border-radius: 25px;
  transition: all .3s;
}

.main-button a:hover {
  background-color: #f35525;
  color: #fff;
}

/*
---------------------------------------------
Pre-loader Style
---------------------------------------------
*/

.js-preloader {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.99);
  display: -webkit-box;
  display: flex;
  -webkit-box-align: center;
  align-items: center;
  -webkit-box-pack: center;
  justify-content: center;
  opacity: 1;
  visibility: visible;
  z-index: 9999;
  -webkit-transition: opacity 0.25s ease;
  transition: opacity 0.25s ease;
}

.js-preloader.loaded {
  opacity: 0;
  visibility: hidden;
  pointer-events: none;
}

@-webkit-keyframes dot {
  50% {
      -webkit-transform: translateX(96px);
      transform: translateX(96px);
  }
}

@keyframes dot {
  50% {
      -webkit-transform: translateX(96px);
      transform: translateX(96px);
  }
}

@-webkit-keyframes dots {
  50% {
      -webkit-transform: translateX(-31px);
      transform: translateX(-31px);
  }
}

@keyframes dots {
  50% {
      -webkit-transform: translateX(-31px);
      transform: translateX(-31px);
  }
}

.preloader-inner {
  position: relative;
  width: 142px;
  height: 40px;
  background: transparent;
}

.preloader-inner .dot {
  position: absolute;
  width: 16px;
  height: 16px;
  top: 12px;
  left: 15px;
  background: #f35525;
  border-radius: 50%;
  -webkit-transform: translateX(0);
  transform: translateX(0);
  -webkit-animation: dot 2.8s infinite;
  animation: dot 2.8s infinite;
}

.preloader-inner .dots {
  -webkit-transform: translateX(0);
  transform: translateX(0);
  margin-top: 12px;
  margin-left: 31px;
  -webkit-animation: dots 2.8s infinite;
  animation: dots 2.8s infinite;
}

.preloader-inner .dots span {
  display: block;
  float: left;
  width: 16px;
  height: 16px;
  margin-left: 16px;
  background: #f35525;
  border-radius: 50%;
}



/*
---------------------------------------------
Header Style
---------------------------------------------
*/

.sub-header {
  background-color: #fff;
  padding: 10px 0px;
  border-bottom: 1px solid #eee;
}

.sub-header ul li {
  display: inline-block;
}

.sub-header ul.social-links {
  text-align: right;
}

.sub-header ul.social-links li {
  margin-left: 8px;
}

.sub-header ul.social-links li a {
  display: inline-block;
  width: 30px;
  height: 30px;
  background-color: #cdcdcd;
  border-radius: 50%;
  text-align: center;
  line-height: 30px;
  color: #fff;
  font-size: 14px;
  transition: all .3s;
}

.sub-header ul.social-links li a:hover {
  background-color: #f35525;
}

.sub-header ul.info li {
  font-size: 14px;
  color: #7a7a7a;
  border-right: 1px solid #eee;
  margin-right: 25px;
  padding-right: 25px;
}

.sub-header ul.info li:last-child {
  margin-right: 0px;
  padding-right: 0px;
  border-right: none;
}

.sub-header ul.info li i {
  font-size: 20px;
  color: #f35525;
  margin-right: 8px;
}

.background-header {
  background-color: #fff;
  height: 80px!important;
  position: fixed!important;
  top: 0!important;
  left: 0;
  right: 0;
  box-shadow: 0px 0px 10px rgba(0,0,0,0.15)!important;
  -webkit-transition: all .5s ease 0s;
  -moz-transition: all .5s ease 0s;
  -o-transition: all .5s ease 0s;
  transition: all .5s ease 0s;
}

.header-area {
  position: relative;
  background-color: #fff;
  height: 100px;
  z-index: 100;
  -webkit-transition: all .5s ease 0s;
  -moz-transition: all .5s ease 0s;
  -o-transition: all .5s ease 0s;
  transition: all .5s ease 0s;
}

.header-area .main-nav {
  background: transparent;
  display: flex;
}

.header-area .main-nav .logo {
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  display: inline-block;
}

.header-area .main-nav .logo h1 {
  line-height: 100px;
  font-size: 28px;
  text-transform: uppercase;
  color: #1e1e1e;
  font-weight: 700;
  letter-spacing: 2px;
}

.background-header .main-nav .logo h1 {
  line-height: 80px;
}

.header-area .main-nav ul.nav {
  flex-basis: 100%;
  margin-top: 30px;
  justify-content: right;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  position: relative;
  z-index: 999;
}

.header-area .main-nav .nav li:last-child {
  padding-right: 0px;
}

.header-area .main-nav .nav li {
  padding-left: 10px;
  padding-right: 10px;
  height: 100px;
  line-height: 100px;
}

.header-area .main-nav .nav li a {
  display: block;
  padding-left: 20px;
  padding-right: 20px;
  font-weight: 500;
  font-size: 15px;
  height: 40px;
  line-height: 40px;
  text-transform: capitalize;
  color: #1e1e1e;
  -webkit-transition: all 0.4s ease 0s;
  -moz-transition: all 0.4s ease 0s;
  -o-transition: all 0.4s ease 0s;
  transition: all 0.4s ease 0s;
  border: transparent;
  letter-spacing: .25px;
}

.header-area .main-nav .nav li:last-child a {
  background-color: #1e1e1e;
  color: #fff;
  font-size: 14px;
  font-weight: 400;
  text-transform: none;
  border-radius: 20px;
  padding-left: 0px;
}

.header-area .main-nav .nav li:last-child a i {
  background-color: #f35525;
  display: inline-block;
  width: 40px;
  height: 40px;
  text-align: center;
  line-height: 40px;
  margin-right: 10px;
  border-radius: 50%;
  margin-left: -1px;
}

.header-area .main-nav .nav li:last-child:hover a {
  background-color: #1e1e1e;
}

.header-area .main-nav .nav li:last-child:hover a i {
  color: #fff;
}

.header-area .main-nav .nav li:hover a {
  color: #f35525;
}

.header-area .main-nav .nav li a.active {
  color: #f35525;
}


.background-header .main-nav .nav li a.active {
  color: #f35525;
}

.header-area .main-nav .menu-trigger {
  cursor: pointer;
  position: absolute;
  top: 23px;
  width: 32px;
  height: 40px;
  text-indent: -9999em;
  z-index: 99;
  right: 20px;
  display: none;
}

.background-header .main-nav .menu-trigger {
  top: 22px;
}

.background-header .main-nav ul.nav {
  margin-top: 20px;
}

.header-area .main-nav .menu-trigger span,
.header-area .main-nav .menu-trigger span:before,
.header-area .main-nav .menu-trigger span:after {
  -moz-transition: all 0.4s;
  -o-transition: all 0.4s;
  -webkit-transition: all 0.4s;
  transition: all 0.4s;
  background-color: #1e1e1e;
  display: block;
  position: absolute;
  width: 30px;
  height: 2px;
  left: 0;
}

.header-area .main-nav .menu-trigger span:before,
.header-area .main-nav .menu-trigger span:after {
  -moz-transition: all 0.4s;
  -o-transition: all 0.4s;
  -webkit-transition: all 0.4s;
  transition: all 0.4s;
  background-color: #1e1e1e;
  display: block;
  position: absolute;
  width: 30px;
  height: 2px;
  left: 0;
  width: 75%;
}

.header-area .main-nav .menu-trigger span:before,
.header-area .main-nav .menu-trigger span:after {
  content: "";
}

.header-area .main-nav .menu-trigger span {
  top: 16px;
}

.header-area .main-nav .menu-trigger span:before {
  -moz-transform-origin: 33% 100%;
  -ms-transform-origin: 33% 100%;
  -webkit-transform-origin: 33% 100%;
  transform-origin: 33% 100%;
  top: -10px;
  z-index: 10;
}

.header-area .main-nav .menu-trigger span:after {
  -moz-transform-origin: 33% 0;
  -ms-transform-origin: 33% 0;
  -webkit-transform-origin: 33% 0;
  transform-origin: 33% 0;
  top: 10px;
}

.header-area .main-nav .menu-trigger.active span,
.header-area .main-nav .menu-trigger.active span:before,
.header-area .main-nav .menu-trigger.active span:after {
  background-color: transparent;
  width: 100%;
}

.header-area .main-nav .menu-trigger.active span:before {
  -moz-transform: translateY(6px) translateX(1px) rotate(45deg);
  -ms-transform: translateY(6px) translateX(1px) rotate(45deg);
  -webkit-transform: translateY(6px) translateX(1px) rotate(45deg);
  transform: translateY(6px) translateX(1px) rotate(45deg);
  background-color: #1e1e1e;
}

.background-header .main-nav .menu-trigger.active span:before {
  background-color: #1e1e1e;
}

.header-area .main-nav .menu-trigger.active span:after {
  -moz-transform: translateY(-6px) translateX(1px) rotate(-45deg);
  -ms-transform: translateY(-6px) translateX(1px) rotate(-45deg);
  -webkit-transform: translateY(-6px) translateX(1px) rotate(-45deg);
  transform: translateY(-6px) translateX(1px) rotate(-45deg);
  background-color: #1e1e1e;
}

.background-header .main-nav .menu-trigger.active span:after {
  background-color: #1e1e1e;
}

.visible{
  display:inline !important;
}

@media (max-width: 1200px) {
  .header-area .main-nav .nav li {
    padding-left: 5px;
    padding-right: 5px;
  }

}

@media (max-width: 767px) {
  .background-header .main-nav {
    box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);
    border-radius: 0px 0px 25px 25px;
    width: 100%;
  }
  .background-header .main-nav .nav,
  .header-area .main-nav .nav {
    background-color: #fff;
  }
  .background-header .main-nav .nav li a,
  .header-area .main-nav .nav li a {
    line-height: 50px;
    height: 50px;
    font-weight: 400;
    color: #1e1e1e;
    background-color: #fff;
     border-radius: 0px 0px 25px 25px;
  }
  .background-header .main-nav .nav li,
  .header-area .main-nav .nav li {
    border-top: 1px solid #ddd;
    background-color: #f1f0fe;
    height: 50px;
    border-radius: 0px 0px 25px 25px;
  }
  .header-area .main-nav .nav {
    height: auto;
    flex-basis: 100%;
  }
  .header-area .main-nav .logo {
    position: absolute;
    left: 30px;
    top: 0px;
  }
  .background-header .main-nav .logo {
    top: 0px;
  }
  .background-header .main-nav .border-button {
    top: 0px !important;
  }
  .header-area .main-nav .border-button {
    position: absolute;
    top: 15px;
    right: 70px;
  }
  .header-area.header-sticky .nav li a:hover,
  .header-area.header-sticky .nav li a.active {
    color: #ee626b!important;
    opacity: 1;
  }
  .header-area.header-sticky .nav li.search-icon a {
    width: 100%;
  }
  .header-area .nav li:last-child a {
    background-color: transparent !important;
    font-weight: 300 !important;
    text-transform: capitalize !important;
  }
  .header-area {
    padding: 0px 15px;
    height: 80px;
    box-shadow: none;
    text-align: center;
  }
  .header-area .container {
    padding: 0px;
  }
  .header-area .logo {
    margin-left: 0px;
  }
  .header-area .menu-trigger {
    display: block !important;
  }
  .header-area .main-nav {
    overflow: hidden;
  }
  .header-area .main-nav .nav {
    float: none;
    width: 100%;
    display: none;
    -webkit-transition: all 0s ease 0s;
    -moz-transition: all 0s ease 0s;
    -o-transition: all 0s ease 0s;
    transition: all 0s ease 0s;
    margin-left: 0px;
  }
  .header-area .main-nav .nav li:first-child {
    border-top: 1px solid #eee;
  }
  .header-area.header-sticky .nav {
    margin-top: 80px !important;
  }
  .background-header.header-sticky .nav {
    margin-top: 80px !important;
  }
  .header-area .main-nav .nav li {
    width: 100%;
    background: #fff;
    padding-left: 0px !important;
    padding-right: 0px !important;
  }

}

/*
---------------------------------------------
Banner Style
---------------------------------------------
*/

.main-banner .item {
  background-position: center center;
  background-repeat: no-repeat;
  background-size: cover;
  padding: 220px 20% 320px 20%;
  margin-top: 0px;
}

.main-banner .item-1 {
  background-image: url(../images/banner-01.jpg);
}

.main-banner .item-2 {
  background-image: url(../images/banner-02.jpg);
}

.main-banner .item-3 {
  background-image: url(../images/banner-03.jpg);
}

.main-banner .item span.category {
  background-color: #fff;
  color: #1e1e1e;
  font-size: 16px;
  font-weight: 500;
  text-transform: capitalize;
  padding: 6px 15px;
  display: inline-block;
  margin-bottom: 30px;
}

.main-banner .item span.category em {
  font-style: normal;
  color: #f35525;
}

.main-banner .item h2 {
  font-size: 62px;
  font-weight: 700;
  text-transform: uppercase;
  color: #fff;
  line-height: 72px;
  width: 50%;
  margin-bottom: 0px;
}

.main-banner .owl-dots {
  position: absolute;
  bottom: 60px;
  left: 20%;
}

.main-banner .owl-dots .owl-dot {
  width: 10px;
  height: 10px;
  background-color: #fff;
  border-radius: 50%;
  margin-right: 10px;
  transition: all .5s;
}

.main-banner .owl-dots .active {
  background-color: #f35525;
}

.main-banner .owl-nav {
  position: absolute;
  top: 50%;
  width: 100%;
  transform: translateY(-50px);
}

.main-banner .owl-nav .owl-prev i,
.main-banner .owl-nav .owl-next i {
  width: 50px;
  height: 50px;
  line-height: 50px;
  font-size: 24px;
  display: inline-block;
  color: #fff;
  background-color: rgba(255, 255, 255, 0.2);
  border-radius: 50%;
  opacity: 1;
  transition: all .3s;
}

.main-banner .owl-nav .owl-prev i {
  position: absolute;
  left: 45px;
}

.main-banner .owl-nav .owl-next i {
  position: absolute;
  right: 45px;
}

.main-banner .owl-nav .owl-prev i:hover,
.main-banner .owl-nav .owl-next i:hover {
  opacity: 1;
  background-color: rgba(255, 255, 255, 0.5);
}



/*
---------------------------------------------
Featured Style
---------------------------------------------
*/

.featured .left-image {
  position: relative;
}

.featured .left-image img {
  padding-left: 55px;
}

.featured .left-image a {
  display: inline-block;
  width: 110px;
  height: 110px;
  line-height: 110px;
  background-color: #f35525;
  border-radius: 50%;
  text-align: center;
  position: absolute;
  left: 0;
  bottom: -55px;
}

.featured .section-heading {
  margin-left: 10px;
  margin-right: 10px;
  margin-bottom: 60px;
}

.featured .section-heading h2 {
  width: 70%;
}

.featured .accordion {
  margin-left: 10px;
  margin-right: 10px;
  --bs-accordion-border-radius: 10px;
  --bs-accordion-inner-border-radius: 10px;
  --bs-accordion-bg: #fafafa;
  --bs-accordion-border-color: none;
  border: none !important;
}

.featured .accordion-header {
  border-bottom: 1px solid #eaeaea;
}

.featured .accordion-button {
  box-shadow: none;
  font-size: 17px;
  font-weight: 500;
  color: #1e1e1e;
}

.featured .accordion-button:not(.collapsed) {
  color: #f35525;
  background-color: #fafafa;
  outline: none;
}

.featured .accordion-button::after {
  display: none;
}

.featured #headingThree {
  border-bottom: none;
}

.featured .accordion-item:last-of-type .accordion-collapse {
  border-top: 1px solid #eaeaea;
}

.featured .info-table {
  border-radius: 10px;
  box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);
  padding: 35px 30px;
}

.featured .info-table ul li {
  display: block;
  margin-bottom: 35px;
  padding-bottom: 35px;
  border-bottom: 1px solid #eee;
}

.featured .info-table ul li:last-child {
  border-bottom: none;
  padding-bottom: 0;
  margin-bottom: 0;
}

.featured .info-table ul li img {
  float: left;
  margin-right: 25px;
}

.featured .info-table ul li h4 {
  font-size: 22px;
  font-weight: 600;
}

.featured .info-table ul li h4 span {
  font-size: 15px;
  color: #aaa;
  font-weight: 400;
}

/*
---------------------------------------------
Video Style
---------------------------------------------
*/

.video {
  background-image: url(../images/video-bg.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;
  padding: 100px 0px 250px 0px;
  position: relative;
}

.video-content {
  margin-top: -240px;
}

.video .section-heading h2 {
  color: #fff;
}

.video-content .video-frame {
  position: relative;
  box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);
  border-radius: 10px;
}

.video-content .video-frame img {
  border-radius: 10px;
}

.video-content .video-frame a {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-26px, -26px);
  width: 52px;
  height: 52px;
  background-color: #fff;
  border-radius: 50%;
  display: inline-block;
  text-align: center;
  line-height: 52px;
  color: #f35525;
  outline: 15px solid rgba(254, 85, 37, 0.5);
  font-size: 18px;
}

/*
---------------------------------------------
Fun Facts Style
---------------------------------------------
*/

.fun-facts {
  text-align: center;
  margin-top: 125px;
}

.fun-facts .counter {
  background-color: #ffeee9;
  position: relative;
  border-radius: 10px;
  width: 270px;
  padding: 20px 0px;
  display: inline-block;
}

.fun-facts .counter h2,
.fun-facts .counter p {
  display: inline-flex;
  vertical-align: middle;
}

.fun-facts .counter p {
  text-align: left;
  font-size: 16px;
  color: #1e1e1e;
  font-weight: 600;
  line-height: 28px;
}

.fun-facts .counter h2 {
  margin-right: 25px;
  font-size: 40px;
  color: #f35525;
}

.fun-facts .counter:after {
  position: absolute;
  width: 50px;
  height: 50px;
  background-color: #f35525;
  border-radius: 50%;
  content: '';
  right: -25px;
  top: -25px;
}


/*
---------------------------------------------
Best Deal Style
---------------------------------------------
*/

.best-deal {
  background-color: #fafafa;
  padding: 100px 0px;
}

.best-deal .tab-content img {
  padding: 0px 45px;
}

.best-deal .tabs-content .nav-link {
  font-size: 16px;
  font-weight: 500;
  background-color: #1e1e1e !important;
  border-radius: 5px;
  height: 50px;
  line-height: 50px;
  display: inline-block;
  padding: 0px 25px;
  color: #fff;
}

.best-deal .tabs-content .nav-tabs .nav-link.active {
  background-color: #f35525 !important;
  color: #fff;
}

.best-deal .tabs-content ul.nav-tabs {
  border-bottom: none !important;
  margin-bottom: 80px;
  align-items: end;
  justify-content: end;
  margin-top: -130px;
}

.best-deal .tabs-content ul.nav-tabs li {
  padding-right: 0px;
  border-right: none;
  margin-left: 20px;
}

.best-deal .info-table {
  border-radius: 10px;
  box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);
  padding: 35px 30px;
}

.best-deal .info-table ul li {
  display: block;
  margin-bottom: 24px;
  padding-bottom: 24px;
  border-bottom: 1px solid #eee;
  text-align: left;
  font-size: 15px;
  color: #aaa;
  font-weight: 400;
}

.best-deal .info-table ul li:last-child {
  border-bottom: none;
  padding-bottom: 0;
  margin-bottom: 0;
}

.best-deal .info-table ul li span {
  font-size: 20px;
  color: #1e1e1e;
  font-weight: 700;
  float: right;
  display: inline-block;
}

.best-deal .tabs-content {
  padding: 0px;
  background-color: transparent;
}

.best-deal .tabs-content h4 {
  font-size: 17px;
  font-weight: 600;
  margin-bottom: 30px;
}

.best-deal .icon-button {
  margin-top: 30px;
}


/*
---------------------------------------------
Properties Style
---------------------------------------------
*/

.properties .item {
  background-color: #fafafa;
  border-radius: 10px;
  padding: 30px;
  margin-bottom: 30px;
}

.properties .item img {
  border-radius: 10px;
}

.properties .item span.category {
  background-color: #fbd9cf;
  font-weight: 500;
  border-radius: 5px;
  font-size: 14px;
  color: #1e1e1e;
  padding: 5px 12px;
  display: inline-block;
  margin-top: 25px;
}

.properties .item h4 {
  font-size: 19px;
  margin: 25px 0px;
}

.properties .item h4 a {
  color: #1e1e1e;
}

.properties .item ul li {
  display: inline-block;
  font-size: 15px;
  color: #4a4a4a;
  margin-right: 20px;
}

.properties .item ul li span {
  font-weight: 600;
  color: #1e1e1e;
}

.properties .item ul {
  border-bottom: 1px solid #eaeaea;
  margin-bottom: 30px;
  padding-bottom: 30px;
}

.properties .item h6 {
  font-size: 20px;
  color: #f35525;
  margin-top: 6px;
  display: inline-block;
  float: right;
  margin-top: 30px;
}

.properties .item .main-button {
  text-align: center;
}


/*
---------------------------------------------
Contact Style
---------------------------------------------
*/

.contact {
  background-image: url(../images/contact-bg.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;
  padding: 100px 0px 250px 0px;
  position: relative;
}

.contact .section-heading h2 {
  color: #fff;
}

.contact-content {
  margin-top: -240px;
  position: relative;
  z-index: 1;
}

.contact-content #map {
  border-radius: 10px;
  margin-bottom: 60px;
}

.contact-content .item {
  border-radius: 10px;
  box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);
  padding: 35px 30px;
  background-color: #fff;
}

.contact-content .phone {
  margin-right: 15px;
}

.contact-content .email {
  margin-left: 15px;
}

.contact-content .item img {
  float: left;
  margin-right: 25px;
  vertical-align: middle;
}

.contact-content .item h6 {
  font-size: 20px;
  font-weight: 600;
  vertical-align: middle;
}

.contact-content .item h6 span {
  font-size: 15px;
  color: #aaaaaa;
  font-weight: 400;
}

.contact-content #contact-form {
  margin-left: 30px;
  border-radius: 10px;
  box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);
  padding: 35px 30px;
  background-color: #fff;
}

.contact-content #contact-form label {
  font-size: 15px;
  color: #3a3a3a;
  margin-bottom: 15px;
}

.contact-content #contact-form input {
  width: 100%;
  height: 44px;
  border-radius: 22px;
  background-color: #f6f6f6;
  border: none;
  margin-bottom: 30px;
  font-size: 14px;
  padding: 0px 15px;
}

.contact-content #contact-form textarea {
  width: 100%;
  height: 150px;
  max-height: 180px;
  border-radius: 22px;
  background-color: #f6f6f6;
  border: none;
  margin-bottom: 40px;
  font-size: 14px;
  padding: 15px 15px;
}

.contact-content #contact-form button {
  background-color: #1e1e1e;
  height: 44px;
  border-radius: 22px;
  padding: 0px 20px;
  color: #fff;
  border: none;
  font-size: 15px;
  font-weight: 500;
  transition: all .5s;
}

.contact-content #contact-form button:hover {
  background-color: #f35525;
}


/*
---------------------------------------------
Footer Style
---------------------------------------------
*/

footer.footer-no-gap {
  margin-top: 0px;
}

footer {
  margin-top: 150px;
  background-color: #1e1e1e;
  min-height: 100px;
}

footer p {
  text-align: center;
  line-height: 100px;
  color: #fff;
  font-size: 16px;
  font-weight: 400;
}

footer p a {
  color: #fff;
  transition: all .3s;
  position: relative;
  z-index: 3;
}

footer p a:hover {
  opacity: 0.75;
}


/*
---------------------------------------------
Page Header Style
---------------------------------------------
*/

.page-heading {
  background-image: url(../images/page-heading-bg.jpg);
  background-position: center bottom;
  background-repeat: no-repeat;
  background-size: cover;
  padding: 110px 0px;
  text-align: center;
}

.page-heading span {
  background-color: #fff;
  color: #1e1e1e;
  font-size: 14px;
  font-weight: 500;
  text-transform: uppercase;
  padding: 10px 25px;
  display: inline-block;
  margin-bottom: 30px;
}

.page-heading span a {
  color: #1e1e1e;
}

.page-heading h3 {
  font-size: 48px;
  font-weight: 900;
  text-transform: uppercase;
  color: #fff;
}


/*
---------------------------------------------
Properties Style
---------------------------------------------
*/

.properties ul.properties-filter {
  list-style: none;
  text-align: center;
  margin-bottom: 70px;
}

.properties ul.properties-filter li {
  display: inline-block;
  margin: 5px 8px;
}

.properties ul.properties-filter li a {
  display: inline-block;
  text-align: center;
  font-size: 15px;
  text-transform: capitalize;
  font-weight: 500;
  color: #fff;
  background-color: #1e1e1e;
  padding: 12px 25px;
  border-radius: 5px;
  transition: all .3s;
}

.properties ul.properties-filter li a.is_active {
  background-color: #f35525;
  color: #fff;
}

.properties ul.properties-filter li a.is_active:hover {
  color: #fff;
}

.properties ul.properties-filter li a:hover {
  color: #f35525;
}

.properties ul.pagination {
  margin-top: 50px;
  text-align: center;
  width: 100%;
  display: inline-block;
}

.properties ul.pagination li {
  display: inline-block;
  margin: 0px 5px;
}

.properties ul.pagination li a {
  display: inline-block;
  width: 40px;
  height: 40px;
  line-height: 40px;
  text-align: center;
  background-color: #1e1e1e;
  color: #fff;
  font-size: 15px;
  font-weight: 600;
  border-radius: 50%;
  transition: all .3s;
}

.properties ul.pagination li a:hover,
.properties ul.pagination li a.is_active {
  background-color: #f35525;
  color: #fff;
}


/*
---------------------------------------------
Single Page Style
---------------------------------------------
*/

.single-property .main-image img {
  float: none;
}

.single-property .main-content h4 {
  font-size: 25px;
  margin-top: 25px;
  margin-bottom: 40px;
  padding-bottom: 40px;
  border-bottom: 1px solid #eee;
}

.single-property .main-content span.category {
  background-color: #fbd9cf;
  font-weight: 500;
  border-radius: 5px;
  font-size: 14px;
  color: #1e1e1e;
  padding: 5px 12px;
  display: inline-block;
  margin-top: 40px;
}

.single-property .accordion {
  margin-top: 60px;
  margin-left: 0px;
  margin-right: 0px;
  --bs-accordion-border-radius: 10px;
  --bs-accordion-inner-border-radius: 10px;
  --bs-accordion-bg: #fafafa;
  --bs-accordion-border-color: none;
  border: none !important;
}

.single-property .accordion-header {
  border-bottom: 1px solid #eaeaea;
}

.single-property .accordion-button {
  box-shadow: none;
  font-size: 17px;
  font-weight: 500;
  color: #1e1e1e;
}

.single-property .accordion-button:not(.collapsed) {
  color: #f35525;
  background-color: #fafafa;
  outline: none;
}

.single-property .accordion-button::after {
  display: none;
}

.single-property #headingThree {
  border-bottom: none;
}

.single-property .accordion-item:last-of-type .accordion-collapse {
  border-top: 1px solid #eaeaea;
}

.single-property .info-table {
  border-radius: 10px;
  box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);
  padding: 35px 30px;
  margin-left: 60px;
}

.single-property .info-table ul li {
  display: block;
  margin-bottom: 35px;
  padding-bottom: 35px;
  border-bottom: 1px solid #eee;
}

.single-property .info-table ul li:last-child {
  border-bottom: none;
  padding-bottom: 0;
  margin-bottom: 0;
}

.single-property .info-table ul li img {
  float: left;
  margin-right: 25px;
}

.single-property .info-table ul li h4 {
  font-size: 22px;
  font-weight: 600;
}

.single-property .info-table ul li h4 span {
  font-size: 15px;
  color: #aaa;
  font-weight: 400;
}


/*
---------------------------------------------
Contact Page Style
---------------------------------------------
*/

.contact-page #map {
  margin-top: 100px;
}

.contact-page .section-heading {
  margin-bottom: 40px;
  margin-right: 280px;
}

.contact-page p {
  margin-bottom: 50px;
}

.contact-page .item {
  border-radius: 10px;
  box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);
  padding: 35px 30px;
  background-color: #fff;
  display: inline-block;
  min-width: 360px;
}

.contact-page .phone {
  margin-bottom: 30px;
}

.contact-page .item img {
  float: left;
  margin-right: 25px;
  vertical-align: middle;
}

.contact-page .item h6 {
  font-size: 20px;
  font-weight: 600;
  vertical-align: middle;
}

.contact-page .item h6 span {
  font-size: 15px;
  color: #aaaaaa;
  font-weight: 400;
}

.contact-page #contact-form {
  margin-left: 30px;
  border-radius: 10px;
  box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);
  padding: 35px 30px;
  background-color: #fff;
}

.contact-page #contact-form label {
  font-size: 15px;
  color: #3a3a3a;
  margin-bottom: 15px;
}

.contact-page #contact-form input {
  width: 100%;
  height: 44px;
  border-radius: 22px;
  background-color: #f6f6f6;
  border: none;
  margin-bottom: 30px;
  font-size: 14px;
  padding: 0px 15px;
}

.contact-page #contact-form textarea {
  width: 100%;
  height: 150px;
  max-height: 180px;
  border-radius: 22px;
  background-color: #f6f6f6;
  border: none;
  margin-bottom: 40px;
  font-size: 14px;
  padding: 15px 15px;
}

.contact-page #contact-form button {
  background-color: #1e1e1e;
  height: 44px;
  border-radius: 22px;
  padding: 0px 20px;
  color: #fff;
  border: none;
  font-size: 15px;
  font-weight: 500;
  transition: all .5s;
}

.contact-page #contact-form button:hover {
  background-color: #f35525;
}


/*
---------------------------------------------
Responsive Style
---------------------------------------------
*/

body {
  overflow-x: hidden;
}

@media (max-width: 767px) {
  .header-area .main-nav .logo h1 {
    line-height: 80px !important;
  }
  .best-deal .tabs-content .nav-link {
    font-size: 14px;
    padding: 0px 15px;
    height: 44px;
    line-height: 44px;
  }
  .best-deal .tabs-content ul.nav-tabs li {
    margin: 0px 5px;
  }
  .properties ul.properties-filter li a {
    font-size: 14px;
    padding: 10px 15px;
  }
  .properties ul.properties-filter li {
    margin: 5px;
  }
  .header-area .main-nav .nav li:last-child {
    display: none;
  }
}

@media (max-width: 992px) {
  .sub-header {
    display: none;
  }
  .header-area .main-nav .logo h1 {
    line-height: 100px;
  }
  .background-header .main-nav .logo h1 {
    line-height: 80px;
  }
  .header-area .main-nav .nav li a {
    padding-left: 3px;
    padding-right: 3px;
  }
  .header-area .main-nav .nav li:last-child a {
    padding-right: 15px;
  }
  .main-banner .item h2 {
    width: 100%;
  }
  .featured .section-heading {
    margin-left: 0px;
    margin-right: 0px;
    margin-top: 100px;
  }
  .featured .accordion {
    margin-left: 0px;
    margin-right: 0px;
  }
  .featured .info-table {
    margin-top: 45px;
  }
  .fun-facts .counter {
    margin-bottom: 45px;
  }
  .best-deal .section-heading {
    text-align: center;
  }
  .best-deal .tabs-content ul.nav-tabs {
    margin-top: 0px;
    justify-content: center;
  }
  .best-deal .info-table {
    margin-bottom: 45px;
  }
  .best-deal .tab-content img {
    padding: 0px;
  }
  .best-deal .tabs-content h4 {
    margin-top: 45px;
  }
  .properties .item h6 {
    text-align: center;
    margin-bottom: 15px;
  }
  .properties .item .main-button {
    text-align: center;
  }
  .properties .item ul li {
    margin-right: 10px;
    font-size: 13px;
  }
  .contact-content .phone {
    margin-right: 0px;
    margin-bottom: 20px;
  }
  .contact-content .email {
    margin-left: 0px;
    margin-bottom: 45px;
  }
  .contact-content #contact-form {
    margin-left: 0px;
  }
  .single-property .info-table {
    margin-left: 0px;
    margin-top: 45px;
  }
  .contact-page .section-heading {
    margin-right: 0px !important;
  }
  .contact-page #contact-form {
    margin-left: 0px;
    margin-top: 60px;
  }
  .best-deal .info-table ul li span {
    float: right !important;
    width: auto !important;
  }
}

@media (max-width: 1200px) {
  .best-deal .info-table ul li span {
    float: none;
    width: 100%;
  }
  .contact-page .section-heading {
    margin-right: 100px;
  }
}
</style>
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <div class="sub-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <ul class="info">
                        <li><i class="fa fa-envelope"></i> info@company.com</li>
                        <li><i class="fa fa-map"></i> Sunny Isles Beach, FL 33160</li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4">
                    <ul class="social-links">
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="https://x.com/minthu" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <h1>Villa</h1>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="index.html" class="active">Home</a></li>
                            <li><a href="properties.html">Properties</a></li>
                            <li><a href="property-details.html">Property Details</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="#"><i class="fa fa-calendar"></i> Schedule a visit</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div class="main-banner">
        <div class="owl-carousel owl-banner">
            <div class="item item-1">
                <div class="header-text">
                    <span class="category">Toronto, <em>Canada</em></span>
                    <h2>Hurry!<br>Get the Best Villa for you</h2>
                </div>
            </div>
            <div class="item item-2">
                <div class="header-text">
                    <span class="category">Melbourne, <em>Australia</em></span>
                    <h2>Be Quick!<br>Get the best villa in town</h2>
                </div>
            </div>
            <div class="item item-3">
                <div class="header-text">
                    <span class="category">Miami, <em>South Florida</em></span>
                    <h2>Act Now!<br>Get the highest level penthouse</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="featured section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-image">
                        <img src="assets/images/featured.jpg" alt="">
                        <a href="property-details.html"><img src="assets/images/featured-icon.png" alt="" style="max-width: 60px; padding: 0px;"></a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="section-heading">
                        <h6>| Featured</h6>
                        <h2>Best Appartment &amp; Sea view</h2>
                    </div>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Best useful links ?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Get <strong>the best villa</strong> website template in HTML CSS and Bootstrap for your business. TemplateMo provides you the <a href="https://www.google.com/search?q=best+free+css+templates" target="_blank">best free CSS templates</a> in the world. Please tell your friends about it.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How does this work ?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Dolor <strong>almesit amet</strong>, consectetur adipiscing elit, sed doesn't eiusmod tempor incididunt ut labore consectetur <code>adipiscing</code> elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Why is Villa Agency the best ?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Dolor <strong>almesit amet</strong>, consectetur adipiscing elit, sed doesn't eiusmod tempor incididunt ut labore consectetur <code>adipiscing</code> elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="info-table">
                        <ul>
                            <li>
                                <img src="assets/images/info-icon-01.png" alt="" style="max-width: 52px;">
                                <h4>250 m2<br><span>Total Flat Space</span></h4>
                            </li>
                            <li>
                                <img src="assets/images/info-icon-02.png" alt="" style="max-width: 52px;">
                                <h4>Contract<br><span>Contract Ready</span></h4>
                            </li>
                            <li>
                                <img src="assets/images/info-icon-03.png" alt="" style="max-width: 52px;">
                                <h4>Payment<br><span>Payment Process</span></h4>
                            </li>
                            <li>
                                <img src="assets/images/info-icon-04.png" alt="" style="max-width: 52px;">
                                <h4>Safety<br><span>24/7 Under Control</span></h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="video section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="section-heading text-center">
                        <h6>| Video View</h6>
                        <h2>Get Closer View & Different Feeling</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="video-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="video-frame">
                        <img src="assets/images/video-frame.jpg" alt="">
                        <a href="https://youtube.com" target="_blank"><i class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="fun-facts">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="counter">
                                    <h2 class="timer count-title count-number" data-to="34" data-speed="1000"></h2>
                                    <p class="count-text ">Buildings<br>Finished Now</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="counter">
                                    <h2 class="timer count-title count-number" data-to="12" data-speed="1000"></h2>
                                    <p class="count-text ">Years<br>Experience</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="counter">
                                    <h2 class="timer count-title count-number" data-to="24" data-speed="1000"></h2>
                                    <p class="count-text ">Awwards<br>Won 2023</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section best-deal">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>| Best Deal</h6>
                        <h2>Find Your Best Deal Right Now!</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="tabs-content">
                        <div class="row">
                            <div class="nav-wrapper ">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="appartment-tab" data-bs-toggle="tab" data-bs-target="#appartment" type="button" role="tab" aria-controls="appartment" aria-selected="true">Appartment</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="villa-tab" data-bs-toggle="tab" data-bs-target="#villa" type="button" role="tab" aria-controls="villa" aria-selected="false">Villa House</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="penthouse-tab" data-bs-toggle="tab" data-bs-target="#penthouse" type="button" role="tab" aria-controls="penthouse" aria-selected="false">Penthouse</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="appartment" role="tabpanel" aria-labelledby="appartment-tab">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="info-table">
                                                <ul>
                                                    <li>Total Flat Space <span>185 m2</span></li>
                                                    <li>Floor number <span>26th</span></li>
                                                    <li>Number of rooms <span>4</span></li>
                                                    <li>Parking Available <span>Yes</span></li>
                                                    <li>Payment Process <span>Bank</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <img src="assets/images/deal-01.jpg" alt="">
                                        </div>
                                        <div class="col-lg-3">
                                            <h4>Extra Info About Property</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod tempor pack incididunt ut labore et dolore magna aliqua quised ipsum suspendisse.
                                                <br><br>When you need free CSS templates, you can simply type TemplateMo in any search engine website. In addition, you can type TemplateMo Portfolio, TemplateMo One Page Layouts, etc.
                                            </p>
                                            <div class="icon-button">
                                                <a href="property-details.html"><i class="fa fa-calendar"></i> Schedule a visit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="villa" role="tabpanel" aria-labelledby="villa-tab">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="info-table">
                                                <ul>
                                                    <li>Total Flat Space <span>250 m2</span></li>
                                                    <li>Floor number <span>26th</span></li>
                                                    <li>Number of rooms <span>5</span></li>
                                                    <li>Parking Available <span>Yes</span></li>
                                                    <li>Payment Process <span>Bank</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <img src="assets/images/deal-02.jpg" alt="">
                                        </div>
                                        <div class="col-lg-3">
                                            <h4>Detail Info About Villa</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod tempor pack incididunt ut labore et dolore magna aliqua quised ipsum suspendisse. <br><br>Swag fanny pack lyft blog twee. JOMO ethical copper mug, succulents typewriter shaman DIY kitsch twee taiyaki fixie hella venmo after messenger poutine next level humblebrag swag franzen.</p>
                                            <div class="icon-button">
                                                <a href="property-details.html"><i class="fa fa-calendar"></i> Schedule a visit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="penthouse" role="tabpanel" aria-labelledby="penthouse-tab">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="info-table">
                                                <ul>
                                                    <li>Total Flat Space <span>320 m2</span></li>
                                                    <li>Floor number <span>34th</span></li>
                                                    <li>Number of rooms <span>6</span></li>
                                                    <li>Parking Available <span>Yes</span></li>
                                                    <li>Payment Process <span>Bank</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <img src="assets/images/deal-03.jpg" alt="">
                                        </div>
                                        <div class="col-lg-3">
                                            <h4>Extra Info About Penthouse</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod tempor pack incididunt ut labore et dolore magna aliqua quised ipsum suspendisse. <br><br>Swag fanny pack lyft blog twee. JOMO ethical copper mug, succulents typewriter shaman DIY kitsch twee taiyaki fixie hella venmo after messenger poutine next level humblebrag swag franzen.</p>
                                            <div class="icon-button">
                                                <a href="property-details.html"><i class="fa fa-calendar"></i> Schedule a visit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="properties section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="section-heading text-center">
                        <h6>| Properties</h6>
                        <h2>We Provide The Best Property You Like</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="item">
                        <a href="property-details.html"><img src="assets/images/property-01.jpg" alt=""></a>
                        <span class="category">Luxury Villa</span>
                        <h6>$2.264.000</h6>
                        <h4><a href="property-details.html">18 New Street Miami, OR 97219</a></h4>
                        <ul>
                            <li>Bedrooms: <span>8</span></li>
                            <li>Bathrooms: <span>8</span></li>
                            <li>Area: <span>545m2</span></li>
                            <li>Floor: <span>3</span></li>
                            <li>Parking: <span>6 spots</span></li>
                        </ul>
                        <div class="main-button">
                            <a href="property-details.html">Schedule a visit</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item">
                        <a href="property-details.html"><img src="assets/images/property-02.jpg" alt=""></a>
                        <span class="category">Luxury Villa</span>
                        <h6>$1.180.000</h6>
                        <h4><a href="property-details.html">54 Mid Street Florida, OR 27001</a></h4>
                        <ul>
                            <li>Bedrooms: <span>6</span></li>
                            <li>Bathrooms: <span>5</span></li>
                            <li>Area: <span>450m2</span></li>
                            <li>Floor: <span>3</span></li>
                            <li>Parking: <span>8 spots</span></li>
                        </ul>
                        <div class="main-button">
                            <a href="property-details.html">Schedule a visit</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item">
                        <a href="property-details.html"><img src="assets/images/property-03.jpg" alt=""></a>
                        <span class="category">Luxury Villa</span>
                        <h6>$1.460.000</h6>
                        <h4><a href="property-details.html">26 Old Street Miami, OR 38540</a></h4>
                        <ul>
                            <li>Bedrooms: <span>5</span></li>
                            <li>Bathrooms: <span>4</span></li>
                            <li>Area: <span>225m2</span></li>
                            <li>Floor: <span>3</span></li>
                            <li>Parking: <span>10 spots</span></li>
                        </ul>
                        <div class="main-button">
                            <a href="property-details.html">Schedule a visit</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item">
                        <a href="property-details.html"><img src="assets/images/property-04.jpg" alt=""></a>
                        <span class="category">Apartment</span>
                        <h6>$584.500</h6>
                        <h4><a href="property-details.html">12 New Street Miami, OR 12650</a></h4>
                        <ul>
                            <li>Bedrooms: <span>4</span></li>
                            <li>Bathrooms: <span>3</span></li>
                            <li>Area: <span>125m2</span></li>
                            <li>Floor: <span>25th</span></li>
                            <li>Parking: <span>2 cars</span></li>
                        </ul>
                        <div class="main-button">
                            <a href="property-details.html">Schedule a visit</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item">
                        <a href="property-details.html"><img src="assets/images/property-05.jpg" alt=""></a>
                        <span class="category">Penthouse</span>
                        <h6>$925.600</h6>
                        <h4><a href="property-details.html">34 Beach Street Miami, OR 42680</a></h4>
                        <ul>
                            <li>Bedrooms: <span>4</span></li>
                            <li>Bathrooms: <span>4</span></li>
                            <li>Area: <span>180m2</span></li>
                            <li>Floor: <span>38th</span></li>
                            <li>Parking: <span>2 cars</span></li>
                        </ul>
                        <div class="main-button">
                            <a href="property-details.html">Schedule a visit</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item">
                        <a href="property-details.html"><img src="assets/images/property-06.jpg" alt=""></a>
                        <span class="category">Modern Condo</span>
                        <h6>$450.000</h6>
                        <h4><a href="property-details.html">22 New Street Portland, OR 16540</a></h4>
                        <ul>
                            <li>Bedrooms: <span>3</span></li>
                            <li>Bathrooms: <span>2</span></li>
                            <li>Area: <span>165m2</span></li>
                            <li>Floor: <span>26th</span></li>
                            <li>Parking: <span>3 cars</span></li>
                        </ul>
                        <div class="main-button">
                            <a href="property-details.html">Schedule a visit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="section-heading text-center">
                        <h6>| Contact Us</h6>
                        <h2>Get In Touch With Our Agents</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div id="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12469.776493332698!2d-80.14036379941481!3d25.907788681148624!2m3!1f357.26927939317244!2f20.870722720054623!3f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x88d9add4b4ac788f%3A0xe77469d09480fcdb!2sSunny%20Isles%20Beach!5e1!3m2!1sen!2sth!4v1642869952544!5m2!1sen!2sth" width="100%" height="500px" frameborder="0" style="border:0; border-radius: 10px; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);" allowfullscreen=""></iframe>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="item phone">
                                <img src="assets/images/phone-icon.png" alt="" style="max-width: 52px;">
                                <h6>010-020-0340<br><span>Phone Number</span></h6>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="item email">
                                <img src="assets/images/email-icon.png" alt="" style="max-width: 52px;">
                                <h6>info@villa.co<br><span>Business Email</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <form id="contact-form" action="" method="post">
                        <div class="row">
                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="name">Full Name</label>
                                    <input type="name" name="name" id="name" placeholder="Your Name..." autocomplete="on" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="email">Email Address</label>
                                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail..." required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="subject">Subject</label>
                                    <input type="subject" name="subject" id="subject" placeholder="Subject..." autocomplete="on">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="message">Message</label>
                                    <textarea name="message" id="message" placeholder="Your Message"></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="orange-button">Send Message</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="col-lg-8">
                <p>Copyright © 2048 Villa Agency Co., Ltd. All rights reserved.

                    Design: <a rel="nofollow" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/counter.js"></script>
    <script src="assets/js/custom.js"></script>

</body>

</html>
