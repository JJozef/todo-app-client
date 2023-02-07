@section('title', 'To-do List | ' . auth()->user()->name)
<div class="w-full h-full flex flex-col justify-between">
    <div>
        @foreach ($tasks as $task)
            <article
                class="w-full py-4 px-6 bg-white rounded-xl shadow grid grid-cols-article-app-task gap-[0.875rem] items-center mb-2 container-task-input container-task-animation">
                <input
                    class="p-[.56rem] rounded-md border-gray-300 text-cyan-500 shadow-sm focus:border-cyan-500 focus:ring focus:ring-cyan-500 focus:ring-opacity-50 cursor-pointer checkbox-task-input"
                    type="checkbox" wire:click="$emit('deleteFunct', {{ $task->id }})" />

                <div class="container-title-task">
                    <span
                        class="max-[450px]:text-[12px] text-[15px] text-black select-none task-span-title break-all">{{ $task->title }}</span>
                    <input
                        class="w-full h-1 max-[450px]:text-[12px] text-[15px] px-0 py-[12px] border-0 outline-none focus:bg-transparent bg-transparent focus:border-0 focus:outline-none focus:ring-0 hidden input-edit-task underline"
                        type="text" value="{{ $task->title }}" data-tasktoedit="{{ $task->id }}"/>
                </div>
                <div>
                    @if ($task->category && $task->category->icon)
                        <i
                            class="text-gray-400 col-fourfive transition-colors duration-500 task-icon-app {{ $task->category->icon->class }}"></i>
                    @endif
                </div>
            </article>
        @endforeach
    </div>
    <div class="links-span-animation">
        {{ $tasks->links() }}
    </div>

    @push('js')
        <script>
            document.addEventListener("click", function(event) {
                if (!event.target.matches(".checkbox-task-input")) return;
                const containerTask = event.target.closest(".container-task-input");
                const taskSpan = containerTask.querySelector(".task-span-title");
                taskSpan.classList.add("bg-c-span");
                window.livewire.emit('deleteFunct', event.target.getAttribute('data-task-id'));
            });

            window.livewire.on('deleteFunct', function(taskId) {
                setTimeout(() => {
                    livewire.emit('deleteTask', taskId);
                }, 500);
            });


            document.addEventListener("dblclick", function(event) {
                if (!event.target.matches(".container-title-task")) return;
                const tasktoedit = event.target.closest(".container-title-task");
                const inputselectedtoshow = tasktoedit.querySelector(".input-edit-task");
                const spanselectedtoedit = tasktoedit.querySelector(".task-span-title");

                inputselectedtoshow.style.display = "block";
                inputselectedtoshow.focus();
                inputselectedtoshow.selectionStart = inputselectedtoshow.value.length;
                spanselectedtoedit.style.display = "none";
            });

            document.addEventListener("keydown", function(event) {
                if (!event.target.matches(".input-edit-task")) return;
                if (event.key === "Enter") {
                    const taskId = event.target.getAttribute('data-tasktoedit');
                    const taskTitle = event.target.value;
                    livewire.emit('updateTask', taskId, taskTitle);
                }
            });
        </script>
    @endpush

</div>
