@extends('docs.layout.master')
@section('content')
        <main class="content">
          <p class="h1 ms-5 mt-5">Create Session</p>
          <div class="input-group mb-3 ms-5 mt-5 w-50">
            <button class="btn btn-primary" type="button">POST</button>
          <input class="form-control" type="text" placeholder="https://waslpayment.com/api/test/merchant/payment_order" aria-label="Disabled input example" disabled>
        </div>
        <div class="d-flex justify-content-around">
          <div>
        <p class="fs-5 ms-5 mt-5">
            Create a checkout session. After the session has been created,<br> use the session_id to redirect the user to the Wasel payment hosted page.
            <br><br>
            url format: <br>
            https://waslpayment.com/api/test/merchant/payment_order
        </p>
        <p class="h1 ms-5 mt-5 fw-bold">Request</p>
        <div>
          <p class="h2 ms-5 mt-5">Headers</p>
          <p class=" text-justify  ms-5 mt-5">
           <span class="fw-bold"> Content-Type</span>
            string <br>
            Default:
            application/json
  
  
  
          </p>
        </div>
        <div id="accordion">
          <div class="card w-75 ms-5 mt-5">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button class="dropdown-toggle border-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
               API keys
                </button>
              </h5>
            </div>
        
            <div id="collapseOne" class="collapse show " aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body">
                <p class="h3  fw-bold">Private and public keys</p>
     
          You MUST provide Private and public Keys in order to call any request in Wasel Checkout. Each merchant will have his unique keys which he can generate from the merchant portal directly. For testing purposes, below is the keys that will help you while integrating. Note that this is in UAT ONLY. If you need to move to production, then contact
          <a href="sales@waslpayment.com">A Wasel Sales</a>  to register with Wasel as a merchant and get your own keys.
