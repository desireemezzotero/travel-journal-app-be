@extends('layout.master')

@section('content')


<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">Stato</th>
                <th scope="col" class="px-6 py-3">Città</th>
                <th scope="col" class="px-6 py-3">Descrizione</th>
                 <th scope="col" class="px-6 py-3">mood</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($posts as $post)
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $post->title }}
                </th>
                <td class="px-6 py-4">
                    {{ $post->location }}
                </td>
                <td class="px-6 py-4">
                    {{ $post->description }}
                </td>
                <td class="px-6 py-4">
                  @foreach ($post->moods as $mood)
                   <p>{{$mood->title }}</p> 
                  @endforeach 
                </td>

                <td class="px-6 py-4">
                  @foreach ($post->tags as $tag)
                   <p>{{$tag->name }}</p> 
                  @endforeach 
                </td>

                 <td class="px-6 py-4">
                  @foreach ($post->photos as $photo)
                   <p>{{$photo->type }}</p> 
                  @endforeach 
                </td>

                
            </tr>
            @endforeach


        </tbody>
    </table>
</div>


@endsection