<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BS Shop - Produk</title>

    <!-- Custom fonts for this template-->
    <link href="../src/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this page -->
    <!-- Boostrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css"
        integrity="sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom styles for this page -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/datatables.net-bs5/1.12.1/dataTables.bootstrap5.css"
        integrity="sha512-3g2jlxiWYLcHo9Y/jU2dDJNqDIxN/yU5z9fa8lXIJRPe6aWYxTIVpGu95Jn+kgf/4D4fThWsWF5x4u5oK3lMVQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom styles for this template-->
    <link href="../src/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">
                    BS Shop <sup>2</sup>
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0" />

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Nav Item - Produk -->
            <li class="nav-item">
                <a class="nav-link" href="customers.html">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Produk</span></a>
            </li>

            <!-- Nav Item - Produk -->
            <li class="nav-item">
                <a class="nav-link" href="products.html">
                    <i class="fab fa-product-hunt"></i>
                    <span>Produk</span></a>
            </li>

            <!-- Nav Item - Transaction -->
            <li class="nav-item">
                <a class="nav-link" href="transaction.html">
                    <i class="fas fa-hand-holding-usd"></i>
                    <span>Transaction</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block" />

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) Burger menu -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">
                                            December 12, 2019
                                        </div>
                                        <span class="font-weight-bold">A new monthly report is ready
                                            to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">
                                            December 7, 2019
                                        </div>
                                        $290.29 has been deposited into your
                                        account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">
                                            December 2, 2019
                                        </div>
                                        Spending Alert: We've noticed
                                        unusually high spending for your
                                        account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Hi, Administrator</span>
                                <img class="img-profile rounded-circle" src="../src/img/undraw_profile.svg" />
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">
                            <i class="fab fa-product-hunt"></i>&nbsp;Tabel Produk
                        </h1>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <!-- Button Add New Product modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#addDataProduk">
                                <i class="fas fa-plus-circle"></i>&nbsp;Add New Product
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Foto</th>
                                            <th>Nama Produk</th>
                                            <th>Nomor SKU</th>
                                            <th>Stok</th>
                                            <th>Harga Satuan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No.</th>
                                            <th>Foto</th>
                                            <th>Nama Produk</th>
                                            <th>Nomor SKU</th>
                                            <th>Stok</th>
                                            <th>Harga Satuan</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <img src="https://assets.jamtangan.com/images/product/alexandre-christie/ACF-6457-MCLIPBA/1l.jpg"
                                                    class="card-img-top" alt="Image AC6457">
                                            </td>
                                            <td>Alexandre Christie Passion Men Chronograph Black</td>
                                            <td>AC-6457</td>
                                            <td>10</td>
                                            <td>Rp 1.235.000</td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-primary"
                                                    data-bs-toggle="modal" data-bs-target="#updateDataProduk">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-danger delete" id="AC-6457">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <img src="https://assets.jamtangan.com/images/product/alexandre-christie/ACF-8331-MDBRGSL/1l.jpg"
                                                    class="card-img-top" alt="Image MK7217">
                                            </td>
                                            <td>Michael Kors Lexington Woman</td>
                                            <td>MK-7217</td>
                                            <td>8</td>
                                            <td>Rp 2.629.000</td>
                                            <td>
                                                <button type='button' class="btn btn-sm btn-primary"
                                                    data-bs-toggle="modal" data-bs-target="#updateDataProduk">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-danger delete" id="MK-7217">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; 2022. Eko Okda. All Rights
                            Reserved.</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Form Add New Product -->
    <div class="modal fade" id="addDataProduk" tabindex="-1" aria-labelledby="addDataProduk" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title text-center" id="titleAddDataProduk" aria-label="Close"><i
                            class="fab fa-product-hunt"></i>&nbsp;Add New Product</h4>
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="#">
                        <!-- Nama Produk -->
                        <div class="mb-3">
                            <label for="lAddNamaProduk" class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" name="fAddNamaProduk" id="fAddNamaProduk">
                        </div>
                        <!-- SKU -->
                        <div class="mb-3">
                            <label for="lAddSKU" class="form-label">Nomor SKU</label>
                            <input type="text" class="form-control" name="fAddSKU" id="fAddSKU">
                        </div>
                        <!-- Stok -->
                        <div class="mb-3">
                            <label for="lAddStok" class="form-label">Stok</label>
                            <input type="number" class="form-control" name="fAddStok" id="fAddStok">
                        </div>
                        <!-- Alamat -->
                        <div class="mb-3">
                            <label for="lAddHargaSatuan" class="form-label">Harga Satuan</label>
                            <input type="text" class="form-control" name="fAddHargaSatuan" id="fAddHargaSatuan">
                        </div>
                        <!-- Foto Produk -->
                        <div class="mb-3">
                            <label for="lAddImageProduk" class="form-label">File Foto</label>
                            <input type="file" class="form-control" id="fAddImageProduk">
                        </div>
                        <div class="d-grid gap-2">
                            <button type="button" name="btn-add-product" id="btn-add-product"
                                class="btn btn-primary">Tambah Produk</button>
                        </div>
                    </form>
                </div> <!-- end .modal-body -->
            </div>
        </div>
    </div> <!-- End #Add New Product Modal -->
    <!-- End .modal-fade / Modal Registration -->

    <!-- Modal Form Update -->
    <div class="modal fade" id="updateDataProduk" tabindex="-1" aria-labelledby="updateDataProduk" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title text-center" id="titleDataProduk" aria-label="Close"><i
                            class="fab fa-product-hunt"></i> Update
                        Data Produk</h4>
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="#">
                        <!-- Nama Produk -->
                        <div class="mb-3">
                            <label for="lnamaProduk" class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" name="fnamaProduk" id="fnamaProduk">
                        </div>
                        <!-- SKU -->
                        <div class="mb-3">
                            <label for="lSKU" class="form-label">Nomor SKU</label>
                            <input type="text" class="form-control" name="fSKU" id="fSKU">
                        </div>
                        <!-- Stok -->
                        <div class="mb-3">
                            <label for="lStok" class="form-label">Stok</label>
                            <input type="number" class="form-control" name="fStok" id="fStok">
                        </div>
                        <!-- Alamat -->
                        <div class="mb-3">
                            <label for="lHargaSatuan" class="form-label">Harga Satuan</label>
                            <input type="text" class="form-control" name="fHargaSatuan" id="fHargaSatuan">
                        </div>
                        <!-- Foto Produk -->
                        <div class="mb-3">
                            <label for="lImageProduk" class="form-label">File Foto</label>
                            <input type="file" class="form-control" id="fImageProduk">
                        </div>
                        <div class="d-grid gap-2">
                            <button type="button" name="btn-update-product" id="btn-update-product"
                                class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div> <!-- end .modal-body -->
            </div>
        </div>
    </div> <!-- End #registrasiModal -->
    <!-- End .modal-fade / Modal Registration -->

    <!-- Jquery Core Javascript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Core plugin JavaScript-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"
        integrity="sha512-0QbL0ph8Tc8g5bLhfVzSqxe9GERORsKhIn1IrpxDAgUsbBGz/V7iSav2zzW325XGd1OMLdL4UiqRJj702IeqnQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.5/umd/popper.min.js"
        integrity="sha512-8cU710tp3iH9RniUh6fq5zJsGnjLzOWLWdZqBMLtqaoZUA6AWIE34lwMB3ipUNiTBP5jEZKY95SfbNnQ8cCKvA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"
        integrity="sha512-OvBgP9A2JBgiRad/mM36mkzXSXaJE9BEIENnVEmeZdITvwT09xnxLtT4twkCa8m/loMbPHsvPl0T8lRGVBwjlQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Page level plugins -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"
        integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables.net-bs5/1.12.1/dataTables.bootstrap5.min.js"
        integrity="sha512-nfoMMJ2SPcUdaoGdaRVA1XZpBVyDGhKQ/DCedW2k93MTRphPVXgaDoYV1M/AJQLCiw/cl2Nbf9pbISGqIEQRmQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Sweetalert JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Custom scripts for all pages-->
    <script src="../src/js/sb-admin-2.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="../src/js/demo/datatables-demo.js"></script>

    <script>
        $(document).ready(function () {
            $('.delete').click(function () {
                let id = $(this).attr('id');
                swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this imaginary file!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then((willDelete) => {
                    if (willDelete) {
                        swal(`Poof! ID Number ${id} has been deleted!`, {
                            icon: "success",
                        });
                    } else {
                        swal("Your imaginary file is safe!");
                    }
                });
            });
        });
    </script>
</body>

</html>