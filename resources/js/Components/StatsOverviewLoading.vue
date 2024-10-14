<script setup>
const props = defineProps({
  stats: Object,
})
</script>

<template>
  <div class="animate-pulse">
    <h3 class="text-base font-semibold leading-6 text-gray-900">Stats</h3>
    <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-3">
      <div
        v-for="index in 3"
        :key="index"
        class="overflow-hidden rounded-lg bg-white px-4 py-5 shadow sm:p-6"
      >
        <dt class="truncate text-sm font-medium text-gray-400">
          <span class="bg-gray-400">Stat Total</span>
        </dt>
        <dd class="mt-1 text-3xl font-semibold tracking-tight text-gray-500">
          <span class="bg-gray-500">254</span>
        </dd>
      </div>
    </dl>
  </div>
</template>
