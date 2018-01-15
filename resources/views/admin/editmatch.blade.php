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
    <script>
        $(document).ready(function () {
            $(".j-refree-select").hide();
            $(".j-refree-select-btn").click(function () {
                $(".j-refree-select").slideToggle(1200);
            });

            $(".j-remove-btn").click(function () {
                $("#remove-modal").fadeIn();
            });
            $("#close-remove-modal").click(function () {
                $("#remove-modal").fadeOut();
            });
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
    <p>ویرایش مسابقات</p>
</div>
<div class="main main-back-color w3-padding-hor-8">
    <div class="w3-row w3-padding-ver-12 ">
        <div class="w3-col l3  w3-right w3-hide-medium w3-hide-small">&nbsp;</div>
        <div class="w3-col l6  w3-right w3-center">

            <ul id="myUL" class="w3-ul w3-card-16 midnight-blue w3-show-inline-block" style="width:90%">
                <form method="post" action="/admin/match/update">
                    <input hidden name="id" type="text" value={{$match->id}}>
                <li class="w3-row  w3-center  " >
                    <div class="w3-col l6 m6 w3-container w3-right w3-margin-bottom"><p dir="rtl"><span  class='w3-right'>نام مسابقه: </span><input name="name" value="{{$match->name}}" autofocus type="text" class="my-input w3-input w3-margin-top border-bottom w3-transparent"></p></div>
                    <div class="w3-col l6 m6 w3-container w3-right w3-margin-bottom"><p dir="rtl"><span  class='w3-right'>تاریخ شروع: </span><input name="startDate" value="{{$match->startDate}}" type="text" class="my-input w3-input w3-margin-top border-bottom w3-transparent"></p></div>
                    <div class="w3-col l6 m6 w3-container w3-right w3-margin-bottom"><p dir="rtl"><span  class='w3-right'>تاریخ پایان: </span><input name="endDate" value="{{$match->endDate}}" type="text" class="my-input w3-input w3-margin-top border-bottom w3-transparent"></p></div>
                    <div class="w3-col l6 m6 w3-container w3-right w3-margin-bottom"><p dir="rtl"><span  class='w3-right'>تاریخ شروع ثبت نام: </span><input name="regStartDate" value="{{$match->regStartDate}}" type="text" class="my-input w3-input w3-margin-top border-bottom w3-transparent"></p></div>
                    <div class="w3-col l6 m6 w3-container w3-right w3-margin-bottom"><p dir="rtl"><span  class='w3-right'>تاریخ پایان ثبت نام: </span><input name="regEndDate" value="{{$match->regEndDate}}"  type="text" class="my-input w3-input w3-margin-top border-bottom w3-transparent"></p></div>
                    <div class="w3-col l6 m6 w3-container w3-right w3-margin-bottom"><p dir="rtl"><span  class='w3-right'>محل برگزاری: </span><input name="place" value="{{$match->place}}"  type="text" class="my-input w3-input w3-margin-top border-bottom w3-transparent"></p></div>
                    <div class="w3-col l6 m6 w3-container w3-right"><p dir="rtl">
                            @if($match->gender=='مرد')
                            <span  class='w3-right '>جنسیت: </span>
                            <select name="gender" class="w3-select my-input w3-text-white " id="">
                                <option class="w3-text-white"  selected value="مرد">مرد</option>
                                <option value="زن">زن</option>
                            </select>
                             @else
                                <span  class='w3-right my-input w3-text-white '>جنسیت: </span>
                                <select  name="gender" class="w3-select my-input w3-text-white" id="">
                                    <option class="w3-text-white" value="مرد">مرد</option>
                                    <option selected value="زن">زن</option>
                                </select>

                            @endif
                        </p>
                    </div>
                    <div class="w3-col l6 m6 w3-container w3-right"><p dir="rtl">
                            <span  class='w3-right'>ماده: </span>
                            <select class="w3-select w3-text-white my-input" required name="type"  style="width: 100%;">
                                @foreach ($types->all() as $type)
                                    @if($match->type->id == $type->id)
                                    <option selected value={{$type->id}}>{{$type->age}}&nbsp;{{$type->name}}</option>
                                    @else
                                    <option value={{$type->id}}>{{$type->age}}&nbsp;{{$type->name}}</option>
                                        @endif
                                @endforeach
                            </select>
                        </p>
                    </div>
                    <div class="w3-col l6 m6 w3-container w3-right w3-margin-bottom">
                        <p dir="rtl"><span  class='w3-right'>هزینه: </span>
                            <input name="regCost" type="text" value="{{ $match->registrationCost}}"  class="my-input w3-input w3-margin-top border-bottom w3-transparent" > </p></div>
                    <div class="w3-col l6 m6 w3-container w3-right w3-margin-bottom">
                        <p dir="rtl"><span  class='w3-btn-block w3-btn j-refree-select-btn w3-round-medium amethyst'>داور</span>
                    <br>
                    <br>
                    <p class="j-refree-select">

                    <select multiple class="w3-select" name="refrees" id="">
                @if(count($refrees)==0)
                    <option dir="rtl" value="">داوری در سامانه وجود ندارد</option>
                @else
                @foreach($refrees->all() as $refree)
                @if(in_array($refree, $match->$refrees))
                    <option selected value="{{$refree->id}}"></option>
                @else
                    <option value="{{$refree->id}}"></option>
                    @endif

                    @endforeach
                    @endif
                    </select>
                    </p>
                        </p>
                    </div>
                    <div class="w3-col l6 m6 w3-container w3-right w3-margin-bottom"><p> <button class="j-remove-btn w3-btn w3-red w3-round-medium w3-btn-block">حذف این مسابقه</button></p></div>
                    <div class="w3-col l12 m12 w3-container w3-right w3-margin-bottom"><p><button type="submit" class="w3-btn w3-blue w3-round-medium w3-btn-block">ویرایش و ثبت تغییرات</button></p></div>
                </li>
                </form>
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
    <div class="w3-col l8 s12 w3-right  w3-center " style="padding-top: 50px">


        <p class=" w3-center w3-show-inline-block w3-padding-ver-12  w3-medium">طراحی شده توسط گروه نرم افزاری شاهین، دانشگاه شهید چمران اهواز</p>
    </div>
</div>




<!--modaaalllllssssssswss-->

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

<!--end modaaaalllllllssssss-->

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