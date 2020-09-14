<template>
    <div>
        <div class="flex-center position-ref full-height">
            <div>
                <router-link to="/auth">Login</router-link>
            </div>

            <div class="content">
                <div class="title m-b-md">
                    Monilog
                </div>

                <h3>Log your expenses and income. Track your financial performance</h3>
            </div>

            <router-view></router-view>
        </div>
    </div>
</template>

<script>
    export default {
        name: "WelcomeComponent",
        created() {
            if(localStorage.getItem('auth')) {
                this.$router.push('/dashboard');
            }
        }
    }
</script>

<style scoped>

</style>
