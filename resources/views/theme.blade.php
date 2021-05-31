<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PETISH</title>
</head>
<style>
  .img-bg
{
  height: 100%;
  width: 100% ;
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;


}
</style>

<body class="img-bg" background="/images/bg2.jpg" >
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">PETISH</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/contact">Contact</a>
              </li>
               <!-- Button trigger modal -->
<button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    SIGNIN
  </button>
  
  
  
  <!-- Modal -->
  
  <div class="modal fade" id="exampleModal" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">LOGIN</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <script>
            $(document).ready(function(){
                $("#exampleModal").modal('show');
            });
        </script>
        </div>
        <div class="modal-body">
          <form class="mt-5"  > 
            {{ csrf_field() }}
            <table class="table">
              <tr>
                  <td>USERNAME</td>
                  <td><input name="txtusername" type="text" class="form-control"></td>
              </tr>
              <tr>
                  <td>PASSWORD</td>
                  <td><input name="txtpassword" type="password" class="form-control"></td>
              </tr>
              <tr>
                <td><button class="btn btn-primary" onclick="window.location.href='/';" >LOGIN</button>  </td>
                <td><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button></td>
  
  
              </tr>
              <td><div class="mt-5">
                <p class="text-dark text-center">
                    Don't have an account?
                </p><p> <a href="/r" class="text-warning">Click here to register</a>
                </p>
            </div></td>
              </table>
            </form>
        </div>
        
          
        
      </div>
    </div>
  </div>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-dark" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

      


    
@yield('theme')
<br>
<br>
<table class="table table-borderless text-center" style="font-family: cursive; background-color:rgba(239, 240, 243, 0.74); opacity: 50%;">
  <tr>
      <td>Let's Love With Pet's</td></tr>
      <tr>  <td>Copyright @Petisih  2021.</td></tr>
      <tr><td>7th Floor, Centre A, Alapatt Heritage Building, MG Road North End, Ernakulam, Kochi<br>
          +91 9447 6780 90
          Petisih@gmail.com</td>
      <td></td>
  </tr>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>