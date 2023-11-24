<div class="btn-box d-flex p-3 gap-4 justify-content-center">
    {{-- Verifico che il $prevComic sia presente --}}
    @if ($prevComic)
    <a href="{{ route('comics.show', $prevComic->id) }}" class="btn btn-primary">Fumetto Precedente</a>
    @endif

    {{-- Verifico che il $nextComic sia presente --}}
    @if ($nextComic)
    <a href="{{ route('comics.show', $nextComic->id) }}" class="btn btn-primary">Fumetto Successivo</a>
    @endif
</div>
