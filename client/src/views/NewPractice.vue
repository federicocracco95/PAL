<template>
  <div class="newpractive m-8">
    <div v-if="!isLoading">
      <div class="flex justify-center my-8">
        <h2 class="uppercase text-2xl font-bold">
          Modulo denuncia - richiesta rimborso malattia
        </h2>
      </div>
      <div class="flex justify-center mb-8">
        <div class="relative inline-flex m-4">
          <svg
            class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 412 232"
          >
            <path
              d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z"
              fill="#648299"
              fill-rule="nonzero"
            />
          </svg>
          <select
            v-model="selectedCompanyId"
            class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none"
          >
            <option :value="undefined">Seleziona Azienda</option>
            <option
              v-for="company in companies"
              :key="company.id"
              :value="company.id"
              >{{ company.name }}</option
            >
          </select>
        </div>
        <div
          v-if="selectedCompany != undefined"
          class="relative inline-flex m-4"
        >
          <svg
            class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 412 232"
          >
            <path
              d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z"
              fill="#648299"
              fill-rule="nonzero"
            />
          </svg>
          <select
            v-model="selectedEmployeeId"
            class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none"
          >
            <option>Seleziona Dipendente</option>
            <option
              v-for="employee in companyEmployees"
              :key="employee.id"
              :value="employee.id"
              >{{ employee.full_name }}</option
            >
          </select>
        </div>
      </div>
      <div class="container mx-auto px-10" v-if="selectedEmployee">
        <div class="grid md:grid-cols-2 md:gap-2">
          <input
            type="text"
            name="company"
            v-model="selectedCompany.name"
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Ditta"
          />
          <input
            type="text"
            name="cee_code"
            v-model="selectedCompany.cee_code"
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Codice C.E."
          />
          <input
            type="text"
            name="full_name"
            v-model="selectedEmployee.full_name"
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Al Signor"
          />
          <input
            type="text"
            name="birth_date"
            v-model="selectedEmployee.birth_date"
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Nato il"
          />
          <input
            type="text"
            name="residence"
            v-model="selectedEmployee.residence"
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Residente a"
          />
          <input
            type="text"
            name="province"
            v-model="selectedEmployee.province"
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Prov."
          />
          <input
            type="text"
            name="cap"
            v-model="selectedEmployee.cap"
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Cap"
          />
          <input
            type="text"
            name="position"
            v-model="selectedEmployee.position"
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Qualifica"
          />
          <input
            type="text"
            name="salary"
            v-model="selectedEmployee.salary"
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Paga oraria"
          />
          <input
            type="text"
            name="hire_date"
            v-model="selectedEmployee.hire_date"
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Data assunzione"
          />
        </div>
        <div class="flex">
          <div class="flex-1 my-4">
            <span class="text-gray-700 mr-4 my-4"
              >Incidente extraprofessionale</span
            >
            <label class="inline-flex items-center">
              <input
                v-model="newPractice.extraprofessional_incident"
                type="radio"
                class="form-radio"
                name="extraprofessional_incident"
                value="1"
              />
              <span class="ml-2">Si</span>
            </label>
            <label class="inline-flex items-center ml-6">
              <input
                type="radio"
                v-model="newPractice.extraprofessional_incident"
                class="form-radio"
                name="extraprofessional_incident"
                value="0"
              />
              <span class="ml-2">No</span>
            </label>
          </div>
          <div class="flex-1 my-4">
            <span class="text-gray-700 mx-2 my-4">Incidente stradale</span>
            <label class="inline-flex items-center">
              <input
                v-model="newPractice.car_crash"
                type="radio"
                class="form-radio"
                name="car_crash"
                value="1"
              />
              <span class="ml-2">Si</span>
            </label>
            <label class="inline-flex items-center ml-6">
              <input
                type="radio"
                v-model="newPractice.car_crash"
                class="form-radio"
                name="accountType"
                value="0"
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
            v-model="newPractice.trimester"
            class="border rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Trimestre di riferimento"
          />
          -->
          <select
            class="border rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
          >
            <option :value="undefined">Trimestre di riferimento </option>
            <option :value="undefined">Primo trimestre </option>
            <option :value="undefined">Secondo trimestre </option>
            <option :value="undefined">Terzo trimestre </option>
          </select>
          <input
            type="text"
            name="weekly_working_hours"
            v-model="newPractice.weekly_working_hours"
            class="border rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Ore settimanali di lavoro"
          />
          <input
            type="text"
            name="ordinary_work_hours"
            v-model="newPractice.ordinary_work_hours"
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Ore ordinarie di lavoro"
          />
          <input
            type="text"
            name="disease_hours"
            v-model="newPractice.disease_hours"
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Ore di malattia"
          />
          <input
            type="text"
            name="cig_hours"
            v-model="newPractice.cig_hours"
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Ore di C.I.G."
          />
          <input
            type="text"
            name="holidays_and_remunerated_permissions_hours"
            v-model="newPractice.holidays_and_remunerated_permissions_hours"
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Ore per ferie e permessi retribuiti"
          />
          <input
            type="text"
            name="other_remunerated_hours"
            v-model="newPractice.other_remunerated_hours"
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Altre retribuite"
          />
          <input
            type="text"
            name="total_hours"
            v-model="newPractice.total_hours"
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Totale ore trimestre"
          />
        </div>
        <input
          type="text"
          name="holidays_and_remunerated_permissions_hours"
          v-model="newPractice.holidays_and_remunerated_permissions_hours"
          class="border rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
          placeholder="Orario settimanale applicato nel periodo denunciato: ore"
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
            v-model="selectedEmployee.full_name"
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Signor"
          />
          <input
            type="text"
            name="birth_date"
            v-model="selectedEmployee.birth_date"
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Nato il"
          />
        </div>
        <h3 class="text-lg font-bold mt-6">Periodo denunciato:</h3>
        <div
          class="grid md:grid-cols-3 md:gap-2 content-center	flex items-center	"
        >
          <input
            type="text"
            name="disease_start_date"
            v-model="newPractice.disease_start_date"
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Da"
          />
          <input
            type="text"
            name="disease_end_date"
            v-model="newPractice.disease_end_date"
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="A"
          />
          <input
            type="text"
            name="total_disease_days"
            v-model="newPractice.total_disease_days"
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="= Giorni"
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
                  name="Giorni non liquidati"
                  class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
                  placeholder=""
                />
              </td>
              <td>
                <input
                  type="text"
                  name="Giorni liquidati"
                  class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
                  placeholder=""
                />
              </td>
              <td>
                <input
                  type="text"
                  name="Importo giornaliero richesto in rimborso"
                  class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
                  placeholder=""
                />
              </td>
            </tr>
            <tr>
              <td>primi 3 gg. per malattia superiore a 6 e fino a 12 giorni</td>
              <td>
                <input
                  type="text"
                  name="Giorni non liquidati"
                  class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
                  placeholder=""
                />
              </td>
              <td>
                <input
                  type="text"
                  name="Giorni liquidati"
                  class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
                  placeholder=""
                />
              </td>
              <td>
                <input
                  type="text"
                  name="Importo giornaliero richesto in rimborso"
                  class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
                  placeholder=""
                />
              </td>
            </tr>
            <tr>
              <td>primi 3 gg. per malattia superiore a 12 giorni</td>
              <td>
                <input
                  type="text"
                  name="Giorni non liquidati"
                  class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
                  placeholder=""
                />
              </td>
              <td>
                <input
                  type="text"
                  name="Giorni liquidati"
                  class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
                  placeholder=""
                />
              </td>
              <td>
                <input
                  type="text"
                  name="Importo giornaliero richesto in rimborso"
                  class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
                  placeholder=""
                />
              </td>
            </tr>
            <tr>
              <td>dal 4° al 20° giorno indennizzati INPS</td>
              <td>
                <input
                  type="text"
                  name="Giorni non liquidati"
                  class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
                  placeholder=""
                />
              </td>
              <td>
                <input
                  type="text"
                  name="Giorni liquidati"
                  class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
                  placeholder=""
                />
              </td>
              <td>
                <input
                  type="text"
                  name="Importo giornaliero richesto in rimborso"
                  class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
                  placeholder=""
                />
              </td>
            </tr>
            <tr>
              <td>dal 21° al 180° giorno indennizzati INPS</td>
              <td>
                <input
                  type="text"
                  name="Giorni non liquidati"
                  class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
                  placeholder=""
                />
              </td>
              <td>
                <input
                  type="text"
                  name="Giorni liquidati"
                  class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
                  placeholder=""
                />
              </td>
              <td>
                <input
                  type="text"
                  name="Importo giornaliero richesto in rimborso"
                  class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
                  placeholder=""
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
                  name="Giorni non liquidati"
                  class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
                  placeholder=""
                />
              </td>
              <td>
                <input
                  type="text"
                  name="Giorni liquidati"
                  class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
                  placeholder=""
                />
              </td>
              <td>
                <input
                  type="text"
                  name="Importo giornaliero richesto in rimborso"
                  class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
                  placeholder=""
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
              class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
              placeholder="Da"
            />
          </div>
        </div>

        <h3 class="text-lg font-bold py-2">
          Il sottoscritto legale rappresentante, consapevole delle
          responsabilità penali (art. 640 C.P.), DICHIARA:
        </h3>
        <ul class="px-4 mb-6">
          <li>
            di aver corrisposto integralmente al lavoratore beneficiario il
            trattamento chiesto in rimborso con la presente domanda;
          </li>
          <li>
            che i dati esposti nella presente domanda sono conformi alla verità
            ed alle registrazioni dei libri paga e matricola;
          </li>
          <li>
            di osservare ed applicare integralmente il vigente C.C.N.L. per gli
            operai dipendenti dalle imprese edili ed affini, unitamente agli
            accordi locali integrativi, nonché lo statuto della Cassa Edile
            della Provincia di Trento.
          </li>
        </ul>
        <div class="flex items-center">
          <button
            @click="save()"
            :disabled="isSaving"
            :class="{
              'bg-blue-800 cursor-pointer': !isSaving,
              'bg-blue-100 cursor-not-allowed': isSaving
            }"
            class="outline-none text-white font-bold py-2 px-4 rounded inline-flex items-center mr-3"
          >
            {{ isSaving ? "Salvando..." : "Salva Documento" }}
          </button>
          <div v-if="errors" class="text-red-500 font-bold flex-col">
            <span v-for="e in errors" class="flex items-center" :key="e">
              <span class="w-1 h-1 mr-1 block bg-red-500 rounded-full"></span
              >{{ e[0] }}
            </span>
          </div>
          <button
            class="bg-gray-400 outline-none text-white font-bold py-2 px-4 rounded inline-flex items-center ml-auto"
          >
            <span>Genera pdf</span>
          </button>
        </div>
      </div>
    </div>
    <div v-if="isLoading" class="p-5 text-center font-bold text-gray-500">
      Caricamento...
    </div>
  </div>
