
@extends('Website.layout.app')
@section('style')

@endsection
@section('content')
      <div class="breadcrumb-area breadcrumb-img bg-img" data-bg="assets/img/banner/shop.jpg">
          <div class="container">
              <div class="row">
                  <div class="col-12">
                      <div class="breadcrumb-wrap">
                          <nav aria-label="breadcrumb">
                              <h3 class="breadcrumb-title">CONTACT US</h3>
                              <ul class="breadcrumb justify-content-center">
                                  <li class="breadcrumb-item"><a href="index-2.html"><i class="fa fa-home"></i></a></li>
                                  <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                              </ul>
                          </nav>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="map-area section-padding">
          <div id="google-map"></div>
      </div>
      <div class="contact-area section-padding pt-0">
          <div class="container">
              <div class="row">
                  <div class="col-lg-6">
                      <div class="contact-message">
                          <h4 class="contact-title">Tell Us Your Project</h4>
                          <form id="contact-form" action="https://htmldemo.net/pullman/pullman/assets/php/mail.php" method="post" class="contact-form">
                              <div class="row">
                                  <div class="col-lg-6 col-md-6 col-sm-6">
                                      <input name="first_name" placeholder="Name *" type="text" required>
                                  </div>
                                  <div class="col-lg-6 col-md-6 col-sm-6">
                                      <input name="phone" placeholder="Phone *" type="text" required>
                                  </div>
                                  <div class="col-lg-6 col-md-6 col-sm-6">
                                      <input name="email_address" placeholder="Email *" type="text" required>
                                  </div>
                                  <div class="col-lg-6 col-md-6 col-sm-6">
                                      <input name="contact_subject" placeholder="Subject *" type="text">
                                  </div>
                                  <div class="col-12">
                                      <div class="contact2-textarea text-center">
                                          <textarea placeholder="Message *" name="message" class="form-control2" required=""></textarea>
                                      </div>
                                      <div class="contact-btn">
                                          <button class="btn btn-sqr" type="submit">Send Message</button>
                                      </div>
                                  </div>
                                  <div class="col-12 d-flex justify-content-center">
                                      <p class="form-messege"></p>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>
                  <div class="col-lg-6">
                      <div class="contact-info">
                          <h4 class="contact-title">Contact Us</h4>
                          <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum
                              est notare quam littera gothica, quam nunc putamus parum claram anteposuerit litterarum
                              formas human.</p>
                          <ul>
                              <li><i class="fa fa-fax"></i> Address : Your address goes here</li>
                              <li><i class="fa fa-envelope-o"></i> E-mail: demo@example.com</li>
                              <li><i class="fa fa-phone"></i> 01324565789</li>
                          </ul>
                          <div class="working-time">
                              <h6>Working Hours</h6>
                              <p><span>Monday – Saturday:</span>08AM – 22PM</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
@endsection
@section('script')

@endsection


