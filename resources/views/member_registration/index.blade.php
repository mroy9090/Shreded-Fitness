@extends('layouts.sneat')





@section('body')
<div class="container-xl flex-grow-1 container-p-y">
  <div class="row">
    <div class="col-xl ">
      <div class="card col-8 ">
        <div class="card-header d-flex align-items-center justify-content-between text-center">
          <h5 class="mb-0">Basic Layout</h5>
        </div>
        <div class="card-body">
          <form action="{{ url('member_registration/post') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Applicant Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control"  placeholder="Name" name="applicant_name"/>
              </div>
            </div>
            @error('applicant_name')
              <span class="text-danger">{{ $message }}</span>
              <br>
              <br>
            @enderror
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Home Address</label>
              <div class="col-sm-10">
                <input type="text" class="form-control"  placeholder="Home Address" name="home_address"/>
              </div>
            </div>
            @error('home_address')
              <span class="text-danger">{{ $message }}</span>
              <br>
              <br>
            @enderror
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Applicant Email</label>
              <div class="col-sm-10">
                <div class="input-group input-group-merge">
                  <input type="text" class="form-control"  placeholder="Applicant Email" name="applicant_email"/>
                </div>
                <div class="form-text">You can use letters, numbers & periods</div>
              </div>
            </div>
            @error('applicant_email')
              <span class="text-danger">{{ $message }}</span>
              <br>
              <br>
            @enderror
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Phone Number</label>
              <div class="col-sm-10">
                <input type="text" class="form-control"  placeholder="Phone Number" name="phone_number"/>
              </div>
            </div>
            @error('phone_number')
              <span class="text-danger">{{ $message }}</span>
              <br>
              <br>
            @enderror
            
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Alternative Phone Number</label>
              <div class="col-sm-10">
                <input type="text" class="form-control"  placeholder="Alternative Phone Number" name="alternative_phone_number"/>
              </div>
            </div>
            @error('alternative_phone_number')
              <span class="text-danger">{{ $message }}</span>
              <br>
              <br>
            @enderror
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Gender</label>
              <div class="col-sm-10">
                <input type="text" class="form-control"  placeholder="Gender" name="gender"/>
              </div>
            </div>
            @error('gender')
              <span class="text-danger">{{ $message }}</span>
              <br>
              <br>
            @enderror
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Package Status</label>
                <div class="col-sm-10">
                    <select class="form-select" name="package_status" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="monthly">Monthly</option>
                        <option value="three_month">3 Month</option>
                        <option value="six_month">6 Month</option>
                        <option value="yearly">Yearly</option>
                        <option value="life_time">Life Time</option>
                    </select>
                </div>
            </div>

            
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Current Weight</label>
              <div class="col-sm-10">
                <input type="text" class="form-control"  placeholder="Current Weight" name="current_weight"/>
              </div>
            </div>
            @error('current_weight')
              <span class="text-danger">{{ $message }}</span>
              <br>
              <br>
            @enderror
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">N.I.D. Number</label>
              <div class="col-sm-10">
                <input type="text" class="form-control"  placeholder="N.I.D. Number" name="nid_number"/>
              </div>
            </div>
            @error('nid_number')
              <span class="text-danger">{{ $message }}</span>
              <br>
              <br>
            @enderror
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">R.F.I.D. Number</label>
              <div class="col-sm-10">
                <input type="text" class="form-control"  placeholder="R.F.I.D. Number" name="rfid_number"/>
              </div>
            </div>
            @error('rfid_number')
              <span class="text-danger">{{ $message }}</span>
              <br>
              <br>
            @enderror
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Applicant Image</label>
              <div class="col-sm-10">
                <input type="file" class="form-control" placeholder="Applicant Image" name="applicant_image" />
              </div>
            </div>
            @error('applicant_image')
              <span class="text-danger">{{ $message }}</span>
              <br>
              <br>
            @enderror
            
            <div class="row justify-content-end">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Send</button>
              </div>
            </div>
            @if (session('member_insert_status'))
              <br>
              <br>
              <div class="alert alert-info" role="alert">
                <span class="text-danger">{{ session('member_insert_status') }}</span>
              </div>
            @endif
          </form>
        </div>
      </div>
    </div>
  </div>
</div>




    
@endsection