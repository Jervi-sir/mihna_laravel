@extends('instructor.layouts.master')
@section('script-top')
<script src="{{ asset('tinymce/tinymce.min.js') }}"></script>

<link href="https://unpkg.com/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>
<script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://npmcdn.com/flatpickr/dist/l10n/fr.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>

@endsection

@section('script-footer')
@endsection

@section('content')
    <div class="dashboard__content bg-light-4" style="padding-top: 0">
      <div class="row pb-20 mb-10" >
        <div class="col-auto">

          <h1 class="text-30 lh-12 fw-700">Create New Course</h1>
          <div class="mt-10">Lorem ipsum dolor sit amet, consectetur.</div>

        </div>
      </div>
      <form action="{{ route('instructor.storeFormation') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row y-gap-60">
          <div class="col-12">
            <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100">
              <div class="d-flex items-center py-20 px-30 border-bottom-light">
                <h2 class="text-17 lh-1 fw-500">Basic Information</h2>
              </div>

              <div class="py-30 px-30">
                <div class="contact-form row y-gap-30" >
                  <div class="col-12">
                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Titre de la formation*</label>
                    <input type="text" name="title" placeholder="Titre...">
                  </div>
                  <div class="col-12">
                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Objectif de la Formation*</label>
                    <textarea placeholder="Objectif..." name="short_description" rows="3"></textarea>
                  </div>
                  <div class="col-12">
                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Description de la Formation*</label>
                    <textarea id="editor" name="long_description" placeholder="Description..." rows="7"></textarea>
                  </div>
                  <script>
                    tinymce.init({
                      selector: '#editor',
                      plugins: 'directionality emoticons lists pagebreak preview table wordcount directionality help paste hr',
                      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline emoticons | alignleft aligncenter alignright alignjustify | bullist numlist ltr rtl | help',
                      tinycomments_mode: 'embedded',
                      promotion: false,
                      automatic_uploads: false,
                  });
                  </script>

                  <div class="col-md-6">
                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Exigences*</label>
                    <textarea placeholder="Description" name="requirements" rows="7"></textarea>
                  </div>

                  <div class="col-md-6">
                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Mots clefs</label>
                    <input type="text" name='tags_list' placeholder='write some tags'>
                    <script>
                      var tags = @json($tags);

                      var input = document.querySelector('input[name=tags_list]'),
                      tagify = new Tagify(input, {
                          whitelist : tags,
                          dropdown: {
                              position: "manual",
                              maxItems: Infinity,
                              maxTags: 5,
                              enabled: 0,
                              classname: "customSuggestionsList",
                          },
                          templates: {
                              dropdownItemNoMatch() {
                                  return `<div class='empty'>Nothing Found</div>`;
                              }
                          },
                          enforceWhitelist: true
                      })
                      tagify.on("dropdown:show", onSuggestionsListUpdate)
                            .on("dropdown:hide", onSuggestionsListHide)
                            .on('dropdown:scroll', onDropdownScroll)

                      renderSuggestionsList()
                      function onSuggestionsListUpdate({ detail:suggestionsElm }){
                          console.log(  suggestionsElm  )
                      }
                      function onSuggestionsListHide(){
                          console.log("hide dropdown")
                      }
                      function onDropdownScroll(e){
                          console.log(e.detail)
                      }
                      function renderSuggestionsList(){
                          tagify.dropdown.show() // load the list
                          tagify.DOM.scope.parentNode.appendChild(tagify.DOM.dropdown)
                      }

                    </script>
                    <style>
                      tags, .same-input {
                        border: 0;
                        outline: none;
                        width: 100%;
                        background-color: transparent;
                        border-radius: 8px;
                        border: 1px solid #DDDDDD;
                        font-size: 15px;
                        line-height: 1.5;
                        padding: 15px 22px;
                        transition: all 0.15s cubic-bezier(0.165, 0.84, 0.44, 1);
                      }
                      .tagify__dropdown__wrapper {
                        max-height: 150px !important;
                        border: 1px solid #DDDDDD;
                      }
                    </style>
                  </div>

                  <div class="col-md-12">
                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Categorie*</label>
                    <select class="form-select" name="category_id" aria-label="Default select example">
                      <option selected disabled>Selectioner une categorie</option>
                      @foreach ($categories as $category)
                      <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="col-md-6">
                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Start Date*</label>
                    <input type="text" id="datetime-picker-start" name="start_date" >
                  </div>

                  <div class="col-md-6">
                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">End Date*</label>
                    <input type="text" id="datetime-picker-end" name="end_date">
                  </div>

                  <script>
                    let minDate = new Date();
                    minDate.setDate(minDate.getDate() + 2);
                    flatpickr('#datetime-picker-start', {
                        enableTime: true,
                        dateFormat: "Y-m-d H:i",
                        locale: "fr",
                        time_24hr: true,
                        minDate: minDate
                    });
                    flatpickr('#datetime-picker-end', {
                        enableTime: true,
                        dateFormat: "Y-m-d H:i",
                        locale: "fr",
                        time_24hr: true,
                        minDate: minDate
                    });
                  </script>

                  <div class="col-md-6">
                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Total places*</label>
                    <input class="same-input" name="total_seats" type="number" placeholder="Select" min="1">
                  </div>
                  
                  <div class="col-md-6" style="position: relative">
                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Prix*</label>
                    <input class="same-input" id="priceInput" name="price" type="number" min="0" placeholder="0" style="padding-left: 60px">
                    <span class="currency">DZD</span>
                    <style>
                      .currency {
                        position: absolute;
                        top: 53%;
                        left: 38px;
                      }
                    </style>
                  </div>

                  <div class="col-md-6">
                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Minimum places*</label>
                    <input class="same-input" name="min_seats" type="number" placeholder="Select" min="1">
                  </div>

                  <div class="col-md-6">
                    <h4 class="text-16 lh-1 fw-500 text-dark-1 mb-10">So Formation will get approved</h4>
                  </div>

                  <div class="col-md-6">
                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Wilaya*</label>
                    <select class="form-select" name="wilaya_id" aria-label="Default select example">
                      <option selected disabled>Selectioner lieu de la formation</option>
                      @foreach ($wilayas as $wilaya)
                      <option value="{{ $wilaya['id'] }}">{{ $wilaya['name'] }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Address*</label>
                    <input type="text" name="address" placeholder="rue - region - ">
                  </div>

                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="certificate" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                      Formation avee Certificate
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>

          
          <div class="col-12">
            <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100">
              <div class="d-flex items-center py-20 px-30 border-bottom-light">
                <h2 class="text-17 lh-1 fw-500">Media</h2>
              </div>

              <div class="py-30 px-30">
                <div class="row y-gap-50">
                  <div class="col-12">
                    <div class="contact-form d-flex lg:flex-column">
                      <div class=" shrink-0">
                        <img src="{{ asset('img/dashboard/media/2.png') }}" alt="image" id="imagePreview" style="max-width: 300px !important;
                        object-fit: cover;">
                      </div>
                      <div class="w-1/1 ml-30 lg:ml-0 lg:mt-20">
                        <div class="form-upload col-12">
                          <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Course thumbnail*</label>
                          <div class="form-upload__wrap">
                            <input type="file" id="imageUpload" name="image" style="display: none;" accept="image/*" >
                            <label for="imageUpload" class="btn btn-primary" id="upload-button">Upload File</label>
                            <p id="file-name">No file chosen</p>
                            <script>
                              var fileInput = document.getElementById('imageUpload');
                              var preview = document.getElementById('imagePreview');
                              var cropper;
                              
                              fileInput.addEventListener('change', function (e) {
                                  var file = e.target.files[0];
                                  var reader = new FileReader();
                                  if (cropper) {
                                    cropper.destroy();
                                  }
                                  reader.onload = function(e) {
                                      preview.src = e.target.result;
                                      cropper = new Cropper(preview, {
                                          aspectRatio: 1, // Change this to the aspect ratio you want
                                          crop: function(event) {
                                              //console.log(event.detail.x);
                                              //console.log(event.detail.y);
                                              //console.log(event.detail.width);
                                              //console.log(event.detail.height);
                                              //console.log(event.detail.rotate);
                                              //console.log(event.detail.scaleX);
                                              //console.log(event.detail.scaleY);
                                          }
                                      });
                                  };
                              
                                  reader.readAsDataURL(file);
                              });
                            </script>
                              
                            <style>
                              #upload-button {
                                padding: 10px 20px;
                                color: white;
                                background-color: blue;
                                cursor: pointer;
                              }

                              #file-name {
                                margin-top: 10px;
                              }
                            </style>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row y-gap-20 justify-between pt-15">
                  <div style="flex: 1">
                    <button class="button -md -purple-1 text-white" style="width: 100%">Poster cette Formation</button>
                  </div>
                  {{--
                  <div class="col-auto">
                    <button class="button -md -outline-purple-1 text-purple-1">Preview</button>
                  </div>
                  --}}
                </div>
            </div>
          </div>
        </div>
      </form>
    </div>
    
