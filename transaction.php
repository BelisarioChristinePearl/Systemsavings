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
         <div class="container my-10">
         <h2 class="mt-4 text-white">History</h2>

        <!-- Search bar -->
        <div class="mb-3">
            <input type="text" id="searchBar" class="form-control" placeholder="Search transactions by type, description, or amount" oninput="filterTransactions()">
        </div>

        <!-- Transaction History Table -->
        <table class="table table-bordered" id="transactionTable">
            <thead>
                <tr>
                    <th>Transaction ID</th>
                    <th>Date</th>
                    <th>Type</th>
                    <th>Amount</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <!-- Transaction entries will be added dynamically here -->
            </tbody>
        </table>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <script>
        // Static array to simulate transactions (usually this would come from a server)
        const transactions = [
            { id: 'txn001', date: '2023-10-01 12:34:56', type: 'Deposit', amount: 500, description: 'Salary payment' },
            { id: 'txn002', date: '2023-10-05 09:15:23', type: 'Withdrawal', amount: 200, description: 'ATM Withdrawal' },
            { id: 'txn003', date: '2023-10-07 14:22:09', type: 'Deposit', amount: 300, description: 'Online sale' },
            { id: 'txn004', date: '2023-10-10 16:45:11', type: 'Withdrawal', amount: 100, description: 'Shopping purchase' },
            { id: 'txn005', date: '2023-10-12 11:10:55', type: 'Deposit', amount: 150, description: 'Freelance work' },
        ];

        // Function to render the transaction history table
        function renderTransactions(filteredTransactions) {
            const tableBody = document.querySelector('#transactionTable tbody');
            tableBody.innerHTML = '';

            // Loop through the filtered transactions and append rows
            filteredTransactions.forEach(transaction => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${transaction.id}</td>
                    <td>${transaction.date}</td>
                    <td>${transaction.type}</td>
                    <td>${transaction.amount}</td>
                    <td>${transaction.description}</td>
                `;
                tableBody.appendChild(row);
            });
        }

        // Function to filter transactions based on the search query
        function filterTransactions() {
            const searchQuery = document.getElementById('searchBar').value.toLowerCase();

            const filteredTransactions = transactions.filter(transaction => {
                return (
                    transaction.type.toLowerCase().includes(searchQuery) ||
                    transaction.description.toLowerCase().includes(searchQuery) ||
                    transaction.amount.toString().includes(searchQuery)
                );
            });

            renderTransactions(filteredTransactions); // Re-render the table with filtered data
        }

        // Initial rendering of the transaction table
        renderTransactions(transactions);

    </script>

    </body>
</html>