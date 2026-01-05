<?php
$menuItems = [
    [
        'title' => 'Dashboard',
        'icon'  => 'bi-speedometer2',
        'link'  => 'dashboard'
    ],
    [
        'title' => 'Students',
        'icon'  => 'bi-people',
        'submenu' => [
            'All Students'    => 'stds',
            'Add Student'     => 'stdadd',
            'Student details'     => 'stddetails',
            'Student Attendance' => 'stdattendace',
        ]
    ],
    [
        'title' => 'Teachers',
        'icon'  => 'bi-person-badge',
        'submenu' => [
            'All Teachers' => 'teachers',
            'Add Teacher' => 'teacheradd',
            'Teacher Details' => 'teacherdetails',
            'Teacher Attendance' => 'teacheratt',
        ]
    ],
    [
        'title' => 'Subjects',
        'icon'  => 'bi-book',
        'submenu' => [
            'All Subject' => 'subjects',
            'Add Subject' => 'subjectadd',
            'Subject Details' => 'subjectadetails', 
        ]
    ],
    [
        'title' => 'Classes',
        'icon'  => 'bi-book',
        'submenu' => [
            'All Class' => 'classes',
            'Add Class' => 'classesadd',
        ]
    ],
    [
        'title' => 'Scores',
        'icon'  => 'bi-',
        'submenu' => [
            'All Score' => 'scores',
            'Add Score' => 'scoreadd',
            'Report' => 'reportscore',
        ]
    ],
];
 
$currentPage = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
$btnClass = "flex w-full items-center p-4 hover:bg-[#06284d] transition-all group text-gray-200 border-b border-white/5";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="bg-gray-100 font-sans">
    <div class="flex">
        <div class="w-[13%] h-screen bg-[#041d3b] text-gray-300 fixed overflow-y-auto shadow-2xl">
            <div class="w-full h-[60px] bg-[#ffa001] flex items-center justify-between px-4 sticky top-0 z-10">
                <!-- ------o---------------- -->
            </div>
            <nav class="mt-2">
                <ul class="flex flex-col">
                    <?php foreach ($menuItems as $index => $menu): ?>
                        <li class="border-b border-white/5">
                            <?php if (isset($menu['submenu'])): ?>
                                <button onclick="toggleMenu('menu-<?= $index ?>', this)" 
                                        class="flex w-full items-center p-4 hover:bg-[#06284d] transition-all group">
                                    <i class="bi <?= $menu['icon'] ?> mr-3 text-[#ffa001] text-lg"></i>
                                    <span class="flex-1 text-left text-[15px] font-medium"><?= $menu['title'] ?></span>
                                    <i class="bi bi-chevron-down chevron-icon text-[10px] transition-transform duration-300 opacity-50"></i>
                                </button>
                                
                                <ul id="menu-<?= $index ?>" class="submenu-content hidden bg-[#021429] py-1 border-l-4 border-[#ffa001]/30">
                                    <?php foreach ($menu['submenu'] as $name => $slug): ?>
                                        <li class="py-2.5 pl-12 text-[14px] <?= ($currentPage == $slug) ? 'text-[#ffa001]' : 'text-gray-400 hover:text-white' ?>">
                                            <a href="index.php?page=<?= $slug ?>" class="block w-full">  <?= $name ?></a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>

                            <?php else: ?>
                                <a href="index.php?page=<?= $menu['link'] ?>" 
                                class="flex w-full items-center p-4 hover:bg-[#06284d] transition-all <?= ($currentPage == $menu['link']) ? 'bg-[#06284d] text-white' : '' ?>">
                                    <i class="bi <?= $menu['icon'] ?> mr-3 text-[#ffa001] text-lg"></i>
                                    <span class="flex-1 text-left text-[15px] font-medium"><?= $menu['title'] ?></span>
                                </a>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </nav>
        </div>
    </div>

</body>
</html>
<script>
    function toggleMenu(id, btn) {
        const currentMenu = document.getElementById(id);
        const currentArrow = btn.querySelector('.chevron-icon');
        document.querySelectorAll('.submenu-content').forEach(menu => {
            if (menu.id !== id) {
                menu.classList.add('hidden');
            }
        });
        document.querySelectorAll('.chevron-icon').forEach(arrow => {
            if (arrow !== currentArrow) {
                arrow.classList.remove('rotate-180');
            }
        });
        currentMenu.classList.toggle('hidden');
        currentArrow.classList.toggle('rotate-180');
    }
</script>