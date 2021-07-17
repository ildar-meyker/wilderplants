const Slider = {
    _slider: null,

    init() {
        if (this._slider) return;

        this._slider = $("#plant-types .plant-types__list").lightSlider({
            item: 3,
            loop: false,
            slideMargin: 0,
            pager: false,
            controls: false
        });
    },

    destroy() {
        if (!this._slider) return;

        this._slider.destroy();
        this._slider = null;
    },

    prev(e) {
        e.preventDefault();

        this._slider.goToPrevSlide();
    },

    next(e) {
        e.preventDefault();

        this._slider.goToNextSlide();
    },

    onResize(mql) {
        mql.matches ? this.init() : this.destroy();
    },

    setup() {
        $(document).on("click", ".plant-types__next", this.next.bind(this));
        $(document).on("click", ".plant-types__prev", this.prev.bind(this));

        const mql = window.matchMedia("(min-width: 1200px)");

        mql.addListener(this.onResize.bind(this));

        this.onResize(mql);
    }
};

$(function() {
    Slider.setup();
});
