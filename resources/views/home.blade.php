@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            {{-- <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div> --}}
            <section class="section">
                <div class="row">
                  <div class="col-lg-12">
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible border-0 fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        {{ session('success') }}
                    </div>
                 @endif
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Generate Travelling Expense PDF</h5>
          
                        <!-- General Form Elements -->
                        <form  action="#" method="post">
                          @csrf
                          <div class="row mb-3">
                            <div class="col-lg-6">
                              <label for="inputDate" class="col-form-label">Name<sup>*</sup></label>
                              <input type="text" name="academic_fee"  class="form-control">
                            
                              </div>
          
                            <div class="col-lg-6">
                              <label for="inputText" class="col-form-label">Address</label>
                                <input type="text" name="academic_fee"  class="form-control">
                              </div>
                          </div>

                          <div class="row mb-3">
                            <div class="col-lg-6">
                              <label for="inputDate" class="col-form-label">Place and Zip Code<sup>*</sup></label>
                              <input type="text" name="academic_fee"  class="form-control">

                             </div>
          
                            <div class="col-lg-6">
                              <label for="inputText" class="col-form-label">Bank Name</label>
                                <input type="text" name="academic_fee"  class="form-control">
                              </div>
                          </div>

                          <div class="row mb-3">
                            <div class="col-lg-6">
                              <label for="inputDate" class="col-form-label">iBAN<sup>*</sup></label>
                              <input type="text" name="academic_fee"  class="form-control">

                             </div>
          
                            <div class="col-lg-6">
                              <label for="inputText" class="col-form-label">BIC</label>
                                <input type="text" name="academic_fee"  class="form-control">
                              </div>
                          </div>
          
          
                          <div class="row mb-3">
          
                          <div class="col-lg-6">
                            <label for="inputText" class="col-form-label">Starting Date</label>
                              <input type="date" name="issue_date" class="form-control">
                            </div>
                            <div class="col-lg-6">
                              <label for="inputText" class="col-form-label">Ending Date</label>
                                <input type="date" name="submit_date"  class="form-control">
                              </div>
                          </div>
          
                          <div class="row mb-3">
                              <div class="col-lg-6">
                                <label for="inputText" class="col-form-label">Journey Destination</label>
                                  <input type="text" name="stationery_charges" pattern="-?[0-9]+$" oninput="validateNumber(this)" placeholder="Enter the Stationery Charges"  class="form-control">
                                </div>
                         </div>
                         <div class="row mb-3">
                          <div class="col-lg-12">
                              <label class="col-form-label">Journey Destination</label>
                              <div>
                                  <input type="checkbox" name="stationery_charges[]" value="0">  Company’s car
                                  <input type="checkbox" name="stationery_charges[]" value="1" style="margin-left: 25px">  Private car
                                  <input type="checkbox" name="stationery_charges[]" value="2" style="margin-left: 25px">  Rental car
                                  <input type="checkbox" name="stationery_charges[]" value="3" style="margin-left: 25px"> Train
                                  <input type="checkbox" name="stationery_charges[]" value="4" style="margin-left: 25px"> Tax
                                  <input type="checkbox" name="stationery_charges[]" value="5" style="margin-left: 25px"> Airplane
                              </div>
                          </div>
                      </div>
                      
          
                    
          
                          <div class="row mb-3">
                           
                            <div class="col-lg-12">
                              <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                          </div>
          
                        </form><!-- End General Form Elements -->
          
                      </div>
                    </div>
          
                  </div>
                </div>
              </section>
        </div>
    </div>
</div>
@endsection
