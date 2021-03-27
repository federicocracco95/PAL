<template>
  <div class="praticheinviate">

    <div class="overflow-x-auto">
        <div class="flex m-4 items-center justify-center overflow-hidden">
            <div class="w-full lg:w-5/6">
                <div class="bg-white shadow-md rounded my-6">
                    <table class="min-w-max w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200 text-blue-800 text-sm leading-normal">
                                <th class="py-3 px-6 text-left">Numero Pratica</th>
                                <th class="py-3 px-6 text-left">Cognome</th>
                                <th class="py-3 px-6 text-left">Nome</th>
                                <th class="py-3 px-6 text-center">Data Pratica</th>
                                <th class="py-3 px-6 text-center">Dettaglio</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light"
                            v-for="form in forms"
                            :key="form.id" >
                            <tr class="border-b border-gray-200 hover:bg-gray-100"
                                v-for="data in form.employee"
                                :key="data.id"
                            >
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <span>{{form.id}}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <span>{{data.surname}}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <span>{{data.name}}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span>{{form.created_at.slice(0,10)}} {{form.created_at.slice(11,16)}}</span>
                                </td>
                                <td class="py-3 px-6 text-center">
                                        <button 
                                        class="bg-blue-800 outline-none text-white font-bold py-2 px-4 rounded inline-flex items-center justify-center"
                                        @click="dettaglio(form.id)"
                                        >
                                            <span>Vai</span>
                                        </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
  </div>
</template>
<script>
export default {
  name: "PraticheInviate",
  data() {
      return {
          forms: [
              
          ],
              
              
          
      };
  },
  props: {},
  async mounted() {
    try {
      this.forms = await this.$api.get("/diseaseform");
      console.log(this.forms);
    } catch (e) {
      console.log(e);
    }
  },
  methods: {
      
    dettaglio(praticaId) {
        this.$router.push({
            name: "DettaglioPratica",
            params: {
                id: praticaId,
            }
        });
    }
  },
};
</script>

