<script setup>
import { Head, Link, WhenVisible } from '@inertiajs/vue3'

defineProps({
  posts: Array,
  currentPage: Number,
  lastPage: Number,
})
</script>

<template>
  <Head title="Inertia.js v2" />
  <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
    <div class="flex min-h-screen flex-col max-w-xl mx-auto pt-12">
      <h2 class="text-4xl font-semibold">Merging Props (Infinite Scroll)</h2>
      <Link href="/" class="text-blue-600 hover:underline"> < Back </Link>

      <section class="space-y-8 my-8">
        <div v-for="post in posts" :key="post.id">
          <h2 class="text-2xl font-semibold">
            {{ post.id }} - {{ post.title }}
          </h2>
          <div class="text-sm">{{ post.created_at }}</div>
          <div class="mt-2">{{ post.content }}</div>
        </div>

        <WhenVisible
          always
          :params="{
            data: {
              page: currentPage + 1,
            },
            only: ['posts', 'currentPage'],
            preserveUrl: true,
          }"
        >
          <div v-show="currentPage < lastPage">Loading...</div>
        </WhenVisible>
      </section>
    </div>
  </div>
</template>
