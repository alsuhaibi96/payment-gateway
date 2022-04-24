@extends('docs.layout.master')
@section('content')
        <main class="content">
          <p class="h1 ms-5 mt-5">Create Session</p>
          <div class="input-group mb-3 ms-5 mt-5 w-50">
            <button class="btn btn-primary" type="button">POST</button>
          <input class="form-control" type="text" placeholder="https://uatcheckout.wasel.ye/api/v1/checkout/session" aria-label="Disabled input example" disabled>
        </div>
        <div class="d-flex justify-content-around">
        <p class="fs-5 ms-5 mt-5">
            Create a checkout session. After the session has been created,<br> use the session_id to redirect the user to the Wasel payment hosted page.
            <br><br>
            url format: <br>
            https://[uat]checkout.thawani.om/pay/{session_id}?key=publishable_key
        </p>
        <table class="table table-dark table-striped  table-borderless w-25 ">
            <thead>
              <tr>
                <th scope="col">Auth</th>
               
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">wasel-api-key:</th>
                
              </tr>
              <tr>
                <th scope="row">parameters</th>
                
              </tr>
              <tr>
                <th scope="row">Content-Type :
                    </th>
               
              </tr>
              <tr>
                <th scope="row">Body
                    </th>
               
              </tr>
              <tr>
                <th scope="row">Content-Type :
                    </th>
               
              </tr>
            </tbody>
          </table>
        </div>
        </main>
        <div class="overlay"></div>
      </div>
    </div>
    @endsection