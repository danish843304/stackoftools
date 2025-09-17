<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from eduport.webestica.com/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 May 2025 17:12:24 GMT -->
<head>
	<title>{{ $title }}</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Webestica.com">
	<meta name="description" content="Eduport- LMS, Education and Course Theme">

	<!-- Dark mode -->
	<script>
		const storedTheme = localStorage.getItem('theme')
 
		const getPreferredTheme = () => {
			if (storedTheme) {
				return storedTheme
			}
			return window.matchMedia('(prefers-color-scheme: light)').matches ? 'light' : 'light'
		}

		const setTheme = function (theme) {
			if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
				document.documentElement.setAttribute('data-bs-theme', 'dark')
			} else {
				document.documentElement.setAttribute('data-bs-theme', theme)
			}
		}

		setTheme(getPreferredTheme())

		window.addEventListener('DOMContentLoaded', () => {
		    var el = document.querySelector('.theme-icon-active');
			if(el != 'undefined' && el != null) {
				const showActiveTheme = theme => {
				const activeThemeIcon = document.querySelector('.theme-icon-active use')
				const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
				const svgOfActiveBtn = btnToActive.querySelector('.mode-switch use').getAttribute('href')

				document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
					element.classList.remove('active')
				})

				btnToActive.classList.add('active')
				activeThemeIcon.setAttribute('href', svgOfActiveBtn)
			}

			window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
				if (storedTheme !== 'light' || storedTheme !== 'dark') {
					setTheme(getPreferredTheme())
				}
			})

			showActiveTheme(getPreferredTheme())

			document.querySelectorAll('[data-bs-theme-value]')
				.forEach(toggle => {
					toggle.addEventListener('click', () => {
						const theme = toggle.getAttribute('data-bs-theme-value')
						localStorage.setItem('theme', theme)
						setTheme(theme)
						showActiveTheme(theme)
					})
				})

			}
		})
		
	</script>

	<!-- Favicon -->
	<link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&amp;family=Roboto:wght@400;500;700&amp;display=swap">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/font-awesome/css/all.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/tiny-slider/tiny-slider.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/glightbox/css/glightbox.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/aos/aos.css') }}">

	<!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
	<style>
		.display-5 {
			font-size: 2.5rem !important;
		}
		@media (min-width: 1200px) {
			.navbar-expand-xl .navbar-brand .navbar-brand-item {
				height: 130px;
				display: block;
				width: auto;
			}
		}
		@media (min-width: 1200px) {
			header.navbar-sticky-on .navbar-brand .navbar-brand-item {
				height: 130px;
			}
		}
	</style>

</head>

<body>

<!-- Header START -->
@include('users/layout/header')
<!-- Header END -->

<!-- **************** MAIN CONTENT START **************** -->
<main>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>	
@yield('content')

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- =======================
Footer START -->
@include('users/layout/footer')
<!-- =======================
Footer END -->

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>
<!-- Bootstrap JS -->
<script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

<!-- Vendors -->
<script src="{{ asset('assets/vendor/tiny-slider/tiny-slider.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.js') }}"></script>
<script src="{{ asset('assets/vendor/purecounterjs/dist/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>

<!-- Template Functions -->
<script src="{{ asset('assets/js/functions.js') }}"></script>
<script>
  const copyBtn = document.getElementById('copyOutputBtn');
  const outputBox = document.getElementById('outputText');

  copyBtn.addEventListener('click', function () {
    const text = outputBox.innerText.trim();

	if(text == ''){
		return;
	}

    if (!text) return;

    navigator.clipboard.writeText(text).then(() => {
      this.innerHTML = 'Copied';
      setTimeout(() => {
        this.innerHTML = '<i class="fas fa-copy"></i> Copy';
      }, 1500);
    }).catch(err => {
      alert('Failed to copy: ' + err);
    });
  });
</script>
</body>

<!-- Mirrored from eduport.webestica.com/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 May 2025 17:12:31 GMT -->
</html>