</template>

<script>
export default {
  name: "NuovaPratica",
  data() {
    return {
      files: null,
      companies: null,
      consultants: null,
      employees: null,
      selectedCompanyId: null,
      selectedEmployeeId: null,
      newPractice: {
        car_crash: "0",
        extraprofessional_incident: "1"
      },
      errors: null,
      isSaving: false,
      isLoading: true
    };
  },
  props: {},
  async mounted() {
    this.isLoading = true;

    try {
      this.companies = await this.$api.get("/infocompany");
      this.employees = await this.$api.get("/employee");
    } catch (e) {
      console.log(e);
    }

    this.isLoading = false;
  },
  methods: {
    async save() {
      this.errors = null;
      this.isSaving = true;

      let newPractise = {
        employee: this.selectedEmployee,
        company: this.selectedCompany,
        practice: this.newPractice
      };

      let response;

      try {
        response = await this.$api.post("/diseaseform", newPractise);
      } catch (e) {
        this.errors = e.errors ? e.errors : [[e.message]];
      }

      this.isSaving = false;
      
      this.$router.push({
        name: "practice_view",
        params: {
          id: response.data,
        }
      });
    }
  },
  computed: {
    companyEmployees() {
      return this.employees.filter(
        employee => employee.company_id == this.selectedCompanyId
      );
    },
    selectedEmployee() {
      return this.employees.find(
        employee => employee.id == this.selectedEmployeeId
      );
    },
    selectedCompany() {
      return this.companies.find(
        company => company.id == this.selectedCompanyId
      );
    }
  }
};
</script>

<style>
ul {
  list-style-type: circle !important;
}

</style>
