<?php

class HiringView {
    public function render() {
        echo '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Найм нового сотрудника</title>
        </head>
        <body>
            <h1>Найм нового сотрудника</h1>
            <form action="hire" method="post">
                <label for="full_name">ФИО:</label><br>
                <input type="text" id="full_name" name="full_name" required><br><br>
                
                <label for="position">Должность:</label><br>
                <input type="text" id="position" name="position" required><br><br>
                
                <label for="department">Отдел:</label><br>
                <input type="text" id="department" name="department" required><br><br>
                
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" required><br><br>
                
                <label for="phone">Телефон:</label><br>
                <input type="tel" id="phone" name="phone" required><br><br>
                
                <input type="submit" value="Принять на работу">
            </form>
        </body>
        </html>        
        ';
    }
}