@extends('customer_dashboard.layout.master')


@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- app invoice View Page -->
                <section class="invoice-edit-wrapper">
                    <div class="row">
                        <!-- invoice view page -->
                        <div class="col-xl-9 col-md-8 col-12">
                            <div class="card">
                                <div class="card-body pb-0 mx-25">
                                    <!-- header section -->
                                    <div class="row mx-0">
                                        <div class="col-xl-4 col-md-12 d-flex align-items-center pl-0">
                                            <h6 class="invoice-number mb-0 mr-75">Invoice#</h6>
                                            <input type="text" class="form-control pt-25 w-50" placeholder="#000">
                                        </div>
                                        <div class="col-xl-8 col-md-12 px-0 pt-xl-0 pt-1">
                                            <div class="invoice-date-picker d-flex align-items-center justify-content-xl-end flex-wrap">
                                                <div class="d-flex align-items-center">
                                                    <small class="text-muted mr-75">Issue Date: </small>
                                                    <fieldset class="d-flex ">
                                                        <input type="text" class="form-control pickadate mr-2 mb-50 mb-sm-0" placeholder="Select Date">
                                                    </fieldset>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <small class="text-muted mr-75">Due Date: </small>
                                                    <fieldset class="d-flex">
                                                        <input type="text" class="form-control pickadate mb-50 mb-sm-0" placeholder="Select Date">
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <!-- logo and title -->
                                    <div class="row my-2 py-50">
                                        <div class="col-sm-6 col-12 order-2 order-sm-1">
                                            <h4 class="text-primary">Invoice</h4>
                                            <input type="text" class="form-control" placeholder="Product Name">
                                        </div>
                                        <div class="col-sm-6 col-12 order-1 order-sm-1 d-flex justify-content-end">
                                            <img src="../../../app-assets/images/pages/pixinvent-logo.png" alt="logo" height="46" width="164">
                                        </div>
                                    </div>
                                    <hr>
                                    <!-- invoice address and contact -->
                                    <div class="row invoice-info">
                                        <div class="col-lg-6 col-md-12 mt-25">
                                            <h6 class="invoice-to">Bill To</h6>
                                            <fieldset class="invoice-address form-group">
                                                <input type="text" class="form-control" placeholder="House no.">
                                            </fieldset>
                                            <fieldset class="invoice-address form-group">
                                                <textarea class="form-control" rows="4" placeholder="Landmark/Street"></textarea>
                                            </fieldset>
                                            <fieldset class="invoice-address form-group">
                                                <input type="email" class="form-control" placeholder="City">
                                            </fieldset>
                                            <fieldset class="invoice-address form-group">
                                                <input type="number" class="form-control" placeholder="Pincode">
                                            </fieldset>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                                <div class="card-body pt-50">
                                    <!-- product details table-->
                                    <div class="invoice-product-details ">
                                        <form class="form invoice-item-repeater">
                                            <div data-repeater-list="group-a">
                                                <div data-repeater-item>
                                                    <div class="row mb-50">
                                                        <div class="col-3 col-md-4 invoice-item-title">Item</div>
                                                        <div class="col-3 invoice-item-title">Cost</div>
                                                        <div class="col-3 invoice-item-title">Qty</div>
                                                        <div class="col-3 col-md-2 invoice-item-title">Price</div>
                                                    </div>
                                                    <div class="invoice-item d-flex border rounded mb-1">
                                                        <div class="invoice-item-filed row pt-1 px-1">
                                                            <div class="col-12 col-md-4 form-group">
                                                                <select class="form-control invoice-item-select">
                                                                    <option value="Frest Admin Template">Frest Admin Template</option>
                                                                    <option value="Stack Admin Template">Stack Admin Template</option>
                                                                    <option value="Robust Admin Template">Robust Admin Template</option>
                                                                    <option value="Apex Admin Template">Apex Admin Template</option>
                                                                    <option value="Modern Admin Template">Modern Admin Template</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-3 col-12 form-group">
                                                                <input type="text" class="form-control" placeholder="0">
                                                            </div>
                                                            <div class="col-md-3 col-12 form-group">
                                                                <input type="text" class="form-control" placeholder="0">
                                                            </div>
                                                            <div class="col-md-2 col-12 form-group">
                                                                <strong class="text-primary align-middle">$00.00</strong>
                                                            </div>
                                                            <div class="col-md-4 col-12 form-group">
                                                                <input type="text" class="form-control invoice-item-desc" value="The most developer friendly & highly customisable HTML5 Admin">
                                                            </div>
                                                            <div class="col-md-8 col-12 form-group">
                                                                <span>Discount: </span><span class="discount-value mr-1">0%</span>
                                                                <span class="mr-1 tax1">0%</span>
                                                                <span class="mr-1 tax2">0%</span>
                                                            </div>
                                                        </div>
                                                        <div class="invoice-icon d-flex flex-column justify-content-between border-left p-25">
                                                            <span class="cursor-pointer" data-repeater-delete>
                                                                <i class="bx bx-x"></i>
                                                            </span>
                                                            <div class="dropdown">
                                                                <i class="bx bx-cog cursor-pointer dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button"></i>
                                                                <div class="dropdown-menu p-1">
                                                                    <div class="row">
                                                                        <div class="col-12 form-group">
                                                                            <label for="discount">Discount(%)</label>
                                                                            <input type="number" class="form-control" id="discount" placeholder="0">
                                                                        </div>
                                                                        <div class="col-6 form-group">
                                                                            <label for="Tax1">Tax1</label>
                                                                            <select name="tax1" id="Tax1" class="form-control invoice-tax">
                                                                                <option selected>1%</option>
                                                                                <option>10%</option>
                                                                                <option>18%</option>
                                                                                <option>40%</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-6 form-group">
                                                                            <label for="Tax2">Tax2</label>
                                                                            <select name="tax1" id="Tax2" class="form-control invoice-tax">
                                                                                <option selected>1%</option>
                                                                                <option>10%</option>
                                                                                <option>18%</option>
                                                                                <option>40%</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="d-flex justify-content-between">
                                                                        <button type="button" class="btn btn-primary invoice-apply-btn" data-dismiss="modal">
                                                                            <span>Apply</span>
                                                                        </button>
                                                                        <button type="button" class="btn btn-light-primary ml-1" data-dismiss="modal">
                                                                            <span>Cancel</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col p-0">
                                                    <button class="btn btn-light-primary btn-sm" data-repeater-create type="button">
                                                        <i class="bx bx-plus"></i>
                                                        <span class="invoice-repeat-btn">Add Item</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- invoice subtotal -->
                                    <hr>
                                    <div class="invoice-subtotal pt-50">
                                        <div class="row">
                                            <div class="col-md-5 col-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Add Payment Terms">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Add client Note">
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-7 offset-lg-2 col-12">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item d-flex justify-content-between border-0 pb-0">
                                                        <span class="invoice-subtotal-title">Subtotal</span>
                                                        <h6 class="invoice-subtotal-value mb-0">$00.00</h6>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between border-0 pb-0">
                                                        <span class="invoice-subtotal-title">Discount</span>
                                                        <h6 class="invoice-subtotal-value mb-0">$00.00</h6>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between border-0 pb-0">
                                                        <span class="invoice-subtotal-title">Tax</span>
                                                        <h6 class="invoice-subtotal-value mb-0">0.0%</h6>
                                                    </li>
                                                    <li class="list-group-item py-0 border-0 mt-25">
                                                        <hr>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between border-0 py-0">
                                                        <span class="invoice-subtotal-title">Invoice Total</span>
                                                        <h6 class="invoice-subtotal-value mb-0">$00.00</h6>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between border-0 pb-0">
                                                        <span class="invoice-subtotal-title">Paid to date</span>
                                                        <h6 class="invoice-subtotal-value mb-0">$00.00</h6>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between border-0 pb-0">
                                                        <span class="invoice-subtotal-title">Balance (USD)</span>
                                                        <h6 class="invoice-subtotal-value mb-0">$000</h6>
                                                    </li>
                                                    <li class="list-group-item border-0 pb-0">
                                                        <button class="btn btn-primary btn-block subtotal-preview-btn">Preview</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- invoice action  -->
                        <div class="col-xl-3 col-md-4 col-12">
                            <div class="card invoice-action-wrapper shadow-none border">
                                <div class="card-body">
                                    <div class="invoice-action-btn mb-1">
                                        <button class="btn btn-primary btn-block invoice-send-btn">
                                            <i class="bx bx-send"></i>
                                            <span>Send Invoice</span>
                                        </button>
                                    </div>
                                    <div class="invoice-action-btn mb-1">
                                        <button class="btn btn-light-primary btn-block">
                                            <span>Download Invoice</span>
                                        </button>
                                    </div>
                                    <div class="invoice-action-btn mb-1">
                                        <button class="btn btn-light-primary btn-block">Preview</button>
                                    </div>
                                    <div class="invoice-action-btn mb-1">
                                        <button class="btn btn-light-primary btn-block">Save</button>
                                    </div>
                                    <div class="invoice-action-btn mb-1">
                                        <button class="btn btn-success btn-block">
                                            <i class='bx bx-dollar'></i>
                                            <span>Add Payment</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="invoice-payment">
                                <div class="invoice-payment-option mb-2">
                                    <p>Accept payments via</p>
                                    <select name="payment" id="paymentOption" class="form-control bg-transparent">
                                        <option value="DebitCard">Debit Card</option>
                                        <option value="DebitCard">Credit Card</option>
                                        <option value="DebitCard">Paypal</option>
                                        <option value="DebitCard">Internet Banking</option>
                                        <option value="DebitCard">UPI Transfer</option>
                                    </select>
                                </div>
                                <div class="invoice-terms">
                                    <div class="d-flex justify-content-between py-50">
                                        <span class="invoice-terms-title">Payment Terms</span>
                                        <div class="custom-control custom-switch custom-switch-glow">
                                            <input type="checkbox" class="custom-control-input" checked id="paymentTerm">
                                            <label class="custom-control-label" for="paymentTerm">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between py-50">
                                        <span class="invoice-terms-title">Client Notes</span>
                                        <div class="custom-control custom-switch custom-switch-glow">
                                            <input type="checkbox" class="custom-control-input" checked id="clientNote">
                                            <label class="custom-control-label" for="clientNote">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between py-50">
                                        <span class="invoice-terms-title">Payment Stub</span>
                                        <div class="custom-control custom-switch custom-switch-glow">
                                            <input type="checkbox" class="custom-control-input" id="paymentstub">
                                            <label class="custom-control-label" for="paymentstub">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection
