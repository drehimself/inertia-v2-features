<script setup>
import StatsOverview from '@/Components/StatsOverview.vue'
import StatsOverviewLoading from '@/Components/StatsOverviewLoading.vue'
import TableUsers from '@/Components/TableUsers.vue'
import TableUsersLoading from '@/Components/TableUsersLoading.vue'
import { Head, Link } from '@inertiajs/vue3'

defineProps({
  stats: Object,
  users: Array,
})
</script>

<template>
  <Head title="Inertia.js v2" />
  <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
    <div class="flex min-h-screen flex-col max-w-4xl px-4 mx-auto pt-12">
      <h2 class="text-4xl font-semibold">Deferred Props</h2>
      <Link href="/" class="text-blue-600 hover:underline"> < Back </Link>

      <div class="mt-4">
        <StatsOverview :stats />
      </div>

      <section>
        <div class="mt-8 flow-root">
          <TableUsers :users />
        </div>
      </section>
    </div>
  </div>
</template>
