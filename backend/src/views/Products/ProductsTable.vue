<template>
  <div class="bg-white p-4 rounded-lg shadow">
    <div class="flex justify-between border-b-2 pb-3">
      <div class="flex items-center">
        <span class="whitespace-nowrap mr-3"> Per Page</span>
        <select @change="getProducts(null)" v-model="perPage"
          class="appearance-none relative block w-24 px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
          <option value="5">5</option>
          <option value="10">10</option>
          <option value="20">20</option>
          <option value="50">50</option>
          <option value="100">100</option>
        </select>
      </div>
      <div>
        <input v-model="search" @change="getProducts(null)"
          class="appearance-none relative block w-48 px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
      </div>
    </div>

    <table class="table-auto w-full">
      <thead>
        <tr>

          <TableHeaderCell @click="sortProduct" class="border-b-2 p-2 text-left" field="id" :sort-field="sortField"
            :sort-direction="sortDirection">Id</TableHeaderCell>
          <TableHeaderCell class="border-b-2 p-2 text-left" field="" :sort-field="sortField"
            :sort-direction="sortDirection">Image</TableHeaderCell>
          <TableHeaderCell @click="sortProduct" class="border-b-2 p-2 text-left" field="title" :sort-field="sortField"
            :sort-direction="sortDirection">Title</TableHeaderCell>
          <TableHeaderCell @click="sortProduct" class="border-b-2 p-2 text-left" field="price" :sort-field="sortField"
            :sort-direction="sortDirection">Price</TableHeaderCell>
          <TableHeaderCell @click="sortProduct" class="border-b-2 p-2 text-left" field="updated_at"
            :sort-field="sortField" :sort-direction="sortDirection">Last Updated</TableHeaderCell>
          <TableHeaderCell field="actions">
            Actions
          </TableHeaderCell>
        </tr>
      </thead>
      <tbody v-if="products.loading">
        <tr>
          <td colspan="5">
            <Spinner class="my-4" />
          </td>
        </tr>
      </tbody>
      <tbody v-else>
        <tr v-for="product in products.data">
          <td class="border-b-2 p-2">{{ product.id }}</td>
          <td class="border-b-2 p-2">
            <img class="w-16" :src="product.image_url" :alt="product.title">
          </td>
          <td class="border-b p-2 max-w-[200px] whitespace-nowrap overflow-hidden text-allipsis">
            {{ product.title }}
          </td>
          <td class="border-b p-2">
            {{ product.price }}
          </td>
          <td class="border-b p-2">
            {{ product.updated_at }}
          </td>
          <td class="border-b p-2">
            <Menu as="div" class="relative inline-block text-left">
              <div>
                <MenuButton
                  class="inline-flex w-full justify-center rounded-md bg-opacity-20 px-4 py-2 text-sm font-medium text-indigo-500 hover:bg-opacity-30 focus:outline-none focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-opacity-75">
                  <AdjustmentsVerticalIcon class="h-5 w-5" arial-hidden="true" />
                </MenuButton>

              </div>

              <transition enter-active-class="transition duration-100 ease-out"
                enter-from-class="transform scale-95 opacity-0" enter-to-class="transform scale-100 opacity-100"
                leave-active-class="transition duration-75 ease-in" leave-from-class="transform scale-100 opacity-100"
                leave-to-class="transform scale-95 opacity-0">

              </transition>

              <MenuItems
                class="absolute right-0 mt-2 w-56 origin-top-right divide-y divide-gray-100 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                <div class="px-1 py-1">
                  <MenuItem v-slot="{ active }">
                  <button :class="[
                    active ? 'bg-indigo-600 text-white' : 'text-gray-900',
                    'group flex w-full items-center rounded-md px-2 py-2 text-sm',
                  ]" @click="editProduct(product)">
                    <PencilIcon :active="active" class="mr-2 h-5 w-5 text-indigo-400" aria-hidden="true" />
                    Edit
                  </button>
                  </MenuItem>
                </div>
                <div class="px-1 py-1">
                  <MenuItem v-slot="{ active }">
                  <button :class="[
                    active ? 'bg-indigo-600 text-white' : 'text-gray-900',
                    'group flex w-full items-center rounded-md px-2 py-2 text-sm',
                  ]" @click="deleteProduct(product)">
                    <TrashIcon :active="active" class="mr-2 h-5 w-5 text-indigo-400" aria-hidden="true" />
                    Delete
                  </button>
                  </MenuItem>
                </div>
              </MenuItems>

            </Menu>
          </td>
        </tr>
      </tbody>
    </table>
    <div v-if="!products.loading" class="flex justify-between items-center mt-5">
      <span>
        Showing from {{ products.from }} to {{ products.to }}
      </span>
      <nav v-if="products.total > products.limit"
        class="relative z-0 inline-flex justify-center rounded-md shadow-sm -space-x-px" aria-label="Pagination">

        <a v-for="(link, i) of products.links" :key="i" :disabled="!link.url" href="#" @click="getForPage($event, link)"
          arial-current="page"
          class="relative inline-flex items-center px-4 py-2 border text-sm font-medium whitespace-nowrap" :class="[
            link.active
              ? 'z-10 bg-indigo-50 border-indigo-500 text-indigo-600'
              : 'bg-white border-gray-300 text-gray-500 hover:bg-gray-50',
            1 === 0 ? 'rounded-l-md' : '',
            1 === products.links.length - 1 ? 'rounded-r-md' : '',
            !link.url ? 'bg-gray-100 text-gray-700' : ''
          ]" v-html="link.label">

        </a>
      </nav>
    </div>

  </div>
</template>

<script setup>

import Spinner from '../../components/core/Spinner.vue';
import TableHeaderCell from '../../components/core/Table/TableHeaderCell.vue';
import { computed, onMounted, ref } from "vue";
import store from '../../store';
import { PRODUCT_PER_PAGE } from '../../constants'
import { Menu, MenuButton, MenuItems, MenuItem } from '@headlessui/vue'
import { AdjustmentsVerticalIcon, PencilIcon, TrashIcon } from '@heroicons/vue/24/outline'

const emit=defineEmits(['clickEdit']);

const perPage = ref(PRODUCT_PER_PAGE);
const search = ref('');
const products = computed(() => store.state.products);

const sortField = ref('updated_at');
const sortDirection = ref('desc');

onMounted(() => {
  getProducts()
});

function getProducts(url = null) {

  store.dispatch('getProducts', {
    url,
    sort_field: sortField.value,
    sort_direction: sortDirection.value,
    search: search.value,
    perPage: perPage.value

  });
}

function getForPage(ev, link) {
  if (!link.url || link.active) {
    return;
  }
  getProducts(link.url);
}

function sortProduct(field) {

  if (sortField.value == field) {
    if (sortDirection.value === 'asc') {
      sortDirection.value = 'desc';
    }
    else {
      sortDirection.value = 'asc';
    }
  }
  else {
    sortField.value = field;
    sortDirection.value = 'asc';
  }
  getProducts();
}

function editProduct(product){
  emit('clickEdit',product);
}

function deleteProduct(product) {
  if (!confirm('Are you sure you want to delete the product?')) {
    return
  }
  store.dispatch('deleteProduct', product.id)
    .then(res => {

      getProducts();
      //store.dispatch('getProducts')
    })
}
</script>

<style scoped></style>