<template>
    <div>
        <div>
            <div class="checkout__step__title">{{ title }}</div>

            <div v-show="selected.length">
                <div class="checkout__select">
                    <div
                        class="checkout__select__checked"
                        v-for="product in selected"
                        :key="product.id"
                    >
                        <div
                            class="checkout__select__checked__image"
                            :style="`background-image: url(${product.image})`"
                        ></div>
                        <div class="checkout__select__checked__name">
                            {{ product.title }}
                        </div>
                        <div class="checkout__select__checked__price">
                            ${{ product.price }}
                        </div>
                        <div class="checkout__select__checked__ctrl">
                            <button type="button" @click="remove(product.id)">
                                <i class="icomoon-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div
                :class="[
                    'checkout__select',
                    {
                        disabled: products.length == 0,
                        loading: loading,
                    },
                ]"
                v-click-outside="closeDropdown"
                v-show="showSelect"
            >
                <div class="checkout__select__button" @click="toggleDropdown">
                    <div class="checkout__select__button__input">
                        <span>Choose your {{ type }}</span>
                    </div>
                    <div class="checkout__select__button__arrow">
                        <i class="icomoon-arrow-thin-down"></i>
                    </div>
                    <div class="lds-ellipsis checkout__loader">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
                <div
                    :class="[
                        'checkout__select__list',
                        { active: showDropdown },
                    ]"
                    data-simplebar
                >
                    <div v-show="selectable.length">
                        <div
                            :class="['checkout__select__item']"
                            v-for="product in selectable"
                            :key="product.id"
                            @click="select(product)"
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
                                    @click.stop="
                                        openPopup(
                                            `${quickViewUrl}?id=${product.id}`
                                        )
                                    "
                                >
                                    LEARN MORE
                                </button>
                            </div>
                        </div>
                    </div>

                    <div
                        class="checkout__select__list__empty"
                        v-show="!selectable.length"
                    >
                        Nothing to select.
                    </div>
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
        loading: {
            type: Boolean,
            required: true,
        },
        multiple: {
            type: Boolean,
        },
        type: {
            type: String,
            required: true,
        },
        products: {
            type: Array,
            required: true,
        },
        quickViewUrl: {
            type: String,
            required: true,
        },
    },

    data() {
        return {
            showDropdown: false,
            selected: [],
        };
    },

    watch: {
        products() {
            this.selected = [];
        },

        selected() {
            this.$emit("change", this.selected);
        },
    },

    computed: {
        title() {
            if (this.selected.length) {
                return "Current " + this.type;
            }

            return "Choose your " + this.type;
        },

        selectable() {
            return this.products.filter((item) => {
                const selectedIds = this.selected.map((item) => {
                    return item.id;
                });

                return !selectedIds.includes(item.id);
            });
        },

        showSelect() {
            if (this.multiple || !this.selected.length) {
                return true;
            }

            return false;
        },
    },

    methods: {
        closeDropdown(event) {
            if ($(event.target).closest(".popup").length) return;
            if (
                $(event.target).closest(".checkout__select__checked__ctrl")
                    .length
            )
                return;

            this.showDropdown = false;
        },

        toggleDropdown() {
            this.showDropdown = !this.showDropdown;
        },

        select(product) {
            if (product.price == 0) return;

            const isSelected = !!this.selected.find((item) => {
                return item.id == product.id;
            });

            if (isSelected) return;

            this.selected.push(product);

            if (!this.multiple) {
                this.showDropdown = false;
            }
        },

        openPopup(src) {
            ProductPopup.open(src);
        },

        add(id) {
            const product = this.products.find((item) => {
                return item.id == id;
            });

            if (product) {
                this.select(product);
            }
        },

        remove(id) {
            this.selected = this.selected.filter((item) => {
                return item.id != id;
            });
        },
    },
};
</script>