<div>
  {{-- @php
  $userId = Session::get('user_id');
@endphp
  @if($userId)
    <a href="#" class="text-decoration-none ms-1 me-5 fw-medium fm-lato anchor-hover" wire:click="openSignupModal">Sign Up</a>
  @else --}}
    <a href="#" class="nav-icon" wire:click="openSignupModal">
      <i class="bi bi-person-plus"></i>
    </a>
  {{-- @endif --}}


<div class="modal fade @if($showModal) show @endif " tabindex="-1" role="dialog " style="display: @if($showModal) block @else none @endif ; background-color: rgba(0, 0, 0, 0.7)">
  <div class="modal-dialog" role="document">
      <div class="modal-content rounded" style="border:none; border-radius: 0; background-color: #181047;">
        <div class="modal-header" style="border: none">
              <button style="border:none;    background-color: #181047;" type="button" class="modal-close-btn primary-color" wire:click="closeSignupModal" aria-label="Close">
                  <i class="text-white bi bi-x-lg"></i>
              </button>
        </div>
          <div class="modal-body">
            <div class="h-100 d-flex justify-content-center align-items-center">
              <form wire:submit.prevent="createUser" class="signup-custom-form d-flex flex-column gap-4" autocomplete="off">
                  <div class="d-flex flex-column justify-content-center align-items-center pt-2 " style="height:15%;">
                      <h4 class="fw-medium text-white fs-3">Join Now!</h4>
                  </div>
                  <div class="d-flex flex-column justify-content-center ps-5  " style="height: 20%;">
                      <label class="form-label fw-medium fs-6 text-white">Email</label>
                      <input wire:model="email" type="email" class="custom-width form-control" placeholder="Enter Email:" >
                      @error('email')
                        <span class="text-danger fs-6">{{ $message }}</span>
                      @enderror
                  </div>
                  <div class="d-flex flex-column justify-content-center ps-5  " style="height: 20%;">
                      <label class="form-label fw-medium fs-6 text-white">Password</label>
                      <input wire:model="password" type="password" class="custom-width form-control " placeholder="Enter Password:" >
                      @error('password')
                        <span class="text-danger fs-6 mb-2">{{ $message }}</span>
                      @enderror
                  </div>
                  <div class="d-flex flex-column justify-content-center ps-5  " style="height: 20%;">
                      <label class="form-label fw-medium fs-6 text-white">Confirm Password</label>
                      <input wire:model="repassword" type="password" class="custom-width form-control" placeholder="Re-Enter Password:">
                      @error('repassword')
                        <span class="text-danger fs-6">{{ $message }}</span>
                      @enderror
                  
                  

                  </div>
                  <div class="d-flex flex-column justify-content-start pt-3 ps-5" style="height: 25%;">
                      <button style="background-color: #101218;" type="submit" class="custom-width text-white btn letter-spacing-lg text-capitalize">Submit</button>
                  </div>
              </form>
          </div>
      </div>
          </div>
      </div>
      
  </div>   <!-- Modal -->
  {{-- for success modal --}}
  <script>
    document.addEventListener('DOMContentLoaded', function () {
        Livewire.on('alert-success', event => {
          console.log('Event received:', event); // Log entire event to debug
            alert(event[0].success);
        });
    });
</script>
    
{{-- root --}}
</div>


