@extends('back.layouts.master')
@section('title','Sistem Ayarları')
@section('content')
<div id="kt_app_content" class="app-content flex-column-fluid mt-5">
    <div id="kt_app_content_container" class="app-container w-100">
        <div class="card card-bordered">
            <div class="card-header">
                <div class="card-title m-0">
                    <h3 class="fw-bolder m-0">Sistem Bilgileriniz
                        <div class="fs-8 text-gray-600 mt-1">Sistem bilgilerinizi bu bölümden düzenleyebilirsiniz.</div>
                    </h3>
                </div>
            </div>
            <div id="kt_account_profile_details" class="collapse show">
                <form class="form needs-validation" method="post" action="{{route('setting.update')}}" enctype="multipart/form-data" autocomplete="off">
                    @method('PUT')
                    @csrf
                    <div class="card-body border-top p-9">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item mb-5">
                                <h2 class="accordion-header">
                                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseZero" aria-expanded="true" aria-controls="collapseOne">
                                   İletişim Bilgileri
                                  </button>
                                </h2>
                                <div id="collapseZero" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                      <div class="fv-row mb-3">
                                          <label class="form-label fw-bolder text-dark fs-6">E-posta Adresi</label>
                                          <input
                                              class="form-control form-control-lg bg-transparent @error('email') is-invalid @enderror"
                                              type="email" name="email" value="{{ old('email') ?? $setting->email }}"
                                              required />
                                          @error('email')
                                              <div class="invalid-feedback d-block text-danger f-11">{{ $message }}
                                              </div>
                                          @enderror
                                      </div>
                                      <div class="fv-row mb-3">
                                          <label class="form-label fw-bolder text-dark fs-6">Telefon Numarası</label>
                                          <input
                                              class="form-control form-control-lg bg-transparent @error('phone') is-invalid @enderror"
                                              type="text" name="phone" value="{{ old('phone') ?? $setting->phone }}"
                                              required />
                                          @error('phone')
                                              <div class="invalid-feedback d-block text-danger f-11">{{ $message }}
                                              </div>
                                          @enderror
                                      </div>
                                      <div class="fv-row mb-3">
                                          <label class="form-label fw-bolder text-dark fs-6">Adres</label>
                                          <input
                                              class="form-control form-control-lg bg-transparent @error('adress') is-invalid @enderror"
                                              type="text" name="adress" value="{{ old('adress') ?? $setting->adress }}"/>
                                          @error('adress')
                                              <div class="invalid-feedback d-block text-danger f-11">{{ $message }}
                                              </div>
                                          @enderror
                                      </div>
                                      <div class="fv-row mb-3">
                                          <label class="form-label fw-bolder text-dark fs-6">Harita Url</label>
                                          <input
                                              class="form-control form-control-lg bg-transparent @error('map') is-invalid @enderror"
                                              type="text" name="map" value="{{ old('map') ?? $setting->map }}" />
                                          @error('map')
                                              <div class="invalid-feedback d-block text-danger f-11">{{ $message }}
                                              </div>
                                          @enderror
                                      </div>
                                  </div>
                                </div>
                              </div>
                            <div class="accordion-item mb-5">
                              <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                 Sosyal Medya Hesapları
                                </button>
                              </h2>
                              <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="fv-row mb-3">
                                        <label class="form-label fw-bolder text-dark fs-6">Facebook</label>
                                        <input
                                            class="form-control form-control-lg bg-transparent @error('facebook') is-invalid @enderror"
                                            type="text" name="facebook" value="{{ old('facebook') ?? $setting->facebook }}"
                                            required />
                                        @error('facebook')
                                            <div class="invalid-feedback d-block text-danger f-11">{{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="fv-row mb-3">
                                        <label class="form-label fw-bolder text-dark fs-6">Twitter</label>
                                        <input
                                            class="form-control form-control-lg bg-transparent @error('twitter') is-invalid @enderror"
                                            type="text" name="twitter" value="{{ old('twitter') ?? $setting->twitter }}"
                                            required />
                                        @error('twitter')
                                            <div class="invalid-feedback d-block text-danger f-11">{{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="fv-row mb-3">
                                        <label class="form-label fw-bolder text-dark fs-6">İnstagram</label>
                                        <input
                                            class="form-control form-control-lg bg-transparent @error('instagram') is-invalid @enderror"
                                            type="text" name="instagram" value="{{ old('instagram') ?? $setting->instagram }}"/>
                                        @error('instagram')
                                            <div class="invalid-feedback d-block text-danger f-11">{{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="fv-row mb-3">
                                        <label class="form-label fw-bolder text-dark fs-6">Linkedin</label>
                                        <input
                                            class="form-control form-control-lg bg-transparent @error('linkedin') is-invalid @enderror"
                                            type="text" name="linkedin" value="{{ old('linkedin') ?? $setting->linkedin }}" />
                                        @error('linkedin')
                                            <div class="invalid-feedback d-block text-danger f-11">{{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="fv-row mb-3">
                                        <label class="form-label fw-bolder text-dark fs-6">Youtube</label>
                                        <input
                                            class="form-control form-control-lg bg-transparent @error('youtube') is-invalid @enderror"
                                            type="text" name="youtube" value="{{ old('youtube') ?? $setting->youtube }}" />
                                        @error('youtube')
                                            <div class="invalid-feedback d-block text-danger f-11">{{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                              </div>
                            </div>
                              <div class="accordion-item mb-5">
                                <h2 class="accordion-header">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    SEO (Genel SEO Özel Meta)
                                  </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                      <div class="fv-row mb-3">
                                          <label class="form-label fw-bolder text-dark fs-6">Sayfa Başlığı</label>
                                          <input
                                              class="form-control form-control-lg bg-transparent @error('seo_title') is-invalid @enderror"
                                              type="text" name="seo_title" value="{{ old('seo_title') ?? $setting->seo_title }}"/>
                                          @error('seo_title')
                                              <div class="invalid-feedback d-block text-danger f-11">{{ $message }}
                                              </div>
                                          @enderror
                                      </div>
                                      <div class="fv-row mb-3">
                                          <label class="form-label fw-bolder text-dark fs-6">Meta Keywords - 7-8 kelime, virgül ile ayıralım</label>
                                          <input
                                              class="form-control form-control-lg bg-transparent @error('seo_keywords') is-invalid @enderror"
                                              type="text" name="seo_keywords" value="{{ old('seo_keywords') ?? $setting->seo_keywords }}"/>
                                          @error('seo_keywords')
                                              <div class="invalid-feedback d-block text-danger f-11">{{ $message }}
                                              </div>
                                          @enderror
                                      </div>
                                      <div class="fv-row mb-3">
                                        <label class="form-label fw-bolder text-dark fs-6">Meta Açıklaması - 180 kelime en fazla</label>
                                       <textarea name="seo_description" class="form-control"  cols="30" rows="10">{{ old('seo_description') ?? $setting->seo_description }}</textarea>
                                        @error('seo_description')
                                            <div class="invalid-feedback d-block text-danger f-11">{{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                        @if(session()->has('success'))
                        <div class="alert alert-success d-flex align-items-center p-5 ">
                            <span class="svg-icon svg-icon-2hx svg-icon-success me-4">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="currentColor"></path>
                                    <path d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z" fill="currentColor"></path>
                                </svg>
                            </span>
                            <div class="d-flex flex-column">
                                <h4 class="mb-1 text-success">İşlem Başarılı.</h4>
                                <span>{{session()->get('success')}}</span>
                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <button type="submit" class="btn btn-primary">Sistem Bilgilerini Kaydet</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection