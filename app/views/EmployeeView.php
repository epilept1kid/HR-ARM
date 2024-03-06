<?php

class EmployeeView {
    public function render($employees) {
        echo '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Список сотрудников</title>
        </head>
        <body>
            <h1>Список сотрудников</h1>
            <table border="1">
                <thead>
                    <tr>
                        <th>ФИО</th>
                        <th>Должность</th>
                        <th>Отдел</th>
                        <th>Email</th>
                        <th>Телефон</th>
                    </tr>
                </thead>
                <tbody>';
                if ($employees->num_rows > 0) {
                    while($row = $employees->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["full_name"] . "</td>";
                        echo "<td>" . $row["position"] . "</td>";
                        echo "<td>" . $row["department"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>" . $row["phone"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "0 результатов";
                }
                echo '</tbody>
            </table>
        </body>
        </html>        
        ';
    }
    public function render1() {
        echo '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Employee Information</title>
        </head>
        <body>
            <h1>Employee Information</h1>
            <div>
                <h2>Employee Details</h2>
                <p><strong>Name:</strong> John Doe</p>
                <p><strong>Position:</strong> HR Manager</p>
                <p><strong>Department:</strong> Human Resources</p>
                <p><strong>Email:</strong> johndoe@example.com</p>
                <p><strong>Phone:</strong> +1234567890</p>
                <!-- Дополнительные детали о сотруднике могут быть добавлены здесь -->
            </div>
        </body>
        </html>';
    }
}