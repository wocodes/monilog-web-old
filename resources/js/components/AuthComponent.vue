<template>
        <!--begin::Main-->
        <div class="d-flex flex-column flex-root">
            <!--begin::Login-->
            <div class="login login-6 login-signin-on login-signin-on d-flex flex-column-fluid" id="kt_login">
                <div class="d-flex flex-column flex-lg-row flex-row-fluid text-center" style="height:800px;background-image: url(/assets/media/bg/bg-3.jpg);">
                    <!--begin:Aside-->
                    <div class="d-flex w-100 flex-center p-15">
                        <div class="login-wrapper">
                            <!--begin:Aside Content-->
                            <div class="text-dark-75">
                                <a href="#">
                                    <img src="/assets/media/logos/logo-letter-13.png" class="max-h-75px" alt="" />
                                </a>
                                <h3 class="mb-8 mt-22 font-weight-bold">MANAGE YOUR FINANCES TODAY</h3>
                                <p class="mb-15 text-muted font-weight-bold">The blah blah blah.</p>
                                <button type="button" id="kt_login_signup" class="btn btn-outline-primary btn-pill py-4 px-9 font-weight-bold">Get An Account</button>
                            </div>
                            <!--end:Aside Content-->
                        </div>
                    </div>
                    <!--end:Aside-->
                    <!--begin:Divider-->
                    <div class="login-divider">
                        <div></div>
                    </div>
                    <!--end:Divider-->
                    <!--begin:Content-->
                    <div class="d-flex w-100 flex-center p-15 position-relative overflow-hidden">
                        <div class="login-wrapper">
                            <!--begin:Sign In Form-->
                            <div class="login-signin">
                                <div class="text-center mb-10 mb-lg-20">
                                    <h2 class="font-weight-bold">Sign In</h2>
                                    <p class="text-muted font-weight-bold">Enter your username and password</p>
                                </div>
                                <form class="form text-left" id="kt_login_signin_form" @submit.prevent="login()">
                                    <div class="form-group py-2 m-0">
                                        <input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="text" placeholder="Username" v-model="login_email" autocomplete="off" />
                                    </div>
                                    <div class="form-group py-2 border-top m-0">
                                        <input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="Password" placeholder="Password" v-model="login_password" />
                                    </div>
                                    <div class="form-group d-flex flex-wrap justify-content-between align-items-center mt-5">
                                        <div class="checkbox-inline">
                                            <label class="checkbox m-0 text-muted font-weight-bold">
                                                <input type="checkbox" name="remember" />
                                                <span></span>Remember me</label>
                                        </div>
                                        <a href="javascript:;" id="kt_login_forgot" class="text-muted text-hover-primary font-weight-bold">Forget Password ?</a>
                                    </div>
                                    <div class="text-center mt-15">
                                        <button type="submit" @click="login()" class="btn btn-primary btn-pill shadow-sm py-4 px-9 font-weight-bold">Log In</button>
                                    </div>
                                </form>
                            </div>
                            <!--end:Sign In Form-->

                            <!--begin:Sign Up Form-->
                            <div class="login-signup">
                                <div class="text-center mb-10 mb-lg-20">
                                    <h3 class="">Sign Up</h3>
                                    <p class="text-muted font-weight-bold">Enter your details to create your account</p>
                                </div>
                                <form class="form text-left" id="kt_login_signup_form">
                                    <div class="form-group py-2 m-0">
                                        <input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="text" placeholder="Fullname" name="fullname" />
                                    </div>
                                    <div class="form-group py-2 m-0 border-top">
                                        <input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="text" placeholder="Email" name="email" autocomplete="off" />
                                    </div>
                                    <div class="form-group py-2 m-0 border-top">
                                        <input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="password" placeholder="Password" name="password" />
                                    </div>
                                    <div class="form-group py-2 m-0 border-top">
                                        <input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="password" placeholder="Confirm Password" name="cpassword" />
                                    </div>
                                    <div class="form-group mt-5">
                                        <div class="checkbox-inline">
                                            <label class="checkbox checkbox-outline font-weight-bold">
                                                <input type="checkbox" name="agree" />
                                                <span></span>I Agree the
                                                <a href="login-6.html#" class="ml-1">terms and conditions</a>.</label>
                                        </div>
                                    </div>
                                    <div class="form-group d-flex flex-wrap flex-center">
                                        <button id="kt_login_signup_submit" class="btn btn-primary btn-pill font-weight-bold px-9 py-4 my-3 mx-2">Register</button>
                                        <button id="kt_login_signup_cancel" class="btn btn-outline-primary btn-pill font-weight-bold px-9 py-4 my-3 mx-2">Goto Login</button>
                                    </div>
                                </form>
                            </div>
                            <!--end:Sign Up Form-->
                            <!--begin:Forgot Password Form-->
                            <div class="login-forgot">
                                <div class="text-center mb-10 mb-lg-20">
                                    <h3 class="">Forgotten Password ?</h3>
                                    <p class="text-muted font-weight-bold">Enter your email to reset your password</p>
                                </div>
                                <form class="form text-left" id="kt_login_forgot_form">
                                    <div class="form-group py-2 m-0 border-bottom">
                                        <input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="text" placeholder="Email" name="email" autocomplete="off" />
                                    </div>
                                    <div class="form-group d-flex flex-wrap flex-center mt-10">
                                        <button id="kt_login_forgot_submit" class="btn btn-primary btn-pill font-weight-bold px-9 py-4 my-3 mx-2">Submit</button>
                                        <button id="kt_login_forgot_cancel" class="btn btn-outline-primary btn-pill font-weight-bold px-9 py-4 my-3 mx-2">Cancel</button>
                                    </div>
                                </form>
                            </div>
                            <!--end:Forgot Password Form-->
                        </div>
                    </div>
                    <!--end:Content-->
                </div>
            </div>
            <!--end::Login-->
        </div>
