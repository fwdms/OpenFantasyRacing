<template>
  <div class="h-full bg-gray-100">   
    <body class="h-full">
        <DarkSideBar >
            <slot />
        </DarkSideBar>
        <!-- <command-palette /> --> 
    </body>
  </div>
</template>

<script setup>
  // import CommandPalette from '@/Components/Navigation/CommandPalette'
  import DarkSideBar from '@/Components/Navigation/DarkSideBar.vue'
</script>