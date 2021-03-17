// Centre the items in the collapsed navbar
const navbarToggler = document.querySelector('.navbar-toggler');
navbarToggler.addEventListener('click', e => {
    if(navbarToggler.attributes['aria-expanded'].value === 'false') {
        const collapsedArea = document.querySelectorAll('.navbar-nav');
        for(let i = 0; i < collapsedArea.length; i++) {
            collapsedArea[i].style.textAlign = 'center';
        }
    }
});