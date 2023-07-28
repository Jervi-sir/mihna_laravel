@extends('instructor.layouts.master')

@section('script-top')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>

@endsection
@section('content')
<div class="row pb-50 mb-10">
    <div class="col-auto">

      <h1 class="text-30 lh-12 fw-700">Settings</h1>
      <div class="mt-10">Lorem ipsum dolor sit amet, consectetur.</div>

    </div>
  </div>


  <div class="row y-gap-30">
    <div class="col-12">
      <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100">
        <div class="tabs -active-purple-2 js-tabs pt-0">
          <div class="tabs__controls d-flex x-gap-30 items-center pt-20 px-30 border-bottom-light js-tabs-controls">
            <button class="tabs__button text-light-1 js-tabs-button is-active" data-tab-target=".-tab-item-1" type="button">
              Edit Profile
            </button>
            <button class="tabs__button text-light-1 js-tabs-button" data-tab-target=".-tab-item-2" type="button">
              Password
            </button>
            <button class="tabs__button text-light-1 js-tabs-button" data-tab-target=".-tab-item-3" type="button">
              Social Profiles
            </button>
            {{--
              <button class="tabs__button text-light-1 js-tabs-button" data-tab-target=".-tab-item-4" type="button">
              Notifications
            </button>
            --}}
            <button class="tabs__button text-light-1 js-tabs-button" data-tab-target=".-tab-item-5" type="button">
              Report an Issue
            </button>
          </div>

          <div class="tabs__content py-30 px-30 js-tabs-content">
            {{-- Tab1 Edit Profile --}}
            <div class="tabs__pane -tab-item-1 is-active">
              <form action="{{ route('instructor.updateProfile')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row y-gap-20 x-gap-20 items-center">
                  <div class="contact-form d-flex lg:flex-column">
                    <div class=" shrink-0">
                      <img src="{{ asset('img/dashboard/media/2.png') }}" alt="image" id="imagePreview" style="max-width: 300px !important;
                      object-fit: cover;">
                    </div>
                    <div class="w-1/1 ml-30 lg:ml-0 lg:mt-20">
                      <div class="form-upload col-12">
                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Course thumbnail*</label>
                        <div class="form-upload__wrap">
                          <input type="file" id="imageUpload" name="profile_pic" style="display: none;" accept="image/*" >
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
                                      viewMode: 1,
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
              

                <div class="border-top-light pt-30 mt-30">
                  <div class="contact-form row y-gap-30">
                    <div class="col-md-12">
                      <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Your School Name</label>
                      <input type="text" name="school_name" placeholder="Your School Name">
                    </div>
                    <div class="col-md-6">
                      <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Phone</label>
                      <input type="text" name="phone_number" placeholder="Phone" value="{{ $user['phone_number'] }}">
                    </div>
                    <div class="col-md-6">
                      <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Email</label>
                      <input type="text"  placeholder="email" value="{{ $user['email'] }}" disabled>
                    </div>
                    <div class="col-md-6">
                      <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Address</label>
                      <input type="text" placeholder="Address Line 1">
                    </div>
                    <div class="col-md-6">
                      <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Wilaya</label>
                      <select class="form-select" name="wilaya_id" aria-label="Default select example">
                        <option selected disabled>Selectioner lieu de la formation</option>
                        @foreach ($wilayas as $wilaya)
                        <option value="{{ $wilaya['id'] }}">{{ $wilaya['name'] }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="col-12">
                      <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Description</label>
                      <textarea name="description" placeholder="Description..." rows="7"></textarea>
                    </div>

                    <div class="col-12">
                      <button class="button -md -purple-1 text-white">Update Profile</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>

            {{-- Tab2 Password Profile --}}
            <div class="tabs__pane -tab-item-2">
              <form action="{{ route('instructor.updatePassword')}}" method="POST" class="contact-form row y-gap-30">
                @csrf
                <div class="col-md-7">

                  <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Current password</label>

                  <input type="text" placeholder="Current password">
                </div>


                <div class="col-md-7">

                  <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">New password</label>

                  <input type="text" placeholder="New password">
                </div>


                <div class="col-md-7">

                  <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Confirm New Password</label>

                  <input type="text" placeholder="Confirm New Password">
                </div>

                <div class="col-12">
                  <button class="button -md -purple-1 text-white">Save Password</button>
                </div>
              </form>
            </div>

            {{-- Tab3 Social Profile Profile --}}
            <div class="tabs__pane -tab-item-3">
              @php
                  $social_media = json_decode($user['social_list'], true);
              @endphp
              <form action="{{ route('instructor.updateSocial')}}" method="POST" class="contact-form row y-gap-30">
                @csrf
                <div class="col-md-6">
                  <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Facebook</label>
                  <input type="text" name="facebook" value="{{ $social_media['facebook'] }}" placeholder="Facebook Profile">
                </div>
                <div class="col-md-6">
                  <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Instagram</label>
                  <input type="text" name="instagram" value="{{ $social_media['instagram'] }}" placeholder="Instagram Profile">
                </div>
                <div class="col-md-6">
                  <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Twitter</label>
                  <input type="text" name="twitter" value="{{ $social_media['twitter'] }}" placeholder="Twitter Profile">
                </div>
                <div class="col-md-6">
                  <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">LinkedIn</label>
                  <input type="text" name="linkedin" value="{{ $social_media['linkedin'] }}" placeholder="LinkedIn Profile">
                </div>
                <div class="col-md-6">
                  <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Youtube Channel</label>
                  <input type="text" name="youtube" value="{{ $social_media['youtube'] }}" placeholder="LinkedIn Profile">
                </div>

                <div class="col-12">
                  <button class="button -md -purple-1 text-white">Save Social Profile</button>
                </div>
              </form>
            </div>

            {{-- Tab4 Notification Profile 
            <div class="tabs__pane -tab-item-4">
              <form action="#" class="contact-form">
                <div class="row">
                  <div class="col-12">
                    <div class="text-16 fw-500 text-dark-1">Notifications - Choose when and how to be notified</div>
                    <p class="text-14 lh-13 mt-5">Select push and email notifications you'd like to receive</p>
                  </div>
                </div>

                <div class="pt-60">
                  <div class="row y-gap-20 justify-between">
                    <div class="col-auto">
                      <div class="text-16 fw-500 text-dark-1">Choose when and how to be notified</div>
                    </div>
                  </div>


                  <div class="pt-30">

                    <div class="row y-gap-20 justify-between">
                      <div class="col-auto">
                        <div class="text-16 fw-500 text-dark-1">Subscriptions</div>
                        <p class="text-14 lh-13 mt-5">Notify me about activity from the profiles I'm subscribed to</p>
                      </div>
                      <div class="col-auto">
                        <div class="form-switch">
                          <div class="switch" data-switch=".js-switch-content">
                            <input type="checkbox">
                            <span class="switch__slider"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="border-top-light pt-20 mt-20">

                    <div class="row y-gap-20 justify-between">
                      <div class="col-auto">
                        <div class="text-16 fw-500 text-dark-1">Recommended Courses</div>
                        <p class="text-14 lh-13 mt-5">Notify me about activity from the profiles I'm subscribed to</p>
                      </div>
                      <div class="col-auto">
                        <div class="form-switch">
                          <div class="switch" data-switch=".js-switch-content">
                            <input type="checkbox">
                            <span class="switch__slider"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="border-top-light pt-20 mt-20">

                    <div class="row y-gap-20 justify-between">
                      <div class="col-auto">
                        <div class="text-16 fw-500 text-dark-1">Replies to my comments</div>
                        <p class="text-14 lh-13 mt-5">Notify me about activity from the profiles I'm subscribed to</p>
                      </div>
                      <div class="col-auto">
                        <div class="form-switch">
                          <div class="switch" data-switch=".js-switch-content">
                            <input type="checkbox">
                            <span class="switch__slider"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="border-top-light pt-20 mt-20">

                    <div class="row y-gap-20 justify-between">
                      <div class="col-auto">
                        <div class="text-16 fw-500 text-dark-1">Activity on my comments</div>
                        <p class="text-14 lh-13 mt-5">Notify me about activity from the profiles I'm subscribed to</p>
                      </div>
                      <div class="col-auto">
                        <div class="form-switch">
                          <div class="switch" data-switch=".js-switch-content">
                            <input type="checkbox">
                            <span class="switch__slider"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

                <div class="pt-60">
                  <div class="row y-gap-20 justify-between">
                    <div class="col-auto">
                      <div class="text-16 fw-500 text-dark-1">Email notifications</div>
                    </div>
                  </div>


                  <div class="pt-30">

                    <div class="row y-gap-20 justify-between">
                      <div class="col-auto">
                        <div class="text-16 fw-500 text-dark-1">Send me emails about my Cursus activity and updates I requested</div>
                        <p class="text-14 lh-13 mt-5">Notify me about activity from the profiles I'm subscribed to</p>
                      </div>
                      <div class="col-auto">
                        <div class="form-switch">
                          <div class="switch" data-switch=".js-switch-content">
                            <input type="checkbox">
                            <span class="switch__slider"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="border-top-light pt-20 mt-20">

                    <div class="row y-gap-20 justify-between">
                      <div class="col-auto">
                        <div class="text-16 fw-500 text-dark-1">Promotions, course recommendations, and helpful resources from Cursus.</div>
                        <p class="text-14 lh-13 mt-5">Notify me about activity from the profiles I'm subscribed to</p>
                      </div>
                      <div class="col-auto">
                        <div class="form-switch">
                          <div class="switch" data-switch=".js-switch-content">
                            <input type="checkbox">
                            <span class="switch__slider"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="border-top-light pt-20 mt-20">

                    <div class="row y-gap-20 justify-between">
                      <div class="col-auto">
                        <div class="text-16 fw-500 text-dark-1">Announcements from instructors whose course(s) I’m enrolled in.</div>
                        <p class="text-14 lh-13 mt-5">Notify me about activity from the profiles I'm subscribed to</p>
                      </div>
                      <div class="col-auto">
                        <div class="form-switch">
                          <div class="switch" data-switch=".js-switch-content">
                            <input type="checkbox">
                            <span class="switch__slider"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

                <div class="row pt-30">
                  <div class="col-12">
                    <button class="button -md -purple-1 text-white">Save Changes</button>
                  </div>
                </div>
              </form>
            </div>
            --}}
            {{-- Tab5 Close Account Profile --}}
            <div class="tabs__pane -tab-item-5">
              <form action="{{ route('instructor.reportIssue') }}" method="POST" class="contact-form row y-gap-30">
                @csrf
                <div class="col-12">
                  <div class="text-16 fw-500 text-dark-1">Report an issue you have encountered</div>
                  <p class="mt-10">We might contact you if the issue is severe.</p>
                </div>
                <div class="col-md-7">
                  <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Email:</label>
                  <input type="text" value="{{ $user['email']}}" name="email" placeholder="Describe the issue..." >
                </div>
                <div class="col-md-7">
                  <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Issue:</label>
                  <textarea name="description" placeholder="Describe the issue..." rows="7"></textarea>
                </div>
                <div class="col-12">
                  <button class="button -md -purple-1 text-white">Send the report</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection