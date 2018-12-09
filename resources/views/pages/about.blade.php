@extends('layouts.app')
@section('content')

    <div class="row">
          <section style="background:transparent !important" class="jumbotron text-center">
            <div class="container text-center">
                <h1 class="text-center" style="color: white;">Our Goal</h1>
                <h4 class="text-center" style="color: white;">We are here to give you a learning environment by means of <b>Sharing And Learning</b> process.
                So come and join with us , so that you may increase your knowledge in IT field.</h4>
            </div>
         
          <hr>
          <section style="background:transparent !important" class="jumbotron text-center">
                <div class="container text-center">
                    <h1 class="text-center" style="color: white;">About us</h1>
                    <h4 class="text-center" style="color: white;">Deshi Programming Adda which is a non profit project.It is a service which was developed by three
                    engineering student so that the IT people of Bangladesh may come forward and share their knowledge to each other.</h4>
                </div>
                <section class="home-newsletter">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="single">
                                    <h2>Subscribe to our Newsletter</h2>
                                    <div class="input-group">
                                        <input type="email" class="form-control" placeholder="Enter your email" required>
                                        <span class="input-group-btn">
                                            <button class="btn btn-theme" type="submit">Subscribe</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
          </section> 
          <hr>
         
    <!-- Card -->
        <div class="container "  style="background:transparent;">
                <h1 class="text-center" style="color: white;">Team</h1>
                <hr>
            <div class="col-md-4">
                    <div class="card">
                        <!-- Card image -->
                        <img class="card-img-top" style="height:200px; width:200px;" src="https://mir-s3-cdn-cf.behance.net/user/276/8641e960992283.587a0fea00350.jpeg" alt="Card image cap">
                        <!-- Card content -->
                        <div class="card-body">
                            <!-- Title -->
                            <h4 class="card-title"><a href="#">Touhidur Rahman</a></h4>
                            <!-- Text -->
                            <p class="card-text">Studying Bachelor Of Software Engineering In Daffodil International University and working on Akash Technology as Android
                                Developer.</p>
                            <!-- Add font awesome icons -->
                            <a href="https://www.facebook.com/touhidur.rahman.37853" class="fa fa-facebook"></a>
                            <a href="#" class="fa fa-twitter"></a>
                            <a href="#" class="fa fa-google"></a>
                            <a href="#" class="fa fa-github"></a>
                        </div>
                    </div>
            </div>
            <div class="col-md-4">
                    <div class="card">
                        <!-- Card image -->
                        <img class="card-img-top" style="height:200px; width:200px;" src="https://yt3.ggpht.com/a-/ACSszfGD1hXrj3n9sap4hS4qr0efsIZD_9cyVfwx_w=s900-mo-c-c0xffffffff-rj-k-no" alt="Card image cap">
                        <!-- Card content -->
                        <div class="card-body">
                            <!-- Title -->
                            <h4 class="card-title"><a href="https://www.linkedin.com/in/mrzrashed/">Md.Rasheduzzaman rashed</a></h4>
                            <!-- Text -->
                            <p class="card-text">Studying Bachelor Of Software Engineering In Daffodil International University and freelencer web developer and designer.</p>
                            <a href="https://www.facebook.com/mrzrashed01" class="fa fa-facebook"></a>
                            <a href="https://twitter.com/mrz_rashed" class="fa fa-twitter"></a>
                            <a href="https://plus.google.com/113539686366343332488" class="fa fa-google"></a>
                            <a href="https://github.com/mrzrashed" class="fa fa-github"></a>
                        </div>
                    </div>
            </div>
            <div class="col-md-4">
                    <div class="card" >
                        <!-- Card image -->
                        <img class="card-img-top" style="height:200px; width:200px;" src="https://pbs.twimg.com/profile_images/1001354043480928257/V5dwTWYm_400x400.jpg" alt="Card image cap">
                        <!-- Card content -->
                        <div class="card-body">
                            <!-- Title -->
                            <h4 class="card-title"><a href="https://www.linkedin.com/in/sakhawat-hossain-762688127/">Sakhawat Hossain</a></h4>
                            <!-- Text -->
                            <p class="card-text">Studying Bachelor Of Software Engineering In Daffodil International University and working as android application
                                developer on ShadoWhite.</p>
                            <a href="#" class="fa fa-facebook"></a>
                            <a href="https://twitter.com/sakhawat_shakil" class="fa fa-twitter"></a>
                            <a href="#" class="fa fa-google"></a>
                            <a href="https://github.com/shakiz" class="fa fa-github"></a>
                        </div>
                    </div>
            </div>
        </div>
  <!-- Card -->
         

  
    </div>
@endsection