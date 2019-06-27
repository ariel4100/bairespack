<template>
    <div class="row">
        <div class="col-md-6 mt-4">
            <label class="typo__label">Seleccionar Envasadoras</label>
            <multiselect v-model="value" :options="envasadoras" :multiple="true" :custom-label="customLabel" :close-on-select="false" :clear-on-select="false" :preserve-search="true" placeholder="" selectLabel="Haga click para seleccionar" deselectLabel="Haga click para eliminar" selectedLabel="seleccionado" track-by="id">
                <template slot="selection" slot-scope="{ values, search, isOpen }"><span class="multiselect__single" v-if="values.length &amp;&amp; !isOpen">opciones seleccionadas {{ values.length }}</span></template>
            </multiselect>
            <div class="row my-4">
                <div class="col-md-3" v-for="(item,index) in value" :key="index">
                    <input type="text" class="d-none" :name="'related_id['+index+']'" :value="item.id">
                    <!--<pre class="language-json"><code>{{ item.id  }}</code></pre>-->
                    <img :src="url+item.image[0].image" style="height: 100px;" alt="" class="img-fluid">
                    <p class="text-center">{{ item.text.title_es }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 mt-4">
            <label class="typo__label">Seleccionar Accesorios</label>
            <multiselect v-model="value1" :options="accesorios" :multiple="true" :custom-label="customLabel" :close-on-select="false" :clear-on-select="false" :preserve-search="true" placeholder="" selectLabel="Haga click para seleccionar" deselectLabel="Haga click para eliminar" selectedLabel="seleccionado" track-by="id">
                <template slot="selection" slot-scope="{ values, search, isOpen }"><span class="multiselect__single" v-if="values.length &amp;&amp; !isOpen">opciones seleccionadas {{ values.length }}</span></template>
            </multiselect>
            <div class="row my-4">
                <div class="col-md-3" v-for="(item,index) in value1" :key="index">
                    <input type="text" class="d-none" :name="'accesorio_id['+index+']'" :value="item.id">
                    <!--<pre class="language-json"><code>{{ item.id  }}</code></pre>-->
                    <img :src="url+item.image[0].image" style="height: 100px;" alt="" class="img-fluid">
                    <p class="text-center">{{ item.text.title_es }}</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import Multiselect from 'vue-multiselect'
    export default {
        props:['envasadoras','selectedenvasadoras','dosificaciones','accesorios','selectedaccesorios'],
        components: {
            Multiselect,
        },
        data(){
            return{
                value: [],
                value1: [],
                url : document.__API_URL+'/',

            }
        },
        mounted() {
            this.getProduct();
        },
        methods: {
            customLabel ({ text, order }) {
                //console.log(text.title_es);
                // return `${text.title_es} – ${desc}`
                return `${text.title_es}`
            },
            getProduct () {
                this.value = this.selectedenvasadoras;
                this.value1 = this.selectedaccesorios;
                //console.log(this.accesorios)
                // JSON.parse(this.selectedenvasadoras);
                // this.selectedenvasadoras.forEach((item)=>{
                //     console.log(item.text);
                //     this.value.push(
                //         {
                //             title_es: item,
                //             image:  item.image[0].image
                //         }
                //     );
                // });
            }
        }
    }
</script>
<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>