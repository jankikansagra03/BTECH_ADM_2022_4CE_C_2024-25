<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.js"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> -->
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="bootstrap.bundle.min.js"></script>


</head>
<div class="container">
    <nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Products</a>
                    </li>
                    <li>
                        <div class="dropdown">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                                Dropdown button
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Link 1</a></li>
                                <li><a class="dropdown-item" href="#">Link 2</a></li>
                                <li><a class="dropdown-item" href="#">Link 3</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <div class="row">
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="5"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="6"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/slider/6708d298915d0aria-slider.webp" alt="Los Angeles" class="d-block"
                        style="width:100%">
                    <div class="carousel-caption">
                        <h3>Los Angeles</h3>
                        <p>We had such a great time in LA!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/slider/6708d2a15032eart-of-living-rku-mou.webp" alt="Chicago" class="d-block"
                        style="width:100%">
                    <div class="carousel-caption">
                        <h3>Chicago</h3>
                        <p>Thank you, Chicago!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/slider/6708d2a15032eart-of-living-rku-mou.webp" alt="Chicago" class="d-block"
                        style="width:100%">
                    <div class="carousel-caption">
                        <h3>Chicago</h3>
                        <p>Thank you, Chicago!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/slider/6708d2a15032eart-of-living-rku-mou.webp" alt="Chicago" class="d-block"
                        style="width:100%">
                    <div class="carousel-caption">
                        <h3>Chicago</h3>
                        <p>Thank you, Chicago!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/slider/6708d2a15032eart-of-living-rku-mou.webp" alt="Chicago" class="d-block"
                        style="width:100%">
                    <div class="carousel-caption">
                        <h3>Chicago</h3>
                        <p>Thank you, Chicago!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/slider/6708d2a15032eart-of-living-rku-mou.webp" alt="Chicago" class="d-block"
                        style="width:100%">
                    <div class="carousel-caption">
                        <h3>Chicago</h3>
                        <p>Thank you, Chicago!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/slider/6708d2a853537NAAC_1.webp" alt="New York" class="d-block" style="width:100%">
                    <div class="carousel-caption">
                        <h3>New York</h3>
                        <p>We love the Big Apple!</p>
                    </div>
                </div>
            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
    <div class="container-fluid mt-3">
        <h3>Collapsible Navbar</h3>
        <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right
            corner (try to re-size this window).</p>
        <p>Only when the button is clicked, the navigation bar will be displayed.</p>
        <p>Tip: You can also remove the .navbar-expand-md class to ALWAYS hide navbar links and display the toggler
            button.</p>
    </div>
    <div class="row">
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, porro ex tenetur deleniti modi iure
            repellendus dolore blanditiis, autem explicabo quaerat architecto, nemo quod. Quis consectetur repellat
            possimus non nobis, voluptatibus placeat reiciendis beatae minus cupiditate necessitatibus expedita autem
            error delectus doloremque officia. Ad aliquid at debitis ratione harum amet sunt, excepturi voluptatibus
            veniam cupiditate qui sed recusandae, natus iure consequuntur assumenda! Impedit placeat doloremque hic
            itaque cum amet, doloribus ad natus dolor harum consequuntur fugit quas dolorum asperiores nam velit
            accusamus, accusantium, cupiditate perspiciatis est magnam sit obcaecati dolore! Ipsa deleniti alias earum
            provident magnam reprehenderit suscipit veritatis deserunt rem magni adipisci vel, architecto temporibus,
            quisquam dolores impedit. Rerum excepturi ex qui, iusto nostrum ratione omnis corrupti voluptas aliquid
            adipisci distinctio autem suscipit quod odio provident at illo, placeat ut. Inventore illum consequatur
            quibusdam expedita nesciunt odio totam consectetur consequuntur a molestias reiciendis dolorum optio aut sed
            incidunt cumque ipsa quae voluptatibus, porro voluptate harum. Assumenda, beatae neque. Animi itaque
            assumenda rem cum, hic qui mollitia dicta nisi molestiae, impedit deserunt. Ipsa, unde nam cum ipsam
            laudantium qui praesentium, quae adipisci minus ab saepe? Velit ipsum perferendis consequatur inventore
            nihil deserunt ea in. Dolorem culpa dicta iure a eaque commodi repellendus. Nesciunt, minus aliquam pariatur
            iste delectus modi deserunt repellat autem explicabo eos placeat corrupti a sint necessitatibus, non laborum
            natus omnis. Repudiandae est, cum similique natus illo totam et accusamus distinctio voluptatem.
        </div>
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <h2>Stacked form</h2>
            <form action="/action_page.php">
                <div class="mb-3 mt-3">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="mb-3">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                </div>
                <div class="form-check mb-3">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="remember"> Remember me
                    </label>
                </div>
                <div class="mb-3">
                    <label for="pwd">Address:</label>
                    <textarea class="form-control" id="address" placeholder="Enter address"></textarea>
                </div>
                <button type=" submit" class="btn btn-danger">Submit</button>
            </form>
        </div>
    </div>
</div>

<div class="dropdown">
    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
        Dropdown button
    </button>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Link 1</a></li>
        <li><a class="dropdown-item" href="#">Link 2</a></li>
        <li><a class="dropdown-item" href="#">Link 3</a></li>
    </ul>
</div>

</body>

</html>