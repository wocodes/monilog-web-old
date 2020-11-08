<template>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark" style="background-color: #2d427d !important">
        <a class="navbar-brand h3 font-weight-bold" href="#">
            MONILOG
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler"  aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarToggler">
            <ul class="navbar-nav mr-sm-6 mt-2 mt-lg-0">
                <li class="nav-item mr-12" :class="{'active font-weight-bold' : routeName === 'dashboard'}">
                    <router-link to="/dashboard" class="nav-link">Home <span class="sr-only">(current)</span></router-link>
                </li>
                <li class="nav-item mr-12" :class="{'active font-weight-bold' : routeName === 'expense-log'}">
                    <router-link to="/expense" class="nav-link">Expense <span class="sr-only">(current)</span></router-link>
                </li>
                <li class="nav-item mr-12" :class="{'active font-weight-bold' : routeName === 'budget-log'}">
                    <router-link to="/budget" class="nav-link">Budget <span class="sr-only">(current)</span></router-link>
                </li>
                <li class="nav-item mr-4">
                    <a class="nav-link" href="#">
                        <img :src="`${publicPath}images/300_21.jpg`" class="rounded-circle" width="25px">
                        {{ user.name }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" @click="logout">
                        <span class="fa fa-sign-out-alt" style="font-size:16px;"></span> Logout
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</template>

<script>
    export default {
        name: "NavBar",
        data() {
            return {
                publicPath: process.env.MIX_APP_URL,
                user: {},
                routeName: this.$route.name
            }
        },
        created() {
          this.user = this.$root.user;
        },
        methods: {
            logout() {
                localStorage.removeItem('auth');
                localStorage.removeItem('authExpireTime');

                this.$router.push({name: 'auth'});
            }
        }
    }
</script>

<style scoped>

</style>
