<style>
    #flexer {
        display: flex;
        flex-direction: column;
        width: 400px;
    }
</style>
<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('posts.store') }}" id="flexer">
            @csrf
            <label for="title">Título de la publicación</label>
            <input type="text" name="title" id="excerpt" required value="{{ old('title') }}">
            <x-input-error :messages="$errors->get('title')" class="mt-2" />

            <label for="excerpt">Extracto publicación</label>
            <input type="text" name="excerpt" id="excerpt" required value="{{ old('excerpt') }}"">
            <x-input-error :messages="$errors->get('excerpt')" class="mt-2" />
            <hr>
            <br>

            <label for="content">Contenido publicación</label>
            <textarea required name="content" placeholder="{{ __('Cuéntanos algo...') }}"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                {{ old('content') }}
            </textarea>
            <x-input-error :messages="$errors->get('content')" class="mt-2" />

            <label for="expirable">Caducable</label>
            <input type="hidden" name="expirable" value="0">
            <input type="checkbox" id="expirable" name="expirable" value="1">
            <x-input-error :messages="$errors->get('expirable')" class="mt-2" />

            <label for="mentionable">No permitir comentarios</label>
            <input type="hidden" name="mentionable" value="1">
            <input type="checkbox" id="mentionable" name="mentionable" value="0">
            <x-input-error :messages="$errors->get('mentionable')" class="mt-2" />

            <label for="isPublic">Acceso</label>
            <select type="select" name="isPublic" id="isPublic">
                <option value="1">Público</option>
                <option value="0">Privado</option>
            </select>
            <x-input-error :messages="$errors->get('access')" class="mt-2" />

            <x-primary-button class="mt-4">{{ __('Post') }}</x-primary-button>
            <div>
                {{ session()->get('message') }}
            </div>
        </form>
    </div>
</x-app-layout>