<x-layout>
    <x-slot:title>{{ $user->name }} - Komentar</x-slot:title>
    <x-profile :$user />
    <div class="container mx-auto my-4">
        <div class="my-2">
            <ul class="nav nav-tabs w-100">
                @foreach($menu_list as $id => $menu_l)
                    @if(Auth::id() == $user->id || $id < 2)
                    <li class="nav-item">
                        <a class="nav-link {{$menu_l == $menu ? 'active' : '' }}" aria-current="page" href="{{route('user.'.$menu_l, ['uid' => $user->id])}}">{{ $menu_name_list[$id] }}</a>
                    </li>
                    @endif
                @endforeach
            </ul>
        </div>
        <div class="m-4">
            <p class="h2">Komentar</p>
            @foreach ($comments as $comment)
                <x-commentcontainer :$comment></x-commentcontainer>
            @endforeach
        </div>
    </div>
    
</x-layout>