<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rumahStudent</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap");
    * {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      -webkit-box-sizing: border-box;
              box-sizing: border-box;
      outline: none;
      border: none;
      text-decoration: none;
      text-transform: capitalize;
      -webkit-transition: .2s linear;
      transition: .2s linear;
    }
    html {
      font-size: 62.5%;
      overflow-x: hidden;
      scroll-behavior: smooth;
    }
    
    .title {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
          -ms-flex-align: center;
              align-items: center;
      font-size: 2.5rem;
      margin-bottom: 3rem;
      padding: 1.2rem 0;
      border-bottom: 0.1rem solid rgba(0, 0, 0, 0.1);
      color: #222;
    }
    
    .title span {
      color: #2590d7;
      padding-left: .7rem;
    }
    
    .title a {
      margin-left: auto;
      color: #666;
      font-size: 1.5rem;
    }
    
    .title a:hover {
      color: #2590d7;
    }
    
    .btn {
      margin-top: 1rem;
      display: inline-block;
      padding: .8rem 3rem;
      color: #fff;
      font-size: 1.7rem;
      cursor: pointer;
    }
    
    .btn:hover {
      background: #222;
    }
    
    .header {
      position: sticky;
      top: 0;
      left: 0;
      right: 0;
      z-index: 1000;
      background: #815854;
      -webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
              box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
          -ms-flex-align: center;
              align-items: center;
      -webkit-box-pack: justify;
          -ms-flex-pack: justify;
              justify-content: space-between;
      padding: 2rem 3%;
    }
    
    .header .logo {
      margin-left: 3%;
      font-size: 2.5rem;
      font-weight: bolder;
      color: #F9EBDE;
      text-decoration: underline;
      text-decoration-color: #FF8800;
}
.header .logo:hover {
  text-decoration-color: #F9EBDE;
  color: #FF8800;
}

.header .icons a {
  font-size: 1.7rem;
  color: #815854;
  margin: 0 .5rem;
  background-color: #F9EBDE;
  padding: .3rem .5rem;
  border-radius: .5rem;
}

.header .icons a:hover {
    color: #F9EBDE;
    background-color: #FF8800;
    border-radius: .5rem;
    padding:.5rem 1.5rem;
}

#login-btn, #search-btn{
    cursor: pointer;
    margin-left: 1rem;
    height:4.5rem;
    line-height: 4.5rem;
    width:4.5rem;
    text-align: center;
    font-size: 1.7rem;
    color: #815854;
    border-radius: 50%;
    background: #F9EBDE;
    text-decoration: none;
}

#login-btn:hover {
  color: #F9EBDE;
  background-color: #FF8800;
  transform: rotate(360deg);  
}
#search-btn:hover {
  color: #F9EBDE;
  background-color: #FF8800;
  transform: rotate(360deg);
}
    .header .search-form {
      position: absolute;
      top: -115%;
      right: 2rem;
      width: 50rem;
      border-radius: .5rem;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
          -ms-flex-align: center;
              align-items: center;
      height: 5.5rem;
      -webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
              box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
      background: #fff;
    }
    
    .header .search-form.active {
      top: 115%;
    }
    
    .header .search-form input {
      height: 100%;
      width: 100%;
      padding: 0 1.2rem;
      font-size: 1.6rem;
      color: #222;
      text-transform: none;
    }
    
    .header .search-form label {
      font-size: 2.5rem;
      margin-right: 1.7rem;
      cursor: pointer;
      color: #666;
    }
    
    .header .search-form label:hover {
      color: #2590d7;
    }
    #menu-btn {
      display: none;
    }
</style>
<body>
<!-- header section starts  -->
<header class="header">
    @auth
      @if (Auth::user()->role === 'student')
        <a href="{{ route('index') }}" class="logo">🏠rumahStudent</a>
      @else
        <a href="{{ route('dashboard') }}" class="logo">🏠Dashboard</a>
      @endif
    @endauth
    <div class="icons">
      @auth
        @if (Auth::user()->role === 'student')
          <a href="{{ route('index') }}">home</a>
          <a href="{{ route('property.index') }}">property</a>
          <a href="{{ route('room.index') }}">room</a>
          @if (Auth::user()->rooms()->count() === 0)
            <a href="{{ route('room.create') }}">room advertisement</a>
          @else
            @php
              $user = Auth::user();
              $room = $user->rooms->firstWhere('user_id', $user->id);
            @endphp
            <a href="{{ route('room.edit', ['room' => $room]) }}">manage room</a>
          @endif
        @else
          
        @endif
      @endauth
        <div onclick="redirectToLogout()" id="login-btn" class="fa fa-sign-out"></div>
    </div>
</header>
<!-- header section ends -->
<script>
    function redirectToLogout() {
      var form = document.getElementById('logout-form');
        form.submit();
    } 
</script>
<form id="logout-form" class="logout-form" method="POST" action="{{ route('logout') }}">
  @csrf
</form>
</body>
</html>