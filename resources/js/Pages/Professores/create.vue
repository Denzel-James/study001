<script>

export default{
    name:'create',
    data(){
        return{
            professor:{
                nome:'',
                email:'',
                genero:'masculino',
                data_nascimento:'',
                telefone:''
            },
            errors:[]
        }
    },
    methods:{
        salvar(){
            axios.post('/professores',this.professor)
                .then(response=>{
                    alert("salvo com sucesso");
                    this.$inertia.visit('/professores');
                })
                .catch(error=>{
                    alert('Erro ao cadastrar os Dados');
                })
        }
    }
}
</script>

<template>
    <div class="container mx-auto pt-10">
        <header>
            <a href="/professor/" class="btn bg-gray-400">Voltar</a>
            <h1>Cadastre um professor</h1>
        </header>
        <div class="p-3 w-75 mx-auto">
            <form @submit.prevent="salvar" class="p-4">
                <div class="row mb-3">
                    <div class="col-5">
                        <label>Nome Completo</label>
                        <input type="text" name="nome" class="form-control" v-model="professor.nome">
                        <div v-show="errors.nome">
                            <p>{{errors.nome}}</p>
                        </div>
                    </div>
                    <div class="col-5">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" v-model="professor.email">
                        <div v-show="errors.email">
                            <p>{{errors.email}}</p>
                        </div>
                    </div>
                </div>
                <div class="row  mb-3">
                    <div class="col-5">
                        <label>Genero</label><br>
                        <input type="radio" name="genero" class="form-control" value="masculino" v-model="professor.genero" checked>Masculino
                        <input type="radio" name="genero" class="form-control" value="femenino" v-model="professor.genero">Femenino
                        <div v-show="errors.genero">
                            <p>{{errors.genero}}</p>
                        </div>
                    </div>
                    <div class="col-5">
                        <label>Data de Nascimento</label>
                        <input type="date" name="dataNascimento" class="form-control" v-model="professor.data_nascimento">
                        <div v-show="errors.data_nascimento">
                            <p>{{errors.data_nascimento}}</p>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-5">
                        <div class="row">
                            <div class="col-6">
                                <label>Telefone</label>
                                <input type="number" name="telefone1" class="form-control" v-model="professor.telefone" maxlength="9">
                                <div v-show="errors.telefone">
                                    <p>{{errors.telefone}}</p>
                                </div>
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
