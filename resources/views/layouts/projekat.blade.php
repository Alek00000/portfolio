<div class="container-fluid p-0">
      <div class="row no-gutters">
      @foreach($file as $files)
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box"  href="/storage/upload/{{ $files->name }}">
            <img class="img-fluid" src="/storage/upload/{{ $files->name }}" alt="Greška">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Sajt
              </div>
              <div class="project-name">
               {{ $files->text }}
              </div>
            </div>
          </a>
        </div>
        @endforeach
      </div>  
    </div>