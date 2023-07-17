<x-layout>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="display-1 text-center">
                    Registrati
                </h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <form method="POST" action=" {{route('register')}}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Password</label>
                      <input type="password" class="form-control" name="password">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Conferma Password</label>
                        <input type="password" class="form-control" name="password_confirmation">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>



</x-layout>



