<x-layout>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="display-1 text-center watch">
                    Crea il tuo prodotto
                </h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <form method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label class="form-label">Nome prodotto</label>
                      <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descrizione</label>
                        <textarea name="body" class="form-control" cols="30" rows="10"></textarea>
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Prezzo</label>
                        <input type="number" class="form-control" name="price">
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Categorie</label>
                        <select name="category_id" id="" class="form-control">
                          @foreach ($categories as $category)
                              <option value="{{$category->id}}">{{$category->name}}</option>
                          @endforeach
                        </select>
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Tag</label>
                        <select name="tag_id[]" id="" class="form-control" multiple>
                          @foreach ($tags as $tag)
                              <option value="{{$tag->id}}">{{$tag->name}}</option>
                          @endforeach
                        </select>
                        <small>Premi ctrl + click per selezionare più tags</small>
                      </div>


                      <div class="mb-3">
                        <label class="form-label">Immagine</label>
                        <input type="file" class="form-control" name="img">
                      </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>




</x-layout>