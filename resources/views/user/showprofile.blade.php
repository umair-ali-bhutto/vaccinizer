
<!doctype html>
<html lang="en">

    <head>
        <title>--Profile--</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="icon" href="../logo(vaccinizer).png">
        <link rel="stylesheet" href="../style.css">

      </head>

<body>
  <br><br>
  
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Profile</h4>
                    </div>
                    @foreach ($users as $user )
                        
                    
                        <div class="text-center m-5">
                            <img width="20%" style="border-radius:20px" src="../images/users/{{$user->pic}}" alt="profile photo">
                        </div>
                        <div class="profile">
                            Name:{{$user->name}}
                        </div>
                        <div class="profile">
                            email:{{$user->email}}
                        </div>
                        <div class="profile">
                            Phone:{{$user->phone}}
                        </div>
                        <div class="profile">
                            Date of Birth:{{$user->dob}}
                        </div>
                        <div class="profile">
                            Gender:{{$user->gender}}
                        </div>
                        <div class="profile">
                            Occupation:{{$user->occupation}}
                        </div>
                        <div class="profile">
                            address:{{$user->address}}
                        </div>
                        <div class="profile">
                            Nationality:{{$user->nationality}}
                        </div>
                        <div class="profile">
                            Marital Status:{{$user->marital_status}}
                        </div>
                    
                      
                        @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">
        <br>
        <a class="button mt-5" href="editprofile/{{$user->id}}">Update Profile</a>
        <br>
        <br><br>
        <br>
        <br>
        <a class="button mt-5" href="{{url('logout')}}"> Logout</a>
    </div>
   <br><br>

   
    <br>
    <br>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>