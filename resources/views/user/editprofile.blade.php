<!doctype html>
<html lang="en">
    <head>
        <title>--Update Profile--</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="icon" href="../../logo(vaccinizer).png">
        <link rel="stylesheet" href="../../style.css">
   
      </head>
 
  <body>
  <div class="container">
    <div class="row">
        <div class="col-md-12">

           

            <div class="card">
                <div class="card-header text-center">
                    <h4>Update Profile</h4>
                </div>
                <div class="card-body">
<div class="text-center">

    <img style="border-radius:20px" width="50%" src="/images/users/{{$user->pic}}" alt="image">
</div>
                    <form class="form" action="{{ url('update/'.$user->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="form-group mb-3">
                            <label for="">Profile Picture</label>
                            <input type="file" name="image" class="form-control"  >
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter your Name" value="{{$user->name}}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Email</label>
                            <input type="email" name="email"  class="form-control" placeholder="Enter your Email" value="{{$user->email}}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Password</label>
                            <input type="password" name="password"  class="form-control" placeholder="Enter your Password" value="{{$user->password}}"> 
                        </div>
    
                        <div class="form-group mb-3">
                            <label for="">Phone#</label>
                            <input type="number" name="phone" class="form-control" placeholder="Enter your Phone" value="{{$user->phone}}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Date of Birth</label>
                            <input type="date" name="dob" class="form-control" placeholder="Enter your Date of Birth" value="{{$user->dob}}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Gender</label>
                            <input type="text" name="gender" class="form-control" placeholder="Enter your Gender" value="{{$user->gender}}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Occupation</label>
                            <input type="text" name="occupation" class="form-control" placeholder="Enter your Occupation" value="{{$user->occupation}}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Address</label>
                            <input type="text" name="address" class="form-control" placeholder="Enter your Address" value="{{$user->address}}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Nationality</label>
                            <input type="text" name="nationality" class="form-control" placeholder="Enter your Nationality" value="{{$user->nationality}}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Marital Status</label>
                            <input type="text" name="marital_status" class="form-control" placeholder="Enter your Marital Status" value="{{$user->marital_status}}">
                        </div>
                       
                        <div class="form-group mb-3 text-center">
                            <button type="submit" onclick="alert('data updated')" class="button">Update Profile</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>