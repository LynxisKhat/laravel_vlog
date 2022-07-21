@extends("layouts.app")

@section("content")

    <div class="container">
        <div class="card mb-2">
            <div class="card-body">
                <h5 class="card-title">
                    {{ $article->title }}
                </h5>
                <div class="card-subtitle mb-2 text-muted small">
                    {{ $article->created_at->diffForHumans() }}
                </div>
                <div class="card-text">{{ $article->body }}</div>
                <form action="{{ url ("/articles/$article->id") }}" method="post">
                    @method('DELETE') 
                    @csrf
                    <a href="{{ url ("/articles") }}" class="btn btn-warning"> Back </a>
                    <button type="submit" class="btn btn-warning"> Delete </button>
                    <a href="{{ url ("/articles/$article->id/edit") }}" class="btn btn-warning"> Edit </a>
                </form>
            </div>
        </div>
    </div>

@endsection