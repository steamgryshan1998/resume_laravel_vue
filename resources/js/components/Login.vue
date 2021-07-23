<template>
    <div>
        <h2>Login</h2>
            <div class="form-group">
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" :class="validate.email === undefined ? '' : ' is-invalid'" v-model="form.email" placeholder="Your e-mail">
                    <div v-for="error in validate.email" v-if="validate.email !== null" class="invalid-feedback">
                        {{ error }}
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" :class="validate.password === undefined ? '' : ' is-invalid'" v-model="form.password" placeholder="Password">
                    <div v-for="error in validate.password" v-if="validate.password !== null" class="invalid-feedback">
                        {{ error }}
                    </div>
                </div>
            </div>
            <button @click.prevent="loginUser" type="button" class="btn btn-primary">Log in</button>
    </div>
</template>

<script>
export default {

    data(){
        return{
            user: {},
            form:{
                email: '',
                password: ''
            },
            validate:{}
        }
    },
    methods: {
        loginUser(){
            const self = this;
            axios.post('/api/login', this.form).then((response) => {
                localStorage.setItem('token', response.data)
                console.log(response.data);
                console.log('logged');
                self.$router.push({ name: "CV"});
            }).catch((error)=>{
                self.validate = error.response.data.errors;
            })
        }
    }

}
</script>

<style scoped>

</style>
