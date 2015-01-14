
//smooth scroll to slide 2
$('#arrow-1').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 500);
    return false;
});

$('#navigation-links').click(function(){
    // event.preventDefault();

});

$('#about').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 500);
    $('#navigation').toggleClass("navigation-open").toggleClass("navigation-closed");
    $('#nav-button-image').toggleClass("open").toggleClass("close");
    $('#navigation-links').toggleClass("links-closed").toggleClass("links");
    return false;
});

$('#home').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 500);
    $('#navigation').toggleClass("navigation-open").toggleClass("navigation-closed");
    $('#nav-button-image').toggleClass("open").toggleClass("close");
    $('#navigation-links').toggleClass("links-closed").toggleClass("links");
    return false;
});

//open or close navigation
$('#nav-button').click(function(){
    event.preventDefault();
    $('#navigation').toggleClass("navigation-open").toggleClass("navigation-closed");
    $('#nav-button-image').toggleClass("open").toggleClass("close");
    $('#navigation-links').toggleClass("links-closed").toggleClass("links");
});


