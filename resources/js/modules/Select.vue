<template>
    <div>
        <div class="checkout__step__title">{{ title }}</div>

        <div v-show="checkedProduct">
            <div class="checkout__select">
                <div class="checkout__select__checked">
                    <div
                        class="checkout__select__checked__image"
                        :style="`background-image: url(${
                            checkedProduct && checkedProduct.image
                        })`"
                    ></div>
                    <div class="checkout__select__checked__name">
                        {{ checkedProduct && checkedProduct.title }}
                    </div>
                    <div class="checkout__select__checked__price">
                        ${{ checkedProduct && checkedProduct.price }}
                    </div>
                    <div class="checkout__select__checked__ctrl">
                        <button type="button" @click="reset()">
                            <i class="icomoon-trash"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div
            class="checkout__select"
            v-click-outside="closeDropdown"
            v-show="!checkedProduct"
        >
            <div class="checkout__select__button" @click="toggleDropdown">
                <div
                    class="checkout__select__button__input"
                    v-if="products === null"
                >
                    Loading...
                </div>
                <div class="checkout__select__button__input" v-else>
                    Choose your {{ productType }}
                </div>
                <div class="checkout__select__button__arrow">
                    <i class="icomoon-arrow-thin-down"></i>
                </div>
            </div>
            <div
                :class="['checkout__select__list', { active: showDropdown }]"
                data-simplebar
            >
                <div v-show="products">
                    <div
                        :class="[
                            'checkout__select__item',
                            {
                                active:
                                    checkedProduct &&
                                    product.id == checkedProduct.id,
                            },
                        ]"
                        v-for="product in products"
                        :key="product.id"
                        @click="setCheckedProduct(product)"
                    >
                        <div
                            class="checkout__select__item__image"
                            :style="`background-image: url(${product.image})`"
                        ></div>
                        <div class="checkout__select__item__desc">
                            <div class="checkout__select__item__name">
                                {{ product.title }}
                            </div>
                            <div class="checkout__select__item__price">
                                ${{ product.price }}
                            </div>
                            <button
                                type="button"
                                class="
                                    button-ouline-black
                                    button-ouline-black--size-3
                                    js-open-product
                                "
                                @click.stop="openPopup('/html/info/product')"
                            >
                                LEARN MORE
                            </button>
                        </div>
                    </div>
                </div>

                <div
                    class="checkout__select__list__empty"
                    v-if="products && !products.length"
                >
                    Nothing to select.
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import $ from "jquery";
import "lightslider";
import ProductPopup from "./ProductPopup";

export default {
    props: {
        productType: {
            type: String,
            required: true,
        },
        products: {
            required: true,
        },
    },

    data() {
        return {
            showDropdown: false,
            checkedProduct: null,
        };
    },

    watch: {
        products() {
            this.checkedProduct = null;
        },

        checkedProduct() {
            this.$emit("change", this.checkedProduct);
        },
    },

    computed: {
        title() {
            if (this.checkedProduct) {
                return "Current " + this.productType;
            }

            return "Choose your " + this.productType;
        },
    },

    methods: {
        closeDropdown(event) {
            if ($(event.target).closest(".popup").length) return;

            this.showDropdown = false;
        },

        toggleDropdown() {
            this.showDropdown = !this.showDropdown;
        },

        setCheckedProduct(product) {
            this.showDropdown = false;
            this.checkedProduct = product;
        },

        openPopup(src) {
            ProductPopup.open(src);
        },

        reset() {
            this.checkedProduct = null;
        },
    },
};
</script>