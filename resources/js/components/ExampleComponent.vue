<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Alta de Mochila</h2>
                    </div>

                    <div class="card-body">
                        
                        <div class="well">
                            <h4>Nombre:</h4>
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control input-sm" maxlength="256">
                                    <span class="input-group-mtn">
                                        <button type="submit" class="btn btn-primary btn-sm">Agregar</button>
                                    </span>
                                </div>
                            </form>
                            <hr>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    import axios from 'axios'

    export default {

        data (){
            return {
                marca : [],
            }
        },

        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
