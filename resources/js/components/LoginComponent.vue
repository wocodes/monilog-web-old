<template>
  <div class="container login-container">
    <div class="row justify-content-center">
      <div class="col-md-5">
        <div class="card auth">
          <div class="card-body">
            <form @submit.prevent="login">
              <div class="form-group">
                <input
                  id="email"
                  type="email"
                  class="form-control"
                  name="email"
                  placeholder="Your Email"
                  v-model="email"
                  required
                  autocomplete="email"
                  autofocus
                />
              </div>

              <div class="form-group">
                <input
                  id="password"
                  type="password"
                  class="form-control"
                  placeholder="Your Password"
                  v-model="password"
                  required
                  autocomplete="current-password"
                />
              </div>

              <div class="form-group row m-1 mb-0">
                <button type="submit" class="btn btn-primary">Login</button>
              </div>

              <p class="mt-3 text-center">
                Don't have an account?
                <a href="/register">Register</a>
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "LoginComponent",
  data() {
    return {
      email: "",
      password: "",
      status: null,
      status_message: null,
    };
  },
  created() {
    if (this.$parent.user) {
      window.location.href = "/home";
    }
  },

  methods: {
    login() {
      let data = {
        email: this.email,
        password: this.password,
        status: null,
      };

      // send login and details
      // fetch('http://monilog-api-laravel.local/api/user/login', {
      fetch("https://api-monilog.schoolly.co/api/user/login", {
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
          } else {
            this.status = "success";
            this.email = "";
            this.password = "";
            this.name = "";

            localStorage.setItem("user", JSON.stringify(resp.credentials));
            localStorage.setItem("authExpireTime", resp.credentials.expires);
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
          });

          setTimeout(() => {
            window.location.href = "/home";
          }, 2000);
        });
    },
  },
};
</script>

<style scoped>
.login-container {
  height: calc(70vh);
  display: flex;
  flex-direction: column;
  align-content: center;
  justify-content: center;
}
</style>
