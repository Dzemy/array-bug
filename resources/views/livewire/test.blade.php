<div>
    <button class="btn" wire:click="addTop">Add</button>
    @foreach($array as $key => $arr)
        <div wire:key="{{ $arr["_id"] }}">
            <input class="input" wire:model.live="array.{{$key}}.name">
            <button class="btn" wire:click="moveDown({{$key}})">Down</button>
        </div>
    @endforeach
    @foreach($array as $key => $arr)
        <div>
            {{ $arr["name"]}}
        </div>
    @endforeach
</div>
