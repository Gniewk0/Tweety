@extends('layouts.app')

@section('content')
    <header class="mb-6 relative">
        <img 
            src="/images/bunnybanner.jpg" 
            alt=""
            class="mb-2"
        >

        <div class="flex justify-between items-center">
            <div>
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div>
                <a href="" class="rounded-full border border-gray-300 py-2 px-2 text-black text-sm">Edit Profile</a>
                <a href="" class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-sm">Follow Me</a>
            </div>
        </div>        

        <p class="text-sm">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum magni minima ipsam eaque assumenda maiores aut quia dolores iusto nisi illum hic blanditiis, aliquid porro, corporis repudiandae, tempore dignissimos maxime?
        </p>


        <img 
        src="https://picsum.photos/150" 
        alt=""
        class="rounded-full mr-2 absolute"
        style="width: 150px; left: calc(50% - 75px); top: 47%"
        >
    </header>


    @include('_timeline',[
        'tweets' => $user->tweets
    ])

@endsection
