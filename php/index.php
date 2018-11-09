<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/index.css">
<link rel="icon" type="image/png" href="../images/kisaanlogo.png" sizes="96x96">
<title>Lets Start</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Cutive' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Alef' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-backstretch/2.0.4/jquery.backstretch.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.2/flexslider.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.2/jquery.flexslider.js"></script>
<style>
#return-to-top {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background: rgb(0, 0, 0);
    background: rgba(0, 0, 0, 0.7);
    width: 50px;
    height: 50px;
    display: block;
    text-decoration: none;
    -webkit-border-radius: 35px;
    -moz-border-radius: 35px;
    border-radius: 35px;
    display: none;
    -webkit-transition: all 0.3s linear;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
#return-to-top i {
    color: #fff;
    margin: 0;
    position: relative;
    left: 16px;
    top: 13px;
    font-size: 19px;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
#return-to-top:hover {
    background: rgba(0, 0, 0, 0.9);
}
#return-to-top:hover i {
    color: #fff;
    top: 5px;
}
.afterslide{
	height:500px;
	width:auto;
	background:#f2f2f2;
	box-shadow: 0 15px 20px rgba(0, 0, 0, 0.3);
}
.slider {
  background-color:#f2f2f2;
  height:auto;
  box-shadow: 0 15px 20px rgba(0, 0, 0, 0.3);
}
.bigimage {
  background-color:#f2f2f2;
  height:auto;box-shadow: 0 15px 20px rgba(0, 0, 0, 0.3);
}


.afterslide img{
	border-radius:10px;
	border-style: solid;
    margin-left:450px;
    margin-top:30px;
}
.bigimage img{
	border-radius:10px;
border-style: solid;}
.Start p{
	font-family:alef;

}
.afterslide p{
font-family:Cutive;
font-weight: bold;
font-size:20px;
margin-top:20px;
}
h2{
	font-family:Alef;
}
hr { 
    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: 300px;
    margin-right: 300px;
    border-style: solid;
    border-width: 2px;
	border-color:white;
} 
.start h2 {
  overflow: hidden; /* Ensures the content is not revealed until the animation */
  border-right: .15em solid orange; /* The typwriter cursor */
  white-space: nowrap; /* Keeps the content on a single line */
  /* Gives that scrolling effect as the typing happens */
  letter-spacing: .15em; /* Adjust as needed */
  animation: 
    typing 3.2s steps(40, end),
    blink-caret .55s step-end infinite;
}

/* The typing effect */
@keyframes typing {
  from { width: 0 }
  to { width: 70% }
}

/* The typewriter cursor effect */
@keyframes blink-caret {
  from, to { border-color: transparent }
  50% { border-color: orange; }
}
</style>
<script language="JavaScript">

window.smoothScroll = function(target) {
    var scrollContainer = target;
    do { //find scroll container
        scrollContainer = scrollContainer.parentNode;
        if (!scrollContainer) return;
        scrollContainer.scrollTop += 1;
    } while (scrollContainer.scrollTop == 0);
    var targetY = 0;
    do { //find the top of target relatively to the container
        if (target == scrollContainer) break;
        targetY += target.offsetTop;
    } while (target = target.offsetParent);

    scroll = function(c, a, b, i) {
        i++; if (i > 30) return;
        c.scrollTop = a + (b - a) / 30 * i;
        setTimeout(function(){ scroll(c, a, b, i); }, 20);
    }
    // start scrolling
    scroll(scrollContainer, scrollContainer.scrollTop, targetY, 0);
}
$(document).ready(function (){
  if (jQuery().flexslider) {
  //flexslider ticker
  $('.flexslider-ticker').each(function() {
    var tickerSettings =  {
      animation: "slide",
      animationLoop: false,
      selector: ".items > .item",
      move: 1,
      controlNav: false,
      slideshow: true,
      direction: 'vertical'
    };
    $(this).flexslider(tickerSettings);
  });
  // flexsliders
  $('.flexslider').each(function() {
    var sliderSettings =  {
      animation: $(this).attr('data-transition'),
      selector: ".slides > .slide",
      controlNav: false,
      smoothHeight: true,
      prevText: "",
      nextText: "",
      sync: $(this).data('slidernav') || '',
      start: function(slider) {
        if (slider.find('[data-slide-bg-stretch=true]').length > 0) {
          slider.find('[data-slide-bg-stretch=true]').each(function() {
            if ($(this).data('slide-bg')) {
              $(this).backstretch($(this).data('slide-bg'));
              // $(this).data('slide-bg');
            }
          });
        }
      }
    };
      
    $('html').addClass('has-flexslider');
    $(this).flexslider(sliderSettings);
  });
  $(window).delay(1000).trigger('resize'); //make sure height is right load assets loaded
}})
</script>
</head> 
<body><a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>
<div style="background: linear-gradient(rgba(26,26,26,0.2),rgba(26,26,26,0.7)), url('../images/background1.jpg');background-repeat: no-repeat;
    background-position: right top;background-repeat: repeat-x;background-size: 1400px 800px;">
 <div class="header" style="height:100px;box-shadow: 1px 2px 4px 0px #4e4e4f;">
 <p><img src="../images/kisaanlogo.png" width="40px" >Digital Kisaan</p>
 <div id="google_translate_element" style="margin-left:1170px;"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
 <ul style="margin-left:600px;"> 
   <li><a href="index.php"><i class="fa fa-home"></i>&nbsp;Home</a></li>
  <li><a href="About.php"><i class="fa fa-info-circle"></i>&nbsp;About</a></li>
   <li><button type="button" onclick="smoothScroll(document.getElementById('contact'))"><i class="fa fa-phone"></i>&nbsp;Contact</button></li>
  <li ><a href="current.php"><i class="fa fa-cloud"></i>&nbsp;Weather</a></li>
  <li ><a href="chat.php"><i class="fa fa-comments"></i>&nbsp;Chat</a></li>
  <li ><a href="videos.php"><i class="fa fa-youtube-play"></i>&nbsp;Farming Tips</a></li>
  <li ><a href="http://www.agriculturetoday.in"><i class="fa fa-newspaper-o"></i>&nbsp;News</a></li>
 </div> 
