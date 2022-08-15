@props(['item'])
<li>
    <a href="/{{$item->slug}}"
       class="text-base font-medium text-dark hover:text-primary py-2 lg:inline-flex flex lg:ml-7 space-x-4">
        {{$item->name}}
    </a>
</li>
