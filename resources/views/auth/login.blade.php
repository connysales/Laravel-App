@extends('index')
  
@section('content')

<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.3/components/logins/login-3/assets/css/login-3.css">
  <!-- Login 3 - Bootstrap Brain Component -->
  <section class="p-3 p-md-4 p-xl-5">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 bsb-tpl-bg-platinum">
          <div class="d-flex flex-column justify-content-between h-100 p-3 p-md-4 p-xl-5">
            <h3 class="m-0">Welcome!</h3>
            <a class="navbar-brand" href="/"><strong>Grafreez</strong></a>
            <p class="mb-0">Not a member yet? <a href="registration" class="link-secondary text-decoration-none">Register now</a></p>
          </div>
        </div>
        <div class="col-12 col-md-6 bsb-tpl-bg-lotion">
          <div class="p-3 p-md-4 p-xl-5">
            <div class="row">
              <div class="col-12">
                <div class="mb-5">
                  <h3>Log in</h3>
                </div>
              </div>
            </div>
            <form action="{{ route('login.post') }}" method="POST">
                @csrf
              <div class="row gy-3 gy-md-4 overflow-hidden">
                <div class="col-12">
                  <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
                  @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="col-12">
                  <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                  <input type="password" class="form-control" name="password" id="password" value="" required>
                  @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" name="remember_me" id="remember_me">
                    <label class="form-check-label text-secondary" for="remember_me">
                      Keep me logged in
                    </label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="d-grid">
                    <button class="btn bsb-btn-xl btn-primary" type="submit">Log in now</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection