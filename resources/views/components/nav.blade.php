<nav class="bg-white shadow-lg">
  <div x-data="{ show: false, active: 'home'}" class="flex flex-col justify-between w-full items-stretch md:flex-row md:max-w-screen-lg  mx-auto px-3">
    <div class="flex justify-between items-center">
      <a href="/" class="flex items-center py-4 px-2">
        <span class="font-rossetti font-bold text-2xl {{request()->is('/') ? 'text-green-500' : 'text-gray-500'}}">Biosphere</span>
      </a>

      <div class="md:hidden flex items-center">
        <button @click="show=!show" class="w-7 flex items-center">
          <img src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjM4NHB0IiB2aWV3Qm94PSIwIC01MyAzODQgMzg0IiB3aWR0aD0iMzg0cHQiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0ibTM2OCAxNTQuNjY3OTY5aC0zNTJjLTguODMyMDMxIDAtMTYtNy4xNjc5NjktMTYtMTZzNy4xNjc5NjktMTYgMTYtMTZoMzUyYzguODMyMDMxIDAgMTYgNy4xNjc5NjkgMTYgMTZzLTcuMTY3OTY5IDE2LTE2IDE2em0wIDAiLz48cGF0aCBkPSJtMzY4IDMyaC0zNTJjLTguODMyMDMxIDAtMTYtNy4xNjc5NjktMTYtMTZzNy4xNjc5NjktMTYgMTYtMTZoMzUyYzguODMyMDMxIDAgMTYgNy4xNjc5NjkgMTYgMTZzLTcuMTY3OTY5IDE2LTE2IDE2em0wIDAiLz48cGF0aCBkPSJtMzY4IDI3Ny4zMzIwMzFoLTM1MmMtOC44MzIwMzEgMC0xNi03LjE2Nzk2OS0xNi0xNnM3LjE2Nzk2OS0xNiAxNi0xNmgzNTJjOC44MzIwMzEgMCAxNiA3LjE2Nzk2OSAxNiAxNnMtNy4xNjc5NjkgMTYtMTYgMTZ6bTAgMCIvPjwvc3ZnPg==" />
        </button>
      </div>
    </div>

    <div :class="show ? 'show' : 'hidden'" class="flex flex-col items-stretch md:mt-6 md:items-center md:block md:flex-row">
      <a href="/home" class="py-4 px-2 border-green-500 hover:text-green-500 hover:border-b-4 font-semibold {{request()->is('home') ? 'border-b-4 text-green-500':'text-gray-500'}}">Home</a>
      <a href="/game-1" class="py-4 px-2 border-green-500 font-semibold hover:text-green-500 transition duration-300 {{request()->is('game-1') ? 'border-b-4 text-green-500':'text-gray-500'}}">Game Play 1</a>
      <a href="game-2" class="py-4 px-2 border-green-500 font-semibold hover:text-green-500 transition duration-300 {{request()->is('game-2') ? 'border-b-4 text-green-500':'text-gray-500'}}">Game Play 2</a>

      @guest
      <a href="login" class="py-4 px-2 border-green-500 font-semibold hover:text-green-500 transition duration-300 {{request()->is('login') ? 'border-b-4 text-green-500':'text-gray-500'}}">Login</a>
      <a href="/register" class="py-4 border-green-500 px-2 font-semibold hover:text-green-500 transition duration-300 {{request()->is('register') ? 'border-b-4 text-green-500':'text-gray-500'}}">Register</a>
      @endguest

      @auth
      <span class="pl-6 text-gray-500 text-base font-bold">Hi <a href="/dashboard">{{auth()->user()->first_name}}</a></span>
      <a href="/logout" class="py-4 px-2 text-xs text-gray-500 hover:text-green-500 transition duration-300">Log out</a>
      @endauth
    </div>

  </div>
</nav>
