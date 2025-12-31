<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Dashboard</title>
</head>
<body>

    <div class="w-ful h-[60px] grid grid-cols-[40%_40%_10%_10%] bg-white border-b-1 lg:text-[17px]  px-7  py-3 " >
        <div class="flex items-center text-[22px]">
            <h1>Home</h1>
        </div>
        <div class="flex justify-end lg:px-8 items-center">
            <form action="">
                <input type="text" placeholder="Search Here" class="lg:px-7 lg:py-1 rounded-lg border outline-none">
            </form>
        </div>
        <div class="flex justify-around items-center">
            <i class="bi bi-envelope border-s-1 lg:ps-2 hover:cursor-pointer "></i>
            <i class="bi bi-bell border-e-1 lg:pe-2 hover:cursor-pointer"></i>
        </div>
        <div class="flex justify-between lg:px-2 items-center">
            <div class="rounded-full w-[40px] h-[40px] flex justify-center items-center bg-blue-400">
                <h6>logo</h6>
            </div>
            <!-- ---------------------- get name and role of user from database ----------------- -->
            <div class="text-[15px]">
                <h1 class="hover:cursor-pointer">Admin</h1>
                <h1 class="text-[12px]">Admin</h1>
            </div>
        </div>
    </div>













    
</body>
</html>