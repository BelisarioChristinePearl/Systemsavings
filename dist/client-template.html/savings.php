<?php
session_start();

// Check if the user is logged in and has the 'admin' role
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    // Redirect to login page if not authorized
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="admin.html">ADMIN</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-success" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end bg-dark" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item text-muted" href="#!">Settings</a></li>
                    <li><a class="dropdown-item text-muted" href="#!">Activity Log</a></li>
                    <li><hr class="dropdown-divider" /></li>
                    <li><a class="dropdown-item text-muted" href="login.php?logout=true">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="admin.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>

                        <!-- Directly linking the Savings Management sections -->
                       
                        <a class="nav-link" href="acc.manage.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-bank"></i></div>
                            Savings Management
                        </a>
                       
                       
                        <a class="nav-link" href="transac.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-exchange-alt"></i></div>
                            Transaction Management
                        </a>
                        
                        <a class="nav-link" href="Savings.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-line"></i></div>
                            Savings Reports
                        </a>
                        
                        <a class="nav-link" href="tables.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            User Feedback
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer bg-dark">
                    <div class="small">Logged in as:</div>
                    Start Bootstrap
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content" class="bg-dark" style="--bs-bg-opacity: .95;">
            <main>
                <div class="container-fluid px-4">
                    <h3 class="mt-4 text-light">Savings Management</h3>
                    <div class="card mb-4">
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            User Accounts
                        </div>
                        <body>
                            <div class="container my-5">
                                <h2 class="mb-4">User Information Table</h2>
                                <table class="table table-bordered table-hover">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Contact</th>
                                            <th>Address</th>
                                            <th>Status</th>
                                            <th>Balance</th>
                                        </tr>
                                    </thead>
                                    <tbody id="userTable">
                                        <tr>
                                            <td>Sodais</td>
                                            <td>sodaispandagla@gmail.com</td>
                                            <td>+123456789</td>
                                            <td>buyer st.</td>
                                            <td class="status">Pending</td>
                                            <td class="balance">100.00</td>
                                        </tr>
                                        <tr>
                                            <td>Rolly</td>
                                            <td>rolly@gmail.com</td>
                                            <td>+987654321</td>
                                            <td>5678 Maple Avenue</td>
                                            <td class="status">Active</td>
                                            <td class="balance">250.00</td>
                                        </tr>
                                        <tr>
                                            <td>Johary</td>
                                            <td>Johary@gmail.com</td>
                                            <td>+987654321</td>
                                            <td>Baker st.</td>
                                            <td class="status">Active</td>
                                            <td class="balance">250.00</td>
                                        </tr>
                                        <!-- Add more rows as needed -->
                                    </tbody>
                                </table>
                            </div>
                            
                            <!-- Bootstrap 5 JavaScript and dependencies -->
                            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
                            
                            <!-- JavaScript for automatic status update -->
                            <script>
                                function updateStatus() {
                                    const rows = document.querySelectorAll('#userTable tr');
                                    
                                    rows.forEach(row => {
                                        const statusCell = row.querySelector('.status');
                                        const balanceCell = row.querySelector('.balance');
                                  
                                        // Generate random status and balance updates
                                        const statuses = ['Pending', 'Active', 'Inactive', 'Completed'];
                                        const randomStatus = statuses[Math.floor(Math.random() * statuses.length)];
                                        const randomBalance = (Math.random() * 500).toFixed(2);
                                  
                                        // Update the cells
                                        statusCell.textContent = randomStatus;
                                        balanceCell.textContent = `$${randomBalance}`;
                                  
                                        // Optionally add styling based on status
                                        statusCell.classList.remove('table-warning', 'table-success', 'table-secondary', 'table-primary');
                                        if (randomStatus === 'Pending') statusCell.classList.add('table-warning');
                                        else if (randomStatus === 'Active') statusCell.classList.add('table-success');
                                        else if (randomStatus === 'Inactive') statusCell.classList.add('table-secondary');
                                        else if (randomStatus === 'Completed') statusCell.classList.add('table-primary');
                                    });
                                }
                            
                                // Run updateStatus every 5 seconds
                                setInterval(updateStatus, 5000);
                            </script>
                            
                        </body>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto bg-dark">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2023</div>
                        <div>
                            <a href="#" class="text-muted">Privacy Policy</a>
                            
                            <a href="#" class="text-muted">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>
</html>