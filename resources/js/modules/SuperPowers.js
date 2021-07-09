import $ from "jquery";

const SuperPowers = {
    $root: null,

    handleMouseOver(e) {
        const index = $(e.currentTarget).index();

        $(".powers__icons__item", this.$root)
            .removeClass("active")
            .eq(index)
            .addClass("active");

        $(".powers__tabs__item", this.$root)
            .removeClass("active")
            .eq(index)
            .addClass("active");
    },

    init() {
        this.$root = $("#super-powers");

        $(".powers__icons__item").on(
            "mouseover",
            this.handleMouseOver.bind(this)
        );
    },
};

export default SuperPowers;
