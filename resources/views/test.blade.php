<?php $name = 'ahmed';?>
<?php $articles = ['laravel', 'php', 'js'];?>

hello from {{ $name }}
    
@foreach ($articles as $article)
    <p>{{ $article }}</p>
@endforeach
