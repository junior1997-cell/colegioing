<!DOCTYPE html>
<html lang="en">

<?php require 'web/includes/headsec.php'?>

<link href='web/styles/galeria/bootstrap.min.css' rel='stylesheet' type='text/css'>
<link href='web/styles/galeria/font-awesome.min.css' rel='stylesheet' type='text/css'>
<link href='web/styles/galeria/simplelightbox.min.css' rel='stylesheet' type='text/css'>
<link href='web/styles/galeria/style.css' rel='stylesheet' type='text/css'>

<link href="//fonts.googleapis.com/css?family=Arvo:400,400i,700,700i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

<script src="web/styles/galeria/js/jquery-1.11.1.min.js"></script>
<script src="web/styles/galeria/js/bootstrap.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){     
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>

<body>


    <div class="super_container">

        <!-- Header -->
        <?php require 'web/includes/header.php'?>

        <!-- Menu -->
        

        <!-- Home -->

        <div class="home">
            <div class="home_background_container prlx_parent">
                <div class="home_background prlx" style="background-image:url(web/images/rioabiseo.jpg)"></div>
            </div>
            <div class="home_content">
                <h1 >Galeria</h1>
            </div>
        </div>

        <!-- Popular -->

        <div class="gallery" id="gallery">
        <div class="container">
            <div class="wthree-heading">
                <h3>Gallery</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla at nisi velit. Ut id velit ex. Donec quis sapien gravida, rutrum metus eu, viverra elit. Sed sodales commodo ex, id porttitor leo ullamcorper nec.</p>
            </div>
            <div class=" w3-agileits-gallery">
                <div class="gallery-bg">
                    <div class="gallery-bg-text effect-2">
                        <a href="web/images/g1.jpg" class="big"><img src="web/images/g1.jpg" alt="" title="Maecenas aliquam nec arcu at efficitur. Praesent cursus aliquam erat a commodo." /></a>
                    </div>
                </div>
                <div class="gallery-small gallery-middle">
                    <div class="gallery-small-text effect-3">
                        <a href="web/images/g2.jpg"><img src="web/images/g2.jpg" alt="" title="Donec dictum nisi sit amet ex volutpat interdum."/></a>
                    </div>
                </div>
                <div class="gallery-small gallery-middle">
                    <div class="gallery-small-text effect-3">
                        <a href="web/images/g3.jpg"><img src="web/images/g3.jpg" alt="" title="Ut dignissim ipsum dolor, in scelerisque neque commodo sit amet."/></a>
                    </div>
                </div>
                <div class="gallery-small gallery-middle">
                    <div class="gallery-small-text effect-3">
                        <a href="web/images/g4.jpg"><img src="web/images/g4.jpg" alt="" title="Nulla molestie nulla et dolor commodo pharetra."/></a>
                    </div>
                </div>
                <div class="clearfix"></div>
                
                <div class="gallery-small gallery-middle">
                    <div class="gallery-small-text effect-3">
                        <a href="web/images/g5.jpg"><img src="web/images/g5.jpg" alt="" title="Maecenas aliquam nec arcu at efficitur. Praesent cursus aliquam erat a commodo."/></a>
                    </div>
                </div>
                <div class="gallery-bg">
                    <div class="gallery-bg-text effect-2">
                        <a href="web/images/g7.jpg" class="big"><img src="web/images/g7.jpg" alt="" title="Maecenas aliquam nec arcu at efficitur. Praesent cursus aliquam erat a commodo." /></a>
                    </div>
                </div>
                <div class="gallery-small gallery-middle">
                    <div class="gallery-small-text effect-3">
                        <a href="web/images/g6.jpg"><img src="web/images/g6.jpg" alt="" title="Maecenas aliquam nec arcu at efficitur."/></a>
                    </div>
                </div>
                <div class="gallery-small gallery-middle">
                    <div class="gallery-small-text effect-3">
                        <a href="web/images/g8.jpg"><img src="web/images/g8.jpg" alt="" title="Nulla molestie nulla et dolor commodo pharetra."/></a>
                    </div>
                </div>
                <div class="clearfix"></div>
                
                <div class="gallery-bg">
                    <div class="gallery-bg-text effect-2">
                        <a href="web/images/g9.jpg" class="big"><img src="web/images/g9.jpg" alt="" title="Maecenas aliquam nec arcu at efficitur. Praesent cursus aliquam erat a commodo." /></a>
                    </div>
                </div>
                <div class="gallery-small gallery-middle">
                    <div class="gallery-small-text effect-3">
                        <a href="web/images/g2.jpg"><img src="web/images/g2.jpg" alt="" title="Maecenas aliquam nec arcu at efficitur. Praesent cursus aliquam erat a commodo."/></a>
                    </div>
                </div>
                <div class="gallery-small gallery-middle">
                    <div class="gallery-small-text effect-3">
                        <a href="web/images/g5.jpg"><img src="web/images/g5.jpg" alt="" title="Maecenas aliquam nec arcu at efficitur."/></a>
                    </div>
                </div>
                <div class="gallery-small gallery-middle">
                    <div class="gallery-small-text effect-3">
                        <a href="web/images/g6.jpg"><img src="web/images/g6.jpg" alt="" title="Nulla molestie nulla et dolor commodo pharetra."/></a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="web/js/simple-lightbox.js"></script>
    <script>
                $(function(){
                    var $gallery = $('.gallery a').simpleLightbox();
                    
                    $gallery.on('show.simplelightbox', function(){
                        console.log('Requested for showing');
                    })
                    .on('shown.simplelightbox', function(){
                        console.log('Shown');
                    })
                    .on('close.simplelightbox', function(){
                        console.log('Requested for closing');
                    })
                    .on('closed.simplelightbox', function(){
                        console.log('Closed');
                    })
                    .on('change.simplelightbox', function(){
                        console.log('Requested for change');
                    })
                    .on('next.simplelightbox', function(){
                        console.log('Requested for next');
                    })
                    .on('prev.simplelightbox', function(){
                        console.log('Requested for prev');
                    })
                    .on('nextImageLoaded.simplelightbox', function(){
                        console.log('Next image loaded');
                    })
                    .on('prevImageLoaded.simplelightbox', function(){
                        console.log('Prev image loaded');
                    })
                    .on('changed.simplelightbox', function(){
                        console.log('Image changed');
                    })
                    .on('nextDone.simplelightbox', function(){
                        console.log('Image changed to next');
                    })
                    .on('prevDone.simplelightbox', function(){
                        console.log('Image changed to prev');
                    })
                    .on('error.simplelightbox', function(e){
                        console.log('No image found, go to the next/prev');
                        console.log(e);
                    });
                });
    </script>

        <!-- Footer -->

        <?php require 'web/includes/footersec.php'?>

    </div>

  <?php require 'web/includes/scripts.php'?>
  <script type="text/javascript" src="web/scripts/footerdata.js"></script>
  <script type="text/javascript" src="web/scripts/turismo.js"></script>

  <script type="text/javascript" src="web/scripts/galeria/bootstrap.js"></script>
  <script type="text/javascript" src="web/scripts/galeria/easing.js"></script>
  <script type="text/javascript" src="web/scripts/galeria/move-top.js"></script>
  <script type="text/javascript" src="web/scripts/galeria/responsiveslides.min.js"></script>
  <script type="text/javascript" src="web/scripts/galeria/SmoothScroll.min.js"></script>
  <script type="text/javascript" src="web/scripts/galeria/jquery-1.11.1.min.js"></script>

  <script type="text/javascript">
        $(document).ready(function() {
            /*
                var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
                };
            */
                                
            $().UItoTop({ easingType: 'easeOutQuart' });
                                
            });
    </script>

    <script type="text/javascript">
        /* init Jarallax */
        $('.jarallax').jarallax({
            speed: 0.5,
            imgWidth: 1366,
            imgHeight: 768
        })
    </script>

</body>
</html>
