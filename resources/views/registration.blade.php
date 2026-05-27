<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <form method ="post" action="/submitform" class="max-w-md mx-auto mt-10 p-6 bg-white rounded-lg shadow-md">
        @csrf
        <label for="Name ">
              <span class="dashicons dashicons-nametag">
                Enter Name
              </span> 
        </label>
        <input type="text" name="name" placeholder="Enter Name" class="border-2 border-gray-300 p-2 rounded-md">
        <br><br>
            <label for="Email "></label>
             <span class="dashicons dashicons-email">
                Enter Email
              </span>
        <input type="email" name="email" placeholder="Enter Email" class="border-2 border-gray-300 p-2 rounded-md">
        <br><br>
        <label for="age"></label>
    <input type="number" name="age" placeholder="Enter Age" class="border-2 border-gray-300 p-2 rounded-md">

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Submit </button>
    </form>
</body>
</html>