<div class="Start">

<h2>WELCOME TO DIGITAL KISAN</h2>
<p>" We, at DigitalKisaan.com, are excited about making life simpler and grocery shopping a 
breeze! Now you can buy organic food & grocery online at your leisure and from the comfort 
of your home - no more standing in the long queues at ration shops, provision stores & supermarkets." 

</p>
<br>
<a href="./login.php">
<input type="submit" value="Buy here"></a>
</div></div> 
<div class="slider"><br><br>
<!-- @zone - hightlighted -->
<!--Showshow-->
<div class="container slider-container">
   <div class="row">
      <div class="col-md-12 slider-left">
         <section class="flexslider-wrapper">
            <div id="main-slider" class="flexslider" data-transition="fade" data-page-class="slider-full-width">
               <div class="slides">
                  <div data-slide-alt="alt" data-slide-bg-stretch=true class="slide slide-bg" data-slide-bg="https://superfoodsrx.com/wp-content/uploads/2016/09/Diverticular-Disease-Nuts-Seeds-1.jpg">
                     <div class="slide-caption">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="slide-text">
                                 <div class="slide-title">What is Digital Kisaan?</div>
                                 An online platform for purchase of agricultural inputs.
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div data-slide-alt="alt" data-slide-bg-stretch=true class="slide slide-bg" data-slide-bg="https://countercurrents.org/wp-content/uploads/2017/10/seeds.jpg">
                     <div class="slide-caption">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="slide-text">
                                 <div class="slide-title">Variety</div>
                                 Large collection of diiferent types of inputs from verified sellers.
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div data-slide-alt="alt" data-slide-bg-stretch=true class="slide slide-bg" data-slide-bg="https://img.aws.livestrongcdn.com/ls-article-image-673/ds-photo/getty/article/190/129/105661091.jpg">
                     <div class="slide-caption">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="slide-text">
                                 <div class="slide-title">Marketing</div>
                                 Direct online marketing of perishabe produce of farmer.
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
         </section>
         </div>
      </div>
   </div>
</div>
<br><br><br><br><br><br>

	<div class="afterslide">
	<img align="middle"src="../images/farmer1.jpg" height="300"><br><br><hr></hr><p align="center">
	 “The ultimate goal of farming is not the growing of crops, but the cultivation and perfection of human beings.”
	  <br><br>
 <font size="2px">― Masanobu Fukuoka, The One-Straw Revolution</font>
	</p>
	</div>



<br><br><br><br><br>
<div class="Contact" id="contact">
<p style="color:white;"><br><br>
<img src="../images/toll.png" width="0px"><i class="fa fa-phone"></i>&nbsp;Toll Free 1800-274-3131
<img src="../images/email.png" width="0px"><i class="fa fa-envelope"></i>&nbsp;DigitalKisaan@service.com
<img src="../images/franchize.png" width="0px"><i class="fa fa-handshake-o"></i>&nbsp;Franchise
<br><br><br></p>
<h4>Copyright © 2017 DigitalKisaan.com. All rights reserved.</h4>
</div>
</div>

</html>
<script>
  $(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        
        $('#return-to-top').fadeIn(200);   
    } else {
        $('#return-to-top').fadeOut(200);  
    }
});
$('#return-to-top').click(function() {      
    $('body,html').animate({
        scrollTop : 0                      
    }, 500);
});</script>