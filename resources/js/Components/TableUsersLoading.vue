<template>
  <div class="animate-pulse -mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
      <div
        class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:rounded-lg"
      >
        <table class="min-w-full divide-y divide-gray-300">
          <thead class="bg-gray-50">
            <tr>
              <th
                scope="col"
                class="py-3.5 pl-4 pr-3 text-left text-sm text-gray-500 font-semibold sm:pl-6"
              >
                <span class="bg-gray-500">Name</span>
              </th>

              <th
                scope="col"
                class="px-3 py-3.5 text-left text-sm font-semibold text-gray-500"
              >
                <span class="bg-gray-500">Email</span>
              </th>
              <th
                scope="col"
                class="px-3 py-3.5 text-left text-sm font-semibold text-gray-500"
              >
                <span class="bg-gray-500">Created</span>
              </th>
              <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                <span class="sr-only">Edit</span>
              </th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200 bg-white">
            <tr v-for="index in 10" :key="index">
              <td
                class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-300 sm:pl-6"
              >
                <span class="bg-gray-300">Name Lastname</span>
              </td>

              <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-300">
                <span class="bg-gray-300">someemail@someaddress.com</span>
              </td>
              <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-300">
                <span class="bg-gray-300">Oct 10, 2024</span>
              </td>
              <td
                class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm text-gray-300 font-medium sm:pr-6"
              >
                <span class="bg-gray-300">Edit</span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>
