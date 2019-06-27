<template>
    <div class="container-fluid">
        <fieldset>
            <legend>Planos:</legend>
            <a @click.prevent="addImage" class="btn btn-info m-0 mb-3">Imagen</a>
            <draggable v-model="planos" class="row" draggable=".item" @change="log">
                <div class="col-md-4 mb-2 item" v-for="(item,index) in planos" :key="index" >
                    <div class="image-preview" v-if="getPreviewImage(index)">
                        <span @click="deleteImage(index)" class="badge badge-danger del">X</span>
                        <img class="img-fluid" :src="getPreviewImage(index)" style="height: 200px" v-if="img == 1">
                    </div>
                    <input type="text" :name="'planos['+index+'][image]'" :value="item.image"  class="d-none">
                    <div class="custom-file">
                        <input type="file" @change="previewImage(index,$event)" class="custom-file-input" :name="'planos['+index+'][image]'"  lang="es">
                        <label class="custom-file-label"  data-browse="Subir">Imagen</label>
                    </div>
                </div>
            </draggable>
        </fieldset>
    </div>
</template>

<script>
    import draggable from 'vuedraggable'
    export default {
        //props:['galeria','familia'],
        props:{
            galeria: Array,
            familia: Array,
        },
        data(){
            return {
                img: 1,
                url: document.__API_URL+'/',
                //imageData: [],
                planos:[],
            }
        },
        components: {
            draggable,
        },
        mounted() {
            //console.log(this.gallery)
            this.getFamily();
        },
        methods:{
            getFamily() {
                //console.log(this.galeria);
                if (this.galeria != undefined)
                {
                    this.galeria.forEach((item)=>{
                        this.planos.push(
                            {
                                image: item.image,
                                title_es: item.title_es,
                                title_en: item.title_en,
                            }
                        );
                    });
                    // for (const item in this.familia) {
                    //     this.gallery.push(this.familia);
                    //     //this.gallery[item] = this.familia[item];
                    //     //console.log(this.familia);
                    // }


                    //console.log(this.gallery);

                }
                //console.log(this.familia)
            },
            log() {
                //console.log(this.gallery)
            },
            previewImage: function(Key,event) {
                this.img = 0;
                let file = event.target.files[0];
                this.planos[Key].image = file;
                //this.imageData[fileKey] = file;
                this.img = 1;
            },
            getPreviewImage(Key) {
                let image = this.planos[Key].image;
                if (image && image instanceof File) {
                return URL.createObjectURL(image)
                }
                if (typeof image === 'string' || image instanceof String) {
                    //console.log(image)
                    image = this.url+image;
                return image
                }
                //return image
            },
            addImage: function () {
                this.planos.push(
                    {
                        image:'',
                        title_es:'',
                        title_en:''
                    }
                )
            },
            deleteImage(index) {
                this.planos.splice(index, 1);
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