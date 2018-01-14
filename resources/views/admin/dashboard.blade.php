<!doctype html>
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
        <a href="courses-list.html" class=" w3-hover-none">مدیریت دوره های آموزشی</a>
        <a href="index.html" class=" w3-hover-none">صفحه ی اصلی</a>
        <a href="/admin/logout" class=" w3-hover-none">خروج</a>
        <span onclick="document.getElementById('').style.display='block'" class="  pointer" >درباره ی سازنده</span>
    </nav>
</div>


    <header>
        <div class=" w3-right-align  w3-container midnight-blue " >
            <span id="open" class="w3-opennav w3-xlarge w3-right w3-text-white" onclick="w3_open()" >&#9776;</span>
            <p class="w3-padding-hor-64 w3-center  w3-xlarge">سامانه مدیریت هیئت شنا</p>
        </div>
    </header>
    <div class="  w3-row w3-padding-hor-32 w3-center w3-xlarge">
            <p>پنل مدیریت</p>
    </div>
    <div class="main w3-padding-hor-8">
        <div class="w3-row w3-padding-ver-12 ">
            <!--<div class="w3-col l2 w3-right ">&nbsp;</div>-->
            <div class="w3-col l4 m6 w3-center w3-right">
                <div class="item holder item1 w3-card-16 w3-round-medium ">
                    <div class=" shell ">
                        <p class="card">
                            <span class="w3-btn btn-2 w3-round">لیست مسابقات</span>
                            <span class="w3-btn btn-1 w3-round">اضافه کردن مسابقه</span>
                        </p>
                    </div>
                    <div class="icon-holder">
                        <div class="icon">
                            <i class="fa fa-trophy  fa-3x w3-text-white" aria-hidden="true"></i>
                        </div>
                        <br>
                        <br>
                        <div class="w3-xlarge title-background w3-text-white w3-padding w3-round">مسابقات</div>
                    </div>
                </div>
            </div>
            <!--<div class="w3-col l1 w3-right ">&nbsp;</div>-->
            <div class="w3-col l4 m6 w3-center w3-right">
                <div class="item holder item2 w3-card-16  w3-round-medium">
                    <div class=" shell">
                        <p class="card">
                            <span class="w3-btn btn-2 w3-round">لیست دوره ها</span>
                            <span class="w3-btn btn-1 w3-round">اضافه کردن دوره</span>
                        </p>
                    </div>
                    <div class="icon-holder">
                        <div class="icon">
                            <i class="fa fa-book fa-3x w3-text-white" aria-hidden="true"></i>
                        </div>
                        <br>
                        <br>
                        <div class="w3-xlarge title-background w3-text-white w3-padding w3-round">دوره های آموزشی</div>
                    </div>
                </div>
            </div>
            <!--<div class="w3-col l1 w3-right ">&nbsp;</div>-->
            <div class="w3-col l4 m6  w3-center w3-right">
                <div class="item holder item3 w3-card-16  w3-round-medium ">
                    <div class=" shell">
                        <p class="card">
                            <span class="w3-btn btn-2 w3-round">مشاهده اخبار</span>
                            <span class="w3-btn btn-1 w3-round">درج خبر جدید</span>
                        </p>
                    </div>
                    <div class="icon-holder">
                        <div class="icon ">
                            <i class="fa fa-newspaper-o fa-3x w3-text-white " aria-hidden="true"></i>
                        </div>
                        <br>
                        <br>
                        <div class="w3-xlarge title-background w3-text-white w3-padding w3-round">اخبار و اطلاعیه ها</div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>


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
            <div class="w3-col l8 s12 w3-right  w3-center " style="padding-top: 50px">


                <p class=" w3-center w3-show-inline-block w3-padding-ver-12  w3-medium">طراحی شده توسط گروه نرم افزاری شاهین، دانشگاه شهید چمران اهواز</p>
            </div>
        </div>



















    <!--<div class="w3-round return-to-top">-->
    <!--^^^-->
<!--</div>-->


<script>
    function w3_open() {
        document.getElementsByClassName("w3-sidenav")[0].style.display = "block";
    }
    function w3_close() {
        document.getElementsByClassName("w3-sidenav")[0].style.display = "none";
    }
var storage = window.localStorage;
var cred = storage.getItem("credentials");
console.log(JSON.parse(cred))
</script>
</body>

</html>
