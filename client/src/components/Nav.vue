<template>
  <div id="nav">
    <template v-for="link in links">
      <router-link
        v-if="linkIsRoleVisible(link)"
        :to="link.path"
        :key="link.code"
        >{{ link.label }} |
      </router-link>
    </template>
  </div>
</template>

<script>
export default {
  name: "Nav",
  components: {},
  data() {
    return {
      links: [
        {
          path: "/",
          code: "home",
          label: "Home",
          roles: ["consultant", "pa", "company"]
        },
        {
          path: "/about",
          code: "about",
          label: "About Us",
          roles: ["consultant", "pa", "company"]
        },
        {
          path: "/login",
          code: "login",
          label: "Login",
          roles: ["consultant", "pa", "company"]
        },
        {
          path: "/",
          code: "home",
          label: "Home",
          roles: ["consultant", "pa", "company"]
        }
      ]
      //<router-link to="/about">About</router-link> |
      //<router-link to="/login">Login</router-link> |
      //<router-link to="/modifica">Modifica password</router-link> |
      //<router-link to="/crea-utente">Crea Utente</router-link>
    };
  },
  methods: {
    linkIsRoleVisible(link) {
      console.log(link);
      let user = JSON.parse(localStorage.getItem("user"));

      if (!link.roles) {
        return true;
      }

      console.log(user);
      //return link.roles.contains(user.role);
      return true;
    }
  }
};
</script>
<style scoped>
#nav {
  padding: 30px;
}

#nav a {
  font-weight: bold;
  color: #2c3e50;
}

#nav a.router-link-exact-active {
  color: #42b983;
}
</style>
