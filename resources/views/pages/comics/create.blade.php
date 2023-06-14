@extends( 'layout.app' )

@section ('title-page')
DC-Comics | Comic Create
@endsection

@section( 'content-main' )

    {{-- <div class="text-light ms-4 pt-2 fs-4">
        <a href="{{ route('comics.index') }}">
            <i class="fa-solid fa-reply"></i>
        </a>
    </div> --}}

    <div id="comics-main" class="container">

        <h1 class="text-capitalize">Add your Comic</h1>

        <form action=" {{ route('comics.store') }} " method="POST" class="row">

            @csrf

            <div class="form-group mt-3">
                <label for="input-title" class="form-label">Title:</label>
                <input type="text" id="input-title" class="form-control" name="title" placeholder="Inserisci il titolo"> 
            </div>

            <div class="form-group mt-3">
                <label for="input-description" class="form-label">Description:</label>
                <textarea id="input-description" class="form-control" name="description" cols="30" rows="5">
                </textarea>
            </div>

            <div class="form-group mt-3">
                <label for="input-thumb" class="form-label">Thumb:</label>
                <input type="text" id="input-thumb" class="form-control" name="thumb" placeholder="Inserisci il link alla copertina"> 
            </div>

            <div class="form-group mt-3 col-6">
                <label for="input-price" class="form-label">Price:</label>
                <input type="text" id="input-price" class="form-control" name="price" placeholder="Inserisci il prezzo"> 
            </div>

            <div class="form-group mt-3 col-6">
                <label for="input-series" class="form-label">Series:</label>
                <input type="text" id="input-series" class="form-control" name="series" placeholder="Inserisci la serie di appartenenza"> 
            </div>

            <div class="form-group mt-3 col-6">
                <label for="input-sale_date" class="form-label">Sale Date:</label>
                <input type="date" id="input-sale_date" class="form-control" name="sale_date"> 
            </div>

            <div class="form-group mt-3 col-6">
                <label for="input-type" class="form-label">Type:</label>
                <input type="text" id="input-type" class="form-control" name="type" placeholder="Inserisci la tipologia"> 
            </div>

            <button type="submit" class="btn btn-primary my-4 col-2 mx-auto">Add Comic !</button>

        </form>
        
    </div>

@endsection