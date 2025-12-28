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
      var togglerRect = toggler.getBoundingClientRect();
      var navbarRect = navbar.getBoundingClientRect();
      // navbarRect.bottom is relative to viewport; use that for top position
      var navbarBottom = navbarRect.bottom;

      // On large screens, center dropdown under toggler and allow shrink-to-fit
      if (isLargeScreen()){
        var centerX = togglerRect.left + (togglerRect.width / 2) + window.pageXOffset;
        var dropdownWidth = navMenu.offsetWidth || 200;
        var maxLeft = window.innerWidth - dropdownWidth - 10;
        var calculatedLeft = Math.max(10, Math.min(centerX - (dropdownWidth / 2), maxLeft));
        navMenu.style.left = calculatedLeft + 'px';
        navMenu.style.right = 'auto';
        navMenu.style.transform = 'none';
        navMenu.style.width = 'auto';
        navMenu.style.maxHeight = '';
        navMenu.style.overflowY = '';
      } else {
        // Small screens: full width dropdown below navbar and scrollable if long
        navMenu.style.left = '0';
        navMenu.style.right = '0';
        navMenu.style.width = '100%';
        navMenu.style.transform = 'none';
        // calculate available space below the navbar in viewport coords
        var available = window.innerHeight - navbarBottom;
        // add small offset so menu doesn't touch the navbar edge
        var offsetTop = Math.max(navbarBottom, 0) + 4;
        navMenu.style.top = offsetTop + 'px';
        navMenu.style.maxHeight = (available > 120 ? available - 8 : 200) + 'px';
        navMenu.style.overflowY = 'auto';
        // ensure menu overlays content
        navMenu.style.zIndex = 1200;
        return;
      }
      // set top for large screens as well (use viewport coords)
      navMenu.style.top = (Math.max(navbarRect.bottom, 0) + 2) + 'px';
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

    // Ensure dropdown is positioned when toggled (on click or class change)
    toggler.addEventListener('click', function(){
      // Position shortly after Bootstrap toggles the class
      setTimeout(positionDropdown, 20);
    });

    // Observe class changes on navMenu to position when 'show' is added/removed
    var mo = new MutationObserver(function(mutations){
      mutations.forEach(function(m){
        if (m.attributeName === 'class'){
          var has = navMenu.classList.contains('show');
          if (has){
            positionDropdown();
          } else {
            // reset overrides
            navMenu.style.left = '';
            navMenu.style.right = '';
            navMenu.style.top = '';
            navMenu.style.width = '';
            navMenu.style.maxHeight = '';
            navMenu.style.overflowY = '';
            navMenu.style.transform = '';
          }
        }
      });
    });
    mo.observe(navMenu, { attributes: true });

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
