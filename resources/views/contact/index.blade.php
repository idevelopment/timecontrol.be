@extends('welcome') 

@section('breakcrumbs')
<div class="download">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <span>Contact us</span>
                </div>
            </div>
        </div>
    </div>
    @endsection

@section('content')       
 <div class="container content">
        <div class="row margin-bottom-30">
            <div class="col-md-9 mb-margin-bottom-30">
             <p>The form below should <strong>ONLY</strong> be used for commercial enquiries for development or consultancy projects.</p><br />

                <form action="{{url('contact')}}" method="post" id="sky-form" class="sky-form contact-style">
                    <fieldset class="no-padding">

                        <label for="company">{{Lang::get('contact.company')}}</label>
                        <div class="row sky-space-20">
                            <div class="col-md-7 col-md-offset-0">
                                <div>
                                    <input type="text" name="company" id="company" class="form-control">
                                </div>
                            </div>
                        </div>

                        <label for="first_name">{{Lang::get('contact.first_name')}} <span class="color-red">*</span></label>
                        <div class="row sky-space-20">
                            <div class="col-md-7 col-md-offset-0">
                                <div>
                                    <input type="text" name="first_name" id="first_name" class="form-control">
                                </div>
                            </div>
                        </div>

                        <label for="last_name">{{Lang::get('contact.last_name')}} <span class="color-red">*</span></label>
                        <div class="row sky-space-20">
                            <div class="col-md-7 col-md-offset-0">
                                <div>
                                    <input type="text" name="last_name" id="last_name" class="form-control">
                                </div>
                            </div>
                        </div>

                        <label>{{Lang::get('contact.email')}} <span class="color-red">*</span></label>
                        <div class="row sky-space-20">
                            <div class="col-md-7 col-md-offset-0">
                                <div>
                                    <input type="text" name="email" id="email" class="form-control">
                                </div>
                            </div>
                        </div>


                        <label>{{Lang::get('contact.phone')}}</label>
                        <div class="row sky-space-20">
                            <div class="col-md-7 col-md-offset-0">
                                <div>
                                    <input type="text" name="email" id="email" class="form-control">
                                </div>
                            </div>
                        </div>


                        <label>{{Lang::get('contact.mobile')}}</label>
                        <div class="row sky-space-20">
                            <div class="col-md-7 col-md-offset-0">
                                <div>
                                    <input type="text" name="email" id="email" class="form-control">
                                </div>
                            </div>
                        </div>                        
                        <label>{{Lang::get('contact.message')}} <span class="color-red">*</span></label>
                        <div class="row sky-space-20">
                            <div class="col-md-11 col-md-offset-0">
                                <div>
                                    <textarea rows="5" name="message" id="message" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                <div class="clearfix">&nbsp;</div>

                        <p><button type="submit" class="btn-u">{{Lang::get('contact.submit')}}</button></p>
                    </fieldset>
               </form>
            </div><!--/col-md-9-->

            <div class="col-md-3">
                <!-- Contacts -->
                <div class="headline"><h2>Contacts</h2></div>
                <ul class="list-unstyled who margin-bottom-30">
                    <li><a href="#"><i class="fa fa-envelope"></i>info@timecontrol.be</a></li>
                    <li><a href="callto:"><i class="fa fa-phone"></i>+3200000000</a></li>
                    <li><a href="#"><i class="fa fa-globe"></i>http://www.idevelopment.be</a></li>
                </ul>
                <div class="clearfix">&nbsp;</div>
                <!-- Business Hours -->
                <div class="headline"><h2>Business Hours</h2></div>
                <ul class="list-unstyled margin-bottom-30">
                    <li><strong>Monday-Friday:</strong> 10 AM to 8 PM</li>
                    <li><strong>Saturday:</strong> 11 AM to 3 PM</li>
                    <li><strong>Sunday:</strong> Closed</li>
                </ul>

            </div><!--/col-md-3-->
        </div><!--/row-->
    </div>
@endsection