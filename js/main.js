$(document).ready(function(){

    $('.intro_video video').bind('ended',function(){
        $('.intro_video').fadeOut(200);
        init();
    });
    if($.cookie('played'))
    {
        $('.intro_video').hide();
        init();
    }
    else
    {
        $.cookie('played', '1', { expires: 1 });
    }
//    if($('html').hasClass('touch'))
//    {
//        $('.intro_video').hide();
//        init();
//    }


    var clickable = true;
    var backgroundPosition = new Array('100%','70%','50%','0%');
    $('nav a').click(function(e){
        e.preventDefault();
        if(!clickable)
        {
            return false;
        }
        var index = $.inArray(this,$('nav a'));
        var top = 0;
        if(index == 2) top = '12%';
        clickable = false;
        // change background
        $('body').animate({'backgroundPositionY':backgroundPosition[index]},1000,'easeOutQuart');

        // change navigation
        $('nav a').removeClass('active');
        $(this).addClass('active');

        // change section
        $('section').animate({'top':'100%'},500,'easeInOutQuart',function(){
            $(this).hide();
            $('section').find('footer').css('bottom','-50%').hide();
            $('section').eq(index).css({'top':'-100%','display':'block'}).animate({'top':top},function(){
                $('section').eq(index).find('footer').show().delay(200).animate({'bottom':'0%'},500,'easeInOutQuart');
                setTimeout(function(){
                    clickable = true;
                },1000);
            });
        });
    });

    $('.logo').click(function(){
        $('nav a').eq(0).click();
        $('.intro_video video').trigger('play');
        $('.intro_video').fadeIn();
    });


    if($.browser.msie)
    {
        $('html').removeClass('csstransforms3d');
    }

    $('#section1 .friends a').click(function(e){
        e.preventDefault();
        var index = $.inArray(this,$('#section1 .friends a'));
        $('#section1 .friends li').removeClass('active');
        $(this).parent().addClass('active');

        if(index == 1)
        {
            if($.browser.msie || $('html').hasClass('no-csstransforms3d'))
            {
                $('#about_cube_face1').fadeOut();
                $('#about_cube_face2').fadeIn();
            }
            else
            {
                $('#about_cube').addClass('turn');
            }
        }
        else
        {
            if($.browser.msie || $('html').hasClass('no-csstransforms3d'))
            {
                $('#about_cube_face2').fadeOut();
                $('#about_cube_face1').fadeIn();
            }
            else
            {
                $('#about_cube').removeClass('turn');
            }
        }
    });

    $('#section2 .friends a').click(function(e){
        e.preventDefault();
        var index = $.inArray(this,$('#section2 .friends a'));
        $('#section2 .friends li').removeClass('active');
        $(this).parent().addClass('active');

        $('.protfolio_item').find('.left img').animate({'margin-top':'100%'},300,'easeInOutQuart');
        $('.protfolio_item').find('.right').delay(200).animate({'margin-top':'100%'},300,'easeInOutQuart',function(){
            $('.protfolio_item').hide();
            $('.protfolio_item').eq(index).show();

            $('.star_animation').fadeIn(200);
            star_animation.play();
        });

        $('.protfolio_item').eq(index).find('.left img').delay(500).animate({'margin-top':0},300,'easeInOutQuart');
        $('.protfolio_item').eq(index).find('.right').delay(500).animate({'margin-top':0},300,'easeInOutQuart');
    })

    $('.careers_header').click(function(){
        if($(this).hasClass('active'))
        {
            $('.careers_header').removeClass('active');
            $('.careers_list .careers_body').animate({height:0});
        }
        else
        {
            $('.careers_header').removeClass('active');
            $(this).addClass('active');
            var body = $(this).next();
            var height = body.find('.careers_body_inner').height()+25;
            $('.careers_list .careers_body').animate({height:0});
            body.animate({'height':height});
        }
    });

    $('.careers_body .close').click(function(){
        $('.careers_header').removeClass('active');
        $('.careers_body').animate({height:0});
    });


    $('#contact_form').ajaxForm({
        beforeSubmit:  function(){
            return $("#contact_form").valid();
        },
        complete: function(xhr) {
            res = JSON.parse(xhr.responseText);
            $('#contact_form .form-body').fadeOut(300);
            $('#contact_form .form-thanks').delay(300).fadeIn(300);
        },
        dataType: 'json'
    });

    $("#contact_form").validate(
    {
        submitHandler: function(form){
        },
        rules: {
            ninja_forms_field_1: { required: true },
            ninja_forms_field_2: { required: true, email:true },
            ninja_forms_field_3: { required: true }
        },
        messages: {
            ninja_forms_field_1: {required:'Please enter your name'},
            ninja_forms_field_2: {required:'Please enter your email', email: 'Please enter your correct email'},
            ninja_forms_field_3: {required:'Please enter your message'}
        }
    });


    $('.gallery a,.paintings-list2 a,.paintings-list-mobile a').fancybox({
        padding:10,
        maxWidth: '90%',
        maxHeight: '90%'

    });


    // Homepage Horse Runing Animation
    var star_animation = $('.star_animation')[0];
    var star_animation = new Motio(star_animation, {
        fps: 12,
        frames: 11,
        width: 801,
        vertical: 1,
        height: 601
    });
    star_animation.on('frame',function(){
        if(this.frame == 10)
        {
            star_animation.pause();
            $('.star_animation').fadeOut();
        }
    });

});

function playfinished(){
    $('.intro_video').fadeOut(200);
    init();
}

function init(){
    $('header').css('top',-400).delay(200).animate({'top':0},500,'easeInOutQuart');
    $('#section1 footer').css('bottom','-30%').delay(600).animate({'bottom':'0%'},500,'easeInOutQuart');
    $('.about_wrap').hide().delay(400).fadeIn();
}