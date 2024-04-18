<script>
    export default{
        name:'edit',
        props:{
            aluno:Object
        },
        data(){
            return{
                alunos:{
                    nome: this.aluno.nome,
                    email: this.aluno.email,
                    genero: this.aluno.genero,
                    data_nascimento: this.aluno.data_nascimento,
                    morada: this.aluno.morada,
                    telefone: this.aluno.telefone,
                    telefoneAlt: this.aluno.telefoneAlt,
                }
            }
        },
        methods:{
            alterar() {
                axios.put('/alunos/'+this.aluno.id, this.alunos
                )
                    .then(response => {
                        console.log(response.data)
                        alert('alterado com sucesso')
                        this.$inertia.visit('/alunos')
                    })
                    .catch(error => {
                        console.log(error)
                    })

            }
        }
    }
</script>

<template>
    <div class="container mx-auto pt-10">
        <header>
            <a href="/alunos/" class="btn bg-gray-400">Voltar</a>
            <h1>Cadastre um aluno</h1>
        </header>
        <div class="p-3 w-75 mx-auto">
            <form @submit.prevent="alterar" class="p-4">
                <div class="row mb-3">
                    <div class="col-5">
                        <label>Nome Completo</label>
                        <input type="text" name="nome" class="form-control" v-model="alunos.nome">
                    </div>
                    <div class="col-5">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" v-model="alunos.email">
                    </div>
                </div>
                <div class="row  mb-3">
                    <div class="col-5">
                        <label>Genero</label><br>
                        <input type="radio" name="genero" class="form-control" value="masculino" v-model="alunos.genero" checked>Masculino
                        <input type="radio" name="genero" class="form-control" value="femenino" v-model="alunos.genero">Femenino
                    </div>
                    <div class="col-5">
                        <label>Data de Nascimento</label>
                        <input type="date" name="dataNascimento" class="form-control" v-model="alunos.data_nascimento">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-5">
                        <label>Morada</label>
                        <input type="text" name="morada" class="form-control" v-model="alunos.morada">

                    </div>
                    <div class="col-5">
                        <div class="row">
                            <div class="col-6">
                                <label>Telefone</label>
                                <input type="number" name="telefone1" class="form-control" v-model="alunos.telefone" maxlength="9">

                            </div>
                            <div class="col-6">
                                <label>Telefone Alt</label>
                                <input type="number" name="telefoneAlt" class="form-control" v-model="alunos.telefoneAlt">

                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-20">
                        <input type="reset" value="reset" class="btn bg-gray-500 text-gray-200 mx-2 hover:border-slate-400 hover:border-2">
                        <input type="submit" value="Submit" class="btn btn-success">
                    </div>
                </div>

            </form>
        </div>
    </div>
</template>

<style scoped>

</style>
