
$(document).ready(function () {
    $("#selected1").click(function () {
        $("#mainItem1-available-courses").fadeIn();
        $("#mainItem1-my-courses").hide();
        $("#mainItem1-my-team").hide();
        $("#mainItem1-competitions").hide();
        $("#mainItem1-my-competitions").hide();
        $("#mainItem1-my-acount").hide();
        if(!$(this).hasClass("border-right")){
            $(this).addClass("border-right");
            $("#selected11").addClass("border-right");
            for (var i = 1; i <= 6; i++){
                if (i==1) continue;
                $("#selected"+i).removeClass("border-right");
                $("#selected"+i+i).removeClass("border-right");
            }
        }
    });
    $("#selected11").click(function () {
        $("#mainItem1-available-courses").fadeIn();
        $("#mainItem1-my-courses").hide();
        $("#mainItem1-my-team").hide();
        $("#mainItem1-competitions").hide();
        $("#mainItem1-my-competitions").hide();
        $("#mainItem1-my-acount").hide();
        if(!$(this).hasClass("border-right")){
            $(this).addClass("border-right");
            $("#selected1").addClass("border-right");
            for (var i = 1; i <= 6; i++){
                if (i==1) continue;
                $("#selected"+i).removeClass("border-right");
                $("#selected"+i+i).removeClass("border-right");
            }
        }
    });

    $("#selected2").click(function () {
        $("#mainItem1-available-courses").hide();
        $("#mainItem1-my-courses").fadeIn();
        $("#mainItem1-my-team").hide();
        $("#mainItem1-competitions").hide();
        $("#mainItem1-my-competitions").hide();
        $("#mainItem1-my-acount").hide();
        if(!$(this).hasClass("border-right")){
            $(this).addClass("border-right");
            $("#selected22").addClass("border-right");
            for (var i = 1; i <= 6; i++){
                if (i==2) continue;
                $("#selected"+i).removeClass("border-right");
                $("#selected"+i+i).removeClass("border-right");
            }
        }
    });
    $("#selected22").click(function () {
        $("#mainItem1-available-courses").hide();
        $("#mainItem1-my-courses").fadeIn();
        $("#mainItem1-my-team").hide();
        $("#mainItem1-competitions").hide();
        $("#mainItem1-my-competitions").hide();
        $("#mainItem1-my-acount").hide();
        if(!$(this).hasClass("border-right")){
            $(this).addClass("border-right");
            $("#selected2").addClass("border-right");
            for (var i = 1; i <= 6; i++){
                if (i==2) continue;
                $("#selected"+i).removeClass("border-right");
                $("#selected"+i+i).removeClass("border-right");
            }
        }
    });

    $("#selected3").click(function () {
        $("#mainItem1-available-courses").hide();
        $("#mainItem1-my-courses").hide();
        $("#mainItem1-my-team").fadeIn();
        $("#mainItem1-competitions").hide();
        $("#mainItem1-my-competitions").hide();
        $("#mainItem1-my-acount").hide();
        if(!$(this).hasClass("border-right")){
            $(this).addClass("border-right");
            $("#selected33").addClass("border-right");
            for (var i = 1; i <= 6; i++){
                if (i==3) continue;
                $("#selected"+i).removeClass("border-right");
                $("#selected"+i+i).removeClass("border-right");
            }
        }
    });
    $("#selected33").click(function () {
        $("#mainItem1-available-courses").hide();
        $("#mainItem1-my-courses").hide();
        $("#mainItem1-my-team").fadeIn();
        $("#mainItem1-competitions").hide();
        $("#mainItem1-my-competitions").hide();
        $("#mainItem1-my-acount").hide();
        if(!$(this).hasClass("border-right")){
            $(this).addClass("border-right");
            $("#selected3").addClass("border-right");
            for (var i = 1; i <= 6; i++){
                if (i==3) continue;
                $("#selected"+i).removeClass("border-right");
                $("#selected"+i+i).removeClass("border-right");
            }
        }
    });

    $("#selected4").click(function () {
        $("#mainItem1-available-courses").hide();
        $("#mainItem1-my-courses").hide();
        $("#mainItem1-my-team").hide();
        $("#mainItem1-competitions").fadeIn();
        $("#mainItem1-my-competitions").hide();
        $("#mainItem1-my-acount").hide();
        if(!$(this).hasClass("border-right")){
            $(this).addClass("border-right");
            $("#selected44").addClass("border-right");
            for (var i = 1; i <= 6; i++){
                if (i==4) continue;
                $("#selected"+i).removeClass("border-right");
                $("#selected"+i+i).removeClass("border-right");
            }
        }
    });
    $("#selected44").click(function () {
        $("#mainItem1-available-courses").hide();
        $("#mainItem1-my-courses").hide();
        $("#mainItem1-my-team").hide();
        $("#mainItem1-competitions").fadeIn();
        $("#mainItem1-my-competitions").hide();
        $("#mainItem1-my-acount").hide();
        if(!$(this).hasClass("border-right")){
            $(this).addClass("border-right");
            $("#selected4").addClass("border-right");
            for (var i = 1; i <= 6; i++){
                if (i==4) continue;
                $("#selected"+i).removeClass("border-right");
                $("#selected"+i+i).removeClass("border-right");
            }
        }
    });

    $("#selected5").click(function () {
        $("#mainItem1-available-courses").hide();
        $("#mainItem1-my-courses").hide();
        $("#mainItem1-my-team").hide();
        $("#mainItem1-competitions").hide();
        $("#mainItem1-my-competitions").fadeIn();
        $("#mainItem1-my-acount").hide();
        if(!$(this).hasClass("border-right")){
            $(this).addClass("border-right");
            $("#selected55").addClass("border-right");
            for (var i = 1; i <= 6; i++){
                if (i==5) continue;
                $("#selected"+i).removeClass("border-right");
                $("#selected"+i+i).removeClass("border-right");
            }
        }
    });
    $("#selected55").click(function () {
        $("#mainItem1-available-courses").hide();
        $("#mainItem1-my-courses").hide();
        $("#mainItem1-my-team").hide();
        $("#mainItem1-competitions").hide();
        $("#mainItem1-my-competitions").fadeIn();
        $("#mainItem1-my-acount").hide();
        if(!$(this).hasClass("border-right")){
            $(this).addClass("border-right");
            $("#selected5").addClass("border-right");
            for (var i = 1; i <= 6; i++){
                if (i==5) continue;
                $("#selected"+i).removeClass("border-right");
                $("#selected"+i+i).removeClass("border-right");
            }
        }
    });

    $("#selected6").click(function () {
        $("#mainItem1-available-courses").hide();
        $("#mainItem1-my-courses").hide();
        $("#mainItem1-my-team").hide();
        $("#mainItem1-competitions").hide();
        $("#mainItem1-my-competitions").hide();
        $("#mainItem1-my-acount").fadeIn();
        $("#my-name").focus();
        if(!$(this).hasClass("border-right")){
            $(this).addClass("border-right");
            $("#selected66").addClass("border-right");
            for (var i = 1; i <= 6; i++){
                if (i==6) continue;
                $("#selected"+i).removeClass("border-right");
                $("#selected"+i+i).removeClass("border-right");
            }
        }
    });
    $("#selected66").click(function () {
        $("#mainItem1-available-courses").hide();
        $("#mainItem1-my-courses").hide();
        $("#mainItem1-my-team").hide();
        $("#mainItem1-competitions").hide();
        $("#mainItem1-my-competitions").hide();
        $("#mainItem1-my-acount").fadeIn();
        $("#my-name").focus();
        if(!$(this).hasClass("border-right")){
            $(this).addClass("border-right");
            $("#selected6").addClass("border-right");
            for (var i = 1; i <= 6; i++){
                if (i==6) continue;
                $("#selected"+i).removeClass("border-right");
                $("#selected"+i+i).removeClass("border-right");
            }
        }
    });
});