<br>
       <span class=" fw-bold">   Test Examples:</span> <br><span class="fw-bold">private-key:</span> rRQ26GcsZzoEhbrP2HZvLYDbn9C9et<br>
       <span class="fw-bold">public-key:</span> HGvTMLDssJghr9tlN9gr4DVYt0qyBy</th>
        
              <br>   </div>
            </div>
          </div>
      </div>
     
      <p class="h2 ms-5 mt-5">Body</p>
      <p class=" text-justify w-75 fs-5 ms-5 mt-5">
       Hover on the most right to know about each property. For more details, please check on the examples provided below.
      



      </p>
          </div>
        <div>
        <div class="table-wrapper-scroll-y my-custom-scrollbar">

          <table class="table table-dark table-bordered table-striped  w-75 p-5" style="width: 100px;height: ;200px ">
            <thead>
              <tr>
                <th scope="col">Auth</th>
               
              </tr>
            </thead>
            <tbody>
              <tr>
                {{-- <th scope="row">wasel-api-key: 123</th> --}}
                
              </tr>
              <tr>
                <th scope="row">parameters</th>
              </tr>
              <tr>
                <th scope="row">Content-Type :application/x-www-form-urlencoded
                </th>
              </tr>
              <tr>
                <th scope="row">Body
                </th>
              </tr>
              <tr>
                <th scope="row" class="text-success font-weight-light">{
                  <br>
                  "order_reference": "123412",
               
                  <br>
                  "products": [
                    <br>
                    {
                      "id": "1",
                      <br>
                      "name": "product 1",
                      <br>
                      "quantity": 1,
                      <br>
                      "unit_amount": 100
                      <br>
                    }
                    <br>
                  ],
                  "currency":YER,<br>
                  "total_amount":1500,<br>
                  "success_url": "https://company.com/success",<br>
                  "cancel_url": "https://company.com/cancel",<br>
               
                  "metadata": {<br>
                    "Customer name": "somename",<br>
                   
                  } <br>
                }
                    </th>
              </tr>
              <tr>
                <th > <button class="btn btn-primary">Send API Req</button></th>
              </tr>
             
            </tbody>
          </table>
        
        </div>
        <div class="table-wrapper-scroll-y my-custom1-scrollbar">

          <table class="table table-light table-bordered table-striped  w-50 mt-5">
            <thead>
              <tr>
                <th scope="col">Requset simple</th>
               
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row" class="text-dark ">curl --request POST \ <br>
                  --url https://waslpayment.com/api/test/merchant/payment_order <br>
                  --header 'Content-Type: ' application/x-www-form-url<br>
                  --header 'private and public keys: ' \ <br>
                  --data '{ <br>
                  "order_reference": "123412", <br>
               
                  "products": [ <br>
                    { <br>
                      "id":1, <br>
                      "product_name": "sumsung s5", <br>
                      "quantity": 1, <br>
                      "unit_amount": 100 <br>
                    } <br>
                  ], <br>
                  "total_amount": 1400, <br>
                  "currency": "YER", <br>
                  "success_url": "https://company.com/success", <br>
                  "cancel_url": "https://company.com/cancel", <br>
               
                  "metadata": { <br>
                    "Customer name": "somename", <br>
                    "order id": 0 <br>
                  } <br>
                }'</th>
                
              </tr>
              
             
            </tbody>
          </table>
        
        </div>
        <div class="table-wrapper-scroll-y my-custom1-scrollbar">

          <table class="table table-light table-bordered table-striped  w-75 mt-5">
            <thead>
              <tr>
                <th scope="col">Response Example</th>
               
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row" class="text-dark ">{<br>
                  "success": true, <br>
                  "code": 0, <br>
                  "description": "string", <br>
                  "data": { <br>
                    "session_id": "string", <br>
                    "order_reference": "string", <br>
                    "customer_id": "string", <br>
                    "products": [ <br>
                      { <br>
                        "name": "string", <br>
                        "quantity": 0, <br>
                        "unit_amount": 0 <br>
                      } <br>
                    ], <br>
                    "total_amount": 0, <br>
                    "currency": "string", <br>
                    "success_url": "string", <br>
                    "cancel_url": "string", <br>
                    "payment_status": "unpaid", <br>
                    "mode": "string", <br>
                    "invoice": "string", <br>
                    "metadata": {}, <br>
                    "created_at": "2019-08-24T14:15:22Z", <br>
                    "expire_at": "2019-08-24T14:15:22Z", <br>
                    , <br>
                      "payment_method": { <br>
                        "id": "string", <br>
                        "bin": 0, <br>
                        "masked_card": "string", <br>
                        "expiry_month": 0, <br>
                        "expiry_year": 0, <br>
                        "nickname": "string", <br>
                        "brand": "Visa", <br>
                        "card_type": "Debit" <br>
                      },
                      "latest_invoice": {<br>
                        "id": "string", <br>
                        "amount_due": 0, <br>
                        "amount_paid": 0, <br>
                        "attempt_count": 0, <br>
                        "next_payment_attempt": "2019-08-24T14:15:22Z", <br>
                        "created_at": "2019-08-24T14:15:22Z", <br>
                        "payment_intent": { <br>
                          "id": "string", <br>
                          "order_reference": "string", <br>
                          "amount": 0, <br>
                          "currency": "string", <br>
                          "payment_method": "string", <br>
                          
                          "status": "requires_payment_method", <br>
                          "metadata": {}, <br>
                          "created_at": "2019-08-24T14:15:22Z", <br>
                          "expire_at": "2019-08-24T14:15:22Z" <br>
                        } <br>
                      } <br>
                    } <br>
                  } <br>
                }</th>
                
              </tr>
              
             
            </tbody>
          </table>
        
        </div>
        </div>
      </div> 
      <div>
       
     
      <div>
       
        <p class="d-flex justify-content-between ms-5 mt-5 text-light-dark w-50">
          <span class="fw-bold text-dark">order_reference &nbsp; String</span> <span class="text-danger">required</span>
        </p>
        <p class="ms-5 "><button class="border-0"> order_reference </button>to be generated by merchant to identify the invoice. <br>
        <button class="border-0">>= 1 characters</button>
      {{-- <br><br>Allowed values:
    <button class="border-0">payment</button> --}}
      </p>
      {{-- <p class="d-flex justify-content-between ms-5 mt-5 text-light-dark w-50">
        <span class="fw-bold text-dark">mode &nbsp; String</span> <span class="text-danger">required</span>
      </p> --}}
      <p class="ms-5 w-50">The mode of the checkout session, the default value is payment for a one-time payment. </p>
     <p class=" ms-5 mt-5">
       
       <span class="fw-bold"> products:</span> array[object]
     </p>
     <p class=" ms-5 ">
      A list of products the customer is purchasing. For payment mode, maximum of 30 products. <br>
