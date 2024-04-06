@extends('no')
  
@section('content')

<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.3/components/logins/login-3/assets/css/login-3.css">
  <!-- Login 3 - Bootstrap Brain Component -->
  <br><br><br><br><br><br>
  <section class="p-3 p-md-4 p-xl-5">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 bsb-tpl-bg-platinum">
          <div class="d-flex flex-column justify-content-between h-100 p-3 p-md-4 p-xl-5">
            <h3 class="m-0">Create Account!</h3>
            <a class="navbar-brand" href="/"><strong>ShearSphere</strong></a>
            <p class="mb-0">Already a member? <a href="login" class="link-secondary text-decoration-none">Log in now</a></p>
          </div>
        </div>
        <div class="col-12 col-md-6 bsb-tpl-bg-lotion">
          <div class="p-3 p-md-4 p-xl-5">
            <div class="row">
              <div class="col-12">
                <div class="mb-5">
                  <h3>Register</h3>
                </div>
              </div>
            </div>
            <form action="{{ route('register.post') }}" method="POST">
                @csrf
              <div class="row gy-3 gy-md-4 overflow-hidden">
                <div class="col-12">
                    <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                    <input type="name" class="form-control" name="name" id="email" placeholder="name" required>
                    @if ($errors->has('name'))
                      <span class="text-danger">{{ $errors->first('name') }}</span>
                      @endif
                  </div>
                <div class="col-12">
                  <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
                  @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="col-12">
                  <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                  <input type="password" class="form-control" name="password" id="password" placeholder="password" required>
                  @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="col-12">
                    <label for="password" class="form-label">Confim Password <span class="text-danger">*</span></label>
                    <input type="password" class="form-control" name="confirm_password" id="password" placeholder="confirm password" required>
                    @if ($errors->has('confirm_password'))
                      <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
                      @endif
                  </div>
                  <div class="col-12">
                    <label for="user_type" class="form-label">User Type <span class="text-danger">*</span></label>
                    <select class="form-control" name="user_type" id="user_type" required>
                      <option value="customer">Customer</option>
                      <option value="barber">Barber</option>
                      <option value="admin">Admin</option>
                    </select>
                  </div>
                <div class="col-12"><br>
                  <div class="d-grid">
                    <button class="btn bsb-btn-xl btn-primary" type="submit">Register now</button>
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