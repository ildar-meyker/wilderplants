import $ from 'jquery';

const SuperPowers = {

    $root: null,

    handleMouseOver(e) {
        const index = $(e.currentTarget).index();

        $('.plant-card__icons__item', this.$root).removeClass('active')
            .eq(index).addClass('active');

        $('.plant-card__tabs__item', this.$root).removeClass('active')
            .eq(index).addClass('active');
    },

    init() {
        this.$root = $('#super-powers');

        $('.plant-card__icons__item').on('mouseover', this.handleMouseOver.bind(this));
    }
};

export default SuperPowers;

