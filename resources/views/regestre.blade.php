@extends('layouts.authmaster')
@section('name')
      <div class="body-section" style="background-image: url('https://actualitte.com/uploads/images/allemagne-en-secret-il-s-est-constitue-une-bibliotheque-de-70-000-livres-63e10eb90dd0d220567149.jpg'); background-size: cover; height: 400px; display: flex; align-items: center; justify-content: center; color: white; text-align: center;">
        
        <section class="vh-80 gradient-custom">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                  <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">
        
                      <div class="mb-md-5 mt-md-4 pb-5">
        
                        <h2 class="fw-bold mb-2 text-uppercase">Register</h2>
                        <form action="?uri=Auth/registration" method="POST">
                          <div class="form-outline form-white mb-4">
                            <input name="firstname" type="text" id="typeUsernameX" class="form-control form-control-lg" />
                            <label class="form-label" for="typeUsernamX">firstname</label>
                          </div>
                          <div class="form-outline form-white mb-4">
                            <input name="lastname" type="text" id="typeUsernameX" class="form-control form-control-lg" />
                            <label class="form-label" for="typeUsernamX">lastname</label>
                          </div>
                          <div class="form-outline form-white mb-4">
                            <input name="email" type="email" id="typeEmailX" class="form-control form-control-lg" />
                            <label class="form-label" for="typeEmailX">Email</label>
                          </div>
                          <div class="form-outline form-white mb-4">
                            <input name="pasword" type="password" id="typePasswordX" class="form-control form-control-lg" />
                            <label class="form-label" for="typePasswordX">Password</label>
                          </div>
        
                          <button type="submit" class="btn btn-outline-light btn-lg px-5" name="submit" value="regester">sign up</button>
                        </form>
                        <div class="d-flex justify-content-center text-center mt-4 pt-1">
                          <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                          <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                          <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                        </div>
        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
    </div>
    @endsection