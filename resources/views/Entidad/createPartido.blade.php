@extends('layouts.plantilla')

@section ('content')

<section class="overflow-hidden">
    <div class="container py-2 mx-auto">
        <div class="flex flex-wrap justify-end -m-1 md:-m-2">
            <button> <a href="./">
                <i class="fa-solid fa-arrow-right-from-bracket cursor-pointer text-gray-300 text-2xl ease-in duration-300 hover:p-1 hover:rounded-lg hover:text-black hover:text-3xl active:bg-gray-300 active:rounded-md active:p-1 flex justify-end">                  
                </i></a>
            </button>
        </div>
</section>

<h1 class="text-center mt-5">Bienvenid@ a la creación de partidos. </h1>

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
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">Estado del partido</th>
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">Editar Partido</th>
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">Borrar Partido</th>
                                </tr>
            
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b">
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">1</td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">Gryffindor Junior</td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">Slytherin Junior</td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">20/05/2022</td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">17:53</td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">Pendiente</td>
                                    <td> 
                                        <button type="button" onclick="openModal('modal')">
                                            <i class="fa-solid fa-wand-sparkles cursor-pointer text-gray-300 text-2xl ease-in duration-300 hover:p-1 hover:rounded-lg hover:text-black hover:text-3xl active:bg-gray-300 active:rounded-md active:p-1 "></i> 
                                        </button>
                                        <div id="modal" class="fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full px-4">
                                            <div class="relative top-40 mx-auto shadow-lg rounded-md bg-white max-w-md">
                                            <!-- Modal header -->
                                                <div class="flex justify-between items-center bg-gray-500 text-white text-xl rounded-t-md px-4 py-2">
                                                    <h3>Edición de partido</h3>
                                                        <button onclick="closeModal()">x</button>
                                                </div>

                                                <!-- Modal body -->
                                                <form>
                                                    <div class="form-group mx-3 mb-3 xl:w-96">        
                                                        <label for="equipoLocal" class="form-label inline-block mb-2 text-gray-700">Equipo local</label>
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
                                                                <option selected>Equipos</option>
                                                                <option value="1">Gryffindor Junior</option>
                                                                <option value="2">Slytherin Junior</option>
                                                                <option value="3">Ravenclaw Junior</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group mx-3 mb-3 xl:w-96">        
                                                            <label for="equipoVisitante" class="form-label inline-block mb-2 text-gray-700">Equipo visitante</label>
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
                                                                <option selected>Equipos</option>
                                                                <option value="1">Gryffindor Junior</option>
                                                                <option value="2">Slytherin Junior</option>
                                                                <option value="3">Ravenclaw Junior</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group mx-3 mb-3 xl:w-96">
                                                            <label for="date" class="form-label inline-block mb-2 text-gray-700">Selecciona una fecha</label>
                                                            <div class="datepicker relative form-floating mb-3 xl:w-96">
                                                                <input type="date"
                                                                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                                    placeholder="Selecciona una fecha" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group mx-3 mb-3 xl:w-96">
                                                            <label for="time" class="form-label inline-block mb-2 text-gray-700">Selecciona una hora</label>
                                                            <div class="timepicker relative form-floating mb-3 xl:w-96">
                                                                <input type="time"
                                                                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                                    placeholder="Selecciona la hora" />   
                                                            </div>
                                                        </div>
                                                        <div class="form-group mx-3 mb-3 xl:w-96">        
                                                            <label for="equipoVisitante" class="form-label inline-block mb-2 text-gray-700">Estado del partido</label>
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
                                                                <option selected>Estado</option>
                                                                <option value="1">Pendiente</option>
                                                                <option value="2">Jugado</option>
                                                                <option value="3">Anulado</option>
                                                            </select>
                                                        </div>
                                                        <div class="text-sm text-gray-500 mt-1">*Ten a mano a tu muggle de confianza por si tienes dudas</div>
                                                        <div class="flex space-x-2 justify-center">
                                                            <button
                                                                name="editarPartido"
                                                                type="submit"
                                                                data-mdb-ripple="true"
                                                                data-mdb-ripple-color="light"
                                                                class="inline-block px-6 py-2.5 mb-10 bg-gray-800 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-gray-900 hover:shadow-lg focus:bg-gray-900 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-900 active:shadow-lg transition duration-150 ease-in-out">
                                                                Editar
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        <script type="text/javascript">
                                            function openModal(modalId) {
                                                modal = document.getElementById(modalId)
                                                modal.classList.remove('hidden')
                                            }

                                            function closeModal() {
                                                modal = document.getElementById('modal')
                                                modal.classList.add('hidden')
                                            }
                                        </script>
                  
                                    </td>
                                    <td> 
                                        <button type="button">
                                            <i class="fa-solid fa-trash cursor-pointer text-gray-300 text-2xl ease-in duration-300 hover:p-1 hover:rounded-lg hover:text-black hover:text-3xl active:bg-gray-300 active:rounded-md active:p-1"></i>
                                        </button> 
                                    </td>
                                </tr>
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
        <h1>NUEVO PARTIDO</h1>
        </div>
            <form>
                <div class="form-group mb-3 xl:w-96">        
                    <label for="equipoLocal" class="form-label inline-block mb-2 text-gray-700">Equipo local</label>
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
                        <option selected>Equipos</option>
                        <option value="1">Gryffindor Junior</option>
                        <option value="2">Slytherin Junior</option>
                        <option value="3">Ravenclaw Junior</option>
                    </select>
                </div>
                <div class="form-group mb-3 xl:w-96">        
                    <label for="equipoVisitante" class="form-label inline-block mb-2 text-gray-700">Equipo visitante</label>
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
                            <option selected>Equipos</option>
                            <option value="1">Gryffindor Junior</option>
                            <option value="2">Slytherin Junior</option>
                            <option value="3">Ravenclaw Junior</option>
                        </select>
                    </div>
                    <div class="form-group mb-3 xl:w-96">
                        <label for="date" class="form-label inline-block mb-2 text-gray-700">Selecciona una fecha</label>
                        <div class="datepicker relative form-floating mb-3 xl:w-96">
                            <input type="date"
                                class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            placeholder="Selecciona una fecha" />
                        </div>
                    </div>
                    <div class="form-group mb-3 xl:w-96">
                        <label for="time" class="form-label inline-block mb-2 text-gray-700">Selecciona una hora</label>
                        <div class="timepicker relative form-floating mb-3 xl:w-96">
                            <input type="time"
                            class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            placeholder="Selecciona la hora" />   
                        </div>
                    </div>
                    <div class="form-group mb-3 xl:w-96">        
                        <label for="equipoVisitante" class="form-label inline-block mb-2 text-gray-700">Estado del partido</label>
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
                                <option selected>Estado</option>
                                <option value="1">Pendiente</option>
                                <option value="2">Jugado</option>
                                <option value="3">Anulado</option>
                            </select>
                        </div>
                        <div class="text-sm text-gray-500 mt-1">*Ten a mano a tu muggle de confianza por si tienes dudas</div>
                        <div class="flex space-x-2 justify-center">
                        <button
                            name="nuevoPartido"
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
