@props(['dataname' => null,'dataid' => null,'sponclick'=> null])

<span
    class="select-content-me-option optionssearchme flex items-center py-[0.875rem] px-6 hover:bg-gray-400 transition-colors duration-300 cursor-pointer" {{$dataname}}="{{$dataid}}" {{$sponclick}}>
    <div class="option-select-me w-full flex items-center justify-between gap-2">
        {{$icon}}
        <div class="option-select-me-text">
            <h1 class="text-sm text-black title-option-select-me">{{$title}}</h1>
        </div>
    </div>
</span>
