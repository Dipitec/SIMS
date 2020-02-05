<ul style="font-family: 'Lucida Console', monospace, sans-serif;list-style: none;">
    @foreach($data as $dataItem)
    <li>{{$dataItem->userType->id}}</li>
    @endforeach
</ul>