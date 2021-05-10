import $ from 'jquery';

const BurgerMenu = {
    
    isActive: false,

    open() {
        $('#burger, #topbar, #nav-side').addClass('is-active');
        this.isActive = true;
    },

    close() {
        $('#burger, #topbar, #nav-side').removeClass('is-active');
        this.isActive = false;
    },

    toggle() {
        (this.isActive) ? this.close() : this.open();
    },

    init() {
        const self = this;

        $(function () {

            $(document).on('click', '#burger', self.toggle.bind(self));
    
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

