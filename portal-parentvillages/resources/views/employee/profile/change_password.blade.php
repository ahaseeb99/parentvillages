@extends('employee.profile.layout')
@section('content')
    <div class="card card-custom card-stretch">
        <div class="card-header py-3">
            <div class="card-title align-items-start flex-column custom-title text-uppercase">
                <h3 class="card-label font-weight-bolder text-dark">Password Change</h3>
            </div>
        </div>
        <!--begin::Form-->
        <form class="form" action="/employee/change-password/{{Auth::guard('employee')->user()->id}}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label text-alert">Current Password</label>
                    <div class="col-lg-9 col-xl-6">
                        <input type="password" class="form-control form-control-lg form-control-solid mb-2" name="current_password" placeholder="Current password" />
                        <span class="text_danger">
                            @error('current_password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label text-alert">New Password</label>
                    <div class="col-lg-9 col-xl-6">
                        <input type="password" class="form-control form-control-lg form-control-solid" name="password" placeholder="New password" />
                        <span class="text_danger">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label text-alert">Verify Password</label>
                    <div class="col-lg-9 col-xl-6">
                        <input type="password" class="form-control form-control-lg form-control-solid" name="password_confirmation" id="confirm_password" placeholder="Verify password" />
                        <span class="text_danger">
                            @error('password_confirmation')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>
            </div>
            <div class="card-header py-3">
                <div class="card-toolbar">
                    <button type="submit" class="btn btn-success mr-2">Save Changes</button>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                </div>
            </div>
        </form>
        <!--end::Form-->
    </div>
      
@endsection