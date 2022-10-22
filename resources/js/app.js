import { createApp, h } from 'vue'
import { createInertiaApp, Head, Link } from '@inertiajs/inertia-vue3'
import { InertiaProgress } from '@inertiajs/progress'
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers'
import { Ziggy } from './ziggy'
import '../css/app.css'

import AppLayout from './Layouts/App.vue'

const appName =
  window.document.getElementsByTagName('title')[0]?.innerText

createInertiaApp({
  title: (title) => `${title} : ${appName}`,
  resolve: (name) => {
    const page = resolvePageComponent(
      `./Pages/${name}.vue`,
      import.meta.glob('./Pages/**/*.vue')
    )
    page.then((module) => {
      module.default.layout = module.default.layout || AppLayout
    })
    return page
  },
  setup({ el, app, props, plugin }) {
    return createApp({ render: () => h(app, props) })
      .use(plugin)
      .component('Link', Link)
      .component('Header', Head)
      .mixin({ methods: { route } })
      .mount(el)
  }
})

InertiaProgress.init({ color: '#4B5563' })
