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
        $(document).ready(function () {
            $("#add").click(function () {
                $("#curtain").slideToggle(700);
            });
            $(".remove-btn").click(function () {
                $("#remove-modal").show();
            });
            $("#close-remove-modal").click(function () {
                $("#remove-modal").hide();
            });
        });
    </script>
    <!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
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
        <span onclick="document.getElementById('').style.display='block'" class="  pointer" >درباره ی سازنده</span>
    </nav>
</div>

<header>
    <div class=" w3-right-align  w3-container midnight-blue " >
        <span id="open" class="w3-opennav w3-xlarge w3-right w3-text-white" onclick="w3_open()" >&#9776;</span>
        <p class="w3-padding-hor-64 w3-center  w3-xlarge">سامانه مدیریت هیئت شنا</p>
    </div>
</header>
<div onclick="document.getElementById('addCompetition').style.display='block'" class="w3-btn amethyst w3-xlarge circle new-record">+</div>
<div id="addCompetition" class=" w3-animate-opacity w3-modal"> <!--behesh w3-modal midam-->
    <div class="w3-modal-content w3-card-4 w3-right-align">
        <header class="w3-container midnight-blue w3-padding-hor-24">
        <span onclick="document.getElementById('addCompetition').style.display='none'"
              class="w3-btn w3-large w3-display-topleft w3-transparent w3-xxlarge ">&times;</span>
            <p class="w3-xlarge">افزودن مسابقه جدید</p>
        </header>
        <div class="w3-container w3-padding-hor-8 ">
            <form id="addCompetitionModal"  class="w3-container" method="post" action="/create">
               {{ csrf_field() }}
                <p>
                    <label>نام مسابقه</label>
                    <br>
                    <input dir="rtl" class="w3-input w3-animate-input w3-right" type="text" style="width:50%">
                    <br>
                    <br>
                    <br>
                </p>
                <p>
                    <label>تاریخ شروع</label>
                    <br>
                    <input dir="rtl" class="w3-input w3-animate-input w3-right" id="test-date-id1" type="text" style="width:50%">
                    <br>
                    <br>
                    <br>
                </p>

                <p>
                    <label>تاریخ پایان</label>
                    <br>
                    <input dir="rtl" class="w3-input w3-animate-input w3-right" id="test-date-id2" type="text" style="width:50%">
                    <br>
                    <br>
                    <br>
                </p>

                <p>
                    <label>تاریخ شروع ثبت نام</label>
                    <br>
                    <input dir="rtl" class="w3-input w3-animate-input w3-right" id="test-date-id3" type="text" style="width:50%">
                    <br>
                    <br>
                    <br>
                </p>

                <p>
                    <label>تاریخ پایان ثبت نام</label>
                    <br>
                    <input dir="rtl" class="w3-input w3-animate-input w3-right" id="test-date-id4" type="text" style="width:50%">
                    <br>
                    <br>
                    <br>
                </p>

                <p>
                    <label>محل برگزاری مسابقه</label>
                    <br>
                    <input dir="rtl" class="w3-input w3-animate-input w3-right" type="text" style="width:50%">
                    <br>
                    <br>
                    <br>
                </p>

                <p>
                    <label>جنسیت</label>
                    <br>
                    <select class="w3-select" required name="option" style="width: 50%;">
                        <option value="" disabled selected>مسابقات مردان / زنان</option>
                        <option value="1">مردان</option>
                        <option value="2">زنان</option>
                    </select>
                    <br>
                    <br>
                    <br>
                </p>

                <p>
                    <label>هزینه ثبت نام</label>
                    <br>
                    <input dir="rtl" class="w3-input w3-animate-input w3-right" type="text" style="width:50%">
                    <br>
                    <br>
                    <br>
                </p>
                
                    <p class="w3-btn amethyst w3-round-medium" id="add">ماده های مسابقه</p>
                <div id="curtain">
                    <div class="w3-row">
                        <div class="w3-half w3-right">
                            <p><input type="checkbox" class="w3-check"><label>پنجاه متر کرال سینه 10-12 سال</label></p>
                        </div>
                        <div class="w3-half">
                            <p><input type="checkbox" class="w3-check"><label>پنجاه متر کرال سینه 12-14 سال</label></p>
                        </div>
                    </div>
                    <div class="w3-row">
                        <div class="w3-half w3-right">
                            <p><input type="checkbox" class="w3-check"><label>پنجاه متر کرال سینه 10-12 سال</label></p>
                        </div>
                        <div class="w3-half">
                            <p><input type="checkbox" class="w3-check"><label>پنجاه متر کرال سینه 12-14 سال</label></p>
                        </div>
                    </div>
                    <div class="w3-row">
                        <div class="w3-half w3-right">
                            <p><input type="checkbox" class="w3-check"><label>پنجاه متر کرال سینه 10-12 سال</label></p>
                        </div>
                        <div class="w3-half">
                            <p><input type="checkbox" class="w3-check"><label>پنجاه متر کرال سینه 12-14 سال</label></p>
                        </div>
                    </div>
                    <div class="w3-row">
                        <div class="w3-half w3-right">
                            <p><input type="checkbox" class="w3-check"><label>پنجاه متر کرال سینه 10-12 سال</label></p>
                        </div>
                        <div class="w3-half">
                            <p><input type="checkbox" class="w3-check"><label>پنجاه متر کرال سینه 12-14 سال</label></p>
                        </div>
                    </div>
                    <div class="w3-row">
                        <div class="w3-half w3-right">
                            <p><input type="checkbox" class="w3-check"><label>پنجاه متر کرال سینه 10-12 سال</label></p>
                        </div>
                        <div class="w3-half">
                            <p><input type="checkbox" class="w3-check"><label>پنجاه متر کرال سینه 12-14 سال</label></p>
                        </div>
                    </div>
                    <div class="w3-row">
                        <div class="w3-half w3-right">
                            <p><input type="checkbox" class="w3-check"><label>پنجاه متر کرال سینه 10-12 سال</label></p>
                        </div>
                        <div class="w3-half">
                            <p><input type="checkbox" class="w3-check"><label>پنجاه متر کرال سینه 12-14 سال</label></p>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <P>
                    <input class="w3-btn peter-river w3-round-medium w3-btn-block" type="submit" value="ثبت مسابقه">
                </P>


            </form>
        </div>
        <footer class="w3-container midnight-blue w3-padding-hor-8">
            <p>ثبت مسابقات</p>
        </footer>
    </div>
