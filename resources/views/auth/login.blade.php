@extends('layouts.main')
@section('content')
    <!-- Main wrapper -->
    <div class="shop-wrapper">

        <!-- Search overlay -->
        <div class="search-overlay"></div>

        <!-- Search input -->
        <div class="search-input-wrapper is-desktop is-hidden">
            <div class="field">
                <div class="control">
                    <input id="nephos-search" type="text" name="search" placeholder="Search a Product">
                    <span id="clear-search" role="button"><i data-feather="x"></i></span>
                    <span class="bar"></span>
                </div>
                <span class="search-help">Type the name of the product you are looking for</span>
            </div>
        </div>
        <!-- Main section -->
        <div id="shop-authentication" class="section">
            <!-- Container -->
            <div class="container">

                <!-- Authentication Layout -->
                <div class="columns account-header is-auth">
                    <div class="column main-column is-tablet-landscape-padded">
                        <!-- Title -->
                        <div class="auth-title">
                            <h2 id="auth-main-title">LOGIN</h2>
                            <img class="brand-filigrane" src="assets/img/logo/nephos-greyscale.svg" alt="">
                        </div>
                        <!--Toggler-->
                        <div class="auth-toggler">
                            <input type="checkbox">
                            <div class="toggler-track">
                                <div class="hexagon-wrap">
                                    <div class="hexagon">
                                        <i class="login-icon" data-feather="user"></i>
                                        <i class="register-icon" data-feather="layers"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--New Login-->
                        <div class="main-auth-wrapper">
                            <!--Login wrapper-->
                            <div class="login-form-wrapper">
                                <!--Login form-->
                                <div class="login-form">
                                    <form id="login-form" method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <!--Field-->
                                        <div class="field has-flex-label has-validation">
                                            <label>
                                                <span>Email</span>
                                                <span class="error">Please enter a valid email</span>
                                            </label>
                                            <div class="control is-bigger has-icon">
                                                <input id="login-email" type="email" name="email" class="input" required>
                                                <div class="form-icon">
                                                    <i data-feather="mail"></i>
                                                </div>
                                                <div class="error-icon">
                                                    <i data-feather="x"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Field-->
                                        <div class="field has-flex-label has-validation">
                                            <label>
                                                <span>Password</span>
                                                <span class="error">Minimum 8 characters</span>
                                            </label>
                                            <div class="control is-bigger has-icon">
                                                <input id="login-password" type="password" name="password" class="input" required>
                                                <div class="form-icon">
                                                    <i data-feather="lock"></i>
                                                </div>
                                                <div class="error-icon">
                                                    <i data-feather="x"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Field-->
                                        <div class="flex-field">
                                            <label class="special-toggle">
                                                <input type="checkbox">
                                                <span class="toggler">
                                                        <span class="active">
                                                            <i data-feather="check"></i>
                                                        </span>
                                                <span class="inactive">
                                                            <i data-feather="circle"></i>
                                                        </span>
                                                </span>
                                            </label>
                                            <div class="muted-text">Remember me?</div>
                                        </div>
                                        <!--Submit-->
                                        <div class="">
                                            <button type="submit" class="button primary-button upper-button raised is-fullwidth is-rounded">Login</button>
                                        </div>
                                        <!--Forgot-->
                                        <div class="forgot-link has-text-centered">
                                            <a>Forgot Password?</a>
                                        </div>
                                    </form>
                                </div>
                                <!--Reset form-->
                                <div class="reset-form is-hidden">
                                    <form>
                                        <p class="form-description">Enter your email to be able to reset your password. We'll send you an email with the instructions to follow.</p>
                                        <!--Field-->
                                        <div class="field">
                                            <label>Email</label>
                                            <div class="control is-bigger has-icon">
                                                <input type="text" class="input">
                                                <div class="form-icon">
                                                    <i data-feather="mail"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Submit-->
                                        <div class="button-wrap">
                                            <button type="button" class="button primary-button upper-button raised is-fullwidth is-rounded">Reset Password</button>
                                        </div>
                                        <!--Back-->
                                        <div class="back-link has-text-centered">
                                            <a>Back To Login</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!--Registration wrapper-->
                            <div class="registration-form-wrapper is-hidden">
                                <!--Registration form-->
                                <div class="registration-form">
                                    <form>
                                        <!--Field-->
                                        <div class="field has-flex-label has-validation">
                                            <label>
                                                <span>Email</span>
                                                <span class="error">Please enter a valid email</span>
                                            </label>
                                            <div class="control is-bigger has-icon">
                                                <input type="text" class="input">
                                                <div class="form-icon">
                                                    <i data-feather="mail"></i>
                                                </div>
                                                <div class="error-icon">
                                                    <i data-feather="x"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Field-->
                                        <div class="field">
                                            <label>First Name</label>
                                            <div class="control is-bigger has-icon">
                                                <input type="text" class="input">
                                                <div class="form-icon">
                                                    <i data-feather="user"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Field-->
                                        <div class="field">
                                            <label>Last Name</label>
                                            <div class="control is-bigger has-icon">
                                                <input type="text" class="input">
                                                <div class="form-icon">
                                                    <i data-feather="user"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Field-->
                                        <div class="field">
                                            <label>Password</label>
                                            <div class="control is-bigger has-icon">
                                                <input type="password" class="input">
                                                <div class="form-icon">
                                                    <i data-feather="lock"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Field-->
                                        <div class="flex-field">
                                            <label class="special-toggle">
                                                <input type="checkbox">
                                                <span class="toggler">
                                                        <span class="active">
                                                            <i data-feather="check"></i>
                                                        </span>
                                                <span class="inactive">
                                                            <i data-feather="circle"></i>
                                                        </span>
                                                </span>
                                            </label>
                                            <div class="muted-text">Subscribe to Newsletter?</div>
                                        </div>
                                        <!--Submit-->
                                        <div class="button-wrap">
                                            <button type="button" class="button primary-button upper-button raised is-fullwidth is-rounded">Register</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Authentication Layout -->
            </div>
            <!-- /Container -->
        </div>
        <!-- /Main section -->
    </div>
    <!-- /Main wrapper -->




    <div class="login-accounts-trigger is-active">
        <i data-feather="more-horizontal"></i>
    </div>

@endsection
