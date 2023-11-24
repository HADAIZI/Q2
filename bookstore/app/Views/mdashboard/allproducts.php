<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-heart" viewBox="0 0 16 16">
                                <path
                                    d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                            </svg>
                        </a>
                        <a href="" class="flex items-center mr-4 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class=" bi bi-cart" viewBox="0 0 16 16">
                                <path
                                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg>
                        </a>
                        <button
                            class="flex items-center px-3 py-2 text-blue-600 border border-blue-200 rounded  hover:text-blue-800 hover:border-blue-300 lg:hidden"
                            @click="open =true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-list" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                            </svg>
                        </button>
                    </div>
                    <ul class="hidden font-medium lg:flex">
                        <li class="mr-12"><a href=""
                                class="text-gray-700 hover:text-gray-600 ">Product</a>
                        </li>
                        <li class="mr-12"><a href=""
                                class="text-gray-700 hover:text-gray-600 ">Category</a>
                        </li>
                        <li class="mr-12"><a href=""
                                class="text-gray-700 hover:text-gray-600 ">Collection</a>
                        </li>
                        <li class="mr-12"><a href=""
                                class="text-gray-700 hover:text-gray-600 ">Brand</a>
                        </li>
                    </ul>
                    <div
                        class="items-center hidden max-w-xs py-2 pl-4 bg-white rounded-lg lg:flex">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="mr-2 bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                        <input type="text" class="w-full py-2 pl-3 border-0 "
                            placeholder="Search...">
                        <div class="pr-4">
                            <select name="" id=""
                                class="pl-3 pr-4 border-0 border-l border-gray-400 cursor-pointer">
                                <option value="">All items</option>
                                <option value="">Option 1</option>
                                <option value="">Option 2</option>
                            </select>
                        </div>
                    </div>
                    <div class="items-center justify-end hidden lg:flex ">
                        <a href="" class="mr-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor"
                                class="bi bi-heart" viewBox="0 0 16 16">
                                <path
                                    d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z">
                                </path>
                            </svg>
                        </a>
                        <a href="" class="flex items-center ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-cart" viewBox="0 0 16 16">
                                <path
                                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg>
                        </a>
                        <a href="" class="items-center hidden pl-6 text-sm font-semibold lg:flex ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor"
                                class="mr-1 bi bi-person" viewBox="0 0 16 16">
                                <path
                                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
            </nav>
            <!-- Mobile Sidebar -->
            <div class="fixed inset-0 w-full bg-gray-800 opacity-25 lg:hidden "
                :class="{'translate-x-0 ease-in-opacity-100' :open===true, '-translate-x-full ease-out opacity-0' : open===false}">
            </div>
            <div class="absolute inset-0 z-10 h-screen p-3 text-gray-700 duration-500 transform shadow-md  bg-blue-50 w-80 lg:hidden lg:transform-none lg:relative"
                :class="{'translate-x-0 ease-in-opacity-100' :open===true, '-translate-x-full ease-out opacity-0' : open===false}">
                <div class="flex justify-between">
                    <a class="p-2 text-2xl font-bold " href="#">Logo</a>
                    <button class="p-2 rounded-md hover:text-blue-300 lg:hidden " @click="open=false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-x-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path
                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                        </svg>
                    </button>
                </div>
                <div class="flex items-center px-5 mt-7 lg:hidden">
                    <a href="" class="items-center mr-4 text-sm font-semibold lg:flex ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                            class=" bi bi-person" viewBox="0 0 16 16">
                            <path
                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                        </svg>
                    </a>
                    <a href="" class="mr-4 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="23" fill="currentColor"
                            class="bi bi-heart" viewBox="0 0 16 16">
                            <path
                                d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                        </svg>
                    </a>
                    <a href="" class="flex items-center mr-4 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor"
                            class=" bi bi-cart" viewBox="0 0 16 16">
                            <path
                                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg>
                    </a>
                </div>
                <div
                    class="flex items-center max-w-xs py-2 pl-4 bg-white rounded-lg mt-7  lg:hidden">
                    <input type="text" class="w-full py-2 pl-3 border-0 "
                        placeholder="Search...">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                        class="mr-2 bi bi-search" viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
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


