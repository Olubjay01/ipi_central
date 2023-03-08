<template>
  <div class="flex items-center min-h-full min-w-full w-full justify-center">
    <div class="text-indigo-600 text-7xl px-8 font-bold border-r pb-4">404</div>
    <div class="px-8">
      <h1 class="text-5xl font-bold mb-4">Page Not Found</h1>
      <p class="text-gray-600 mb-8">Please check the Url in the Address bar and try again</p>
      <div>
        <router-link :to="{name: 'app.dashboard'}" class="justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
          Go Back to Home
        </router-link>
      </div>
    </div>
  </div>
</template>

<script setup>
import {
  BriefcaseIcon,
  CalendarIcon,
  CheckIcon,
  ChevronDownIcon,
  CurrencyDollarIcon,
  LinkIcon,
  MapPinIcon,
  PencilIcon,
} from '@heroicons/vue/20/solid'
import { Menu, MenuButton, MenuItem, MenuItems } from '@headlessui/vue'
</script>