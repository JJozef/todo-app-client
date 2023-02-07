<div class="flex flex-col gap-2 w-full">
    <div class="w-full py-2 px-1">
        <h3 class="mb-2 text-base font-medium">Categorias</h3>
        <div class="flex flex-col gap-2">
            @foreach ($defaultCategories as $categorydefault)
                <span wire:model="selectedCategory"
                    class="w-full flex items-center justify-between rounded-md px-2 category-span text-sm text-black select-none task-span-title task-span-title-selected cursor-pointer bg-gray-100 hover:bg-gray-300"
                    style="transition: .3s ease-in-out;" value="{{ $categorydefault->id }}">{{ $categorydefault->name }}
                    <i class="{{ $categorydefault->icon->class }}" style="color: {{ $categorydefault->color }}"></i>
                </span>
            @endforeach
        </div>
    </div>
    <hr>
    <div class="py-2 px-2">
        <h3 class="mb-2 text-base font-medium">Tus categorias</h3>
        @if (count($userCategories))
            @foreach ($userCategories as $categoryuser)
                <span wire:model="selectedCategory"
                    class="w-full flex items-center justify-between rounded-md px-2 mb-[3.2px] category-span text-sm text-black select-none task-span-title task-span-title-selected cursor-pointer bg-gray-100 hover:bg-gray-300"
                    style="transition: .3s ease-in-out;" value="{{ $categoryuser->id }}">{{ $categoryuser->name }}
                    <i class="{{ $categoryuser->icon->class }}" style="color: {{ $categoryuser->color }}"></i>
                </span>
            @endforeach
        @else
            <h5
                class="w-full flex items-center justify-between px-2 text-sm text-black select-none cursor-not-allowed gap-2">
                Sin categorias
                <svg class="btn-menu w-[15px]" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                    <path
                        d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-5 8.5a1.5 1.5 0 1 1 3.001.001A1.5 1.5 0 0 1 7 10.5zm1.124 6.492-.248-1.984 8-1 .248 1.984-8 1zm7.369-5.006a1.494 1.494 0 1 1 .001-2.987 1.494 1.494 0 0 1-.001 2.987z">
                    </path>
                </svg>
            </h5>
        @endif
    </div>
</div>


@push('js')
    <script>
        document.querySelectorAll('.task-span-title-selected').forEach(function(span) {
            const selectcatinputwritenew = document.querySelector("#selectcatinputwritenew");
            span.addEventListener('click', (e) => {
                selectcatinputwritenew.innerHTML = e.currentTarget.innerText;
            });
        });

        const contextMenu = document.querySelectorAll('.category-span');
        let menu = null;
        let contextMenuX;
        let contextMenuY;

        document.addEventListener('contextmenu', function(event) {
            const span = event.target.closest('.category-span');
            if (!span) {
                return;
            }
            event.preventDefault();
            const spanValue = span.getAttribute("value");
            contextMenuX = event.clientX;
            contextMenuY = event.clientY;
            if (menu) {
                menu.remove();
            }
            menu = document.createElement('div');
            menu.style.position = 'fixed';
            menu.style.top = contextMenuY + 'px';
            menu.style.left = contextMenuX + 'px';
            menu.style.zIndex = '50';
            menu.innerHTML = `
                            <div class="flex flex-col gap-2 px-1 py-2 bg-white rounded-lg shadow-lg border-[1px] border-gray-100 hover:border-gray-300 context-menu-category">
                                <h1 class="text-sm text-gray-400 font-medium">Opciones</h1>

                                <div class="flex flex-col gap-2">
                                    <a class="cursor-pointer text-xs bg-gray-100 hover:bg-gray-300" onclick="EditCat(${spanValue})">Editar</a>
                                    <a class="cursor-pointer text-xs bg-gray-100 hover:bg-gray-300" onclick="delCat(${spanValue})">Eliminar</a>
                                </div>
                            </div>
                            `;
            document.body.appendChild(menu);
        });
        window.addEventListener("resize", function() {
            if (menu) {
                menu.remove();
                menu = null;
            }
        });
        document.addEventListener('click', function() {
            if (menu) {
                menu.remove();
                menu = null;
            }
        });

        function delCat($id) {
            Swal.fire({
                title: '¿Estás seguro?',
                text: "¡No podrás revertir esto!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '¡Sí, Eliminar!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emitTo('category-list', 'deleteCat', $id);
                }
            })
        }

        function EditCat($id){
            Livewire.emitTo('category-list', 'opencatedit', $id);
        }

    </script>
@endpush
