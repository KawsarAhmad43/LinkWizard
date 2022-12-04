<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LinkWizard</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body style="background: #161623;">
    <div class="container">
         <form action="{{ route('link.store') }}" method="post">
            @csrf
            <div style="margin: 0 auto;" class="logo-box" style="margin: 0 auto">
                <center>
                    <img src="{{ asset('assets/images/logo.png') }}" alt="">
                </center>
            </div>
            <div class="form-group m-5">
             
              <input style="width: 600px;" type="url" name="long_url" class="form-control" id="longurl"  placeholder="Enter long url" required>
              
            </div>

            <center>
                <button style="padding: 10px 20px;" type="submit" class="btn btn-primary mb-3 ">Submit</button>
            </center>
        </form>
        <div class="form-group">
              
            <input style="width: 600px;" type="text" value="{{ url('/') }}/{{ $short_url ?? '' }}" class="form-control" id="longurl"  placeholder="Generated Short url" readonly>
        </div>

        <div class="form-group credit">  
            <input style="width: 600px; border:none; background-color:transparent; text-align:center;" type="text"  class="form-control" id="name"  placeholder="&copy; All Right Reserved By Ahmad" readonly>
        </div>       
</div>


</body>
</html>