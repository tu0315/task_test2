{{$hoge}}<br>

@foreach($values as $value)
    {{ $value->id }} <br>
    {{ $value->text }} <br>
@endforeach

@if($hoge == "hogeee")
    ほげ
@endif