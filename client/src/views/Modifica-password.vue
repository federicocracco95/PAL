<template>
  <div class="modifica">
    <div class="flex items-center bg-white dark:bg-gray-900">
      <div class="container mx-auto">
        <div class="bg-gray-300 rounded-lg p-4 max-w-md mx-auto my-10">
          <div class="text-center">
            <h1
              class="my-2 text-3xl font-semibold text-blue-900 dark:text-gray-200"
            >
              Modifica Password
            </h1>
          </div>
          <div class="m-7">
            <form 
                action=""
                @submit.prevent="resetPassword()"
            >
              <div class="mb-6">
                <input
                  type="password"
                  name="password"
                  id="password"
                  placeholder="Vecchia password"
                  class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"
                  v-model="oldPassword"
                  @focus="resetError()"
                />
              </div>
              <div class="mb-6">
                <input
                  type="password"
                  name="password"
                  id="password"
                  placeholder="Nuova Password"
                  class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"
                  v-model="newPassword"
                  @focus="resetError()"
                />
              </div>
              <div class="mb-6">
                <input
                  type="password"
                  name="password"
                  id="password"
                  placeholder="Conferma Password"
                  class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"
                  v-model="confirmNewPassword"
                  @focus="resetError()"
                />
              </div>
              <div class="mb-6">
                <button
                  @click="resetPassword()"
                  class="w-full rounded-full px-3 py-4 text-white bg-blue-900 rounded-md focus:bg-indigo-600 focus:outline-none"
                >
                  Invia
                </button>
              </div>
            </form>
            <div class="m-7 text-center">
              {{error}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Modifica",
  data() {
    return {
      oldPassword: null,
      user: null,
      newPassword: null,
      confirmNewPassword: null,
      error: null,
    };
  },
  async mounted() {
      this.user = JSON.parse(localStorage.getItem("user"));

      if (!this.user['first_time_login']) {
        this.$router.push("/praticheinviate");
      }
  },
  methods: {
    async resetPassword() {
      if(this.checkPassword()) {
        try {
            await this.$api.post("/resetpassword", {
            username: this.user['username'],
            email: this.user['email'],
            password: this.oldPassword,
            newPassword: this.newPassword
            });
            this.$router.push("/praticheinviate");
            
        } catch (error) {
            this.error = "Errore nell'invio";
        }
      } else {
          this.error = "Dati errati, riprovare";
      }
    },

    checkPassword() {
        if(this.newPassword === this.confirmNewPassword) {
            return true;
        }
        return false;

    },

    resetError() {
      this.error = null;
    },
  },
  computed: {},
};
</script>
