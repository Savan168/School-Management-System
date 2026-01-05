<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Tailwind & Bootstrap Icons -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <title>Teacher Details</title>
</head>
<body>

<div class="flex gap-2 mb-2">Home:<h1 class="text-blue-600">Teacher Details</h1></div>

<!-- Teacher card wrapper with ID for PDF -->
<div id="teacherCard" class="bg-white grid grid-cols-[25%_60%_15%]">
    <div class="w-[300px] h-[300px] bg-blue-200 lg:p-6 lg:mt-3">
        <div class="bg-green-500 h-full w-full">s</div>
    </div>
    <div class="lg:flex lg:gap-10 lg:mt-3">
        <div class="text-gray-500">
            <h6>Name: </h6>
            <h6>Gender: </h6>
            <h6>Date OF Birth: </h6>
            <h6>Religion: </h6>
            <h6>E-mail: </h6>
            <h6>Joined Date: </h6>
            <h6>Subject: </h6>
            <h6>Class: </h6>
            <h6>Section: </h6>
            <h6>Address: </h6>
            <h6>Phone: </h6>
        </div>
        <div>
            <h6>1</h6>
            <h6>2</h6>
            <h6>3</h6>
            <h6>4</h6>
            <h6>5</h6>
            <h6>6</h6>
            <h6>7</h6>
            <h6>8</h6>
            <h6>9</h6>
            <h6>10</h6>
            <h6>11</h6>
        </div>
    </div>
    <div class="lg:mt-3 flex flex-col gap-2">
        <button class="bg-gray-300 lg:p-3 rounded-lg"><i class="bi bi-pencil-square"></i></button>
        <button class="bg-gray-300 lg:p-3 rounded-lg"><i class="bi bi-printer"></i></button>
        <button class="bg-gray-300 lg:p-3 rounded-lg"><i class="bi bi-download"></i></button>
    </div>
</div>
