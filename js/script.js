const swiper = new Swiper('.swiper-container', {
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        bulletActiveClass: 'active-bullet',
        bulletClass: 'bullet',
    },
    autoplay: {
        delay: 3000,
    },
    clickable: 'true',
    loop: 'true',
});
const listSlider = new Swiper('.list-slider', {
    slidesPerView: 4,
    spaceBetween: 28,
    freeMode: true,
});
const login = document.querySelector('.login');
const loginModal = document.querySelector('.login-modal')
const search = document.querySelector('.search');
const searchModal = document.querySelector('.search-modal');
const searchModalWindow = document.querySelector('.search-modal__window');







login.addEventListener('click', () => {
    loginModal.classList.toggle('hide')
})
search.addEventListener('click', () => {
    searchModal.classList.toggle('hide')
    searchModalWindow.classList.toggle('animate__fadeInRight')
})
window.addEventListener('click', (event) => {
    if (event.target == loginModal) {
        loginModal.classList.toggle('hide');
    }
    if (event.target == searchModal) {
        searchModal.classList.toggle('hide');
        searchModalWindow.classList.toggle('animate__fadeInRight')
    }
})
