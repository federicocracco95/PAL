<template>
  <div class="login bg-random">
    <div class="min-w-screen min-h-screen bg-random flex items-center justify-center px-5 py-5">
      <div class="container mx-auto">
        <div class="bg-gray-300 rounded-lg p-4 max-w-md my-10">
          <div>
            <div class="text-center">
                <h1 class="my-2 text-3xl font-semibold text-blue-900 dark:text-gray-200">Accedi al portale</h1>
            </div>
            <div class="m-7">
                <form action="">
                    <div class="mb-6">
                        <input type="email" name="email" id="email" placeholder="username" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                    </div>
                    <div class="mb-6">
                        <input type="password" name="password" id="password" placeholder="Password" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                    </div>
                    <div class="mb-6">
                        <button type="button" class="w-full rounded-full px-3 py-4 text-white bg-blue-900 rounded-md focus:bg-indigo-600 focus:outline-none">Accedi</button>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>

export default {
  name: 'Login',
  components: {
    
  }
}
</script>

<style>
.bg-random {
    background-image: url(../assets/background-login-cover.jpg);
    background-size: cover;
    background-position: center;
}
</style>