<template>
    <div class="container">
        <link rel="stylesheet" 
        href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" 
        integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" 
        crossorigin="anonymous">
        <div class="flex flex-row items-stretch align-middle py-2  ">
            <div class="py-4 box-border h-1/2 w-1/2  justify-center align-middle">
            <div class="row flex justify-center align-middle">
                <p class="text-center font-bold text-blue-700 text-2xl">MODIFICA PROFILO </p>
            </div>
             <div class="flex justify-center align-middle  py-6 ">
                   <img src="../assets/proifile-user-black.svg" class="w-32 h-32">
             </div>
            </div>


            <div class="py-4 box-border h-1/2 w-1/2 ">
                <div class=" md:gap-2"> 
                    <input type="text" name="mail" class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm" placeholder="Nome"> 
                    <input type="text" name="mail" class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm" placeholder="Cognome">
                    <div class="flex flex-row ">
                        <input type="text" name="mail" class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm " placeholder="nome.cognome@gmail.com  "> <i class="fas fa-pencil-alt self-center pl-2"></i>
                    </div>
                    <div class="flex flex-row ">
                        <input type="text" name="mail" class="border shadow-sm rounded h-10 w-full focus:outline-none focus:border-blue-800 px-2 mt-2 text-sm" placeholder="Password"> <i class="fas fa-pencil-alt self-center pl-2"></i>
                    </div>

                </div>
            </div>
            
       
           
        </div>
         <div class="flex justify-center"> 
             <button class="bg-blue-800 outline-none text-white font-bold py-2 px-4 rounded pl-1/2"><span>Salva modifiche</span></button>
         </div>
             
                    

    </div>
</template>

<script>
export default {
  name: 'Profilo',
  components: {
  }
}
</script>