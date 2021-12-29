@extends('layout.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12" style="margin: 7em 0;">
                <div class="clearfix">
                    <img class="img2 img-fluid" src="assets/img/team/team-1.jpg" alt="le president M. Daniel DjeDje" width="300" height="500">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis delectus dolores quos totam rerum, neque aut fugit, distinctio est repellat amet minima hic officiis enim unde! Odit esse eius itaque!
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore necessitatibus natus deserunt minima, exercitationem quis magnam at aliquam accusamus corrupti, aperiam odio, voluptatibus consequatur recusandae aut eaque sit quia! Nemo.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi consequuntur quaerat, enim, sit consectetur deleniti assumenda officiis esse provident deserunt fugiat reprehenderit labore delectus aspernatur fugit aut animi corrupti ratione?
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat reprehenderit fugiat provident aliquam dolores architecto voluptates odit ratione illum dolorum, ad expedita? Ipsa, magni expedita perferendis rerum nesciunt facere hic!
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum dignissimos ad tempore recusandae hic, odio ea odit sunt quibusdam nam eius, ducimus cumque excepturi magni provident officiis commodi, explicabo laboriosam.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas fuga tempore voluptatem eveniet veniam magni reprehenderit eos. Minima incidunt necessitatibus numquam vero nam repellat voluptatem eum, iusto culpa ipsam. Distinctio.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet facere iure corporis, corrupti optio commodi voluptatem! Adipisci numquam quae odio ullam ipsam ad fuga, magni earum dolorum qui. Esse, dignissimos!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta iure recusandae atque corrupti consectetur ex, delectus tempora veniam, beatae cumque natus rem aspernatur optio. Porro cumque quae eum laudantium placeat.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum in fugit consectetur ipsum, iusto ullam. Quia, saepe provident quibusdam repellat necessitatibus vitae expedita, corporis inventore soluta obcaecati, quod magnam et?
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias nulla dolore accusantium id odio, et repudiandae mollitia itaque assumenda quidem officiis ullam vero recusandae voluptas numquam illum dolorem facere exercitationem!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. At itaque soluta atque pariatur debitis quae obcaecati non nam, temporibus voluptatem ipsum quia accusantium illum, impedit consequuntur consectetur. Eius, maiores delectus.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et nihil harum optio illum ducimus, ad deserunt totam blanditiis eum, nobis ratione? Magni, perspiciatis perferendis. Dolore delectus nobis dolorem alias sit!
                </div>
            </div>
        </div>
    </div>
    <!--div id="wrapper" style="margin-top: 10em">
        <-- Main ->
        <div id="main">
            <div class="inner">
                <h1>Mot du president</h1>
                <span class="image main"><img src="assets/images/pic13.jpg" alt="" /></span>
                <p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis. Praesent rutrum sem diam, vitae egestas enim auctor sit amet. Pellentesque leo mauris, consectetur id ipsum sit amet, fergiat. Pellentesque in mi eu massa lacinia malesuada et a elit. Donec urna ex, lacinia in purus ac, pretium pulvinar mauris. Curabitur sapien risus, commodo eget turpis at, elementum convallis elit. Pellentesque enim turpis, hendrerit tristique.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dapibus rutrum facilisis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam tristique libero eu nibh porttitor fermentum. Nullam venenatis erat id vehicula viverra. Nunc ultrices eros ut ultricies condimentum. Mauris risus lacus, blandit sit amet venenatis non, bibendum vitae dolor. Nunc lorem mauris, fringilla in aliquam at, euismod in lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In non lorem sit amet elit placerat maximus. Pellentesque aliquam maximus risus, vel venenatis mauris vehicula hendrerit.</p>
                <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis. Praesent rutrum sem diam, vitae egestas enim auctor sit amet. Pellentesque leo mauris, consectetur id ipsum sit amet, fersapien risus, commodo eget turpis at, elementum convallis elit. Pellentesque enim turpis, hendrerit tristique lorem ipsum dolor.</p>
            </div>
        </div>
    </div-->

    <style>

        .img2 {
        float: left;
        margin: 1em;
        }

        .clearfix::after {
        content: "";
        clear: both;
        display: table;
        }

        body{
            background-color: #f1f1f1
        }

        .col-12{
            background-color: #fff;
            padding: 2em;
        }
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
