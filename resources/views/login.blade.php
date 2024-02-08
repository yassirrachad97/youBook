@extends('layouts.authmaster')

@section('name')
<div class="body-section" style="background-image: url('https://actualitte.com/uploads/images/allemagne-en-secret-il-s-est-constitue-une-bibliotheque-de-70-000-livres-63e10eb90dd0d220567149.jpg'); background-size: cover; display: flex; align-items: center; justify-content: center; color: white; text-align: center;">

    <section class=" gradient-custom">
        <div class="container py-3 ">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-12 col-xl-12">
                    <div class="card bg-dark text-white w-100" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <div class="mb-md-5 mt-md-4 pb-5">
                                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                <p class="text-white-50 mb-5">Please enter your email and password!</p>
                                <form action="{{ route('login') }}" method="POST">
                                    @csrf <!-- Add CSRF token -->
                                    <div class="form-outline form-white mb-4">
                                        <input name="email" type="email" id="typeEmailX" class="form-control form-control-lg" />
                                        <label class="form-label" for="typeEmailX">Email</label>
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <input name="password" type="password" id="typePasswordX" class="form-control form-control-lg" />
                                        <label class="form-label" for="typePasswordX">Password</label>
                                    </div>
                                    <span id="error" style="display:none; color: red;">Email or password incorrect!!</span>

                                    <button type="submit" class="btn btn-outline-light btn-lg px-5" name="submit" value="login">Login</button>
                                </form>
                            </div>

                            <div>
                                <p class="mb-0">Don't have an account? <a href="{{ route('regester') }}" class="text-white-50 fw-bold">Sign Up</a></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
