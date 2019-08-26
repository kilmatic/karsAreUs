<nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color:rgba(61, 61, 61, 0.5)">
    <a class="navbar-brand" href="#">KarsAreUs</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav navbar-center mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo $app_path; ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
            </li>
        </ul>
        
        <ul class="nav navbar-nav navbar-right">
            <?php if(!isset($_SERVER['PHP_AUTH_USER'])) : ?>
                <li class="nav-item">
                    <a class="nav-link" href="#" id="login" data-toggle="modal" data-target="#loginModal">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" id="register" data-toggle="popover" data-container="body" data-placement="bottom" type="text" data-html="true">Register</a>
                </li>    
                <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">  
                                <h5 class="modal-title" id-loginModalLabel>Login</h5>                              
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>                                
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="emailAddress" class="col-form-label">Email:</label>
                                        <input type="text" id="emailAddress" class="form-control" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" placeholder="Password">
                                    </div>
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleInputCheck1">
                                        <label for="exampleCheck1" class="form-check-label">Keep me signed in</label>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>                                    
                                </form>
                            </div>
                        </div>                    
                    </div>
                </div>  
            <?php else :?>
                <h3 class="nav-item"><a class="nav-link" href="#"><?php $_SERVER['PHP_AUTH_USER'] ?></a></h3>
            <?php endif ?>
        </ul>

    </div>
</nav>