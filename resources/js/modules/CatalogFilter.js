import $ from 'jquery';
import "imagesloaded";

const CatalogFilter = {
    
    openPanel() {
        $('body').addClass('locked');
        $('#filter').addClass('animated');

        setTimeout(function () {
            $('#filter').addClass('opened');
        }, 10);
    },

    closePanel() {
        $('body').removeClass('locked');
        $('#filter').removeClass('opened');
        
        setTimeout(function () {
            $('#filter').removeClass('animated');
        }, 300);
    },

    toggleGroup(e) {
        const $_ = $(e.target).closest('.filter__group');
        const $collapse = $_.find('.filter__crop');
        const $content = $_.find('.filter__list');
        const $header = $(e.currentTarget);

        const isOpened = $header.hasClass('opened');

        if ( !isOpened ) {
            $header.addClass('opened');

            $collapse.height( $content.outerHeight() );
            
            setTimeout(() => {
                $collapse.addClass('opened');
            }, 300);
        } else {
            $header.removeClass('opened');
            
            $collapse.height( $content.outerHeight() )
                .removeClass('opened');
            
            setTimeout(() => {
                $collapse.prop("style", "");
            }, 10);    
        }

    },

    init() {
        $(document).on('click', '.js-filter-open', this.openPanel.bind(this));
        $(document).on('click', '.filter__close', this.closePanel.bind(this));
        $(document).on('click', '.filter__header', this.toggleGroup.bind(this));

        const mediaQuery = window.matchMedia('(min-width: 768px)');

        mediaQuery.addListener(() => {
            if (mediaQuery.matches) {
                this.closePanel();
            }
        });
    }
};


export default CatalogFilter;

