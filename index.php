<!DOCTYPE html>
<head>
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
<!--
Puzzle Template
http://www.templatemo.com/tm-477-puzzle
-->
    <title>Tugas PAW besar</title>
</head>

<body>

<!--  -->

    <div class="fixed-header">
        <div class="container">
            <div class="navbar-header">
               
                <a class="navbar-brand" href="#">KOLEKTOR</a>
            </div>
            <nav class="main-menu">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
    
    <div class="container">
        <section class="col-md-12 content" id="home">
           <div class="col-lg-6 col-md-6 content-item">
               <img src="images/kamera.jpg" alt="Image" class="tm-image">
           </div>
           <div class="col-lg-6 col-md-6 content-item content-item-1 background">
               <h2 class="main-title text-center dark-blue-text">Syarat dan Ketentuan</h2>
               <p>1. Jika ingin melihat barang antik atau ingin membeli harus menjadi <span class="light-blue-text">anggota</span>  terlebih dahulu</p>

               <p>2. Anggota dapat menjual dan membeli barang antik</p>
               <p>3. terdapat berbagai macam jenis barang antik</p>

               <a href="signup.php" <button type="button" class="btn btn-mid dark-blue-bordered-btn" </button>Signup</a>

               <a href="login.php" <button type="button" class="btn btn-mid dark-blue-btn"</button>Login</a>
           </div>
       </section>

       <section class="col-md-12 content padding" id="">
        <div class="col-lg-6 col-md-6 col-md-push-6 content-item">
           <img src="images/mixpoto.jpg" alt="Image" class="tm-image">
       </div>
       <div class="col-lg-6 col-md-6 col-md-pull-6 content-item background flexbox">
           <h2 class="section-title">Ada barang antik apa saja?</h2>
           <p class="section-text">di dalam web ini terdapat berbagai jenis barang antik yang anda dapat temukan dan langka, dari berbagai pelosok didunia, seperti : </p>
           <ul class="dark-blue-text">
               <li>+ PRANGKO </li>
               <li>+ DIECAST</li>
               <li>+ PIRINGAN HITAM</li>
               <li>+ BUKU LANGKA</li>
               <li>+ KAMERA</li>
               <li>+ DAN LAINNYA</li>

           </ul>
           <p>Ayo join sekarang juga dan temukan barang antik dan langka yang ingin kamu cari disini. </p>
           <p>Curabitur vel rutrum augue, id tristique diam. Sed imperdiet quis ipsum a vulputate. Suspendisse sit amet nibh mi. </p>
       </div>

   </section>


   <section class="col-md-12 content" id="">
       <div class="col-lg-6 col-md-6 content-item">
           <img src="images/3.jpg" alt="Image" class="tm-image">
       </div>
       <div class="col-lg-6 col-md-6 content-item background flexbox">
           <h2 class="section-title">Our Clients</h2>
           <p>Maecenas tempus nisi in arcu facilisis venenatis. Fusce ac turpis sem. Nulla eget sem sit amet turpis tempus viverra at et odio. Crasvel eros id ipsum accumsan venenatis ut nec ipsum. </p>
           <p>Nulla odio nunc, rhoncus quis porttitor quis, convallis sed tortor. Quisque dui metus, euismod vel sapien at, maximus feugiat tellus. </p>
           <p>Curabitur vel rutrum augue, id tristique diam. Sed imperdiet quis ipsum a vulputate. Suspendisse sit amet nibh mi. In quis sapien a metus interdum hendrerit. </p>
           <p>Ut a dignissim est, sodales pellentesque purus. Pellentesque porttitor ante at nulla ornare, eget sagittis sapien pulvinar.</p>
           <div>
               <button type="button" class="btn dark-blue-bordered-btn normal-btn">Small Button</button>
               <button type="button" class="btn yellow-btn normal-btn">Download</button>
               <button type="button" class="btn green-btn normal-btn">Demo</button>    
           </div>             
       </div>
   </section>


   <section class="col-md-12 content" id="contact">
       <div class="col-lg-6 col-md-6 col-md-push-6 content-item">
           <img src="images/4.jpg" alt="Image" class="tm-image">
       </div>
       <div class="col-lg-6 col-md-6 col-md-pull-6 content-item background flexbox">
           <h2 class="section-title">Contact Us</h2>
           <p class="margin-b-25">Nulla eget sem sit amet turpis tempus viverra at et odio. Cras vel eros id ipsum accumsan venenatis ut nec ipsum.</p>

           <!--<div class="row"> -->
           <form method="post" name="contact-form" class="contact-form">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <input name="name" type="text" class="form-control" id="name" placeholder="Your Name..." required>
                </div>    
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pad-l-3">
                <div class="form-group contact-field">
                    <input name="email" type="email" class="form-control" id="email" placeholder="Your Email..." required>
                </div>    
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group contact-field">
                    <input name="subject" type="text" class="form-control" id="subject" placeholder="Your Subject..." required>
                </div>    
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group contact-field">
                    <textarea name="message" rows="5" class="form-control" id="message" placeholder="Write your message..." required></textarea>
                </div>    
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group margin-b-0">
                    <button type="submit" id="form-submit" class="btn no-bg btn-contact">Submit</button>
                </div>    
            </div>
        </form>
        <!--</div> -->
        <div id="msgSubmit" class="h3 text-center hidden">Message Submitted!</div>

    </div>

</section>

<footer class="col-md-12 content" id="externals">
 <div class="col-lg-6 col-md-6 last">
   <img src="images/5.png" alt="Image" class="tm-image">
</div>
<div class="col-lg-6 col-md-6 background last about-text-container">
   <h2 class="section-title">About This Website</h2>
   <p class="about-text">Website ini dibuat untuk memenuhi salah satu tugas besar matakuliah Pengembangan Aplikasi Web</p>       
</div>
</footer>

</div>

<div class="text-center footer">
	<div class="container">
		Copyright@
    </div>
</div>


<!-- Check scroll position and add/remove background to navbar
function checkScrollPosition() {
    if($(window).scrollTop() > 10) {
      $(".fixed-header").addClass("scroll");
  } else {        
      $(".fixed-header").removeClass("scroll");
  }
}

$(document).ready(function () {   
    // Single page nav
    $('.fixed-header').singlePageNav({
        offset: 59,
        filter: ':not(.external)',
        updateHash: true        
    });

    checkScrollPosition();

    // nav bar
    $('.navbar-toggle').click(function(){
        $('.main-menu').toggleClass('show');
    });

    $('.main-menu a').click(function(){
        $('.main-menu').removeClass('show');
    });
});
*/


$(window).on("scroll", function() {
    checkScrollPosition();    
}); -->


</script>
</body>
</html>