<?php
//Comprueba si esta disponible la secion
session_start();
$userAuntenticado = $_SESSION['login'];
if(!$userAuntenticado){
    header('Location:/login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashboard</title>

    <!-- Bootstrap icons  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- Bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- Fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap" rel="stylesheet">

    <!-- Tables css  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.css" />

    <!-- Custom CSS  -->
    <link rel="stylesheet" href="../build/css/app.css">
</head>

<body>

        <!-- full page wrapper  -->
        <div class="d-flex" id="wrapper">


            <!-- sidebar start  -->
            <div class="sidebar">
                <div class="sidebar__header d-flex justify-content-center p-4">
                    <img src="https://res.cloudinary.com/dpikphrtb/image/upload/v1676161822/descarga_wyp5u8.png" alt="Logo" width="50px">
                </div>

                <ul class="sidebar__nav">
                    <li class="sidebar__list active">
                        <i class="bi bi-bag-check"></i>
                        <a href="index.html" class="sidebar__link">Purchasing</a>
                    </li>
                    <li class="sidebar__list">
                        <i class="bi bi-box-arrow-in-down"></i>
                        <a href="#" class="sidebar__link">Receiving</a>
                    </li>
                    <li class="sidebar__list">
                        <i class="bi bi-gear-wide-connected"></i>
                        <a href="#" class="sidebar__link">Production</a>
                    </li>
                    <li class="sidebar__list">
                        <i class="bi bi-upload"></i>
                        <a href="#" class="sidebar__link">Posting</a>
                    </li>
                    <li class="sidebar__list">
                        <i class="bi bi-people"></i>
                        <a href="#" class="sidebar__link">Customers</a>
                    </li>
                    <li class="sidebar__list">
                        <i class="bi bi-bag-check"></i>
                        <a href="#" class="sidebar__link">Shiping</a>
                    </li>
                    <li class="sidebar__list">
                        <i class="bi bi-file-earmark-pdf"></i>
                        <a href="index.html" class="sidebar__link">Reports</a>
                    </li>
                    <li class="sidebar__list">
                        <i class="bi bi-tools"></i>
                        <a href="index.html" class="sidebar__link">Settings</a>
                    </li>

                </ul>


            </div>
            <!-- Sidebar end  -->

            <!-- Navbar container  -->
            <div id="page-content-wrapper">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg navbar-light bg-transparent p-4 border-bottom">
                    <div>
                        <i class="bi bi-text-left" id="menu-toggle"></i>
                    </div>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <form class="d-flex ms-auto">
                            <input class="form-control me-2 top-search" type="search" placeholder="Search"
                                aria-label="Search">
                        </form>
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="https://res.cloudinary.com/dpikphrtb/image/upload/v1676161822/descarga_wyp5u8.png" alt="Imagen Ditsa" class="user-img rounded-circle">
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="loginOut.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- End of navbar  -->
                <div class="card tarjetas">
                    <div class="card-header">
                        Ver Ventas
                    </div>
                    <div class="card-body">
                        <form>
                        <div class="form-group">
                            <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapseFiltroFecha" aria-expanded="false" aria-controls="collapseFiltroFecha">
                            Filtrar por Fecha
                            </button>
                        </div>
                        <div class="collapse" id="collapseFiltroFecha">
                            <div class="form-group">
                            <label for="fechaDesde">Desde:</label>
                            <input type="date" class="form-control" id="fechaDesde">
                            <label for="fechaHasta">Hasta:</label>
                            <input type="date" class="form-control" id="fechaHasta">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Buscar</button>
                        </form>
                    </div>
                    <div class="card-header">
                        Ver Ventas
                    </div>
                    <div class="card-body">
                        <form>
                        <div class="form-group">
                            <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapseFiltroFecha" aria-expanded="false" aria-controls="collapseFiltroFecha">
                            Filtrar por Fecha
                            </button>
                        </div>
                        <div class="collapse" id="collapseFiltroFecha">
                            <div class="form-group">
                            <label for="fechaDesde">Desde:</label>
                            <input type="date" class="form-control" id="fechaDesde">
                            <label for="fechaHasta">Hasta:</label>
                            <input type="date" class="form-control" id="fechaHasta">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Buscar</button>
                        </form>
                    </div>
                    <div class="card-header">
                        Ver Ventas
                    </div>
                    <div class="card-body">
                        <form>
                        <div class="form-group">
                            <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapseFiltroFecha" aria-expanded="false" aria-controls="collapseFiltroFecha">
                            Filtrar por Fecha
                            </button>
                        </div>
                        <div class="collapse" id="collapseFiltroFecha">
                            <div class="form-group">
                            <label for="fechaDesde">Desde:</label>
                            <input type="date" class="form-control" id="fechaDesde">
                            <label for="fechaHasta">Hasta:</label>
                            <input type="date" class="form-control" id="fechaHasta">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Buscar</button>
                        </form>
                    </div>
                    <div class="card-header">
                        Ver Ventas
                    </div>
                    <div class="card-body">
                        <form>
                        <div class="form-group">
                            <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapseFiltroFecha" aria-expanded="false" aria-controls="collapseFiltroFecha">
                            Filtrar por Fecha
                            </button>
                        </div>
                        <div class="collapse" id="collapseFiltroFecha">
                            <div class="form-group">
                            <label for="fechaDesde">Desde:</label>
                            <input type="date" class="form-control" id="fechaDesde">
                            <label for="fechaHasta">Hasta:</label>
                            <input type="date" class="form-control" id="fechaHasta">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Buscar</button>
                        </form>
                    </div>
                    </div>

                <!-- Main part -->
                <div class="container-fluid main-part">
                    <!-- Charts  -->
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="shadow rounded p-4">
                                <canvas id="myChart" width="450" height="450"></canvas>
                            </div>
                            
                        </div>
                        <div class="col-sm-12 col-md-6 ">
                            <div class="shadow rounded p-4">
                                <canvas id="visits" width="450" height="450"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- End of Charts  -->
                    <!-- Table containar  -->
                    <div class="table-container">
                        <!-- Container  -->
                        <div class="container-fluid py-5">
                            <!-- Row  -->
                            <div class="row align-items-center">
                                <!-- First Column -->
                                <div class="col-sm-12 col-md-4">
                                    <h3 class="table-heading">
                                        Best Selling Products
                                    </h3>
                                </div>
                                <!-- End of first column  -->
                                <!-- Second colum  -->
                                <div class="col-sm-12 col-md-5">
                                    <form class="d-flex">
                                        <input class="form-control me-2" type="search" placeholder="filter..">
                                    </form>
                                </div>
                                <!-- End of second column  -->

                                <!-- Third column  -->
                                <div class="col-sm-12 col-md-2 d-flex justify-content-end">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-custom gear-btn" data-bs-toggle="modal"
                                        data-bs-target="#parts">
                                        <i class="bi bi-gear"></i>
                                    </button>
                                    <!-- End of button  -->

                                </div>
                                <!-- End of third colum  -->
                            </div>
                            <!-- End of row  -->

                        </div>
                        <!-- End of Container  -->
                        <table id="example" class=" bg-white rounded shadow-sm table-hover" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th>Product ID</th>
                                    <th>Product image</th>
                                    <th>Title</th>
                                    <th>Price</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td> #12345 </td>
                                    <td>
                                        <img src="img/1.jpg" alt="product 1" class="product-img">
                                    </td>
                                    <td>Product 1</td>
                                    <td>$1200</td>
                                    <td class="text-center">
                                        <a href="#"><i class="bi bi-pencil-square" data-bs-toggle="modal"
                                                data-bs-target="#parts"></i></a>
                                        <a href="#"><i class="bi bi-trash text-danger"> </i> </a>
                                    </td>

                                </tr>

                                <tr>
                                    <td> #12345 </td>
                                    <td><img src="img/2.png" alt="product-2" class="product-img"></td>
                                    <td>Product 2</td>
                                    <td>$750</td>
                                    <td class="text-center">
                                        <a href="#"><i class="bi bi-pencil-square" data-bs-toggle="modal"
                                                data-bs-target="#parts"></i></a>
                                        <a href="#"><i class="bi bi-trash text-danger"> </i> </a>
                                    </td>

                                </tr>

                                <tr>
                                    <td> #12345 </td>
                                    <td><img src="img/3.jpg" alt="product-1" class="product-img"></td>
                                    <td>Product 3</td>
                                    <td>$100</td>
                                    <td class="text-center">
                                        <a href="#"><i class="bi bi-pencil-square" data-bs-toggle="modal"
                                                data-bs-target="#parts"></i></a>
                                        <a href="#"><i class="bi bi-trash text-danger"> </i> </a>
                                    </td>

                                </tr>


                                <tr>
                                    <td> #12345 </td>
                                    <td><img src="img/4.jpg" alt="product-4" class="product-img"></td>
                                    <td>Product 4</td>
                                    <td>$300</td>
                                    <td class="text-center">
                                        <a href="#"><i class="bi bi-pencil-square" data-bs-toggle="modal"
                                                data-bs-target="#parts"></i></a>
                                        <a href="#"><i class="bi bi-trash text-danger"> </i> </a>
                                    </td>

                                </tr>

                                <tr>
                                    <td> #12345 </td>
                                    <td><img src="img/5.jpg" alt="product-5" class="product-img"></td>
                                    <td>Product 5</td>
                                    <td>$120</td>
                                    <td class="text-center">
                                        <a href="#"><i class="bi bi-pencil-square" data-bs-toggle="modal"
                                                data-bs-target="#parts"></i></a>
                                        <a href="#"><i class="bi bi-trash text-danger"> </i> </a>
                                    </td>

                                </tr>

                                <tr>
                                    <td> #12345 </td>
                                    <td><img src="img/6.jpg" alt="product-6" class="product-img"></td>
                                    <td>Product 6</td>
                                    <td>$1800</td>
                                    <td class="text-center">
                                        <a href="#"><i class="bi bi-pencil-square" data-bs-toggle="modal"
                                                data-bs-target="#parts"></i></a>
                                        <a href="#"><i class="bi bi-trash text-danger"> </i> </a>
                                    </td>

                                </tr>

                                <tr>
                                    <td> #12345 </td>
                                    <td><img src="img/8.jpg" alt="product-7" class="product-img"></td>
                                    <td>Product 7</td>
                                    <td>$75</td>
                                    <td class="text-center">
                                        <a href="#"><i class="bi bi-pencil-square" data-bs-toggle="modal"
                                                data-bs-target="#parts"></i></a>
                                        <a href="#"><i class="bi bi-trash text-danger"> </i> </a>
                                    </td>
                                </tr>


                            </tbody>

                        </table>

                    </div>
                    <!-- Table Container End -->

                    <!-- Modal -->
                    <div class="modal fade bd-example-modal-lg" id="parts" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Vendor / Supplies parts</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">


                                    <div class="row mb-2">
                                        <div class="col-md-3">
                                            <label class="form-label">Product ID</label>
                                        </div>

                                        <div class="col-md-9">
                                            <select class="form-select">
                                                <option selected disabled value="">#12345</option>
                                                <option>#12345</option>
                                                <option>#12345</option>
                                                <option>#12345</option>
                                                <option>#12345</option>
                                                <option>#12345</option>
                                                <option>#12345</option>
                                                <option>#12345</option>
                                                <option>#12345</option>
                                            </select>  
                                        </div>
                                    </div>

                                   

                                    <div class="row mb-2">
                                        <div class="col-md-3">
                                            <label class="form-label">Image URL</label>
                                        </div>

                                        <div class="col-md-9">
                                            <input type="text" class="form-control" value="https://www.google.com/">
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-md-3">
                                            <label class="form-label">Product Title</label>
                                        </div>

                                        <div class="col-md-9">
                                            <input type="text" class="form-control" value="Product 1"
                                                required>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-md-3">
                                            <label class="form-label">Price</label>
                                        </div>

                                        <div class="col-md-9">
                                            <input type="number" name="" class="form-select" id="validationCustom04"
                                                required>
                                            <div class="invalid-feedback">
                                                Please add a valid price
                                            </div>
                                        </div>
                                    </div>

                                   

                                    <div class="row mb-2">
                                        <div class="col-md-3">
                                            <label class="form-label">Description</label>
                                        </div>

                                        <div class="col-md-9">
                                            <input type="text" class="form-control" value="Product description">
                                        </div>
                                    </div>

                                    


                                    <div class="row">
                                        <div class="col-6 d-flex align-items-center">
                                            <a href="#" class="btn btn-danger me-2"><i class="bi bi-trash "> </i> </a>
                                            <p class=" m-0 "> Delete vendor part</p>
                                        </div>
                                        <div class="col-6 d-flex justify-content-end">
                                            <button class="btn btn-custom" type="submit"><i class="bi bi-save2"></i>
                                                Save vendor part</button>
                                        </div>
                                    </div>

                                   

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-custom">Save changes</button>
                                </div>

                            </div>
                        </div>


                    </div>
                    <!-- End of modal -->

                </div>
                <!-- End of main part -->


            </div>
            <!-- end of page content wrapper  -->

        </div>
        <!-- End of full page wrapper  -->


        <!-- Boostrap 5  -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
            crossorigin="anonymous"></script>
        <!-- jquery  -->
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

        <!-- Data tables  -->
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
        
        <!-- Chart js  -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>

        <!-- Custom js  -->
        <script src="../build/js/bundle.min.js"></script>

    </body>

</html>