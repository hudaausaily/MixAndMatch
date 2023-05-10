<div class="top-header-area" id="sticker">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 text-center">
                <div class="main-menu-wrap">
                    <!-- logo -->
                    <div class="site-logo">
                        <a href="index.html">
                            <img src="assets/img/mp_logo.png" alt="">
                        </a>
                    </div>
                    <!-- logo -->

                    <!-- menu start -->
                    <nav class="main-menu">
                        <ul>
                            <li class="current-list-item"><a href="/user">Home</a></li>
                            <li><a href="{{route('user.shop')}}">Shop</a></li>
                            {{-- <li><a href="shop.html">Customize</a></li> --}}
                            <li><a href="{{route('user.about')}}">About</a></li>
                            <li><a href="{{route('user.news')}}">News</a></li>
                            <li><a href="{{route('user.contact')}}">Contact</a></li>
                            @if(!Auth::user())
                            <li><a type="button" style="border:none; background:none;" data-toggle="modal" data-target="#ModalLoginForm">Login</a></li>
                            @endif
                            @if(Auth::user())
                            <li>
                                <a type="button" style="border:none; background:none;" href="{{route('user.login.destroy')}}" class="nav-link">logout</a>
                            </li>
                            @endif
                            @if(Auth::user())
                            <li>
                                <div class="header-icons">
                                    <a class="shopping-cart" href="{{route('user.cart.show')}}"><i class="fas fa-shopping-cart"></i></a>
                                    <a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                                </div>
                            </li>
                            @endif

                        </ul>
                    </nav>
                    <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                    <div class="mobile-menu"></div>
                    <!-- menu end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end header -->

<!-- search area -->
<div class="search-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <span class="close-btn"><i class="fas fa-window-close"></i></span>
                <div class="search-bar">
                    <div class="search-bar-tablecell">
                        <h3>Search For:</h3>
                        <input type="text" placeholder="Keywords">
                        <button type="submit">Search <i class="fas fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end search area -->

<div id="ModalLoginForm" class="modal fade" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Login</h5>
            </div>
            <div class="modal-body">
                <form action="{{route('user.login.check')}}" method="post">
                    @method('GET')
            
                    @csrf
                    <div class="input-group" style="margin-bottom:10px">
                        
                            <input  type="email" placeholder="Email" class="form-control input-lg @error('email') is-invalid @enderror" value="{{ old('email')}}" style="height:3.5rem !important; border: 2px solid gray;" name="email" >
                           
                        
                    </div>
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <input type="password" placeholder="Password" class="form-control input-lg @error('password') is-invalid @enderror" style="height:3.5rem !important; border: 2px solid gray;" name="password" style="display:block">
                        
                        
                    </div>
                    @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    
                    <div class="row"style="justify-content:center" >
                    <button type="submit" class="btn btn-primary btn-sm" >Login</button>

                    </div>
                    <div class="row"style="justify-content:center" >
                    <p>Don't have an account already? <a type="button" style="border:none; background:none;" data-toggle="modal" data-target="#ModalSignupForm">Sign-Up</a></li></p>

                    </div>
                  
                
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div id="ModalSignupForm" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Sign Up</h5>
            </div>
            <div class="modal-body">
                <form action="{{route('user.signup.store')}}" method="post">
                    @csrf
                    <div class="input-group" style="margin-bottom:10px">
                        
                        <input  type="text" placeholder="Name"  style="height:3.5rem !important; border: 2px solid gray;" name="name"  class="form-control input-lg @error('name') is-invalid @enderror">
                    </div>
                    @error('name')
                    <div class="error">{{ $message }}</div>
                   @enderror
                
                    <div class="input-group" style="margin-bottom:10px">
                        
                            <input  type="email" placeholder="Email" class="form-control input-lg" style="height:3.5rem !important; border: 2px solid gray;" name="email" class="@error('email') is-invalid @enderror">
                            
                            
                        </div>
                        @error('email')
                        <div class="error">{{ $message }}</div>
                       @enderror
                    <div class="input-group" style="margin-bottom:10px">
                        
                            <input  type="text" placeholder="Phone" class="form-control input-lg" style="height:3.5rem !important; border: 2px solid gray;" name="phone"  class="@error('phone') is-invalid @enderror">
                            
                            
                            
                        </div>
                        @error('phone')
                        <div class="error">{{ $message }}</div>
                       @enderror
                    <div class="form-group">
                        <input type="password" placeholder="Password" class="form-control input-lg" style="height:3.5rem !important; border: 2px solid gray;" name="password" class="@error('password') is-invalid @enderror">
                        
                        
                    </div>
                    @error('password')
                    <div class="error">{{ $message }}</div>
                   @enderror
                    
                    <div class="row"style="justify-content:center" >
                    <button type="submit" class="btn btn-primary btn-sm">Sign Up</button>

                    </div>
                  
                  
                
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
