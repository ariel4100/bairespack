<template>
    <div class="container-fluid">
        <fieldset>
            <legend>Galeria de Imagenes:</legend>
            <a @click.prevent="addImage" class="btn btn-info m-0 mb-3">Imagen</a>
            <div class="ro w">
                <draggable v-model="galery" class="row">
                    <div class="col-md-4 mb-2" v-for="(item,index) in galery" :key="index">
                        <div class="image-preview" v-if="imageData.length > 0">
                            <img class="preview" :src="imageData ">
                        </div>
                        <div class="custom-file">
                            <input type="file" @change="previewImage" class="custom-file-input" id="customFileLang" :name="'galery['+index+'][img]'" lang="es">
                            <label class="custom-file-label" for="customFileLang" data-browse="Subir">Imagen</label>
                        </div>
                        <div class="md-form m-0">
                            <input type="text" :name="'galery['+index+'][titleg_es]'" :value="galery[index].titleg_es" placeholder="Titulo - español" class="form-control">
                        </div>
                        <div class="md-form m-0">
                            <input type="text" :name="'galery['+index+'][titleg_en]'" :value="galery[index].titleg_en" placeholder="Titulo - ingles" class="form-control">
                        </div>
                    </div>
                </draggable>
            </div>
        </fieldset>
    </div>
</template>

<script>
    import draggable from 'vuedraggable'
    export default {
        props:['galery'],
        data(){
            return {
                imageData: [],
                galery:[
                    {
                        image:''
                    }
                ],
            }
        },
        components: {
            draggable,
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            previewImage: function(event) {
                console.log(event.target.files)
            },

            addImage: function () {
                this.galery.push(
                    {
                        image: '',
                        title: '',
                    }
                )

            },
        }
    }
</script>
<style scoped>
    fieldset
    {
        border: 1px solid #ddd !important;
        margin: 0;
        xmin-width: 0;
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