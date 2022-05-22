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
</section>

<h1 class="text-center mt-5">Bienvenid@ a la creación de resultados. </h1>

<section class="overflow-hidden">
    <div class="container flex flex-wrap justify-center px-5 py-2 mx-auto lg:pt-12 lg:px-32">
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8 justify-center">
                <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden ">
                        <table class="min-w-ful text-center">
                            <thead class="border-b bg-gray-800">
                                <tr>
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">Código del partido</th>
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">Nombre Equipo Local</th>
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">Nombre Equipo Visitante</th>
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">Fecha</th>
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">Hora</th>
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">Resultado Equipo Local</th>
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">Resultado Equipo Visitante</th>
                                    
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">Editar Resultado</th>
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">Borrar Resultado</th>
                                </tr>
            
                            </thead>
                            <tbody>
                                @foreach ($resultados as $resultado)
                                <tr class="bg-white border-b">
                                    
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{$resultado->id}}</td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">Gryffindor Junior</td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">Slytherin Junior</td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">10/05/2022</td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">12:05</td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{$resultado->Resultado_equipo_local}}</td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{$resultado->Resultado_equipo_visitante}}</td>
                                    <td> 
                                        <button type="button"><a href="{{route('entidades.editResultado', [$entidad, $resultado])}}">
                                            
                                            <i class="fa-solid fa-wand-sparkles cursor-pointer text-gray-300 text-2xl ease-in duration-300 hover:p-1 hover:rounded-lg hover:text-black hover:text-3xl active:bg-gray-300 active:rounded-md active:p-1 "></i> 
                                            </a>  </button>
                                        
                  
                                    </td>
                                    <td> 
                                        <form action ="{{route('entidades.deleteResultado', [$entidad,$resultado])}}" method="post">
                           @csrf 
       @method ('delete')                         
                                        <button type="submit">
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
    <div class="container flex flex-wrap justify-center px-5 py-2 mx-auto mb-10 lg:pt-12 lg:px-32 block p-6 rounded-lg shadow-lg bg-white max-w-sm">
        <div>
        <h1>NUEVO RESULTADO</h1>
        </div>
            <form action="{{route('entidades.createResultado', $entidad)}}" method="POST">
            @csrf
                <div class="form-group mb-3 xl:w-96">        
                    <label for="codigoPartido" class="form-label inline-block mb-2 text-gray-700">Código del Partido</label>
                        <select class="form-select appearance-none
                            block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding bg-no-repeat
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
                        <option selected>Código</option>
                        @foreach ($partidos as $partido)
                        @continue($partido->entidad_id != $entidad)
                        <option value="{{$partido->id}}">{{$partido->id}}</option>

                        @endforeach
                    </select>
                </div>
                <div class="form mx-3 mb-3 xl:w-96">
                    <label for="nuevoResultadoLocal" class="form-label inline-block mb-2 text-gray-700">Introduce el resultado del equipo local</label>
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
                                                            name="nuevoResultadoLocal"
                                                            placeholder="Resultado"
                                                        />
                                                    </div>
                                <div class="form mx-3 mb-3 xl:w-96">
                    <label for="nuevoResultadoVisitante" class="form-label inline-block mb-2 text-gray-700">Introduce el resultado del equipo visitante</label>
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
                                                            name="nuevoResultadoVisitante"
                                                            placeholder="Resultado"
                                                        />
                                                    </div>
                
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
            </form>
        </div>
</section>
@endsection