<script setup>
import { Head, Link } from '@inertiajs/vue3'

defineProps({
  stats: Object,
})
</script>

<template>
  <Head title="Inertia.js v2" />
  <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
    <div class="flex min-h-screen flex-col max-w-xl mx-auto pt-12">
      <h2 class="text-4xl font-semibold">Prefetching</h2>
      <Link href="/" class="text-blue-600 hover:underline"> < Back </Link>

      <div class="mt-4">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis,
        laboriosam eum hic minus harum doloremque quia quas eveniet error
        doloribus aliquam quos expedita, sunt deleniti alias unde saepe
        asperiores quae.
      </div>
    </div>
  </div>
</template>
