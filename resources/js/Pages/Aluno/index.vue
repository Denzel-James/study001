
<template>
    <div class="container mx-auto pt-10">
        <div class="row">
            <header class="text-center">
                <nav class="font-medium">
                    <span class="m-2">Dados Pessoas</span>
                    <a href="/alunos/create" class="btn bg-blue-500 text-blue-50 w-1/12 hover:bg-blue-600">New</a>
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
                    <th>Morada</th>
                    <th>Telefone</th>
                    <th>Telefone Alt</th>
                    <th></th>
                    </thead>
                    <tbody>
                    <tr
                        v-for="aluno in alunos">
                        <td>{{aluno.id}}</td>
                        <td>{{aluno.nome}}</td>
                        <td>{{aluno.email}}</td>
                        <td>{{aluno.genero}}</td>
                        <td>{{aluno.data_nascimento}}</td>
                        <td>{{aluno.morada}}</td>
                        <td>{{aluno.telefone}}</td>
                        <td>{{aluno.telefoneAlt}}</td>
                        <td class="">
                            <a href="#" class="btn btn-info mr-4" @click="editar(aluno.id)">Editar</a>
                            <a href="#" class="btn btn-danger" @click="eliminar(aluno.id)">Eliminar</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>

    export default {
        name:'index',
        props:{
            alunos:Object
        },
        data(){
            return{

            }
        },
        methods:{
            editar(id){
                this.$inertia.visit('/alunos/'+id+'/edit')
            },
            eliminar(id){
                if(confirm('Deseja Eliminar')){
                    axios.delete('/alunos/'+ id)
                        .then(response => {
                            alert('Eliminado com sucesso');
                            this.$inertia.visit('/alunos')
                    }).catch(error=>{
                        console.log(error);
                    })
                }else{
                    alert('cancelado');
                }
            }
        }
    }
</script>

<style scoped>


</style>
