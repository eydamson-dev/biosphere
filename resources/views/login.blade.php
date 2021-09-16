<x-layout>
  <div class="min-h-screen flex items-center justify-center bg-blue-400 px-9">

    <!-- login form -->
    <div class="bg-white p-16 rounded shadow-2xl">

      <h2 class="text-3xl font-bold mb-10 text-gray-800">Login Account</h2>

      <form class="space-y-5" action="/login" method="POST">
        @csrf
        <div>
          <label class="block mb-1 font-bold text-gray-500">Username</label>
          <input type="text" name="username" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500" required>
          <span class="text-red-500">
            @error('username')
            {{$message}}
            @enderror
          </span>
        </div>

        <div>
          <label class="block mb-1 font-bold text-gray-500">Password</label>
          <input type="password" name="password" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500" required>
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
