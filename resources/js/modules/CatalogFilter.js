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

    showPopup(e) {
        e.preventDefault();

        const src = $(e.currentTarget).data('src');

        $('#popup .popup__window').html("");
        $('#popup').addClass('active loading');

        $.get(src, function (data) {
            $(data).imagesLoaded(function () {
                $('#popup .popup__window').html(data);
                $('#popup').removeClass('loading');
            });
        });        

    },

    hidePopup() {
        $('#popup').removeClass('active');
    },

    init() {
        const self = this;

        $(function () {

            $(document).on('click', '.js-filter-open', self.openPanel.bind(self));
            $(document).on('click', '.filter__close', self.closePanel.bind(self));
            $(document).on('click', '.filter__header', self.toggleGroup.bind(self));
            $(document).on('click', '.filter__info', self.showPopup.bind(self));
            $(document).on('click', '.popup__close', self.hidePopup.bind(self));

            const mediaQuery = window.matchMedia('(min-width: 768px)');

            mediaQuery.addListener(function () {
                if (mediaQuery.matches) {
                    self.closePanel();
                }
            })
        
        });
    }
};


export default CatalogFilter;

