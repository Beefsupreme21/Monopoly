@props(['property'])

<div class="ml-24 border-2 border-black w-[160px] h-[260px] test relative ">
    <div class="border-b-2 border-black bg-{{$property->color}}-600 text-center text-white h-[45px]"></div>
    <div class="flex-col justify-between text-center items-center">
        <div class="pt-4">
            <div>{{$property->name}}</div>
        </div>
        <div class="absolute bottom-4 left-0 right-0 text-center">
            <div>PRICE <s>M</s>{{$property->cost}}</div>
        </div>
    </div>
</div>