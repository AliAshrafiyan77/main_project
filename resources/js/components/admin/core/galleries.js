import { defineStore } from 'pinia';
import { ref } from 'vue';

const useGalleryStore = defineStore('gallery', {
    state: () => ({
         allGalleries:[]
    }),
    getters: {

    },
    actions: {
        getGalleries(){
            axios.post('/admin/get-galleries').then(res => {
                this.allGalleries = res.data.data
                console.log(this.allGalleries);
            })
        },
        generateSize(size){
            let result = size /1000;
            if (result >1000) {
                return `${(result / 1000).toFixed(2)} MB`;
            }else{
               return `${(result).toFixed(2)} KB`
            }
        }
    },
})
export{
    useGalleryStore,
}
