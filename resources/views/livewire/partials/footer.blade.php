<div>
  <div class="row bg-color-footer p-0 border border-secondary-50">
      <div class="col py-2">
        <h6 class="fm-lato text-dark-50 fw-bold ms-1"></h6>
      </div>
        <div class="col py-2 px-5">
          <div class="pt-3 ps-1 h-25 d-flex align-items-center">       
            <h6 class="fm-lato text-dark-50 fw-bold ms-1">Quick Links</h6>
          </div>
          <div class="h-75 d-flex flex-row flex-wrap ps-1 gap-2 pt-3 pb-5">
              <a class="text-decoration-none ms-1 me-5 fw-medium fm-lato anchor-hover" href="{{ route('home') }}">Home</a>
              <a class="text-decoration-none ms-1 me-5 fw-medium fm-lato anchor-hover" href="{{ route('blog') }}">Blog</a>
              <a class="text-decoration-none ms-1 me-5 fw-medium fm-lato anchor-hover" href="{{ route('about') }}">About</a>
              @livewire('modal.signin')
              @livewire('modal.signup')
          </div>
        </div>
      <div class="col py-2">
        <div class="pt-3 h-25 d-flex align-items-center">       
          <h6 class="fm-lato text-dark-50 fw-bold ms-1">Social media</h6>
        </div>
        <div class=" bg-cyan-300 h-75">       
          <a href="https://www.facebook.com" target="_blank" class="btn btn-primary m-1">
            <i class="bi bi-facebook"></i>
        </a>
        <a href="https://www.twitter.com" target="_blank" class="btn btn-info m-1">
            <i class="bi bi-twitter"></i> 
        </a>
        <a href="https://www.instagram.com" target="_blank" class="btn btn-danger m-1">
            <i class="bi bi-instagram"></i> 
        </a>
        <a href="https://www.linkedin.com" target="_blank" class="btn btn-primary m-1">
            <i class="bi bi-linkedin"></i> 
        </a>
        </div>

      </div>
  </div>
  <div class="border-top border-secondary-50 d-flex justify-content-center align-items-center bg-color-footer-copyright" >
    <p class="fm-lato text-white my-2">&copy; 2024 Ejhay Gofredo. All rights reserved.</p>
  </div>
</div>