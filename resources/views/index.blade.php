<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ВртниПаретеМи 💸</title>
    <link rel="icon" type="image/jpg" href="favicon.jpg">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

    <script src="{{ asset('totalSesions.js') }}"></script>




 
</head>





<?php

// function checkTime()
//     {
//         // Define time ranges
//         $timeRanges = [
//             ['start' => 12, 'end' => 13],
//             ['start' => 14, 'end' => 15],
//         ];

//         // Get the current time in hours
//         $currentHour = now()->format('H');

//         // Check if the current hour is within any of the defined ranges
//         $isInRanges = collect($timeRanges)->contains(function ($range) use ($currentHour) {
//             return $currentHour >= $range['start'] && $currentHour < $range['end'];
//         });

//         // Use $isInRanges as needed (e.g., return a response or perform an action)
//         if ($isInRanges) {
//             return ('Current time is within the specified ranges.');
//         } else {
//             return ('Current time is outside the specified ranges.');
//         }
//     }

?>



<body class="antialiased">
    <div class="h-screen md:flex">
        <div class="relative overflow-hidden md:flex w-1/2 bg-gradient-to-tr from-black to-gray-800 i justify-around items-center hidden">
            <div>
                <h1 class="text-white font-bold text-4xl font-sans">ВртниПаретеМи</h1>
                <p class="text-white mt-1">Лаки постаје полако нервозан</p>


                <div class="flex-col">
                    <div class="bg-red-500 w-100 h-100"></div>

                </div>

            </div>
            

        


        </div>
        

        <?php

// Include the external.php file
require_once 'external.php';

// Create an instance of the ExternalClass
$externalObject = new ExternalClass();

// Call the externalMethod
$externalObject->externalMethod();

?>



        <div class="flex md:w-1/2 justify-center py-10 items-center bg-white">
            <form class="bg-white">
            
            <!-- <img src="images/piramid.gif"  class="rounded-full select-none" alt="Computer man" style="width:48px;height:48px;"> -->

                <h1 class="text-gray-800 font-bold text-2xl mb-1">Добар !</h1>
                <p class="text-sm font-normal text-gray-600 mb-7">Добро дошао назад, ваљда?</p>
                <!-- <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                    </svg>
                    <input class="pl-2 outline-none border-none" type="text" name="" id="" placeholder="Full name" />
                </div> -->
                <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                    </svg>
                    <input class="pl-2 outline-none border-none" type="text" name="" id="" placeholder="Username" />
                </div> 
                <!-- <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                    </svg>
                    <input class="pl-2 outline-none border-none" type="text" name="" id="" placeholder="Email Address" />
                </div> -->



                <div class="flex items-center border-2 py-2 px-3 rounded-2xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                    </svg>
                    <input class="pl-2 outline-none border-none" type="password" name="" id="" placeholder="Password" />
                </div>
                <button type="submit" class="block w-28 bg-black-800 text-white mt-4 py-2 rounded-2xl font-bold mb-2" style="background-color: black;">Улогуј се</button>

                <!-- <span class="text-sm ml-2 hover:text-blue-500 cursor-pointer">Forgot Password ?</span> -->

            </form>
        </div>
    </div>
</body>

</html>