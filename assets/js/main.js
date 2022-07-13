window.onload = function() {
    // script
};

$(function () {
    ("use strict");

    
    // ===== menu mobile
    $('[data-menu="open"]').click(function(){
        $('.site-header .menu-overlay').toggleClass('open');
        $('.site-header .menu').toggleClass('open');
    });
    $('[data-menu="close"]').click(function(){
        $('.site-header .menu-overlay').removeClass('open');
        $('.site-header .menu').removeClass('open');
    });
    $('.site-header .menu .link').click(function(){
        $('.site-header .menu-overlay').removeClass('open');
        $('.site-header .menu').removeClass('open');
    });

    $('[data-sidemenu="open"]').click(function(){
        $('.site-header .menu-overlay').toggleClass('open');
        $('.profile-side').toggleClass('open');
    });
    $('[data-menu="close"]').click(function(){
        $('.site-header .menu-overlay').removeClass('open');
        $('.profile-side').removeClass('open');
    });
    

    // ===== select2
    $('.select-control').select2({
        minimumResultsForSearch: Infinity,
        placeholder: "Select"
    });
    $('.select-control.has-search').select2({
        placeholder: "Select"
    });


    //===== Daterangepicker
    $('.datepicker').daterangepicker({
        autoUpdateInput: true,
        autoApply: true,
        opens: 'right',
        singleDatePicker: true,
        showDropdowns: true,
        locale: {
            format: 'DD/MM/YYYY'
        }
    });
    $('.daterangpicker').daterangepicker({
        autoUpdateInput: true,
        autoApply: true,
        opens: 'right',
        singleDatePicker: false,
        showDropdowns: true,
        locale: {
            format: 'DD/MM/YYYY'
        }
    });
    

    //===== Password
    $('[data-toggle="pass-status"]').click(function(){
        var passwordInput = document.getElementById('input' + this.id);
        var passStatus = document.getElementById(this.id);
        if (passwordInput.type == 'password'){
            passwordInput.type='text';
            passStatus.className='btn feather icon-eye';
        }
        else{
            passwordInput.type='password';
            passStatus.className='btn feather icon-eye-off';
        }
    });


    function adjustStyle(width) {
    width = parseInt(width);
        if (width >= 1200) {
            document.getElementById("viewport-meta").setAttribute("content", "width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no");
        } else if (width > 991 && width < 1200) {
            document.getElementById("viewport-meta").setAttribute("content", "width=1440");
        } else if (width < 992) {
            document.getElementById("viewport-meta").setAttribute("content", "width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no");
        }
    }

    $(function() {
        adjustStyle($(this).width());
        $(window).resize(function() {
            adjustStyle($(this).width());
        });
    });
});

function setCookie(name,value,days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}

function getCookie(name) {
    var dc = document.cookie;
    var prefix = name + "=";
    var begin = dc.indexOf("; " + prefix);
    if (begin == -1) {
        begin = dc.indexOf(prefix);
        if (begin != 0) return null;
    }
    else
    {
        begin += 2;
        var end = document.cookie.indexOf(";", begin);
        if (end == -1) {
        end = dc.length;
        }
    }
    // because unescape has been deprecated, replaced with decodeURI
    //return unescape(dc.substring(begin + prefix.length, end));
    return decodeURI(dc.substring(begin + prefix.length, end));
} 

var myCookie = getCookie("CONSENT");
if (myCookie == null) {
}
else {
    jQuery("#BoxacceptCookie").remove();
}

function consenaccept() {
    var TYPE = "POST";
    var URL = "https://mnre.plavan.dev/smart/pdpa/accept";

    var dataSet = {};
    jQuery.ajax({type: TYPE, url: URL, data: dataSet,
        success: function (html) {
            jQuery("#BoxacceptCookie").remove();
        }
    });
    setCookie('CONSENT','Y',100);
}