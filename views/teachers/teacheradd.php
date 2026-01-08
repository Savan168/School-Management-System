<?php
// --------------------- reload database before we fetch it ----------------------
require_once __DIR__ . '/../config/db.php';
$method = $_GET['method'] ?? (isset($_POST['update']) ? 'btnUpdate' : 'btnSave');

$id = $_GET['id'] ?? $_POST['ID'] ?? null;
$teacher = null;

if ($method === 'btnUpdate' && $id) {
    $stmt = $pdo->prepare("SELECT * FROM tblteachers WHERE ID = :id");
    $stmt->execute(['id' => (int)$id]);
    $teacher = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$teacher) die('Teacher not found');
}
?>
<div class="w-full">
    <div class="flex gap-2 mb-2">Home:<h1 class="text-blue-600"> Add Teacher</h1></div>
    <div class="bg-white rounded-lg">
        <div class="w-full flex justify-between border-b">
            <h1 class="text-[24px] lg:px-8 lg:py-2">Add Teacher</h1>
        </div>
        <div class="lg:px-8 lg:py-2">
            <form action="index.php" method="POST" enctype="multipart/form-data"
                  class="grid grid-cols-4 gap-5">
                <?php if ($method === 'btnUpdate'): ?>
                    <input type="hidden" name="ID" value="<?= $teacher['ID'] ?>">
                    <input type="hidden" name="update" value="1">
                <?php else: ?>
                    <input type="hidden" name="save" value="1">
                <?php endif; ?>

                <div class="flex flex-col">
                    <label class="lg:py-2">First Name</label>
                    <input class="border lg:px-4 lg:py-1 rounded-lg outline-none" name="first_name" value="<?= $teacher['First_Name'] ?? '' ?>" type="text">
                </div>

                <div class="flex flex-col">
                    <label class="lg:py-2">Last Name</label>
                    <input class="border lg:px-4 lg:py-1 rounded-lg outline-none" name="last_name" value="<?= $teacher['Last_Name'] ?? '' ?>" type="text">
                </div>

                <div class="flex flex-col">
                    <label class="lg:py-2">Class</label>
                    <input class="border lg:px-4 lg:py-1 rounded-lg outline-none" name="class" value="<?= $teacher['Class'] ?? '' ?>" type="text">
                </div>

                <div class="flex flex-col">
                    <label class="lg:py-2">Section</label>
                    <input class="border lg:px-4 lg:py-1 rounded-lg outline-none" name="section" value="<?= $teacher['Section'] ?? '' ?>" type="text">
                </div>

                <div class="flex flex-col">
                    <label class="lg:py-2">Gender</label>
                    <select name="gender" class="border lg:px-4 lg:py-1 rounded-lg outline-none">
                        <option value="">Select</option>
                        <option value="1" <?= isset($teacher['Gender']) && $teacher['Gender']==1?'selected':'' ?>>Male</option>
                        <option value="0" <?= isset($teacher['Gender']) && $teacher['Gender']==0?'selected':'' ?>>Female</option>
                    </select>
                </div>

                <div class="flex flex-col">
                    <label class="lg:py-2">DOB</label>
                    <input class="border lg:px-4 lg:py-1 rounded-lg outline-none" name="dob" value="<?= $teacher['DOB'] ?? '' ?>" type="date">
                </div>

                <div class="flex flex-col">
                    <label class="lg:py-2">ID</label>
                    <input class="border lg:px-4 lg:py-1 rounded-lg outline-none text-gray-400" disabled name="teacher_id_no"value="<?= $teacher['ID'] ?>" type="text">
                </div>

                <div class="flex flex-col">
                    <label class="lg:py-2">Subject</label>
                    <input class="border lg:px-4 lg:py-1 rounded-lg outline-none" name="subject" value="<?= $teacher['Subject'] ?? '' ?>" type="text">
                </div>

                <div class="flex flex-col">
                    <label class="lg:py-2">Religion</label>
                    <input class="border lg:px-4 lg:py-1 rounded-lg outline-none" name="religion" value="<?= $teacher['Religion'] ?? '' ?>" type="text">
                </div>

                <div class="flex flex-col">
                    <label class="lg:py-2">Email</label>
                    <input class="border lg:px-4 lg:py-1 rounded-lg outline-none" name="email" value="<?= $teacher['Email'] ?? '' ?>" type="text">
                </div>

                <div class="flex flex-col">
                    <label class="lg:py-2">Mobile</label>
                    <input class="border lg:px-4 lg:py-1 rounded-lg outline-none" name="mobile" value="<?= $teacher['Mobile'] ?? '' ?>" type="text">
                </div>

                <div class="flex flex-col">
                    <label class="lg:py-2">Address</label>
                    <input class="border lg:px-4 lg:py-1 rounded-lg outline-none" name="address" value="<?= $teacher['Address'] ?? '' ?>" type="text">
                </div>

                <div class="flex flex-col">
                    <label class="lg:py-2">Photo</label>
                    <input class="border lg:px-4 lg:py-1 rounded-lg outline-none" type="file" name="photo">
                </div>

                <div class="col-span-4 flex justify-center">
                        <button type="submit" class="bg-green-500 text-white rounded-lg lg:px-2 w-[170px] lg:py-1">
                        <?= $method === 'btnUpdate' ? 'Update' : 'Save' ?>
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
