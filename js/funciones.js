//JQuery 
$("#slideshow > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
},  3000);


//Make the navigation bar static
$(window).scroll(function() {
    if ($(this).scrollTop() > 50) {
        $('.topnav').addClass('fix');
    } else {
        $('.topnav').removeClass('fix');
    }
});

// Function to make the index page responsive
function responsiveToggle() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

