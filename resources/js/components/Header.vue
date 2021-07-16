<template>
    <div class="header justify-content-center">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <router-link to="/"><b>CV</b></router-link>
            </li>
            <hr />
            <li class="nav-item">
                <router-link to="/adminpanel"><b>Admin panel</b></router-link>
            </li>
            <hr />
            <li class="nav-item">
                <router-link to="/login"><b>Login</b></router-link>
            </li>
            <hr />
            <li class="nav-item">
                <router-link to="/signup"><b>Registration</b></router-link>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    name: "Header"
}
</script>

<style scoped>
.header{
    padding-bottom: 1rem;
    : black;
}
a{
    font-family: 'Noto Sans JP', sans-serif;
    font-size: 1.2rem;
    color: black;
}
</style>
