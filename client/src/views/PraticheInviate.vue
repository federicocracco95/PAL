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
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            <!-- riga 1 -->
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <span>2345670r3289</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <span>Mario</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <span>Rossi</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span>29/04/2020 17:57</span>
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

      };
  },
  props: {},
  async mounted() {
    try {
      let info_companies = await this.$api.get("/infocompany");
      console.log(info_companies.data);
      let info_consultants = await this.$api.get("/infoconsultant");
      console.log(info_consultants.data);
      let employees = await this.$api.get("/employee");
      console.log(employees.data);
    } catch (e) {
      console.log(e);
    }
  },
  methods: {
    
  },
};
</script>

