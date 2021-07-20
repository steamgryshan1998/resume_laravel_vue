<template>
    <div>
        <h2>Registration</h2>
            <div class="form-group">
                <input type="text" class="form-control" v-model="form.name" id="name" placeholder="Name">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" v-model="form.email" id="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" v-model="form.password" id="password" placeholder="Password">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" v-model="form.conf_password" id="conf_password" placeholder="Confirm password" required>
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
          errors:[]
      }
    },
    methods: {
        addUser(){
            axios.post('/api/register', this.form).then(() => {
                console.log('saved');
            }).catch((error)=>{
                this.errors = error.response.data.errors;
            })
        }
    }
}
</script>

<style scoped>

</style>
