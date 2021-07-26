<template>
    <div class="container brd">
        <h2 align="center">Login</h2>
        <div>
            <div class="form-group">
                <div class="form-group">
                    <input type="email" class="form-control" id="email"
                           :class="validate.email === undefined ? '' : ' is-invalid'" v-model="form.email"
                           placeholder="Your e-mail">
                    <div v-for="error in validate.email" v-if="validate.email !== null" class="invalid-feedback">
                        {{ error }}
                    </div>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="password"
                           :class="validate.password === undefined ? '' : ' is-invalid'" v-model="form.password"
                           placeholder="Password">
                    <div v-for="error in validate.password" v-if="validate.password !== null" class="invalid-feedback">
                        {{ error }}
                    </div>
                </div>
            </div>
            <button @click.prevent="loginUser" style="width: 100%" type="button" class="btn btn-primary">Log in</button>
        </div>

    </div>
</template>

<script>
export default {

    data(){
        return{
            user: {
                role: ''
            },
            form:{
                email: '',
                password: ''
            },
            validate:{}
        }
    },
    methods: {
        loginUser(){
            let self = this;
            axios.post('/api/login', this.form).then((response) => {

                localStorage.setItem('token', response.data)
                console.log(response.data);
                console.log('logged');
                self.$router.push({ name: "CV"});
                self.$forceUpdate();
                self.$router.go();
            }).catch((error)=>{
                self.validate = error.response.data.errors;
            })
        }
    }

}
</script>

<style scoped>
.container{
    margin-top: 30px;
}

.brd {
    border: 4px double black; /* Параметры границы */
    padding: 10px; /* Поля вокруг текста */
}
</style>
