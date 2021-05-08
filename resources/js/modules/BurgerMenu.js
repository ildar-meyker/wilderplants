import $ from 'jquery';

const BurgerMenu = {
    isActive: false,

    open() {
        $('#burger, #topbar, #nav-mobile').addClass('is-active');
        this.isActive = true;
    },

    close() {
        $('#burger, #topbar, #nav-mobile').removeClass('is-active');
        this.isActive = false;
    },

    init() {
        const self = this;

        $(function () {

            $(document).on('click', '#burger', function () {
                (self.isActive) ? self.close() : self.open();
            });
    
            const mediaQuery = window.matchMedia('(min-width: 768px)');

            mediaQuery.addListener(function () {
                if (mediaQuery.matches) {
                    self.close();
                }
            })
            
        });
    }
};


export default BurgerMenu;

