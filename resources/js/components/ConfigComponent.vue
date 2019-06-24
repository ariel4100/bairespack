<template>
    <div class="container-fluid my-5">
        <a @click.prevent="addConfig" class="btn btn-primary btn-sm m-0 mb-3">+</a>
        <div class="row justify-content-center">
            <div class="col-md-12 mb-4" v-for="(item,index) in configuracion" :key="index">
                <fieldset>
                    <legend>Configuracion: {{ item.title_es }}</legend>
                        <div class="row mb-2"  >
                            <div class="col-md-6 md-form m-0">
                                <input type="text" :name="'gallery['+index+'][title_es]'" v-model="item.title_es"   placeholder="Tipo - español" class="form-control">
                            </div>
                            <div class="col-md-6 md-form m-0">
                                <input type="text" :name="'gallery['+index+'][title_en]'" :value="item.title_en" placeholder="Tipo - ingles" class="form-control">
                            </div>
                            <div class="col-md-6 md-form m-0">
                                <input type="text" :name="'gallery['+index+'][title_es]'" :value="item.title_es"  placeholder="Titulo - español" class="form-control">
                            </div>
                            <div class="col-md-6 md-form m-0">
                                <input type="text" :name="'gallery['+index+'][title_en]'" :value="item.title_en" placeholder="Titulo - ingles" class="form-control">
                            </div>
                            <div class="md-form col-md-6">
                                <h6>Texto - español</h6>
                                <textarea id="text_es" class="md-textarea form-control" name="text_es" rows="3"></textarea>
                            </div>
                            <div class="md-form col-md-6">
                                <h6>Texto - ingles</h6>
                                <textarea id="text_en" class="md-textarea form-control" name="text_es" rows="3"></textarea>
                            </div>
                        </div>
                    <div class="col-md-6 mt-4">
                        <label class="typo__label">Seleccionar Dosificadoras</label>
                        <multiselect v-model="value" :options="dosificaciones" :multiple="true" :custom-label="customLabel" :close-on-select="false" :clear-on-select="false" :preserve-search="true" placeholder="" selectLabel="Haga click para seleccionar" deselectLabel="Haga click para eliminar" selectedLabel="seleccionado" track-by="id">
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
                </fieldset>
            </div>
        </div>
    </div>
</template>

<script>
    import Multiselect from 'vue-multiselect'
    import Selected from './SelectComponent.vue'
    export default {
        props:['dosificaciones','familia','config'],
        components: {
            Selected,
            Multiselect
        },
        data(){
            return {
                img: 1,
                url: document.__API_URL+'/',
                //imageData: [],
                value:[],
                configuracion:[],
            }
        },
        mounted() {
            console.log(this.dosificaciones)
        },

        methods:{
            customLabel ({ text }) {
                //console.log(text.title_es);
                // return `${text.title_es} – ${desc}`
                return `${text.title_es}`
            },
            addConfig: function () {
                this.configuracion.push(
                    {
                        category_es:'',
                        category_en:'',
                        title_es:'',
                        title_en:'',
                        text_es:'',
                        text_en:'',
                    }
                )
            },
        }
    }
</script>
<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>
<style scoped>
    fieldset
    {
        border: 1px solid #ddd !important;
        margin: 0;
        min-width: 0;
        padding: 10px;
        position: relative;
        border-radius:4px;
        background-color:#f5f5f5;
        padding-left:10px!important;
    }

    legend
    {
        font-size:14px;
        font-weight:bold;
        margin-bottom: 0px;
        width: 35%;
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 5px 5px 5px 10px;
        background-color: #ffffff;
    }
</style>
