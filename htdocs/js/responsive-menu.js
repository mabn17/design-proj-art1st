(function() {
    const menuBtn = document.querySelector('.menu-btn');
    const menu = document.querySelector('.menu');
    const menuNav = document.querySelector('.menu-nav');
    const menuBranding = document.querySelector('.menu-branding');
    const navItems = document.querySelectorAll('.nav-item');
    const footerToggeler = document.querySelector('#toggle-footer');
    const footer = document.querySelector('#footer');

    // Set Initial State Of Menu
    let showMenu = false;
    let showFooter = false;

    menuBtn.addEventListener('click', toggleMenu);
    if (footerToggeler) {
        footerToggeler.addEventListener('click', toggleFooter);
    }

    function toggleMenu() {
        if (!showMenu) {
            menuBtn.classList.add('close');
            menu.classList.add('show');
            menuNav.classList.add('show');
            menuBranding.classList.add('show');
            navItems.forEach(item => item.classList.add('show'));
            // Set Menu State
            showMenu = true;
        } else {
            menuBtn.classList.remove('close');
            menu.classList.remove('show');
            menuNav.classList.remove('show');
            menuBranding.classList.remove('show');
            navItems.forEach(item => item.classList.remove('show'));
            // Set Menu State
            showMenu = false;
        }
    }

    function stillWaiting() {
        // footer.style.display = 'none';
        footer.style.visibility = 'hidden';
    }

    // Show = <i id="toggle-footer" class="fas fa-angle-double-down"></i>
    // Hide = <i id="toggle-footer" class="fas fa-angle-double-up"></i>

    function toggleFooter() {
        if (!showFooter) {
            clearTimeout(stillWaiting);
            footer.style.display = 'inline-block';
            footer.style.visibility = 'visible';
            footerToggeler.classList.remove('rotate-two');
            footerToggeler.classList.add('rotate');
            footer.classList.remove('hide-now');
            footer.classList.add('show');
            showFooter = true;
        } else {
            footerToggeler.classList.remove('rotate');
            footerToggeler.classList.add('rotate-two');
            footer.classList.remove('show');
            footer.classList.add('hide-now');
            showFooter = false;
            setTimeout(stillWaiting, 600);
        }
    }
})();
