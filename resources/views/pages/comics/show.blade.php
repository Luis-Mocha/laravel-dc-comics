@extends( 'layout.app' )

@section ('title-page')
DC-Comics | {{ $comic['title'] }}
@endsection

@section( 'content-main' )

    <div class="text-light ms-4 pt-2 fs-4">
        <a href="{{ route('comics.index') }}">
            <i class="fa-solid fa-reply"></i>
        </a>
    </div>

    <div id="comics-main" class="container">

        <div class="show-card d-flex mb-4">

            <img src=" {{ $comic['thumb'] }} " alt="Thumb">

            <div class="show-info ps-4 d-flex flex-column">
                <h1>
                    {{ $comic['title'] }} 
                </h1>

                <p class="text-break">
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
                    <span class="text-capitalize fs-3">{{ $comic['price'] }} $</span>
                </div>
            </div>

        </div>

        {{-- bottone EDIT --}}
        <a href=" {{route( 'comics.edit', $comic )}} " data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Edit this Comic">
            <i class="fa-solid fa-pen-to-square"></i>
        </a>

        {{-- bottone DESTROY --}}
        {{-- no pagina di atterraggio: no link. Si usa un form --}}
        <form action=" {{ route('comics.destroy', $comic) }} " method="POST" class="d-inline-block">

            @csrf
            @method('DELETE')

            <button data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Delete this Comic">
                <i class="fa-solid fa-trash-can"></i>
            </button>
        </form>
        
    </div>

@endsection