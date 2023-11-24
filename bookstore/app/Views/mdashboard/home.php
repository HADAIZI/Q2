<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <!-- nav bar -->
    <section class="relative bg-gray-100 border-b font-poppins ">
        <div class="container mx-auto" x-data="{open:false}">
            <nav class="flex justify-between ">
                <div class="flex items-center justify-between w-full px-4 py-2 lg:px-2 ">
                    <a href="" class="text-2xl text-gray-700">Logo</a>
                    <div class="flex items-center lg:hidden ">
                        <a href="" class="mr-4 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                            </svg>
                        </a>
                        <a href="" class="flex items-center mr-4 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class=" bi bi-cart" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg>
                        </a>
                        <button class="flex items-center px-3 py-2 text-blue-600 border border-blue-200 rounded  hover:text-blue-800 hover:border-blue-300 lg:hidden" @click="open =true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                            </svg>
                        </button>
                    </div>
                    <ul class="hidden font-medium lg:flex">
                        <li class="mr-12"><a href="" class="text-gray-700 hover:text-gray-600 ">Product</a>
                        </li>
                        <li class="mr-12"><a href="" class="text-gray-700 hover:text-gray-600 ">Category</a>
                        </li>
                        <li class="mr-12"><a href="" class="text-gray-700 hover:text-gray-600 ">Collection</a>
                        </li>
                        <li class="mr-12"><a href="" class="text-gray-700 hover:text-gray-600 ">Brand</a>
                        </li>
                    </ul>
                    <div class="items-center hidden max-w-xs py-2 pl-4 bg-white rounded-lg lg:flex">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="mr-2 bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                        <input type="text" class="w-full py-2 pl-3 border-0 " placeholder="Search...">
                    </div>
                    <div class="items-center justify-end hidden lg:flex ">
                        <a href="" class="flex items-center ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg>
                        </a>
                        <a href="<?= base_url('mdashboard/register') ?>" class="items-center hidden pl-6 text-sm font-semibold lg:flex ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="mr-1 bi bi-person" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
            </nav>
            <!-- Mobile Sidebar -->
            <div class="fixed inset-0 w-full bg-gray-800 opacity-25 lg:hidden " :class="{'translate-x-0 ease-in-opacity-100' :open===true, '-translate-x-full ease-out opacity-0' : open===false}">
            </div>
            <div class="absolute inset-0 z-10 h-screen p-3 text-gray-700 duration-500 transform shadow-md  bg-blue-50 w-80 lg:hidden lg:transform-none lg:relative" :class="{'translate-x-0 ease-in-opacity-100' :open===true, '-translate-x-full ease-out opacity-0' : open===false}">
                <div class="flex justify-between">
                    <a class="p-2 text-2xl font-bold " href="#">Logo</a>
                    <button class="p-2 rounded-md hover:text-blue-300 lg:hidden " @click="open=false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                        </svg>
                    </button>
                </div>
                <div class="flex items-center px-5 mt-7 lg:hidden">
                    <a href="" class="items-center mr-4 text-sm font-semibold lg:flex ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class=" bi bi-person" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                        </svg>
                    </a>
                    <a href="" class="mr-4 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="23" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                        </svg>
                    </a>
                    <a href="" class="flex items-center mr-4 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class=" bi bi-cart" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg>
                    </a>
                </div>
                <div class="flex items-center max-w-xs py-2 pl-4 bg-white rounded-lg mt-7  lg:hidden">
                    <input type="text" class="w-full py-2 pl-3 border-0 " placeholder="Search...">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="mr-2 bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </div>
                <ul class="px-5 text-left mt-7">
                    <li class="pb-3">
                        <a href="" class="text-sm text-gray-700 hover:text-blue-400 ">Home</a>
                    </li>
                    <li class="pb-3">
                        <a href="" class="text-sm text-gray-700 hover:text-blue-400 ">About us</a>
                    </li>
                    <li class="pb-3">
                        <a href="" class="text-sm text-gray-700 hover:text-blue-400 ">Features</a>
                    </li>
                    <li class="pb-3">
                        <a href="" class="text-sm text-gray-700 hover:text-blue-400 ">Blog </a>
                    </li>
                    <li class="pb-3">
                        <a href="" class="text-sm text-gray-700 hover:text-blue-400 ">Testimonials</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Fiction Genre -->

    <section class="flex items-center justify-center bg-gray-100  lg:h-2/3">
        <div class="px-4 py-20 mx-auto max-w-7xl">
            <div class="flex flex-wrap items-center gap-8 lg:flex-nowrap">
                <div class="w-full lg:w-1/2">
                    <div class="relative">
                        <h1 class="absolute -top-14 left-0 text-[120px] font-bold opacity-5 md:block hidden">
                            Fiction
                        </h1>
                        <h1 class="text-5xl font-bold "> Fiction <span class="text-blue-500"> Books
                            </span> </h1>
                        <div class="flex w-24 mt-1 mb-6 overflow-hidden rounded md:mb-14">
                            <div class="flex-1 h-2 bg-blue-200">
                            </div>
                            <div class="flex-1 h-2 bg-blue-400">
                            </div>
                            <div class="flex-1 h-2 bg-blue-600">
                            </div>
                        </div>
                    </div>
                    <p class="mb-4 text-base text-gray-500 lg:mb-16">
                        Pull your Imagination and dive into the realm.
                    </p>
                </div>
                <div class="grid grid-cols-1 gap-4 md:grid-cols-3 lg:grid-cols-3">
                    <div class="w-full p-8 text-center transition-all bg-white rounded shadow hover:shadow-lg">
                        <div class="inline-block p-2 mb-4 bg-blue-400 rounded-full text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="text-white" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm-.5 5a.5.5 0 0 1 1 0v1.5H10a.5.5 0 0 1 0 1H8.5V9a.5.5 0 0 1-1 0V7.5H6a.5.5 0 0 1 0-1h1.5V5z" />
                            </svg>
                        </div>
                        <h3 class="text-center font-semibold text-black "> Mystery </h3>
                    </div>
                    <div class="w-full p-8 text-center transition-all bg-white rounded shadow hover:shadow-lg">
                        <div class="inline-block p-2 mb-4 bg-blue-400 rounded-full text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="text-white" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm-.5 5a.5.5 0 0 1 1 0v1.5H10a.5.5 0 0 1 0 1H8.5V9a.5.5 0 0 1-1 0V7.5H6a.5.5 0 0 1 0-1h1.5V5z" />
                            </svg>
                        </div>
                        <h3 class="text-center font-semibold text-black "> Sci-Fi </h3>
                    </div>
                    <div class="w-full p-8 text-center transition-all bg-white rounded shadow hover:shadow-lg">
                        <div class="inline-block p-2 mb-4 bg-blue-400 rounded-full text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="text-white" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm-.5 5a.5.5 0 0 1 1 0v1.5H10a.5.5 0 0 1 0 1H8.5V9a.5.5 0 0 1-1 0V7.5H6a.5.5 0 0 1 0-1h1.5V5z" />
                            </svg>
                        </div>
                        <h3 class="text-center font-semibold text-black"> Romance </h3>
                    </div>

                    <div class="w-full p-8 text-center transition-all bg-white rounded shadow hover:shadow-lg">
                        <div class="inline-block p-2 mb-4 bg-blue-400 rounded-full text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="text-white" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm-.5 5a.5.5 0 0 1 1 0v1.5H10a.5.5 0 0 1 0 1H8.5V9a.5.5 0 0 1-1 0V7.5H6a.5.5 0 0 1 0-1h1.5V5z" />
                            </svg>
                        </div>
                        <h3 class="text-center font-semibold text-black "> Magic </h3>
                    </div>

                    <div class="w-full p-8 text-center transition-all bg-white rounded shadow hover:shadow-lg">
                        <div class="inline-block p-2 mb-4 bg-blue-400 rounded-full text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="text-white" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm-.5 5a.5.5 0 0 1 1 0v1.5H10a.5.5 0 0 1 0 1H8.5V9a.5.5 0 0 1-1 0V7.5H6a.5.5 0 0 1 0-1h1.5V5z" />
                            </svg>
                        </div>
                        <h3 class="text-center font-semibold text-black "> Myth </h3>
                    </div>

                    <div class="w-full p-8 text-center transition-all bg-white rounded shadow hover:shadow-lg">
                        <div class="inline-block p-2 mb-4 bg-blue-400 rounded-full text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="text-white" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm-.5 5a.5.5 0 0 1 1 0v1.5H10a.5.5 0 0 1 0 1H8.5V9a.5.5 0 0 1-1 0V7.5H6a.5.5 0 0 1 0-1h1.5V5z" />
                            </svg>
                        </div>
                        <h3 class="text-center font-semibold text-black "> Folk </h3>
                    </div>

                </div>
            </div>
        </div>
    </section>



    <!-- product carrousal -->


    <section class="flex items-center py-5 bg-gray-100 h-1/2 ">
        <div class="px-4 mx-auto max-w-7xl">
            <div class="grid grid-cols-1 gap-4 lg:gap-6 sm:gap-4 sm:grid-cols-2 lg:grid-cols-4">
                <!-- product_view.php -->
                <?php foreach ($products as $product => $value) { ?>
                    <div class="relative overflow-hidden bg-white shadow rounded-xl">
                        <div class="relative overflow-hidden">
                            <div class="mb-5 overflow-hidden">
                                <img class="object-cover w-full mx-auto transition-all rounded h-72 hover:scale-110" src="/img/23052.jpg" alt="">
                            </div>
                        </div>
                        <a>
                            <h3 class="px-5 mb-4 text-lg font-bold"><?php echo ($value['product_name']); ?></h3>
                        </a>
                        <div class="flex">
                            <div class="w-1/2 px-5 pb-3">
                                <p class="text-lg font-bold text-blue-500"><?php echo ($value['selling_price']); ?></p>
                            </div>
                            <button class="flex-1 text-sm text-white transition-all bg-blue-500 rounded-r-none hover:bg-blue-600 rounded-t-xl">
                                Add To Cart
                            </button>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>


    </section>


    <!-- footer -->

    <section class="flex flex-col h-3/4 lg:justify-end font-poppins">
        <div class="w-full bg-blue-50 pt-11  ">
            <div class="justify-center flex-1 max-w-6xl px-4 py-4 mx-auto lg:py-0">

                <div class="flex flex-wrap py-10 -mx-3">
                    <div class="w-full px-4 mb-11 md:w-1/2 lg:w-4/12 lg:mb-0">
                        <a href="#" class="inline-block mb-4 text-2xl font-bold ">Logo</a>
                        <p class="text-base font-normal leading-6 lg:w-64 ">
                            Lorem ipsum dor amet Lorem ipsum dor amet Lorem ipsum dor Lorem ipsum dor amet Lorem ipsum
                            dor amet Lorem ipsum dor
                        </p>
                    </div>
                    <div class="w-full px-4 md:w-1/4 lg:w-2/12 mb-11 lg:mb-0">
                        <h2 class="mb-4 text-lg font-bold text-gray-800 ">Recent Posts</h2>
                        <ul>
                            <li class="mb-4">
                                <a href="#" class="inline-block text-base font-normal ">Home</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="inline-block text-base font-normal ">About
                                    Us</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="inline-block text-base font-normal ">Features</a>
                            </li>
                        </ul>
                    </div>
                    <div class="w-full px-4 mb-11 lg:mb-0 md:w-1/4 lg:w-2/12">
                        <h2 class="mb-4 text-base font-bold text-gray-800 ">Recent Posts</h2>
                        <ul>
                            <li class="mb-4">
                                <a href="#" class="inline-block text-base font-normal ">Home</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="inline-block text-base font-normal ">About
                                    Us</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="inline-block text-base font-normal ">Features</a>
                            </li>
                        </ul>
                    </div>
                    <div class="w-full px-4 mb-2 lg:mb-0 md:w-1/3 lg:w-4/12">
                        <h2 class="mb-4 text-lg font-bold text-gray-800 ">Newsletter</h2>
                        <div class="flex flex-wrap">
                            <div class="w-full py-1 mb-2 lg:flex-1 lg:py-0 lg:mr-3 lg:mb-0">
                                <input type="email " class="inline-block w-full h-12 px-3 text-gray-700 placeholder-gray-500 border rounded-md" placeholder="Your email">
                            </div>
                            <div class="w-full py-1 lg:w-auto lg:py-0">
                                <a href="#" class="inline-block w-full px-5 py-4 font-medium leading-4 text-center bg-blue-200 rounded-md ">Subscribe</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-6 text-center bg-blue-200 ">
                <span>© Copyright 2022 . All Rights Reserved</span>
            </div>
        </div>
    </section>




    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>



</body>

</html>