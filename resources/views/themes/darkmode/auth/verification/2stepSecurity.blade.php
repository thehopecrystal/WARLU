@extends($theme.'layouts.app')
@section('title',trans($page_title))

@section('content')

    @include($theme.'partials.banner')

    <div id="wrapper">
 
 <!--Start sidebar-wrapper-->
    <section class="account-section bg_img  content-wrapper" data-background="{{getFile(config('location.logo.path').'background_image.jpg')}}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-7">
                    <div class="account-wrapper">
                        <h4 class="account-title">@lang($page_title)</h4>

                        <form action="{{route('user.twoFA-Verify')}}"  method="post">
                            @csrf
                            <div class="account-form-area">
                                <div class="input--group">
                                    <label for="code" class="form-label">@lang('Enter Code')</label>
                                    <div class="group--input">
                                        <input type="text" id="code"  name="code" value="{{old('code')}}">
                                        @error('code')<span class="text-danger  mt-1">{{ trans($message) }}</span>@enderror
                                        @error('error')<span class="text-danger  mt-1">{{ trans($message) }}</span>@enderror
                                    </div>
                                </div>
                            </div>
                            <div
                                class="d-flex flex-wrap justify-content-between align-items-center m--5px-none mt-3 fs-14">

                                <div class="btn-group w-100 m-0">
                                    <button type="submit" class="cmn-btn w-100">@lang('Submit')</button>
                                </div>
                            </div>

                        </form>


                    </div>
                </div>
            </div>
        </div>
</div>
    </section>


@endsection
