<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post') }}
        </h2>
    </x-slot>

    <form>
  <div class="form-group">
    <label for="title">Title</label>
    <br/>
    <input type="text" class="form-control" name="title" id="title"  placeholder="Enter title">
  </div>
  <div class="form-group">
    <label for="post">Write a Post</label>
    <br/>
    <textarea class="form-control"name="body" id="post" rows="3"></textarea>
  </div>
  <br/>
  <button type="submit" class="btn btn-primary">Post</button>
</form>
</x-app-layout>
