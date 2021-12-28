@extends('layout.app')

@section('content')
    <div id="wrapper" style="margin-top: 10em">
        <!-- Main -->
        <div id="main">
            <div class="inner">
                <h1>Mot du president</h1>
                <span class="image main"><img src="assets/images/pic13.jpg" alt="" /></span>
                <p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis. Praesent rutrum sem diam, vitae egestas enim auctor sit amet. Pellentesque leo mauris, consectetur id ipsum sit amet, fergiat. Pellentesque in mi eu massa lacinia malesuada et a elit. Donec urna ex, lacinia in purus ac, pretium pulvinar mauris. Curabitur sapien risus, commodo eget turpis at, elementum convallis elit. Pellentesque enim turpis, hendrerit tristique.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dapibus rutrum facilisis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam tristique libero eu nibh porttitor fermentum. Nullam venenatis erat id vehicula viverra. Nunc ultrices eros ut ultricies condimentum. Mauris risus lacus, blandit sit amet venenatis non, bibendum vitae dolor. Nunc lorem mauris, fringilla in aliquam at, euismod in lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In non lorem sit amet elit placerat maximus. Pellentesque aliquam maximus risus, vel venenatis mauris vehicula hendrerit.</p>
                <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis. Praesent rutrum sem diam, vitae egestas enim auctor sit amet. Pellentesque leo mauris, consectetur id ipsum sit amet, fersapien risus, commodo eget turpis at, elementum convallis elit. Pellentesque enim turpis, hendrerit tristique lorem ipsum dolor.</p>
            </div>
        </div>
    </div>

    <style>
        /* Wrapper */

        #wrapper > * > .inner {
            width: 100%;
            max-width: 68em;
            margin: 0 auto;
            padding: 0 2.5em;
        }

            @media screen and (max-width: 736px) {

                #wrapper > * > .inner {
                    padding: 0 1.25em;
                }

            }

        /* Main */

        #main {
            padding: 0em 0 6em 0 ;
        }

            @media screen and (max-width: 736px) {

                #main {
                    padding: 0em 0 4em 0 ;
                }

            }

        /* Menu */

        #wrapper {
            -moz-transition: opacity 0.45s ease;
            -webkit-transition: opacity 0.45s ease;
            -ms-transition: opacity 0.45s ease;
            transition: opacity 0.45s ease;
            opacity: 1;
        }

        /* Image */

        .image {
            border-radius: 4px;
            border: 0;
            display: inline-block;
            position: relative;
        }

		.image img {
			border-radius: 4px;
			display: block;
		}

		.image.left, .image.right {
			max-width: 40%;
		}

			.image.left img, .image.right img {
				width: 100%;
			}

		.image.left {
			float: left;
			padding: 0 1.5em 1em 0;
			top: 0.25em;
		}

		.image.right {
			float: right;
			padding: 0 0 1em 1.5em;
			top: 0.25em;
		}

		.image.fit {
			display: block;
			margin: 0 0 2em 0;
			width: 100%;
		}

			.image.fit img {
				width: 100%;
			}

		.image.main {
			display: block;
			margin: 0 0 3em 0;
			width: 100%;
		}

        .image.main img {
            width: 100%;
        }

			@media screen and (max-width: 736px) {

				.image.main {
					margin: 0 0 2em 0;
				}

			}
    </style>
@endsection
