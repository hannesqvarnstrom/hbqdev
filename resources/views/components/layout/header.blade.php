<header>
<nav class="navbar navbar-expand-md navbar-light bg-light">
     <div class="container-fluid">
          <a href="/" class="navbar-brand">HBQ Dev</a>
          <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"><span class="navbar-toggler-icon"></span></button>
          <div id="navbarSupportedContent" class="collapse navbar-collapse container">
          <ul class="navbar-nav me-auto mb-2 mb-md0">
               <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
               <li class="nav-item"><a class="nav-link" href="/posts">Blog</a></li>
               <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
               @auth
                              <li class="nav-item"><a class="nav-link" href="/task_lists">Projects</a></li>
               <li class="nav-item">
                    <form method='POST' action='/logout'>
                         @csrf
                         @method('DELETE')
                         <input id='logoutBtn' type='submit' class="nav-link" href="/logout" value='Logout'/>
                    </form>
               </li>
               @endauth
               @guest
               <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
               <li class="nav-item"><a class="nav-link" href="/register">Register</a></li>
               @endguest
          </ul>
          </div>
     </div>
</nav></header>