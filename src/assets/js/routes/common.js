import Scroll from "scroll-slide";

export default {
    init() {
        if(window.innerWidth >= 1201) {
            const slider = new Scroll({
                viewport: document.querySelector('.slides'),
                slides: document.querySelectorAll('.slides .slide')
            });

            const links = document.querySelectorAll('.header__nav a')
            links.forEach((link) => {
                link.addEventListener('click', (e) => {
                    e.preventDefault()
                    const index = link.getAttribute('href').replaceAll('#slide-', '')
                    slider.scrollTo(parseInt(index))
                })
            })



        }
    },
    finalize() {
        const headerOpen = document.querySelector('.header__open')
        const navBlackout = document.querySelector('.header-blackout')
        const nav = document.querySelector('.header__nav nav')

        if(nav && navBlackout && headerOpen) {
            navBlackout.addEventListener('click', (e) => {
                e.preventDefault()

                navBlackout.classList.remove('active')
                nav.classList.remove('active')
                headerOpen.classList.remove('active')
            })

            headerOpen.addEventListener('click', (e) => {
                e.preventDefault()

                if(nav && navBlackout) {
                    nav.classList.toggle('active')
                    headerOpen.classList.toggle('active')
                    navBlackout.classList.toggle('active')
                }
            })
        }
    }
}
