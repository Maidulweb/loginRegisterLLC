<section>
    <div class="header">
        <div class="container">
            <div class="top-header">
               <div class="row">
                   <div class="col-md-4">
                       <div class="top-header-left">
                           <p>Your choice</p>
                       </div>
                   </div>
                   <div class="col-md-4">
                    <div class="top-header-middle">
                        <ul>
                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                            <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href=""><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="top-header-right">
                    @auth
                      <a href="{{route('profile')}}">Profile({{optional(auth()->user())->name}})</a> <a href="{{route('logout')}}">Logout</a>
                    @endauth
                    @guest
                      <a href="{{route('login')}}">Login</a> <a href="{{route('register')}}">Register</a>
                    @endguest
                      
                    </div>
                </div>
               </div>
            </div>
        </div>
    </div>
</section>
