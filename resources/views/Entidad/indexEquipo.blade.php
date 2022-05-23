
@extends('layouts.plantilla')

@section ('content')


<section class="overflow-hidden">
    <div class="container py-2 mx-auto">
        <div class="flex flex-wrap justify-end -m-1 md:-m-2">
            <button> <a href="{{route('home')}}">
                <i class="fa-solid fa-arrow-right-from-bracket cursor-pointer text-gray-300 text-2xl ease-in duration-300 hover:p-1 hover:rounded-lg hover:text-black hover:text-3xl active:bg-gray-300 active:rounded-md active:p-1 flex justify-end">                  
                </i></a>
            </button>
        </div>
</section>


@foreach ($entidades as $entitat)
    @break($entitat->id == $entidad)
    @endforeach
    <p class="text-center mt-5 text-2xl">Bienvenid@ {{$entitat->Nombre}}. Esta es una vista de todos tus equipos.</p>
 


    

<section class="overflow-hidden">
    <div class="container flex flex-wrap justify-center px-5 py-2 mx-auto lg:pt-12 lg:px-32">
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8 justify-center">
                <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden ">
                        <table class="min-w-ful text-center">
                            <thead class="border-b bg-gray-800">
                                <tr>
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4"> Nombre Equipo</th>
                                    
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">Editar Equipo</th>
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">Borrar Equipo</th>
                                </tr>
            
                            </thead>
                            <tbody>
                               @foreach ($equipos as $equipo)
                                @continue($equipo->entidad_id != $entidad)
                                <tr class="bg-white border-b"> 
                                     
                                    
                                    
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"> {{$equipo->Nombre_equipo}}</td>
                                   
                                    
                                    <td> 
                                        
                                        <button type="button"><a href="{{route('entidades.editEquipo', [$entidad, $equipo])}}">
                                            <i class="fa-solid fa-wand-sparkles cursor-pointer text-gray-300 text-2xl ease-in duration-300 hover:p-1 hover:rounded-lg hover:text-black hover:text-3xl active:bg-gray-300 active:rounded-md active:p-1 "></i> 
                                        </a></button>
 
                  
                                    </td>
                                    <td>
                                        <form action="{{route('entidades.deleteEquipo', [$entidad,$equipo])}}" method="post">
       @csrf 
       @method ('delete')                                <button type="submit">
                                                <i class="fa-solid fa-trash cursor-pointer text-gray-300 text-2xl ease-in duration-300 hover:p-1 hover:rounded-lg hover:text-black hover:text-3xl active:bg-gray-300 active:rounded-md active:p-1"></i>
                                        </button> 
                                        </form>
                                    </td>
                                </tr>
                                @endforeach 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>       
        </div>       
    </div>
</section>
<section class="overflow-hidden">
    <div class="container flex flex-wrap justify-center px-5 py-2 mx-auto lg:pt-12 lg:px-32">
        <div class="flex flex-wrap justify-center -m-1 md:-m-2">
            <form action="{{route('entidades.createEquipo', $entidad)}}" method="POST">
               
                @csrf
                
                <div class="mb-3 xl:w-96">        
                    <label for="nuevoEquipo" class="form-label inline-block mb-2 text-gray-700" name="idEntidad">Introduce el nombre del nuevo equipo de {{$entitat->Nombre}}</label>
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
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        name="nuevoEquipo"
                        placeholder="Nombre"
                    />
                    <div class="text-sm text-gray-500 mt-1">*Ten a mano a tu muggle de confianza por si tienes dudas</div>
                    <div class="flex space-x-2 justify-center">
                        <button

                            type="submit"
                            data-mdb-ripple="true"
                            data-mdb-ripple-color="light"
                            class="inline-block px-6 py-2.5 bg-gray-800 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-gray-900 hover:shadow-lg focus:bg-gray-900 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-900 active:shadow-lg transition duration-150 ease-in-out">
                        Crear
                        </button>
                    </div>
                </div>
            </form>
            <div class="flex flex-wrap">
                <div class="w-full p-1 md:p-2 hover:opacity-60 transition duration-300 ease-in-out">
                    <button type="button"> <a href="{{route('entidades.indexPartido', $entidad)}}"><img class="h-40 w-50" src="escoba.png"></a></button>
                        <h5 class="text-gray-900 text-xl text-center font-medium mb-2">Calendarización y edición de partidos</h5>
                </div>
            </div>
            <div class="flex flex-wrap">
                <div class="w-full p-1 md:p-2 hover:opacity-60 transition duration-300 ease-in-out">
                    <button type="button"> <a href="{{route('entidades.indexResultado', $entidad)}}"><img class="h-40 w-50" src="bola.png"> </a></button>
                        <h5 class="text-gray-900 text-xl text-center font-medium mb-2">Ver Resultados</h5>
                </div>
            </div>
        </div>
    </div>
</section>
    
@endsection