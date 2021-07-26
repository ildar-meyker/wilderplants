import "./bootstrap";
import "lightslider";
import "simplebar";

import BurgerMenu from "./modules/BurgerMenu";
import CatalogFilter from "./modules/CatalogFilter";
import CustomForm from "./modules/CustomForm";
import SuperPowers from "./modules/SuperPowers";
import InfoPopup from "./modules/InfoPopup";
import ProductPopup from "./modules/ProductPopup";
import LessMore from "./modules/LessMore";

import "./modules/PlantTypesSlider";

import applyProduct from "./modules/applyProduct";
window.applyProduct = applyProduct;

import Vue from "vue";
import vClickOutside from "v-click-outside";
import Checkout from "./modules/Checkout.vue";

Vue.use(vClickOutside);

$(function() {
    BurgerMenu.init();
    CatalogFilter.init();
    CustomForm.init();
    SuperPowers.init();
    InfoPopup.init();
    ProductPopup.init();
    LessMore.init();

    $("#photos-slider").lightSlider({
        gallery: true,
        item: 1,
        loop: false,
        slideMargin: 0,
        thumbItem: 3,
        controls: false
    });

    window.Checkout = new Vue({
        el: "#checkout",
        components: { Checkout }
    });
});
