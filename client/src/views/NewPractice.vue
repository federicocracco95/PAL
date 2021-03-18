<template>
  <div class="newpractive m-8">
    <div class="flex justify-center my-8">
      <h2 class="uppercase text-2xl font-bold">
        Modulo denuncia - richiesta rimborso malattia/infortunio
      </h2>
    </div>

    {{test}}

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
          class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none"
        >
          <option>Seleziona Azienda</option>
          <option>Red</option>
          <option>Blue</option>
          <option>Yellow</option>
          <option>Black</option>
          <option>Orange</option>
          <option>Purple</option>
          <option>Gray</option>
          <option>White</option>
        </select>
      </div>
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
          class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none"
        >
          <option>Seleziona Dipendente</option>
          <option>Red</option>
          <option>Blue</option>
          <option>Yellow</option>
          <option>Black</option>
          <option>Orange</option>
          <option>Purple</option>
          <option>Gray</option>
          <option>White</option>
        </select>
      </div>
    </div>

    <div class="container mx-auto px-10">
      <div class="grid md:grid-cols-2 md:gap-2">
        <input
          type="text"
          name="mail"
          class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
          placeholder="Ditta"
        />
        <input
          type="text"
          name="mail"
          class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
          placeholder="Codice C.E."
        />
        <input
          type="text"
          name="mail"
          class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
          placeholder="Al Signor"
        />
        <input
          type="text"
          name="mail"
          class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
          placeholder="Nato il"
        />
        <input
          type="text"
          name="mail"
          class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
          placeholder="Residente a"
        />
        <input
          type="text"
          name="mail"
          class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
          placeholder="Prov."
        />
        <input
          type="text"
          name="mail"
          class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
          placeholder="Cap"
        />
        <input
          type="text"
          name="mail"
          class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
          placeholder="Qualifica"
        />
        <input
          type="text"
          name="mail"
          class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
          placeholder="Paga oraria"
        />
        <input
          type="text"
          name="mail"
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
              name="accountType"
              value="si"
            />
            <span class="ml-2">Si</span>
          </label>
          <label class="inline-flex items-center ml-6">
            <input
              type="radio"
              class="form-radio"
              name="accountType"
              value="no"
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
              name="accountType"
              value="si"
            />
            <span class="ml-2">Si</span>
          </label>
          <label class="inline-flex items-center ml-6">
            <input
              type="radio"
              class="form-radio"
              name="accountType"
              value="no"
            />
            <span class="ml-2">No</span>
          </label>
        </div>
      </div>
      <input
        type="text"
        name="mail"
        class="border rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
        placeholder="Trimestre di riferimento"
      />
      <div class="grid md:grid-cols-2 md:gap-2">
        <input
          type="text"
          name="mail"
          class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
          placeholder="Ore ordinarie di lavoro"
        />
        <input
          type="text"
          name="mail"
          class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
          placeholder="Ore di malattia/infortunio"
        />
        <input
          type="text"
          name="mail"
          class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
          placeholder="Ore di C.I.G."
        />
        <input
          type="text"
          name="mail"
          class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
          placeholder="Ore per ferie e permessi retribuiti"
        />
        <input
          type="text"
          name="mail"
          class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
          placeholder="Altre retribuite"
        />
        <input
          type="text"
          name="mail"
          class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
          placeholder="Totale ore trimestre"
        />
      </div>
      <input
        type="text"
        name="mail"
        class="border rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
        placeholder="Orario settimanale applicato nel periodo denunciato: ore"
      />

      <h3 class="text-lg font-bold py-2">Documenti da allegare:</h3>
      <ul class="px-4 mb-6">
        <li>Copia leggibile della documentazione medica;</li>
        <li>
          Copia delle buste paga riferite ai periodi chiesti a rimborso (solo in
          caso di malattie superiori ai 3 gg);
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
          name="mail"
          class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
          placeholder="Signor"
        />
        <input
          type="text"
          name="mail"
          class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
          placeholder="Nato il"
        />
      </div>
      <input
        type="text"
        name="mail"
        class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
        placeholder="Malattia iniziata il"
      />
      <h3 class="text-lg font-bold mt-6">Periodo denunciato:</h3>
      <div
        class="grid md:grid-cols-3 md:gap-2 content-center flex items-center"
      >
        <input
          type="text"
          name="mail"
          class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
          placeholder="Da"
        />
        <input
          type="text"
          name="mail"
          class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm"
          placeholder="A"
        />
        <input
          type="text"
          name="mail"
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

      <h3 class="text-lg font-bold py-2">
        Il sottoscritto legale rappresentante, consapevole delle responsabilità
        penali (art. 640 C.P.), DICHIARA:
      </h3>
      <ul class="px-4 mb-6">
        <li>
          di aver corrisposto integralmente al lavoratore beneficiario il
          trattamento chiesto in rimborso con la presente domanda;
        </li>
        <li>
          che i dati esposti nella presente domanda sono conformi alla verità ed
          alle registrazioni dei libri paga e matricola;
        </li>
        <li>
          di osservare ed applicare integralmente il vigente C.C.N.L. per gli
          operai dipendenti dalle imprese edili ed affini, unitamente agli
          accordi locali integrativi, nonché lo statuto della Cassa Edile della
          Provincia di Trento.
        </li>
      </ul>
      <div class="flex justify-between">
        <button
          class="bg-blue-800 outline-none text-white font-bold py-2 px-4 rounded inline-flex items-center"
        >
          <span>Salva documento</span>
        </button>
        <button
          class="bg-gray-400 outline-none text-white font-bold py-2 px-4 rounded inline-flex items-center"
        >
          <span>Genera pdf</span>
        </button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "NuovaPratica",
  data() {
    return {
    test: null,
     newForm: {
         
     }
    };
  },
  async mounted() {
    let response = await this.$api.get("/nuovapratica");
    console.log(response);
    this.test = response;
    //this.profile.id = response.data.id;
    //this.profile = response.data;
  },
  methods: {

  },
  computed: {},
};
</script>

<style>
ul {
  list-style-type: circle !important;
}
</style>