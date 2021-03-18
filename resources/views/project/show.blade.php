@section('title')
 Mostrar proyectos   
@endsection
@section('body')
    <ul>
        @foreach ($projectos as $proyecto)
            {{$projectos}}        
        @endforeach    
    </ul>
@endsection