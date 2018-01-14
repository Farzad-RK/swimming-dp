<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سامانه ی مدیریت هیئت شنا</title>
    <script src=" {{asset('js/jquery.min.js')}}"></script>
    <link rel="stylesheet" href="{{ asset('/awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/w3.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/kamadatepicker.css') }}">
    <script src="{{ asset('/js/kamadatepicker.js') }}"></script>
    <script>
  $(document).ready(function(){

    $(".close-modal").click(function () {
                $("#message-modal").hide();
            });

  $("#message-modal").show();
  });
    </script>
</head>
<body>
    <div style="direction: rtl; z-index: 10;">
        <nav id="side-nav" class="w3-sidenav w3-black w3-card-16 w3-large " onmouseleave="w3_close()"  style="display: none; opacity:0.79; ">
            <a href="javascript:void(0)" id="close" onclick="w3_close()"
               class="w3-closenav w3-xlarge w3-right w3-padding-right  w3-hover-none" >&times;</a><br>
            <br>
            <a href="#" class=" w3-hover-none" style="margin-top: 5px;">ویرایش حساب کاربری</a>
            <a href="swimmers-management.html" class=" w3-hover-none">مدیریت شناگران</a>
            <a href="coaches-management.html" class=" w3-hover-none">مدیریت مربیان</a>
            <a href="teams-management.html" class=" w3-hover-none">مدیریت تیم ها</a>
            <a href="teachers-management.html" class=" w3-hover-none">مدیریت مدرسان</a>
            <a href="refrees-management.html" class=" w3-hover-none">مدیریت داوران</a>
            <a href="competitions-list.html" class=" w3-hover-none">مدیریت مسابقات</a>
            <a href="match-type.html" class=" w3-hover-none">ماده های مسابقات</a>
            <a href="courses-list.html" class=" w3-hover-none">مدیریت دوره های آموزشی</a>
            <a href="index.html" class=" w3-hover-none">صفحه ی اصلی</a>
            <span onclick="document.getElementById('').style.display='block'" class="  pointer" >درباره ی سازنده</span>
        </nav>
    </div>

    <header>
        <div class=" w3-right-align  w3-container midnight-blue " >
            <span id="open" class="w3-opennav w3-xlarge w3-right w3-text-white" onclick="w3_open()" >&#9776;</span>
            <p class="w3-padding-hor-64 w3-center  w3-xlarge">سامانه مدیریت هیئت شنا</p>
        </div>
    </header>

    <div class=" main-back-color w3-row w3-padding-hor-32 w3-center w3-xlarge">
        <p>ماده های مسابقات</p>
    </div>
    <div class="main main-back-color w3-padding-hor-8">
        <div class="w3-row w3-padding-ver-12">
            <div class="w3-col l4  w3-right w3-hide-medium w3-hide-small">&nbsp;</div>
            <div class="w3-col l4  w3-right w3-center">
                <ul id="myUL" class="w3-ul w3-card-16 w3-show-inline-block" style="width:90%">
                    <!--header-->
                    <li class="w3-row  w3-center midnight-blue w3-hide-small ">
                        <!--header-->
                        <div class="w3-col l6 m6 w3-container w3-right"><p>نام ماده</p></div>
                        <div class="w3-col l6 m6 w3-container w3-right"><p>رده سنی</p></div>
                    </li>
                    <!--end header-->
                     @foreach ($matchtypes->all() as $type)
                   <li class="w3-row  w3-center hover-peter " >
                        <div class="w3-col l6 m6 w3-container w3-right"><p><span class=' w3-hide-large w3-hide-medium'>نام ماده: </span>{{$type->name}}</p></div>
                        <div class="w3-col l6 m6 w3-container w3-right"><p><span class=' w3-hide-large w3-hide-medium'>رده سنی: </span>{{$type->age}}</p></div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>


    <div class="footer midnight-blue w3-padding-hor-32  w3-row ">
        <div class="w3-col l4 w3-right  w3-center">
            <ul class="w3-ul w3-show-inline-block ">
                <li><a href="#">ارتباط با طراح</a></li>
                <li><a href="#">آیتم</a></li>
                <li><a href="#">آیتم</a></li>
                <li><a href="#">آیتم</a></li>
            </ul>
            <ul class="w3-ul w3-show-inline-block ">
                <li><a href="#">ارتباط با طراح</a></li>
                <li><a href="#">آیتم</a></li>
                <li><a href="#">آیتم</a></li>
                <li><a href="#">آیتم</a></li>
            </ul>
            <ul class="w3-ul w3-show-inline-block ">
                <li><a href="#">ارتباط با طراح</a></li>
                <li><a href="#">آیتم</a></li>
                <li><a href="#">آیتم</a></li>
                <li><a href="#">آیتم</a></li>
            </ul>
        </div>
        <div class="w3-col l8 s12 w3-right  w3-center " style="padding-top: 50px;">

            <p class=" w3-center w3-show-inline-block w3-padding-ver-12  w3-medium">طراحی شده توسط گروه نرم افزاری شاهین، دانشگاه شهید چمران اهواز</p>
            <p style="margin-top: 50px; padding: 10px;" dir="rtl" class=" ">تمام حقوق مادی و معنوی این سایت متعلق به گروه نرم افزاری شاهین می باشد و هرگونه کپی برداری پیگرد قانونی دارد.</p>

        </div>
    </div>

