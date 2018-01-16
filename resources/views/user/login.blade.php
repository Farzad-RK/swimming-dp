<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src=" {{asset('js/jquery.min.js')}}"></script>
    <link rel="stylesheet" href="{{ asset('/awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/w3.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/kamadatepicker.css') }}">
    <script>
        $(document).ready(function () {
            $("#login-btn").click(function () {
                $(this).css("background-color", "#1A2B41");
                $("#register-btn").css("background-color", "#2F4158");
                $("#register").hide();
                $("#login").fadeIn();
            });
            $("#register-btn").click(function () {
                $(this).css("background-color", "#1A2B41");
                $("#login-btn").css("background-color", "#2F4158");
                $("#login").hide();
                $("#register").fadeIn();
            });

            $(".close-modal").click(function () {
                $("#message-modal").hide();
            });

            $("#message-modal").show();
        });
    </script>
</head>
<body style="background: #1A2B41;">
<div class="w3-container">
    <div class="w3-row">
        <div class="w3-col l4 w3-hide-medium w3-hide-small">&nbsp;</div>
        <div class="w3-col m3 w3-hide-large w3-hide-small">&nbsp;</div>
        <div class="w3-col l4 m6 s12  w3-center w3-container w3-card-16 w3-border w3-border-black" style="background-color: #2F4158; color: #FFFFFF; margin-top: 90px; margin-bottom: 90px;">
            <p>
                <button id="login-btn" class="w3-btn w3-right" style="background-color: #1A2B41">ورود</button>
                <button id="register-btn" class="w3-btn w3-right" style="background-color: #2F4158">ثبت نام</button>
            </p>
            <br>
            <div id="login" class="form-holder w3-padding-hor-32">
              <form  action="" method="post">
                  {{ csrf_field() }}
                <div class="top-title w3-xlarge">ورود به سامانه هیئت شنا</div>
                    <i class="fa fa-user-circle-o  fa-4x" aria-hidden="true" style="margin-top: 30px;" ></i>

                <br>
                <div class="w3-container w3-margin-top">
                        <p><input name="username" id="username" required dir="ltr" type="email" class="w3-input w3-margin-bottom my-input w3-animate-input w3-animate-input w3-left " style="width: 95%;" placeholder="نام کاربری" value=""></p>
                        <br>
                        <br>
                        <br>
                        <p><input name="password" id="password" required dir="ltr" type="password" class="w3-input w3-margin-bottom my-input w3-animate-input w3-left" style="width: 95%;" placeholder="گذرواژه" value=""></p>

                        <br>
                        <br>
                        <br>

                        <p><input type="submit"  class="w3-btn w3-btn-block peter-river w3-round-small" value="ورود"></p>

                        <p><button  class="w3-btn  w3-btn-block amethyst w3-round-small w3-margin-top" >فراموشی گذرواژه</button></p>


                   </div>
                 </form>
            </div>
            <div id="register" class="form-holder w3-padding-hor-32" style="display: none;">
                <div class="top-title w3-xlarge">فرم ثبت نام</div>
                <!--<div class="my-login-icon w3-circle " style="position:relative; margin: auto; margin-top: 40px; " >-->
                <i class="fa fa-pencil-square-o  fa-4x" aria-hidden="true" style="margin-top: 30px;" ></i>
                <!--</div>-->
                <form action="login/register" method="post">
                  {{ csrf_field() }}
                <br>
                <div class="w3-container w3-margin-top">
                  <p class="w3-right-align">
                      <br>
                      <select class="w3-select my-input w3-text-white" dir="rtl" required name="role" style="width: 95%;">
                          <option selected disabled value="1" class="w3-right">ثبت نام به عنوان</option>
                          <option value="swimmer" class="w3-right">شناگر</option>
                          <option value="coach">مربی</option>
                      </select>
                      <br>
                      <br>
                  </p>
                    <p>
                        <br>
                        <input name="firstName" required placeholder="نام*" dir="rtl" class="my-input w3-input w3-animate-input w3-right" type="text" style="width:95%">
                        <br>
                        <br>
                        <br>
                    </p>

                    <p>
                        <br>
                        <input name="lastName" required placeholder="نام خانوادگی*" dir="rtl" class="my-input w3-input w3-animate-input w3-right" type="text" style="width:95%">
                        <br>
                        <br>
                        <br>
                    </p>

                    <p>
                        <br>
                        <input name="nationalNumber" required placeholder="کد ملی*" dir="rtl" class="my-input w3-input w3-animate-input w3-right" type="text" style="width:95%">
                        <br>
                        <br>
                        <br>
                    </p>

                    <p>
                        <br>
                        <input name="email" required placeholder="پست الکترونیکی*" dir="rtl" class="my-input w3-input w3-animate-input w3-right" type="email" style="width:95%">
                        <br>
                        <br>
                        <br>
                    </p>

                    <p>
                        <br>
                        <input name="password" required placeholder="گذرواژه*" dir="rtl" class="my-input w3-input w3-animate-input w3-right" type="password" style="width:95%">
                        <br>
                        <br>
                        <br>
                    </p>

                    <p>
                        <br>
                        <input name="password_confirmation" required placeholder="تکرار گذرواژه*" dir="rtl" class="my-input w3-input w3-animate-input w3-right" type="password" style="width:95%">
                        <br>
                        <br>
                        <br>
                    </p>

                    <p>
                        <br>
                        <input name="phoneNumber" placeholder="شماره تلفن" dir="rtl" class="my-input w3-input w3-animate-input w3-right" type="tel" style="width:95%">
                        <br>
                        <br>
                        <br>
                    </p>

                    <p>
                        <br>
                        <input name="mobileNumber" required placeholder="شماره موبایل*" dir="rtl" class="my-input w3-input w3-animate-input w3-right" type="tel" style="width:95%">
                        <br>
                        <br>
                        <br>
                    </p>

                    <p class="w3-right-align">
                        <br>
                        <select class="w3-select my-input w3-text-white" dir="rtl" required name="gender" style="width: 95%;">
                            <option selected disabled value="1" class="w3-right">جنسیت*</option>
                            <option value="مرد" class="w3-right">مرد</option>
                            <option value="زن">زن</option>
                        </select>
                        <br>
                        <br>
                        <br>
                    </p>

                    <p>
                        <br>
                        <input name="fatherName" required placeholder="نام پدر*" dir="rtl" class="my-input w3-input w3-animate-input w3-right" type="text" style="width:95%">
                        <br>
                        <br>
                        <br>
                    </p>


                    <p>
                        <br>
                        <textarea name="address" placeholder="آدرس" dir="rtl" class="my-input w3-input w3-animate-input w3-right w3-border w3-border-black" type="text" style="height: 100px;"></textarea>
                        <br>
                        <br>
                        <br>
                    </p>

                    <br>
                    <br>


                    <p><input type="submit"  class="w3-btn w3-btn-block peter-river w3-round-small" value="ثبت نام"></p>

                </div>

                </form>

            </div>
    @if(count($errors))
     <div class="form-group">
       <div class="alert alert-danger">
          <ul>
            @foreach($errors->all() as $error)

              <li>{{$error}}</li>

            @endforeach
          </ul>
       </div>
     </div>
     @endif
        </div>
        <div class="w3-col m3 w3-hide-large w3-hide-small">&nbsp;</div>
        <div class="w3-col l4 w3-hide-medium w3-hide-small">&nbsp;</div>
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
</body>
</html>
