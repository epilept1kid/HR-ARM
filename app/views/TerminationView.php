<?php

class TerminationView {
    public function render() {
        echo '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Увольнение сотрудника</title>
        </head>
        <body>
            <h1>Увольнение сотрудника</h1>
            <form action="terminate" method="post">
                <label for="employee_id">ID сотрудника:</label><br>
                <input type="text" id="employee_id" name="employee_id" required><br><br>
                
                <label for="termination_reason">Причина увольнения:</label><br>
                <textarea id="termination_reason" name="termination_reason" rows="4" required></textarea><br><br>
                
                <input type="submit" value="Уволить сотрудника">
            </form>
        </body>
        </html>
        ';
    }
}