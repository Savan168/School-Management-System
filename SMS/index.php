<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Dashboard</title>
</head>

<body class="bg-gray-100">

    <div class="flex h-screen">
        <div class="w-[25%]">
            <?php include 'views/includes/nav.php'; ?>
        </div>

        <!-- MAIN CONTENT -->
        <div class="w-full">
            <?php include 'views/includes/header.php'; ?>

            <div class="p-6">
                <?php
                $page = $_GET['page'] ?? 'dashboard';

                switch ($page) {
                    case 'students':
                        include 'views/students/student.php';
                        break;

                    case 'attendance':
                        include 'views/students/stdattendace.php';
                        break;

                    case 'teachers':
                        include 'views/teachers/teacher.php';
                        break;

                    case 'classes':
                        include 'views/classes/class.php';
                        break;
                    case 'dashboard':
                        include 'views/includes/dashboard.php';
                        break;
                }
                ?>
            </div>
        </div>
    </div>

</body>

</html>