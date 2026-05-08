<x-layouts.app>
    <h1>Listado de Tareas</h1>
<br>


<div class="relative overflow-x-auto bg-neutral-primary-soft shadow-xs rounded-base border border-default">
    <table class="w-full text-sm text-left rtl:text-right text-body">
        <thead class="text-sm text-body bg-neutral-secondary-medium border-b border-default-medium">
            <tr>
                <th scope="col" class="px-6 py-3 font-medium">
                    Titulo de la tarea
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                    <div class="flex items-center">
                        Descripción
                        <a href="#">
                            <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/></svg>
                        </a>
                    </div>
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                    <div class="flex items-center">
                        ¿Completada?
                        <a href="#">
                            <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/></svg>
                        </a>
                    </div>
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                    <span class="sr-only">Acciones</span>
                </th>
            </tr>
        </thead>
        <tbody>
    @foreach ($todos as $todos)
        <tr class="bg-neutral-primary-soft border-b border-default">
            <th scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
                {{ $todos->title }}
            </th>

            <td class="px-6 py-4">
                {{ $todos->description }}
            </td>

            <td class="px-6 py-4">
                @if ($todos->completed)
                    <span class="text-green-500 font-semibold">Sí</span>
                @else
                    <span class="text-red-500 font-semibold">No</span>
                @endif
            </td>
            <td>
                    {{-- <a href="#" class="font-medium text-fg-brand hover:underline">Edit</a> --}}
                    <button class="bg-blue-500 hover:bg-blue-700 text-heading font-bold py-2 px-4 rounded-full">Editar</button>
                    <button class="bg-red-500 hover:bg-red-700 text-heading font-bold py-2 px-4 rounded-full">Eliminar</button>
            </td>
        </tr>
    @endforeach
</tbody>
    </table>
</div>

</x-layouts.app>
