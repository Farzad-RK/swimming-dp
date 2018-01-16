<!DOCTYPE html>
<html>
<title>صفحه اصلی | هیئت شنای استان</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href= "{{asset("/w3-v4/w3.css") }}">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="{{ asset('/awesome/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('/css/w3.css') }}">
<link rel="stylesheet" href="{{ asset('/css/index.css') }}">
<link rel="stylesheet" href="{{ asset('/css/kamadatepicker.css') }}">
<body>

<!-- Navbar -->
<div class="w3-top">
    <div class="w3-bar  w3-card" style="  background-color: #2c3e50!important; color: #ffffff;">
        <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
        <a href="#" class="w3-bar-item w3-button w3-padding-large">خانه</a>
        <a href="/login" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ثبت نام و ورود</a>
        <a href="#tour" class="w3-bar-item w3-button w3-padding-large w3-hide-small">مشاهده اخبار</a>
        <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ارتباط با هیئت</a>
        <div class="w3-dropdown-hover w3-hide-small">
            <button class="w3-padding-large w3-button" title="More">بیشتر <i class="fa fa-caret-down"></i></button>
            <div class="w3-dropdown-content w3-bar-block w3-card-4">
                <a href="#" class="w3-bar-item w3-button">گالری عکس</a>
                <a href="#" class="w3-bar-item w3-button">افتخارات</a>
                <a href="#" class="w3-bar-item w3-button">مطالب مرتبط</a>
            </div>
        </div>
        <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
    </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
    <a href="#band" class="w3-bar-item w3-button w3-padding-large">خانه</a>
    <a href="/login" class="w3-bar-item w3-button w3-padding-large">ثبت نام و ورود</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large">ارتباط با هیئت</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">مشاهده اخبار</a>
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px; ">

    <!-- Automatic Slideshow Images -->
    <div class="mySlides w3-display-container w3-center">
        <img src="images/Picture1.jpg" style="width:100%">
        <div class="w3-display-topmiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
            <h2>هیئت شنای استان خوزستان</h2>
        </div>
    </div>
    <div class="mySlides w3-display-container w3-center">
        <img src="images/Picture2.jpg" style="width:100%">
        <div class="w3-display-topmiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
            <h2>هیئت شنای استان خوزستان</h2>
        </div>
    </div>
    <div class="mySlides w3-display-container w3-center">
        <img src="images/Picture3.jpg" style="width:100%">
        <div class="w3-display-topmiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
            <h2>هیئت شنای استان خوزستان</h2>
        </div>
    </div>

    <div class="mySlides w3-display-container w3-center">
        <img src="images/Picture4.jpg" style="width:100%">
        <div class="w3-display-topmiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
            <h2>هیئت شنای استان خوزستان</h2>
        </div>
    </div>

    <!-- The Band Section -->
    <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
        <h2 class="">گزیده اخبار هیئت</h2>
        <!-- First Photo Grid-->
        <div class="w3-row-padding">
            <div class="w3-third w3-container w3-margin-bottom w3-card-4 w3-padding">
                <img src="images/Picture11.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
                <div class="w3-container w3-white">
                    <p><b>لورم ایپسوم</b></p>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                </div>
            </div>
            <div class="w3-third w3-container w3-margin-bottom w3-card-4  w3-padding">
                <img src="images/Picture22.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
                <div class="w3-container w3-white">
                    <p><b>لورم ایپسوم</b></p>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                </div>
            </div>
            <div class="w3-third w3-container w3-card-4 w3-padding ">
                <img src="images/Picture33.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
                <div class="w3-container w3-white">
                    <p><b>لورم ایپسوم</b></p>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                </div>
            </div>
        </div>

    </div>


    <!-- The Contact Section -->
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
        <h2 class=" w3-center">ارتباط با هیئت</h2></p>
        <div class="w3-row w3-padding-32">
            <div class="w3-col m6 w3-large w3-margin-bottom">
                <i class="fa fa-map-marker" style="width:30px"></i>خوزستان، اهواز<br>
                <i class="fa fa-phone" style="width:30px"></i>  +98 123456789<br>
                <i class="fa fa-envelope" style="width:30px"> </i>  mail@mail.com<br>
            </div>
            <div class="w3-col m6">
                <form action="/action_page.php" target="_blank">
                    <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                        <div class="w3-half">
                            <input class="w3-input w3-border" type="text" placeholder="نام" required name="Name">
                        </div>
                        <div class="w3-half">
                            <input class="w3-input w3-border" type="text" placeholder="پست الکترونیک" required name="Email">
                        </div>
                    </div>
                    <input class="w3-input w3-border" type="text" placeholder="پیام خود را بنویسید" required name="Message">
                    <button class="w3-button w3-black w3-round-medium w3-section w3-right" type="submit">ارسال</button>
                </form>
            </div>
        </div>
    </div>

    <!-- End Page Content -->
</div>
<!-- Add Google Maps -->
<div id="googleMap" style="height:400px;" class=""></div>
<script>
    function myMap() {
        myCenter=new google.maps.LatLng(31.301062, 48.653234);
        var mapOptions= {
            center:myCenter,
            zoom:12, scrollwheel: false, draggable: false,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

        var marker = new google.maps.Marker({
            position: myCenter,
        });
        marker.setMap(map);
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center   w3-xlarge" style="  background-color: #2c3e50!important; color: #ffffff;">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <p class="w3-medium">طراحی توسط <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">گروه شاهین</a></p>
</footer>

<script>
    // Automatic Slideshow - change image every 4 seconds
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = "block";
        setTimeout(carousel, 4000);
    }

    // Used to toggle the menu on small screens when clicking on the menu button
    function myFunction() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }

    // When the user clicks anywhere outside of the modal, close it
    var modal = document.getElementById("ticketModal");
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

</body>
</html>
