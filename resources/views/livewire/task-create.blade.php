<div class="mb-7">
    @livewire('counted-user-tasks')
    <div class="w-full h-16 bg-gray-200 rounded-xl shadow flex justify-between items-center px-2 input-write-new-task">
        <form class="w-full h-full" wire:submit.prevent="saveTask">
            <input wire:model="tasktitle" id="task-input" autocomplete="off"
                class="w-full h-full max-[450px]:text-[12px] max-sm:text-[15px] input-write-new-task border-0 outline-none focus:bg-transparent bg-transparent focus:border-0 focus:outline-none focus:ring-0 px-1 input-write-new-task"
                placeholder="Escriba una nueva tarea.        para crearla." type="text" />
        </form>
        <x-dropdown width="48" align="right">
            <x-slot name="trigger">
                <div class="flex items-center gap-2 py-1 px-3 bg-white rounded-lg cursor-pointer box-select-state">
                    <div class="flex items-center gap-1 task-icon-app transition-all duration-500">
                        <svg class="btn-menu w-[15px] col-fourfive" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                            <path
                                d="M4 11h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1zm10 0h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1zM4 21h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1zm10 0h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1z">
                            </path>
                        </svg>
                        <span class="text-sm text-black select-none" id="selectcatinputwritenew" wire:ignore></span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                            <path d="M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z">
                            </path>
                        </svg>
                    </div>
                </div>
            </x-slot>
            <x-slot name="content">
                @livewire('category-list')
            </x-slot>
        </x-dropdown>
    </div>
    <div>
        <x-input-error for="tasktitle" />
    </div>
</div>
@push('js')
    <script>
        document.querySelectorAll('.category-span').forEach(function(span) {
            span.addEventListener('click', function() {
                const value = this.getAttribute('value');
                window.livewire.find('{{ $this->id }}').set('selectedCategory', value);
            });
        });

        const taskInput = document.getElementById("task-input");
        taskInput.addEventListener("keyup", function(event) {
            if (event.keyCode === 13) {
                const selectcatinputwritenew = document.querySelector("#selectcatinputwritenew");
                livewire.emit('saveTask');
                selectcatinputwritenew.innerHTML = '';
            }
        });
    </script>
@endpush
