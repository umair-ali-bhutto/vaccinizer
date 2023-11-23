<!doctype html>
<html lang="en">
  <head>
    <title>Vaccinizer-Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="logo(vaccinizer).png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="animated.css">
    <!-- animatins scripts required -->
<script src="jquery-1.12.4.min.js" defer></script>
<script src="tilt.jquery.js" defer></script>
<script src="animation.js" defer></script>
<!-- animatins scripts required -->
  </head>
  <body>
<nav>
  <div class="text-center mt-5">
    <div data-wow-duration="3s" class="wow bounceInUp">
      <div data-wow-duration="1.2s" data-wow-delay="1.2s"  class="wow rotateIn">
      <img width="15%" src="logo(vaccinizer).png" alt="Logo">
      </div>
    </div>
  </div>
</nav>


<div class="container-fluid text-center mt-5">
  <div class="mt-5">
  <h2>PLease Select Your Role</h2>
  </div>
  <div class="mt-5">
    <div  data-wow-duration="1s" data-wow-delay="2s" class="wow fadeInUpBig">
      <div data-tilt="">
        <a class="button" href="{{URL::to('hospital_register')}}">Hospital</a>
      </div>
    </div>
    <br>
    <br>
    <br>
    <div data-wow-duration="1s" data-wow-delay="2s" class="wow fadeInUpBig">
      <div data-tilt="">
        <a class="button" href="{{URL::to('patient_register')}}">Patient</a>
      </div>
    </div>
  </div>
</div>


      <br>
   
    
      <br>
<div data-wow-duration="3s" data-wow-delay="2s" class="text-center wow bounceInUp" >
  All RIGHTS RESERVED BY MR. Umair Ali Bhutto &reg;
</div>
<br><br>
<br><br>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>