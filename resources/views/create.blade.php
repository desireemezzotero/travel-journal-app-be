@extends('layout.master')

@section('content')
<div class="bg-black min-h-screen flex">
  <div class="mx-auto container">
    <h5 class="mb-4 text-4xl text-center font-extrabold leading-none tracking-tight md:text-3xl lg:text-5xl text-white pt-6">Aggiungi un nuova meta</h5>

    <form class="max-w-md mx-auto pt-10 text-white" action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">

      @csrf

      <div class="relative z-0 w-full mb-5 group">
        <input type="Text" name="title" id="title" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 peer" placeholder=" "required />
  
        <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Title</label>
  
      </div>
  
      <div class="relative z-0 w-full mb-5 group">
        <input type="text" name="location"  id="location" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0  peer" placeholder=" " required />
  
        <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Meta</label>
      </div>
  
      <div class="relative z-0 w-full mb-5 group">
        <input type="decimal" id="latitude"  name="latitude" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0  peer" placeholder=" " required />

        <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Latitudine</label>
      </div>
  
      <div class="relative z-0 w-full mb-5 group">
        <input type="decimal" id="longitude"  name="longitude" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0  peer" placeholder=" " required />
        
        <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">longitude</label>
      </div>

      <div class="relative z-0 w-full mb-5 group">
        <input type="text" id="description"  name="description" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0  peer" placeholder=" " required />
        
        <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">description</label>
      </div>
  
       <div class="relative z-0 w-full mb-5 group">
        <input type="text" id="actual_spending"  name="actual_spending" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0  peer" placeholder=" " required />
        
        <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">actual_spending</label>
      </div>
      
     <div>
        <select name="physical_effort" id="physical_effort" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  
          <option selected>Scegli lo sforzo fisico</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
     </div>


     <div>
        <select name="economic_effort" id="economic_effort" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  
          <option selected>Scegli lo sforzo economico</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
     </div>

      <div class="relative z-0 w-full mb-5 group">
        <input type="text" id="takeaway_positive"  name="takeaway_positive" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0  peer" placeholder=" " required />
        
        <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">takeaway_positive</label>
      </div>

      <div class="relative z-0 w-full mb-5 group">
        <input type="text" id="takeaway_negative"  name="takeaway_negative" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0  peer" placeholder=" " required />
        
        <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">takeaway_negative</label>
      </div>
  
      <div class="w-full mb-5">
        <label class="block text-sm text-gray-400 mb-2">Mood</label>
      
        <div class="grid grid-cols-4 gap-4">
         @foreach ($moods as $mood)
            <label for="mood-{{$mood->id}}" class="flex items-center space-x-2 text-white text-sm">
              <input
                name="mood[]"
                id="mood-{{$mood->id}}"
                type="checkbox"
                value="{{$mood->id}}"
                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 focus:ring-2"
              >
              <span>{{$mood->title}}</span>
            </label>
          @endforeach 
        </div>
      </div>

      <div class="w-full mb-5">
        <label class="block text-sm text-gray-400 mb-2">Tag</label>
      
        <div class="grid grid-cols-4 gap-4">
         @foreach ($tags as $tag)
            <label for="tag-{{$tag->id}}" class="flex items-center space-x-2 text-white text-sm">
              <input
                name="tag[]"
                id="tag-{{$tag->id}}"
                type="checkbox"
                value="{{$tag->id}}"
                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 focus:ring-2"
              >
              <span>{{$tag->name}}</span>
            </label>
          @endforeach 
        </div>
      </div>

      <div>
        <label for="photo">Carica immagini:</label>
        <input type="file" name="photo[]" multiple>
      </div>
    
      <div class="text-center pt-4">
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
      </div>
    </form>
   
  </div>
</div>

@endsection