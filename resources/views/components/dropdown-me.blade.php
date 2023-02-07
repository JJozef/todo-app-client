<div class="w-full">
    <div class="select-container-me relative">
        <div class="select-content-me relative flex justify-between items-center bg-white-i border-[1px] border-gray-300 text-[0.875rem] focus:bg-white focus:outline-0 focus:border-gray-300 focus:ring-0 rounded-lg shadow-sm py-[0.875rem] px-6 w-full cursor-pointer transition-all duration-300"
            id="select-content-me" wire:ignore>
            <div class="container-content-select">
                <h1 class="text-sm text-gray-500">Selecciona opcion</h1>
            </div>
            <i class="fa-solid fa-chevron-down"></i>
        </div>

        <div class="select-content-me-options max-h-40 w-full flex-col mt-2 bg-white rounded-lg shadow overflow-auto absolute z-[100] border-[1px] border-gray-300 transition-all duration-400 hidden header-modal-animation"
            id="select-content-me-options">
            <div class="w-full mb-2 border-[1px] header-modal-animation border-gray-300 rounded-lg">
                <input
                    class="w-full border-0 border-b-2 border-transparent outline-0 text-sm text-gray-500 focus:outline-0 focus:border-gray-400 focus:ring-0 bg-white-i"
                    type="text" placeholder="Buscar.." id="inputsearchselectme" />
            </div>
            <div class="flex flex-col" id="containerspanselectme">
                {{ $content }}
            </div>
        </div>
        {{ $inputhidden }}
    </div>
</div>


@push('js')
    <script>
        const selectcontainerme = document.querySelector("#select-content-me");
        const selectcontainermeoptions = document.querySelector("#select-content-me-options");
        const selectcontainermecontent = document.querySelector("#select-content-me .container-content-select");
        const iselectoptionme = document.querySelector("#inputselectoptionme");

        document.querySelectorAll("#containerspanselectme > .optionssearchme").forEach(optionselected => {
            optionselected.addEventListener("click", (e) => {
                e.preventDefault()
                selectcontainermecontent.innerHTML = e.currentTarget.innerHTML;
                selectcontainermeoptions.classList.toggle("select-content-me-options-active");
                iselectoptionme.value = e.currentTarget.getAttribute('data-catid');
            })
        });

        if (selectcontainerme) {
            selectcontainerme.addEventListener("click", () => {
                selectcontainermeoptions.classList.toggle("select-content-me-options-active");
            });
        }
        livewire.on('resetinputselectoptionme', function() {
            selectcontainermecontent.innerHTML = '<h1 class="text-sm text-gray-500">Selecciona opcion</h1>';
            selectcontainermeoptions.classList.remove("select-content-me-options-active");
            iselectoptionme.value = '';
        });

        $("#inputsearchselectme").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $(".optionssearchme").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });

            if ($('.optionssearchme:visible').length === 1) {
                $('.optionssearchme:visible').siblings().hide();
            }
        });
    </script>
@endpush
