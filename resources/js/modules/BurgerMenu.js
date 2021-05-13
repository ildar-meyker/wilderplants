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
        $(document).on('click', '#burger', this.toggle.bind(this));
    
        const mediaQuery = window.matchMedia('(min-width: 768px)');

        mediaQuery.addListener(() => {
            if (mediaQuery.matches) {
                this.close();
            }
        });
    }
};


export default BurgerMenu;

