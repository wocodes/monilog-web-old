<template>
    <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li v-if="user">
                <a>Welcome {{ user.name }}</a>
            </li>
            <li v-if="user">
                <small>
                    <a href="#" @click="logout">Logout &nbsp; <i class="fa fa-sign-out"></i></a>
                </small>
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        name: "NavbarComponent",
        data() {
            return {
                user: this.$parent.user.user
            }
        },
        methods: {
            logout() {
                localStorage.clear();
                window.location.href = '/login'
            }
        },
    }
</script>

<style scoped>

</style>
