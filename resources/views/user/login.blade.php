<!doctype html>
<html lang="en">
    <head>
        <title>--Login--</title>
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
 
    @if(session('create'))
        <div class="text-center alert alert-success">
            {{session('create')}}
   
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-12">
    
               
    
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Login</h4>
                    </div>
                    <div class="card-body">
    
                        <form class="form" action="{{ URL::to('dologin')}}" method="POST">
                            @csrf
              
    
                       
                            <div class="form-group mb-3">
                                <label for="">Email</label>
                                <input type="email" name="email"  class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Password</label>
                                <input type="password" name="password"  class="form-control" required> 
                            </div>
                           
                            <div class="form-group mb-3 text-center">
                                <button type="submit" class="button">Login</button>
                            </div>
    
                        </form>
    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center mt-5">
        
      
        <a class="link" href="{{URL::to('/')}}">go home</a>
    </div>
    <br>
    <br>
    <br>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>