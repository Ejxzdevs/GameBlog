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
  <div class="modal-dialog pt-3" role="document">
      <div class="modal-content rounded mt-5" style="border:none; border-radius: 0; background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px);  ">
        <div class="modal-header" style="border: none">
              <button style="border:none;    background-color: #101218;" type="button" class="modal-close-btn primary-color rounded" wire:click="closeSignupModal" aria-label="Close">
                  <i class="text-white bi bi-x-lg"></i>
              </button>
        </div>
          <div class="modal-body">
            <div class="h-100 d-flex justify-content-center align-items-center">
              <form wire:submit.prevent="createUser" class="signup-custom-form d-flex flex-column gap-4" autocomplete="off">
                  <div class="d-flex flex-column justify-content-center align-items-center pt-2 " style="height:15%;">
                      <h4 style="background: linear-gradient(45deg, #ffffff, #FF6F91, #9d90ea); 
                -webkit-background-clip: text; background-clip: text; color: transparent" class="fw-medium fs-3 orbitron">GameBlog Sign Up</h4>
                  </div>
                  <div class="d-flex flex-column justify-content-center ps-5  " style="height: 20%;">
                      <label class="form-label fw-medium fs-6 text-white nunito p-0 m-0">Email</label>
                      <input style="font-size: 14px;" wire:model="email" type="email" class="custom-width form-control orbitron" placeholder="Enter Email:" >
                      @error('email')
                        <span class="text-danger fs-6">{{ $message }}</span>
                      @enderror
                  </div>
                  <div class="d-flex flex-column justify-content-center ps-5  " style="height: 20%;">
                      <label class="form-label fw-medium fs-6 text-white nunito p-0 m-0">Password</label>
                      <input style="font-size: 14px;" wire:model="password" type="password" class="custom-width form-control orbitron " placeholder="Enter Password:" >
                      @error('password')
                        <span class="text-danger fs-6 mb-2">{{ $message }}</span>
                      @enderror
                  </div>
                  <div class="d-flex flex-column justify-content-center ps-5  " style="height: 20%;">
                      <label class="form-label fw-medium fs-6 text-white nunito p-0 m-0">Confirm Password</label>
                      <input style="font-size: 14px;" wire:model="repassword" type="password" class="custom-width form-control orbitron" placeholder="Re-Enter Password:">
                      @error('repassword')
                        <span class="text-danger fs-6">{{ $message }}</span>
                      @enderror
                  
                  

                  </div>
                  <div class="d-flex flex-column justify-content-start pt-3 ps-5" style="height: 25%;">
                      <button style="background-color: #101218;" type="submit" class="custom-width text-white btn letter-spacing-lg nunito fw-bold">SIGN UP</button>
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


