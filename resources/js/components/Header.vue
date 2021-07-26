<template>
    <div class="header justify-content-center">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <router-link to="/"><b>CV</b></router-link>
            </li>
            <hr />
                <div v-if="user.name" class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="far fa-user-circle"></i>{{user.name}}
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">{{user.email}}</a>
                        <a class="dropdown-item" href="#">{{user.role}}</a>
                        <a class="dropdown-item" href="#"><button class="btn btn-danger" type="button" @click="logout">Logout</button>
                        </a>
                    </div>
                </div>
 <!--            <li class="nav-item">-->
<!--                <router-link to="/adminpanel"><b>Admin panel</b></router-link>-->
<!--            </li>-->
            <hr />
            <hr />
            <hr />
            <hr />
            <hr />
            <hr />
            <hr />
            <hr />
            <hr />
            <hr />
            <li v-if="!user.name" class="nav-item">
                <router-link to="/login"><b>Login</b></router-link>
            </li>
            <hr />
            <li v-if="!user.name" class="nav-item">
                <router-link to="/signup"><b>Registration</b></router-link>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    name: "Header",

    data(){
        return {
            user: {},
            //token: localStorage.getItem('token')
        }
    },
    computed: {
        token() {
            return this.token = localStorage.getItem('token')
        }
    },
    mounted(){
    console.log('mountee213d');
    let self = this;
    window.axios.defaults.headers.common['Authorization'] = `Bearer ${this.token}`
    axios.get('/api/user').then(function (response) {
        self.user = response.data

        })
        .catch(function (error) {
            console.log(error);
        })
    },

    methods: {
        logout()
        {
            axios.post('/api/logout').then(() => {
                this.user.name = '';
                localStorage.removeItem('token')
                this.$router.push('/login')
            }).catch((errors) => {
                console.log(errors)
            })
        }
    }
}
</script>

<style scoped>
.header{
    : black;
    color: white;
    background-color: #323026;
}
a{
    font-family: 'Noto Sans JP', sans-serif;
    font-size: 1.2rem;
    color: white;
}
</style>
