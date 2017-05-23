<style>
    * {
        margin: 0;
        padding: 0;
    }

    h1 {
        font-size: 45px;
        font-weight: 100;
        letter-spacing: 15px;
        text-align: center;
    }

    h1, #main_content, #dog_link {
        padding: 15px;
    }

    p {
        margin: 15px 0;
    }

    a {
        color: #06c;
    }

    #main_nav ul {
        background: white;
        float: left;
        -webkit-transition: .5s;
        transition: .5s;
    }

    #main_nav li {
        float: left;
        position: relative;
        width: 150px;
        list-style: none;
        -webkit-transition: .5s;
        transition: .5s;
    }

    #main_nav > ul > li > a, h1 {
        text-transform: uppercase;
    }

    #main_nav a {
        display: block;
        text-decoration: none;
        padding: 5px 15px;
        color: #000;
    }

    #main_nav ul ul {
        position: absolute;
        left: 0;
        top: 100%;
        visibility: hidden;
        opacity: 0;
    }

    #main_nav ul ul ul {
        left: 100%;
        top: 0;
    }

    #main_nav li:hover, #main_nav li:hover li {
        background: #ddd;
    }

    #main_nav li li:hover, #main_nav li li:hover li {
        background: #bbb;
    }

    #main_nav li li li:hover {
        background: #999;
    }

    #main_nav li:hover > ul {
        visibility: visible;
        opacity: 1;
    }
</style>

<div class="row">
    <div class="col-lg-12">
        <img class="img-responsive" align="center" src="images/newBanner.jpg" width="100%">
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <nav id="main_nav">
            <ul>
                <li>
                    <a href="">Birds</a>
                    <ul>
                        <li><a href="">Ratites</a></li>
                        <li><a href="">Fowl</a></li>
                        <li><a href="">Neoaves</a></li>
                    </ul>
                </li>
                <li>
                    <a href="">Mammals</a>
                    <ul>
                        <li>
                            <a href="">Monotremes</a>
                            <ul>
                                <li><a href="">Echidnas</a></li>
                                <li><a href="">Platypus</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="">Marsupials</a>
                            <ul>
                                <li><a href="">Opossums</a></li>
                                <li><a href="">Numbats, etc.</a></li>
                                <li><a href="">Bandicoots, etc.</a></li>
                                <li><a href="">Kangaroos, koalas, wombats, etc.</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="">Placentals</a>
                            <ul>
                                <li><a href="">Primates, ungulates, etc.</a></li>
                                <li><a href="">Anteaters, sloths, etc.</a></li>
                                <li><a href="">Elephants, etc.</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="">Reptiles</a>
                    <ul>
                        <li><a href="">Lizards and snakes</a></li>
                        <li><a href="">Tortoises and turtles</a></li>
                        <li><a href="">Crocodilians</a></li>
                        <li><a href="">Tuatara</a></li>
                    </ul>
                </li>
                <li>
                    <a href="">Amphibians</a>
                    <ul>
                        <li><a href="">Frogs and toads</a></li>
                        <li><a href="">Salamanders and newts</a></li>
                        <li><a href="">Caecilians</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
<br>