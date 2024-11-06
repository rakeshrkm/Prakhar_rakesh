@extends('layouts.front.master')
@section('content')

    <!-- page title start -->
    <div class="breadcrumb-area bg-black bg-relative">
        <div class="banner-bg-img" style="background-image: url('assets/img/bg/1.webp');"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="breadcrumb-inner text-center">
                        <h2 class="page-title">Investor Grievance</h2>
                        <ul class="page-list">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Investor Grievance</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page title end -->


<section class="counters2 investdetail-section counters cid-rOp0g4IWKt pt-4">
    <div class="container">
        <div class="row">
			<div class="col-sm-12"> 
				<div class="investors_blks_full">
					<h3>Investor Grievance</h3>
					
					<div class="row">
						<div class="col-sm-6">
						<p><strong>Contact details for person responsible for assisting &amp; handling investor grievances:</strong></p>
						<p>Mr. Pradeep Namdeo<br>
						Company CEO and Compliance Officer<br>
						Contact No. +91 11 4010 4369<br>
						E-mail ID- info@prakharsoftwares.com</p>
						</div>
						<div class="col-sm-4">
						<p><strong>Registered Office:</strong></p>
						<p>C – 11, LGF, Opp. State Bank of India, Malviya Nagar</p>
						</div>
					</div>	
					
				</div>
			</div>
		</div>
    </div>
</section>
@endsection