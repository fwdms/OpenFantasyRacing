<template>
  <Head :title="driver.first_name + ' ' + driver.last_name" />
  <main class="flex flex-wrap bg-white mx-auto py-8 px-8 rounded my-8 max-w-7xl justify-center space-x-8">
      <img :src="driver.profile_image" :alt="driver.first_name + ' ' + driver.last_name" class="w-96 h-96 object-center object-cover rounded" />

      <div class="max-w-3xl">
        <div class="mt-10 mt-16 xl:mt-0">
          <h1 class="text-3xl font-extrabold tracking-tight text-gray-900">
            {{ driver.first_name + ' ' + driver.last_name }}
          </h1>

          <div class="mt-3">
            <Link :href="'/franchise/' + franchise.slug + '/constructor/' + driver.constructor.slug" class="text-3xl text-orange-600">
              {{ driver.constructor.name }}
            </Link>
          </div>

          <div class="mt-6">
            <p class="text-base text-gray-700" v-html="driver.bio"></p>
          </div>
        </div>
      </div>
  </main>
</template>

<script setup>
  defineProps({
    driver: Object,
    franchise: Object
  })
</script>