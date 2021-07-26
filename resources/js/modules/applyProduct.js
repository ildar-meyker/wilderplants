import ProductPopup from "./ProductPopup";

export default function applyProduct(ref, id) {
    Checkout.$children[0].$refs[ref].add(id);
    ProductPopup.close();
}
