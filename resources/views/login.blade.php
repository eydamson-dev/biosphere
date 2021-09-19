<x-layout>
  <div class="flex flex-col justify-center items-center bg-forest bg-no-repeat bg-cover bg-center min-h-screen">

    <!-- login form -->
    <div class="bg-green-900 text-green-900 p-16 rounded-xl shadow-lg bg-opacity-50 backdrop-filter backdrop-blur-sm">

      <h2 class="font-rossetti text-green-200 text-3xl font-bold mb-10">Login Account</h2>

      <form class="space-y-5" action="/login" method="POST">
        @csrf
        <div>
          <label class="block mb-1 font-bold text-pink-100">Username</label>
          <input type="text" name="username" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-pink-500" required>
          <span class="text-red-500">
            @error('username')
            {{$message}}
            @enderror
          </span>
        </div>

        <div>
          <label class="block mb-1 font-bold text-pink-100">Password</label>
          <input type="password" name="password" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-pink-500" required>
          <span class="text-red-500">
            @error('password')
            {{$message}}
            @enderror
        </div>

        <div class="p-2 w-full flex justify-around">
          <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Login
          </button>
          <a>Register</a>
        </div>

    </div>
    </form>

  </div>

  </div>
</x-layout>
