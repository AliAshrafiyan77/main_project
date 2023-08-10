<template>
    <section id="galleriesIndex">
        <article v-for="gallery in useGallery.allGalleries">
            <figure>
                <img :src="gallery.url" :alt="gallery.name">
            </figure>
            <div class="imageInformation">
                <div class="partInfo">
                    <span>ایجاد کننده:</span>
                    <span>{{ gallery.user.name }}</span>
                    <span>عنوان تصویر:</span>
                    <span>{{ gallery.name }}</span>
                </div>
                <div class="partInfo">
                    <span>اندازه تصویر:</span>
                    <span>{{ useGallery.generateSize(gallery.size) }}</span>
                    <span>فرمت تصویر:</span>
                    <span>{{ gallery.format }}</span>
                </div>
            </div>
        </article>
    </section>
</template>
<script setup>
import { onMounted } from "vue"
import {useGalleryStore} from "../core/galleries"

const useGallery = useGalleryStore();
const { galleries } = defineProps(['galleries'])



onMounted(()=>{
    useGallery.getGalleries();
})
</script>

