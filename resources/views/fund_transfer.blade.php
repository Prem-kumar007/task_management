@extends('layout.layout')

@section('page-header')
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
@endsection

@section('page-content')
<div class="page-heading">

    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Fund Transfer</h3>
                <p class="text-subtitle text-muted"></p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Fund Transfer</li>
                        <!-- <li class="breadcrumb-item active" aria-current="page">Parsley</li> -->
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- // Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <!-- <h4 class="card-title">Multiple Column</h4> -->
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" data-parsley-validate>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mandatory">
                                            <label for="first-name-column" class="form-label">First Name</label>
                                            <input type="text" id="first-name-column" class="form-control" placeholder="First Name" name="fname-column" data-parsley-required="true">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column" class="form-label">Last Name</label>
                                            <input type="text" id="last-name-column" class="form-control" placeholder="Last Name" name="lname-column">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="city-column" class="form-label">City</label>
                                            <input type="text" id="city-column" class="form-control" placeholder="City" name="city-column" data-parsley-restricted-city="Jakarta">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="country-floating" class="form-label">Country</label>
                                            <input type="text" id="country-floating" class="form-control" name="country-floating" placeholder="Country">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="company-column" class="form-label">Company</label>
                                            <input type="text" id="company-column" class="form-control" name="company-column" placeholder="Company">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mandatory">
                                            <label for="email-id-column" class="form-label">Email</label>
                                            <input type="email" id="email-id-column" class="form-control" name="email-id-column" placeholder="Email" data-parsley-required="true">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class='form-group'>
                                        <div class="form-check mandatory">
                                            <input type="checkbox" id="checkbox5" class='form-check-input' checked data-parsley-required="true" data-parsley-error-message="You have to accept our terms and conditions to proceed.">
                                            <label for="checkbox5" class="form-check-label form-label">I accept these terms and conditions.</label>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="row">
                                    <div class="col-12">
                                    <div class='form-group mandatory'>
                                        <fieldset>
                                        <label class="form-label">
                                            Favourite Colour
                                        </label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" data-parsley-required="true">
                                            <label class="form-check-label form-label" for="flexRadioDefault1">
                                            Red
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                            <label class="form-check-label form-label" for="flexRadioDefault2">
                                            Blue
                                            </label>
                                        </div>
                                        </fieldset>
                                    </div>
                                    </div>
                                </div> -->
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- // Basic multiple Column Form section end -->
</div>
<script src="assets/extensions/jquery/jquery.min.js"></script>
<script src="assets/extensions/parsleyjs/parsley.min.js"></script>
<script src="assets/js/pages/parsley.js"></script>
@endsection
