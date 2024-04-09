<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm kiếm Sách</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
    integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
    crossorigin="anonymous">
    <!-- <link href="/public/frontend/style.css" rel="stylesheet" type="text/css"> -->
</head>
<body>
    <!-- Header -->
    <div class="container p-2 my-2 text-black">
        <div class="row">
            <div class="col-2">
                <div class="d-flex p-2">
                    <img src="../logoWeb.jpg" class="img-thumbnail"><br>
                    <h6>E-FINDER</h6>
                </div>
            </div>
            <div class="col-8 align-items-center">
                <div class="input-group">
                    <span class="input-group-text">
                        <span class="fas fa-search"></span>
                    </span>
                    <input type="text" class="form-control" id="keySearch" placeholder="Nhập từ khoá">
                </div>
            </div>
            <div class="col-2">
                <div class="dropdown">
                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                        Tài khoản
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Đăng nhập</a>
                        <a class="dropdown-item" href="#">Đăng ký</a>
                        <a class="dropdown-item" href="#">Đăng xuất</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tab -->
    <div class="container mt-3">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#search">Tìm kiếm</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#history">Lịch sử tìm kiếm</a>
            </li>
        </ul>
        <ul class="breadcrumb mt-2">
            <li class="breadcrumb-item"><a href="#">...</a></li>
            <li class="breadcrumb-item"><a href="#">...</a></li>
            <li class="breadcrumb-item"><a href="#">...</a></li>
            <li class="breadcrumb-item active">...</li>
        </ul>
        <!-- Tab Home -->
        <div class="tab-content">
            <div id="home" class="container tab-pane active"><br>
                <div class="row">
                    <div class="col-3">
                        <!-- Danh mục Sách -->
                        <div class="dropdown">
                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                Danh mục Sách
                            </button>
                            <div class="dropdown-menu">
                                <a class="nav-link" href="#">Sách mới
                                    <span class="badge badge-danger">Mới</span>
                                </a>
                                <a class="nav-link" href="#">Sách thiếu nhi
                                    <span class="badge badge-danger">Mới</span>
                                </a>
                                <a class="nav-link" href="#">Sách tâm lý, tình cảm
                                    <span class="badge badge-danger">Mới</span>
                                </a>
                                <a class="nav-link" href="#">Sách tôn giáo
                                    <span class="badge badge-danger">Mới</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Slider -->
                    <div class="col-9 bg-light">
                        <div id="demo" class="carousel slide" data-ride="carousel">
                            <ul class="carousel-indicators">
                                <li data-target="#demo" data-slide-to="0" class="active"></li>
                                <li data-target="#demo" data-slide-to="1"></li>
                                <li data-target="#demo" data-slide-to="2"></li>
                            </ul>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="../sachThieuNhi_banner.jpg" alt="Sách Thiếu nhi" width="1100" height="500">
                                </div>
                                <div class="carousel-item">
                                    <img src="chicago.jpg" alt="Chicago" width="1100" height="500">
                                </div>
                                <div class="carousel-item">
                                    <img src="ny.jpg" alt="New York" width="1100" height="500">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next" href="#demo" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <ul class="pagination mt-3 justify-content-center">
                    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </div>
            <!-- Tab Tìm kiếm -->
            <div id="search" class="container tab-pane fade"><br>
                <h2 class="text-center">Thông tin chi tiết</h2>
                <!-- Chi tiết tìm kiếm -->
                <div class="row">
                    <div class="col-6">
                        <label>Tên tác giả:</label><br>
                        <input type="text" class="form-control" id="authorName" placeholder="Nhập tên tác giả"><br>
                        <label>Năm xuất bản:</label>
                        <input type="number" class="form-control" id="yearPublish" placeholder="Nhập năm xuất bản"><br>
                        <button type="button" class="btn btn-dark btn-default align-self-center">Huỷ</button>
                    </div>
                    <div class="col-6 text-left">
                        <label>Tên sách:</label><br>
                        <input type="text" class="form-control" id="bookName" placeholder="Nhập tên sách cần tìm"><br>
                        <label>Mã ISBN:</label><br>
                        <input type="text" class="form-control" id="isbn" placeholder="Nhập mã sách"><br>
                        <button type="button" class="btn btn-info btn-default align-self-center">Tìm</button>
                    </div>
                </div>
                <ul class="pagination mt-3 justify-content-center">
                    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </div>
            <div id="history" class="container tab-pane fade"><br>
                <ul class="pagination mt-3 justify-content-center">
                    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
