<template>
    <li @click="btnActive">
        <div class="menu" :class="{active : active}">
            <span>
               <svg class="icon">
                   <use :xlink:href="icon"></use>
               </svg>
            </span>
            <span>{{title}}</span>
            <span class="icon">
                <svg class="icon">
                    <use xlink:href="#arrow-up"></use>
                </svg>
            </span>
        </div>
        <Transition name="slide-fade">
            <ul v-if="active">
                <slot></slot>
            </ul>
        </Transition>
    </li>
</template>

<script setup>
import {ref} from "vue";

const {title , icon} = defineProps(['title' , 'icon'])
const active = ref(false)
const btnActive = () => {
    active.value =! active.value;
}
</script>

