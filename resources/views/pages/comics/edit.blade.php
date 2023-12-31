@extends( 'layout.app' )

@section ('title-page')
DC-Comics | Comic Edit
@endsection

@section( 'content-main' )

    <div id="comics-main" class="container">

        <h1 class="text-capitalize">Edit this Comic</h1>

        <form action=" {{ route('comics.update', $comic ) }} " method="POST" class="row" autocomplete="off">

            @csrf

            {{-- Il form accetta solo get o post, quindi uso @method di laravel --}}
            @method('PUT')

            <div class="form-group mt-3">
                <label for="input-title" class="form-label">Title:</label>
                <input type="text" id="input-title" class="form-control" name="title" placeholder="Inserisci il titolo" required value="{{ old('title') ?? $comic->title }}"> 
            </div>
            {{-- erorre validazione --}}
            @error('title')
                <div class="alert alert-warning py-1 m-0 fst-italic">{{ $message }}</div>
            @enderror

            <div class="form-group mt-3">
                <label for="input-description" class="form-label">Description:</label>
                <textarea id="input-description" class="form-control" name="description" cols="30" rows="5">{{ old('description') ?? $comic->description }}</textarea>
            </div>

            <div class="form-group mt-3">
                <label for="input-thumb" class="form-label">Thumb:</label>
                <input type="text" id="input-thumb" class="form-control" name="thumb" placeholder="Inserisci il link alla copertina" required value="{{ old('thumb') ?? $comic->thumb }}"> 
            </div>
            {{-- erorre validazione --}}
            @error('thumb')
                <div class="alert alert-warning py-1 m-0 fst-italic">{{ $message }}</div>
            @enderror

            <div class="form-group mt-3 col-6">
                <label for="input-type" class="form-label">Type:</label>
                <input type="text" id="input-type" class="form-control" name="type" placeholder="Inserisci la tipologia" required value="{{ old('type') ?? $comic->type }}"> 
            </div>
            {{-- erorre validazione --}}
            @error('type')
                <div class="alert alert-warning py-1 m-0 fst-italic">{{ $message }}</div>
            @enderror

            <div class="form-group mt-3 col-6">
                <label for="input-series" class="form-label">Series:</label>
                <input type="text" id="input-series" class="form-control" name="series" placeholder="Inserisci la serie di appartenenza" required value="{{ old('series') ?? $comic->series }}"> 
            </div>
            {{-- erorre validazione --}}
            @error('series')
                <div class="alert alert-warning py-1 m-0 fst-italic">{{ $message }}</div>
            @enderror

            <div class="form-group mt-3 col-6">
                <label for="input-sale_date" class="form-label">Sale Date:</label>
                <input type="date" id="input-sale_date" class="form-control" name="sale_date" required value="{{ old('sale_date') ?? $comic->sale_date }}"> 
            </div>
            {{-- erorre validazione --}}
            @error('sale_date')
                <div class="alert alert-warning py-1 m-0 fst-italic">{{ $message }}</div>
            @enderror

            <div class="form-grp mt-3 col-6">
                <label for="input-price" class="form-label">Price:</label>
                <input type="number" name="price" id="input-price" class="form-control" placeholder="Inserisci il prezzo" step="0.01" min="0" max="1000" required value="{{ old('price') ?? $comic->price }}">
            </div>
            {{-- erorre validazione --}}
            @error('price')
                <div class="alert alert-warning py-1 m-0 fst-italic">{{ $message }}</div>
            @enderror            

            <button type="submit" class="btn btn-primary my-4 col-2 mx-auto">Edit Comic !</button>

        </form>
        
    </div>

@endsection