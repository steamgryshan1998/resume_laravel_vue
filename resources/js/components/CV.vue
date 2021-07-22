<template>
    <div class="container">
        <div class="row">
            <div class="col-sm-2 sidebar">
                <img :src="require('../../../public/images/me.jpeg').default" alt="Me" class="rounded-circle"
                     height="150px" width="150px">
            </div>
            <div class="col-sm-9 justify-content-center title">
                <div class="col-7 mx-auto align-self-center name"><span>YEVHEN HRYSHKO<br>PHP-trainee</span></div>

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
                        <span v-else><a>{{content.website}}</a></span>
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
                            <span v-else><a>{{ content.education }}</a></span>
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
                            <span v-else><a>{{content.skills}}</a></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-9 justify-content-center content">
                <h2>PROFILE</h2>
                <div>
                    <div>
                        <textarea v-if="showInputs" class="form-control" v-model="content.profile" aria-label="Education">{{content.profile}}</textarea>
                        <span v-else><a>{{content.profile}}</a></span>
                    </div>
                </div>
                <h2>PROFESSIONAL EXPERIENCE</h2>
                <div>
                <p></p>
                <div>
                    <textarea v-if="showInputs" class="form-control" v-model="content.experience" aria-label="Education">{{content.experience}}</textarea>
                    <span v-else><a>{{content.experience}}</a></span>
                </div>
                </div>
            </div>
        </div>
    <div v-if="user.name">
        Authorized<br>
        {{user.name}}<br>
        {{user.email}}<br>
        {{user.role}}
        <button class="btn btn-danger" type="button" @click="logout">Logout</button>
    </div>
    <div v-if="user.role === 'admin'">
        <button class="btn btn-warning" type="button" @click="editContent">Edit</button>
        <button class="btn btn-success" type="button" @click.prevent="submitEdition">Save changes</button>
    </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            user: {},
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
            token: localStorage.getItem('token')
        }
    },
    mounted(){
        const self = this;
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
        }
    }
}
</script>

<style scoped>
.container {
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
