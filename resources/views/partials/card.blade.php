
<div>
    <div class="row">
        
            @foreach ($comics as $comic)
            <div class="col-3">
                <ul>
                    <li><h3 class="w-50 fw-bold text-primary">{{$comic['title']}}</h3></li>
                    <li><img class="w-25" src="{{$comic['thumb']}}" alt=""></li>
                    {{-- <li>Descrizione:{{$comic['description']}}</li> --}}
                    <li class="text-success fw-bold">Price: {{$comic['price']}}</li>
                    <li>{{$comic['series']}}</li>
                    <li>{{$comic['sale_date']}}</li>
                    <li>{{$comic['type']}}</li>
                </ul>
            </div>
            @endforeach
        
    </div>
</div>