import $ from 'jquery';
import "imagesloaded";

const LessMore = {
    
    toggle(e) {
        e.preventDefault();

        const $_ = $(e.currentTarget).closest('.less-more');
        const $ruler = $_.find('.less-more__ruler');
        const $crop = $_.find('.less-more__crop');

        const isActive = $(e.currentTarget).hasClass('active');

        if ( !isActive ) {
            $(e.currentTarget).addClass('active');
            $crop.css('max-height', $ruler.height());
        } else {
            $(e.currentTarget).removeClass('active');
            $crop.attr('style', '');
        }
    },

    init() {
        $(document).on('click', '.less-more__button', this.toggle.bind(this));
    }

};


export default LessMore;
