<!doctype html>
<html lang="en">
  <head>
    <title>--Register--</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" href="logo(vaccinizer).png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="animated.css">
    <!-- animatins scripts required placeholder="Enter Your" -->
<script src="jquery-1.12.4.min.js" defer></script>
<script src="tilt.jquery.js" defer></script>
<script src="animation.js" defer></script>
<!-- animatins scripts required placeholder="Enter Your" -->
  </head>
  <body data-wow-duration="1s" class="wow fadeInUpBig">
      
  <div class="container">
    <div class="row">
        <div class="col-md-12">

           

            <div class="card">
                <div class="card-header text-center">
                    <h4>Register</h4>
                </div>
                <div class="card-body">

                    <form class="form" action="doregister" method="POST" enctype="multipart/form-data">
                        @csrf
                       
                        <div class="form-group mb-3">
                            <label for="">Profile Picture</label>
                            <input type="file" name="image" class="form-control " required placeholder="">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control " required placeholder="Enter Your Name">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Email</label>
                            <input type="email" name="email"  class="form-control " required placeholder="Enter Your Email">
                        </div> 
                        <div class="form-group mb-3">
                            <label for="">Password</label>
                            <input type="password" name="password"  class="form-control " required placeholder="Enter Your Password"> 
                        </div>
                       
                        <div class="form-group mb-3">
                            <label for="">Phone#</label>
                            <input type="number" name="phone" class="form-control " required placeholder="Enter Your Phone Number">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Date of Birth</label>
                            <input type="date" name="dob" class="form-control " required placeholder="Enter Your Date Of Birth">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Gender</label>
                            <input type="text" name="gender" class="form-control " required placeholder="Enter Your Gender">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Occupation</label>
                            <input type="text" name="occupation" class="form-control " required placeholder="Enter Your Occupation">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Address</label>
                            <input type="text" name="address" class="form-control " required placeholder="Enter Your Address">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Nationality</label>
                            <input type="text" name="nationality" class="form-control " required placeholder="Enter Your Nationality">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Marital Status</label>
                            <input type="text" name="marital_status" class="form-control " required placeholder="Enter Your Marital Status">
                        </div>
                        <div class="form-group  text-center">
                            <button type="submit" class="button">Register</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="text-center mt-5">
    <span>already registered <a class="link" href="{{URL::to('login')}}">Log In Here</a></span>
</div>
<br>
<br>
<br>
<br>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>