<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href="" />
    <title>@yield('title', $title) | SIMANIS</title>
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> --}}
    <script src="{{ asset('frontend/assets/plugins/global/plugins.bundle.js') }}"></script>
    <link href="{{ asset('frontend/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <meta charset="utf-8" />
    <meta name="description"
        content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords"
        content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="{{ asset('frontend/assets/media/logos/favicon.ico') }}" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    {{-- <link href="{{ asset('frontend/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" /> --}}
    <link href="{{ asset('frontend/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_body" class="auth-bg bgi-size-cover bgi-attachment-fixed bgi-position-center">
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;
        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }
            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>
    <!--end::Theme mode setup on page load-->
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page bg image-->
        <style>
            body {
                background-image: url('assets/media/auth/bg10.jpeg');
            }

            [data-bs-theme="dark"] body {
                background-image: url('assets/media/auth/bg10-dark.jpeg');
            }
        </style>
        <!--end::Page bg image-->
        <!--begin::Authentication - Sign-up -->
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <!--begin::Aside-->
            <div class="d-flex flex-lg-row-fluid" style="background-color: #181C32">
                <!--begin::Content-->
                <div class="d-flex flex-column flex-center pb-0 pb-lg-10 p-10 w-100">
                    <!--begin::Image-->
                    <img class="logo-default h-200px h-md-300px h-lg-350 mt-20 mt-n4"
                        src="https://diskominfokarawang.github.io/assetapp/bupati/a_2_compres.png" alt="" />
                    <!--end::Image-->
                    <h1 class="text-gray-200 fs-2qx fw-bold text-center mb-7">Labkesda</h1>
                    <!--end::Title-->
                    <!--begin::Text-->
                    <div class="text-gray-400 fs-base text-center fw-semibold">Laboratori Kesehatan Daerah
                    </div>
                    <!--end::Text-->
                </div>
                <!--end::Content-->
            </div>
            <!--begin::Aside-->
            <!--begin::Body-->
            <div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12">
                <!--begin::Wrapper-->
                <div class="bg-body d-flex flex-column flex-center rounded-4 w-md-600px p-10">
                    <!--begin::Content-->
                    <div class="d-flex flex-center flex-column align-items-stretch h-lg-100 w-md-400px">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-center flex-column flex-column-fluid pb-15 pb-lg-20">
                            <!--begin::Form-->
                            <form action="{{ route('actionregister') }}" method="POST" class="form w-100"
                                novalidate="novalidate" id="kt_sign_up_form">
                                <!--begin::Heading-->
                                <div class="text-center mb-11">
                                    <!--begin::Title-->
                                    <h1 class="text-dark fw-bolder mb-3">Pendaftaran akun</h1>
                                    <!--end::Title-->
                                    <!--begin::Subtitle-->
                                    <div class="text-gray-500 fw-semibold fs-6">Silahkan isi formulir berikut untuk
                                        daftar ke aplikasi
                                    </div>
                                    <!--end::Subtitle=-->
                                </div>
                                <!--begin::Separator-->
                                <div class="separator separator-dotted separator-content border-primary my-9">
                                    <i class="bi bi-patch-exclamation text-primary fs-2"></i>
                                </div>
                                <!--end::Separator-->
                                <!--begin::Heading-->
                                <form action="{{ route('actionregister') }}" method="POST" class="form w-100"
                                    novalidate="novalidate" id="kt_sign_up_form">
                                    @csrf
                                    <!--begin::Input group=-->
                                    <div class="fv-row mb-8">
                                        <!--begin::name-->
                                        <input type="text" placeholder="Masukan nama lengkap" name="name"
                                            autocomplete="off" class="form-control bg-transparent" />
                                        <!--end::name-->
                                    </div>
                                    <div class="fv-row mb-8">
                                        <!--begin::Email-->
                                        <input type="text" placeholder="Masukan Email" name="email"
                                            autocomplete="off" class="form-control bg-transparent" />
                                        <!--end::Email-->
                                    </div>
                                    <div class="fv-row mb-8">
                                        <!--begin::Email-->
                                        <input type="text" placeholder="Masukan Email" name="role" value="pers"
                                            autocomplete="off" class="form-control bg-transparent" readonly hidden
                                            required autofocus />
                                        <!--end::Email-->
                                    </div>
                                    <div class="mb-10 fv-row" data-kt-password-meter="true">
                                        <div class="fv-row mb-8">
                                            <!--begin:: Password-->
                                            <input placeholder=" Masukan kata sandi" name="password" type="password"
                                                autocomplete="off" class="form-control bg-transparent" />
                                            <!--end:: Password-->
                                            <!--begin::Meter-->
                                            <div class="d-flex align-items-center mb-3" style="margin-top: 2%;"
                                                data-kt-password-meter-control="highlight">
                                                <div
                                                    class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                                </div>
                                                <div
                                                    class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                                </div>
                                                <div
                                                    class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                                </div>
                                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px">
                                                </div>
                                            </div>
                                            <!--end::Meter-->
                                        </div>
                                        <!--end::Meter-->
                                        <!--begin::Hint-->
                                        <div class="text-muted mb-2" style="margin-top: -3%">
                                            Gunakan 8 karakter atau lebih dengan campuran huruf, angka & simbol.
                                        </div>
                                        <!--end::Hint-->
                                    </div>
                                    <!--end::Input group=-->
                                    {{-- Captcha --}}
                                    {{-- <div
                                        class="form-group d-flex flex-wrap justify-content-center align-items-center mb-1">
                                        {!! NoCaptcha::display() !!}
                                        {!! NoCaptcha::renderJs() !!}
                                        @error('g-recaptcha-response')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div> --}}

                                    {{-- Captcha --}}
                                    <!--begin::Submit button-->
                                    <div class="d-grid mb-10">
                                        <button id="kt_docs_formvalidation_text_submit" type="submit"
                                            class="btn btn-info">
                                            <span class="indicator-label">
                                                Daftar
                                            </span>
                                            <span class="indicator-progress">
                                                Please wait... <span
                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                            </span>
                                        </button>
                                    </div>
                                    <!--end::Submit button-->
                                    <!--begin::Sign up-->
                                    <div class="text-gray-500 text-center fw-semibold fs-6">Sudah mempunyai akun?
                                        <a href="#" class="link-info fw-semibold">Masuk</a>
                                    </div>
                                    <!--end::Sign up-->
                                </form>
                                <!--end::Form-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Authentication - Sign-up-->
    </div>
    <!--end::Root-->
    <!--end::Main-->

    <!--begin::Javascript-->
    <script>
        // Define form element
        const form = document.getElementById('kt_sign_up_form');

        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        var validator = FormValidation.formValidation(
            form, {
                fields: {
                    'name': {
                        validators: {
                            notEmpty: {
                                message: 'Masukan nama lengkap'
                            }
                        }
                    },
                    'email': {
                        validators: {
                            emailAddress: {
                                message: 'isian bukan bagian email yang valid'
                            },
                            notEmpty: {
                                message: 'Email wajib diisi'
                            }
                        }
                    },
                    'password': {
                        validators: {
                            notEmpty: {
                                message: 'Password harus diisi'
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

                            form.submit(); // Submit form
                            Swal.fire({
                                text: "Registrasi berhasil.",
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "OK",
                                customClass: {
                                    confirmButton: "btn btn-info"
                                }
                            }).then((result) => {
                                // Redirect ke halaman login setelah menutup alert
                                if (result.isConfirmed || result.isDismissed) {
                                    window.location.href = "{{ route('login') }}";
                                }
                            });
                        }, 2000);
                    }
                });
            }
        });
    </script>


    {{-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("kt_sign_up_form").addEventListener("submit", function(event) {
                event.preventDefault(); // Mencegah pengiriman formulir

                var name = document.getElementsByName("name")[0].value;
                var email = document.getElementsByName("email")[0].value;
                var password = document.getElementsByName("password")[0].value;
                var password_confirm = document.getElementsByName("password_confirm")[0].value;
                var captcha = grecaptcha.getResponse();

                if (name.trim() === '' || email.trim() === '' || password.trim() === '' || password_confirm
                    .trim() === '') {
                    // Tampilkan pesan error jika ada field yang kosong
                    Swal.fire({
                        title: "Peringatan",
                        text: "Nama, email, dan password harus diisi",
                        icon: "error"
                    });
                } else if (password !== password_confirm) {
                    // Tampilkan pesan error jika password dan konfirmasi password tidak sesuai
                    Swal.fire({
                        title: "Peringatan",
                        text: "Password dan konfirmasi password tidak sesuai",
                        icon: "error"
                    });
                } else if (captcha.length === 0) {
                    // Tampilkan pesan error jika captcha tidak dicentang
                    Swal.fire({
                        title: "Info",
                        text: "Captcha harus dicentang",
                        icon: "info"
                    });
                } else {
                    // Jika formulir diisi dengan benar, kirimkan formulir
                    // Anda bisa uncomment baris ini jika ingin mengirimkan formulir secara otomatis
                    this.submit();

                    // Tampilkan pesan sukses jika registrasi berhasil
                    Swal.fire({
                        title: "Berhasil",
                        text: "Registrasi berhasil. Harap cek berkala email untuk memverifikasi akun anda.",
                        icon: "success"
                    }).then((result) => {
                        // Redirect ke halaman login setelah menutup alert
                        if (result.isConfirmed || result.isDismissed) {
                            window.location.href = "{{ route('login') }}";
                        }
                    });
                }
            });
        });
    </script> --}}

    <script>
        var hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    {{-- <script src="{{ asset('frontend/assets/plugins/global/plugins.bundle.js') }}"></script> --}}
    <script src="{{ asset('frontend/assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{ asset('frontend/assets/plugins/custom/fslightbox/fslightbox.bundle.js') }}"></script>
    <script src="{{ asset('frontend/assets/plugins/custom/typedjs/typedjs.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('frontend/assets/js/custom/landing.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/custom/pages/pricing/general.js') }}"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->



</html>