<button class="border-0">>= 1 items</button>
      
     </p>
     <div class="ms-5">
      <p class="ms-5 d-flex justify-content-between w-50"><span class="fw-bold">Id:
        number</span><span class="text-danger">required</span></p>
       <p class="ms-5 d-flex justify-content-between w-50"><span class="fw-bold">name:
        string</span><span class="text-danger">required</span></p>
        <p class="ms-5">The name of the product. <br>

         <button class="border-0"> >= 1 characters</button></p>
         <p class="ms-5 d-flex justify-content-between w-50"><span class="fw-bold">
          quantity:
          number</span><span class="text-danger">required</span></p>
          <p class="ms-5">the quantity of the line product.

             <br>
  
           <button class="border-0"> >= 1
            <= 20</button></p>
            <p class="ms-5 d-flex justify-content-between w-50"><span class="fw-bold">
              unit_amount:
              number</span><span class="text-danger">required</span></p>
              <p class="ms-5">integer in biz represeting how much to charge per line product.
    
                 <br>
      
               <button class="border-0"> >= 100
                <= 999000</button>
              <br>default: <button class="border-0">100</button></p>
            

     </div>
     <p class="ms-5 mt-5"><span class="fw-bold"> total_amount:</span>
      number</p>
      <p class="ms-5 ">Provide <button class="border-0">total_amount</button>  to allow to get the total of the products.

       <button class="border-0">>= 1 characters</button> </p>
       <p class="d-flex justify-content-between ms-5 mt-5 text-light-dark w-50">
        <span class="fw-bold text-dark">success_url: 
          string</span> <span class="text-danger">required</span>
      </p>
      <p class="ms-5 w-50">The customer would be redirected to success_url if payment processed successfully. <br>
      <button class="border-0">>= 1 characters</button>   </p>
      <p class="d-flex justify-content-between ms-5 mt-5 text-light-dark w-50">
        <span class="fw-bold text-dark">cancel_url: 
          string</span> <span class="text-danger">required</span>
      </p>
      <p class="ms-5 w-50">The customer will be redirected to cancel_url if he decides to cancel the payment. <br>
      <button class="border-0">>= 1 characters</button>   </p>
      {{-- <p class=" ms-5 mt-5 w-50">
        <span class="fw-bold text-dark">save_card_on_success
         </span>  boolean
      </p>
      <p class="ms-5 w-50">Allowing save_card_on_success=true will automatically save the customer's card on success. Customer is optional to choose from your application or on the checkout page. <br>
      <button class="border-0">defualt: false</button>   </p> --}}
      <p class="d-flex justify-content-between ms-5 mt-5 text-light-dark w-50">
        <span class="fw-bold text-dark">metadata:
          object</span> <span class="text-danger">required</span>
      </p>
      <p class="ms-5 w-50">Set of key-value pairs. Useful for storing additional information about your products, customers.   </p>
      </div>
      <div>
        <p class="h1 ms-5 mt-5 fw-bold">Response <button class="btn btn-success ">200</button> <button class="btn btn-white text-danger ">400</button></p>
        <p class="fs-5 ms-5 mt-5 w-50">Checkout response schema.
          <br>

          Hover on the most right to know about each property.</p>
          <p class="ms-5 mt-5 h2">Body</p>
          <p class="ms-5 mt-5"><span class="fw-bold">success
            </span>boolean</p>
            <p class="ms-5 "><span class="fw-bold">code
            </span>number</p>
            <p class="ms-5 "><span class="fw-bold">description
            </span>string <br><button class="border-0">>= 1 characters</button></p>
            <p class="ms-5"><span class="fw-bold">data</span>  
              Checkout_Model</p>
              <p class="ms-5">
                Checkout Model. <br>

