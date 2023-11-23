<!doctype html>
<html lang="en">
  <head>
    <title>--Dashboard--</title>
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
  <body>

    @if(session('hospitalid') == null)
      <script>
        window.location.replace('hospitallogin');
      </script>
    @endif
    <nav>
      <br>
      <div class="row">
        <div class="col-md-2 col-sm-12">
          <div class="text-center">
            <div data-wow-duration="3s" class="wow bounceInUp">
              <div data-wow-duration="1.2s" data-wow-delay="1.2s"  class="wow rotateIn">
              <img width="50%" src="logo(vaccinizer).png" alt="Logo">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-12"></div>
        <div class="col-md-2 col-sm-12"></div>
        <div class="col-md-2 col-sm-12"></div>
        <div class="col-md-2 col-sm-12">
         

        </div>
        <div class="col-md-2 col-sm-12">
          <a class="button mt-5" href="{{url('hospitallogout')}}"> Logout</a>

        </div>
      </div>
      

    </nav>



        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-center">
                            <h4>Requests Available</h4>
                        </div>
                        <div class="card-body">
    
                            <table class="table table-bordered ">
                                <thead>
                                    <tr>
                                       
                                        <th class="text-center">vaccine_name</th>
                                        <th class="text-center">vaccine_status</th>
                                        <th class="text-center">date requested</th>
                                        
                                      
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($requesting as $item)
                                    @if ($item->vaccine_status == "not available")
                                      @continue
                                    @endif
                                    
                                    <tr>
                                        <td>{{ $item->vaccine_name }}</td>
                                        <td>{{ $item->vaccine_status }}</td>
                                        <td>{{ $item->date }}</td>
                                       
                                    </tr>
                                  

                                    @endforeach
                                </tbody>
                            </table>
    
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>