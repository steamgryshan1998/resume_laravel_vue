<template>
    <div>
        <h2>Login</h2>
            <div class="form-group">
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" v-model="form.email" placeholder="Your e-mail">
                </div>
                <div class="form-group col-md-6">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" v-model="form.password" placeholder="Password">
                </div>
            </div>
            <button @click.prevent="loginUser" type="submit" class="btn btn-primary">Log in</button>
    </div>
</template>

<script>
export default {
    data(){
        return{
            form:{
                email: '',
                password: ''
            },
            errors:[]
        }
    },
    methods: {
        loginUser(){
            axios.post('/api/login', this.form).then(() => {
                console.log('logged');
                this.$router.push({ name: "CV"});
            }).catch((error)=>{
                this.errors = error.response.data.errors;
            })
        }
    }

}
</script>

<style scoped>

</style>
