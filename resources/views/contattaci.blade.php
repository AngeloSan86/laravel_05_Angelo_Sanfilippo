<x-layout>
<div class="container-fluid">
        <div class="row height-custom align-items-center justify-content-center">
            <div class="col-12">
                <h1 class="text-center display-4 title">
                    Contattaci!
                </h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
            <form class="p-5 bg-secondary shadow rounded text-custom" method="POST" action="{{ route('contact.submit') }}">

            @csrf

  <div class="mb-3">
    <label for="username" class="form-label">Inserisci il tuo nome</label>
    <input type="text" class="form-control" id="username" name="username">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Inserisci la tua mail</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
  </div>

  <div class="mb-3">
    <label for="message" class="form-label">Scrivi qui il tuo messaggio...</label>
    <textarea name="message" class="form-control" id="message"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Invia</button>
</form>
            </div>

        </div>

    </div>
</x-layout>