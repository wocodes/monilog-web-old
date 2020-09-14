<template>
        <!--begin::Main-->
    <div class="d-flex flex-column flex-root" style="height:830px">
        <!--begin::Login-->
        <div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
            <!--begin::Aside-->
            <div class="login-aside d-flex flex-column flex-row-auto" style="background-color: #F2C98A;">
                <!--begin::Aside Top-->
                <div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
                    <!--begin::Aside header-->
                    <a href="" class="text-center mb-10">
                        <img src="/images/logo.png" class="max-h-70px" alt="" />
                    </a>
                    <!--end::Aside header-->
                    <!--begin::Aside title-->
                    <h3 class="font-weight-bolder text-center font-size-h4 font-size-h1-lg" style="color: #986923;">True financial freedom is conscious <br>tracking of income and expenses...</h3>
                    <!--end::Aside title-->
                </div>
                <!--end::Aside Top-->
                <!--begin::Aside Bottom-->
                <div class="aside-img d-flex flex-row-fluid bgi-no-repeat bgi-position-y-bottom bgi-position-x-center" style="background-image: url(/assets/media/svg/illustrations/login-visual-1.svg)"></div>
                <!--end::Aside Bottom-->
            </div>
            <!--begin::Aside-->
            <!--begin::Content-->
            <div class="login-content flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
                <!--begin::Content body-->
                <div class="d-flex flex-column-fluid flex-center">
                    <!--begin::Signin-->
                    <div class="login-form login-signin">
                        <!--begin::Form-->
                        <form class="form" novalidate="novalidate" id="kt_login_signin_form">
                            <!--begin::Title-->
                            <div class="pb-13 pt-lg-0 pt-5">
                                <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Welcome to Monilog</h3>
                                <span class="text-muted font-weight-bold font-size-h4">New Here?
									<a href="javascript:;" id="kt_login_signup" class="text-primary font-weight-bolder">Create an Account</a></span>
                            </div>
                            <!--begin::Title-->
                            <!--begin::Form group-->
                            <div class="form-group">
                                <label class="font-size-h6 font-weight-bolder text-dark">Email</label>
                                <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg" type="text" autocomplete="off" v-model="login_email" />
                            </div>
                            <!--end::Form group-->
                            <!--begin::Form group-->
                            <div class="form-group">
                                <div class="d-flex justify-content-between mt-n5">
                                    <label class="font-size-h6 font-weight-bolder text-dark pt-5">Password</label>
                                    <a href="javascript:;" class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5" id="kt_login_forgot">Forgot Password ?</a>
                                </div>
                                <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg" type="password" autocomplete="off" v-model="login_password" />
                            </div>
                            <!--end::Form group-->
                            <!--begin::Action-->
                            <div class="pb-lg-0 pb-5">
                                <button type="button" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3" @click="login">
                                    <span v-if="showOverlay">Loading...</span>
                                    <span v-else>Submit</span>
                                </button>
                                <!--
                                <button type="button" class="btn btn-light-primary font-weight-bolder px-8 py-4 my-3 font-size-lg">
									<span class="svg-icon svg-icon-md">
										!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/social-icons/google.svg--
										<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
											<path d="M19.9895 10.1871C19.9895 9.36767 19.9214 8.76973 19.7742 8.14966H10.1992V11.848H15.8195C15.7062 12.7671 15.0943 14.1512 13.7346 15.0813L13.7155 15.2051L16.7429 17.4969L16.9527 17.5174C18.879 15.7789 19.9895 13.221 19.9895 10.1871Z" fill="#4285F4" />
											<path d="M10.1993 19.9313C12.9527 19.9313 15.2643 19.0454 16.9527 17.5174L13.7346 15.0813C12.8734 15.6682 11.7176 16.0779 10.1993 16.0779C7.50243 16.0779 5.21352 14.3395 4.39759 11.9366L4.27799 11.9466L1.13003 14.3273L1.08887 14.4391C2.76588 17.6945 6.21061 19.9313 10.1993 19.9313Z" fill="#34A853" />
											<path d="M4.39748 11.9366C4.18219 11.3166 4.05759 10.6521 4.05759 9.96565C4.05759 9.27909 4.18219 8.61473 4.38615 7.99466L4.38045 7.8626L1.19304 5.44366L1.08875 5.49214C0.397576 6.84305 0.000976562 8.36008 0.000976562 9.96565C0.000976562 11.5712 0.397576 13.0882 1.08875 14.4391L4.39748 11.9366Z" fill="#FBBC05" />
											<path d="M10.1993 3.85336C12.1142 3.85336 13.406 4.66168 14.1425 5.33717L17.0207 2.59107C15.253 0.985496 12.9527 0 10.1993 0C6.2106 0 2.76588 2.23672 1.08887 5.49214L4.38626 7.99466C5.21352 5.59183 7.50242 3.85336 10.1993 3.85336Z" fill="#EB4335" />
										</svg>
                                        !--end::Svg Icon--
									</span>Sign in with Google</button> -->
                            </div>
                            <!--end::Action-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Signin-->
                    <!--begin::Signup-->
                    <div class="login-form login-signup">
                        <!--begin::Form-->
                        <form class="form" novalidate="novalidate" id="kt_login_signup_form">
                            <!--begin::Title-->
                            <div class="pb-13 pt-lg-0 pt-5">
                                <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Sign Up</h3>
                                <p class="text-muted font-weight-bold font-size-h4">Enter your details to create your account</p>
                            </div>
                            <!--end::Title-->
                            <!--begin::Form group-->
                            <div class="form-group">
                                <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="text" placeholder="Fullname" v-model="register_name" autocomplete="off" />
                            </div>
                            <!--end::Form group-->
                            <!--begin::Form group-->
                            <div class="form-group">
                                <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="email" placeholder="Email" v-model="register_email" autocomplete="off" />
                            </div>
                            <!--end::Form group-->
                            <!--begin::Form group-->
                            <div class="form-group">
                                <input v-bind:class="{ 'is-invalid':password_incorrect }" class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="password" placeholder="Password" v-model="register_password" autocomplete="off" />
                            </div>
                            <!--end::Form group-->
                            <!--begin::Form group-->
                            <div class="form-group">
                                <input v-bind:class="{ 'is-invalid':password_incorrect }" class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="password" placeholder="Confirm password" v-model="register_cpassword" autocomplete="off" />
                                <div v-if="password_incorrect" v-bind:class="{ 'invalid-feedback':password_incorrect }">Password are not the same. Please try again.</div>
                            </div>
                            <!--end::Form group-->
                            <!--begin::Form group-->
                            <div class="form-group">
                                <label class="checkbox mb-0">
                                    <input type="checkbox" name="agree" />I Agree the <a href=""> terms and conditions</a>.
                                    <span></span></label>
                            </div>
                            <!--end::Form group-->
                            <!--begin::Form group-->
                            <div class="form-group d-flex flex-wrap pb-lg-0 pb-3">
                                <button type="button" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-4" @click="register">Submit</button>
                                <button type="button" id="kt_login_signup_cancel" class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3">Login instead</button>
                            </div>
                            <!--end::Form group-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Signup-->
                    <!--begin::Forgot-->
                    <div class="login-form login-forgot">
                        <!--begin::Form-->
                        <form class="form" novalidate="novalidate" id="kt_login_forgot_form">
                            <!--begin::Title-->
                            <div class="pb-13 pt-lg-0 pt-5">
                                <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Forgotten Password ?</h3>
                                <p class="text-muted font-weight-bold font-size-h4">Enter your email to reset your password</p>
                            </div>
                            <!--end::Title-->
                            <!--begin::Form group-->
                            <div class="form-group">
                                <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="email" placeholder="Email" name="email" autocomplete="off" />
                            </div>
                            <!--end::Form group-->
                            <!--begin::Form group-->
                            <div class="form-group d-flex flex-wrap pb-lg-0">
                                <button type="button" id="kt_login_forgot_submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-4">Submit</button>
                                <button type="button" id="kt_login_forgot_cancel" class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3">Cancel</button>
                            </div>
                            <!--end::Form group-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Forgot-->
                </div>
                <!--end::Content body-->
                <!--begin::Content footer--
                <div class="d-flex justify-content-lg-start justify-content-center align-items-end py-7 py-lg-0">
                    <a href="" class="text-primary font-weight-bolder font-size-h5">Terms</a>
                    <a href="" class="text-primary ml-10 font-weight-bolder font-size-h5">Plans</a>
                    <a href="" class="text-primary ml-10 font-weight-bolder font-size-h5">Contact Us</a>
                </div>
                !--end::Content footer-->
            </div>
            <!--end::Content-->
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
                register_name: "",
                register_email: "",
                register_password: "",
                register_cpassword: "",
                status: null,
                showOverlay: false,
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
            login() {
                Swal.showLoading({title: "Processing..."});

                let data = {
                    email: this.login_email,
                    password: this.login_password,
                    status: null,
                };

                // send login and details
                fetch(process.env.MIX_API_URL+'/user/login', {
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

                            localStorage.setItem("auth", JSON.stringify(resp.credentials));
                            localStorage.setItem("authExpireTime", resp.credentials.expires + Date.now());
                            setTimeout(() => {
                                this.$router.push({name: 'dashboard', params: {user: resp.credentials.user}});
                            }, 1000);
                        }

                        Swal.fire({
                            text: resp.message,
                            icon: resp.status,
                            toast: true,
                            position: "top-end",
                            timer: 1000,
                            timerProgressBar: true,
                            showConfirmButton: false,
                            background: "#cfefb7",
                            width: "200px",
                        });
                    });
            },

            register() {
                Swal.showLoading({title: "Processing..."});

                if(this.register_password !== this.register_cpassword) {
                    this.password_incorrect = true;
                    return;
                }

                let data = {
                    email: this.register_email,
                    name: this.register_name,
                    password: this.register_password,
                    cpassword: this.register_cpassword,
                };

                // send registration and details
                fetch(process.env.MIX_API_URL+"/user/register", {
                    method: "POST",
                    body: JSON.stringify(data),
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
                                email: this.register_email,
                                password: this.register_password,
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
