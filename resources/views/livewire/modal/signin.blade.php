<div >
    <a href="#" class="nav-icon" wire:click="openLoginModal">
        <i class="bi bi-box-arrow-in-right"></i>
    </a>
<!-- Modal -->
<div class="modal fade @if($showModal) show @endif " tabindex="-1" role="dialog " style="display: @if($showModal) block @else none @endif ; background-color: rgba(0, 0, 0, 0.7); ">
    <div class="modal-dialog" role="document"  >
        <div class="modal-content rounded" style="border:none; background-color: #181047; ">
          <div class="modal-header" style="border: none">
                <button style="border:none; background-color: #181047;" type="button" class="modal-close-btn" wire:click="closeLoginModal" aria-label="Close">
                    <i  class="text-white bi bi-x-lg"></i>
                </button>
          </div>
            <div class="modal-body" >
              <div class="h-100 d-flex justify-content-center align-items-center">
                <form wire:submit.prevent="UserEntry" class="signup-custom-form d-flex flex-column gap-4" autocomplete="off">
                    <div class="d-flex flex-column justify-content-center align-items-center pt-2 " style="height:15%;">
                        <h1 class="fw-medium text-white fs-3" >User Login</h1>
                    </div>
                    <div class="d-flex flex-column justify-content-center ps-5  " style="height: 20%;">
                        <label class="form-label fw-medium fs-6 text-white">Email</label>
                        <input wire:model="email" type="email" class="custom-width form-control" placeholder="Enter your email" >
                        @error('email')
                          <span class="text-danger fs-6">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="d-flex flex-column justify-content-center ps-5  " style="height: 20%;">
                        <label class="form-label fw-medium fs-6 text-white">Password</label>
                        <input wire:model="password" type="password" class="custom-width form-control " placeholder="Enter your password" >
                        @error('password')
                          <span class="text-danger fs-6 mb-2">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="d-flex flex-column justify-content-start pt-3 ps-5" style="height: 25%;">
                        <button type="submit" class="btn text-white custom-width letter-spacing-lg text-capitalize" style="background-color: #101218;">Submit</button>
                    </div>
                </form>
            </div>
        </div>
            </div>
        </div>
    </div>   <!-- Modal -->
</div>
