@extends('back.layouts.master')
@section('title', 'Anasayfa')
@section('content')
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <div class="d-flex flex-column flex-column-fluid">
            <div id="kt_app_content" class="app-content flex-column-fluid mt-5">
                <div id="kt_app_content_container" class="app-container container-fluid">
                    <div class="row">
                        <div class="col-md-4 mb-4 stretch-card transparent">
                            <div class="card rounded-sm card-dark-blue">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <p class="mb-4 fw-bold">TOPLAM BAŞVURU SAYISI</p>
                                            <p class="text-gray-400 mt-1 fw-semibold fs-6">0</p>
                                        </div>
                                        <div>
                                            <span class="svg-icon svg-icon-muted svg-icon-2hx">
                                                <i class="las la-globe fs-2qx"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4 stretch-card transparent">
                            <div class="card rounded-sm card-dark-blue">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <p class="mb-4 fw-bold">ÖDEME YAPILAN BAŞVURU SAYISI</p>
                                            <p class="text-gray-400 mt-1 fw-semibold fs-6">0</p>
                                        </div>
                                        <div>
                                            <span class="svg-icon svg-icon-muted svg-icon-2hx">
                                                <i class="las la-credit-card fs-2qx"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4 stretch-card transparent">
                            <div class="card rounded-sm card-dark-blue">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <p class="mb-4 fw-bold">ÖDEMESİ YAPILMAYAN BAŞVURU SAYISI</p>
                                            <p class="text-gray-400 mt-1 fw-semibold fs-6">0</p>
                                        </div>
                                        <div>
                                            <span class="svg-icon svg-icon-muted svg-icon-2hx">
                                                <i class="las la-history fs-2qx"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card card-flush">
                        <div class="card-header align-items-center d-flex align-items-center">
                            <div class="card-title">
                                <div class="d-flex align-items-center position-relative my-1">
                                    <span class="svg-icon svg-icon-1 position-absolute ms-4">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor"></rect>
                                            <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor"></path>
                                        </svg>
                                    </span>
                                    <input type="text" data-kt-filter="search" class="form-control form-control-sm form-control-solid md-w-250px w-200px ps-14" placeholder="Ara.." />
                                </div>
                                <div id="kt_datatable_example_1_export" class="d-none"></div>
                            </div>
                            <div class="card-toolbar flex-row-fluid justify-content-end gap-5 d-none d-md-grid">
                                <button type="button" class="btn btn-sm btn-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <span class="svg-icon svg-icon-2"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.3" width="12" height="2" rx="1" transform="matrix(0 -1 -1 0 12.75 19.75)" fill="currentColor"></rect>
                                            <path d="M12.0573 17.8813L13.5203 16.1256C13.9121 15.6554 14.6232 15.6232 15.056 16.056C15.4457 16.4457 15.4641 17.0716 15.0979 17.4836L12.4974 20.4092C12.0996 20.8567 11.4004 20.8567 11.0026 20.4092L8.40206 17.4836C8.0359 17.0716 8.0543 16.4457 8.44401 16.056C8.87683 15.6232 9.58785 15.6554 9.9797 16.1256L11.4427 17.8813C11.6026 18.0732 11.8974 18.0732 12.0573 17.8813Z" fill="currentColor"></path>
                                            <path opacity="0.3" d="M18.75 15.75H17.75C17.1977 15.75 16.75 15.3023 16.75 14.75C16.75 14.1977 17.1977 13.75 17.75 13.75C18.3023 13.75 18.75 13.3023 18.75 12.75V5.75C18.75 5.19771 18.3023 4.75 17.75 4.75L5.75 4.75C5.19772 4.75 4.75 5.19771 4.75 5.75V12.75C4.75 13.3023 5.19771 13.75 5.75 13.75C6.30229 13.75 6.75 14.1977 6.75 14.75C6.75 15.3023 6.30229 15.75 5.75 15.75H4.75C3.64543 15.75 2.75 14.8546 2.75 13.75V4.75C2.75 3.64543 3.64543 2.75 4.75 2.75L18.75 2.75C19.8546 2.75 20.75 3.64543 20.75 4.75V13.75C20.75 14.8546 19.8546 15.75 18.75 15.75Z" fill="currentColor"></path>
                                        </svg>
                                    </span>
                                   Dışa aktar
                                </button>
                                <div id="kt_datatable_example_export_menu" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-export="copy">
                                            Panoya Kopyala
                                        </a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-export="excel">
                                            Excel olarak dışa aktarma
                                        </a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-export="csv">
                                            CSV olarak dışa aktarma
                                        </a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-export="pdf">
                                            PDF olarak dışa aktarma
                                        </a>
                                    </div>
                                </div>
                                <div id="kt_datatable_example_buttons" class="d-none"></div>
                            </div>
                        </div>
                        <div class="card-body">
                             <table class="table table-striped border rounded table-row-dashed fs-6  px-0 mx-0 overflow-x-scroll" id="kt_datatable_example">
                                 <thead class="py-12 px-2">
                                     <tr class="text-gray-700 fw-bold text-uppercase bg-light w-100 px-0 mx-0">
                                         <th class="text-start px-12">Ad Soyad</th>
                                         <th class="text-start px-12">E-posta Adresi</th>
                                         <th class="text-start px-12">Telefon Numarası</th>
                                         <th class="text-start px-12">Adres</th>
                                         <th class="text-start px-12">Durum</th>
                                         <th class="text-start px-12">Tarih</th>
                                     </tr>
                                 </thead>
                                 <tbody class="fw-semibold text-gray-600">
                                     <tr>
                                         <td class="text-start px-md-12 px-6 py-6">
                                           Cafer Güvenç
                                        </td>
                                        <td class="text-start px-md-12 px-6 py-6">
                                           cguvenc52@gmail.com
                                        </td>
                                        <td class="text-start px-md-12 px-6 py-6">
                                           +905050298283
                                        </td>
                                        <td class="text-start px-md-12 px-6 py-6">
                                            Şahinbey/Gaziantep
                                        </td>
                                         <td class="text-start px-md-12 px-6 py-6">
                                            <span class="badge badge-sm badge-light-success">Aktif</span>
                                        </td>
                                         <td class="text-start px-md-10 px-12 py-6">
                                           19 Kasım 2024
                                        </td>
                                     </tr>
                                 </tbody>
                             </table>
                        </div>
                    </div>
                </div>
            </div>
@endsection
@section('js')
<script src="{{ asset('assets/js/datatable.js') }}"></script>
@endsection