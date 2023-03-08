
<template>
  <!-- Top Header -->
  <header class="flex justify-between items-center p-3 h-14 shadow bg-white">
    <button @click="$emit('toggle-sidebar')"
      class="p-4 items-center justify-center rounded transition-colors text-gray-700 hover:bg-black/10 p-1">
      <Bars3Icon class="w-6" />
    </button>
    <Menu as="div" class="relative inline-block text-left">
      <div>
        <MenuButton class="flex items-center">
          <img src="https://randomuser.me/api/portraits/men/30.jpg" class="rounded-full w-8 mr-2">
          <small>{{ currentUser.name }}</small>

          <ChevronDownIcon class="h-5 w-5 text-violet-200 hover:text-violet-100" aria-hidden="true" />
        </MenuButton>
      </div>

      <transition enter-active-class="transition duration-100 ease-out" enter-from-class="transform scale-95 opacity-0"
        enter-to-class="transform scale-100 opacity-100" leave-active-class="transition duration-75 ease-in"
        leave-from-class="transform scale-100 opacity-100" leave-to-class="transform scale-95 opacity-0">
        <MenuItems
          class="absolute right-0 mt-2 w-36 origin-top-right divide-y divide-gray-100 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
          <div class="px-1 py-1">
            <MenuItem v-slot="{ active }">
            <button :class="[
              active ? 'bg-indigo-600 text-white' : 'text-gray-900',
              'group flex w-full items-center rounded-md px-2 py-2 text-sm',
            ]">
              <UserIcon :active="active" class="mr-2 h-5 w-5 text-violet-400" aria-hidden="true" />
              Profile
            </button>
            </MenuItem>
            <MenuItem v-slot="{ active }">
            <button @click="logout" :class="[
              active ? 'bg-indigo-600 text-white' : 'text-gray-900',
              'group flex w-full items-center rounded-md px-2 py-2 text-sm',
            ]">
              <PowerIcon :active="active" class="mr-2 h-5 w-5 text-violet-400" aria-hidden="true" />
              Logout
            </button>
            </MenuItem>
          </div>
        </MenuItems>
      </transition>
    </Menu>

  </header>
  <!-- End Top Header -->
</template>
  
<script setup>

import { Bars3Icon, ChevronDownIcon, UserIcon, PowerIcon } from '@heroicons/vue/20/solid';
import { Menu, MenuButton, MenuItems, MenuItem } from '@headlessui/vue'

import { ref } from 'vue';
import store from '../store'
import GuestLayout from '../components/GuestLayout.vue'
import router from '../router'
import { computed } from "vue";

const currentUser = computed(() => store.state.user.data);

const emit = defineEmits(['toggle-sidebar']);
const user = {
  name: '',
  id: ''
}

const myName = '';
let loading = ref(false);
let errorMsg = ref("");

function getUser() {

  store.dispatch('getUser')
    .then((response) => {
      
      myName.value = response.data.name

    })
}

function logout() {

  store.dispatch('logout')
    .then(() => {
      router.push({ name: 'login' })

    })
}
</script>

<style scoped>

</style>