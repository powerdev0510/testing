@extends('welcome')
@section('title', 'Home')
@section('content')
<section id="home" class="home section--bg" data-bg="{{ asset('new_landing/img/bitmap.png') }}">
		@include ('topbar')
		<div class="col-xs-12">
			<div class="What-are-you-looking">
				What are you looking for?
			</div>
		</div>
		<div class="col-xs-12 Rectangle">
			<input type="text" class="Privacy-policy-addi" placeholder="Privacy policy, additional fees, GDPR, data requests …"/>
			<button class="Rectangle-Copy-2">
				<img src="{{ asset('new_landing/img/icon-copy-5.svg') }}" class="icon-copy-5">
			</button>
		</div>
	</section>
	<section id="policies" class="section--bg">
		<div class="policies_section">
			<div class="policies_section_title">
				Policies
				
			</div>

			<div class="policies_section_content">
				<div class="policies_item">
					<div class="item_oval">
					<img src="{{ asset('new_landing/img/icon-copy-7.svg') }}" class="icon-copy-7">
					</div>
					<div class="item_title">
						Privacy Policy
					</div>
					<div class="item_content">
						This privacy policy describes in detail how we collect, use and disclose your personal data, and what choices you have with respect to your personal data.
					</div>
					<div class="item_readmore">
						read more
					</div>
				</div>
			</div>

			<div class="policies_section_content">
				<div class="policies_item">
					<div class="item_oval">
					<img src="{{ asset('new_landing/img/icon-copy-7.svg') }}" class="icon-copy-7">
					</div>
					<div class="item_title">
						Acceptable Use Policy
					</div>
					<div class="item_content">
						This policy sets out a list of acceptable and unacceptable conduct for our services provided through the following online platforms.
					</div>
					<div class="item_readmore">
						read more
					</div>
				</div>
			</div>

			<div class="policies_section_content">
				<div class="policies_item">
					<div class="item_oval">
					<img src="{{ asset('new_landing/img/icon-copy-7.svg') }}" class="icon-copy-7">
					</div>
					<div class="item_title">
					Data Request Policy
					</div>
					<div class="item_content">
					Outlines HelloCrowd's policies and procedures for responding to data requests with regard to HelloCrowd’s customers’ and users’ personal data.
					</div>
					<div class="item_readmore">
						read more
					</div>
				</div>
			</div>

			<div class="policies_section_content">
				<div class="policies_item">
					<div class="item_oval">
					<img src="{{ asset('new_landing/img/icon-copy-7.svg') }}" class="icon-copy-7">
					</div>
					<div class="item_title">
					GDPR Commitment
					</div>
					<div class="item_content">
					By setting high data protection standards, GDPR is designed to protect the fundamental human rights, such as the right to privacy.
					</div>
					<div class="item_readmore">
						read more
					</div>
				</div>
			</div>

		</div>

		<div class="policies_section">
			<div class="policies_section_title">
			Terms
			</div>

			<div class="policies_section_content">
				<div class="policies_item">
					<div class="item_oval">
					<img src="{{ asset('new_landing/img/icon-copy-7.svg') }}" class="icon-copy-7">
					</div>
					<div class="item_title">
					Terms of Service
					</div>
					<div class="item_content">
					This document is a legally binding agreement that describes the rights and responsibilities of an individual user or entity.
					</div>
					<div class="item_readmore">
						read more
					</div>
				</div>
			</div>

			<div class="policies_section_content">
				<div class="policies_item">
					<div class="item_oval">
					<img src="{{ asset('new_landing/img/icon-copy-7.svg') }}" class="icon-copy-7">
					</div>
					<div class="item_title">
					User Terms of Service
					</div>
					<div class="item_content">
					These User Terms of Service govern the access and use of the services provided through the online platforms to individual users or organizations.
					</div>
					<div class="item_readmore">
						read more
					</div>
				</div>
			</div>

			<div class="policies_section_content">
				<div class="policies_item">
					<div class="item_oval">
					<img src="{{ asset('new_landing/img/icon-copy-7.svg') }}" class="icon-copy-7">
					</div>
					<div class="item_title">
					Vendor Terms of Service
					</div>
					<div class="item_content">
					These Vendor Terms of Service apply to and govern the provision of the training services through the online platforms.
					</div>
					<div class="item_readmore">
						read more
					</div>
				</div>
			</div>

			<div class="policies_section_content">
				<div class="policies_item">
					<div class="item_oval">
					<img src="{{ asset('new_landing/img/icon-copy-7.svg') }}" class="icon-copy-7">
					</div>
					<div class="item_title">
					Security Practices
					</div>
					<div class="item_content">
					At HelloCrowd, we take the security of your personal and non-personal data very seriously. We implement technical and organizational security measures.
					</div>
					<div class="item_readmore">
						read more
					</div>
				</div>
			</div>

			<div class="policies_section_content">
				<div class="policies_item">
					<div class="item_oval">
					<img src="{{ asset('new_landing/img/icon-copy-7.svg') }}" class="icon-copy-7">
					</div>
					<div class="item_title">
					Processors and Subprocessors
					</div>
					<div class="item_content">
					In certain instances, HelloCrowd, Inc., as a provider of cloud-based services, may act as the entity that processes personal data on behalf of data controllers.
					</div>
					<div class="item_readmore">
						read more
					</div>
				</div>
			</div>

		</div>
	</section>

	<section id="footer" class="footer section--bg" data-bg="{{ asset('new_landing/img/bitmap_footer.png') }}">
		<div class="col-xs-12">
			<div class="footer_section">
				<div class="footer_section_title">
				Download
				</div>
				<div class="footer_section_content">
				<p>HelloCrowd - iOS</p>
				<p>HelloCrowd - Android</p>
				</div>
			</div>

			<div class="footer_section">
				<div class="footer_section_title">
				LOCATIONS
				</div>
				<div class="footer_section_content">
				<p>United States</p>
				<p>South Africa</p>
				<p>Spain</p>
				</div>
			</div>

			<div class="footer_section">
				<div class="footer_section_title">
				LEGAL
				</div>
				<div class="footer_section_content">
				<p>Terms of Service</p>
				<a href="{{ url('policy') }}"><p>Privacy Policy</p></a>
				</div>
			</div>
			<div class="footer_section" style="float:right;">
				<img class="footer_logo" src="{{ asset('new_landing/img/group-copy.png') }}" alt="Logo">
			</div>
		</div>
		<div style="clear:both;"></div>
		<div class="Line">
		</div>

		<div class="copyright_text">
			<p>Copyright © HelloCrowd Inc, 2018. All rights reserved. </p>
		</div>
		
	</section>
@endsection
@section('styles')
  
@endsection
@section('scripts')
  
@endsection