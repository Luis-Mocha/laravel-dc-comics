@extends( 'layout.app' )

@section ('title-page')
DC-Comics | Comic
@endsection

@section( 'content-main' )

    <div id="comics-main" class="container">

        <div class="show-card d-flex mb-4">

            <img src=" {{ $comic['thumb'] }} " alt="Thumb">

            <div class="show-info ps-4 d-flex flex-column">
                <h1>
                    {{ $comic['title'] }} 
                </h1>

                <p>
                    {{ $comic['description'] }}
                </p>

                <div class="show-details d-flex justify-content-betwee">

                    <div class="me-5">
                        <span class="show-label">Type:</span>
                        <span class="text-capitalize">{{ $comic['type'] }}</span>
                    </div>

                    <div class="me-5">
                        <span class="show-label">Series:</span>
                        <span class="text-capitalize">{{ $comic['series'] }}</span>
                    </div>
                    
                    <div class="me-5">
                        <span class="show-label">Date:</span>
                        <span class="text-capitalize">{{ $comic['sale_date'] }}</span>
                    </div>

                </div>

                <div class="mt-3 text-end mt-auto py-3">
                    <span class="show-label fs-5">Price:</span>
                    <span class="text-capitalize fs-3">{{ $comic['price'] }}</span>
                </div>
            </div>

        </div>

        
    </div>

@endsection