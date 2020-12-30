@extends('layouts.site')
@section('content')
    <nav data-depth="1" class="breadcrumb-bg">
        <div class="container no-index">
            <div class="breadcrumb">
                <ol itemscope="" itemtype="http://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a itemprop="item" href="{{route('home')}}">
                            <span itemprop="name">Home</span>
                        </a>
                        <meta itemprop="position" content="1">
                    </li>
                </ol>
            </div>
        </div>
    </nav>
    <div class="container no-index">
        <div class="row">
            <div id="content-wrapper" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div id="main">
                    <div class="page-header">
                        <h1 class="page-title hidden-xs-up">
                            {{__('log in to your account')}}
                        </h1>
                    </div>
                    <section id="content" class="page-content">
                        <section class="login-form">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <section>
                                    <div class="form-group row no-gutters">
                                        <label class="col-md-2 form-control-label mb-xs-5 required">
                                            {{__('name')}} :
                                        </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="name" value="{{ old('name') }}"
                                                   type="text" required="">
                                            @error('name')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4 form-control-comment right">
                                        </div>
                                    </div>
                                    <div class="form-group row no-gutters">
                                        <label class="col-md-2 form-control-label mb-xs-5 required">
                                            {{__('email')}} :
                                        </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="email" value="{{ old('email') }}"
                                                   type="email" required="">
                                            @error('email')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4 form-control-comment right">
                                        </div>
                                    </div>
                                    <div class="form-group row no-gutters">
                                        <label class="col-md-2 form-control-label mb-xs-5 required">
                                            {{__('password')}} :
                                        </label>
                                        <div class="col-md-6">
                                            <div class="input-group js-parent-focus">
                                                <input class="form-control js-child-focus js-visible-password"
                                                       name="password" type="password" value=""
                                                       required="">
                                                <span class="input-group-btn">
                                                                <button class="btn" type="button"
                                                                        data-action="show-password"
                                                                        data-text-show="Show"
                                                                        data-text-hide="Hide">
                                                                  {{__('show')}}
                                                                </button>
                                                 </span>
                                            </div>
                                            @error('password')
                                            <span class="text-danger invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4 form-control-comment right">
                                        </div>
                                    </div>
                                    <div class="form-group row no-gutters">
                                        <label class="col-md-2 form-control-label mb-xs-5 required">
                                            {{__('confirm password')}} :
                                        </label>
                                        <div class="col-md-6">
                                            <div class="input-group js-parent-focus">
                                                <input class="form-control js-child-focus js-visible-password"
                                                       name="password_confirmation" type="password" value=""
                                                       required="">
                                                <span class="input-group-btn">
                                                    <button class="btn" type="button" data-action="show-password"
                                                            data-text-show="Show"
                                                            data-text-hide="Hide">
                                                      {{__('show')}}
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 form-control-comment right"></div>
                                    </div>
                                    <div class="row no-gutters">
                                        <div class="col-md-10 offset-md-2">
                                            <div class="forgot-password">
                                                <a href="password-recovery.html" rel="nofollow">
                                                    {{__('forgot your password?')}}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <footer class="form-footer clearfix">
                                    <div class="row no-gutters">
                                        <div class="col-md-10 offset-md-2">
                                            <input type="hidden" name="submitLogin" value="1">
                                            <button class="btn btn-primary" data-link-action="sign-in" type="submit"
                                                    class="form-control-submit">
                                                {{__('sign up')}}
                                            </button>
                                        </div>
                                    </div>
                                </footer>
                            </form>
                        </section>
                        <div class="row no-gutters">
                            <div class="col-md-10 offset-md-2">
                                <div class="no-account">
                                    <a href="{{route('login')}}" data-link-action="display-register-form">
                                        {{__('Have account? Login Here')}}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <footer class="page-footer">
                        <!-- Footer content -->
                    </footer>
                </div>
            </div>
        </div>
    </div>
    <br>
@stop