@extends('docs.layout.master')
@section('content')
        <main class="content">
          <p class="h1 ms-5 mt-5">Testing API Card</p>
          {{-- <div class="input-group mb-3">
            <button class="btn btn-success" type="button">Get</button>
          <input class="form-control" type="text" placeholder="http://localhost:8000/waselpay" aria-label="Disabled input example" disabled>
        </div> --}}
        <div class=" mt-4 mx-3 ">
       
      </div>
      <div class=" mt-4 mx-3 ">
        <table class="table table-light table-striped  table-borderless ">
          <thead>
            <tr>
              <th scope="col" class="h2">Full Name:</th>
             
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Test Test Test</th>
              
            </tr>
        
           
          </tbody>
          <thead>
            <tr>
              <th scope="col" class="h2">Card Number</th>
             
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row" ><span class="">3425 4524 6452 4534</span></th>
              
            </tr>

           
          </tbody>


          <thead>
            <tr>
              <th scope="col" class="h2">Expiration Month:</th>
             
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row" ><span class="">5</span></th>
              
            </tr>

           
          </tbody>

          <thead>
            <tr>
              <th scope="col" class="h2">Expiration Date:</th>
             
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row" ><span class="">2024</span></th>
              
            </tr>

           
          </tbody>


          <thead>
            <tr>
              <th scope="col" class="h2">CVV:</th>
             
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row" ><span class="">300</span></th>
              
            </tr>

           
          </tbody>
        </table>
      </div>
    
    @endsection
