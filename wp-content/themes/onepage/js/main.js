/********************************************************************************
 * navigation.js
********************************************************************************/
( function() {
    var container, button, menu, links, subMenus;

    container = document.getElementById( 'site-navigation' );
    if ( ! container ) {
        return;
    }

    button = container.getElementsByTagName( 'button' )[0];
    if ( 'undefined' === typeof button ) {
        return;
    }

    menu = container.getElementsByTagName( 'ul' )[0];

    // Hide menu toggle button if menu is empty and return early.
    if ( 'undefined' === typeof menu ) {
        button.style.display = 'none';
        return;
    }

    menu.setAttribute( 'aria-expanded', 'false' );
    if ( -1 === menu.className.indexOf( 'nav-menu' ) ) {
        menu.className += ' nav-menu';
    }

    button.onclick = function() {
        if ( -1 !== container.className.indexOf( 'toggled' ) ) {
            container.className = container.className.replace( ' toggled', '' );
            button.setAttribute( 'aria-expanded', 'false' );
            menu.setAttribute( 'aria-expanded', 'false' );
        } else {
            container.className += ' toggled';
            button.setAttribute( 'aria-expanded', 'true' );
            menu.setAttribute( 'aria-expanded', 'true' );
        }
    };

    // Get all the link elements within the menu.
    links    = menu.getElementsByTagName( 'a' );
    subMenus = menu.getElementsByTagName( 'ul' );

    // Set menu items with submenus to aria-haspopup="true".
    for ( var i = 0, len = subMenus.length; i < len; i++ ) {
        subMenus[i].parentNode.setAttribute( 'aria-haspopup', 'true' );
    }

    // Each time a menu link is focused or blurred, toggle focus.
    for ( i = 0, len = links.length; i < len; i++ ) {
        links[i].addEventListener( 'focus', toggleFocus, true );
        links[i].addEventListener( 'blur', toggleFocus, true );
    }

    /**
     * Sets or removes .focus class on an element.
     */
    function toggleFocus() {
        var self = this;

        // Move up through the ancestors of the current link until we hit .nav-menu.
        while ( -1 === self.className.indexOf( 'nav-menu' ) ) {

            // On li elements toggle the class .focus.
            if ( 'li' === self.tagName.toLowerCase() ) {
                if ( -1 !== self.className.indexOf( 'focus' ) ) {
                    self.className = self.className.replace( ' focus', '' );
                } else {
                    self.className += ' focus';
                }
            }

            self = self.parentElement;
        }
    }
} )();

/********************************************************************************
 * Skip link focus fix
 ********************************************************************************/
( function() {
    var is_webkit = navigator.userAgent.toLowerCase().indexOf( 'webkit' ) > -1,
        is_opera  = navigator.userAgent.toLowerCase().indexOf( 'opera' )  > -1,
        is_ie     = navigator.userAgent.toLowerCase().indexOf( 'msie' )   > -1;

    if ( ( is_webkit || is_opera || is_ie ) && document.getElementById && window.addEventListener ) {
        window.addEventListener( 'hashchange', function() {
            var id = location.hash.substring( 1 ),
                element;

            if ( ! /^[A-z0-9_-]+$/.test( id ) ) {
                return;
            }

            element = document.getElementById( id );

            if ( element ) {
                if ( ! /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) ) {
                    element.tabIndex = -1;
                }

                element.focus();
            }
        }, false );
    }
})();

/********************************************************************************
 * sticky-nav.js
********************************************************************************/
jQuery(document).ready(function($) {
    var $filter = $('.main-navigation');
    var $filterSpacer = $('<div />', {
        "class": "filter-drop-spacer",
        "height": $filter.outerHeight()
    });

    if ($filter.size())
    {
        $(window).scroll(function ()
        {
            if (!$filter.hasClass('fix') && $(window).width() > 767  && $(window).scrollTop() > $filter.offset().top)
            {
                $filter.before($filterSpacer);
                $filter.addClass("fix");
            }
            else if ($filter.hasClass('fix') && $(window).scrollTop() < $filterSpacer.offset().top)
            {
                $filter.removeClass("fix");
                $filterSpacer.remove();
            }
        });
    }
} );
/*********************************************************************************
 * Smooth up
********************************************************************************/
jQuery(document).ready(function($) {

//smooth scroll
$('a[href*=#]').click(function() {
  if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
  && location.hostname == this.hostname) {
  var $target = $(this.hash);
  $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
  if ($target.length) {
  var targetOffset = $target.offset().top;
  $('html,body').animate({scrollTop: targetOffset}, 1000);
  return false;}
  }
 });
});