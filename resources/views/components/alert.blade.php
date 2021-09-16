@if (session()->has('success'))
<div
x-data="{show:true}"
x-init="setTimeout(() => show = false, 4000)"
x-show="show"
class="fixed bottom-0 right-0 text-white px-6 py-4 border-0 rounded mb-4 mr-4 bg-green-500">
  <span class="text-xl inline-block mr-5 align-middle">
    <i class="fas fa-bell" />
  </span>
  <span class="inline-block align-middle mr-8">
    {{session('success')}}
  </span>
  <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none">
    <span>×</span>
  </button>
</div>
@endif
