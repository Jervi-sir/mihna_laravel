<section class="layout-pt-lg layout-pb-lg section-bg">
    <div class="section-bg__item">
      <img class="img-full rounded-16" src="{{ asset('img/home-9/cta/bg.png') }}" alt="image">
    </div>
    <div class="container">
      <div class="row justify-center text-center">
        <div class="col-xl-5 col-lg-6 col-md-11">
          <div class="sectionTitle -light">
            <h2 class="sectionTitle__title ">Vous êtes une école ou un formateur ?</h2>
            <p class="sectionTitle__text ">Publiez vos annonces de formation en toute conformité et gagnez la confiance de vos étudiants.</p>
          </div>
        </div>
      </div>
      <div class="row mt-30 justify-center">
        <div class="col-lg-6">
          <div class="form-single-field -help text-center" >
            <button class="button -purple-1 text-white" type="submit" style="right: 50%; transform: translateX(50%); width:190px" onclick="location.href='{{ route('instructor.register') }}'">
              Post my formations
            </button>
          </div>
        </div>
      </div>
    </div>
</section>