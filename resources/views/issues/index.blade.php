 <!DOCTYPE html>
 <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap.css')}}">



    <title>Document</title>
 </head>

 <body>
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
          <div class="card-img-left d-none d-md-flex">
            <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Submit Your Issues</h5>
            <form method="post"  action="/issus/store" >
              @csrf

          

              <div class="form-floating mb-3">
                <input type="text" name="name" class="form-control" id="floatingInputUsername" placeholder="myusername"      required autofocus    value="{{Auth::user()->name}}">
                <label for="floatingInputUsername">Name</label>
              </div>

              <div class="form-floating mb-3">
                <input type="text" name="email" class="form-control" id="floatingInputEmail" placeholder="name@example.com" value="{{Auth::user()->email}}">
                <label for="floatingInputEmail">Email address</label>
              </div>


              <div class="form-floating mb-3">
                <input type="text"  name="phone" class="form-control" id="floatingInputEmail" placeholder="name@example.com">
                <label for="floatingInputEmail">Phone Number</label>
              </div>


              <div class="form-floating mb-3">
                <input type="text"  name="msg" class="form-control" id="floatingInputEmail" placeholder="name@example.com">
                <label for="floatingInputEmail">Message</label>
              </div>

              <div class="form-floating mb-3">
                <input type="file"  name="attachment" class="form-control" id="floatingInputEmail" placeholder="name@example.com">
                <label for="floatingInputEmail">attachment</label>
              </div>


              <div class="form-floating mb-3">
                <input type="number" name="building_number" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">building_number</label>
              </div>

              <div class="form-floating mb-3">
                <input type="number" name="appartment_number" class="form-control" id="floatingPasswordConfirm" placeholder="Confirm Password">
                <label for="floatingPasswordConfirm">appartment_number</label>
              </div>

              <div class="d-grid mb-2">
                <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit">Register</button>
              </div>

              <a class="d-block text-center mt-2 small" href="#">Have an account? Sign In</a>

              <hr class="my-4">

              <div class="d-grid mb-2">
                <button class="btn btn-lg btn-google btn-login fw-bold text-uppercase" type="submit">
                  <i class="fab fa-google me-2"></i> Sign up with Google
                </button>
              </div>

              <div class="d-grid">
                <button class="btn btn-lg btn-facebook btn-login fw-bold text-uppercase" type="submit">
                  <i class="fab fa-facebook-f me-2"></i> Sign up with Facebook
                </button>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </body>
</htm>