@extends( 'layout.app' )

@section ('title-page')
DC-Comics | Comics
@endsection

@section( 'content-main' )

    <div id="comics-main" class="container">

        <span class="currentSeries">
            Current Series
        </span>

        <div class="card-container row my-2">
            
            @foreach( $comics as $elem )
    
            <div class="comic-card col-6 col-md-4 col-lg-2 g-5 d-flex flex-column align-items-center justify-content-between text-center">

                <img src=" {{ $elem['thumb'] }} " alt="Thumb">
                
                <div class="cardTitle">{{$elem['title']}}</div>

            </div>

            @endforeach

        </div>

        <button class="load-button mx-auto d-block text-uppercase px-4 py-2 fw-bold mt-5">
            Load More
        </button>
        
    </div>

@endsection