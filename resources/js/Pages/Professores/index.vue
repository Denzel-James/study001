<script >

export default{
    name:'index',
    props:{
        professores:Object,
    },
    data(){
        return{

        }
    },
    methods:{
        editar(id){
            this.$inertia.visit('/professores/'+id+'/edit');
        },
        eliminar(id){
            if(confirm('Deseja elimar este Usuario??')){
                axios.delete('/professores/'+ id)
                    .then(response=>{
                        alert('Usuario foi apagado com sucesso!!!');
                        this.$inertia.visit('/professores');
                    })
                    .catch(error=>{
                        alert('Erro ao Apagar o usuario');
                    })
            }
        }
    }
}
</script>

<template>
    <div class="container mx-auto pt-10">
        <div class="row">
            <header class="text-center">
                <nav class="font-medium">
                    <span class="m-2">Dados Pessoas</span>
                    <a href="/professores/create" class="btn bg-blue-500 text-blue-50 w-1/12 hover:bg-blue-600">New</a>
                </nav>
            </header>
        </div>
        <div class="row mt-3 d-flex justify-content-center">
            <div class="">
                <table class="table table-striped">
                    <thead class="">
                    <th class="">Id</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Genero</th>
                    <th>Data de Nascimento</th>
                    <th>Telefone</th>
                    <th></th>
                    </thead>
                    <tbody>
                    <tr
                        v-for="professor in professores">
                        <td>{{professor.id}}</td>
                        <td>{{professor.nome}}</td>
                        <td>{{professor.email}}</td>
                        <td>{{professor.genero}}</td>
                        <td>{{professor.data_nascimento}}</td>
                        <td>{{professor.telefone}}</td>
                        <td class="">
                            <a href="#" class="btn btn-info mr-4" @click="editar(professor.id)">Editar</a>
                            <a href="#" class="btn btn-danger" @click="eliminar(professor.id)">Eliminar</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
