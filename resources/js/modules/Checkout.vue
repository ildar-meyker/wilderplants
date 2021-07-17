<template>
    <div>
        <div class="checkout__step">
            <div class="checkout__step__title checkout__step__title--size">
                Сhoose your size
            </div>
            <div class="checkout__step__info">
                <a href="#" data-src="/html/info/1" class="js-open-info"
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
                :products="loadedPlants"
                productType="plant"
                @change="setCheckedPlant"
            ></Select>
        </div>

        <div class="checkout__step" v-show="checkedPlant">
            <Select
                :products="loadedPots"
                productType="pot"
                @change="setCheckedPot"
            ></Select>
        </div>

        <div class="checkout__step" v-show="checkedPot">
            <Select
                :products="loadedAccessories"
                productType="accessory"
                @change="setCheckedAccessory"
            ></Select>
        </div>

        <div class="checkout__total">
            <div class="checkout__total__price">{{ totalPrice }}</div>
            <div class="checkout__total__ctrl">
                <button type="button" class="button-black button-black--size-2">
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
    },

    data() {
        return {
            availableSizes: [4, 6, 8, 10],
            checkedSize: null,

            loadedPlants: null,
            checkedPlant: null,

            loadedPots: null,
            checkedPot: null,

            loadedAccessories: null,
            checkedAccessory: null,
        };
    },

    computed: {
        totalPrice() {
            let total = 0;

            if (this.checkedPlant) {
                total += parseInt(this.checkedPlant.price);
            }

            if (this.checkedPot) {
                total += parseInt(this.checkedPot.price);
            }

            if (this.checkedAccessory) {
                total += parseInt(this.checkedAccessory.price);
            }

            return "$" + total;
        },
    },

    watch: {
        checkedSize() {
            this.getPlants();
        },
    },

    methods: {
        setCheckedSize(size) {
            this.checkedSize = size;
        },

        setCheckedPlant(product) {
            this.checkedPlant = product;
            this.getPots();
        },

        setCheckedPot(product) {
            this.checkedPot = product;
            this.getAccessories();
        },

        setCheckedAccessory(product) {
            this.checkedAccessory = product;
        },

        getPlants() {
            this.loadedPlants = null;

            axios
                .get(`/fake/plants-${this.checkedSize}.json`, {
                    params: {
                        size: this.checkedSize,
                    },
                })
                .then((response) => {
                    this.loadedPlants = response.data;
                })
                .catch((error) => {
                    console.log(error);
                });
        },

        getPots() {
            this.loadedPots = null;

            axios
                .get(`/fake/pots.json`, {
                    params: {
                        size: this.checkedSize,
                        plant: this.checkedPlant && this.checkedPlant.id,
                    },
                })
                .then((response) => {
                    this.loadedPots = response.data;
                })
                .catch((error) => {
                    console.log(error);
                });
        },

        getAccessories() {
            this.loadedAccessories = null;

            axios
                .get(`/fake/accessories.json`, {
                    params: {
                        size: this.checkedSize,
                        plant: this.checkedPlant && this.checkedPlant.id,
                        pot: this.checkedPot && this.checkedPot.id,
                    },
                })
                .then((response) => {
                    this.loadedAccessories = response.data;
                })
                .catch((error) => {
                    console.log(error);
                });
        },
    },

    beforeMount() {
        this.checkedSize = this.defaultSize;
    },
};
</script>