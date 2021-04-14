@extends('layouts.index')

@section('hb')
    <h1>Contact us</h1>
@endsection

@section('content')
    <section class="section-contact-us">

        <div class="container-fluid">

            <div class="row">

                <div class="col-md-5 yellow-bg">

                    <div class="site-section-small">

                        <div class="get-in-touch">

                            <h2 class="section-title">Get in touch</h2>
                            <p class="small-title mb-50">Just a note on how wonderful this theme is! If you are thinking of purchasing, i'd say do it! The flexibility is awesome possibilities are endless.</p> 

                            <ul class="list-unstyled mb-0">
                                <li>BusinessPerfect</li>
                                <li>Phone: <a class="gray-text" href="tel:+15417543010">+1-541-754-3010</a></li>
                                <li>Fax: <a class="gray-text" href="tel:+15417543010">+1-541-754-3010</a></li>
                                <li><a class="white-text" href="mailto:hello@businessperfect.com">hello@businessperfect.com</a></li>
                            </ul>

                        </div><!-- /.get-in-touch -->

                    </div>

                </div>

                <div class="col-md-7">

                    <div class="site-section-small">

                        <form class="form-horizontal contact-form text-right">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input class="form-control" type="text" name="contact-name" placeholder="Name *" required>
                                </div>
                                <div class="col-sm-6">
                                    <input class="form-control" type="email" name="contact-email" placeholder="E-mail *" required>
                                </div>
                            </div>
                            <input class="form-control" type="text" name="contact-subject" placeholder="Subject">
                            <textarea class="form-control" placeholder="Message *" required></textarea>

                            <button class="btn btn-yellow">Submit</button>
                        </form><!-- /.contact-form -->

                    </div>
                    
                </div>     
            
            </div>

        </div>
        
    </section><!-- /.section-contact-us -->

    @include('contents.icone')


@endsection