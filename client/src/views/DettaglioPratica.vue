<template>
  <div class=" m-8">
      <div class="justify-center my-8 text-center">
        <h1 class="uppercase text-2xl font-bold mb-4">Dettaglio Pratica</h1>
          <h2 class="uppercase text-2l font-bold">
          Modulo denuncia - richiesta rimborso malattia
        </h2>
      </div>
      <div class="container mx-auto px-10">
        <div class="grid md:grid-cols-2 md:gap-2">
          <select
            class="border rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            v-model="form.company.id"
            disabled
          >
            <option :value="1">Calcetruzzlvo </option>
            <option :value="2">Mattone4L </option>
          </select>
          <input
            type="text"
            name="cee_code"
            v-model="form.company.cee_code"
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Codice C.E."
            disabled
          />
          <input
            type="text"
            name="full_name"
            v-model="form.company.full_name"
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Al Signor"
            disabled
          />
          <input
            type="text"
            name="birth_date"
            v-model="form.company.birth_date"
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Nato il"
            disabled
          />
          <input
            type="text"
            name="residence"
            v-model="form.company.residence"
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Residente a"
            disabled
          />
          <input
            type="text"
            name="province"
            v-model="form.company.province"
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Prov."
            disabled
          />
          <input
            type="text"
            name="cap"
            v-model="form.company.cap"
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Cap"
            disabled
          />
          <input
            type="text"
            name="position"
            v-model="form.company.position"
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Qualifica"
            disabled
          />
          <input
            type="text"
            name="salary"
            v-model="form.company.salary"
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Paga oraria"
            disabled
          />
          <input
            type="text"
            name="hire_date"
            v-model="form.company.hire_date"
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Data assunzione"
            disabled
          />
        </div>
        <div class="flex">
          <div class="flex-1 my-4">
            <span class="text-gray-700 mr-4 my-4"
              >Incidente extraprofessionale</span
            >
            <label class="inline-flex items-center">
              <input
                
                type="radio"
                class="form-radio"
                v-model="form.extraprofessional_incident"
                name="extraprofessional_incident"
                value="1"
                disabled
              />
              <span class="ml-2">Si</span>
            </label>
            <label class="inline-flex items-center ml-6">
              <input
                type="radio"
                
                class="form-radio"
                v-model="form.extraprofessional_incident"
                name="extraprofessional_incident"
                value="0"
                disabled
              />
              <span class="ml-2">No</span>
            </label>
          </div>
          <div class="flex-1 my-4">
            <span class="text-gray-700 mx-2 my-4">Incidente stradale</span>
            <label class="inline-flex items-center">
              <input
                
                type="radio"
                class="form-radio"
                v-model="form.car_crash"
                name="car_crash"
                value="1"
                disabled
              />
              <span class="ml-2">Si</span>
            </label>
            <label class="inline-flex items-center ml-6">
              <input
                type="radio"
               
                class="form-radio"
                v-model="form.car_crash"
                name="accountType"
                value="0"
                disabled
              />
              <span class="ml-2">No</span>
            </label>
          </div>
        </div>
        <div class="grid md:grid-cols-2 md:gap-2">
          <!--
          <input
            type="text"
            name="trimester"
            
            class="border rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Trimestre di riferimento"
          />
          -->
          <select
            class="border rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            v-model="form.trimester"
            disabled
          >
            <option :value="null" disabled>Trimestre di riferimento </option>
            <option :value="1">Primo trimestre </option>
            <option :value="2">Secondo trimestre </option>
            <option :value="3">Terzo trimestre </option>
            <option :value="4">Quarto trimestre </option>
          </select>
          <input
            type="text"
            name="weekly_working_hours"
            v-model="form.weekly_working_hours"
            class="border rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Ore settimanali di lavoro"
            disabled
          />
          <input
            type="text"
            name="ordinary_work_hours"
            v-model="form.ordinary_work_hours"
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Ore ordinarie di lavoro"
            disabled
          />
          <input
            type="text"
            name="disease_hours"
            v-model="form.disease_hours"
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Ore di malattia/infortunio"
            disabled
          />
          <input
            type="text"
            name="cig_hours"
            v-model="form.cig_hours"
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Ore di C.I.G."
            disabled
          />
          <input
            type="text"
            name="holidays_and_remunerated_permissions_hours"
            v-model="form.holidays_and_remunerated_permissions_hours"
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Ore per ferie e permessi retribuiti"
            disabled
          />
          <input
            type="text"
            name="other_remunerated_hours"
            v-model="form.other_remunerated_hours"
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Altre retribuite"
            disabled
          />
          <input
            type="text"
            name="total_hours"
            v-model="form.total_hours"
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Totale ore trimestre"
            disabled
          />
        </div>
        <input
          type="text"
          name="holidays_and_remunerated_permissions_hours"
          v-model="form.holidays_and_remunerated_permissions_hours"
          class="border rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
          placeholder="Orario settimanale applicato nel periodo denunciato: ore"
          disabled
        />

        <h3 class="text-lg font-bold py-2">Documenti da allegare:</h3>
        <ul class="px-4 mb-6">
          <li>Copia leggibile della documentazione medica;</li>
          <li>
            Copia delle buste paga riferite ai periodi chiesti a rimborso (solo
            in caso di malattie superiori ai 3 gg);
          </li>
          <li>
            Copia delle contabili di pagamento delle buste paga di cui sopra;
          </li>
          <li>
            Copia delle denunce MUT (e relative quietanze di pagamento) qualora
            per il lavoratore siano state versate;
          </li>
          <li>
            Ore presso altre Casse Edili nel trimestre antecedente l’inizio
            evento;
          </li>
        </ul>
        <button
          class="bg-blue-800 outline-none text-white font-bold py-2 px-4 rounded inline-flex items-center"
        >
          <span>Carica documenti</span>
        </button>

        <div class="mt-8 grid md:grid-cols-2 md:gap-2">
          <input
            type="text"
            name="full_name"
            v-model="form.company.full_name"
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Signor"
            disabled
          />
          <input
            type="text"
            name="birth_date"
            v-model="form.company.birth_date"
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Nato il"
            disabled
          />
        </div>
        <h3 class="text-lg font-bold mt-6">Periodo denunciato:</h3>
        <div
          class="grid md:grid-cols-3 md:gap-2 content-center	flex items-center	"
        >
          <input
            type="text"
            name="disease_start_date"
            v-model="form.disease_start_date"
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Da"
            disabled
          />
          <input
            type="text"
            name="disease_end_date"
            v-model="form.disease_end_date"
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="A"
            disabled
          />
          <input
            type="text"
            name="total_disease_days"
            v-model="form.total_disease_days"
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="= Giorni"
            disabled
          />
        </div>

        <table class="table-fixed mt-8">
          <thead>
            <tr>
              <th class="w-1/4 text-left">Prospetto liquidazione Malattia</th>
              <th class="w-1/4">Giorni non liquidati</th>
              <th class="w-1/4">Giorni liquidati</th>
              <th class="w-1/4">Importo giornaliero richesto in rimborso</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>primi 3 gg. per malattia fino a 6 giorni</td>
              <td>
                <input
                  type="text"
                  name="mail"
                  v-model="form.days_not_cleared_1"
                  class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
                  placeholder=""
                  disabled
                />
              </td>
              <td>
                <input
                  type="text"
                  name="mail"
                  v-model="form.days_cleared_1"
                  class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
                  placeholder=""
                  disabled
                />
              </td>
              <td>
                <input
                  type="text"
                  name="mail"
                  v-model="form.daily_amount_1"
                  class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
                  placeholder=""
                  disabled
                />
              </td>
            </tr>
            <tr>
              <td>primi 3 gg. per malattia superiore a 6 e fino a 12 giorni</td>
              <td>
                <input
                  type="text"
                  name="mail"
                  v-model="form.days_not_cleared_2"
                  class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
                  placeholder=""
                  disabled
                />
              </td>
              <td>
                <input
                  type="text"
                  name="mail"
                  v-model="form.days_cleared_2"
                  class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
                  placeholder=""
                  disabled
                />
              </td>
              <td>
                <input
                  type="text"
                  name="mail"
                  v-model="form.daily_amount_2"
                  class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
                  placeholder=""
                  disabled
                />
              </td>
            </tr>
            <tr>
              <td>primi 3 gg. per malattia superiore a 12 giorni</td>
              <td>
                <input
                  type="text"
                  name="mail"
                  v-model="form.days_not_cleared_3"
                  class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
                  placeholder=""
                  disabled
                />
              </td>
              <td>
                <input
                  type="text"
                  name="mail"
                  v-model="form.days_cleared_3"
                  class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
                  placeholder=""
                  disabled
                />
              </td>
              <td>
                <input
                  type="text"
                  name="mail"
                  v-model="form.daily_amount_3"
                  class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
                  placeholder=""
                  disabled
                />
              </td>
            </tr>
            <tr>
              <td>dal 4° al 20° giorno indennizzati INPS</td>
              <td>
                <input
                  type="text"
                  name="mail"
                  v-model="form.days_not_cleared_4"
                  class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
                  placeholder=""
                  disabled
                />
              </td>
              <td>
                <input
                  type="text"
                  name="mail"
                  v-model="form.days_cleared_4"
                  class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
                  placeholder=""
                  disabled
                />
              </td>
              <td>
                <input
                  type="text"
                  name="mail"
                  v-model="form.daily_amount_4"
                  class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
                  placeholder=""
                  disabled
                />
              </td>
            </tr>
            <tr>
              <td>dal 21° al 180° giorno indennizzati INPS</td>
              <td>
                <input
                  type="text"
                  name="mail"
                  v-model="form.days_not_cleared_5"
                  class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
                  placeholder=""
                  disabled
                />
              </td>
              <td>
                <input
                  type="text"
                  name="mail"
                  v-model="form.days_cleared_5"
                  class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
                  placeholder=""
                  disabled
                />
              </td>
              <td>
                <input
                  type="text"
                  name="mail"
                  v-model="form.daily_amount_5"
                  class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
                  placeholder=""
                  disabled
                />
              </td>
            </tr>
            <tr>
              <td>
                dal 181° al 365° giorno NON indennizzati INPS (270° giorno per
                operai con anzianità inferiore a 3 anni e mezzo)
              </td>
              <td>
                <input
                  type="text"
                  name="mail"
                  v-model="form.days_not_cleared_6"
                  class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
                  placeholder=""
                  disabled
                />
              </td>
              <td>
                <input
                  type="text"
                  name="mail"
                  v-model="form.days_cleared_6"
                  class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
                  placeholder=""
                  disabled
                />
              </td>
              <td>
                <input
                  type="text"
                  name="mail"
                  v-model="form.daily_amount_6"
                  class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
                  placeholder=""
                  disabled
                />
              </td>
            </tr>
          </tbody>
        </table>
        <div class="flex justify-center items-center">
          <div class="w-1/2 mx-4">
            <h3 class="font-bold text-xl uppercase text-right">Totale</h3>
          </div>
          <div class="w-1/2 mr-4">
            <input
              type="text"
              name="mail"
              v-model="form.total_final"
              class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
              placeholder="Da"
              disabled
            />
          </div>
        </div>
      </div>
  </div>
</template>

<script>
export default {
  name: "DettaglioPratica",
  data() {
    return {
      form: [],
      errors: null,
      id: this.$route.params.id,
    };
  },
  props: {},
  async mounted() {
    const res = await this.$api.get(`/diseaseform/${this.id}`);
    this.form = res[0];
    },

  methods: {
    
  },
  computed: {

  }
};
</script>

<style>
ul {
  list-style-type: circle !important;
}

</style>
