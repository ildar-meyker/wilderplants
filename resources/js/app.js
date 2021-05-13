import './bootstrap';
import "lightslider";

import BurgerMenu from "./modules/BurgerMenu";
import CatalogFilter from "./modules/CatalogFilter";
import CustomForm from "./modules/CustomForm";
import SuperPowers from "./modules/SuperPowers";
import InfoPopup from "./modules/InfoPopup";

$(function () {

    BurgerMenu.init();
    CatalogFilter.init();
    CustomForm.init();
    SuperPowers.init();
    InfoPopup.init();

    $('#photos-slider').lightSlider({
        gallery: true,
        item: 1,
        loop: false,
        slideMargin: 0,
        thumbItem: 3
    });

    $('#types-slider').lightSlider({
        item: 2,
        loop: false,
        slideMove: 2,
        responsive : [
            {
                breakpoint: 800,
                settings: {
                    item: 2,
                    slideMove: 2,
                  }
            }
        ]
    }); 

    $('#more-slider').lightSlider({
        item: 4,
        loop: false,
        slideMove: 4,
    }); 


    
});