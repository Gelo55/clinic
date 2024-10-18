<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Report</title>
    
    <!-- Google Fonts for Aesthetic Typography -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/reportinventory.css">
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>
<body>

    <div class="container">
        <h1>Editable Inventory Report</h1>

        <table id="inventory-table">
            <thead>
                <tr>
                    <th>Medicine</th>
                    <th>Equipment</th>
                    <th>Quantity</th>
                    <th>Price per Unit</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td contenteditable="true">Apples</td>
                    <td contenteditable="true">Apples</td>
                    <td contenteditable="true">50</td>
                    <td contenteditable="true">$0.50</td>
                    <td><button class="btn-delete">Delete</button></td>
                </tr>
                <tr>
                    <td contenteditable="true">Bananas</td>
                    <td contenteditable="true">Bananas</td>
                    <td contenteditable="true">30</td>
                    <td contenteditable="true">$0.25</td>
                    <td><button class="btn-delete">Delete</button></td>
                </tr>
                <tr>
                    <td contenteditable="true">Oranges</td>
                    <td contenteditable="true">Oranges</td>
                    <td contenteditable="true">20</td>
                    <td contenteditable="true">$0.75</td>
                    <td><button class="btn-delete">Delete</button></td>
                </tr>
            </tbody>
        </table>

        <div class="btn-container">
            <button class="btn btn-add" id="add-row-btn"><i class="fas fa-plus"></i>Add Row</button>
            <button class="btn" id="download-btn"><i class="fas fa-download"></i>Download PDF</button>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script>
        // Function to Add New Row to the Table
        document.getElementById('add-row-btn').addEventListener('click', function() {
            const table = document.getElementById('inventory-table').getElementsByTagName('tbody')[0];
            const newRow = table.insertRow();

            const cell1 = newRow.insertCell(0);
            const cell2 = newRow.insertCell(1);
            const cell3 = newRow.insertCell(2);
            const cell4 = newRow.insertCell(3);
             const cell5 = newRow.insertCell(4);

            cell1.contentEditable = true;
            cell2.contentEditable = true;
            cell3.contentEditable = true;

            cell1.innerHTML = "New Item";
            cell2.innerHTML = "New Item";
            cell3.innerHTML = "0";
            cell4.innerHTML = "$0.00";
            cell5.innerHTML = '<button class="btn-delete">Delete</button>';

            // Add delete functionality to the new row's delete button
            cell5.querySelector('.btn-delete').addEventListener('click', function() {
                newRow.remove();
            });
        });

        // Function to Enable Delete Functionality for Existing Rows
        document.querySelectorAll('.btn-delete').forEach(function(btn) {
            btn.addEventListener('click', function() {
                this.closest('tr').remove();
            });
        });

        // Function to Download the Table as PDF
        document.getElementById('download-btn').addEventListener('click', function() {
            const { jsPDF } = window.jspdf;

            const doc = new jsPDF();
            doc.text("Editable Inventory Report", 14, 20);
            doc.autoTable({ html: '#inventory-table', startY: 30 });

            doc.save('editable_inventory_report.pdf');
        });
    </script>
</body>
</html>
