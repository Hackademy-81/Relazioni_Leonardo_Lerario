<x-layout>

    <div class="container-fluid ">
        <div class="row vh-100 background-custom justify-content-center">
            <div class="col-6 d-flex align-items-center justify-content-center">
                <h1 class="text-center watch h1-custom">
                    Relazioni
                </h1>
            </div>
        </div>
    </div>

    
    <div class="container-fluid">
        <div class="row">
            @foreach($products as $product)
            <div class="col-4">
                <x-card
                :product='$product'
                />
            </div>
            @endforeach
        </div>
    </div>

    <div class="vh-100"></div>

</x-layout>