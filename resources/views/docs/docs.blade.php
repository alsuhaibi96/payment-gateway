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
      <div class=" mt-4 mx-3 ">
        <table class="table table-light table-striped  table-borderless ">
          <thead>
            <tr>
              <th scope="col">Security</th>
             
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">API key</th>
              
            </tr>
            <tr>
              <th scope="row">An API key is a token that you provide when making API calls. Include the token in a header parameter called wasel-api-key.

                Example: wasel-api-key: 123</th>
              
            </tr>
           
          </tbody>
        </table>
      </div>
      <div class=" mt-4 mx-3 ">
        <table class="table table-light table-striped  table-borderless ">
          <thead>
            <tr>
              <th scope="col">Addtional information</th>
             
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Contact Wasel sales</th>
              
            </tr>
            <tr>
              <th scope="row">
                Terms of Service
               </th>
              
            </tr>
           
          </tbody>
        </table>
      </div>
      <div>
        <p class="h1 ms-5 mt-5 fw-bold">Introduction</p>
        <p class=" text-justify fs-5 ms-5 mt-5">
          Congratulation on considering Wasel Checkout as one of your Payment Service Providers. Wasel Checkout is a payment gateway that allows you to collect payments from your customers.



        </p>
      </div>
      <div>
        <p class="h1 ms-5 mt-5 fw-bold">Roles and Responsibilities</p>
        <p class=" text-justify fs-5 ms-5 mt-5">
          Merchant Prepare a valid JSON request as per the integration documentation. Sending request to the proper endpoint server that is mentioned in the integration documentation. Redirect user to the provided payment link upon the successful generation of the link. Update Merchant invoices and/or payment system. Check periodically/once for changes on payment status.

Wasel Return back the payment link to the merchant. Process user’s card payment or in-app payment. Send OTP through the user bank card’s phone number that is registered in the bank. Send payment result response bank. Once the integration is completed, a test entry will be made and we will print the receipt for checking and verification – to be signed be the merchant before sending the production API and public key.

Important Notes The code sample is for demonstration purposes only. It should NOT be used as a base to develop the integration. Wasel does NOT supply any plugin for any eCommerce platform. All communication MUST be through emails ONLY. Please provide an email that will direct all automatic communications and notifications. Secret and Publishable keys are only for your company/organization purposes, NOT to be shared. We do our level best to serve as much merchants as possible from Sunday to Thursday between 9:00AM until 3:00PM and in working days only.
        </p>
      </div>
      <div>
        <p class="h1 ms-5 mt-5 fw-bold">Checklist</p>
        <p class="text-justify fs-5 ms-5 mt-5">In order to move your system to production environment, you need to meet the following requirements:</p>
        <ul class="text-justify fs-5 ms-5 mt-5">
          <li>SSL Certificate.</li>
          <li>Customer information passed on metadata (Name, Contact number, & Email address).</li>
          <li>Payment display dialogue box should contain message that indicates accepts card payments</li>
        </ul>
      </div>
      <div>
        <p class="h1 ms-5 mt-5 fw-bold">Merchant Portal Configuration</p>
        <p class="text-justify fs-5 ms-5 mt-5">Before using the eCommerce, you must make sure that configuration in the Merchant portal is set properly. There are 3 main functions:</p>
        <ul class="text-justify fs-5 ms-5 mt-5">
          <li>Integration Keys: generate integration keys (secret and publishable key)</li>
          <li>Webhook URL: Set the webhook URL to receive the payment notification</li>
          <li>Payment Methods: Set what payments can be received in Wasel Checkout.</li>
        </ul>
      </div>
      <div>
        <p class="h1 ms-5 mt-5 fw-bold">Secert and publishible keys</p>
        <p class=" text-justify fs-5 ms-5 mt-5">
          You MUST provide Secret and Publishable Keys in order to call any request in Wasel Checkout. Each merchant will have his unique keys which he can generate from the merchant portal directly. For testing purposes, below is the keys that will help you while integrating. Note that this is in UAT ONLY. If you need to move to production, then contact
          <a href="sales@waslpayment.com">A Wasel Sales</a>  to register with Wasel as a merchant and get your own keys.


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