@endsection

{{--
<div class="col-12">
  <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100">
    <div class="d-flex items-center py-20 px-30 border-bottom-light">
      <h2 class="text-17 lh-1 fw-500">Curriculum</h2>
    </div>

    <div class="py-30 px-30">
      <div class="row">
        <div class="col-12">
          <h4 class="text-16 lh-1 fw-500">Introduction to JavaScript</h4>
        </div>

        <div class="col-12">
          <div class="accordion -block-2 text-left js-accordion">

            <div class="accordion__item -dark-bg-dark-1 mt-10">
              <div class="accordion__button py-20 px-30 bg-light-4">
                <div class="d-flex items-center">
                  <div class="icon icon-drag mr-10"></div>
                  <span class="text-16 lh-14 fw-500 text-dark-1">Introduction</span>
                </div>

                <div class="d-flex x-gap-10 items-center">
                  <a href="#" class="icon icon-edit mr-5"></a>
                  <a href="#" class="icon icon-bin"></a>
                  <div class="accordion__icon mr-0">
                    <div class="d-flex items-center justify-center icon icon-chevron-down"></div>
                    <div class="d-flex items-center justify-center icon icon-chevron-up"></div>
                  </div>
                </div>
              </div>

              <div class="accordion__content">
                <div class="accordion__content__inner px-30 py-30">
                  <div class="d-flex x-gap-10 y-gap-10 flex-wrap">
                    <div>
                      <a href="#" class="button -sm py-15 -purple-3 text-purple-1 fw-500">Add Article +</a>
                    </div>
                    <div>
                      <a href="#" class="button -sm py-15 -purple-3 text-purple-1 fw-500">Add Article +</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="row y-gap-20 justify-between pt-30">
        <div class="col-auto sm:w-1/1">
          <button class="button -md -outline-purple-1 text-purple-1 sm:w-1/1">Prev</button>
        </div>

        <div class="col-auto sm:w-1/1">
          <button class="button -md -purple-1 text-white sm:w-1/1">Next</button>
        </div>
      </div>
    </div>
  </div>
</div>
--}}
