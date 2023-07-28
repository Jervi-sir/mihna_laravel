<div class="row y-gap-30 pt-30">
    @foreach ($formations as $formation)
    @include('instructor.components.formationCard2', ['active_formation' => $formation])                
@endforeach
</div>

<div class="row justify-center pt-30">
    <div class="col-auto">
      <div class="pagination -buttons">
        {{ $formations->links() }}

      </div>
    </div>
</div>
