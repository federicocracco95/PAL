<template>
  <div id="nav-middle" class="bg-blue-800 p-20">
      <div class="container flex justify-around">
            <router-link class="text-xl" to="/modifica">Pratica effetuata</router-link>
            <router-link class="text-xl" to="/modificaprofilo">Pratica in attesa</router-link>
            <router-link class="text-xl" to="/newpractice">Nuova pratica</router-link> 
      </div>

  </div>
</template>

<script>

export default {
  name: 'NavMiddle',
  components: {
    
  }
}
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