<template>
  <!-- <pre>{{ showModal }}</pre> -->
  <div class="flex justify-center justify-between mb-3">
    <h1 class="text-3xl font-semibold">Products</h1>
    <button type="submit" @click="showAddNewModal()"
      class="flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600
                                                               hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
      Add New Product
    </button>
  </div>
  <ProductModal v-model="showProductModal" :product="productModel" @close="onModalClose"/>
  <ProductsTable @clickEdit="editProduct" />
</template>

<script setup>
import ProductsTable from './ProductsTable.vue';
import ProductModal from './ProductModal.vue';
import { ref } from 'vue';
import store from '../../store';

const DEFAULT_PRODUCT = {
  id: '',
  title: '',
  image: '',
  description: '',
  price: ''
}

const productModel = ref({ ...DEFAULT_PRODUCT })

const showProductModal = ref(false);
function showAddNewModal() {
  showProductModal.value = true;
}

function editProduct(product) {
  store.dispatch('getProduct', product.id)
    .then(({ data }) => {
      productModel.value = data;
      showAddNewModal()
    })
}

function onModalClose() {
  productModel.value = { ...DEFAULT_PRODUCT }
}

</script>

<style scoped></style>