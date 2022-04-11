hello from {{ $name }}
    
@foreach ($articles as $article)
    <p>{{ $article }}</p>
@endforeach
