import './bootstrap';
import {createApp} from "vue";
import { createPinia } from 'pinia';

//part
import AdminSidebar from "@/components/admin/parts/AdminSidebar.vue"
// import Submenu from "@/components/admin/parts/Submenu.vue";

//galleries
import StoreGalleries from "@/components/admin/galleries/Store.vue"
import IndexGalleries from "@/components/admin/galleries/Index.vue"

//perfect scrollbar
import PerfectScrollbar from 'vue3-perfect-scrollbar'
import 'vue3-perfect-scrollbar/dist/vue3-perfect-scrollbar.css'

const app = createApp({});
const pinia = createPinia()
//parts
// app.component('Submenu' , Submenu)
app.component('AdminSidebar' , AdminSidebar)

//galleries
app.component('StoreGalleries' , StoreGalleries)
app.component('IndexGalleries' , IndexGalleries)

//plugins
app.use(pinia);
app.use(PerfectScrollbar, {
    watchOptions: true,
    options: {
      suppressScrollX: true
    }
  })
app.mount('#app')
