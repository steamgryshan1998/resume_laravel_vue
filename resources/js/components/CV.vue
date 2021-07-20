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
                        <p>380677084239<br>steamgryshan@gmail.com<br>
                        <a href=WWW.GOOGLE.COM>WWW.GOOGLE.COM</a>
                        </p>
                    </div>
                </div>
                <div>
                    <div class="col item">
                        <p>EDUCATION</p>
                    </div>
                </div>
                <div>
                    <div class="col item">
                        <p>SKILLS</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-9 justify-content-center content">
                <h2>PROFILE</h2>
                <div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium,
                        ratione aperiam! Magnam suscipit ea
                        eos cum, vel hic exercitationem architecto fuga sint quibusdam labore dignissimos sequi
                        assumenda sit
                        quos laudantium tempore facere necessitatibus aspernatur quisquam explicabo vitae nulla
                        perspiciatis
                        odit. Corrupti beatae, placeat illo eos itaque autem. Quam omnis voluptatum esse, aut earum
                        rerum animi
                        placeat perspiciatis reiciendis repellat possimus iste soluta magnam corporis molestiae?
                        Necessitatibus
                        ipsum, laboriosam eligendi esse ullam rem a quasi ipsa nisi officiis quis voluptate nihil
                        quibusdam
                        exercitationem. Dolore reprehenderit enim ea. Corrupti, ad! Fuga aliquam architecto debitis
                        eveniet
                        eligendi optio molestiae quis assumenda rerum incidunt!</p>
                </div>
                <p>
                <h2>PROFESSIONAL EXPERIENCE</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate alias,
                    molestiae eaque, modi corporis
                    amet sit expedita corrupti quasi obcaecati explicabo error minus dolore quod vel quam quibusdam
                    animi
                    impedit odio, at blanditiis! Est doloremque culpa non reprehenderit, atque neque, sequi incidunt
                    omnis
                    nemo itaque, obcaecati totam tenetur. Optio exercitationem veritatis possimus cupiditate,
                    delectus quo
                    dolorum ex perspiciatis cumque. Nisi deserunt nulla esse eos aspernatur sed commodi labore.
                    Tempora
                    voluptatem deleniti accusantium distinctio rerum recusandae cupiditate, expedita doloribus eius
                    inventore, aut laborum itaque, excepturi praesentium. Praesentium iste in quos quas eos
                    doloribus, aut
                    commodi nobis quod voluptatibus aliquam earum ut.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate alias,
                    molestiae eaque, modi corporis
                    amet sit expedita corrupti quasi obcaecati explicabo error minus dolore quod vel quam quibusdam
                    animi
                    impedit odio, at blanditiis! Est doloremque culpa non reprehenderit, atque neque, sequi incidunt
                    omnis
                    nemo itaque, obcaecati totam tenetur. Optio exercitationem veritatis possimus cupiditate,
                    delectus quo
                    dolorum ex perspiciatis cumque. Nisi deserunt nulla esse eos aspernatur sed commodi labore.
                    Tempora
                    voluptatem deleniti accusantium distinctio rerum recusandae cupiditate, expedita doloribus eius
                    inventore, aut laborum itaque, excepturi praesentium. Praesentium iste in quos quas eos
                    doloribus, aut
                    commodi nobis quod voluptatibus aliquam earum ut.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate alias,
                    molestiae eaque, modi corporis
                    amet sit expedita corrupti quasi obcaecati explicabo error minus dolore quod vel quam quibusdam
                    animi
                    impedit odio, at blanditiis! Est doloremque culpa non reprehenderit, atque neque, sequi incidunt
                    omnis
                    nemo itaque, obcaecati totam tenetur. Optio exercitationem veritatis possimus cupiditate,
                    delectus quo
                    dolorum ex perspiciatis cumque. Nisi deserunt nulla esse eos aspernatur sed commodi labore.
                    Tempora
                    voluptatem deleniti accusantium distinctio rerum recusandae cupiditate, expedita doloribus eius
                    inventore, aut laborum itaque, excepturi praesentium. Praesentium iste in quos quas eos
                    doloribus, aut
                    commodi nobis quod voluptatibus aliquam earum ut.</p>
            </div>
        </div>
    <div>
        Authorized<br>


    </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            user: ''
        }
    },
    mounted(){
        axios.get('/api/user').then((res)=>{
            this.user = res.data
        })
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
