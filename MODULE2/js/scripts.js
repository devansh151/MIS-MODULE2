
jQuery(document).ready(function() {

    /*
        Background slideshow
    */
    $.backstretch([
      "img/backgrounds/7.jpg"
    , "img/backgrounds/6.jpg"
    , "img/backgrounds/5.jpg"
	,"img/backgrounds/4.jpg"
    ], {duration: 3000, fade: 750});

    /*
        Tooltips
    */
    $('.links a.home').tooltip();
    $('.links a.blog').tooltip();

    /*
        Form validation
    */
    $('.register form').submit(function(){
        $(this).find("label[for='Roll No']").html('Roll No');
        $(this).find("label[for='Password']").html('Password');
        ////
        var username = $(this).find('input#username').val();
        var password = $(this).find('input#password').val();
        
        
        if(username == '') {
            $(this).find("label[for='Roll No']").append("<span style='display:none' class='red'> - Please enter a valid username.</span>");
            $(this).find("label[for='Roll No'] span").fadeIn('medium');
            return false;
        }
        
        if(password == '') {
            $(this).find("label[for='Password']").append("<span style='display:none' class='red'> - Please enter a valid password.</span>");
            $(this).find("label[for='Password'] span").fadeIn('medium');
            return false;
        }
    });


});