<!-- details -->


<section class=" bg-gray-50 font-poppins :bg-gray-800 ">
        <div class="px-4 py-4 mx-auto max-w-7xl lg:py-6 md:px-6">
        <div class="flex flex-wrap mb-24 -mx-3">
        <div class="w-full pr-4 lg:w-1/4 lg:block">
        <div class="p-4 mb-5 bg-white border border-gray-200 :border-gray-900 :bg-gray-900">
        <h2 class="text-2xl font-bold :text-gray-400">Product Categories</h2>
        <div class="w-16 pb-2 mb-6 border-b border-rose-600 :border-gray-400"></div>
        <ul>
        <li class="mb-4">
        <label for="" class="flex items-center :text-gray-400 ">
        <input type="checkbox" class="w-4 h-4 mr-2">
        <span class="text-lg">Sweater</span>
        </label>
        </li>
        <li class="mb-4">
        <label for="" class="flex items-center :text-gray-400 ">
        <input type="checkbox" class="w-4 h-4 mr-2 ">
        <span class="text-lg">Socks</span>
        </label>
        </li>
        <li class="mb-4">
        <label for="" class="flex items-center :text-gray-400">
        <input type="checkbox" class="w-4 h-4 mr-2">
        <span class="text-lg">T-Shirt</span>
        </label>
        </li>
        <li class="mb-4">
        <label for="" class="flex items-center :text-gray-400">
        <input type="checkbox" class="w-4 h-4 mr-2">
        <span class="text-lg">Shoes</span>
        </label>
        </li>
        <li class="mb-4">
        <label for="" class="flex items-center :text-gray-400">
        <input type="checkbox" class="w-4 h-4 mr-2">
        <span class="text-lg">Hoodies &amp; Pants</span>
        </label>
        </li>
        </ul>
        <a href="#" class="text-base font-medium text-blue-500 hover:underline :text-blue-400">View
        More</a>
        </div>
        <div class="p-4 mb-5 bg-white border border-gray-200 :bg-gray-900 :border-gray-900">
        <h2 class="text-2xl font-bold :text-gray-400 ">Size</h2>
        <div class="w-16 pb-2 mb-6 border-b border-rose-600 :border-gray-400"></div>
        <div class="flex flex-wrap -mx-2 -mb-2">
        <button class="py-1 mb-2 mr-1 border w-11 hover:border-blue-400 :border-gray-400 hover:text-blue-600 :hover:border-gray-300 :text-gray-400">XL
        </button>
        <button class="py-1 mb-2 mr-1 border w-11 hover:border-blue-400 hover:text-blue-600 :border-gray-400 :hover:border-gray-300 :text-gray-400">S
        </button>
        <button class="py-1 mb-2 mr-1 border w-11 hover:border-blue-400 hover:text-blue-600 :border-gray-400 :hover:border-gray-300 :text-gray-400">M
        </button>
        <button class="py-1 mb-2 mr-1 border w-11 hover:border-blue-400 hover:text-blue-600 :border-gray-400 :hover:border-gray-300 :text-gray-400">XS
        </button>
        </div>
        </div>
        <div class="p-4 mb-5 bg-white border border-gray-200 :border-gray-900 :bg-gray-900">
        <h2 class="text-2xl font-bold :text-gray-400">Colors</h2>
        <div class="w-16 pb-2 mb-6 border-b border-rose-600 :border-gray-400"></div>
        <div class="flex flex-wrap -mx-2 -mb-2">
        <button class="p-1 mb-2 mr-4 ">
        <div class="w-5 h-5 bg-emerald-400"></div>
        </button>
        <button class="p-1 mb-2 mr-4 ">
        <div class="w-5 h-5 bg-blue-700"></div>
        </button>
        <button class="p-1 mb-2 mr-4 ">
        <div class="w-5 h-5 bg-rose-600"></div>
        </button>
        <button class="p-1 mb-2 mr-4 ">
        <div class="w-5 h-5 bg-amber-700"></div>
        </button>
        <button class="p-1 mb-2 mr-4 ">
        <div class="w-5 h-5 bg-green-700"></div>
        </button>
        <button class="p-1 mb-2 mr-4 ">
        <div class="w-5 h-5 bg-pink-400"></div>
        </button>
        <button class="p-1 mb-2 mr-4 ">
        <div class="w-5 h-5 bg-indigo-400"></div>
        </button>
        <button class="p-1 mb-2 mr-4 ">
        <div class="w-5 h-5 bg-cyan-600"></div>
        </button>
        <button class="p-1 mb-2 mr-4 ">
        <div class="w-5 h-5 bg-stone-400"></div>
        </button>
        <button class="p-1 mb-2 mr-4 ">
        <div class="w-5 h-5 bg-yellow-400"></div>
        </button>
        </div>
        </div>
        <div class="p-4 mb-5 bg-white border border-gray-200 :bg-gray-900 :border-gray-900">
        <h2 class="text-2xl font-bold :text-gray-400">Brand</h2>
        <div class="w-16 pb-2 mb-6 border-b border-rose-600 :border-gray-400"></div>
        <ul>
        <li class="mb-4">
        <label for="" class="flex items-center :text-gray-300">
        <input type="checkbox" class="w-4 h-4 mr-2">
        <span class="text-lg :text-gray-400">Amul</span>
        </label>
        </li>
        <li class="mb-4">
        <label for="" class="flex items-center :text-gray-300">
        <input type="checkbox" class="w-4 h-4 mr-2">
        <span class="text-lg :text-gray-400">RIGO</span>
        </label>
        </li>
        <li class="mb-4">
        <label for="" class="flex items-center :text-gray-300">
        <input type="checkbox" class="w-4 h-4 mr-2">
        <span class="text-lg :text-gray-400">Nyptra</span>
        </label>
        </li>
        <li class="mb-4">
        <label for="" class="flex items-center :text-gray-300">
        <input type="checkbox" class="w-4 h-4 mr-2">
        <span class="text-lg :text-gray-400">Shangri-la </span>
        </label>
        </li>
        </ul>
        <a href="#" class="text-base font-medium text-blue-500 hover:underline :text-blue-400">View
        More</a>
        </div>
        </div>
        <div class="w-full px-3 lg:w-3/4">
        <div class="px-3 ">
        <div class="items-center justify-between hidden px-4 py-2 mb-4 bg-gray-100 md:flex :bg-gray-900 ">
        <h2 class="text-2xl :text-gray-400">Search Results for items</h2>
        <div class="flex items-center justify-between">
        <div class="flex">
        <a href="#" class="inline-block h-full p-2 mr-3 border rounded-md bg-gray-50 :text-gray-400 :bg-gray-700 :border-gray-700">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-5 h-5 bi bi-list" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"></path>
        </svg>
        </a>
        <a href="#" class="inline-block h-full p-2 mr-3 border rounded-md bg-gray-50 :text-gray-400 :bg-gray-700 :border-gray-700">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-5 h-5 bi bi-grid-fill" viewBox="0 0 16 16">
        <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3z"></path>
        </svg>
        </a>
        <a href="#" class="inline-block h-full p-2 mr-6 border rounded-md bg-gray-50 :text-gray-400 :bg-gray-700 :border-gray-700">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-5 h-5 bi bi-grid-3x3-gap-fill" viewBox="0 0 16 16">
        <path d="M1 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V2zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2zM1 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V7zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V7zM1 12a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-2zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-2zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-2z"></path>
        </svg>
        </a>
        </div>
        <div>
        <select name="" id="" class="block w-40 text-base bg-gray-100 :text-gray-400 :bg-gray-900">
        <option value="">Sort by latest</option>
        <option value="">Sort by Popularity</option>
        <option value="">Sort by Price</option>
        </select>
        </div>
        </div>
        </div>
        </div>
        <div class="flex flex-wrap items-center ">
        <div class="w-full px-3 mb-6 sm:w-1/2 md:w-1/3">
        <div class="border border-gray-200 rounded-md :border-gray-800">
        <div class="relative bg-gray-200">
        <a href="#" class="">
        <img src="https://i.postimg.cc/NGCTCW70/pexels-mike-250288.jpg" alt="" class="object-cover w-full h-56 mx-auto ">
        </a>
        <div class="absolute top-0 right-0 z-10 m-1 flex items-center justify-center w-16 h-16 p-5 text-center text-gray-100 bg-red-600 rounded-full shadow-xl ">
        <span class="relative text-base font-semibold text-gray-200 "> 10% OFF</span>
        </div>
        </div>
        <div class="p-5 bg-gray-50 :bg-gray-900">
        <div class="flex items-center justify-between mb-4">
        <h3 class="text-xl font-medium :text-gray-400">
        Product name
        </h3>
        <a href="#" class="">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-red-500 :text-gray-400 bi bi-heart" viewBox="0 0 16 16">
        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"></path>
        </svg>
        </a>
        </div>
        <div class="mb-4 ">
        <p class="text-lg ">
        <span class="text-red-400 :text-gray-400">$800.00</span>
        <span class="ml-2 text-gray-400 line-through :text-gray-400">1500</span>
        </p>
        </div>
        <div class="flex items-center justify-between mb-4">
        <ul class="flex ">
        <li>
        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-yellow-500 :text-gray-400 bi bi-star " viewBox="0 0 16 16">
        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"></path>
        </svg></a>
        </li>
        <li>
        <a href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-yellow-500 :text-gray-400 bi bi-star" viewBox="0 0 16 16">
        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"></path>
        </svg>
        </a>
        </li>
        <li>
        <a href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-yellow-500 :text-gray-400 bi bi-star" viewBox="0 0 16 16">
        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"></path>
        </svg>
        </a>
        </li>
        <li>
        <a href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-yellow-500 :text-gray-400 bi bi-star" viewBox="0 0 16 16">
        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"></path>
        </svg>
        </a>
        </li>
        </ul>
        <p class="text-base font-normal text-gray-400 :text-gray-400">
        <span>Nepal</span>
        </p>
        </div>
        <a href="#" class="flex justify-center px-4 py-2 text-blue-600 border border-blue-300 rounded-full :border-gray-600 :text-gray-400 hover:bg-blue-700 hover:text-gray-100 :hover:bg-gray-800 :hover:border-gray-900">
        Add to cart</a>
        </div>
        </div>
        </div>
        <div class="w-full px-3 mb-6 sm:w-1/2 md:w-1/3">
        <div class="border border-gray-200 rounded-md :border-gray-800">
        <div class="relative bg-gray-200">
        <a href="#" class="">
        <img src="https://i.postimg.cc/8CbfR3zN/light-grey-t-shirt-front.jpg" alt="" class="object-cover w-full h-56 mx-auto ">
        </a>
        </div>
        <div class="p-5 bg-gray-50 :bg-gray-900">
        <div class="flex items-center justify-between mb-4">
        <h3 class="text-xl font-medium :text-gray-400">
        Product name
        </h3>
        <a href="#" class="">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-red-500 :text-gray-400 bi bi-heart" viewBox="0 0 16 16">
        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"></path>
        </svg>
        </a>
        </div>
        <div class="mb-4 ">
        <p class="text-lg ">
        <span class="text-red-400 :text-gray-400">$900.00</span>
        <span class="ml-2 text-gray-400 line-through :text-gray-400">1600</span>
        </p>
        </div>
        <div class="flex items-center justify-between mb-4">
        <ul class="flex ">
        <li>
        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-yellow-500 :text-gray-400 bi bi-star " viewBox="0 0 16 16">
        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"></path>
        </svg></a>
        </li>
        <li>
        <a href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-yellow-500 :text-gray-400 bi bi-star" viewBox="0 0 16 16">
        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"></path>
        </svg>
        </a>
        </li>
        <li>
        <a href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-yellow-500 :text-gray-400 bi bi-star" viewBox="0 0 16 16">
        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"></path>
        </svg>
        </a>
        </li>
        <li>
        <a href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-yellow-500 :text-gray-400 bi bi-star" viewBox="0 0 16 16">
        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"></path>
        </svg>
        </a>
        </li>
        </ul>
        <p class="text-base font-normal text-gray-400 :text-gray-400">
        <span>Nepal</span>
        </p>
        </div>
        <a href="#" class="flex justify-center px-4 py-2 text-blue-600 border border-blue-300 rounded-full :border-gray-600 :text-gray-400 hover:bg-blue-700 hover:text-gray-100 :hover:bg-gray-800 :hover:border-gray-900">
        Add to cart</a>
        </div>
        </div>
        </div>
        <div class="w-full px-3 mb-6 sm:w-1/2 md:w-1/3">
        <div class="border border-gray-200 rounded-md :border-gray-800">
        <div class="relative bg-gray-200">
        <a href="#" class="">
        <img src="https://i.postimg.cc/pdd5BChj/pexels-nathan-j-hilton-4277508.jpg" alt="" class="object-cover w-full h-56 mx-auto ">
        </a>
        </div>
        <div class="p-5 bg-gray-50 :bg-gray-900">
        <div class="flex items-center justify-between mb-4">
        <h3 class="text-xl font-medium :text-gray-400">
        Product name
        </h3>
        <a href="#" class="">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-red-500 :text-gray-400 bi bi-heart" viewBox="0 0 16 16">
        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"></path>
        </svg>
        </a>
        </div>
        <div class="mb-4 ">
        <p class="text-lg ">
        <span class="text-red-400 :text-gray-400">$1000.00</span>
        <span class="ml-2 text-gray-400 line-through :text-gray-400">1500</span>
        </p>
        </div>
        <div class="flex items-center justify-between mb-4">
        <ul class="flex ">
        <li>
        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-yellow-500 :text-gray-400 bi bi-star " viewBox="0 0 16 16">
        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"></path>
        </svg></a>
        </li>
        <li>
        <a href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-yellow-500 :text-gray-400 bi bi-star" viewBox="0 0 16 16">
        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"></path>
        </svg>
        </a>
        </li>
        <li>
        <a href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-yellow-500 :text-gray-400 bi bi-star" viewBox="0 0 16 16">
        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"></path>
        </svg>
        </a>
        </li>
        <li>
        <a href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-yellow-500 :text-gray-400 bi bi-star" viewBox="0 0 16 16">
        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"></path>
        </svg>
        </a>
        </li>
        </ul>
        <p class="text-base font-normal text-gray-400 :text-gray-400">
        <span>Nepal</span>
        </p>
        </div>
        <a href="#" class="flex justify-center px-4 py-2 text-blue-600 border border-blue-300 rounded-full :border-gray-600 :text-gray-400 hover:bg-blue-700 hover:text-gray-100 :hover:bg-gray-800 :hover:border-gray-900">
        Add to cart</a>
        </div>
        </div>
        </div>
        <div class="w-full px-3 mb-6 sm:w-1/2 md:w-1/3">
        <div class="border border-gray-200 rounded-md :border-gray-800">
        <div class="relative bg-gray-200">
        <a href="#" class="">
        <img src="https://i.postimg.cc/XvTNykw4/black-front-sweater.jpg" alt="" class="object-cover w-full h-56 mx-auto ">
        </a>
        </div>
        <div class="p-5 bg-gray-50 :bg-gray-900">
        <div class="flex items-center justify-between mb-4">
        <h3 class="text-xl font-medium :text-gray-400">
        Product name
        </h3>
        <a href="#" class="">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-red-500 :text-gray-400 bi bi-heart" viewBox="0 0 16 16">
        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"></path>
        </svg>
        </a>
        </div>
        <div class="mb-4 ">
        <p class="text-lg ">
        <span class="text-red-400 :text-gray-400">$700.00</span>
        <span class="ml-2 text-gray-400 line-through :text-gray-400">1500</span>
        </p>
        </div>
        <div class="flex items-center justify-between mb-4">
        <ul class="flex ">
        <li>
        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-yellow-500 :text-gray-400 bi bi-star " viewBox="0 0 16 16">
        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"></path>
        </svg></a>
        </li>
        <li>
        <a href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-yellow-500 :text-gray-400 bi bi-star" viewBox="0 0 16 16">
        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"></path>
        </svg>
        </a>
        </li>
        <li>
        <a href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-yellow-500 :text-gray-400 bi bi-star" viewBox="0 0 16 16">
        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"></path>
        </svg>
        </a>
        </li>
        <li>
        <a href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-yellow-500 :text-gray-400 bi bi-star" viewBox="0 0 16 16">
        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"></path>
        </svg>
        </a>
        </li>
        </ul>
        <p class="text-base font-normal text-gray-400 :text-gray-400">
        <span>Nepal</span>
        </p>
        </div>
        <a href="#" class="flex justify-center px-4 py-2 text-blue-600 border border-blue-300 rounded-full :border-gray-600 :text-gray-400 hover:bg-blue-700 hover:text-gray-100 :hover:bg-gray-800 :hover:border-gray-900">
        Add to cart</a>
        </div>
        </div>
        </div>
        <div class="w-full px-3 mb-6 sm:w-1/2 md:w-1/3">
        <div class="border border-gray-200 rounded-md :border-gray-800">
        <div class="relative bg-gray-200">
        <a href="#" class="">
        <img src="https://i.postimg.cc/wjCnXfbf/pexels-timothy-paule-ii-2002717.jpg" alt="" class="object-cover w-full h-56 mx-auto ">
        </a>
        <div class="absolute top-0 right-0 z-10 m-2 flex items-center justify-center p-2 text-center bg-blue-600 ">
        <span class="relative text-base font-normal text-gray-100 "> New</span>
        </div>
        </div>
        <div class="p-5 bg-gray-50 :bg-gray-900">
        <div class="flex items-center justify-between mb-4">
        <h3 class="text-xl font-medium :text-gray-400">
        Product name
        </h3>
        <a href="#" class="">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-red-500 :text-gray-400 bi bi-heart" viewBox="0 0 16 16">
        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"></path>
        </svg>
        </a>
        </div>
        <div class="mb-4 ">
        <p class="text-lg ">
        <span class="text-red-400 :text-gray-400">$600.00</span>
        <span class="ml-2 text-gray-400 line-through :text-gray-400">1500</span>
        </p>
        </div>
        <div class="flex items-center justify-between mb-4">
        <ul class="flex ">
        <li>
        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-yellow-500 :text-gray-400 bi bi-star " viewBox="0 0 16 16">
        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"></path>
        </svg></a>
        </li>
        <li>
        <a href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-yellow-500 :text-gray-400 bi bi-star" viewBox="0 0 16 16">
        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"></path>
        </svg>
        </a>
        </li>
        <li>
        <a href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-yellow-500 :text-gray-400 bi bi-star" viewBox="0 0 16 16">
        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"></path>
        </svg>
        </a>
        </li>
        <li>
        <a href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-yellow-500 :text-gray-400 bi bi-star" viewBox="0 0 16 16">
        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"></path>
        </svg>
        </a>
        </li>
        </ul>
        <p class="text-base font-normal text-gray-400 :text-gray-400">
        <span>Nepal</span>
        </p>
        </div>
        <a href="#" class="flex justify-center px-4 py-2 text-blue-600 border border-blue-300 rounded-full :border-gray-600 :text-gray-400 hover:bg-blue-700 hover:text-gray-100 :hover:bg-gray-800 :hover:border-gray-900">
        Add to cart</a>
        </div>
        </div>
        </div>
        <div class="w-full px-3 mb-6 sm:w-1/2 md:w-1/3">
        <div class="border border-gray-200 rounded-md :border-gray-800">
        <div class="relative bg-gray-200">
        <a href="#" class="">
        <img src="https://i.postimg.cc/tghbJjN7/pexels-web-donut-19090.jpg" alt="" class="object-cover w-full h-56 mx-auto ">
        </a>
        </div>
        <div class="p-5 bg-gray-50 :bg-gray-900">
        <div class="flex items-center justify-between mb-4">
        <h3 class="text-xl font-medium :text-gray-400">
        Product name
        </h3>
        <a href="#" class="">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-red-500 :text-gray-400 bi bi-heart" viewBox="0 0 16 16">
        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"></path>
        </svg>
        </a>
        </div>
        <div class="mb-4 ">
        <p class="text-lg ">
        <span class="text-red-400 :text-gray-400">$900.00</span>
        <span class="ml-2 text-gray-400 line-through :text-gray-400">1900</span>
        </p>
        </div>
        <div class="flex items-center justify-between mb-4">
        <ul class="flex ">
        <li>
        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-yellow-500 :text-gray-400 bi bi-star " viewBox="0 0 16 16">
        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"></path>
        </svg></a>
        </li>
        <li>
        <a href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-yellow-500 :text-gray-400 bi bi-star" viewBox="0 0 16 16">
        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"></path>
        </svg>
        </a>
        </li>
        <li>
        <a href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-yellow-500 :text-gray-400 bi bi-star" viewBox="0 0 16 16">
        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"></path>
        </svg>
        </a>
        </li>
        <li>
        <a href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-yellow-500 :text-gray-400 bi bi-star" viewBox="0 0 16 16">
        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"></path>
        </svg>
        </a>
        </li>
        </ul>
        <p class="text-base font-normal text-gray-400 :text-gray-400">
        <span>Nepal</span>
        </p>
        </div>
        <a href="#" class="flex justify-center px-4 py-2 text-blue-600 border border-blue-300 rounded-full :border-gray-600 :text-gray-400 hover:bg-blue-700 hover:text-gray-100 :hover:bg-gray-800 :hover:border-gray-900">
        Add to cart</a>
        </div>
        </div>
        </div>
        </div>
        <div class="flex justify-end mt-6">
        <nav aria-label="page-navigation">
        <ul class="flex list-style-none">
        <li class="page-item disabled ">
        <a href="#" class="relative block pointer-events-none px-3 py-1.5 mr-3 text-base text-gray-700 transition-all duration-300  rounded-md :text-gray-400 hover:text-gray-100 hover:bg-blue-600">Previous
        </a>
        </li>
        <li class="page-item ">
        <a href="#" class="relative block px-3 py-1.5 mr-3 text-base hover:text-blue-700 transition-all duration-300 hover:bg-blue-200 :hover:text-gray-400 :hover:bg-gray-700 rounded-md text-gray-100 bg-blue-600">1
        </a>
        </li>
        <li class="page-item ">
        <a href="#" class="relative block px-3 py-1.5 text-base text-gray-700 transition-all duration-300 :text-gray-400 :hover:bg-gray-700 hover:bg-blue-100 rounded-md mr-3  ">2
        </a>
        </li>
        <li class="page-item ">
        <a href="#" class="relative block px-3 py-1.5 text-base text-gray-700 transition-all duration-300 :text-gray-400 :hover:bg-gray-700 hover:bg-blue-100 rounded-md mr-3 ">3
        </a>
        </li>
        <li class="page-item ">
        <a href="#" class="relative block px-3 py-1.5 text-base text-gray-700 transition-all duration-300 :text-gray-400 :hover:bg-gray-700 hover:bg-blue-100 rounded-md ">Next
        </a>
        </li>
        </ul>
        </nav>
        </div>
        </div>
        </div>
        </div>
