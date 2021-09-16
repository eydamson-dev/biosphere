<div class="min-h-screen flex items-center justify-center bg-blue-400 px-9">

  <!-- login form -->
  <div class="bg-white p-16 rounded shadow-2xl">

    <h2 class="text-3xl font-bold mb-10 text-gray-800">Create Your Account</h2>

    <form class="space-y-5" wire:submit.prevent="register">
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
