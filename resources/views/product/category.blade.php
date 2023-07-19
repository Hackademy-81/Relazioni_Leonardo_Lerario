<x-layout>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="display-1 text-center watch">
                    Prodotti per categoria: {{$category->name}}
                </h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            @foreach($category->products as $product)
            <div class="col-4">
                <x-card
                :product='$product'
                />
            </div>
            @endforeach
        </div>
    </div>



</x-layout>