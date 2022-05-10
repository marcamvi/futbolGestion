@extends('layouts.plantilla')

@section ('content')

    <h1>Bienvenid@ <?php echo $entidad; ?>. Esta es una vista de todos tus equipos. Selecciona el equipo a gestionar</h1>
    
    <div class="flex flex-col">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <table class="min-w-full text-center">
          <thead class="border-b bg-gray-800">
            <tr>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                Nombre Equipo
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                Partidos Pendientes
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
              Victorias
              </th>    
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                Derrotas
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                Editar Equipo
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                Borrar Equipo
              </th>
            </tr>
            
          </thead>
          <tbody>
            <tr class="bg-white border-b">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                Mark
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                Otto
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                @mdo
              </td>
            </tr class="bg-white border-b">
            <tr class="bg-white border-b">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">2</td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                Jacob
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                Thornton
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                @fat
              </td>
            </tr>
            <tr class="bg-white border-b">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">3</td>
              <td colspan="2" class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center">
                Larry the Bird
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                @twitter
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection