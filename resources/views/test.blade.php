@if($itemCount = count($items))
    <p>{{ $itemCount }} 개</p>
@else 
    <p>비어 있다.</p>
@endif

<ul>
    @foreach($items as $item)
        <li> {{ $item }} </li>
    @endforeach
</ul>