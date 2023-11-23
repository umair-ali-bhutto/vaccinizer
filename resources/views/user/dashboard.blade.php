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
    @if(session('request'))
    <script>
        alert("{{session('request')}}");
    </script>

    @endif
    @if(session('userid') == null)
      <script>
        window.location.replace('login');
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
          <a class="button mt-5" href="showprofile/{{session('userid')}}">Show your profile</a>

        </div>
        <div class="col-md-2 col-sm-12">
          <a class="button mt-5" href="{{url('logout')}}"> Logout</a>

        </div>
      </div>
      

    </nav>
    

<div>
</div>


        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-center">
                            <h4>Hospitals Available</h4>
                        </div>
                        <div class="card-body">
    
                            <table class="table table-bordered ">
                                <thead>
                                    <tr>
                                        <th class="text-center">Name</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Phone</th>
                                        <th class="text-center">Address</th>
                                        <th class="text-center">Vaccine Name</th>
                                        <th class="text-center">Vaccine Status</th>
                                        <th class="text-center">Select Date</th>
                                        <th class="text-center">Request</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($hospital as $item)
                                    @if ($item->vaccine_status == "not available")
                                      @continue
                                    @endif
                                    
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->address }}</td>
                                        <form action="request" method="POST">
                                          @csrf
                                        <td><input style="border: none" name="vaccine_name" type="text" value="{{ $item->vaccine_name }}" readonly></td>
                                        <td><input style="border: none" name="vaccine_status" type="text" value="{{ $item->vaccine_status }}" readonly></td>
                              
                                        
                                        <td class="form"><input style="border: none" type="date" name="date" required></td>
                                        <td>
                                            <button class="button" type="submit">request</button>
                                        </td>
                                      </form>
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