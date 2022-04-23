@extends('docs.layout.master')
@section('content')
        <main class="content">
          <p class="h1 ms-5 mt-5">E-commerce APIs</p>
          {{-- <div class="input-group mb-3">
            <button class="btn btn-success" type="button">Get</button>
          <input class="form-control" type="text" placeholder="http://localhost:8000/waselpay" aria-label="Disabled input example" disabled>
        </div> --}}
        <div class=" mt-4 mx-3 ">
        <table class="table table-dark table-striped  table-borderless ">
          <thead>
            <tr>
              <th scope="col">API base URL</th>
             
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Testing:https://uatcheckout.wasel.ye/api/v1</th>
              
            </tr>
            <tr>
              <th scope="row">Production:https://checkout.wasel.ye/api/v1</th>
              
            </tr>
            <tr>
              <th scope="row">Mock Server:https://stoplight.io/mocks/wasel-technologies/wasel-ecommerce-api/11056382</th>
             
            </tr>
          </tbody>
        </table>
      </div>
      <div>
        <p class="h1 ms-5 mt-5">Introduction</p>
        <p class=" text-justify fs-5 ms-5 mt-5">
          Congratulation on considering Wasel Checkout as one of your Payment Service Providers. Wasel Checkout is a payment gateway that allows you to collect payments from your customers.



        </p>
      </div>
      <div>
        <p class="h1 ms-5 mt-5">Secert and publishible keys</p>
        <p class=" text-justify fs-5 ms-5 mt-5">
          You MUST provide Secret and Publishable Keys in order to call any request in Wasel Checkout. Each merchant will have his unique keys which he can generate from the merchant portal directly. For testing purposes, below is the keys that will help you while integrating. Note that this is in UAT ONLY. If you need to move to production, then contact
           A Wasel Sales to register with Wasel as a merchant and get your own keys.


        </p>
        <input class="form-control ms-5 mt-5 w-50" type="text" placeholder="Secret Key: rRQ26GcsZzoEhbrP2HZvLYDbn9C9et" aria-label="Disabled input example" disabled>
        <br>
        <input class="form-control ms-5  w-50" type="text" placeholder="Publishable Key: HGvTMLDssJghr9tlN9gr4DVYt0qyBy" aria-label="Disabled input example" disabled>
      </div>
        </main>
        <div class="overlay"></div>
      </div>
    </div>
    @endsection
