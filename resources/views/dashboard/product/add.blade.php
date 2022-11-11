@extends('dashboard.layout');


@section("section")

{{-- <h1>add Function</h1> --}}
<div class="card card-custom">
    <div class="card-header">
     <h3 class="card-title">
      {{$methodname}}
     </h3>
    </div>
    <!--begin::Form-->
    <form class="form" method="post" action="{{ url('product/store') }}">
     <div class="card-body">
      <div class="form-group form-group-last">
       <div class="alert alert-custom alert-default" role="alert">
        <div class="alert-icon"><i class="flaticon-warning text-primary"></i></div>
        <div class="alert-text">
         Add the <code>disabled</code> or <code>readonly</code> boolean attribute on an input to prevent user interactions.
         Disabled inputs appear lighter and add a <code>not-allowed</code> cursor.
        </div>
       </div>
      </div>
      <div class="form-group">
       <label>Name</label>
       <input type="text" name="name"  class="form-control form-control-solid" placeholder="Enter Name"/>
      </div>
      {{-- <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text">$</span>
        </div>
        <input type="text" class="form-control" placeholder="0.00" aria-label="Amount (to the nearest dollar)">
        <div class="input-group-append">
            <span class="input-group-text">
                <i class="la la-registered icon-lg"></i>
            </span>
        </div>
    </div> --}}
    <div class="form-group">
        <label>Qut</label>
        <div class="input-group">
         {{-- <div class="input-group-prepend">
          <span class="input-group-text">$</span>
         </div> --}}
         <input type="text" class="form-control" placeholder="Qut" aria-label="Amount (to the nearest dollar)"/>
         {{-- <div class="input-group-append">
          <span class="input-group-text"><i class="la la-registered"></i></span>
         </div> --}}
        </div>
       </div>
       <div class="form-group">
        <label>Cost-Price</label>
        <div class="input-group">
         <div class="input-group-prepend">
          <span class="input-group-text">$</span>
         </div>
         <input type="text" name="cost_price"   class="form-control" placeholder="Cost-Price" aria-label="Amount (to the nearest dollar)"/>
         <div class="input-group-append">
          <span class="input-group-text"><i class="la la-registered"></i></span>
         </div>
        </div>
       </div>
       <div class="form-group">
        <label>Selling-price</label>
        <div class="input-group">
         <div class="input-group-prepend">
          <span class="input-group-text">$</span>
         </div>
         <input type="text" name="selling_price"   class="form-control" placeholder="Selling-price" aria-label="Amount (to the nearest dollar)"/>
         <div class="input-group-append">
          <span class="input-group-text"><i class="la la-registered"></i></span>
         </div>
        </div>
       </div>
      {{-- <div class="form-group">
       <label>Select</label>
       <select class="form-control form-control-solid">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
       </select>
      </div>
      <div class="form-group">
       <label for="exampleTextarea">Textarea</label>
       <textarea class="form-control form-control-solid" rows="3"></textarea>
      </div>
     </div> --}}
     <div class="card-footer">
      <button type="reset" class="btn btn-primary mr-2">Submit</button>
      <button type="reset" class="btn btn-secondary">Cancel</button>
     </div>
    </form>
    <!--end::Form-->
   </div>


@endsection
