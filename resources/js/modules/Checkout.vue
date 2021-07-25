<template>
    <div>
        <div class="checkout__step">
            <div class="checkout__step__title checkout__step__title--size">
                Сhoose your size
            </div>
            <div class="checkout__step__info">
                <a href="#" data-src="/ajax/popup-example" class="js-open-info"
                    >Size chart</a
                >
            </div>
            <div class="checkout__sizes">
                <div
                    :class="[
                        'checkout__sizes__item',
                        { active: size == checkedSize },
                    ]"
                    v-for="size in availableSizes"
                    @click="setCheckedSize(size)"
                    :key="size"
                >
                    {{ size }}”
                </div>
            </div>
        </div>

        <div class="checkout__step">
            <Select
                type="plant"
                :loading="loadingPlants"
                :products="plants"
                @change="setSelectedPlants"
                :quickViewUrl="quickViewUrl"
            ></Select>
        </div>

        <div class="checkout__step" v-show="selectedPlants.length">
            <Select
                type="pot"
                :loading="loadingPots"
                :products="pots"
                @change="setSelectedPots"
                :quickViewUrl="quickViewUrl"
            ></Select>
        </div>

        <div class="checkout__step" v-show="selectedPots.length">
            <Select
                type="accessory"
                :multiple="true"
                :loading="loadingAccessories"
                :products="accessories"
                @change="setSelectedAccessories"
                :quickViewUrl="quickViewUrl"
            ></Select>
        </div>

        <div class="checkout__total">
            <div class="checkout__total__price">{{ totalPrice }}</div>
            <div class="checkout__total__ctrl">
                <button
                    type="button"
                    class="button-black button-black--size-2"
                    :disabled="!selectedPlants.length"
                    @click="addToCart"
                >
                    Add to cart
                </button>
            </div>
        </div>
    </div>
</template>

<script>
import Select from "./Select.vue";

export default {
    components: { Select },

    props: {
        defaultSize: {
            type: Number,
            required: true,
        },
        availableSizes: {
            type: Array,
            required: true,
        },
        quickViewUrl: {
            type: String,
            required: true,
        },
        productsUrl: {
            type: String,
            required: true,
        },
    },

    data() {
        return {
            checkedSize: null,

            plants: [],
            loadingPlants: false,
            selectedPlants: [],

            pots: [],
            loadingPots: false,
            selectedPots: [],

            accessories: [],
            loadingAccessories: false,
            selectedAccessories: [],
        };
    },

    computed: {
        totalPrice() {
            let total = 0;

            total += this.sum(this.selectedPlants);
            total += this.sum(this.selectedPots);
            total += this.sum(this.selectedAccessories);

            return "$" + total.toFixed(2);
        },
    },

    watch: {
        checkedSize() {
            this.getPlants();
        },
    },

    methods: {
        sum(products) {
            return products.reduce((sum, product) => {
                return sum + parseFloat(product.price);
            }, 0);
        },

        getIds(products) {
            return products.map((product) => {
                return product.id;
            });
        },

        addToCart() {
            $("#checkout-results").val(
                JSON.stringify({
                    plants: this.getIds(this.selectedPlants),
                    pots: this.getIds(this.selectedPots),
                    accessories: this.getIds(this.selectedAccessories),
                })
            );
        },

        setCheckedSize(size) {
            this.checkedSize = size;
        },

        setSelectedPlants(products) {
            this.selectedPlants = products;
            this.getPots();
        },

        setSelectedPots(products) {
            this.selectedPots = products;
            this.getAccessories();
        },

        setSelectedAccessories(products) {
            this.selectedAccessories = products;
        },

        getPlants() {
            this.loadingPlants = true;
            this.plants = [];

            axios
                .get(this.productsUrl, {
                    params: {
                        type: "plants",
                        size: this.checkedSize,
                    },
                })
                .then((response) => {
                    this.plants = response.data;
                })
                .catch((error) => {
                    console.log(error);
                })
                .finally(() => {
                    this.loadingPlants = false;
                });
        },

        getPots() {
            this.loadingPots = true;
            this.pots = [];

            axios
                .get(this.productsUrl, {
                    params: {
                        type: "pots",
                        size: this.checkedSize,
                        plant: this.selectedPlants[0].id,
                    },
                })
                .then((response) => {
                    this.pots = response.data;
                })
                .catch((error) => {
                    console.log(error);
                })
                .finally(() => {
                    this.loadingPots = false;
                });
        },

        getAccessories() {
            this.loadingAccessories = true;
            this.accessories = [];

            axios
                .get(this.productsUrl, {
                    params: {
                        type: "accessories",
                        size: this.checkedSize,
                        plant: this.selectedPlants[0].id,
                        pot: this.selectedPots[0].id,
                    },
                })
                .then((response) => {
                    this.accessories = response.data;
                })
                .catch((error) => {
                    console.log(error);
                })
                .finally(() => {
                    this.loadingAccessories = false;
                });
        },
    },

    beforeMount() {
        this.checkedSize = this.defaultSize;
    },
};
</script>