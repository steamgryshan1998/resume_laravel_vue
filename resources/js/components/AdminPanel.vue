<template>
    <div>
        <h2>Admin panel</h2>
        <form>
            <div class="form-group">
                <label for="number">Phone number</label>
                <input type="number" class="form-control" id="number" aria-describedby="emailHelp" placeholder="Phone number">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" class="form-control" id="location" placeholder="Location">
            </div>
            <div class="form-group">
                <label for="website">Personal web-site</label>
                <input type="text" class="form-control" id="website" placeholder="Personal web-site">
            </div>
            <div class="form-group">
                <label for="education">Education</label>
                <input type="text" class="form-control" id="education" placeholder="Education">
            </div>
            <div class="form-group">
                <label for="skills">Skills</label>
                <input type="text" class="form-control" id="skills" placeholder="Skills">
            </div>
            <button type="submit" class="btn btn-primary">Отправить</button>
        </form>
    </div>
</template>

<script>
export default {}
</script>

<style scoped>

</style>