<!--modalssssssss-->
    <div onclick="document.getElementById('addMatchTypeModal').style.display='block'" class="w3-btn amethyst w3-xlarge circle new-record">+</div>
    <div id="addMatchTypeModal" class=" w3-animate-opacity w3-modal"> <!--behesh w3-modal midam-->
        <div class="w3-modal-content w3-card-4 w3-right-align" style="width: 50%;">
            <header class="w3-container midnight-blue w3-padding-hor-24">
        <span onclick="document.getElementById('addMatchTypeModal').style.display='none'"
              class="w3-btn w3-large w3-display-topleft w3-transparent w3-xxlarge ">&times;</span>
                <p class="w3-xlarge">افزودن ماده</p>
            </header>
            <div class="w3-container w3-padding-hor-8 ">
                <form id="addMatchType" action="matchtype/create" method="post" class="w3-container">
                     {{ csrf_field() }}
                    <p>
                        <label>نام ماده</label>
                        <br>
                        <input required dir="rtl" name="type_name" class="w3-input w3-animate-input w3-right" type="text" style="width:50%; border-bottom: 2px solid #9b59b6!important;">
                        <br>
                        <br>
                        <br>
                    </p>

                    <p>
                        <label>رده سنی</label>
                        <br>
                        <input required dir="rtl" name="type_age" class="w3-input w3-animate-input w3-right" type="text" style="width:50%; border-bottom: 2px solid #9b59b6!important;">
                        <br>
                        <br>
                        <br>
                    </p>


                    <P>
                        <input required class="w3-btn peter-river w3-round-medium w3-btn-block" type="submit" value="افزودن ماده">
                    </P>


                </form>
            </div>

            <footer class="w3-container midnight-blue w3-padding-hor-8">
             <p>&nbsp;</p>
            </footer>
        </div>
    </div>
<!--modal endssssss-->
@if (session('status'))
<div id="message-modal" class="w3-modal w3-animate-opacity">
    <div class="w3-modal-content w3-card-4"  style="width: 500px;">
        <header class="w3-container midnight-blue w3-center">
            <h3>پیام</h3>
        </header>
        <div class="w3-container w3-center w3-padding-hor-16">
            <p>{{ session('status') }}</p>
            <p>
                <span class="w3-btn w3-green w3-margin w3-round close-modal" >باشه</span>
            </p>
        </div>
    </div>
</div>
@endif

@if(count($errors))
<div id="message-modal" class="w3-modal w3-animate-opacity">
    <div class="w3-modal-content w3-card-4"  style="width: 500px;">
        <header class="w3-container midnight-blue w3-center">
            <h3>پیام</h3>
        </header>
        <div class="w3-container w3-center w3-padding-hor-16">
          @foreach($errors->all() as $error)

            <p>{{$error}}</p>

          @endforeach
            <p>
                <span class="w3-btn w3-green w3-margin w3-round close-modal" >باشه</span>
            </p>
        </div>
    </div>
</div>
@endif






    <script>
        function w3_open() {
            document.getElementsByClassName("w3-sidenav")[0].style.display = "block";
        }
        function w3_close() {
            document.getElementsByClassName("w3-sidenav")[0].style.display = "none";
        }
    </script>

</body>
</html>
