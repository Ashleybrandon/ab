
/* scroll animations */

ScrollOut({targets: '.animOne', once: true});
ScrollOut({targets: '.animTwo', once: true});
ScrollOut({targets: '.animThree', once: true});


// window.onload = onPageLoad;

// function onPageLoad() {
//     document.querySelector('.mhl').setAttribute('data-scroll', 'in');
// }



var body = document.getElementById('body');
var lightBulb = document.getElementById('dark-mode-icon');
var navToggle = document.getElementById('nav-toggle');
var mobileMenu = document.getElementById('mobile-menu');

/* dark mode */

lightBulb.addEventListener('click', function(e){

    if(body.classList.contains('dark-mode')) {
        body.classList.remove('dark-mode');
    } else {
        body.classList.add('dark-mode');
    }

    e.preventDefault();
});

/* mobile menu */

navToggle.addEventListener('click', function(){

    if(mobileMenu.classList.contains('show-menu')) {
        mobileMenu.classList.remove('show-menu');
        navToggle.classList.remove('on');
    } else {
        mobileMenu.classList.add('show-menu');
        navToggle.classList.add('on');
    }
});


//smooth scroll

function anchorLinkHandler(e) {
    var distanceToTop = function distanceToTop(el) {
      return Math.floor(el.getBoundingClientRect().top);
    };
  
    e.preventDefault();
    var targetID = this.getAttribute("href");
    var targetAnchor = document.querySelector(targetID);
    if (!targetAnchor) return;
    var originalTop = distanceToTop(targetAnchor);
    window.scrollBy({
      top: originalTop,
      left: 0,
      behavior: "smooth"
    });
    var checkIfDone = setInterval(function () {
      var atBottom = window.innerHeight + window.pageYOffset >= document.body.offsetHeight - 2;
  
      if (distanceToTop(targetAnchor) === 0 || atBottom) {
        targetAnchor.tabIndex = "-1";
        targetAnchor.focus();
        window.history.pushState("", "", targetID);
        clearInterval(checkIfDone);
      }
    }, 100);
  }
  
  var linksToAnchors = document.querySelectorAll('a[href^="#"]');
  linksToAnchors.forEach(function (each) {
    return each.onclick = anchorLinkHandler;
  });

