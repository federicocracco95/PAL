<template>
  <div id="NavGrey">
     <navbar class="container">
            <div class="flex  p-4   bg-gray-500">
               
                  <img class="h-14  ml-4 " src="../assets/logo-tn.png" alt="">
                  <div class="w-1/2 justify-start ml-4 align-middle ">
                      <div>
                          <span class="uppercase text-white font-bold text-3xl ">Cassa </span>
                          <span class="uppercase text-white font-bold text-3xl">Edile</span>
                      </div>
                      <div>
                          <span class="text-white">della provincia autonoma di trento</span>
                      </div>
                  </div>   
                    
                
                <div class="w-1/2">
                  <div class="flex flex-row-reverse items-center">
                      <div class="relative">
                        <input type="checkbox" id="sortbox" class="hidden absolute">
                        <label for="sortbox" class="flex items-center space-x-1 cursor-pointer">
                          <img class="h-12" src="../assets/proifile-user-white.svg" alt="">
                        </label>
                        <div id="sortboxmenu" class="absolute mt-1 right-1 top-full min-w-max shadow rounded opacity-0 bg-white border-gray-400 transition delay-75 ease-in-out z-10">
                          <ul class="block text-left text-gray-900">
                              <li><a href="/profile" class="block px-3 py-2 hover:bg-gray-200">Modifica Profilo</a></li>
                              <li><button @click="logout()" class="block px-3 py-2 hover:bg-gray-200">Logout</button></li>
                          </ul>
                        </div>
                      </div>
                      <div class="mx-4 capitalize text-white">
                        <span>{{user.username}}</span>
                      </div>
                  </div>
                </div>
                
                

            </div> 
     </navbar>
  </div>

  
</template>

<script>

export default {
  name: 'NavGrey',
  components: {
    
  },
  data() {
    return {
      user:{
        username: null,
        },
    };
  },
  methods: {
    async logout() {
      localStorage.removeItem('user');
      return await this.$api.post("/logout");
      },
  },
  mounted() {
      this.user = JSON.parse(localStorage.getItem("user"));
  },
}
</script>
<style>
#sortbox:checked ~ #sortboxmenu {
        opacity: 1;
    }
</style>