</template>

<script>
    export default {
        name: "AuthComponent",
        data: function() {
            return {
                title: "Auth Page",
                login_email: "",
                login_password: "",
                status: null,
                showOverlay: false,
                status_message: null,
            }
        },

        methods: {
            login() {
                let data = {
                    email: this.login_email,
                    password: this.login_password,
                    status: null,
                };

                // send login and details
                fetch('http://monilog-api-laravel.local/api/user/login', {
                // fetch("https://api-monilog.schoolly.co/api/user/login", {
                    method: "POST",
                    body: JSON.stringify(data),
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

                            localStorage.setItem("user", JSON.stringify(resp.credentials));
                            localStorage.setItem("authExpireTime", resp.credentials.expires);
                            setTimeout(() => {
                                window.location.href = "/#/dashboard";
                            }, 2000);
                        }

                        Swal.fire({
                            text: resp.message,
                            icon: resp.status,
                            toast: true,
                            position: "top-end",
                            timer: 4000,
                            timerProgressBar: true,
                            showConfirmButton: false,
                            background: "#cfefb7",
                            width: "200px",
                        });
                    });
            },
        }







        // head: {
        //     title: function() {
        //         return {
        //             inner: this.title
        //         }
        //     },
        //     script: [
        //         { type: 'text/javascript', src: '/assets/plugins/global/plugins.bundle.js', async: true, body: true}, // Insert in body
        //         { type: 'text/javascript', src: '/assets/plugins/custom/prismjs/prismjs.bundle.js', async: true, body: true}, // Insert in body
        //         { type: 'text/javascript', src: '/assets/js/scripts.bundle.js', async: true, body: true}, // Insert in body
        //         { type: 'text/javascript', src: '/assets/js/pages/custom/login/login-general.js', async: true, body: true}, // Insert in body
        //     ],
        //     link: [
        //         { rel: 'stylesheet', type: 'text/css', href: 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700' },
        //         { rel: 'stylesheet', type: 'text/css', href: '/assets/css/pages/login/classic/login-6.css' },
        //         { rel: 'stylesheet', type: 'text/css', href: '/assets/plugins/global/plugins.bundle.css' },
        //         { rel: 'stylesheet', type: 'text/css', href: '/assets/plugins/custom/prismjs/prismjs.bundle.css' },
        //         { rel: 'stylesheet', type: 'text/css', href: '/assets/css/themes/layout/header/base/light.css' },
        //         { rel: 'stylesheet', type: 'text/css', href: '/assets/css/themes/layout/header/menu/light.css' },
        //     ]
        // }
    }
</script>

<style scoped>

</style>
