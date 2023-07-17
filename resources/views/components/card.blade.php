<div class="card" style="width: 18rem;">
    <img src="{{Storage::url($product->img)}}" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title">caricato da:  <a href="{{route('user.products', $product->user)}}">{{$product->user->name}}</a></h5> 
      <p class="card-text">{{$product->body}}</p>
      <p class="card-text">${{$product->price}}</p>
      <a href="{{route('product.show', compact('product'))}}" class="btn btn-primary">Dettaglio</a>
    </div>
  </div>