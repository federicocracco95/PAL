<template>
  <div id="nav-middle" class="bg-blue-800 p-20">
    <div class="container flex justify-around mx-auto">
      <!--<router-link class="text-xl" to="/pratiche-effetuate">Pratica effetuata</router-link>-->
      <router-link class="text-xl" to="/pratichedacontrollare"
        >Pratiche da Controllare</router-link
      >
      <router-link class="text-xl" to="/praticheapprovate"
        >Pratiche Approvate</router-link
      >
      <router-link class="text-xl" to="/pratichenonapprovate"
        >Pratiche Non Approvate</router-link
      >
      <router-link class="text-xl" to="/nuovapratica"
        >Nuova pratica</router-link
      >
    </div>
  </div>
</template>

<script>
export default {
  name: "NavMiddle",
  components: {}
};
</script>
<style scoped>
#nav-middle {
  padding: 15px;
}

#nav-middle a {
  font-weight: bold;
  color: #fff;
  text-transform: uppercase;
}

#nav-middle a.router-link-exact-active {
  text-decoration: underline;
}
</style>
