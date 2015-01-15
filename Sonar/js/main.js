var lastWidth = $(window).width();

//smooth scroll to slide 2
$('#arrow-1,#sticker').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 500);
    return false;
});

$('#navigation-links').click(function(){
    // event.preventDefault();

});

function toggleNavigation() {
    $('#navigation').toggleClass("navigation-open").toggleClass("navigation-closed");
    $('#nav-button-image').toggleClass("open").toggleClass("close");
    $('#navigation-links').toggleClass("links-closed").toggleClass("links");
}

$('#about,#home,#sonario,#ideas').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 500);
    toggleNavigation();
    return false;
});




//open or close navigation
$('#nav-button').click( function(event){
    event.preventDefault();
    toggleNavigation();
});


$(window).resize(function(){
    if($(window).width()!=lastWidth){
        if( $(window).width() > 480)
        {
            window.location.href = "http://localhost/project/Sonar/";
        }
        lastWidth = $(window).width();
    }
});