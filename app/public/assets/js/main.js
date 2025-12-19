// Minimal JS: enable Bootstrap form validation
(function(){
  'use strict'
  window.addEventListener('load', function(){
    var forms = document.getElementsByClassName('needs-validation');
    Array.prototype.filter.call(forms, function(form){
      form.addEventListener('submit', function(event){
        if (form.checkValidity() === false){
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();

// Hamburger menu behavior: hover on large screens, click/touch on small
(function(){
  document.addEventListener('DOMContentLoaded', function(){
    var toggler = document.querySelector('.navbar-toggler');
    var navMenu = document.querySelector('#mainNav');
    var navLinks = document.querySelectorAll('#mainNav .nav-link');
    if (!toggler || !navMenu) return;

    var isLargeScreen = function(){
      return window.innerWidth >= 992;
    };

    // Hover to expand/collapse on large screens only
    var navbar = document.querySelector('.site-header .navbar');

    // Position dropdown under toggler (large screens).
    function positionDropdown(){
      if (!isLargeScreen()){
        navMenu.style.left = '';
        navMenu.style.transform = '';
        return;
      }
      var rect = toggler.getBoundingClientRect();
      // center x relative to viewport + pageXOffset
      var centerX = rect.left + (rect.width / 2) + window.pageXOffset;
      navMenu.style.left = centerX + 'px';
      navMenu.style.transform = 'translateX(-50%)';
      navMenu.style.right = 'auto';
    }

    // Hover opens on large screens, and we position the dropdown
    toggler.addEventListener('mouseenter', function(){
      if (isLargeScreen()){
        positionDropdown();
        if (!navMenu.classList.contains('show')){
          navMenu.classList.add('show');
          toggler.setAttribute('aria-expanded', 'true');
        }
      }
    });

    // Close when leaving the navbar area on large screens
    navbar.addEventListener('mouseleave', function(){
      if (isLargeScreen() && navMenu.classList.contains('show')){
        navMenu.classList.remove('show');
        toggler.setAttribute('aria-expanded', 'false');
      }
    });

    // Close dropdown on small screens when clicking a nav link
    navLinks.forEach(function(link){
      link.addEventListener('click', function(){
        if (!isLargeScreen() && navMenu.classList.contains('show')){
          toggler.click();
        }
      });
    });

    // Ensure dropdown is positioned when toggled by click (small or large)
    toggler.addEventListener('click', function(){
      // Position for large screens; for small screens leave default
      if (isLargeScreen()) positionDropdown();
    });

    // Reposition on resize
    window.addEventListener('resize', function(){
      if (isLargeScreen()){
        positionDropdown();
      } else {
        // reset position overrides on small screens
        navMenu.style.left = '';
        navMenu.style.transform = '';
      }
    });
  });
})();
