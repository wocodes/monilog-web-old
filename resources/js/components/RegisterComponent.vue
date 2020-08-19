<template>
    <div class="container pt-lg-5">
        <div class="row justify-content-center">
            <div class="col-md-5">

                <div v-if="status" v-bind:class="[(status==='error') ? 'alert-danger' : 'alert-success']" class="alert alert-dismissable fade show text-center" role="alert">
                    <i class="fa fa-times"></i> {{ status_message }}

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>


                <div class="card">
                    <div class="card-header"><h4>Register</h4></div>

                    <div class="card-body">
                        <form @submit.prevent="register">
                            <div class="form-group row">
                                <label for="name" class="col-md-3 col-form-label text-md-right">Fullname</label>

                                <div class="col-md-8">
                                    <input id="name" type="text" class="form-control" name="name" v-model="name" required autocomplete="name" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-3 col-form-label text-md-right">Email</label>

                                <div class="col-md-8">
                                    <input id="email" type="email" class="form-control" name="email" v-model="email" required autocomplete="email" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-3 col-form-label text-md-right">Password</label>

                                <div class="col-md-8">
                                    <input id="password" type="password" class="form-control" v-model="password" required autocomplete="current-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-3">
                                    <button type="submit" class="btn btn-primary">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <p class="m-5 text-center">Already have an account? <a href="/login">Login</a></p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "RegisterComponent",
        data() {
            return {
                email: '',
                name: '',
                password: '',
                status: null,
                status_message: null
            }
        },

        created() {
          if(localStorage.getItem('user')) {
              console.log("Logged In user");
          }
        },

        methods: {
            register() {
                let data = {
                    email: this.email,
                    name: this.name,
                    password: this.password
                }

                // send registration and details
                // fetch('http://monilog-api-laravel.local/api/user/register', {
                fetch('https://api-monilog.schoolly.co/api/user/register', {
                        method: 'POST',
                        body: JSON.stringify(data),
                        headers: {
                            'Content-Type': 'application/json'
                        },
                    }
                ).then(resp => resp.json())
                .then(resp => {

                    // then do login
                    // fetch('http://monilog-api-laravel.local/api/user/login', {
                            fetch('https://api-monilog.schoolly.co/api/user/login', {
                            method: 'POST',
                            body: JSON.stringify({email: this.email, password: this.password}),
                            headers: {
                                'Content-Type': 'application/json'
                            },
                        }
                    ).then(resp => resp.json())
                        .then(resp => {
                            console.log(resp);
                            if (resp.status === "error") {
                                this.status = 'error';
                            } else {
                                this.status = 'success';
                                this.email = '';
                                this.password = '';
                                this.name = '';

                                localStorage.setItem('user', JSON.stringify(resp.credentials));
                                localStorage.setItem('authExpireTime', Date.now() + resp.credentials.expires);
                            }

                            Swal.fire({
                                text: 'You\'ve successfully registered. Logging you in.',
                                icon: 'success',
                                toast: true,
                                position: 'top-end',
                                timer: 4000,
                                timerProgressBar: true,
                                showConfirmButton: false,
                                background: '#cfefb7'
                            })

                            setTimeout(() => {
                                window.location.href = '/home';
                            }, 2000);
                        });
                })
            }
        }
    }
</script>

<style scoped>

</style>
