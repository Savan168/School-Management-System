<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>Dashboard</title>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <div class="w-[15%]">
            <?php include 'views/includes/nav.php'; ?>
        </div>
        <div class="w-[85%]">
            <?php include 'views/includes/header.php'; ?>
            <div class="lg:p-8">
                <?php
                $page = $_GET['page'] ?? 'dashboard';
                switch ($page) {
<<<<<<< HEAD
                    case 'stds':
                        include 'views/students/student.php';
                        break;
                    case 'stdattendace':
                        include 'views/students/stdattendace.php';
                        break;
                    case 'stdadd':
                        include 'views/students/add_student.php';
                        break;
                    case 'stddetails':
                        include 'views/students/stddetails.php';
                        break;

                    case 'teachers':
                        include 'views/teachers/teacher.php';
                        break;
                    case 'teacheradd':
                        include 'views/teachers/teacheradd.php';
                        break;
                    case 'teacherdetails':
                        include 'views/teachers/teacherdetails.php';
                        break;
                    case 'teacheratt':
                        include 'views/teachers/teacheratt.php';
                        break;

                    case 'subjects':
                        include 'views/subjects/subjects.php';
                        break;
                    case 'subjectadd':
                        include 'views/subjects/subjectadd.php';
                        break;
                    case 'subjectadetails':
                        include 'views/subjects/subjectadetails.php';
                        break;

                    case 'classes':
                        include 'views/classes/class.php';
                        break;
                    case 'classesadd':
                        include 'views/classes/classesadd.php';
                        break;

                    case 'scores':
                        include 'views/scores/scores.php';
                        break;
                    case 'scoreadd':
                        include 'views/scores/scoreadd.php';
                        break;
                    case 'reportscore':
                        include 'views/scores/reportscore.php';
                        break;

                    default: 
                        include 'views/includes/dashboard.php';
                        break;
                } ?> 
        </div>
=======
                    case 'dashboard':
                        include 'views/includes/dashboard.php';
                        break;
                    case 'students':
                        include 'views/students/student.php';
                        break;
                    case 'attendance':
                        include 'views/students/stdattendace.php';
                        break;
                     case 'teachers':
                        include 'views/teachers/teacher.php';
                        break;
                    case 'parents':
                        include 'views/parent.php';
                        break;
                    case 'labrary':
                        include 'views/labrary.php';
                        break;
                    case 'Accouts':
                        include 'views/accouts.php';
                        break;
                    case 'classes':
                        include 'views/classes/class.php';
                        break;
                     case 'subjects':
                        include 'views/subject.php';
                        break;
                    case 'classRoutine':
                        include 'views/classroutine.php';
                        break;
                } 
                ?>
            </div>
>>>>>>> e2824fa457b262278b5a40b52d3e2adfd0574903
        </div>
    </div>

</body>

</html>