
@extends('layouts.plantilla')

@section ('content')
<section class="overflow-hidden text-gray-700 ">
  <div class="container px-5 py-2 mx-auto lg:pt-12 lg:px-32">
    <div class="flex flex-wrap -m-1 md:-m-2">
      <div class="flex flex-wrap w-1/4">
        <div class="w-full p-1 md:p-2 hover:opacity-60 transition duration-300 ease-in-out">
            <a href="{{route('home')}}"></a>


            <button type="button"> <a href="{{route('entidades.indexEquipo', ['entidad'=>'1'])}}"><img src="gryffindor.png"></a> </button>
        </div>
      </div>
      <div class="flex flex-wrap w-1/4">
        <div class="w-full p-1 md:p-2 hover:opacity-60 transition duration-300 ease-in-out">
            <button type="button"> <a href="{{route('entidades.indexEquipo', ['entidad'=>'2'])}}"><img src="hufflepuff.png"></a></button>
        </div>
      </div>
      <div class="flex flex-wrap w-1/4">
        <div class="w-full p-1 md:p-2 hover:opacity-60 transition duration-300 ease-in-out">
          <button type="button"> <a href="{{route('entidades.indexEquipo', ['entidad'=>'3'])}}"><img src="ravenclaw.png"></a></button>
        </div>
      </div>
      <div class="flex flex-wrap w-1/4">
        <div class="w-full p-1 md:p-2 hover:opacity-60 transition duration-300 ease-in-out">
            <button type="button"> <a href="{{route('entidades.indexEquipo', ['entidad'=>'4'])}}"><img src="slytherin.png"></a></button>
            
      </div>
    </div>
  </div>
</section>
@endsection