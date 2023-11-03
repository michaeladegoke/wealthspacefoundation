

window.addEventListener('scroll', function() {
    console.log("Scroll event detected!");
    const navbar = document.getElementById('navbarContent');
    const header = document.querySelector('.header');

    console.log("Scroll position:", window.scrollY); // Log current scroll position
    console.log("Header offset height:", header.offsetHeight); // Log header offset height

    if (window.scrollY > header.offsetHeight) {
        navbar.classList.add('fixed');
        console.log("Navbar class 'fixed' added");
    } else {
        navbar.classList.remove('fixed');
        console.log("Navbar class 'fixed' removed");
    }
});

