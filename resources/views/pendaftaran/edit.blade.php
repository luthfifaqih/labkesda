@extends('master')

@section('dashboard')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <div id="kt_content_container" class="container-xxl">
                <div class="card">
                    <div class="card-body bg-white" style="border-radius: 5px">
                        <!--begin::Form-->
                        <form id="kt_docs_formvalidation_text" class="form"
                            action="{{ url('pendaftaran', $pendaftaran->id) }}" autocomplete="off" method="POST">
                            @csrf
                            @method('PUT')
                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">Nama</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="name" class="form-control form-control-solid mb-3 mb-lg-0"
                                    placeholder="Masukan Nama" value="{{ $pendaftaran->name }}" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">Tempat Lahir</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="email" name="tempat_lahir"
                                    class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Masukan Email"
                                    value="{{ $pendaftaran->tempat_lahir }}" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">Alamat</label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <input type="text" name="alamat" class="form-control form-control-solid mb-3 mb-lg-0"
                                    placeholder="Masukan Alamat" value="{{ $pendaftaran->alamat }}" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group--->
                            {{-- <div class="fv-row mb-10">
                                <label class="required form-label fs-6 mb-2">Password</label>

                                <input class="form-control form-control-lg form-control-solid" type="password"
                                    placeholder="Masukan Password" name="password" autocomplete="off" />
                            </div>
                            <!--end::Input group--->

                            <!--begin::Input group--->
                            <div class="fv-row mb-10">
                                <label class="required form-label fs-6 mb-2">Konfirmasi Password</label>

                                <input class="form-control form-control-lg form-control-solid" type="password"
                                    placeholder="Masukan Password" name="password_confirm" autocomplete="off" />
                            </div>
                            <!--end::Input group---> --}}

                            <!--begin::Actions-->
                            <button id="kt_docs_formvalidation_text_submit" type="submit" class="btn btn-primary">
                                <span class="indicator-label">
                                    Daftar
                                </span>
                                <span class="indicator-progress">
                                    Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                </span>
                            </button>
                            <!--end::Actions-->
                            <!--begin::Actions-->
                            <a href="{{ route('pendaftaran.index') }}" id="kt_docs_formvalidation_text_submit"
                                type="submit" class="btn btn-danger">
                                <span class="indicator-label">
                                    Batal
                                </span>
                                <span class="indicator-progress">
                                    Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                </span>
                            </a>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                        <script>
                            // Define form element
                            const form = document.getElementById('kt_docs_formvalidation_text');

                            // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
                            var validator = FormValidation.formValidation(
                                form, {
                                    fields: {
                                        'name': {
                                            validators: {
                                                notEmpty: {
                                                    message: 'Nama input is required'
                                                }
                                            }
                                        },
                                        'tempat_lahir': {
                                            validators: {
                                                notEmpty: {
                                                    message: 'Tempat Lahir input is required'
                                                }
                                            }
                                        },
                                        'alamat': {
                                            validators: {
                                                notEmpty: {
                                                    message: 'Alamat input is required'
                                                }
                                            }
                                        },
                                    },

                                    plugins: {
                                        trigger: new FormValidation.plugins.Trigger(),
                                        bootstrap: new FormValidation.plugins.Bootstrap5({
                                            rowSelector: '.fv-row',
                                            eleInvalidClass: '',
                                            eleValidClass: ''
                                        })
                                    }
                                }
                            );

                            // Submit button handler
                            const submitButton = document.getElementById('kt_docs_formvalidation_text_submit');
                            submitButton.addEventListener('click', function(e) {
                                // Prevent default button action
                                e.preventDefault();

                                // Validate form before submit
                                if (validator) {
                                    validator.validate().then(function(status) {
                                        console.log('validated!');

                                        if (status == 'Valid') {
                                            // Show loading indication
                                            submitButton.setAttribute('data-kt-indicator', 'on');

                                            // Disable button to avoid multiple click
                                            submitButton.disabled = true;

                                            // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                                            setTimeout(function() {
                                                // Remove loading indication
                                                submitButton.removeAttribute('data-kt-indicator');

                                                // Enable button
                                                submitButton.disabled = false;

                                                // Show popup confirmation
                                                Swal.fire({
                                                    text: "Form has been successfully submitted!",
                                                    icon: "success",
                                                    buttonsStyling: false,
                                                    confirmButtonText: "Ok, got it!",
                                                    customClass: {
                                                        confirmButton: "btn btn-primary"
                                                    }
                                                });

                                                form.submit(); // Submit form
                                            }, 2000);
                                        }
                                    });
                                }
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
