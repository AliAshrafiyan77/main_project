import './bootstrap';
import {createApp} from "vue";
import Submenu from "@/components/admin/parts/Submenu.vue";


const app = createApp({});
app.component('Submenu' , Submenu)
app.mount('#app')
