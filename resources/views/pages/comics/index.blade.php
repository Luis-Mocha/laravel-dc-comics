@extends( 'layout.app' )

@section ('title-page')
DC-Comics | Comics
@endsection

@section( 'content-main' )

    @include( 'partials.jumbo' )

    <div id="comics-main" class="container">

        <span class="currentSeries">
            Current Series
        </span>

        <div class="card-container row my-2">
            
            @foreach( $comics as $elem )
    
            <div class="comic-card col-6 col-md-4 col-lg-2 g-5 d-flex flex-column align-items-center justify-content-between text-center">

                <a href="{{ route('comics.show' , [ 'comic' => $elem ] ) }}">

                    <img src=" {{ $elem['thumb'] }} " alt="Thumb">

                </a>
                
                <div class="cardTitle">{{$elem['title']}}</div>

            </div>

            @endforeach

        </div>

        <div class="d-flex mt-5 justify-content-center">
            <button class="load-button d-block text-uppercase px-4 py-2 fw-bold mx-2">
                Load More
            </button>
            <a href="{{ route('comics.create') }}">
                <button class="load-button d-block text-uppercase px-4 py-2 fw-bold mx-2">
                    Create Comic
                </button>
            </a>
            
        </div>
        
    </div>

@endsection