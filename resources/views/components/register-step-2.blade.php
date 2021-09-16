<div>
  <label class="block mb-1 font-bold text-gray-500">First Name</label>
  <input type="text" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500" wire:model="first_name" wire:model="first_name">
  <span class="text-red-500">
    @error('first_name')
      {{$message}}
    @enderror
</span>
</div>

<div>
  <label class="block mb-1 font-bold text-gray-500">Last Name</label>
  <input type="text" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500" wire:model="last_name" wire:model="last_name">
  <span class="text-red-500">
    @error('last_name')
      {{$message}}
    @enderror
</div>

<div>
  <label class="block mb-1 font-bold text-gray-500">Birth Date</label>
  <input type="date" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500" wire:model="birth_date">
  <span class="text-red-500">
    @error('birth_date')
      {{$message}}
    @enderror
</div>
