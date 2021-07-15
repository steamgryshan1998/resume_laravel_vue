<template>
    <div>
        <h2>Registration</h2>
        <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="first_name" placeholder="First name">
                </div>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="last_name" placeholder="Last name">
                </div>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" id="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="password" placeholder="Password">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="conf_password" placeholder="Confirm password">
            </div>
            <div class="form-group">
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox"> I accept the Terms of Use & Privacy Policy
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
    </div>
</template>

<script>
export default {}
</script>

<style scoped>

</style>
