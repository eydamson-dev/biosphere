<x-layout>
  <x-content-info>
    <x-slot name="heading">{{$content->heading}}</x-slot>
    {!! $content->body !!}
  </x-content-info>
</x-layout>
