<?php
require __DIR__ . '/links.php';
?>


<div class="modal fade" id="loginModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="loginForm">
                    <div class="mb-3">
                        <label for="userNameEmail" class="form-label">Email address</label>
                        <span class="error" id="userNameEmailError"></span>
                        <input type="text" class="form-control" id="userNameEmail" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="userPassword" class="form-label">Password</label>
                        <span class="error" id="userPasswordError"></span>
                        <input type="password" class="form-control" id="userPassword">
                    </div>
                    
                    <button type="button" class="btn btn-primary" id="btnLogin">Submit</button>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn " data-bs-target="#signUpModal" data-bs-toggle="modal"
                    data-bs-dismiss="modal">new User, please <span class='text-primary'>Register here </span></button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="signUpModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
    tabindex="-1">

    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel2">Sign Up</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body"> 
                <!-- sign up form -->
                <form id="signUpForm">
                <div class="mb-3">
                        <label for="userName" class="form-label">User Name</label>
                        <span class="error" id="userNameError"></span>
                        <input type="text" class="form-control" id="userName" value="kites">
                    </div>
                    <div class="mb-3">
                        <label for="userEmail" class="form-label">Email address</label>
                        <span class="error" id="userEmailError"></span>
                        <input type="email" class="form-control" id="userEmail" value="kites@134.coder" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="userPassword1" class="form-label">Password</label>
                        <span class="error" id="userPassword1Error"></span>
                        <input type="password" class="form-control" value="123" id="userPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="userPassword2" class="form-label">Confirm Password</label>
                        <span class="error" id="userPassword2Error"></span>
                        <input type="password" class="form-control" value="123" id="userPassword2">
                    </div>
                    <button type="button" id="btnSignUp" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn" data-bs-target="#loginModal" data-bs-toggle="modal"
                    data-bs-dismiss="modal">already register, <span class="text-primary">login here</span></button>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light d-flex">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 d-flex">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
                <li class="nav-item">
                    <button class="nav-link btn-light border-0" tabindex="-1" aria-disabled="true"
                        data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link btn-light border-0" href="#" tabindex="-1" aria-disabled="true" data-bs-toggle="modal" data-bs-target="#signUpModal">Sign Up</button>
                </li>
            </ul>

        </div>
    </div>
</nav> 
<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
  <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
        
      <strong class="me-auto"><span id="toastTitle"></span></strong>
      <small>Now</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
        <span id="toastMsg"></span>
    </div>
  </div>
</div>