<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Тест</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/skin.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
    <div class="container white">
<header>
    <div class="row">

        <!-- Navbar goes here -->
        <nav class="green">
            <div class="nav-wrapper">
                <div class="col s6">
                    <a href="#!" class="breadcrumb">First</a>
                    <a href="#!" class="breadcrumb">Second</a>
                    <a href="#!" class="breadcrumb">Third</a>
                </div>
                <div class="col s6">
                    <a class="waves-effect waves-light btn teal lighten-1" href="#">Кнопка</a>
                    <a class="waves-effect waves-light btn teal lighten-2" href="#">Почта</a>
                    <a class="waves-effect waves-light btn teal lighten-3" href="#">Разное</a>
                    <!-- Dropdown Trigger -->
                    <a class='dropdown-button btn' href='#'
                        data-activates='dropdown1'
                    >
                        Щас я упаду
                    </a>

                    <!-- Dropdown Structure -->
                    <ul id='dropdown1' class='dropdown-content'>
                        <li><a href="#!">Раз</a></li>
                        <li><a href="#!">Два</a></li>
                        <li class="divider"></li>
                        <li><a href="#!">Три</a></li>
                        <li><a href="#!"><i class="material-icons">view_module</i>Четыре</a></li>
                        <li><a href="#!"><i class="material-icons">cloud</i>Пять</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>

<main>

    <!-- Page Layout here -->
    <div class="row">

        <div class="col green lighten-3 s12 m4 l3"> <!-- Note that "m4 l3" was added -->
            Grey navigation panel
            This content will be:
            3-columns-wide on large screens,
            4-columns-wide on medium screens,
            12-columns-wide on small screens

        </div>

        <div class="col grey lighten-3 s12 m8 l9"> <!-- Note that "m8 l9" was added -->
            Teal page content
            This content will be:
            9-columns-wide on large screens,
            8-columns-wide on medium screens,
            12-columns-wide on small screens

        </div>

    </div>
    <div class="row">
        <div class="col s6 lime lighten-3 hoverable"><h1>Тест</h1></div>
        <div class="col s4 offset-s2">
            <div class="card-panel teal lighten-1 hoverable">
                <h5 class="yellow-text lighten-5">Это карточка своего цвета</h5>
            </div>
        </div>
    </div>

    <!--
            <div class="fixed-action-btn toolbar">
                <a class="btn-floating btn-large blue">
                    <i class="large material-icons">mode_edit</i>
                </a>
                <ul>
                    <li class="waves-effect waves-light"><a href="#!"><i class="material-icons">insert_chart</i></a></li>
                    <li class="waves-effect waves-light"><a href="#!"><i class="material-icons">format_quote</i></a></li>
                    <li class="waves-effect waves-light"><a href="#!"><i class="material-icons">publish</i></a></li>
                    <li class="waves-effect waves-light"><a href="#!"><i class="material-icons">attach_file</i></a></li>
                </ul>
            </div>
    -->

    <div class="fixed-action-btn">
        <a class="btn-floating btn-large red">
            <i class="large material-icons">mode_edit</i>
        </a>
        <ul>
            <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
            <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
            <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
            <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
        </ul>
    </div>

    <table class="bordered striped highlight centered">
        <thead>
        <tr>
            <th>Name</th>
            <th>Item Name</th>
            <th>Item Price</th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td>Alvin</td>
            <td>Eclair</td>
            <td>$0.87</td>
        </tr>
        <tr>
            <td>Alan</td>
            <td>Jellybean</td>
            <td>$3.76</td>
        </tr>
        <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>$7.00</td>
        </tr>
        <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>$7.00</td>
        </tr>
        <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>$7.00</td>
        </tr>
        <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>$7.00</td>
        </tr>
        <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>$7.00</td>
        </tr>
        </tbody>
    </table>

    <div class="row">
        <div class="col s12 m2">
            <p class="z-depth-1 yellow">z-depth-1</p>
        </div>
        <div class="col s12 m2">
            <p class="z-depth-2 yellow">z-depth-2</p>
        </div>
        <div class="col s12 m2">
            <p class="z-depth-3 yellow">z-depth-3</p>
        </div>
        <div class="col s12 m2">
            <p class="z-depth-4 yellow">z-depth-4</p>
        </div>
        <div class="col s12 m2">
            <p class="z-depth-5 yellow">z-depth-5</p>
        </div>
    </div>

</main>
<footer class="page-footer grey darken-1">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright grey darken-2">
        <div class="container">
            © 2018 SmartNET Group
            <a class="grey-text text-lighten-4 right" href="#!">Больше связей</a>
        </div>
    </div>
</footer>
</body>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/skin.js"></script>
</html>