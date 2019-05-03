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
            <?php
                if(!isset($_SERVER['PHP_AUTH_USER']))
                {
                    # Will require login and register pages in the views folder...
                    # Must put proper href's...
                    echo '<li class="nav-item"><a class="nav-link" href="#">Login</a></li>';
                    echo '<li class="nav-item"><a class="nav-link" href="#">Register</a></li>';
                }
                else
                {
                    # Must create a user's dashboard in the views folder...
                    # Must put proper href's...
                    echo "<h3 class=\"nav-item\"><a class=\"nav-link\" href=\"#\">{$_SERVER['PHP_AUTH_USER']}</a></h3>";
                }
            ?>
        </ul>
    </div>
</nav>