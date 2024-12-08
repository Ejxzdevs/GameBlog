<div class="write-container p-2"  >
    <div class="h-100 justify-content-center align-items-center d-flex" style="z-index:1;  ">
       <form wire:submit.prevent="create" class=" w-50 h-auto form-floating p-5 rounded shadow" style=" background-color:#101218; " >
          <div class="h-25 align-items-end d-flex">
             <h3 class="text-white mb-3 russo-one-regular fw-medium" >Create a Post</h3>
          </div>
          <div class="h-75 d-flex flex-column">
             <div class="form-floating mb-3">
                <input wire:model="title" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Title
                  
                </label>
              </div>
             <div class="form-floating mb-3">
                <textarea wire:model="content" class="form-control " placeholder="Leave a comment here" id="floatingTextarea" style="height: 130px; "></textarea>
                <label for="floatingTextarea">Share your thoughts</label>
              </div>

              @if ($image)
                  <img src="{{ $image->temporaryUrl() }}" alt="Uploaded Image" class="img-thumbnail mb-2" style="height: 280px; width: 100%;">
               @endif
                <input  wire:model="image" type="file" class="form-control mb-3">
                <button type="submit" class="btn btn-primary letter-spacing-2 fw-medium" style="background-color: #183153 " >PUBLISH</button>
          </div>
       </form>
    </div>
 </div>