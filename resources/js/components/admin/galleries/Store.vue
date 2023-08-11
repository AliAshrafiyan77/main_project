<template>
    <section class="addGalleries">
        <form action="/target" id="dropzone" class="dropzone"></form>
    </section>
</template>
<script setup>
import Dropzone from "dropzone";
import 'dropzone/src/dropzone.scss'
import {useGalleryStore} from "../core/galleries"
import { onMounted } from "vue";


const useGallery = useGalleryStore();



onMounted(()=>{
    let myDropzone = new Dropzone("#dropzone" , {
        url:"/admin/galleries",
        headers:{
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
    })
    myDropzone.on("complete" , file =>{
        useGallery.showGalleries = true;
        useGallery.getGalleries();
    })
})
</script>
