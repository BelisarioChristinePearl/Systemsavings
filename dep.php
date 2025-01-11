<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container my-5">
        <h2 class="text-center mb-4">Transaction History</h2>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
