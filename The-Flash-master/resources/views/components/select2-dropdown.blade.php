<select name="{{$name}}" class="custom-select select2">
    @foreach ($options as $option)
        <option value="{{$option->id}}">{{$option[$nameColumn]}}</option>
    @endforeach
</select>