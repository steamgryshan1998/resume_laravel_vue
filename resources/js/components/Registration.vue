<template>
    <div>
        <h2>Registration</h2>
            <div class="form-group">
                <input type="text" class="form-control" :class="validate.name === undefined ? '' : ' is-invalid'" v-model="form.name" id="name" placeholder="Name">
                <div v-for="error in validate.name" v-if="validate.name !== null" class="invalid-feedback">
                    {{ error }}
                </div>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" :class="validate.email === undefined ? '' : ' is-invalid'" v-model="form.email" id="email" placeholder="Email">
                <div v-for="error in validate.email" v-if="validate.email !== null" class="invalid-feedback">
                    {{ error }}
                </div>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" :class="validate.password === undefined ? '' : ' is-invalid'" v-model="form.password" id="password" placeholder="Password">
                <div v-for="error in validate.password" v-if="validate.password !== null" class="invalid-feedback">
                    {{ error }}
                </div>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" :class="validate.conf_password === undefined ? '' : ' is-invalid'" v-model="form.conf_password" id="conf_password" placeholder="Confirm password" required>
                <div v-for="error in validate.conf_password" v-if="validate.conf_password !== null" class="invalid-feedback">
                    {{ error }}
                </div>
            </div>
<!--            <div class="form-group">-->
<!--                <div class="form-check">-->
<!--                    <label class="form-check-label">-->
<!--                        <input class="form-check-input" type="checkbox"> I accept the Terms of Use & Privacy Policy-->
<!--                    </label>-->
<!--                </div>-->
<!--            </div>-->
            <button @click.prevent="addUser" type="submit" class="btn btn-primary">Sign in</button>
    </div>
</template>

<script>
export default {
    data(){
      return{
          form:{
              name: '',
              email: '',
              password: '',
              conf_password: ''
          },
          validate:{}
      }
    },
    methods: {
        addUser(){
            axios.post('/api/register', this.form).then((response) => {
                console.log('saved');
                localStorage.setItem('token', response.data)
                console.log('logged');
                this.$router.push({ name: "CV"});
            }).catch((error)=>{
                this.validate = error.response.data.errors;
            })
        }
    }
}
</script>

<style scoped>

</style>
