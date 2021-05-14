import $ from 'jquery';
import "imagesloaded";

const InfoPopup = {
    
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
        $(document).on('click', '.js-open-info', this.showPopup.bind(this));
        $(document).on('click', '.popup__close', this.hidePopup.bind(this));
    }
};


export default InfoPopup;

