window._ = require("lodash");

window.axios = require("axios");

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

import { createApp, h } from "vue";
import { createInertiaApp, Head, Link } from "@inertiajs/inertia-vue3";
import { InertiaProgress } from "@inertiajs/progress";
import Layout from "./Layouts/App.vue";

const appName =
    window.document.getElementsByTagName("title")[0]?.innerText || "Laravel";

createInertiaApp({
    title: (title) => `${title} : ${appName}`,
    resolve: (name) => {
        let page = require(`./Pages/${name}`).default;

        if (!page.layout) {
            page.layout = Layout;
        }

        return page;
    },
    setup({ el, app, props, plugin }) {
        return createApp({ render: () => h(app, props) })
            .use(plugin)
            .component("Link", Link)
            .component("Head", Head)
            .mixin({ methods: { route } })
            .mount(el);
    },
});

InertiaProgress.init({ color: "#4B5563" });
