
//smooth scroll to slide 2
$('#arrow-1').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 500);
    return false;
});

//open or close navigation
$('#nav-button').click(function(){
    event.preventDefault();
    $('#navigation').toggleClass("navigation-open").toggleClass("navigation-closed");
    $('#nav-button-image').toggleClass("open").toggleClass("close");
    $('#navigation-links').toggleClass("links-closed").toggleClass("links");
});


$('#navigation-links').click(function(){
   // event.preventDefault();
    $('#navigation').toggleClass("navigation-open").toggleClass("navigation-closed");
    $('#nav-button-image').toggleClass("open").toggleClass("close");
    $('#navigation-links').toggleClass("links-closed").toggleClass("links");
});