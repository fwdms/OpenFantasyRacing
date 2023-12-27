import '../css/app.css'
import { createApp, h } from 'vue'
import { createInertiaApp, Head, Link } from '@inertiajs/vue3'
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers'
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m'

import AppLayout from './Layouts/App.vue'

const appName = import.meta.env.VITE_APP_NAME || 'Laravel'

createInertiaApp({
  progress: { 
    color: '#4B5563' 
  },
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
  setup({ el, App, props, plugin }) {
    return createApp({ render: () => h(App, props) })
        .use(plugin)
        .component('Link', Link)
        .component('Header', Head)
        .use(ZiggyVue, Ziggy)
        .mixin({ methods: { route } })
        .mount(el)
  }
})