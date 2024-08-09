@extends('components.layouts.end-user')
@section('pages')
<div class="write-container p-2" >
   <div class="h-100 justify-content-center align-items-center d-flex" style="z-index:1;">
      <form wire:submit.prevent="create" class="w-75 h-100 form-floating">
         <div class="h-25 align-items-end d-flex">
            <h3>Create Post</h3>
         </div>
         <div class="h-75 d-flex flex-column">
            <div class="form-floating mb-2">
               <input wire:model="title" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
               <label for="floatingInput">Title</label>
             </div>
            <div class="form-floating mb-2">
               <textarea type="text" wire:model="content" class="form-control " placeholder="Leave a comment here" id="floatingTextarea" style="height: 130px"></textarea>
               <label for="floatingTextarea">Share your thoughts</label>
             </div>
               <input  wire:model="image" type="file" class="form-control mb-2">
               <button type="submit" class="btn btn-primary letter-spacing-2">PUBLISH</button>
         </div>

      </form>
   </div>
</div>
@endsection
