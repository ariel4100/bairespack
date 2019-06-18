<template>
    <div class="container-fluid">
        <fieldset>
            <legend>Galeria de Imagenes:</legend>
            <a @click.prevent="addImage" class="btn btn-info m-0 mb-3">Imagen</a>
            <div class="ro w">
                <draggable v-model="gallery" class="row" draggable=".item" @change="log">
                    <div class="col-md-4 mb-2 item" v-for="(item,index) in gallery" :key="index" >
                        <div class="image-preview">
                            <img class="img-fluid" :src="getPreviewImage(index)" style="height: 200px" v-if="img == 1">
                        </div>
                        <div class="custom-file">
                            <input type="file" @change="previewImage(index,$event)" class="custom-file-input" id="customFileLang" :name="'gallery['+index+'][img]'" lang="es">
                            <label class="custom-file-label" for="customFileLang" data-browse="Subir">Imagen</label>
                            <span @click="deleteImage(index)" class="badge badge-danger del">X</span>
                        </div>
                        <div class="md-form m-0">
                            <input type="text" :name="'gallery['+index+'][titleg_es]'" :value="gallery[index].titleg_es" placeholder="Titulo - español" class="form-control">
                        </div>
                        <div class="md-form m-0">
                            <input type="text" :name="'gallery['+index+'][titleg_en]'" :value="gallery[index].titleg_en" placeholder="Titulo - ingles" class="form-control">
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
        props:['galeria'],
        data(){
            return {
                img: 1,
                imageData: [],
                gallery:[
                    {
                        image:'',
                        title_es:'',
                        title_en:''
                    }
                ],
            }
        },
        components: {
            draggable,
        },
        mounted() {
            console.log(this.gallery)
        },
        methods:{
            log() {
                console.log(this.gallery)
            },
            previewImage: function(Key,event) {
                // this[fileKey] = event.target.files[0];
                // console.log('File added', fileKey, event.target.files[0]);
                this.img = 0;

                let file = event.target.files[0];
                this.gallery[Key].image = file
                //this.imageData[fileKey] = file;

                this.img = 1;
            },
            getPreviewImage(Key) {
                let image = this.gallery[Key].image;
                console.log(image);
                if (image && image instanceof File) {
                return URL.createObjectURL(image)
                }
                // if (typeof image === 'string' || image instanceof String) {
                // return image
                // }
                //return image
            },
            addImage: function () {
                this.gallery.push(
                    {
                        image:'',
                        title_es:'',
                        title_en:''
                    }
                )

            },
            deleteImage(index) {
                this.gallery.splice(index, 1);
                //this.imageData[index]= '';
            }
        }
    }
</script>
<style scoped>
    .del{
        position: absolute;
        top: -1px;
        z-index: 1;
        cursor: pointer;
        right: 1px;
    }
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