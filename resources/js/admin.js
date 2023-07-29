import './bootstrap';
import {createApp} from "vue";
import { createPinia } from 'pinia';
import Submenu from "@/components/admin/parts/Submenu.vue";


const app = createApp({});
const pinia = createPinia()
app.component('Submenu' , Submenu)
app.use(pinia);
app.mount('#app')
