<?php
require_once __DIR__ . '/../config/db.php';

if (isset($_POST['save'])) {
    // Collect and sanitize the names
    $first = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last = mysqli_real_escape_string($conn, $_POST['last_name']);
    $full_name = $first . " " . $last;

    // Use the variable $full_name in your query
    $sql = "INSERT INTO teachers (name) VALUES ('$full_name')";
    
    if (mysqli_query($conn, $sql)) {
        // Redirect back to the teacher list
        echo "<script>window.location.href='index.php?page=teachers&msg=added';</script>";
        exit();
    } else {
        echo "Database Error: " . mysqli_error($conn);
    }
}
?>
<div class="w-full">
    <div class="flex gap-2 mb-2">Home:<h1 class="text-blue-600"> Add Teacher</h1></div>
    <div class="bg-white rounded-lg">
        <div class="w-full flex justify-between border-b">
            <h1 class="text-[24px] lg:px-8 lg:py-2 ">Add Teacher</h1>
            <div class="lg:px-8 lg:py-2">
                <button ><i class="bi text-[14px] bi-arrow-clockwise hover:text-green-500"></i></button>
                <button ><i class="bi text-[14px] bi-x text-[17px] hover:text-red-500"></i></button>
            </div>
        </div>
        <div class="lg:px-8 lg:py-2">
            <div>
                <form action="index.php?page=teachers" class="grid grid-cols-4 gap-5 " method="POST">
                    <div class="flex flex-col">
                        <label class="lg:py-2" for="">First Name</label>
                        <input class="border lg:px-4 lg:py-1 rounded-lg outline-none " type="text" placeholder="First Name">
                    </div> 
                    <div class="flex flex-col">
                        <label class="lg:py-2" for="">Last Name</label>
                        <input class="border lg:px-4 lg:py-1 rounded-lg outline-none " type="text" placeholder="Last Name">
                    </div> 
                    <div class="flex flex-col">
                        <label class="lg:py-2" for="">Class</label>
                        <select class="border lg:px-4 lg:py-1 rounded-lg outline-none " name="" id="">
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                        </select>
                    </div> 
                    <div class="flex flex-col">
                        <label class="lg:py-2" for="">Section</label>
                        <select name="" id="" class="border lg:px-4 lg:py-1 rounded-lg outline-none ">
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                        </select>
                    </div> 
                    <div class="flex flex-col">
                        <label class="lg:py-2" for="">Gender</label>
                        <select name="" id="" class="border lg:px-4 lg:py-1 rounded-lg outline-none ">
                            <option value="0">Female</option>
                            <option value="1">Male</option>
                        </select>
                    </div> 
                    <div class="flex flex-col">
                        <label class="lg:py-2" for="">Date of Birth</label>
                        <input type="date" class="border lg:px-4 lg:py-1 rounded-lg outline-none ">
                    </div> 
                    <div class="flex flex-col">
                        <label class="lg:py-2" for="">ID No</label>
                        <input type="text" placeholder="#ID" class="border lg:px-4 lg:py-1 rounded-lg outline-none ">
                    </div> 
                    <div class="flex flex-col">
                        <label class="lg:py-2" for="">Subject</label>
                        <!-- this option need to get data from tblSubject -->
                        <select name="" id="" class="border lg:px-4 lg:py-1 rounded-lg outline-none ">
                            <option value="">s1</option>
                            <option value="">s2</option>
                            <option value="">s3</option>
                        </select>
                    </div> 
                    <div class="flex flex-col">
                        <label class="lg:py-2" for="">Religion</label>
                        <select name="" id="" class="border lg:px-4 lg:py-1 rounded-lg outline-none ">
                            <option value="">Buddha</option>
                            <option value="">Hindu</option>
                            <option value="">Christianity</option>
                        </select>
                    </div> 
                    <div class="flex flex-col">
                        <label class="lg:py-2" for="">Email</label>
                        <input type="text" placeholder="Your Email" class="border lg:px-4 lg:py-1 rounded-lg outline-none ">
                    </div> 
                    <div class="flex flex-col">
                        <label class="lg:py-2" for="">Phone</label>
                        <input type="text" placeholder="Phone Number" class="border lg:px-4 lg:py-1 rounded-lg outline-none ">
                    </div> 
                    <div class="flex flex-col">
                        <label class="lg:py-2" for="">Address</label>
                        <input type="text" placeholder="Your Address" class="border lg:px-4 lg:py-1 rounded-lg outline-none ">
                    </div> 
                    <div class="lg:py-5">
                        <label class="bg-blue-600 text-white px-4 py-2 rounded-lg cursor-pointer hover:bg-blue-700 transition">
                            Upload File
                            <input type="file" class="hidden"> 
                        </label>
                    </div>
                    <div class="flex justify-end gap-10 lg:mb-5">
                        <button type="submit" name="save"  class="bg-green-600 lg:px-4 lg:py-2 text-white rounded-lg" >Save</button>
                        <button type="reset" class="bg-blue-950 lg:px-4 lg:py-2 text-white rounded-lg">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> 