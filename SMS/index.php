<?php
// 1. Determine the page once at the top
$page = $_GET['page'] ?? 'dashboard';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>School Management - <?= ucfirst($page) ?></title>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <div class="w-[15%] border-r bg-white">
            <?php include 'views/includes/nav.php'; ?>
        </div>

        <div class="w-[85%] flex flex-col">
            <?php include 'views/includes/header.php'; ?>
            
            <div class="lg:p-8 flex-grow overflow-y-auto">
                <?php
                switch ($page) {
                    // Student Routes
                    case 'stds':            include 'views/students/student.php'; break;
                    case 'stdattendace':    include 'views/students/stdattendace.php'; break;
                    case 'stdadd':          include 'views/students/add_student.php'; break;
                    case 'stddetails':      include 'views/students/stddetails.php'; break;

                    // Teacher Routes
                    case 'teachers':        include 'views/teachers/teacher.php'; break;
                    case 'teacheradd':      include 'views/teachers/teacheradd.php'; break;
                    case 'teacherdetails':  include 'views/teachers/teacherdetails.php'; break;
                    case 'teacheratt':      include 'views/teachers/teacheratt.php'; break;

                    // Subject Routes
                    case 'subjects':        include 'views/subjects/subjects.php'; break;
                    case 'subjectadd':      include 'views/subjects/subjectadd.php'; break;
                    case 'subjectadetails': include 'views/subjects/subjectadetails.php'; break;

                    // Class Routes
                    case 'classes':         include 'views/classes/class.php'; break;
                    case 'classesadd':      include 'views/classes/classesadd.php'; break;

                    // Score Routes
                    case 'scores':          include 'views/scores/scores.php'; break;
                    case 'scoreadd':        include 'views/scores/scoreadd.php'; break;
                    case 'reportscore':     include 'views/scores/reportscore.php'; break;

                    // Default / Dashboard
                    default:                include 'views/includes/dashboard.php'; break;
                }
                ?> 
            </div>
        </div>
    </div>
</body>
</html>