<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Alert</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style/assets/css/bootstrap.css')}}">

    <link rel="stylesheet" href="{{asset ('style/assets/vendors/iconly/bold.css') }}">

    <link rel="stylesheet" href="{{asset ('style/assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{asset ('style/assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{asset ('style/assets/css/app.css') }}">
    <link rel="shortcut icon" href="{{asset ('style/assets/images/favicon.svg') }}" type="image/x-icon">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.html"><img src="{{asset ('style/assets/images/logo/btn.png') }}" alt="Logo" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item ">
                            <a href="/home" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-title">Tables</li>
                        
                        <li class="sidebar-item active ">
                            <a href="{{asset ('/alert') }}" class='sidebar-link'>
                                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                                <span>Data Alert</span>
                            </a>
                        </li>
                        
                        <li class="sidebar-item ">
                            <a href="{{asset ('/alertgroup') }}" class='sidebar-link'>
                                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                                <span>Detail Alert</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>DataTable</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Data Table Alert</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            Data Alert Telegram
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Alert ID</th>
                                        <th>Node Name</th>
                                        <th>IP Address</th>
                                        <th>Message</th>
                                        <th>Chat ID</th>
                                        <th>PIC</th>
                                        <th>Created</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($list_alert as $result)
                                    <tr>
                                        <td>{{ $result->id }}</td>
                                        <td>{{ $result->alertid }}</td>
                                        <td>{{ $result->nodename }}</td>
                                        <td>{{ $result->nodeipaddress }}</td>
                                        <td>{{ $result->alertmessage }}</td>
                                        <td>{{ $result->chatid }}</td>
                                        <td>{{ $result->pic }}</td>
                                        <td>{{ $result->created }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2022 &copy; BTN</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{asset ('style/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset ('style/assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{asset ('style/assets/vendors/simple-datatables/simple-datatables.js') }}"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>

    <script src="{{asset ('style/assets/js/main.js') }}"></script>
    <script src="{{asset ('style/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{asset ('style/assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{asset ('style/assets/vendors/apexcharts/apexcharts.js') }}"></script>
    <script src="{{asset ('style/assets/js/pages/dashboard.js') }}"></script>

    <script src="{{asset ('style/assets/js/main.js') }}"></script>
</body>

</html>