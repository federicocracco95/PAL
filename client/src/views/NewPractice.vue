<template>
    <div class="newpractive m-4">
        <div class="flex justify-center">
            <h1 class="text-3xl m-4 uppercase">Nuova Pratica </h1>
        </div>
        <div class="flex justify-center">    
            <div class="relative inline-flex m-4">
                <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"><path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero"/></svg>
                <select class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
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
                <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"><path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero"/></svg>
                <select class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
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

        <div class="flex justify-center">
            <h3 class="uppercase font-bold">Modulo denuncia - richiesta rimborso malattia/infortunio</h3>
        </div>

        <div class="container mx-auto px-10">
            <div class="grid md:grid-cols-2 md:gap-2"> 
                <input type="text" name="mail" class="border rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm" placeholder="Ditta"> 
                <input type="text" name="mail" class="border rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm" placeholder="Codice C.E.">
                <input type="text" name="mail" class="border rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm" placeholder="Al Signor"> 
                <input type="text" name="mail" class="border rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm" placeholder="Nato il"> 
                <input type="text" name="mail" class="border rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm" placeholder="Residente a">
                <input type="text" name="mail" class="border rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm" placeholder="Prov."> 
                <input type="text" name="mail" class="border rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm" placeholder="Cap">
                <input type="text" name="mail" class="border rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm" placeholder="Qualifica">
                <input type="text" name="mail" class="border rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm" placeholder="Paga oraria"> 
                <input type="text" name="mail" class="border rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm" placeholder="Data assunzione"> 
            </div>
            <div class="flex">
                <div class="flex-1 my-4">
                    <span class="text-gray-700 mr-4 my-4">Incidente extraprofessionale</span>
                    <label class="inline-flex items-center">
                        <input type="radio" class="form-radio" name="accountType" value="si">
                        <span class="ml-2">Si</span>
                    </label>
                    <label class="inline-flex items-center ml-6">
                        <input type="radio" class="form-radio" name="accountType" value="no">
                        <span class="ml-2">No</span>
                    </label>
                </div>
                <div class="flex-1 my-4">
                    <span class="text-gray-700 mx-2 my-4">Incidente stradale</span>
                    <label class="inline-flex items-center">
                        <input type="radio" class="form-radio" name="accountType" value="si">
                        <span class="ml-2">Si</span>
                    </label>
                    <label class="inline-flex items-center ml-6">
                        <input type="radio" class="form-radio" name="accountType" value="no">
                        <span class="ml-2">No</span>
                    </label>
                </div>
            </div>
            <input type="text" name="mail" class="border rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm" placeholder="Trimestre di riferimento"> 
            <div class="grid md:grid-cols-2 md:gap-2"> 
                <input type="text" name="mail" class="border rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm" placeholder="Ore ordinarie di lavoro"> 
                <input type="text" name="mail" class="border rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm" placeholder="Ore di malattia/infortunio">
                <input type="text" name="mail" class="border rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm" placeholder="Ore di C.I.G."> 
                <input type="text" name="mail" class="border rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm" placeholder="Ore per ferie e permessi retribuiti"> 
                <input type="text" name="mail" class="border rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm" placeholder="Altre retribuite">
                <input type="text" name="mail" class="border rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm" placeholder="Totale ore trimestre">
            </div>
            <input type="text" name="mail" class="border rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm" placeholder="Orario settimanale applicato nel periodo denunciato: ore">
        </div>
    </div>
</template>

<script>
export default {
  name: 'NewPractice',
  props: {
  }
}
</script>
