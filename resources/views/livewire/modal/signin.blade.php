<div >
    <a href="#" class="nav-icon" wire:click="openLoginModal">
        <i class="bi bi-box-arrow-in-right"></i>
    </a>
<!-- Modal -->
<div class="modal fade @if($showModal) show @endif " tabindex="-1" role="dialog " style="display: @if($showModal) block @else none @endif ; background-color: rgba(0, 0, 0, 0.7); ">
    <div class="modal-dialog pt-3" role="document"  >
        <div class="modal-content rounded mt-5" style="border:none; background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px);  ">
          <div class="modal-header" style="border: none">
                <button style="border:none; background-color: #101218;" type="button" class="modal-close-btn rounded" wire:click="closeLoginModal" aria-label="Close">
                    <i  class="text-white bi bi-x-lg"></i>
                </button>
          </div>
            <div class="modal-body" >
              <div class="h-100 d-flex justify-content-center align-items-center">
                <form wire:submit.prevent="UserEntry" class="signup-custom-form d-flex flex-column gap-2" autocomplete="off">
                    <div class="d-flex flex-column justify-content-center align-items-center pt-2 " style="height:15%;">
                        <h1 class="fw-medium fs-3 orbitron" style="background: linear-gradient(45deg, #ffffff, #FF6F91, #9d90ea); 
                -webkit-background-clip: text; background-clip: text; color: transparent" >GameBlog Sign In</h1>
                    </div>
                    <div class="d-flex flex-column justify-content-center ps-5  " style="height: 20%;">
                        <label class="form-label fw-medium fs-6 text-white nunito p-0 m-0">Email</label>
                        <input style="font-size: 14px;"  wire:model="email" type="email" class="custom-width form-control orbitron" placeholder="Enter Email:" >
                        @error('email')
                          <span class="text-danger fs-6">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="d-flex flex-column justify-content-center ps-5  " style="height: 20%;">
                        <label class="form-label fw-medium fs-6 text-white nunito p-0 m-0">Password</label>
                        <input style="font-size: 14px;" wire:model="password" type="password" class="custom-width form-control orbitron" placeholder="Enter Password: " >
                        @error('password')
                          <span class="text-danger fs-6 mb-2">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="d-flex flex-column justify-content-start pt-3 ps-5" style="height: 25%;">
                        <button type="submit" class="btn text-white custom-width letter-spacing-lg nunito fw-bold" style="background-color: #101218;">SIGN IN</button>
                    </div>
                </form>
            </div>
        </div>
            </div>
        </div>
    </div>   <!-- Modal -->
</div>
