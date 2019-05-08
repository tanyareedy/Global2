<div class="bg-dark py-0" id="headerMenu">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">


            </div>
            <div class="col-lg-6  col-md-12 col-sm-12">
                <p class="text-primary text-xs-center float-lg-left ">Email: info@globalhorizon-cis.com</p>
                <p class="text-primary text-xs-center float-lg-right">Phone number: +123 456 789</p>

            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">

    <div class="float-left">

    <a class="navbar-brand text-dark" href="/index.php">
        <img
                class="img-fluid"
                src="/assets/img/logo.png"
                alt="logo" id="logo"
                style="width:250px; height: 60px;">

    </a>

    </div>

    <div class="float-right">
        <button class="navbar-toggler mr-auto" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation" id="d-flex">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto" id="menuItems">

            <li class="nav-item px-md-4 <?php if ($page == 'home') {
                echo 'active';
            } ?>">
                <a class="nav-link" href="../../index.php">HOME</a>
            </li>
            <li class="nav-item dropdown px-md-2" <?php if ($page == 'program') {
                echo 'active';
            } ?>">
            <a class="nav-link dropdown-toggle" href="/program.php" id="navbarDropdown" role="button"
               data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                PROGRAMS
            </a>
            <div id="dropdown">

                <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">


                    <a class="nav-link text-white " href="/programs/cyprus.php"> CYPRUS
                    </a>


                    <a class="nav-link text-white " href="/programs/canada.php"> CANADA
                    </a>

                    <a class="nav-link text-white" href="/programs/greece.php"> GREECE
                    </a>

                    <a class="nav-link text-white" href="/programs/grenada.php">GRENADA

                    </a>

                    <a class="nav-link text-white" href="/programs/usa.php"> USA

                    </a>

                </div>


            </div>
            </li>
            <li class="nav-item  px-md-2 <?php if ($page == 'press') {
                echo 'active';
            } ?>">
                <a class="nav-link" href="/press.php">PRESS </a>
            </li>
            <li class="nav-item  px-md-2 <?php if ($page == 'contact') {
                echo 'active';
            } ?>">
                <a class="nav-link" href="/contact.php">CONTACT </a>
            </li>

            <a type="button" class="btn bg-primary btn-lg text-white rounded" href="tel:+1-800-555-5555"> <i class="fas fa-phone-volume fa-1x"></i>+123 456 789</a>

        </ul>
    </div>


</nav>


<!--
<nav class="navbar-dark bg-dark ">
    <div id="logo">
        <a class="navbar-brand" href="../../index.php">
            <img class="img-fluid" src="../../assets/img/logo.png" alt="logo">
        </a>
    </div>

    <label for="drop" class="toggle">Menu</label>
    <input type="checkbox" id="drop" />
    <ul class="menu bg-dark">
        <li><a href="#">Home</a></li>
        <li>
            <!-- First Tier Drop Down
            <label for="drop-1" class="toggle">WordPress +</label>
            <a href="#">WordPress</a>
            <input type="checkbox" id="drop-1"/>
            <ul>
                <li><a href="#">Themes and stuff</a></li>
                <li><a href="#">Plugins</a></li>
                <li><a href="#">Tutorials</a></li>
            </ul>

        </li>
        <li>

            <!-- First Tier Drop Down
            <label for="drop-2" class="toggle">Web Design +</label>
            <a href="#">Web Design</a>
            <input type="checkbox" id="drop-2"/>
            <ul>
                <li><a href="#">Resources</a></li>
                <li><a href="#">Links</a></li>
                <li>

                     Second Tier Drop Down
                    <label for="drop-3" class="toggle">Tutorials +</label>
                    <a href="#">Tutorials</a>
                    <input type="checkbox" id="drop-3"/>

                    <ul>
                        <li><a href="#">HTML/CSS</a></li>
                        <li><a href="#">jQuery</a></li>
                        <li><a href="#">Other</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="#">Graphic Design</a></li>
        <li><a href="#">Inspiration</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">About</a></li>
    </ul>
</nav>
-->



