<template>
    <div class="container mt-30">
        <div class="row justify-content-center">
            <div class="col col-lg-4 text-center">
                <h2 class="font-weight-bold">MONILOG</h2>
            </div>
        </div>

        <div class="row justify-content-center mt-2" v-show="showLogin">
            <div class="col col-lg-5">
                <div class="card">
                    <div class="card-header text-center bg-dark text-light">
                        <h5 class="font-weight-bold">Login</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="alert alert-warning" v-if="status==='error'">
                            <span class="fa fa-exclamation-triangle"></span>
                            {{ status_message }}
                        </h6>

                        <form class="p-6" @submit.prevent="doLogin">
                            <div class="form-group">
                                <label for="login-email-phone"><small class="font-weight-bold">Email/Phone</small></label>
                                <input v-model="login.email"
                                       type="text"
                                       class="form-control form-control-lg"
                                       id="login-email-phone"
                                       placeholder="Enter Email or Phone">
                            </div>

                            <div class="form-group">
                                <label for="login-password"><small class="font-weight-bold">Password</small></label>
                                <input v-model="login.password"
                                       type="password"
                                       class="form-control form-control-lg"
                                       id="login-password"
                                       placeholder="Password">
                                <small class="form-text text-muted float-right"><a href="">Forgotten Password?</a></small>
                            </div>

                            <button class="btn btn-lg btn-primary btn-block mt-5">
                                <span class="fa fa-unlock mr-2"></span>
                                Login
                            </button>
                        </form>
                    </div>
                </div>

                <p class="m-6 text-center font-weight-bold">
                    Don't have an account? <a href="#" @click="switchCard('register')">Register</a>
                </p>
            </div>
        </div>



        <!-- Register -->
        <div class="row justify-content-center mt-4" v-show="showRegister">
            <div class="col col-lg-5">
                <div class="card">
                    <div class="card-header text-center bg-dark text-light">
                        <h5 class="font-weight-bold">Register</h5>
                    </div>
                    <div class="card-body">
                        <form class="p-6">
                            <div class="form-group">
                                <label for="register-fullname"><small class="font-weight-bold">Fullname</small></label>
                                <input v-model="register.name"
                                       type="text"
                                       class="form-control form-control-lg"
                                       id="register-fullname"
                                       placeholder="Firstname Lastname">
                            </div>

                            <div class="form-group">
                                <label for="register-email-phone"><small class="font-weight-bold">Email/Phone</small></label>
                                <input v-model="register.email"
                                       type="text"
                                       class="form-control form-control-lg"
                                       id="register-email-phone"
                                       placeholder="Enter Email or Phone">
                            </div>

                            <div class="form-group">
                                <label for="register-password"><small class="font-weight-bold">Password</small></label>
                                <input v-model="register.password"
                                       type="password"
                                       class="form-control form-control-lg"
                                       id="register-password"
                                       placeholder="Password">
                            </div>

                            <div class="form-group">
                                <label for="register-confirm-password"><small class="font-weight-bold">Confirm Password</small></label>
                                <input v-model="register.cpassword"
                                       type="password"
                                       class="form-control form-control-lg"
                                       id="register-confirm-password"
                                       placeholder="Password">
                            </div>

                            <button class="btn btn-lg btn-primary btn-block mt-5" @click="doRegister()">
                                <span class="fa fa-user-plus mr-2"></span>
                                Register
                            </button>
                        </form>
                    </div>
                </div>

                <p class="m-6 text-center font-weight-bold">
                    Already have an account? <a href="#" @click="switchCard('login')">Login</a>
                </p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "AuthComponent",
        data: function() {
            return {
                title: "Auth Page",
                showLogin: true,
                showRegister: false,
                login: {
                    email: "",
                    password: ""
                },
                register: {
                    name: "",
                    email: "",
                    password: "",
                    cpassword: ""
                },
                status: null,
                status_message: null,
                password_incorrect: false
            }
        },
        created() {
            if(localStorage.getItem('auth')) {
                this.$router.push('/dashboard');
            }
        },

        methods: {
            doLogin() {
                // send login and details
                fetch(process.env.MIX_API_URL+'/user/login', {
                    method: "POST",
                    body: JSON.stringify(this.login),
                    headers: {
                        "Content-Type": "application/json",
                    },
                })
                    .then((resp) => resp.json())
                    .then((resp) => {
                        if (resp.status === "error") {
                            this.status = "error";
                            this.status_message = resp.message;
                        } else {
                            this.status = "success";
                            this.login.email = "";
                            this.login.password = "";

                            localStorage.setItem("auth", JSON.stringify(resp.credentials));
                            localStorage.setItem("authExpireTime", resp.credentials.expires + Date.now());

                            Swal.fire({
                                text: resp.message,
                                icon: resp.status,
                                toast: true,
                                position: "top-end",
                                timer: 1500,
                                timerProgressBar: true,
                                showConfirmButton: false,
                                background: "#cfefb7",
                                width: "300px",
                            });

                            setTimeout(() => {
                                this.$router.push({name: 'dashboard', params: {user: resp.credentials.user}});
                            }, 1500);
                        }
                    });
            },

            doRegister() {
                if(this.register.password !== this.register.cpassword) {
                    this.password_incorrect = true;
                    return;
                }

                // grecaptcha.ready(function() {
                //     grecaptcha.execute('reCAPTCHA_site_key', {action: 'submit'}).then(function(token) {
                        // send registration and details
                        fetch(process.env.MIX_API_URL+"/user/register", {
                            method: "POST",
                            body: JSON.stringify(this.register),
                            headers: {
                                "Content-Type": "application/json",
                            },
                        })
                        .then(resp => resp.json())
                        .then(resp => {
                            // then do login
                            fetch(process.env.MIX_API_URL+"/user/login", {
                                method: "POST",
                                body: JSON.stringify({
                                    email: this.register.email,
                                    password: this.register.password,
                                }),
                                headers: {
                                    "Content-Type": "application/json",
                                },
                            })
                                .then((resp) => resp.json())
                                .then((resp) => {
                                    if (resp.status === "error") {
                                        this.status = "error";
                                        this.showOverlay = false;
                                    } else {
                                        this.status = "success";
                                        this.login_email = "";
                                        this.login_password = "";

                                        localStorage.setItem("auth", JSON.stringify(resp.credentials));
                                        localStorage.setItem("authExpireTime", resp.credentials.expires + Date.now());
                                        setTimeout(() => {
                                            this.$router.push({name: 'dashboard', params: {user: resp.credentials.user}});
                                        }, 2000);
                                    }

                                    Swal.fire({
                                        text: "You've successfully registered. Logging you in.",
                                        icon: "success",
                                        toast: true,
                                        position: "top-end",
                                        timer: 2000,
                                        timerProgressBar: true,
                                        showConfirmButton: false,
                                        background: "#cfefb7",
                                    }).then(result => {
                                        if(result.dismiss === 'timer') {
                                            this.$router.push({name: 'dashboard'})
                                        }
                                    })
                                });
                            });
                //
                //     });
                // });
            },

            switchCard(card) {
                if(card === 'register') {
                    this.showRegister = true;
                    this.showLogin = false;
                } else {
                    this.showRegister = false;
                    this.showLogin = true;
                }
            }
        }
    }
</script>

<style scoped>

</style>
