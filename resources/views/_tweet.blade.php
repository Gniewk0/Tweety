{{-- @foreach ($tweets as $tweet) --}}
<div class="flex p-4 border-b border-b-gray-400">
    <div class="mr-2 flex-shrink-0">
    <a href="{{ route('profile', $tweet->user) }}">
        <img 
        src="https://picsum.photos/40" 
        alt=""
        class="rounded-full mr-2">
    </a>    
    </div>

   
        <div>
        <h5 class="font-bold mb-4">
            <a href="{{ route('profile', $tweet->user) }}">            
            {{ $tweet->user->name}}
            </a>
        </h5>

        <p class="text-sms">
            {{ $tweet->body}}     
        </p>
    </div>
    
    
</div>
{{-- @endforeach --}}