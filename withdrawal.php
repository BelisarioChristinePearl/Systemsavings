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
                        <li><a class="dropdown-item text-muted" href="login.php">Logout</a></li>
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
                             <a class="nav-link" href="transaction.php">
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
         <div class="container-fluid px-4">
            <h2 class="mt-4 text-white">Withdrawal Money</h2>
            
            <!-- Withdrawal Form -->
            <form id="withdrawalForm" class="my-4">
                <div class="mb-3">
                    <label for="accountNumber" class="form-label text-white">Account Number</label>
                    <input type="text" class="form-control" id="accountNumber" required>
                </div>
                <div class="mb-3">
                    <label for="withdrawAmount" class="form-label text-white">Amount</label>
                    <input type="number" class="form-control" id="withdrawAmount" required>
                </div>
                <div class="mb-3">
                    <label for="withdrawDescription" class="form-label text-white">Description</label>
                    <input type="text" class="form-control" id="withdrawDescription" required>
                </div>
                <button type="submit" class="btn btn-primary">Add Withdrawal</button>
            </form>

            <!-- Withdrawal Table -->
            <h3 class="mt-4 text-white">Withdrawal History</h3>
            <table class="table table-dark table-striped" id="withdrawalTable">
                <thead>
                    <tr>
                        <th>Account Number</th>
                        <th>Amount</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Withdrawal entries will be added dynamically here -->
                </tbody>
            </table>
        </div>
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
        // Initialize an array to store withdrawals
        let withdrawals = [];

        // Function to render the withdrawal table
        function renderWithdrawals() {
            const tableBody = document.querySelector('#withdrawalTable tbody');
            tableBody.innerHTML = '';
            withdrawals.forEach((withdrawal, index) => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${withdrawal.accountNumber}</td>
                    <td>${withdrawal.amount}</td>
                    <td>${withdrawal.description}</td>
                    <td>
                        <button class="btn btn-warning btn-sm" onclick="editWithdrawal(${index})">Edit</button>
                        <button class="btn btn-danger btn-sm" onclick="deleteWithdrawal(${index})">Delete</button>
                    </td>
                `;
                tableBody.appendChild(row);
            });
        }

        // Function to add a withdrawal
        document.getElementById('withdrawalForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const accountNumber = document.getElementById('accountNumber').value;
            const amount = parseFloat(document.getElementById('withdrawAmount').value);
            const description = document.getElementById('withdrawDescription').value;

            // Create a new withdrawal object
            const newWithdrawal = { accountNumber, amount, description };

            // Add the new withdrawal to the withdrawals array
            withdrawals.push(newWithdrawal);

            // Re-render the withdrawal table
            renderWithdrawals();

            // Clear the form inputs
            document.getElementById('accountNumber').value = '';
            document.getElementById('withdrawAmount').value = '';
            document.getElementById('withdrawDescription').value = '';
        });

        // Function to edit a withdrawal
        function editWithdrawal(index) {
            const withdrawal = withdrawals[index];
            document.getElementById('accountNumber').value = withdrawal.accountNumber;
            document.getElementById('withdrawAmount').value = withdrawal.amount;
            document.getElementById('withdrawDescription').value = withdrawal.description;

            // Change the form's submit handler to update the withdrawal instead of creating a new one
            const form = document.getElementById('withdrawalForm');
            form.onsubmit = function(event) {
                event.preventDefault();
                withdrawal.accountNumber = document.getElementById('accountNumber').value;
                withdrawal.amount = parseFloat(document.getElementById('withdrawAmount').value);
                withdrawal.description = document.getElementById('withdrawDescription').value;

                // Re-render the withdrawal table
                renderWithdrawals();

                // Clear the form inputs and reset submit handler
                form.onsubmit = function(event) {
                    event.preventDefault();
                    const accountNumber = document.getElementById('accountNumber').value;
                    const amount = parseFloat(document.getElementById('withdrawAmount').value);
                    const description = document.getElementById('withdrawDescription').value;
                    const newWithdrawal = { accountNumber, amount, description };
                    withdrawals.push(newWithdrawal);
                    renderWithdrawals();
                    document.getElementById('accountNumber').value = '';
                    document.getElementById('withdrawAmount').value = '';
                    document.getElementById('withdrawDescription').value = '';
                };
            };
        }

        // Function to delete a withdrawal
        function deleteWithdrawal(index) {
            // Remove the withdrawal from the array
            withdrawals.splice(index, 1);

            // Re-render the withdrawal table
            renderWithdrawals();
        }

        // Initial rendering of the withdrawal table
        renderWithdrawals();
    </script>
    </body>
</html>