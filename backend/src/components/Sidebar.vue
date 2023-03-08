
<template>
  <!-- Sidebar -->
  <div class="w-[200px] transition-all bg-indigo-700 text-gray-300 py-4 px-2">
    <router-link :to="{name: 'app.dashboard'}" 
    class="flex items-center hover:bg-black/20 p-2  transition-colors rounded">
      <span class="mr-2 text-gray-300">
        <HomeModernIcon class="w-6"/>
      </span>
      <span class="text-xs">
        Dashboard
      </span>
    </router-link>

    <router-link :to="{name: 'app.products'}" 
    class="flex items-center hover:bg-black/20 p-2  transition-colors rounded">
      <span class="mr-2 text-gray-300">
        <Bars4Icon class="w-6"/>
      </span>
      <span class="text-xs">
        Products
      </span>
    </router-link>

    <router-link :to="{name: 'app.users'}" 
    class="flex items-center hover:bg-black/20 p-2  transition-colors rounded">
      <span class="mr-2 text-gray-300">
        <UsersIcon class="w-6"/>
      </span>
      <span class="text-xs">
        Users
      </span>
    </router-link>

    <router-link :to="{name: 'app.dashboard'}" 
    class="flex items-center hover:bg-black/20 p-2  transition-colors rounded">
      <span class="mr-2">
        <ChartBarIcon class="w-6"/>
      </span>
      <span class="text-xs">
        Reports
      </span>
    </router-link>
    <router-link :to="{name: 'app.dashboard'}" 
    class="flex items-center hover:bg-black/20 p-2  transition-colors rounded">
      <span class="mr-2">
        <CurrencyDollarIcon class="w-6"/>
      </span>
      <span class="text-xs">
        Bids
      </span>
    </router-link>
    <router-link :to="{name: 'app.dashboard'}" 
    class="flex items-center hover:bg-black/20 p-2  transition-colors rounded">
      <span class="mr-2">
        <DocumentCheckIcon class="w-6"/>
      </span>
      <span class="text-xs">
        Asset Delivery
      </span>
    </router-link>

    <router-link :to="{name: 'app.dashboard'}" 
    class="flex items-center hover:bg-black/20 p-2  transition-colors rounded">
      <span class="mr-2">
        <DocumentCheckIcon class="w-6"/>
      </span>
      <span class="text-xs">
        Exit Process
      </span>
    </router-link>

    <router-link :to="{name: 'app.dashboard'}" 
    class="flex items-center hover:bg-black/20 p-2  transition-colors rounded">
      <span class="mr-2">
        <DocumentCheckIcon class="w-6"/>
      </span>
      <span class="text-xs">
        Leave Management
      </span>
    </router-link>

  </div>
  <!-- End Sidebar -->
</template>
  
<script setup>
import { HomeIcon, UsersIcon,Bars4Icon,ChartBarIcon,HomeModernIcon,CurrencyDollarIcon, DocumentCheckIcon } from '@heroicons/vue/20/solid'
</script>

<style scoped>

</style>