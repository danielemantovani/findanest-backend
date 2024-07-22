@extends('layouts.admin')

@section('content')

    <div class="container mt-5">

        <div class="row justify-content-between align-items-center py-3 border-bottom">

            {{-- Edit Title --}}
            <div class="col-12 col-sm-10">

                <h1 class="fw-1 fs-1 text-main text-warning">Modifica la tua casa</h1>

            </div>

            {{-- Button to Index --}}
            <div class="col-12 col-sm-2">

                <button type="button"
                    class="btn btn-outline-warning h-75 w-50 d-flex align-items-center justify-content-center">

                    <a href="{{ route('admin.house.index') }}">

                        <i class="fa-solid fa-angles-left"></i>

                    </a>

                </button>

            </div>

        </div>

        {{-- Handling error --}}
        @if ($errors->any())
            <div class="alert alert-danger">

                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>

            </div>
        @endif
        {{-- End handling error --}}

        {{-- Edit form --}}
        <form action="{{ route('admin.house.update', ['house' => $house->slug]) }}" method="POST"
            enctype="multipart/form-data" id="houseForm">
            @csrf
            @method('PUT')

            {{-- Input Immagine --}}
            <div class="row mb-3">

                <div class="col-12 images-container">

                    <label for="image" class="form-label mt-5">Foto</label>
                    <input type="file" accept="image/jpeg, image/png" class="form-control" id="image" name="image">

                </div>

            </div>

            <div class="row mb-3">

                {{-- Input title --}}
                <div class="col-6">

                    <label for="title" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="title" name="title"
                        value="{{ old('title', $house['title']) }}">

                    {{-- Front-end validation --}}
                    <div id="titleError" class="invalid-feedback fw-bold"></div>

                </div>

                {{-- Input address --}}
                <div class="col-6">

                    <label for="address" class="form-label">Indirizzo</label>
                    <input type="text" class="form-control" id="address" name="address"
                        value="{{ old('address', $house['address']) }}">

                    {{-- Front-end validation --}}
                    <div id="addressError" class="invalid-feedback fw-bold"></div>

                    {{-- Suggerimento indirizzi --}}
                    <ul id="suggestions-list" class="list-group"></ul>

                </div>

            </div>

            <div class="row mb-3">

                {{-- Input rooms --}}
                <div class="col-md-2">

                    <label for="rooms" class="form-label">Stanze</label>
                    <input type="number" class="form-control" id="rooms" name="rooms"
                        value="{{ old('rooms', $house['rooms']) }}">

                    {{-- Front-end validation --}}
                    <div id="roomsError" class="invalid-feedback fw-bold"></div>

                </div>

                {{-- Input bathrooms --}}
                <div class="col-md-2">

                    <label for="bathrooms" class="form-label">Bagni</label>
                    <input type="number" class="form-control" id="bathrooms" name="bathrooms"
                        value="{{ old('bathrooms', $house['bathrooms']) }}">

                    {{-- Front-end validation --}}
                    <div id="bathroomsError" class="invalid-feedback fw-bold"></div>

                </div>

                {{-- Input beds --}}
                <div class="col-md-2">

                    <label for="beds" class="form-label">Posti Letto</label>
                    <input type="number" class="form-control" id="beds" name="beds"
                        value="{{ old('beds', $house['beds']) }}">

                    {{-- Front-end validation --}}
                    <div id="bedsError" class="invalid-feedback fw-bold"></div>

                </div>

                {{-- Input sqm --}}
                <div class="col-md-2">

                    <label for="sqm" class="form-label">Dimensione (mq)</label>
                    <input type="number" class="form-control" id="sqm" name="sqm"
                        value="{{ old('sqm', $house['sqm']) }}">

                    {{-- Front-end validation --}}
                    <div id="sqmError" class="invalid-feedback fw-bold"></div>

                </div>

            </div>

            {{-- Input price --}}
            <div class="row mb-3">

                <div class="col-md-6">

                    <label for="price" class="form-label">Prezzo</label>
                    <input type="number" class="form-control" id="price" name="price" step="0.01"
                        value="{{ old('price', $house['price']) }}">

                    {{-- Front-end validation --}}
                    <div id="priceError" class="invalid-feedback fw-bold"></div>

                </div>

            </div>

            {{-- Checkbox services --}}
            <label class="mt-4 mb-2">Seleziona i servizi</label>
            <div class="col-lg-12 col-md-6 d-flex flex-wrap">

                <div class="form-check me-3">
                    <input type="checkbox" id="ac" name="services" value="ac" class="form-check-input">
                    <label for="ac" class="form-check-label">Aria condizionata</label>
                </div>

                <div class="form-check me-3">
                    <input type="checkbox" id="balcony" name="services" value="balcony" class="form-check-input">
                    <label for="balcony" class="form-check-label">Balcone o Terrazzo</label>
                </div>

                <div class="form-check me-3">
                    <input type="checkbox" id="concierge" name="services" value="concierge" class="form-check-input">
                    <label for="concierge" class="form-check-label">Portineria</label>
                </div>

                <div class="form-check me-3">
                    <input type="checkbox" id="dishwasher" name="services" value="dishwasher" class="form-check-input">
                    <label for="dishwasher" class="form-check-label">Lavastoviglie</label>
                </div>

                <div class="form-check me-3">
                    <input type="checkbox" id="equipped-kitchen" name="services" value="equipped-kitchen"
                        class="form-check-input">
                    <label for="equipped-kitchen" class="form-check-label">Cucina Attrezzata</label>
                </div>

                <div class="form-check me-3">
                    <input type="checkbox" id="gym" name="services" value="gym" class="form-check-input">
                    <label for="gym" class="form-check-label">Palestra</label>
                </div>

                <div class="form-check me-3">
                    <input type="checkbox" id="heating" name="services" value="heating" class="form-check-input">
                    <label for="heating" class="form-check-label">Riscaldamento</label>
                </div>

                <div class="form-check me-3">
                    <input type="checkbox" id="internet" name="services" value="internet" class="form-check-input">
                    <label for="internet" class="form-check-label">Internet</label>
                </div>

                <div class="form-check me-3">
                    <input type="checkbox" id="pet-friendly" name="services" value="pet-friendly"
                        class="form-check-input">
                    <label for="pet-friendly" class="form-check-label">Animali Ammessi</label>
                </div>

                <div class="form-check me-3">
                    <input type="checkbox" id="parking" name="services" value="parking" class="form-check-input">
                    <label for="parking" class="form-check-label">Parcheggio</label>
                </div>

                <div class="form-check me-3">
                    <input type="checkbox" id="pool" name="services" value="pool" class="form-check-input">
                    <label for="pool" class="form-check-label">Piscina</label>
                </div>

                <div class="form-check me-3">
                    <input type="checkbox" id="television" name="services" value="television" class="form-check-input">
                    <label for="television" class="form-check-label">Televisione</label>
                </div>

                <div class="form-check me-3">
                    <input type="checkbox" id="washing-machine" name="services" value="washing-machine"
                        class="form-check-input">
                    <label for="washing-machine" class="form-check-label">Lavatrice</label>
                </div>

                <div class="form-check me-3">
                    <input type="checkbox" id="wifi" name="services" value="wifi" class="form-check-input">
                    <label for="wifi" class="form-check-label">Wi-Fi</label>
                </div>

                <div class="form-check me-3">
                    <input type="checkbox" id="security" name="services" value="security" class="form-check-input">
                    <label for="24-7-security" class="form-check-label">Sicurezza 24/7</label>
                </div>
            </div>


            {{-- Checkbox Visibile --}}
            <div class="row mb-3 ms-1">

                <div class="col-md-6 form-check form-switch mt-4">

                    <input class="form-check-input" type="checkbox" id="visible" name="visible"
                        value="{{ old('visible', 2) }}" {{-- @dd($house['visible']) --}}
                        {{ old('visible', $house['visible']) === '2' ? 'checked' : '' }}>
                    <label class="form-check-label" for="visible">Visibile</label>

                </div>

            </div>

            {{-- Input description --}}
            <div class="row mb-3">

                <div class="col-12">

                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" id="description" name="description">{{ old('description', $house['description']) }}</textarea>

                </div>

            </div>

            {{-- Submit Button --}}
            <button type="submit" class="btn btn-success mb-3">Salva</button>

        </form>

    </div>

    <script>
        const input = document.querySelector("#image");

        const imagesContainer = document.querySelector(".images-container");

        let imagesArray = [];

        function displayImages() {

            if (document.querySelector("output")) {

                console.log('vengo chiamata');

                const output = document.querySelector("output");

                // console.log(output);

                output.innerHTML = imagesArray.map((image, index) => `
               <div class="image">
   
                  <img src="${URL.createObjectURL(image)}" alt="image">
   
                  <span onclick="deleteImage(${index})" class="text-center">
                     &times;
                  </span>
                  
               </div>`).join('');
            }
        }

        function deleteImage(index) {

            imagesArray.splice(index, 1);

            if (document.querySelector("output") && imagesArray.length === 0) {

                console.log('non ci sono img');

                const output = document.querySelector("output");

                output.remove();

            } else if (imagesArray.length > 0) {

                displayImages();
            }
        }

        input.addEventListener("change", function() {

            imagesArray = Array.from(input.files);

            if (imagesArray.length > 0) {

                // console.log('ci sono img');

                const output = document.createElement("output");

                imagesContainer.append(output);
            }

            const output = document.querySelector("output");

            displayImages();

        });
    </script>

    <style>
        output {
            width: 100%;
            min-height: 150px;
            display: flex;
            justify-content: flex-start;
            flex-wrap: wrap;
            gap: 15px;
            position: relative;
            border: 2px dashed #ddd;
            border-radius: 5px;
            padding: 10px;
            background-color: #f9f9f9;
        }

        output .image {
            height: 150px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            position: relative;
        }

        output .image img {
            height: 100%;
            width: 100%;
            object-fit: cover;
        }

        output .image span {
            position: absolute;
            top: 5px;
            right: 10px;
            line-height: 15px;
            height: 20px;
            width: 20px;
            cursor: pointer;
            font-size: 15px;
            color: white;
            background-color: rgba(0, 0, 0, 0.6);
            border-radius: 50%;
        }

        output .image span:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }
    </style>

@endsection
