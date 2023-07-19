<x-layout>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="display-1 text-center watch">
                    Dettaglio Prodotto
                </h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <img src="{{Storage::url($product->img)}}" class="img-fluid" alt="">
            </div>
            <div class="col-6">
                <h1>
                    {{$product->name}}
                </h1>
                <p>
                    {{$product->body}}   
                </p>
                <p>
                   Caricato da: {{$product->user->name}}   
                </p>
                <p>
                    ${{$product->price}}   
                </p>
            </div>
        </div>

    </div>

</x-layout>