import "./bootstrap";
import "lightslider";
import "simplebar";

import Checkout from "./modules/Checkout.vue";
import BurgerMenu from "./modules/BurgerMenu";
import CatalogFilter from "./modules/CatalogFilter";
import CustomForm from "./modules/CustomForm";
import SuperPowers from "./modules/SuperPowers";
import InfoPopup from "./modules/InfoPopup";
import LessMore from "./modules/LessMore";
import "./modules/PlantTypesSlider";

import Vue from "vue";
import vClickOutside from "v-click-outside";

Vue.use(vClickOutside);

$(function() {
    BurgerMenu.init();
    CatalogFilter.init();
    CustomForm.init();
    SuperPowers.init();
    InfoPopup.init();
    LessMore.init();

    $("#photos-slider").lightSlider({
        gallery: true,
        item: 1,
        loop: false,
        slideMargin: 0,
        thumbItem: 3
    });
});

new Vue({
    el: "#checkout",
    components: { Checkout }
});
