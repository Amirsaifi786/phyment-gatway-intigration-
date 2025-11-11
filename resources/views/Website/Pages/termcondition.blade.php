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
                            <h3 class="breadcrumb-title">Terms And Conditions</h3>
                            <ul class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index-2.html"><i class="fa fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Terms And Conditions</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-main-wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="card p-4 content">
                    <!-- Intro -->
                    <p class="small text-muted">These Terms &amp; Conditions ("Terms") govern your use of
                        <strong>Spark company</strong> (the "Site"). By accessing or using the Site, you accept
                        these Terms.
                    </p>

                    <!-- Sections -->
                    <h5 id="acceptance">1. Acceptance of Terms</h5>
                    <p>By visiting or using this Site, you agree to these Terms and our <a
                            href="{{ route('page.privacypolicy') }}" class="link-primary">Privacy Policy</a>. If
                        you do not agree, please do not use our Site.</p>

                    <h5 id="use">2. Use of Website</h5>
                    <ul>
                        <li>The content provided is for <strong>informational and promotional</strong> purposes
                            only.</li>
                        <li>You agree not to use the Site for any illegal, malicious, or fraudulent activity.
                        </li>
                        <li>You may view and download content for personal use; commercial redistribution
                            requires written permission.</li>
                    </ul>

                    <h5 id="ip">3. Intellectual Property Rights</h5>
                    <p>All content (text, images, logos, icons, video) on this Site is the property of
                        <strong>[Your Company Name]</strong> or its licensors, unless otherwise noted.
                        Unauthorized copying or use is prohibited.
                    </p>

                    <h5 id="links">4. Third-Party Links</h5>
                    <p>The Site may contain links to third-party websites. We do not endorse or take
                        responsibility for any content, policies, or practices of those sites. Visiting
                        third-party links is at your own risk.</p>

                    <h5 id="disclaimer">5. Disclaimer of Warranties</h5>
                    <p>We aim to keep information accurate and up-to-date, but the Site is provided "as is"
                        without warranties of any kind. Nothing on the Site should be construed as professional
                        advice.</p>

                    <h5 id="liability">6. Limitation of Liability</h5>
                    <p><strong>[Your Company Name]</strong> is not liable for any direct, indirect, incidental,
                        or consequential damages arising from use of the Site. This includes loss of data,
                        revenue, or business opportunities.</p>

                    <h5 id="changes">7. Changes to Terms</h5>
                    <p>We may update these Terms at any time. Continued use of the Site after updates
                        constitutes acceptance of the revised Terms. We recommend checking this page
                        periodically.</p>

                    <h5 id="law">8. Governing Law</h5>
                    <p>These Terms are governed by the laws of <strong>India</strong>. Any disputes will be
                        subject to the jurisdiction of courts in <strong>[Your City/State]</strong>.</p>

                    <h5 id="contact">9. Contact Us</h5>
                    <p>If you have questions about these Terms, contact us at:</p>
                    <ul>
                        <li><strong>Email:</strong> <a href="mailto:[info@.com]">info@.com</a></li>
                        <li><strong>Address:</strong>
                            OFFICE NO 103
                            Uttar Pradesh
                            201301
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
