<template>
    <div id="auth-page" class="pt-30">
       <div class="container">
        <div class="row justify-content-center">
            <div class="col col-lg-4 text-center">
                <h1 class="font-weight-bold">MONILOG</h1>
            </div>
        </div>

        <div class="row justify-content-center mt-2" v-show="showLogin">
            <div class="col col-lg-5">
                <div class="card">
                    <div class="card-header text-center bg-dark text-light">
                        <h4 class="font-weight-bold m-0">Login</h4>
                    </div>
                    <div class="card-body shadow-lg">
                        <h6 class="alert alert-warning text-center" v-if="status==='error'">
                            <span class="fa fa-exclamation-triangle"></span>
                            {{ status_message }}
                        </h6>

                        <form class="p-6" @submit.prevent="doLogin(login)">
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

                <p class="m-6 text-center font-weight-bold font-size-h4">
                    Don't have an account? <a href="#" @click="switchCard('register')">Register</a>
                </p>
            </div>
        </div>



        <!-- Register -->
        <div class="row justify-content-center mt-2" v-show="showRegister">
            <div class="col col-lg-5">
                <div class="card shadow-lg">
                    <div class="card-header text-center bg-dark text-light">
                        <h4 class="font-weight-bold m-0">Register</h4>
                    </div>
                    <div class="card-body">
                        <h6 class="alert alert-warning text-center" v-if="password_incorrect">
                            <span class="fa fa-exclamation-triangle"></span>
                            Passwords aren't the same
                        </h6>

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

                <p class="m-6 text-center font-weight-bold font-size-h4">
                    Already have an account? <a href="#" @click="switchCard('login')">Login</a>
                </p>
            </div>
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
            doLogin(loginDet, msg=null) {
                // send login and details
                fetch(process.env.MIX_API_URL+'/user/login', {
                    method: "POST",
                    body: JSON.stringify(loginDet),
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
                                text: msg ? msg : resp.message,
                                icon: resp.status,
                                // toast: true,
                                position: "center",
                                timer: 1500,
                                timerProgressBar: true,
                                showConfirmButton: false,
                                width: "300px",
                            }).then(result => {
                                if(result.dismiss === 'timer') {
                                    this.$router.replace({name: 'dashboard', params: { user: resp.credentials.user }})
                                }
                            })
                        }
                    });
            },

            doRegister() {
                let vm = this;
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
                            vm.doLogin({
                                    email: this.register.email,
                                    password: this.register.password
                                },
                            "You've successfully registered. Logging you in."
                            );
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
    #auth-page {
        background-image: url("/images/bg2.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        height: 100vh;
    }

    a {
        color: #fff;
    }

    button {
        font-size: 16px !important;
    }

    .card {
        border-radius: 10px;
        border: none;
    }

    .card-header {
        border-radius: 10px 10px 0 0;
        background: linear-gradient(to bottom right, #7b7ad8, #4f63c4);
    }

    .card-header h4 {
        line-height: 20px;
    }

    input {
        font-size: 26px !important;
        padding: 24px 15px 15px 10px;
        height: 44px;
    }
</style>
