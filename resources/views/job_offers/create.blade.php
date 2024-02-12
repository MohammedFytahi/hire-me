<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <h1 class="max-w-sm mx-auto">Create offer</h1>
    <form action="{{ route('job_offers.store') }}" method="POST" class="max-w-sm mx-auto my-28 border-solid">
        @csrf
        @method('post')
        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
        <div class="mb-5">

            <input type="name" name="title" placeholder="title" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" >
            @error('title')
            <div class="text-red-600"> {{$message}}</div> 
            @enderror
        </div>

        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descriptions</label>
        <div class="mb-5">

            <textarea  name="description" placeholder="descriptions" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" ></textarea>
            @error('description')
            <div class="text-red-600"> {{$message}}</div> 
            @enderror
        </div>
        <label for="required_skills" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">required_skills</label>
        <div class="mb-5">

            <textarea  name="required_skills" placeholder="required_skills" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" ></textarea>
            @error('required_skills')
            <div class="text-red-600"> {{$message}}</div> 
            @enderror
        </div>
        <label for="contract_type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">contract_type</label>
        <div class="mb-5">

            <select name="contract_type" id="contract_type" class="form-control" required>
                <option value="">Select Contract Type</option>
                <option value="remote">Remote</option>
                <option value="hybrid">Hybrid</option>
                <option value="full_time">Full Time</option>
            </select>
            @error('contract_type')
                <div class="text-red-600">{{ $message }}</div>
            @enderror
        </div>
        <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">location</label>
        <div class="mb-5">

            <input type="text" name="location" placeholder="location" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" >
            @error('location')
            <div class="text-red-600"> {{$message}}</div> 
            @enderror
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create</button>

    </form>
    

  
</body>

</html>
