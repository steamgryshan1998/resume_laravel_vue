<template>
    <div class="container">
        <div class="row">
            <div class="col-sm-2 sidebar">
                <img :src="require('../../../public/images/me.jpeg').default" alt="Me" class="rounded-circle"
                     height="150px" width="150px">
            </div>
            <div class="col-sm-9 justify-content-center title">
                <div class="col-7 mx-auto align-self-center name"><span>YEVHEN HRYSHKO<br>PHP-trainee</span></div>
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
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2 sidebar">
                <div>
                    <div class="col item">
                        <p>CONTACT</p>
                    </div>
                    <div class="sidebar_content">
                        <div>
                            <textarea v-if="showInputs" class="form-control" v-model="content.phone_number" aria-label="Education">{{content.phone_number}}</textarea>
                        <span v-else>{{content.phone_number}}</span>
                        </div>
                        <div>
                            <textarea v-if="showInputs" class="form-control" v-model="content.email" aria-label="Education">{{content.email}}</textarea>
                        <span v-else>{{content.email}}</span>
                        </div>
                        <div>
                            <textarea v-if="showInputs" class="form-control" v-model="content.website" aria-label="Education">{{content.website}}</textarea>
                        <span v-else><a :href="content.website">{{content.website}}</a></span>
                        </div>

                    </div>
                </div>
                <div>
                    <div class="col item">
                        <p>EDUCATION</p>
                    </div>
                    <div class="sidebar_content">
                        <div>
                            <textarea v-if="showInputs" class="form-control" v-model="content.education" aria-label="Education">{{ content.education }}</textarea>
                            <span v-else>{{ content.education }}</span>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="col item">
                        <p>SKILLS</p>
                    </div>
                    <div class="sidebar_content">
                        <div>
                            <textarea v-if="showInputs" class="form-control" v-model="content.skills" aria-label="Education">{{content.skills}}</textarea>
                            <span v-else>{{ skills() }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-9 justify-content-center content">
                <h2>PROFILE</h2>
                <div>
                    <div>
                        <textarea v-if="showInputs" class="form-control" v-model="content.profile" aria-label="Education">{{content.profile}}</textarea>
                        <span v-else>{{content.profile}}</span>
                    </div>
                </div>
                <h2>PROFESSIONAL EXPERIENCE</h2>
                <div>
                <p></p>
                <div>
                    <textarea v-if="showInputs" class="form-control" v-model="content.experience" aria-label="Education">{{content.experience}}</textarea>
                    <span v-else>{{content.experience}}</span>
                </div>
                </div>
                <div v-if="user.role === 'admin'">
                    <button class="btn btn-warning" v-if="!showInputs" type="button" @click="editContent">Edit</button>
                    <button class="btn btn-danger" v-if="showInputs" type="button" @click="cancelEdit">Cancel</button>
                    <button class="btn btn-success" v-if="showInputs" type="button" @click.prevent="submitEdition">Save changes</button>
                </div>
            </div>
        </div>
<!--    <div v-if="user.name">-->
<!--        Authorized<br>-->
<!--        {{user.name}}<br>-->
<!--        {{user.email}}<br>-->
<!--        {{user.role}}-->
<!--        <button class="btn btn-danger" type="button" @click="logout">Logout</button>-->
<!--    </div>-->

    </div>
</template>

<script>
export default {

    data(){
        return{
            user:{},
            content: {
                phone_number: '',
                email: '',
                location: '',
                website: '',
                education: '',
                skills: '',
                profile: '',
                experience: ''
            },
            showInputs: false,
            //token: localStorage.getItem('token')
        }
    },
    computed: {
        token() {
            return this.token = localStorage.getItem('token')
        }
    },
    mounted(){
        let self = this;
        window.axios.defaults.headers.common['Authorization'] = `Bearer ${this.token}`
        axios.get('/api/user').then(function (response) {
            self.user = response.data

        })
            .catch(function (error) {
                console.log(error);
            })
        self.getContent();
    },
    methods: {
        logout(){
            axios.post('/api/logout').then(() => {
                localStorage.removeItem('token')
                this.$router.push('/login')
            }).catch((errors) => {
                console.log(errors)
            })
        },
        getContent(){
            const self = this;
            axios
                .get("api/content")
                .then(response => {
                    self.content = response.data.[0]
                })
                .catch(error => {
                    console.error(error)
                })
        },
        editContent(){
           this.showInputs = true;
        },
        cancelEdit(){
            this.showInputs = false;
            this.getContent();
        },
        submitEdition() {
            axios
                .put('api/content/' + this.content.id,  {
                    phone_number: this.content.phone_number,
                    email: this.content.email,
                    location: this.content.location,
                    website: this.content.website,
                    education: this.content.education,
                    skills: this.content.skills,
                    profile: this.content.profile,
                    experience: this.content.experience
                })
                .then(response => {
                    this.showInputs = false;
                    this.getContent();
                })
                .catch(error => {
                    console.log(error)
                })
            // .finally(this.contact.id = null // fixed bug with button add new after edit
            //     )
        },
        skills: function () {
            let str = '';
            let arr = str.split('-');

            console.log(arr);
            return this.content.skills;

        }
    },
}
</script>

<style scoped>
.container {
    margin-top: 30px;
    box-shadow: 0 0 30px;
    background-color: white;
}

.sidebar {
    padding-top: 1rem;
    margin-left: 1rem;
    margin-right: 1rem;
    background-color: #D9C3A7;
}

.item{
    background-color: #323026;
    color: white;
}
.sidebar_content{
    font-family: 'Noto Sans JP', sans-serif;
    font-weight: bolder;
    font-size: 12px;
    word-wrap:break-word
}

.title {
    margin-left: 1.5rem;
    margin-right: 1.5rem;
    align-content: center;
    background-color: #323026;
    color: white;
}

.name {
    margin-top: 50px;
    text-align: center;
    align-items: center;
    font-size: 24px;
    font-family: 'Noto Sans JP', sans-serif;
    letter-spacing: 13px;
    font-weight: bold;
}

.content{
    margin-left: 1.5rem;
    margin-right: 1.5rem;
}

</style>
