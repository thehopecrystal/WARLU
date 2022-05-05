@extends($theme.'layouts.app')
@section('title',trans('Reset Password'))

@section('content')


    @include($theme.'partials.banner')

    <div id="wrapper">
 
    <!--===Account Section===-->
    <section class="account-section bg_img content-wrapper" data-background="{{getFile(config('location.logo.path').'background_image.jpg')}}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-7">
                    <div class="account-wrapper">
                        <h4 class="account-title">@lang('Reset Password')</h4>

                        <form action="{{ route('password.update') }}"  method="post">
                            @csrf
                            <div class="account-form-area">

                                @if (session('status'))
                                    <div class="input--group">
                                        <div class="alert alert-success alert-dismissible fade show w-100" role="alert">
                                            {{ trans(session('status')) }}
                                            <button type="button" class="close text-right" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    </div>
                                @endif

                                    <input type="hidden" name="token" value="{{ $token }}">
                                    <input type="hidden" name="email" value="{{ $email }}">

                                <div class="input--group">
                                    <label for="password" class="form-label">@lang('New Password')</label>
                                    <div class="group--input">
                                        <input type="password" id="password" name="password" value="" placeholder="{{trans('******')}}">
                                        @error('password')<span class="text-danger  mt-1">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="input--group">
                                    <label for="password" class="form-label">@lang('Confirm Password')</label>
                                    <div class="group--input">
                                        <input type="password" id="password" name="password_confirmation" value="" placeholder="{{trans('******')}}">
                                    </div>
                                </div>

                            </div>
                            <div
                                class="d-flex flex-wrap justify-content-between align-items-center m--5px-none mt-3 fs-14">
                                <div class="m--5px">
                                    @lang("Don't have any account?") <a href="{{ route('register') }}" class="text--base ms-2">@lang('Sign Up')</a>
                                </div>
                                <div class="btn-group m-0">
                                    <button type="submit" class="cmn-btn">@lang('Update Password')</button>
                                </div>
                            </div>

                        </form>


                    </div>
                </div>
            </div>
        </div>
</div>
    </section>
    <!--===Account Section===-->




@endsection
