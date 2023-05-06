<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>M.I.L.O.F</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <style>
        
        #body{
    background-color:#1A1A1A;
}
#titre {
color: #FFFFFF;
text-shadow: 2px 2px 2px rgba(0,0,0,0.5);
font-size: 25px;
font-weight: bold;
margin-right:150px;
animation-name: glow;
animation-duration: 2s;
animation-timing-function: ease-in-out;
animation-iteration-count: infinite;
}

@keyframes glow {
    0% {
        text-shadow: 2px 2px 5px rgba(255, 255, 255, 0.3);
    }
    25% {
        text-shadow: 2px 2px 15px rgba(255, 255, 255, 200);
    }
    100% {
        text-shadow: 2px 2px 5px rgba(255, 255, 255, 0.3);
    }
}
.navbar {
    background-color: #AD4328;
}
.navbar-nav .nav-link {
    text-shadow: 2px 2px 2px rgba(0,0,0,0.5);
    color: #FFFFFF;
    font-weight: bold;
    margin:20px;
    padding-right: 15px;
    padding-left: 15px;
    font-size: 17px;
}
.navbar-nav .nav-link:hover {
    color: #1A1A1A;
    background-color: #FFFFFF;
    border-radius: 5px;
}

.navbar-toggler-icon {
    background-image: url('data:image/svg+xml;charset=utf-8,%3Csvg viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg"%3E%3Cpath stroke="%23FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22"/%3E%3C/svg%3E');

}
.dropdown-menu {
    background-color: #1A1A1A;
}
.dropdown-menu a {
    color: #000000;
    font-weight: bold;
}
.dropdown-menu a:hover {
    color: #FFFFFF;
    background-color: #1A1A1A;
    border-radius: 5px;
}


#container {
display: flex;
justify-content: space-between;
align-items: center;
max-width: 1200px;
margin: 0 auto;
padding: 0 20px;
}

#ul {
list-style: none;
margin: 0;
padding: 0;
}

#li {
display: inline-block;
margin-left: 20px;
}

#a {
color: #fff;
text-decoration: none;
transition: color 0.2s ease-in-out;
}

#a:hover {
color: #eaeaea;
}
footer {
background-color: #141414;
color: #fff;
padding: 30px 0;
position: relative;
bottom: 0;
left: 0;
right: 0;
}
.main-card {
position: relative;
max-width: 80%;
margin: 0 auto;
}

.slick-slide {
height: 100px;
margin: 0 10px;
}

.slick-prev {
position: absolute;
top: 50%;
transform: translateY(-50%);
z-index: 1;
cursor: pointer;
font-size: 0;
line-height: 0;
transition: all 0.3s ease;
border: none;
height: 100%;
color: #ffffff;
background:transparent;
left: -0px;
}

.slick-next {
position: absolute;
top: 50%;
transform: translateY(-50%);
z-index: 1;
cursor: pointer;
font-size: 0;
line-height: 0;
transition: all 0.3s ease;
border: none;
height: 100%;
background:transparent;
color: #fff;
right: -0%;
}

.slick-prev:hover, .slick-next:hover {
opacity: 0.8;
}

.slick-prev:before, .slick-next:before {
content: "";
display: inline-block;
vertical-align: middle;
background-size: 100% 100%;
background-repeat: no-repeat;
background-position: center;
}

.slick-prev:before {
width: 50px;
height: 50px;
background-image: url('/images/arrow-left.png');
}

.slick-next:before {
width: 50px;
height: 50px;
background-image: url('/images/arrow-right.png');
}

.slick-dots {
position: absolute;
bottom: 10px;
left: 50%;
transform: translateX(-50%);
display: flex;
align-items: center;
justify-content: center;
margin: 0;
padding: 0;
}

.slick-dots li {
margin: 0 5px;
padding: 0;
}

.slick-dots li button {
border: none;
outline: none;
background: transparent;
cursor: pointer;
font-size: 0;
line-height: 0;
transition: all 0.3s ease;
}

.slick-dots li button:hover, .slick-dots li button:focus {
opacity: 0.8;
}

.slick-dots li button:before {
content: "";
display: inline-block;
width: 10px;
height: 10px;
border-radius: 50%;
background: #fff;
opacity: 0.5;
transition: all 0.3s ease;
}

.slick-dots li.slick-active button:before {
opacity: 1;
}
.text{
    color:white;
}
.main{
    width:10px;
    cursor: pointer;
    text-decoration:none;
}
.main:hover .card{
    border: 2px solid #AD4328;
}

.the-info {
  display: flex;
  align-items: center;
}

.the-img {
  width: 100%;
  max-width: 300px;
  height: auto;
  border: 2px solid #fff;
  border-radius: 10px;
}
.rating {
  display: inline-block;
  position: relative;
  height: 40px;
  margin-top: 10px;
}
.rating input {
  display: none;
}

.rating label:before {
  content: "\2605";
  font-size: 36px;
  line-height: 40px;
  color: #ddd;
  transition: color 0.2s ease-in-out;
}
.rating input:checked ~ label:before {
  color: #FFC107;
}
.rating label:hover:before {
  color: #FFC107;
}
.comment-section{
    background-color:rgb(36, 36, 36);
    padding: 200px;
    border-radius:5px;
}
.search{
    background-color:#ad4329;
}





</style>
    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>
    <!-- Include Slick CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">

        <!-- Include jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Include Slick library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>


    
    
</head>
<body id="body" class="d-flex flex-column min-vh-100">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" id="titre" href="<?php echo e(url('/')); ?>">
                M.I.L.O.F
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/TvShow">TvShows</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Movie">Movies</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Anime">Anime</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Games">Games</a>
                        </li>
                    </ul>


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        
                    <div class="mt-4">
                        <form action="<?php echo e(route('entertanment.search')); ?>" method="GET" class="d-flex justify-content-start align-items-center">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control" placeholder="Search by name">
                                <button type="submit" class="btn btn-muted"><img width="20" src="<?php echo e(asset('uploads/entertainments/search.png')); ?>" alt="Search"></button>
                            </div>
                        </form>
                    </div>

                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <?php if(Route::has('login')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                                </li>
                            <?php endif; ?>

                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?>

                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>
                                    <?php if(auth()->check() && auth()->user()->isAdmin()): ?>
                                        <a class="dropdown-item" href="/list">Dashboard</a>
                                    <?php endif; ?>
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>
<footer class="footer mt-auto">
  <div id="container">
    <p>Copyright © 2023 M.I.L.O.F</p>
    <ul id="ul">
      <li id="ul"><a id="a" href="#">Home</a></li>
      <li id="ul"><a id="a" href="#">About</a></li>
      <li id="ul"><a id="a" href="#">Contact</a></li>
    </ul>
  </div>
</footer>

</html>
<?php /**PATH C:\xampp\htdocs\M.I.L.O.F\resources\views/layouts/app.blade.php ENDPATH**/ ?>