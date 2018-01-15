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
  $(document).ready(function(){

    $(".close-modal").click(function () {
                $("#message-modal").hide();
            });

  $("#message-modal").show();
  });
    </script>
</head>
<body style="background: #1A2B41;">
<div class="w3-container">
  <form  action="" method="post">

   {{ csrf_field() }}
    <div class="w3-row">
        <div class="w3-col l4 w3-hide-medium w3-hide-small">&nbsp;</div>
        <div class="w3-col m3 w3-hide-large w3-hide-small">&nbsp;</div>
        <!--<div class="w3-col s1 w3-hide-large w3-hide-medium">&nbsp;</div>-->
        <div class="w3-col l4 m6 s12  w3-center w3-container w3-card-16" style="background-color: #2F4158; color: #FFFFFF; margin-top: 90px;">
            <div class="form-holder w3-padding-hor-32">
                <div class="top-title w3-xlarge">ورود به پنل ادمین</div>
                 <i class="fa fa-user-circle-o  fa-4x" aria-hidden="true" style="margin-top: 30px;" ></i>

                <br>
                <div class="w3-container">
                        <p><input name="username" id="username" required  type="text" class="w3-input w3-margin-bottom my-input w3-animate-input w3-animate-input w3-left  " style="width: 50%;" placeholder="نام کاربری" value=""></p>
                          <br>
                          <br>
                          <br>
                        <p><input name="password" id="password" required  type="password" class="w3-input w3-margin-bottom my-input w3-animate-input w3-left" style="width: 50%;" placeholder="گذرواژه" value=""></p>

                        <br>
                        <br>
                        <br>

                        <p><input id="login-btn" type="submit"  class="w3-btn w3-btn-block peter-river w3-round-small" value="ورود"></p>

                        <p><button  class="w3-btn  w3-btn-block amethyst w3-round-small w3-margin-top" >فراموشی گذرواژه</button></p>


                </div>

            </div>

        </div>
        <!--<div class="w3-col s1 w3-hide-large w3-hide-medium">&nbsp;</div>-->
        <div class="w3-col m3 w3-hide-large w3-hide-small">&nbsp;</div>
        <div class="w3-col l4 w3-hide-medium w3-hide-small">&nbsp;</div>
    </div>
    </form>
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
    function loadDoc() {


    }
</script>

</body>
</html>
