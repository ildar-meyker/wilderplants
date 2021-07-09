import './bootstrap';
import "lightslider";
import 'simplebar';

import BurgerMenu from "./modules/BurgerMenu";
import CatalogFilter from "./modules/CatalogFilter";
import CustomForm from "./modules/CustomForm";
import SuperPowers from "./modules/SuperPowers";
import InfoPopup from "./modules/InfoPopup";
import LessMore from "./modules/LessMore";

$(function () {

    BurgerMenu.init();
    CatalogFilter.init();
    CustomForm.init();
    SuperPowers.init();
    InfoPopup.init();
    LessMore.init();

    $('#photos-slider').lightSlider({
        gallery: true,
        item: 1,
        loop: false,
        slideMargin: 0,
        thumbItem: 3
    });

    // $('#types-slider').lightSlider({
    //     item: 2,
    //     loop: false,
    //     slideMove: 2,
    //     slideMargin: 0,
    //     pager: true
    // }); 

    // $('#more-slider').lightSlider({
    //     item: 4,
    //     loop: false,
    //     slideMove: 4,
    // }); 


    
});