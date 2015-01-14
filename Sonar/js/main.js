
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

function toggleNavigation() {
    $('#navigation').toggleClass("navigation-open").toggleClass("navigation-closed");
    $('#nav-button-image').toggleClass("open").toggleClass("close");
    $('#navigation-links').toggleClass("links-closed").toggleClass("links");
}

$('#about').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 500);
    toggleNavigation();
    return false;
});

$('#home').click(function(){
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


