<template>
    <div class="container pt-lg-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div v-if="status" v-bind:class="[(status==='error') ? 'alert-danger' : 'alert-success']" class="alert alert-dismissable fade show text-center" role="alert">
                    <i class="fa fa-info"></i> &nbsp; {{ status_message }}

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>


                <div class="card">
                    <div class="card-header"><h4>Login</h4></div>

                    <div class="card-body">
                        <form @submit.prevent="login">
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                                <div class="col-md-8">
                                    <input id="email" type="email" class="form-control" name="email" v-model="email" required autocomplete="email" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                                <div class="col-md-8">
                                    <input id="password" type="password" class="form-control" v-model="password" required autocomplete="current-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <p class="m-5 text-center">Don't have an account yet? <a href="/register">Register</a></p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "LoginComponent",
        data() {
            return {
                email: '',
                password: '',
                status: null,
                status_message: null
            }
        },
        created() {
            if(this.$parent.user) {
                window.location.href = '/home'
            }
        },

        methods: {
            login() {
                let data = {
                    email: this.email,
                    password: this.password,
                    status: null
                }

                // send login and details
                // fetch('http://monilog-api-laravel.local/api/user/login', {
                fetch('https://monilog.schoolly.co/api/user/login', {
                        method: 'POST',
                        body: JSON.stringify(data),
                        headers: {
                            'Content-Type': 'application/json'
                        },
                    }
                ).then(resp => resp.json())
                .then(resp => {
                    if(resp.status === "error") {
                        this.status = 'error';
                    } else {
                        this.status = 'success';
                        this.email = '';
                        this.password = '';
                        this.name = '';

                        localStorage.setItem('user', JSON.stringify(resp.credentials));
                        localStorage.setItem('authExpireTime', Date.now()+resp.credentials.expires);
                    }

                    this.status_message = resp.message;
                    setTimeout(() => {
                        window.location.href = '/home';
                    }, 3000);
                });
            }
        }
    }
</script>

<style scoped>

</style>
