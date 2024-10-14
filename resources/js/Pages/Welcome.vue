<script setup>
import { Head, Link } from '@inertiajs/vue3'
</script>

<template>
  <Head title="Inertia.js v2" />
  <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
    <div class="flex min-h-screen flex-col max-w-xl mx-auto pt-12">
      <h2 class="text-4xl font-semibold">Inertia.js v2 New Features</h2>
      <ul class="list-disc list-inside text-xl space-y-2 mt-8">
        <li>
          <Link :href="route('polling')" class="text-blue-600 hover:underline">
            Polling
          </Link>
        </li>
        <li>
          <Link
            :href="route('deferred-props')"
            class="text-blue-600 hover:underline"
          >
            Deferred Props
          </Link>
        </li>
        <li>
          <Link
            :href="route('prefetching')"
            class="text-blue-600 hover:underline"
          >
            Prefetching
          </Link>
        </li>
        <li>
          <Link
            :href="route('load-when-visible')"
            class="text-blue-600 hover:underline"
          >
            Load When Visible
          </Link>
        </li>
        <li>
          <Link
            :href="route('merging-props')"
            class="text-blue-600 hover:underline"
          >
            Merging Props (Infinite Scroll)
          </Link>
        </li>
      </ul>
    </div>
  </div>
</template>
