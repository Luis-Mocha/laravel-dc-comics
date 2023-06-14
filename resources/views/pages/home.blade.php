@extends( 'layout.app' )

@section ('title-page')
DC-Comics | Home
@endsection

@section( 'content-main' )

    @include( 'partials.jumbo' )

    <div class="text-center p-5">
        <h1>Pagina Home</h1>
        <p>Still working on it. But try the
            <a href="{{ route('comics.index') }}" class="text-primary text-decoration-underline">Comics Page</a>
        </p>
    </div>
    

@endsection