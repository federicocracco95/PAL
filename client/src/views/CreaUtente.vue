<template>
  <div class="crea-utente">
    <div class="container mx-auto flex items-center text-center my-16">
      <div class="flex-1">
        <span class="text-2xl	uppercase font-bold text-black">CREA UTENTE</span>
        <div>
          <img src="../assets/proifile-user-black.svg" class="h-48">
        </div>
        <div class="my-4"> 
          <button class="bg-blue-800 outline-none text-white font-bold py-2 px-4 rounded pl-1/2"><span>Scegli foto</span></button>
        </div>
      </div>
      <div class="flex-1 mx-8">
        <div class="grid md:grid-cols-2 md:gap-2"> 
          <input type="text" name="mail" class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm" placeholder="Nome"> 
          <input type="text" name="mail" class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm" placeholder="Cognome">
        </div>
        <input type="text" name="mail" class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm " placeholder="Email">
        <input type="text" name="mail" class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm" placeholder="Password">
        <input type="text" name="mail" class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm" placeholder="Conferma Password">

        <div class="flex flex-row-reverse my-4"> 
          <button class="bg-blue-800 outline-none text-white font-bold py-2 px-4 rounded pl-1/2"><span>Salva modifiche</span></button>
          <button class="mx-4 bg-gray-400 outline-none text-white font-bold py-2 px-4 rounded pl-1/2"><span>Annulla</span></button>
        </div>
      </div>
    </div>
  </div>
</template>

<style>
img {
  display: unset !important;
}
</style>