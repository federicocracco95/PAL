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
          <span
            type="text"
            name="company"
            
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            value="Ditta"
          />
          <span
            type="text"
            name="cee_code"
            
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Codice C.E."
          />
          <input
            type="text"
            name="full_name"
            
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Al Signor"
          />
          <input
            type="text"
            name="birth_date"
            
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Nato il"
          />
          <input
            type="text"
            name="residence"
            
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Residente a"
          />
          <input
            type="text"
            name="province"
            
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Prov."
          />
          <input
            type="text"
            name="cap"
            
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Cap"
          />
          <input
            type="text"
            name="position"
            
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Qualifica"
          />
          <input
            type="text"
            name="salary"
            
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Paga oraria"
          />
          <input
            type="text"
            name="hire_date"
            
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
               
                class="form-radio"
                name="accountType"
                value="0"
              />
              <span class="ml-2">No</span>
            </label>
          </div>
        </div>
        <div class="grid md:grid-cols-2 md:gap-2">
          <input
            type="text"
            name="trimester"
            
            class="border rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Trimestre di riferimento"
          />
          <input
            type="text"
            name="weekly_working_hours"
            
            class="border rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Ore settimanali di lavoro"
          />
          <input
            type="text"
            name="ordinary_work_hours"
          
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Ore ordinarie di lavoro"
          />
          <input
            type="text"
            name="disease_hours"
           
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Ore di malattia/infortunio"
          />
          <input
            type="text"
            name="cig_hours"
           
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Ore di C.I.G."
          />
          <input
            type="text"
            name="holidays_and_remunerated_permissions_hours"
            
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Ore per ferie e permessi retribuiti"
          />
          <input
            type="text"
            name="other_remunerated_hours"
            
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Altre retribuite"
          />
          <input
            type="text"
            name="total_hours"
          
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Totale ore trimestre"
          />
        </div>
        <input
          type="text"
          name="holidays_and_remunerated_permissions_hours"
        
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
           
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Signor"
          />
          <input
            type="text"
            name="birth_date"
           
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
           
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="Da"
          />
          <input
            type="text"
            name="disease_end_date"
         
            class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
            placeholder="A"
          />
          <input
            type="text"
            name="total_disease_days"
       
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
                  name="mail"
                  class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
                  placeholder=""
                />
              </td>
              <td>
                <input
                  type="text"
                  name="mail"
                  class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
                  placeholder=""
                />
              </td>
              <td>
                <input
                  type="text"
                  name="mail"
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
                  name="mail"
                  class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
                  placeholder=""
                />
              </td>
              <td>
                <input
                  type="text"
                  name="mail"
                  class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
                  placeholder=""
                />
              </td>
              <td>
                <input
                  type="text"
                  name="mail"
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
                  name="mail"
                  class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
                  placeholder=""
                />
              </td>
              <td>
                <input
                  type="text"
                  name="mail"
                  class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
                  placeholder=""
                />
              </td>
              <td>
                <input
                  type="text"
                  name="mail"
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
                  name="mail"
                  class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
                  placeholder=""
                />
              </td>
              <td>
                <input
                  type="text"
                  name="mail"
                  class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
                  placeholder=""
                />
              </td>
              <td>
                <input
                  type="text"
                  name="mail"
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
                  name="mail"
                  class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
                  placeholder=""
                />
              </td>
              <td>
                <input
                  type="text"
                  name="mail"
                  class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
                  placeholder=""
                />
              </td>
              <td>
                <input
                  type="text"
                  name="mail"
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
                  name="mail"
                  class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
                  placeholder=""
                />
              </td>
              <td>
                <input
                  type="text"
                  name="mail"
                  class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
                  placeholder=""
                />
              </td>
              <td>
                <input
                  type="text"
                  name="mail"
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
      </div>
      <pre>{{form}}</pre>
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
