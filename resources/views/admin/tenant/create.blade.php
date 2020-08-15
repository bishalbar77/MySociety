{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')
<!--begin::Card-->
<!--begin::Card-->
<div class="card">
<div class="card-header">
<h3 class="card-title">Add Tenant Details</h3>
</div>
<!--begin::Form-->
    <form class="form"  method="POST" action="{{ route('register') }}">
    @csrf
        <div class="card-body">
            <div class="form-group row">
                <div class="col-lg-4">
                <label>First Name:</label>
                <input type="text" class="form-control form-control-solid form-control-lg @error('name') is-invalid @enderror" id="name" name="name" autocomplete="name"/>
                @error('fname')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
                <span class="form-text text-muted">Please enter your First Name</span>
                </div>

                <div class="col-lg-4">
                <label>Last Name:</label>
                <input type="text" class="form-control form-control-solid form-control-lg @error('name') is-invalid @enderror" id="ltname" name="ltname" autocomplete="ltname"/>
                @error('lname')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>
                <div class="col-lg-4">
                <label>Contact Phone</label>
                <div class="input-group input-group-solid input-group-lg">
                <div class="input-group-prepend">
                <span class="input-group-text">
                <i class="la la-phone"></i>
                </span>
                </div>
                <input id="phone" type="number" class="form-control form-control-solid form-control-lg @error('phone') is-invalid @enderror" name="phone" required autocomplete="phone" autofocus/>
                @error('phone')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>
                </div>
            </div>

            <div class="form-group row">
                

                <div class="col-lg-4">
                <label>Email Address</label>
                <div class="input-group input-group-solid input-group-lg">
                <div class="input-group-prepend">
                <span class="input-group-text">
                <i class="la la-at"></i>
                </span>
                </div>
                <input id="email" type="email" class="form-control form-control-solid form-control-lg form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                <span class="form-text text-muted"></span>
                @error('email')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>
                </div>

                <div class="col-lg-4">
                <label>Date-of-birth:</label>

                <div class="input-group date">
                <input type="date" class="form-control form-control-solid form-control-lg" value="05/20/2017" id="dob" name="dob" autocomplete="dob"/>
                <div class="input-group-append">

                </div>
                </div>
                <span class="form-text text-muted">Please enter date of birth</span>

                </div>

                <div class="col-lg-4">
                <label>Address:</label>
                <div class="input-group">
                <input type="text" id="add" type="text" class="form-control form-control-solid form-control-lg" name="add" autocomplete="add" autofocus />
                <div class="input-group-append">
                <span class="input-group-text">
                <i class="la la-map-marker"></i>
                </span>
                </div>
                </div>
                <span class="form-text text-muted">Please enter your address</span>
                </div>
            </div>

            

            <div class="form-group row">
            <div class="col-lg-3">
            <label>Post/Pincode</label>
            <input id="pincode" type="text" class="form-control form-control-solid form-control-lg " name="pincode" required autocomplete="pincode" autofocus/>
            <span class="form-text text-muted">Please enter your Postcode or Pincode</span>

            </div>

            <div class="col-lg-1">
            <label>.</label>
            <input type="button" class="btn btn-success form-control form-control-solid form-control-lg" value="Auto" onclick="get_details()">
            </div>

            <div class="col-lg-4">
            <label>District:</label>
            <input class="form-control form-control-solid form-control-lg" name="district" required autocomplete="district" autofocus id="district">

            <span class="form-text text-muted">Please Select District</span>
            </div>
            <!--begin::Row-->

            <!--end::Group-->
            <!--begin::Group-->
            <div class="col-lg-4">
            <label>City</label>
            <input id="city" type="text" class="textbox form-control form-control-solid form-control-lg " name="city" required autocomplete="city" autofocus/>
            <span class="form-text text-muted">Please enter your City.</span>
            </div>
            </div>
            <!--end::Group-->

            <!--end::Row-->
            <!--begin::Row-->
            <div class="form-group row">
            <div class="col-lg-4">
            <label>State</label>
            <input id="state" type="text" class="form-control form-control-solid form-control-lg " name="state" required autocomplete="state" autofocus/>
            <span class="form-text text-muted">Please enter your State.</span>
            </div>
            <div class="col-lg-4">
            <label>Country</label>
            <input id="country" type="text" class="form-control form-control-solid form-control-lg " name="country" required autocomplete="country" autofocus/>
            </div>
            <!--end::Group-->
            <div class="col-lg-4">
            <label>Flat No.</label>
            <select class="form-control is-invalid @enderror" name="flat_no" id="kt_select2_1"> 
                    <option>Select Flat No.</option>
                    <option>O+</option>
                    <option>O-</option>
                    <option>A+</opton>
                    <option>A-</opton>
                    <option>B+</opton>
                    <option>B-</opton>
                    <option>AB+</opton>
                    <option>AB-</opton>
                    <option>other</option>
                </select>
            </div>
            <div class="col-lg-4">
                <label>Ownership:</label><br>
                <input type="radio" name="ownership" value="Living" checked>
                <label>Living</label>&nbsp;
                <input type="radio" name="ownership" value="Rent">
                <label>Rent</label>&nbsp;

            </div>
            </div>
            
            <div class="card-footer">
            <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-8">
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button type="reset" class="btn btn-secondary">Cancel</button>
            </div>
            </div>
        </div>
    </form>
<!--end::Form-->
</div>


@endsection

{{-- Scripts Section --}}
@section('scripts')

<script src="{{ asset('js/pages/crud/ktdatatable/base/html-table.js') }}" type="text/javascript"></script>	
<script src="js/pages/crud/forms/widgets/select2.js?v=7.0.3"></script>	

@endsection 