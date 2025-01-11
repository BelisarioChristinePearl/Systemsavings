<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Employee</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">CLIENT</a>
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
                        <li><a class="dropdown-item text-muted" href="login.html">Logout</a></li>
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
                            <a class="nav-link" href="CL.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="deposit.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Deposit
                            <a class="nav-link" href="withdrawal.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Withdrawal
                             <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Transaction History
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Loan
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Chat Support
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
            <h2 class="mt-4 text-white">Deposit Money</h2>
            
            <!-- Deposit Form -->
            <form id="depositForm" class="my-4">
                <div class="mb-3">
                    <label for="depositAmount" class="form-label text-white">Amount</label>
                    <input type="number" class="form-control" id="depositAmount" required>
                </div>
                <div class="mb-3">
                    <label for="depositDescription" class="form-label text-white">Description</label>
                    <input type="text" class="form-control" id="depositDescription" required>
                </div>
                <button type="submit" class="btn btn-primary">Add Deposit</button>
            </form>

            <!-- Deposit Table -->
            <h3 class="mt-4 text-white">Deposit History</h3>
            <table class="table table-dark table-striped" id="depositTable">
                <thead>
                    <tr>
                        <th>Amount</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Deposit entries will be added dynamically here -->
                </tbody>
            </table>
        </div>
</main>    
                <footer class="py-4 bg-light mt-auto bg-dark">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#" class="text-muted">Privacy Policy</a>
                                &middot;
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
        <!-- Custom Script for CRUD Operations -->
    <script>
        // Initialize an array to store deposits
        let deposits = [];
        
        // Function to render the deposit table
        function renderDeposits() {
            const tableBody = document.querySelector('#depositTable tbody');
            tableBody.innerHTML = '';
            deposits.forEach((deposit, index) => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${deposit.amount}</td>
                    <td>${deposit.description}</td>
                    <td>
                        <button class="btn btn-warning btn-sm" onclick="editDeposit(${index})">Edit</button>
                        <button class="btn btn-danger btn-sm" onclick="deleteDeposit(${index})">Delete</button>
                    </td>
                `;
                tableBody.appendChild(row);
            });
        }

        // Function to add a deposit
        document.getElementById('depositForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const amount = parseFloat(document.getElementById('depositAmount').value);
            const description = document.getElementById('depositDescription').value;

            // Create a new deposit object
            const newDeposit = { amount, description };

            // Add the new deposit to the deposits array
            deposits.push(newDeposit);

            // Re-render the deposits table
            renderDeposits();

            // Clear the form inputs
            document.getElementById('depositAmount').value = '';
            document.getElementById('depositDescription').value = '';
        });

        // Function to edit a deposit
        function editDeposit(index) {
            const deposit = deposits[index];
            document.getElementById('depositAmount').value = deposit.amount;
            document.getElementById('depositDescription').value = deposit.description;

            // Change the form's submit handler to update the deposit instead of creating a new one
            const form = document.getElementById('depositForm');
            form.onsubmit = function(event) {
                event.preventDefault();
                deposit.amount = parseFloat(document.getElementById('depositAmount').value);
                deposit.description = document.getElementById('depositDescription').value;
                
                // Re-render the deposits table
                renderDeposits();

                // Clear the form inputs and reset submit handler
                form.onsubmit = function(event) {
                    event.preventDefault();
                    const amount = parseFloat(document.getElementById('depositAmount').value);
                    const description = document.getElementById('depositDescription').value;
                    const newDeposit = { amount, description };
                    deposits.push(newDeposit);
                    renderDeposits();
                    document.getElementById('depositAmount').value = '';
                    document.getElementById('depositDescription').value = '';
                };
            };
        }

        // Function to delete a deposit
        function deleteDeposit(index) {
            // Remove the deposit from the array
            deposits.splice(index, 1);

            // Re-render the deposits table
            renderDeposits();
        }

        // Initial rendering of the deposit table
        renderDeposits();
    </script>
    </body>
</html>