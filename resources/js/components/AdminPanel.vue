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
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Education</span>
                </div>
                <textarea class="form-control" aria-label="Education"></textarea>
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Skills</span>
                </div>
                <textarea class="form-control" aria-label="Skills"></textarea>
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Profile</span>
                </div>
                <textarea class="form-control" aria-label="Profile"></textarea>
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Experience</span>
                </div>
                <textarea class="form-control" aria-label="Experience"></textarea>
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
