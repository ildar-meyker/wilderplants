import $ from "jquery";
import "imagesloaded";
import LessMore from "./LessMore";

const ProductPopup = {
    _slider: null,

    handleOpenButton(e) {
        e.preventDefault();

        const src = $(e.currentTarget).data("src");

        this.open(src);
    },

    handleCloseButton(e) {
        e.preventDefault();
        this.close();
    },

    prevSlide(e) {
        e.preventDefault();

        if (!this._slider) return;

        this._slider.goToPrevSlide();
    },

    nextSlide(e) {
        e.preventDefault();

        if (!this._slider) return;

        this._slider.goToNextSlide();
    },

    open(src) {
        const self = this;

        $("#popup-product .popup__window").html("");
        $("#popup-product").addClass("active loading");

        $.get(src, function(data) {
            $(data).imagesLoaded(function() {
                $("#popup-product .popup__window").html(data);
                $("#popup-product").removeClass("loading");

                self._slider = $("#quick-view-slider").lightSlider({
                    item: 1,
                    loop: false,
                    slideMargin: 0,
                    controls: false
                });

                LessMore.checkHeight($("#popup-product"));
            });
        });
    },

    close() {
        $("#popup-product").removeClass("active");
        this._slider = null;
    },

    init() {
        $(document).on("click", ".quick-view__next", this.nextSlide.bind(this));
        $(document).on("click", ".quick-view__prev", this.prevSlide.bind(this));

        $(document).on(
            "click",
            ".js-open-product",
            this.handleOpenButton.bind(this)
        );
        $(document).on(
            "click",
            ".js-close-product",
            this.handleCloseButton.bind(this)
        );
    }
};

export default ProductPopup;
