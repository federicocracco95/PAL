<template>
  <div class="login" v-on:submit.prevent>   
    <div class="min-w-screen min-h-screen bg-random flex items-center justify-center px-5 py-5">
      <div class="container mx-auto">
        <div class="bg-gray-300 rounded-lg p-4 max-w-md my-10">
                <div class="text-center">
                    <h1 class="my-2 text-3xl font-semibold text-blue-900 dark:text-gray-200">Accedi</h1>
                </div>
                <div class="m-7">
                    <form
                      method="POST"
                      class=""
                      action="#"
                      id="login"
                      @submit.prevent="login()"
                    >
                        <div class="mb-6">
                            <input 
                              type="username" 
                              name="username" 
                              id="username"
                              required 
                              placeholder="username" 
                              class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"
                              v-model="username"
                              @focus="resetError()"
                            />
                        </div>
                        <div class="mb-6">
                            <input 
                              type="password" 
                              name="password" 
                              id="password"
                              required 
                              placeholder="Password" 
                              class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"
                              v-model="password"
                              @focus="resetError()" 
                            />
                        </div>
                        <div class="mb-6">
                            <button
                              @click="login()"
                              class="w-full rounded-full px-3 py-4 text-white bg-blue-900 rounded-md focus:bg-indigo-600 focus:outline-none"
                              >
                                Accedi
                            </button>
                        </div>
                    </form>
                    {{ error }}
                </div>
            </div>
        </div>
     </div>
  </div>
</template>

<script>
export default {
  name: "Login",
  data() {
    return {
      username: null,
      password: null,
      error: null,
    };
  },
  mounted() {},
  methods: {
    async login() {
      try {
        const res = await this.$api.post("/login", {
          username: this.username,
          password: this.password,
        });

        localStorage.setItem("user", JSON.stringify(res.data.logged_in_user));
        this.$router.push("/pratiche-attesa");
      } catch (error) {
        this.error = "Username o password errate. Riprova.";
      }
    },

    resetError() {
      this.error = null;
    },
  },
  computed: {},
};
</script>

<style>
.bg-random {
    background-image: url(../assets/background-login-cover.jpg);
    background-size: cover;
    background-position: center;
}

</style>