<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('Dembo - Nouveau post')}}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data" class="mt-10">
            @csrf
            <x-label value="Titre" for="title"/>
            <x-input id="title" name="title"/>

            <x-label value="Contenu" for="content"/>
            <textarea name="content" id="content" rows="7"></textarea>

            <x-label value="Image" for="image"/>
            <x-input id="image" name="image" type="file"/>

            <x-label value="Catégorie" for="category"/>
            <select name="category" id="category">
                @foreach($categories as $cat)
                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                @endforeach
            </select>

            <x-button style="display: block !important;" class="mt-5">Ajouter</x-button>
        </form>
    </div>
</x-app-layout>