Hover on the most right to know about each property.
              </p>
              <div class="ms-5">
                <p class="ms-5"><span class="fw-bold">session_id
                  </span>string <br>Unique identifier of the session. It is used to redirect the customer to the Wasl payment hosted page. <br>
                <button class="border-0">>= 1 characters</button></p>
                <p class="ms-5"><span class="fw-bold">order_reference
                </span>string <br>order_reference to be generated by merchant to identify the session. <br>
              <button class="border-0">>= 1 characters</button></p>
              <p class="ms-5"><span class="fw-bold">customer_id
              </span>string <br>Unique identifier of the customer purchasing. <br>
            <button class="border-0">>= 1 characters</button></p>
            <p class="ms-5"><span class="fw-bold">products
            </span>array[object] <br>A list of products the customer is purchasing. <br>
          <button class="border-0">>= 1 characters</button></p>
          <div class="ms-5">
            <p class="ms-5"><span class="fw-bold">name</span> 
              string <br>The name of the product.</p>
              <p class="ms-5"><span class="fw-bold">quantity
              </span> 
              number <br>the quantity of the line product.</p>
              <p class="ms-5"><span class="fw-bold">unit_amount
              </span> 
              number <br>integer in biz represeting how much to charge per line product.</p>
          </div>
          <p class="ms-5"><span class="fw-bold">total_amount</span> number <br>
            The total amount of the products or plan to pay. It could be the product's total amount 
          </p>
          <p class="ms-5"><span class="fw-bold">currency</span> string <br>
            Currency, default is YER.
            <button class="border-0">>= 1 characters</button>
          </p>
          <p class="ms-5"><span class="fw-bold">success_url</span> string <br>
            The customer would be redirected to success_url if payment processed successfully.
            <button class="border-0">>= 1 characters</button>
          </p>
          <p class="ms-5"><span class="fw-bold">cancel_url</span> string <br>
            The customer will be redirected to cancel_url if he decides to cancel the payment.
            <button class="border-0">>= 1 characters</button>
          </p>
          <p class="ms-5"><span class="fw-bold">payment_status</span> string <br>
            The payment status of the Checkout Session, one of paid, unpaid, or cancelled. You can use this value to decide when to fulfill your customer’s order.
            <br>
            <button class="border-0">>= 1 characters</button><br> Allowed values:
            unpaid
            paid
            cancelled 
          </p>
          <p class="ms-5"><span class="fw-bold">mode</span> string <br>
            The mode of the checkout session, the default value is payment, for one-time payment. 
            <button class="border-0">>= 1 characters</button>
          </p>
          <p class="ms-5"><span class="fw-bold">invoice</span> string <br>
            Checkout unique invoice.
            <button class="border-0">>= 1 characters</button>
          </p>
          <p class="ms-5"><span class="fw-bold">metadata</span> object <br>
            Set of key-value pairs. Useful for storing additional information about your products, customers.
           
          </p>
          <p class="ms-5"><span class="fw-bold">created_at</span> string
            <date-time> <br>
              Time at which the object was created. <br>
             <button class="border-0">>= 1 characters</button>
          </p>
          <p class="ms-5"><span class="fw-bold">expire_at</span> string
            
            <date-time> <br>
              The time is remaining for object to expire.

              <br>
             <button class="border-0">>= 1 characters</button>
          </p>

              </div>
      </div>
        </main>
        <div class="overlay"></div>
      </div>
    </div>
    @endsection