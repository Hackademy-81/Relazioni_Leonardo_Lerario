<x-layout>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="display-1 text-center watch">
                    Prodotti di : {{$user->name}}
                </h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            @foreach($user->products as $product)
            <div class="col-4">
                <x-card
                :product='$product'
                />
            </div>
            @endforeach
        </div>
    </div>



</x-layout>