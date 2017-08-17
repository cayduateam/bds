@foreach($category as $parent)
    @if(isset($parent['sub']))
    <optgroup label="{{$parent['name']}}">
        @foreach($parent['sub'] as $id => $sub)
            <option value="{{$id}}">{{$sub['name']}}</option>
        @endforeach
    </optgroup>
    @endif
@endforeach