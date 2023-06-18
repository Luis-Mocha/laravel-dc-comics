@extends( 'layout.app' )

@section ('title-page')
DC-Comics | Comic Create
@endsection

@section( 'content-main' )

    <div id="comics-main" class="container">

        <h1 class="text-capitalize">Add your Comic</h1>

        <form action=" {{ route('comics.store') }} " method="POST" class="row" autocomplete="off">

            @csrf

            <div class="form-group mt-3">
                <label for="input-title" class="form-label">Title:</label>
                <input type="text" id="input-title" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Inserisci il titolo" autofocus value="{{ old('title') }}"> 
            </div>
            {{-- erorre validazione --}}
            @error('title')
                <div class="alert alert-warning py-1 m-0 fst-italic">{{ $message }}</div>
            @enderror
            
            <div class="form-group mt-3">
                <label for="input-description" class="form-label">Description:</label>
                <textarea id="input-description" class="form-control" name="description" cols="30" rows="5"></textarea>
            </div>

            <div class="form-group mt-3">
                <label for="input-thumb" class="form-label">Thumb:</label>
                <input type="text" id="input-thumb" class="form-control @error('thumb') is-invalid @enderror" name="thumb" placeholder="Inserisci il link alla copertina" value="{{ old('thumb') }}"> 
            </div>
            {{-- erorre validazione --}}
            @error('thumb')
                <div class="alert alert-warning py-1 m-0 fst-italic">{{ $message }}</div>
            @enderror

            <div class="form-group mt-3 col-6">
                <label for="input-type" class="form-label">Type:</label>
                <input type="text" id="input-type" class="form-control @error('type') is-invalid @enderror" name="type" placeholder="Inserisci la tipologia" value="{{ old('type') }}"> 
            </div>
            {{-- erorre validazione --}}
            @error('type')
                <div class="alert alert-warning py-1 m-0 fst-italic">{{ $message }}</div>
            @enderror

            <div class="form-group mt-3 col-6">
                <label for="input-series" class="form-label">Series:</label>
                <input type="text" id="input-series" class="form-control @error('series') is-invalid @enderror" name="series" placeholder="Inserisci la serie di appartenenza" value="{{ old('series') }}"> 
            </div>
            {{-- erorre validazione --}}
            @error('series')
                <div class="alert alert-warning py-1 m-0 fst-italic">{{ $message }}</div>
            @enderror

            <div class="form-group mt-3 col-6">
                <label for="input-sale_date" class="form-label">Sale Date:</label>
                <input type="date" id="input-sale_date" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date" value="{{ old('sale_date') }}"> 
            </div>
            {{-- erorre validazione --}}
            @error('sale_date')
                <div class="alert alert-warning py-1 m-0 fst-italic">{{ $message }}</div>
            @enderror

            <div class="form-grp mt-3 col-6">
                <label for="input-price" class="form-label">Price:</label>
                <input type="number" name="price" id="input-price" class="form-control @error('price') is-invalid @enderror" placeholder="Inserisci il prezzo" min="0" max="1000" step="0.01" value="{{ old('price') }}">
            </div>
            {{-- erorre validazione --}}
            @error('price')
                <div class="alert alert-warning p-1 ">{{ $message }}</div>
            @enderror

            <div class="w-100">
                <button type="submit" class="btn btn-primary my-4 col-2 mx-auto d-block ">Add Comic !</button>
            </div>
            

        </form>
        
    </div>

@endsection