<ul>
    @forelse ($quiz as $quizItem)
        <li>{{ $quizItem->tittle }}<br><small> {{$quizItem->description}} </small></li>
    @empty
        <li>No hay quices programados</li>
    @endforelse
</ul>