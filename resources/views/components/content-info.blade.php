<div class="flex flex-col justify-center items-center bg-forest bg-no-repeat bg-cover bg-center min-h-screen">
  <img class="mt-10" src="/img/biospherelogo.png" />

  <div class="pt-10 p-4 m-4 text-green-100 shadow-md rounded-xl flex flex-col items-center bg-green-800 bg-opacity-50 backdrop-filter backdrop-blur-sm prose-green prose-lg md:prose-xl md:px-10 md:max-w-screen-lg">
    <h2 class="font-rossetti text-green-200">{{$heading}}</h2>
    {{$slot}}
    <div class="w-full sticky bottom-0 flex flex-row-reverse">
      <img class="w-40 md:w-60 lg:w-1/4" src="/img/yam.png" />
    </div>
  </div>
</div>