</div>

<div class=" main-back-color w3-row w3-padding-hor-32 w3-center w3-xlarge">
    <p>لیست مسابقات شنا</p>
</div>
<div class="main main-back-color w3-padding-hor-8">
    <div class="w3-row w3-padding-ver-12 ">
        <div class="w3-col l12">
            <div class="  w3-padding-hor-24 w3-center" style="width: 100%; margin: auto;">
                <ul id="myUL" class="w3-ul w3-card-16 w3-show-inline-block" style="width:90%">

                    <li class="w3-row  w3-center midnight-blue w3-hide-small w3-hide-medium">
                        <div class="w3-half w3-right">
                            <div class="w3-quarter  w3-padding-tiny w3-right">نام مسابقه</div>
                            <div class="w3-quarter  w3-padding-tiny w3-right">تاریخ شروع</div>
                            <div class="w3-quarter  w3-padding-tiny w3-right">تاریخ پایان</div>
                            <div class="w3-quarter  w3-padding-tiny w3-right">تاریخ شروع ثبت نام</div>
                        </div>
                        <div class="w3-half">
                            <div class="w3-quarter  w3-padding-tiny w3-right">تاریخ پایان ثبت نام</div>
                            <div class="w3-quarter  w3-padding-tiny w3-right">محل برگزاری مسابقه</div>
                            <div class="w3-quarter  w3-padding-tiny w3-right">جنسیت</div>
                            <div class="w3-quarter  w3-padding-tiny w3-right">
                                <span>هزینه ثبت نام</span>
                            </div>
                        </div>

                    </li>
                       @foreach ($matches->all() as $match)
                    <li class="w3-row  w3-center hover-peter"  >
                        <div class="w3-half w3-right">
                            <div class="w3-quarter  w3-padding-tiny w3-right">
                                <a style="text-decoration: none;" href="#">{{$match->name}}</a>
                            </div>
                            <div class="w3-quarter  w3-padding-tiny w3-right "><span class=' w3-hide-large'>تاریخ شروع: </span> {{$match->startDate}} </div>
                            <div class="w3-quarter  w3-padding-tiny w3-right "><span class=' w3-hide-large'>تاریخ پایان: </span> {{$match->endDate}} </div>
                            <div class="w3-quarter  w3-padding-tiny w3-right "><span class=' w3-hide-large'>تاریخ شروع ثبت نام: </span>{{$match->regDate}}</div>
                        </div>
                        <div class="w3-half">
                            <div class="w3-quarter  w3-padding-tiny w3-right "><span class=' w3-hide-large'>تاریخ پایان ثبت نام: </span>  {{$match->regDate}} </div>
                            <div class="w3-quarter  w3-padding-tiny w3-right "><span class=' w3-hide-large'>محل برگزاری مسابقه: </span> {{$match->place}}  </div>
                            <div class="w3-quarter  w3-padding-tiny w3-right "><span class=' w3-hide-large'>جنسیت: </span> {{$match->gender}} </div>
                            <div class="w3-quarter  w3-padding-tiny w3-right "><span class=' w3-hide-large'>هزینه ثبت نام: </span>
                                  <span class="">{{$match->registrationCost}}</span>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>
    <div class="w3-center w3-padding-hor-12">
     {{$matches->render("pagination::bootstrap-4")}}
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
    <div class="w3-col l8 s12 w3-right  w3-center " style="padding-top: 50px">


        <p class=" w3-center w3-show-inline-block w3-padding-ver-12  w3-medium">طراحی شده توسط گروه نرم افزاری شاهین، دانشگاه شهید چمران اهواز</p>
    </div>
</div>
<div id="remove-modal" class="w3-modal w3-animate-opacity">
    <div class="w3-modal-content w3-card-4"  style="width: 500px;">
        <header class="w3-container midnight-blue w3-center">
            <h3>حذف</h3>
        </header>
        <div class="w3-container w3-center w3-padding-hor-16">
            <p>آیا از حذف مورد انتخاب شده مطمئن هستید؟</p>
            <p>
                <span class="w3-btn w3-red w3-margin w3-round">بله</span>
                <span class="w3-btn w3-green w3-margin w3-round" id="close-remove-modal">خیر</span>
            </p>
        </div>
    </div>
</div>



<script>
    function w3_open() {
        document.getElementsByClassName("w3-sidenav")[0].style.display = "block";
    }
    function w3_close() {
        document.getElementsByClassName("w3-sidenav")[0].style.display = "none";
    }
</script>
<script>
    kamaDatepicker('test-date-id1');
    kamaDatepicker('test-date-id2');
    kamaDatepicker('test-date-id3');
    kamaDatepicker('test-date-id4');
</script>

</body>
</html>
