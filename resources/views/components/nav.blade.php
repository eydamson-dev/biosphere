<nav class="bg-white shadow-lg flex flex-col">
		<div class="mx-auto px-4">
			<div class="flex justify-between">
				<div class="flex space-x-7">
					<!-- Website Logo -->
					<div>
						<a href="/" class="flex items-center py-4 px-2">
							<span class="font-semibold text-gray-500 text-lg">Biosphere</span>
						</a>
					</div>
					<!-- Primary Navbar items -->
					<div class="hidden md:flex items-center space-x-1">
						<a
							href="/home"
							class="py-4 px-2 text-green-500 border-b-4 border-green-500 font-semibold "
							>Home</a>
						<a
							href="/game-1"
							class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300"
							>Game Play 1</a>
						<a
							href="game-2"
							class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300"
							>Game Play 2</a>

            @guest
              <a
                href="login"
                class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300"
                >Login</a>
              <a
                href="/register"
                class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300"
                >Register</a>
            @endguest

            @auth
              <span class="pl-6 text-gray-500 text-base font-bold">Hi <a href="/dashboard">{{auth()->user()->first_name}}</a></span>
              <a
                href="/logout"
                class="py-4 px-2 text-xs text-gray-500 hover:text-green-500 transition duration-300"
                >Log out</a>
            @endauth
					</div>
				</div>
			</div>
		</div>
	</nav>