</section>


    <!-- footer -->

    <section class="flex flex-col h-3/4 lg:justify-end font-poppins">
            <div class="w-full bg-blue-50 pt-11  ">
            <div class="justify-center flex-1 max-w-6xl px-4 py-4 mx-auto lg:py-0">
            <div class="flex items-center justify-center pb-3 border-b border-gray-300  lg:justify-between">
            <div class="hidden mr-12 lg:block">
            <span class="text-gray-700 ">Get connected with us</span>
            </div>
            <div class="flex justify-center ">
            <a href="#" class="mr-6 text-gray-600  hover:text-blue-700">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-5 h-5 bi bi-facebook" viewBox="0 0 16 16">
            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
            </svg>
            </a>
            <a href="#" class="mr-6 text-gray-600  hover:text-blue-400">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-5 h-5 bi bi-twitter" viewBox="0 0 16 16">
            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
            </svg>
            </a>
            <a href="#" class="mr-6 text-gray-600  hover:text-red-600">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-5 h-5 bi bi-google" viewBox="0 0 16 16">
            <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"></path>
            </svg>
            </a>
            <a href="#" class="mr-6 text-gray-600  hover:text-blue-600">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class=" w-5 h-5 bi bi-linkedin" viewBox="0 0 16 16">
            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"></path>
            </svg>
            </a>
            </div>
            </div>
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
</body>
</html>