<template>
    <div class="container">
        <a @clicl.prevent="addImage" class="btn btn-success">Imagen</a>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                galery:[
                    {
                        image:''
                    }
                ],
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            addImage: function () {
                this.galery.push(
                    {
                        image: '',
                        title: '',
                    }
                )

                console.log(this.productocapacidad)
            },
        }
    }
</script>
