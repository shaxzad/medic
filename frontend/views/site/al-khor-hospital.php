<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model \frontend\models\ContactForm */
?>

 <section class="joinus">
	<div class="container">
		<?php 
			$this->title = 'Al Khor Hospital';
			$this->params['breadcrumbs'][] = $this->title;
		 ?>
		<div class="row mb50 mt10">
			<div class="col-md-12">
				<div class="tab1">
					<div role="tabpanel" id="#myTab" class="nav nav-tabs">
						<ul role="tablist" class="nav nav-tabs">
							<li role="presentation" class="active">
								<a href="#1tab" aria-controls="1tab" role="tab" data-toggle="tab">Home</a>
							</li>
							<li role="presentation">
								<a href="#2tab" aria-controls="2tab" role="tab" data-toggle="tab">Our Services</a>
							</li>
							<li role="presentation">
								<a href="#3tab" aria-controls="3tab" role="tab" data-toggle="tab">Patients and Visitors</a>
							</li>
							<li role="presentation">
								<a href="#4tab" aria-controls="4tab" role="tab" data-toggle="tab">News And Events</a>
							</li>
							<li role="presentation">
								<a href="#5tab" aria-controls="5tab" role="tab" data-toggle="tab">Contact Us</a>
							</li>
						</ul>
						<div class="tab-content">
							<div role="tabpanel" id="1tab" class="tab-pane fade in active">
								<div class="tab-status">
									<div class="row">
										<div class="col-md-12">
											<div id="section1" class="hide-arrow">
												<div id="carousel-area-construction" class="fitness-mp-slider">
													<div id="car-slider" class="owl-carousel">
														<div style="background: url(<?php echo yii::getAlias('@web'). '/theme/img/rupiza/medical/bg1.jpg'; ?>);height:400px !important" class="bg-cover slider-wow fadeIn">
															<div class="alpha-background-construction">
																<div style="background: url(<?php yii::getAlias('@web'). '/theme/img/bg_pattern.png'; ?>)" class="paterns hp100">
																	<div class="table">
																		<div class="table-middle-row text-center slider-wow fadeIn">
																			<div class="container">
																				<div class="row">
																					<div class="col-md-12">
																						<div class="text-left">
																							<h1 id="fittext5" data-wow-delay="0.5s" class="ls1 fs50 text-uppercase clr-white slider-wow zoomIn fw100 text-center">we work for
																								<strong class="font-rest-family"> your Health </strong>
																							</h1>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div style="background: url(<?php echo yii::getAlias('@web'). '/theme/img/rupiza/medical/bg2.jpg'; ?>);height:400px !important" class="bg-cover">
															<div class="alpha-background-construction slider-wow fadeIn">
																<div style="background: url(<?php echo yii::getAlias('@web'). '/theme/img/bg_pattern.png';?>)" class="paterns hp100">
																	<div class="table">
																		<div class="table-middle-row text-center slider-wow fadeIn">
																			<div class="mv35">
																				<div>
																					<h2 data-wow-delay="0.7s" class="clr-white font-weight-100 text-uppercase font-size-large fw300">
																						<span class='type-slider'>
																							<span class='type-here-slider'></span>
																						</span>.</h2>
																				</div>
																			</div>

																			<ul id="learnmore1" class="no-padding">
																				<li>
																					<a href="#proccess" data-wow-delay="0.7s" id="learnmore14" class="learnmore-btn2 btn bg-primary btn-slider1 btn-lg slider-wow fadeInUp ls1">Read more</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div style="background: url(<?php echo yii::getAlias('@web'). '/theme/img/rupiza/medical/bg.jpg'?>);height:400px !important" class="bg-cover">
															<div class="alpha-background-construction hp100">
																<div style="background: url(img/texture_layer.png)" class="paterns hp100">
																	<div class="table">
																		<div class="table-middle-row text-center slider-wow zoomIn">
																			<div class="container">
																				<div class="row">
																					<div class="col-md-12">
																						<div class="text-center">
																							<h2 id="fittext4" data-wow-delay="0.5s" class="fw100 text-uppercase clr-white slider-wow fadeInDown">keep your
																								<strong class="font-rest-family"> body </strong> fit
																								<br/>and stround</h2>
																							<div id="learnmore36" class="no-padding"></div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>




										</div>
									</div>

									<div class="row">
										<div class="col-md-4">
											<div class="iconbox2">
												<div class="box-icon">
													<a href="#" class="clr-primary">
														<img src="<?php echo yii::getAlias('@web'. "/theme/img/icons/1.png") ?>" alt="">
													</a>
												</div>
												<div class="box-content ml80">
													<div class="box-heading">
														<h4 class="fw300 text-uppercase">Find A Doctor</h4>
													</div>
													<div class="box-para mt20">
														<form>
															<input type="text" name="" placeholder="Name of Doctor" class="form-control input-sm">
															<input type="text" name="" placeholder="Specialty" class="form-control mv5 input-sm">
															<select class="form-control input-sm">
																<option value="0">Select Hospital</option>
																<option value="1">HGH</option>
																<option value="2">AWH</option>
																<option value="3">RH</option>
																<option value="4">WH</option>
																<option value="5">AKH</option>
																<option value="6">NCCCR</option>
																<option value="7">Ambulance Service</option>
																<option value="8">HH</option>
																<option value="9">Cuban</option>
															</select>
															<button class="btn btn-sm btn-primary mv5 bdr0">Find a Doctor</button>
														</form>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-4 mv50">
											<div class="iconbox2" style="margin-top: 10px;">
												<div class="box-icon">
													<a href="#" class="clr-primary">
														<img src="<?php echo yii::getAlias('@web'. "/theme/img/icons/2.png") ?>" alt="">
													</a>
												</div>
												<div class="box-content ml80">
													<div class="box-heading">
														<img src="<?php echo yii::getAlias('@web'. "/theme/img/icons/My-Health-Logo.png") ?>" alt="">
													</div>
													<div class="box-para mt20">
														<p>Access your patient record information</p>
														<button class="btn btn-primary btn-sm bdr0">Click Here</button>
													</div>
												</div>
											</div>
										</div>

										
										<div class="col-md-4 mv50">
											<div class="contact-acadmic">
												<h3>Contact Us</h3>
												<div >
													<p><i class="fa fa-phone"></i>(+974) 4439 0440</p>
												</div>
												<div >
													<p><i class="fa fa-mobile"></i>(+974) 4439 0440</p>
												</div>
												<div >
													<p><i class="fa fa-user"></i> ahs@hamad.qa</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div role="tabpanel" id="2tab" class="tab-pane fade">
								<div class="tab-status">
									<h4>Supply Chain Management</h4>
									<br>
									<br>
									<div class="mb20">
									<img src="<?php echo yii::getAlias('@web'). '/theme/img/quicklinks/2.jpg'; ?>" alt="" class="img-responsive" style="width: 100%">
									<ul class="decimal">
										<li>
											In 2010, Hamad Medical Corporation (HMC) continued its challenging journey of transformation, with the goal of turning its hospitals into true Academic Health Centers. HMC is seeking, as an organization, to evolve into a thriving Academic Health System that links together health, education and research, powered by the synergies between itself and its academic partners. 
										</li>
										<li>
											This highly ambitious partnership is carried out in close collaboration with Weill Cornell Medical College in Qatar (WCMC-Q) and other academic partners in Qatar and internationally. 
										</li>
										<li>	 
											This journey of transformation also includes the forging of meaningful relationships with partners across a wide range of health and allied health-related domains. Our current partners include Qatar University, the University of Calgary – Qatar, College of the North Atlantic – Qatar, Sidra Medical and Research Center, and Primary Health Care Corporation. 
										</li>
										<li>	 
											Launched in August 2011, the Academic Health System will generate significant positive impact upon patient care, medical education and medical research. The strength of the proposal results from the intertwining of these central activities to improve health and wellbeing whilst expanding the boundaries of knowledge and ensuring a modern, flexible and sustainable workforce. The initiative represents a major milestone in HMC’s development as Qatar’s leading healthcare provider through the delivery of world-class health care, medical education and research excellence. A key element of the initiative will be wider community engagement through developing a deeper social conscience and bestowing tangible economic and health benefits on the community.
											Full documents for the floated tenders can be obtained from the Supply Chain Management Reception Office, during working hours between 7:00-11:00 AM against the non-refundable payment of:
										</li>
									</ul>
									</div>
								</div>
							</div>

							<div role="tabpanel" id="3tab" class="tab-pane fade in">
								<div class="tab-status">
									<h4>Supply Chain Management</h4>
									<br>
									<br>
									<div class="mb20">
									<img src="<?php echo yii::getAlias('@web'). '/theme/img/edureserch/3.jpg'; ?>" alt="" class="img-responsive" style="width: 100%">
									<ul class="decimal">
										<li>
											In 2010, Hamad Medical Corporation (HMC) continued its challenging journey of transformation, with the goal of turning its hospitals into true Academic Health Centers. HMC is seeking, as an organization, to evolve into a thriving Academic Health System that links together health, education and research, powered by the synergies between itself and its academic partners. 
										</li>
										<li>
											This highly ambitious partnership is carried out in close collaboration with Weill Cornell Medical College in Qatar (WCMC-Q) and other academic partners in Qatar and internationally. 
										</li>
										<li>	 
											This journey of transformation also includes the forging of meaningful relationships with partners across a wide range of health and allied health-related domains. Our current partners include Qatar University, the University of Calgary – Qatar, College of the North Atlantic – Qatar, Sidra Medical and Research Center, and Primary Health Care Corporation. 
										</li>
										<li>	 
											Launched in August 2011, the Academic Health System will generate significant positive impact upon patient care, medical education and medical research. The strength of the proposal results from the intertwining of these central activities to improve health and wellbeing whilst expanding the boundaries of knowledge and ensuring a modern, flexible and sustainable workforce. The initiative represents a major milestone in HMC’s development as Qatar’s leading healthcare provider through the delivery of world-class health care, medical education and research excellence. A key element of the initiative will be wider community engagement through developing a deeper social conscience and bestowing tangible economic and health benefits on the community.
											Full documents for the floated tenders can be obtained from the Supply Chain Management Reception Office, during working hours between 7:00-11:00 AM against the non-refundable payment of:
										</li>
									</ul>
									</div>
								</div>
							</div>


							<div role="tabpanel" id="4tab" class="tab-pane fade in">
								<div class="tab-status">
									<div class="row">
										<div class="col-md-12">
											<hr>
										</div>
									</div>
									<div class="row">
										<div class="col-md-8">
											<div class="mv30">
												<h3>
													Collecting medication supplies – change of location
												</h3>
												<strong>Dear All,</strong>
												<p>
													Please be informed that effective from 1 November, 2015, all cold chain medication supplies will be collected and dispatched from the Hamad General Hospital (HGH) Supply Chain Management Main Store (the main cold room) and not from Al-Wakra hospital.
												</p>
												<p>
													To ensure your facility is supplied effectively and on time, please follow the guidelines below:
												</p>
												<ul>
													<li>
														Please comply with the agreed scheduled time to collect your supplies
													</li>
													<li>
														To ensure you receive your supply on the agreed scheduled days, requests should be made a minimum of two days before your supply day - late requests will be delayed until the next scheduled supply days
													</li>
													<li>
														For Primary Health Centers, cold trucks belonging to PHCC will distribute the items to the relevant centers
													</li>
													<li>
														Other external facilities, including private facilities, need to come directly to HGH Main Store to collect their medications after submitting their requests in advance.
													</li>
													<li>
														For any urgent requests, your representative should come directly to the HGH main store with the original request and cold box to collect the medication on the same day
													</li>
													<li>
														To contact the HGH Main Store directly from 1 November, 2015, use the following numbers:
														<ul>
															<li>
																4439 1243 & 4439 2301 - Cold Room Supervisor
															</li>
															<li>
																4439 1513 & 4439 2463 - Distribution and Customers Services
															</li>
															<li>
																4439 2826 - Medicine Section Control Office
															</li>

														</ul>
													</li>
												</ul>
											</div>  
										</div>
										<div class="col-md-4">
											
										</div>
									</div>
								</div>
							</div>
					
						</div>
					</div>
			</div>
		</div>
	</div>
</section>