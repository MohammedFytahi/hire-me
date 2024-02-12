    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Hirme</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-gray-100">

        <form action="{{ route('jobs.search') }}" method="GET">
            <input type="text" name="keyword" placeholder="Recherchez des offres d'emploi">
            <button type="submit">Rechercher</button>
        </form>
        @foreach ($jobs as $job)
        <div class="container mx-auto px-4 my-24 md:px-6">
        <!-- Section: Design Block -->
        <section class="max-w-3xl mx-auto mb-32 bg-white rounded-lg shadow-lg dark:shadow-black/20 p-6">
        <img src="https://mdbcdn.b-cdn.net/img/new/slides/198.jpg"
            class="mb-6 w-full rounded-lg shadow-lg dark:shadow-black/20" alt="image" />
    
        <div class="mb-6 flex items-center">
            <img src="{{ asset($job->user->profile_image) }}" class="mr-2 h-8 rounded-full" alt="avatar"
            loading="lazy" />
            <div>
            <span> Published <u>{{$job->created_at}}<</u> by </span>
            <a href="#!" class="font-medium">{{ $job->user?->name }}</a>
            </div>
        </div>
    
        <h1 class="mb-6 text-3xl font-bold">
            {{$job->title}}
        </h1>
    
        <p class="break-words">
            {{$job->description}}
        </p>
        <div class="flex">
            @if(auth()->check() && $job->user_id === auth()->id())
        <form action="{{ route('jobs.destroy', $job->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Supprimer</button>
        </form>

        <form action="" method="POST">
            @csrf
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Apply</button>
        </form>
        </div>
        
        </section>
        <!-- Section: Design Block -->
    </div>  
        @endforeach
        

    </body>
    </html>
