<div>
  <label class="block mb-1 font-bold text-gray-500">Phone Number (+63 9xx-xxxx)</label>
  <input type="text" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500" wire:model="phone_number">
  <span class="text-red-500">
    @error('phone_number')
      {{$message}}
    @enderror
  </span>
</div>

<div>
  <label class="block mb-1 font-bold text-gray-500">Email Address</label>
  <input type="email" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500" wire:model="email">
  <span class="text-red-500">
    @error('email')
      {{$message}}
    @enderror
</div>

<div>
  <label class="block mb-1 font-bold text-gray-500">Bitcoin Wallet</label>
  <input type="text" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500" wire:model="bitcoin_wallet">
  <span class="text-red-500">
    @error('bitcoin_wallet')
      {{$message}}
    @enderror
</div>

<div>
  <label class="block mb-1 font-bold text-gray-500">Username of the person that refer this game to you</label>
  <input type="text" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500" wire:model="referral_name">
  <span class="text-red-500">
    @error('referral_name')
      {{$message}}
    @enderror
  </span>
</div>
