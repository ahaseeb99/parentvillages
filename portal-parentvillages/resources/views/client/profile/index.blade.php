@extends('client.profile.profile_layout')
@section('content')
    <div class="card card-custom card-stretch">
        <div class="card-header py-3">
            <div class="card-title align-items-start flex-column custom-title text-uppercase">
                <h3 class="card-label font-weight-bolder text-dark">Personal Information</h3>
            </div>
        </div>
        <!--begin::Form-->
        <form class="form" action="/client/change-profile/{{Auth::guard('web')->user()->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <!--begin::Body-->
            <div class="card-body">
                <div class="row">
                    <label class="col-xl-3"></label>
                    <div class="col-lg-9 col-xl-6">
                        <h5 class="font-weight-bold mb-6">Customer Info</h5>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Avatar</label>
                    <div class="col-lg-9 col-xl-6">
                        <div class="image-input image-input-outline" id="kt_profile_avatar" style="background-image: url(../assets/media/{{$user->avatar}})">
                            <div class="image-input-wrapper" style="background-image: url(../assets/media/{{$user->avatar}})"></div>
                            <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                <i class="fa fa-pen icon-sm text-muted"></i>
                                <input type="file" name="profile_image" accept=".png, .jpg, .jpeg" value="{{$user->avatar}}"/>
                                {{-- <input type="hidden" name="profile_avatar_remove" /> --}}
                            </label>
                            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                <i class="ki ki-bold-close icon-xs text-muted"></i>
                            </span>
                            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="Remove avatar">
                                <i class="ki ki-bold-close icon-xs text-muted"></i>
                            </span>
                        </div>
                        <span class="form-text text-muted">Allowed file types: png, jpg, jpeg.</span>
                    </div>
                    <span class="text_danger">
                        @error('profile_image')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">First Name</label>
                    <div class="col-lg-9 col-xl-6">
                        <input class="form-control form-control-lg form-control-solid" type="text" value="{{$name_split[0]}}" name="first_name" />
                    </div>
                    <span class="text_danger">
                        @error('first_name')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Last Name</label>
                    <div class="col-lg-9 col-xl-6">
                        <input class="form-control form-control-lg form-control-solid" type="text" value="{{$name_split[1]}}" name="last_name" />
                    </div>
                    <span class="text_danger">
                        @error('last_name')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="row">
                    <label class="col-xl-3"></label>
                    <div class="col-lg-9 col-xl-6">
                        <h5 class="font-weight-bold mt-10 mb-6">Contact Info</h5>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Email Address</label>
                    <div class="col-lg-9 col-xl-6">
                        <div class="input-group input-group-lg input-group-solid">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="la la-at"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control form-control-lg form-control-solid" value="{{$user->email}}" placeholder="Email" name="email" />
                        </div>
                    </div>
                    <span class="text_danger">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            <!--end::Body-->
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