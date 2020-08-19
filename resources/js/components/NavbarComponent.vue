<template>
    <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li v-if="$parent.user">
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
        methods: {
            logout() {
                localStorage.clear();
                window.location.href = '/login'
            }
        }
    }
</script>

<style scoped>

</style>
