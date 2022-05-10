@extends('layouts.plantilla')

@section ('content')
<section class="overflow-hidden text-gray-700 ">
  <div class="container px-5 py-2 mx-auto lg:pt-12 lg:px-32">
    <div class="flex flex-wrap -m-1 md:-m-2">
      <div class="flex flex-wrap w-1/4">
        <div class="w-full p-1 md:p-2 hover:opacity-60 transition duration-300 ease-in-out">
            <button type="button"> <a href="Gryffindor"><img src="gryffindor.png"></a></button>
        </div>
      </div>
      <div class="flex flex-wrap w-1/4">
        <div class="w-full p-1 md:p-2 hover:opacity-60 transition duration-300 ease-in-out">
            <button type="button"> <a href="Hufflepuff"><img src="hufflepuff.png"></a></button>
        </div>
      </div>
      <div class="flex flex-wrap w-1/4">
        <div class="w-full p-1 md:p-2 hover:opacity-60 transition duration-300 ease-in-out">
          <button type="button"> <a href="Ravenclaw"><img src="ravenclaw.png"></a></button>
        </div>
      </div>
      <div class="flex flex-wrap w-1/4">
        <div class="w-full p-1 md:p-2 hover:opacity-60 transition duration-300 ease-in-out">
            <button type="button"> <a href="Slytherin"><img src="slytherin.png"></a></button>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection