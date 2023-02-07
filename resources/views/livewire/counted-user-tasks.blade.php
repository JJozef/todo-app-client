<div class="mb-3">
    @if ($totalTasks != 0)
        <h2 class="text-sm text-gray-500 font-ligh">Tienes <span
                class="task-icon task-count-color font-semibold">{{ $totalTasks }}</span>
            @if ($totalTasks == 1)
                tarea pendiente.
            @else
                tareas pendientes.
            @endif 
        </h2>
    @else
        <h2 class="text-sm text-gray-500 font-ligh max-sm:text-xs">No tienes tareas pendientes 😉</h2>
    @endif
</div>
