<div class="flex flex-col justify-center items-center bg-forest bg-no-repeat bg-cover bg-center min-h-screen">

  <!-- login form -->
  <div class="bg-green-900 text-green-900 p-16 rounded-xl shadow-lg bg-opacity-50 backdrop-filter backdrop-blur-sm mx-5">

    <h2 class="font-rossetti text-green-200 text-2xl font-bold mb-10 md:text-3xl text-center">Create Your Account</h2>

    <form class="space-y-5 md:w-80" wire:submit.prevent="register">
      @csrf

      @if($currentStep == 1)
        <x-register-step-1></x-register-step-1>
      @elseif ($currentStep == 2)
        <x-register-step-2></x-register-step-2>
      @elseif ($currentStep == 3)
        <x-register-step-3></x-register-step-3>
      @endif

      <div class="p-2 w-full flex justify-around">
        @if($currentStep > 1)
          <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" wire:click="previous()">
            Previous
          </button>
        @endif
        @if($currentStep >= 1 && $currentStep < $totalSteps)
          <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" wire:click="next()">
            Next
          </button>
        @endif
        @if($currentStep == $totalSteps)
          <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Submit
          </button>
        @endif
      </div>
    </form>

  </div>

</div>
