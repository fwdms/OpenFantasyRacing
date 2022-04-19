<template>
  <div class="flex flex-col min-h-screen bg-gray-100">   
    <Navbar />    
    <!-- <command-palette /> --> 
    <main class="mb-auto">
        <slot />
    </main>
    <Footer />
  </div>
</template>

<script setup>
    import Navbar from '@/Components/Navigation/Navbar'
    import Footer from '@/Components/PageSections/Footer'
    // import CommandPalette from '@/Components/Navigation/CommandPalette'
</script>

<script>
  // (function (p, l, u, t, i, o) {
  //   p[t] = p[t] || function () {
  //     (p[t].q = p[t].q || []).push(arguments);
  //   };
  //   o = l.getElementsByTagName('head')[0];
  //   i = l.createElement('script');
  //   i.async = 1;
  //   i.src = u;
  //   o.appendChild(i);
  // })(window, document, 'https://cdn.plutio.com/messenger/main.js', '$plutio_msg');

  // $plutio_msg('TthCMKaeKajrXTYvq', { });
</script>