<template>
  <div class="praticheinviate">
    <div class="overflow-x-auto">
      <div class="flex m-4 items-center justify-center">
        <div class="w-full lg:w-5/6">
          <div class="bg-white shadow-md rounded my-6">
            <table class="min-w-max w-full table-auto">
              <thead>
                <tr class="bg-gray-200 text-blue-800 text-sm leading-normal">
                  <th class="py-3 px-6 text-left">Numero Pratica</th>
                  <th class="py-3 px-6 text-left">Cognome</th>
                  <th class="py-3 px-6 text-left">Nome</th>
                  <th class="py-3 px-6 text-center">Data Pratica</th>
                  <th class="py-3 px-6 text-center">Azione</th>
                </tr>
              </thead>
              <tbody class="text-gray-600 text-sm font-light">
                <tr
                  class="border-b border-gray-200 hover:bg-gray-100"
                  v-for="data in forms"
                  :key="data.id"
                >
                  <td class="py-3 px-6 text-left">
                    <div class="flex items-center">
                      <span>{{ data.id }}</span>
                    </div>
                  </td>
                  <td class="py-3 px-6 text-left">
                    <div class="flex items-center">
                      <span>{{ data.employee.surname }}</span>
                    </div>
                  </td>
                  <td class="py-3 px-6 text-left">
                    <div class="flex items-center">
                      <span>{{ data.employee.name }}</span>
                    </div>
                  </td>
                  <td class="py-3 px-6 text-center">
                    <span
                      >{{ data.created_at.slice(0, 10) }}
                      {{ data.created_at.slice(11, 16) }}</span
                    >
                  </td>
                  <td class="py-3 px-6 text-center">
                    <button
                      class="mx-4 bg-green-800 outline-none text-white font-bold py-2 px-4 rounded inline-flex items-center justify-center"
                      @click="approveForm(data.id)"
                    >
                      <span>Approva</span>
                    </button>
                    <button
                      class="mx-4 bg-yellow-400 outline-none text-white font-bold py-2 px-4 rounded inline-flex items-center justify-center"
                      @click="notApproveForm(data.id)"
                    >
                      <span>Non approva</span>
                    </button>
                    <button
                      class="mx-4 bg-blue-800 outline-none text-white font-bold py-2 px-4 rounded inline-flex items-center justify-center"
                      @click="dettaglio(data.id)"
                    >
                      <span>Dettaglio</span>
                    </button>
                    <button
                      class="mx-4 bg-red-500 outline-none text-white font-bold py-2 px-4 rounded inline-flex items-center justify-center"
                      @click="deleteForm(data.id)"
                    >
                      <span>Elimina</span>
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
      forms: []
    };
  },
  props: {},
  async mounted() {
    try {
      this.forms = await this.$api.get("/diseaseform/check");
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
          id: praticaId
        }
      });
    },
    async deleteForm(id) {
      await this.$api.delete(`/diseaseform/delete/${id}`);
      location.reload();
    },

    async approveForm(id) {
      await this.$api.put(`/diseaseform/approve/${id}`);
      location.reload();
    },

    async notApproveForm(id) {
      await this.$api.put(`/diseaseform/notapprove/${id}`);
      location.reload();
    }
  }
};
</script>
