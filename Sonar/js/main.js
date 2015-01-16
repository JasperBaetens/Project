var lastWidth = $(window).width();

//smooth scroll
$('#arrow-1,#sticker,#question,#create-text').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 500);
    return false;
});

$('#navigation-links').click(function(){
    // event.preventDefault();

});
//navigation toggle
function toggleNavigation() {
    $('#navigation').toggleClass("navigation-open").toggleClass("navigation-closed");
    $('#nav-button-image').toggleClass("open").toggleClass("close");
    $('#navigation-links').toggleClass("links-closed").toggleClass("links");
}
//smooth scroll with navigation toggle
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

