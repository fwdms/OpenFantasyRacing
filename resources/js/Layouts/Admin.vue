<template>
  <div class='h-full bg-gray-100'>
    <body class='h-full'>
    <DarkSideBar>
      <slot />
    </DarkSideBar>
    </body>
  </div>
</template>

<script setup>
  import DarkSideBar from '@/Components/Navigation/DarkSideBar.vue'
</script>