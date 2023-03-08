
<template>
  <div v-if="currentUser.id" class="min-h-full bg-gray-100 flex">

    <!-- Sidebar -->
    <Sidebar :class="{ '-ml-[200px]': !sidebarOpened }" />
    <!-- End of Sidebar -->
    <div class="flex-1">
      <Navbar @toggle-sidebar="toggleSidebar" />
      <main class="p-6">

        <router-view></router-view>

      </main>
    </div>
  </div>
  <div v-else class="min-h-full bg-gray-200 flex items-center justify-center">
    <Spinner/>
  </div>
</template>
  
<script setup>
import { ref, computed, onMounted, onUnmounted } from 'vue';
import Sidebar from './Sidebar.vue';
import Spinner from './core/Spinner.vue';
import Navbar from './Navbar.vue';
import store from '../store';
const { title } = defineProps({
  title: String
})

const currentUser = computed(() => store.state.user.data);
const sidebarOpened = ref(true);

function toggleSidebar() {
  sidebarOpened.value = !sidebarOpened.value;
}

onMounted(() => {
  store.dispatch('getUser');
  openOrCloseSidebar();
  window.addEventListener('resize', openOrCloseSidebar);



})

onUnmounted(() => {
  window.removeEventListener('resize', openOrCloseSidebar);
})

function openOrCloseSidebar() {
  sidebarOpened.value = window.outerWidth > 768
}
</script>

<style scoped>

</style>