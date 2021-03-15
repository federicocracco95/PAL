<template>
    <div>
        <link rel="stylesheet" 
        href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" 
        integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" 
        crossorigin="anonymous">
        <div class="flex flex-row items-stretch   ">
            <div class="py-4 box-border h-1/2 w-1/2  p-4 ">
            <p class="text-center font-bold text-blue-700">MODIFICA PROFILO </p>
             <div class="self-center ">
                   <i class="fas fa-user-circle h-30"></i>
             </div>
            </div>


            <div class="py-4 box-border h-1/2 w-1/2 p-4 ">
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
         <div class="object-center"> 
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