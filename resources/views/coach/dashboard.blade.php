<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سامانه ی مدیریت هیئت شنا</title>
    <link rel="stylesheet" href=" {{ asset('css/swimmer-style.css') }}">
    <script src=" {{asset('js/jquery.min.js')}}"></script>
    <script src=" {{asset('js/navigation.js')}}"></script>

    <link rel="stylesheet" href="{{ asset('/awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/w3.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/kamadatepicker.css') }}">

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
        <a href="#" class=" w3-hover-none">مدیریت شناگران</a>
        <span onclick="document.getElementById('').style.display='block'" class="  pointer" >درباره ی سازنده</span>
        <a href="/coach/logout" class=" w3-hover-none">خروج</a>
    </nav>
</div>

<header>
    <div class=" w3-right-align  w3-container  midnight-blue" >
        <span id="open" class="w3-opennav w3-xlarge w3-right " onclick="w3_open()" >&#9776;</span>
        <p class="w3-padding-hor-64 w3-center  w3-xlarge">هیئت شنای استان خوزستان</p>
    </div>
</header>

<div class=" main-back-color w3-row w3-padding-hor-32 w3-center w3-xlarge">
    <p>پنل کاربری</p>
</div>
<div class="main main-back-color w3-padding-hor-8">
    <div class="w3-row  ">
        <div class="w3-col l1 m1 s1">&nbsp;</div>
        <div class="w3-col l10 m10 s12">
            <div class="w3-row ">
              <div class="w3-col  w3-quarter  w3-right w3-hide-large w3-hide-medium" >
                    <ul style="margin: 0 30px 0 30px;">
                        <li id="selected11"  class="w3-btn w3-btn-block w3-margin-bottom w3-padding-12 w3-round-small w3-right-align border-right amethyst">
                            <!--<a href="#">-->
                                <span class="w3-margin-right">دوره های ارائه شده</span> <i class="fa fa-book"></i>
                            <!--</a>-->
                        </li>
                        <li id="selected22"  class="w3-btn w3-btn-block w3-margin-bottom w3-padding-12 w3-round-small w3-right-align  amethyst">
                            <!--<a href="#">-->
                                <span class="w3-margin-right">دوره های من</span> <i class="fa fa-book"></i>
                            <!--</a>-->
                        </li>
                        <li id="selected33"  class="w3-btn w3-btn-block w3-margin-bottom w3-padding-12 w3-round-small w3-right-align  amethyst">
                            <!--<a href="#">-->
                                <span class="w3-margin-right">تیم من</span> <i class="fa fa-group"></i>
                            <!--</a>-->
                        </li>
                        <li id="selected44"  class="w3-btn w3-btn-block w3-margin-bottom w3-padding-12 w3-round-small w3-right-align  amethyst">
                            <!--<a href="#">-->
                                <span class="w3-margin-right">مسابقات پیش رو</span> <i class="fa fa-trophy"></i>
                            <!--</a>-->
                        </li>
                        <li id="selected55"  class="w3-btn w3-btn-block w3-margin-bottom w3-padding-12 w3-round-small w3-right-align  amethyst">
                            <!--<a href="#">-->
                                <span class="w3-margin-right">مسابقات من</span> <i class="fa fa-trophy"></i>
                            <!--</a>-->
                        </li>
                        <li id="selected66"  class="w3-btn w3-btn-block w3-margin-bottom w3-padding-12 w3-round-small w3-right-align  amethyst">
                            <!--<a href="#">-->
                                <span class="w3-margin-right" >حساب کاربری</span> <i class="fa fa-user"></i>
                            <!--</a>-->
                        </li>
                    </ul>
                </div>









                <div class="w3-col w3-quarter w3-right  w3-hide-small" style="position: sticky; top: 50px;">
                    <ul>
                        <li id="selected1" class="w3-btn w3-btn-block w3-margin-bottom w3-padding-12 w3-round-small w3-right-align border-right amethyst">
                            <!--<a href="#">-->
                                <span class="w3-margin-right">دوره های ارائه شده</span> <i class="fa fa-book"></i>
                            <!--</a>-->
                        </li>
                        <li id="selected2"  class="w3-btn w3-btn-block w3-margin-bottom w3-padding-12 w3-round-small w3-right-align  amethyst">
                            <!--<a href="#">-->
                                <span class="w3-margin-right" class="w3-margin-right" class="w3-margin-right">دوره های من</span> <i class="fa fa-book"></i>
                            <!--</a>-->
                        </li>
                        <li id="selected3"  class="w3-btn w3-btn-block w3-margin-bottom w3-padding-12 w3-round-small w3-right-align  amethyst">
                            <!--<a href="#">-->
                                <span class="w3-margin-right" class="w3-margin-right">تیم من</span> <i class="fa fa-group"></i>
                            <!--</a>-->
                        </li>
                        <li id="selected4"  class="w3-btn w3-btn-block w3-margin-bottom w3-padding-12 w3-round-small w3-right-align  amethyst">
                            <!--<a href="#">-->
                                <span class="w3-margin-right" class="w3-margin-right">مسابقات پیش رو</span> <i class="fa fa-trophy"></i>
                            <!--</a>-->
                        </li>
                        <li id="selected5"  class="w3-btn w3-btn-block w3-margin-bottom w3-padding-12 w3-round-small w3-right-align  amethyst">
                            <!--<a href="#">-->
                                <span class="w3-margin-right" class="w3-margin-right">مسابقات من</span> <i class="fa fa-trophy"></i>
                            <!--</a>-->
                        </li>
                        <li id="selected6"  class="w3-btn w3-btn-block w3-margin-bottom w3-padding-12 w3-round-small w3-right-align  amethyst">
                            <!--<a href="#">-->
                                <span class="w3-margin-right" class="w3-margin-right">حساب کاربری</span> <i class="fa fa-user"></i>
                            <!--</a>-->
                        </li>
                    </ul>
                </div>




                <div class=" w3-threequarter  w3-right-align w3-container ">
                    <div id="mainItem1-available-courses">
                        <div id="item1" class="w3-row  ">

                              <h4 class="w3-center" dir="rtl">هیچ دوره ای اريه نشده است</h4>

                        </div>
                    </div>

                    <div id="mainItem1-my-courses" style="display: none;">



                        <div id="item2" class="w3-row  ">



                           <h4 class="w3-center" dir="rtl">شما در هیچ دوره ای شرکت نکرده اید.</h4>
                        </div>

                    </div>
                    <div id="mainItem1-my-team" style="display: none;">
                      @if(count($team)>0)
                        <div id="my-team-table">
                            <table class="w3-table" style="width: 90% ; margin: auto;">
                                <tr style="border: 1px solid white;">
                                    <td width="70%" class="peter-river w3-right-align w3-cen">{{$team->name}}</td>
                                    <td width="30%" class="midnight-blue w3-right-align">نام تیم</td>
                                </tr>
                                <tr style="border: 1px solid white;">
                                    <td width="70%" class="peter-river w3-right-align">{{$team->coach_name}}</td>
                                    <td width="30%" class="midnight-blue w3-right-align">نام سرمربی</td>
                                </tr>
                                <tr style="border: 1px solid white;">
                                    <td width="70%" class="peter-river w3-right-align">
                                        <ul class="w3-ul">
                                          @foreach($team->members->all() as $member)
                                          <li>{{$member->firstName}}&nbsp;{{$member->lastName}}</li>
                                        </ul>
                                          @endforeach
                                    </td>
                                    <td width="30%" class="midnight-blue w3-right-align">نام اعضای تیم</td>
                                </tr>
                            </table>
                        </div>
                       @else

                       <h4 class="w3-center" dir="rtl">تیم جدید تشکیل دهید.</h4>

                         <div class="w3-row" style="position:relative; height: 300px;">
                             <div class="w3-col l4 m3 s1 w3-right">&nbsp;</div>
                             <div class="w3-col l4 m6 s10 w3-right w3-sand w3-card-16 w3-container w3-padding-24">
                                 <form action="/coach/createteam" method="post">
                                     <p>
                                         <label for="teamname">نام تیم</label>
                                         <input id="teamname" name="name" dir="rtl" type="text" class=" w3-transparent w3-input border-bottom" >
                                     </p>
                                     <p>
                                         <input class="w3-btn peter-river w3-btn-block w3-round-medium w3-margin-top" type="submit" value="ثبت تیم">
                                     </p>
                                 </form>
                             </div>
                         </div>

                       @endif
                    </div>
                    <div id="mainItem1-competitions" style="display: none;">
                        <div id="item3" class="w3-row  ">
                          @if(count($my_matches)>0)
                          @foreach($my_matches->all() as $my_match)
                           <div class="w3-col l4  w3-right w3-center margin-bottom-custom">
                               <div class="w3-card-16  course-item w3-sand w3-show-inline-block">
                                   <div class="w3-row">
                                       <!--<ul class="w3-ul">-->
                                       <p class="w3-padding-4"><span>نام مسابقه:</span><span id="comp1-1">{{$my_match->name}}</span></p>
                                       <p class="w3-padding-4"><span>ماده:</span><span id="comp1-1">{{$my_match->type->name}}</span></p>
                                       <p class="w3-padding-4"><span>رده سنی:</span><span id="comp1-1">{{$my_match->type->age}}</span></p>
                                       <p class="w3-padding-4"><span>تاریخ شروع :</span><span>{{$my_match->startDate}}</span></p>
                                       <p class="w3-padding-4"><span>تاریخ پایان :</span><span></span>{{$my_match->endDate}}</p>
                                       <p class="w3-padding-4"><span>تاریخ شروع ثبت نام:</span><span>{{$my_match->regStartDate}}</span></p>
                                       <p class="w3-padding-4"><span>تاریخ پایان ثبت نام:</span><span>{{$my_match->regEndDate}}</span></p>
                                       <p class="w3-padding-4"><span>محل برگزاری مسابقه:</span><span>{{$my_match->place}}</span></p>
                                       <p class="w3-padding-4"><span>جنسیت:</span><span>{{$my_match->gender}}</span></p>
                                       <p class="w3-padding-4"><span>هزینه ثبت نام:</span><span><{{$my_match->price}}/span></p>
                                       <!--</ul>-->
                                   </div>
                               </div>
                           </div>
                           @endforeach
                           @else

                             <h4 class="w3-center" dir="rtl">مسابقه ای وجود ندارد</h4>
                           @endif
                    </div>
                  </div>
                    <div id="mainItem1-my-competitions" style="display: none">

                        <div id="item4" class="w3-row  ">
                           @if(count($my_matches)>0)
                           @foreach($my_matches->all() as $my_match)
                            <div class="w3-col l4  w3-right w3-center margin-bottom-custom">
                                <div class="w3-card-16  course-item w3-sand w3-show-inline-block">
                                    <div class="w3-row">
                                        <!--<ul class="w3-ul">-->
                                        <p class="w3-padding-4"><span>نام مسابقه:</span><span id="comp1-1">{{$my_match->name}}</span></p>
                                        <p class="w3-padding-4"><span>ماده:</span><span id="comp1-1">{{$my_match->type->name}}</span></p>
                                        <p class="w3-padding-4"><span>رده سنی:</span><span id="comp1-1">{{$my_match->type->age}}</span></p>
                                        <p class="w3-padding-4"><span>تاریخ شروع :</span><span>{{$my_match->startDate}}</span></p>
                                        <p class="w3-padding-4"><span>تاریخ پایان :</span><span></span>{{$my_match->endDate}}</p>
                                        <p class="w3-padding-4"><span>تاریخ شروع ثبت نام:</span><span>{{$my_match->regStartDate}}</span></p>
                                        <p class="w3-padding-4"><span>تاریخ پایان ثبت نام:</span><span>{{$my_match->regEndDate}}</span></p>
                                        <p class="w3-padding-4"><span>محل برگزاری مسابقه:</span><span>{{$my_match->place}}</span></p>
                                        <p class="w3-padding-4"><span>جنسیت:</span><span>{{$my_match->gender}}</span></p>
                                        <p class="w3-padding-4"><span>هزینه ثبت نام:</span><span><{{$my_match->price}}/span></p>
                                        <!--</ul>-->
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @else

                              <h4 class="w3-center" dir="rtl">تیم شما در هیچ مسابقه ای شرکت نکرده است.</h4>
                            @endif
                        </div>
                    </div>
                    <div id="mainItem1-my-acount"  style="display: none">

                        <form action="/coach/update" method="post">
                          {{ csrf_field() }}
                        <div id="account-table">
                            <table class="w3-table" style="width: 90% ; margin: auto;">
                                <tr style="border: 1px solid white;">
                                    <td width="70%" class="peter-river w3-right-align w3-cen">
                                        <input type="text" id="my-name" name="firstName" value={{$swimmer->firstName}} class="w3-transparent" dir="rtl" style="border: 0; width: 100%;">
                                    </td>
                                    <td width="30%" class="midnight-blue w3-right-align">نام</td>
                                </tr>
                                <tr style="border: 1px solid white;">
                                    <td width="70%" class="peter-river w3-right-align">
                                        <input type="text" name="lastName" value={{$swimmer->lastName}} class="w3-transparent" dir="rtl" style="border: 0; width: 100%;">
                                    </td>
                                    <td width="30%" class="midnight-blue w3-right-align">نام خانوادگی</td>
                                </tr>
                                <tr style="border: 1px solid white;">
                                    <td width="70%" class="peter-river w3-right-align">
                                        <input type="text" name="fatherName" value={{$swimmer->fatherName}} class="w3-transparent" dir="rtl" style="border: 0; width: 100%;">
                                    </td>
                                    <td width="30%" class="midnight-blue w3-right-align">نام پدر</td>
                                </tr>
                                <tr style="border: 1px solid white;">
                                    <td width="70%" class="peter-river w3-right-align">
                                        <input type="text" name="nationalNumber" value={{$swimmer->nationalNumber}} class="w3-transparent" dir="rtl" style="border: 0; width: 100%;">
                                    </td>
                                    <td width="30%" class="midnight-blue w3-right-align">کد ملی</td>
                                </tr>
                                <tr style="border: 1px solid white;">
                                    <td width="70%" class="peter-river w3-right-align">
                                        <input type="text" name="mobileNumber" value={{$swimmer->mobileNumber}} class="w3-transparent" dir="rtl" style="border: 0; width: 100%;">
                                    </td>
                                    <td width="30%" class="midnight-blue w3-right-align">شماره موبایل</td>
                                </tr>
                                <tr style="border: 1px solid white;">
                                    <td width="70%" class="peter-river w3-right-align">
                                        <input type="text" name="phoneNumber" value={{$swimmer->phoneNumber}} class="w3-transparent" dir="rtl" style="border: 0; width: 100%;">
                                    </td>
                                    <td width="30%" class="midnight-blue w3-right-align">شماره تلفن ثابت</td>
                                </tr>
                                @if($swimmer->gender=='مرد')
                                <tr style="border: 1px solid white;">

                                    <td width="70%" class="peter-river w3-right-align">
                                        <select class="w3-select" name="gender" style="width: 50px;" name="gender" id="">
                                          <option  selected value="مرد">مرد</option>
                                          <option  value="زن">زن</option>
                                        </select>

                                    </td>
                                    <td width="30%" class="midnight-blue w3-right-align">جنسیت</td>
                                </tr>
                                  @else
                                  <tr style="border: 1px solid white;">

                                      <td width="70%" class="peter-river w3-right-align">
                                          <select class="w3-select" name="gender" style="width: 50px;" name="gender" id="">
                                              <option  value="مرد">مرد</option>
                                              <option selected  value="زن">زن</option>
                                          </select>

                                      </td>
                                      <td width="30%" class="midnight-blue w3-right-align">جنسیت</td>
                                  </tr>
                                    @endif

                                <tr style="border: 1px solid white;">
                                    <td width="70%" class="peter-river w3-right-align">
                                        <input type="text" name="address" value={{$swimmer->address}} class="w3-transparent" dir="rtl" style="border: 0; width: 100%;">
                                    </td>
                                    <td width="30%"  class="midnight-blue w3-right-align">آدرس منزل</td>
                                </tr>
                                <tr>
                                  <td class="">
                                    <input class="w3-btn w3-btn-block amethyst w3-round-medium " type="submit" name="" value="ثبت تغییرات" >
                                  </td>
                                </tr>
                            </table>
                        </div>


                     </form>
                    </div>
                </div>
            </div>
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
