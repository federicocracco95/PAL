<template>
  <div id="app">
    <nav-Grey v-if="!isLogin"></nav-Grey>
    <nav-top v-if="!isLogin"></nav-top>
    <nav-middle v-if="!isLogin" v-show="!isModifica"></nav-middle>
    <router-view/>
    <!--
    <footer-back></footer-back>
    -->
  </div>
</template>
<script>
export default {
  computed: {
  isLogin() {
     return this.$route.name === 'Login';
  },
  isModifica() {
     return this.$route.name === 'Modifica';
  }
}
}
</script>
<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}


</style>
