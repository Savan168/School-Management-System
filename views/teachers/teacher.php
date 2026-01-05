<?php
require_once __DIR__ . '/../config/db.php';
$page = $_GET['page'] ?? 'dashboard'; 
try {
    $stmt = $pdo->prepare("SELECT * FROM tblteachers ");
    $stmt->execute();
    $teachers = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    die("Error fetching teachers: " . $e->getMessage());
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="w-full ">
        <div class="flex gap-2 mb-2">Home:<h1 class="text-blue-600">Teacher</h1></div>

        <div class="flex lg:py-4">
            <div class="lg:w-[50%] lg:text-[24px]">
                <h1>All Teachers</h1>
            </div>
           <div class="lg:w-[50%] text-[12px]">
                <form action="" class="flex gap-4" accept="POST">
                    <input class="border rounded-lg lg:px-2 lg:py-1 outline-none" type="text" placeholder="#ID Type Here ...">
                    <input class="border rounded-lg lg:px-2 lg:py-1 outline-none" type="text" placeholder="Type Class ...">
                    <input class="border rounded-lg lg:px-2 lg:py-1 outline-none" type="text" placeholder="Subject ...">
                    <button type="submit" class="bg-blue-700 rounded-lg lg:px-2 lg:py-1 text-white" >Search</button>
                    <button ><i class="bi text-[14px] bi-arrow-clockwise hover:text-green-500"></i></button>
                    
                    <button ><i class="bi text-[14px] bi-x text-[17px] hover:text-red-500"></i></button>
                </form>
           </div>
        </div>
        <div>
            <table class="w-full table-auto">
            <thead>
                <tr>
                    <th><input type="checkbox"></th>
                    <?php $headers = ["ID", "Photo","Name","Gender","Subject","Class","Section","Address","Date Of Birth","Mobile No","E-Mail","Action"];
                        foreach ($headers as $header) {
                            if ($header === "ID") {
                                echo "<th> ID <span class='sort-icon'>⇅</span> </th>";
                            } else {
                                echo "<th>$header</th>";
                            }
                        }
                    ?>
                </tr>
            </thead>
            <tbody>
                 <?php foreach ($teachers as $teacher): ?>
                    <tr class="border text-[12px]">
                        <td><input type="checkbox"></td>
                        <td class="text-center"><?= $teacher['ID'] ?></td>
                        <!-- <td><img src="../../uploads/<?= $teacher['photo'] ?>" width="50" height="50" alt="Photo"></td> -->
                        <td>d</td>
                        <td><?= $teacher['First_Name'] ?></td>
                        <td><?= $teacher['Last_Name'] ?></td>
                        <td class="text-center" ><?= $teacher['Gender'] ?></td>
                        <td><?= $teacher['Subject'] ?></td>
                        <td class="text-center"><?= $teacher['Class'] ?></td>
                        <td class="text-center"><?= $teacher['Section'] ?></td>
                        <td><?= $teacher['Address'] ?></td>
                        <td><?= $teacher['DOB'] ?></td>
                        <td><?= $teacher['Mobile'] ?></td>
                        <td><?= $teacher['Email'] ?></td>
                        <th class=" p-1 flex justify-around items-center">
                            <i class="bi bi-eye hover:cursor-pointer"></i>
                            <i class="bi text-green-400 hover:cursor-pointer bi-pencil-square"></i>
                            <i class="bi text-red-400 hover:cursor-pointer text-[19px] bi-x"></i>
                        </th>
                    </tr>
                <?php endforeach; ?>
                <!-- <tr class="border">
                    <th class="border"><input type="checkbox"></th>
                    <th class="border p-1">1</th>
                    <th class="border p-1">2</th>
                    <th class="border p-1">3</th>
                    <th class="border p-1">4</th>
                    <th class="border p-1">5</th>
                    <th class="border p-1">6</th>
                    <th class="border p-1">7</th>
                    <th class="border p-1">8</th>
                    <th class="border p-1">9</th>
                    <th class="border p-1">10</th>
                    <th class="border p-1">11</th>
                    <th class="border p-1 flex justify-around items-center">
                        <i class="bi bi-eye"></i>
                        <i class="bi text-green-400 hover:cursor-pointer bi-pencil-square"></i>
                        <i class="bi text-red-400 hover:cursor-pointer text-[19px] bi-x"></i>
                    </th>
                </tr> -->
            </tbody>
            </table>
         </div>
    </div>
</body>
</html>
<script> 