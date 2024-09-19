<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Моя анкета</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="wrapper">
    <div class="sidebar">
      <ul>
        <li><a href="#" class="active">
          <i class="icon fas fa-flag"></i> 
          <span>Сторінка</span>
        </a></li>
        <li><a href="#">
          <i class="icon far fa-newspaper"></i>
          <span>Стрічка новин</span>
        </a></li>
        <li><a href="#">
          <i class="icon far fa-bell"></i>
          <span>Оновлення</span>
          <span class="badge">1</span>
        </a></li>
        <li><a href="#">
          <i class="icon far fa-envelope"></i>
          <span>Вхідні повідомлення</span>
        </a></li>
        <!-- Додайте інші кнопки за аналогією -->
      </ul>
    </div>

<div class="container">
        <div class="cover-image"></div>
        <div class="profile">
            <div class="profile-picture">?</div>
            <div class="profile-info">
                <h1>Непомящий Максим Романович</h1> 
                <p><strong>Вік:</strong> 18 років</p>
                <p><strong>Місце народження:</strong> м. Запоріжжя</p>
                <p><strong>Телефон:</strong> +38 (099) 123-45-67</p>
            </div>
        </div>
    </div>

<div class="student-list">
    <h2>Студенти групи</h2>
    <table>
        <tr>
            <th>Прізвище</th>
            <th>Ім'я</th>
            <th>Вік</th>
            <th>Місце народження</th>
            <th>Телефон</th>
        </tr>
        <?php
        $students = [
            [
                "прізвище" => "Андрющенко",
                "ім'я" => "Ельвіра",
                "вік" => 18,
                "місце народження" => "Запоріжжя",
                "телефон" => "+38 (099) 123-45-67"
            ],
            [
                "прізвище" => "Білоцерковець",
                "ім'я" => "Владислав",
                "вік" => 18,
                "місце народження" => "Запоріжжя",
                "телефон" => "+38 (099) 123-45-67"
            ],
            [
                "прізвище" => "Бойко",
                "ім'я" => "Нікіта",
                "вік" => 18,
                "місце народження" => "Запоріжжя",
                "телефон" => "+38 (099) 123-45-67"
            ],
            [
                "прізвище" => "Бутко",
                "ім'я" => "Іван",
                "вік" => 18,
                "місце народження" => "Запоріжжя",
                "телефон" => "+38 (099) 123-45-67"
            ],
            [
                "прізвище" => "Віннік",
                "ім'я" => "Анастасія",
                "вік" => 18,
                "місце народження" => "Запоріжжя",
                "телефон" => "+38 (099) 123-45-67"
            ],
            [
                "прізвище" => "Дворецький",
                "ім'я" => "Іван",
                "вік" => 18,
                "місце народження" => "Запоріжжя",
                "телефон" => "+38 (099) 123-45-67"
            ],
        ];

        foreach ($students as $student) {
            echo "<tr>";
            echo "<td>" . $student['прізвище'] . "</td>";
            echo "<td>" . $student['ім\'я'] . "</td>";
            echo "<td>" . $student['вік'] . "</td>";
            echo "<td>" . $student['місце народження'] . "</td>";
            echo "<td>" . $student['телефон'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>
</div>
</body>
</html>