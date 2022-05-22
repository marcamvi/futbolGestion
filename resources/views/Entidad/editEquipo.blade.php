
@extends('layouts.plantilla')

@section ('content')


<section class="overflow-hidden">
    <div class="container py-2 mx-auto">
        <div class="flex flex-wrap justify-end -m-1 md:-m-2">
            <button> <a href="{{route('entidades.indexEquipo', $entidad)}}">
                    <i class="fa-solid fa-arrow-right-from-bracket cursor-pointer text-gray-300 text-2xl ease-in duration-300 hover:p-1 hover:rounded-lg hover:text-black hover:text-3xl active:bg-gray-300 active:rounded-md active:p-1 flex justify-end">                  
                    </i></a>
            </button>
        </div>
    </div>    
</section>
<section class="overflow-hidden">
    <div class="container flex flex-wrap justify-center px-5 py-2 mx-auto lg:pt-12 lg:px-32">
        <div class="flex flex-wrap justify-center -m-1 md:-m-2">
            <form action="{{route('entidades.updateEquipo', [$entidad,$equipo])}}" method="post">
                @csrf
                @method('put')                                     
                <div class="form mx-3 mb-3 xl:w-96">
                    <label for="editarEquipo" class="form-label inline-block mb-2 text-gray-700">Introduce el nombre nuevo del equipo</label>
                    <input
                        type="text"
                        class="
                            form-control
                            block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700
                            focus:bg-white
                            focus:border-blue-600
                            focus:outline-none"
                        name="editarEquipo"
                        placeholder="Nombre"
                        value="{{$equipo->Nombre_equipo}}"
                        />
                    <div class="text-sm text-gray-500 mt-1">*Ten a mano a tu muggle de confianza por si tienes dudas</div>
                    <div class="flex space-x-2 justify-center">
                        <button

                            type="submit"
                            data-mdb-ripple="true"
                            data-mdb-ripple-color="light"
                            class="inline-block px-6 py-2.5 bg-gray-800 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-gray-900 hover:shadow-lg focus:bg-gray-900 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-900 active:shadow-lg transition duration-150 ease-in-out">Guardar</button>
                    </div>
                </div>    
            </form>
        </div>
    </div>
</section>

@endsection