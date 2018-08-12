<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model \frontend\models\ContactForm */
?>

 <section class="joinus">
	<div class="container">
		<?php 
			$this->title = 'Ambulatory Care Center';
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
								<a href="#2tab" aria-controls="2tab" role="tab" data-toggle="tab">About</a>
							</li>
							<li role="presentation">
								<a href="#3tab" aria-controls="3tab" role="tab" data-toggle="tab">Clinics</a>
							</li>
							<li role="presentation">
								<a href="#4tab" aria-controls="4tab" role="tab" data-toggle="tab">Pediatric Services</a>
							</li>
							<li role="presentation">
								<a href="#5tab" aria-controls="5tab" role="tab" data-toggle="tab">Procedures</a>
							</li>
							<li role="presentation">
								<a href="#7tab" aria-controls="7tab" role="tab" data-toggle="tab">Surgery</a>
							</li>
							<li role="presentation">
								<a href="#8tab" aria-controls="8tab" role="tab" data-toggle="tab">Clinical Support Services</a>
							</li>
							<li role="presentation">
								<a href="#9tab" aria-controls="9tab" role="tab" data-toggle="tab">Patients and Visitors</a>
							</li>
							<li role="presentation">
								<a href="#10tab" aria-controls="10tab" role="tab" data-toggle="tab">News And events</a>
							</li>
							<li role="presentation">
								<a href="#6tab" aria-controls="6tab" role="tab" data-toggle="tab">Contact Us</a>
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
														<div style="background: url(<?php echo yii::getAlias('@web'). '/theme/img/hospitals/SPP-1-856.jpg'; ?>);height:400px !important" class="bg-cover slider-wow fadeIn">
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
										<div class="col-md-4 mv50">
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
										<div class="col-md-4 mt50">
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
									</div>
									<div class="row">
										<div class="alwakraBoxTitle" style="font-size: 18px;">How to find us
										</div>
										<div class="col-md-6">
											<div class="box50" style="font-size: 14px;">
												<br><br><br>
												<a href="/EN/Hospitals-and-services/Al-Khor-Hospital/Pages/Map.aspx" class="maplink" style="font-size: 14px;">
													<div class="map_background" style="font-size: 14px;">
														<div class="transbox" style="font-size: 14px;">
															<p style="font-size: 19px;">Click here to view directions on Google maps 
															</p>
														</div>&nbsp;
													</div>
												</a>
											</div>
										</div>
										<div class="col-md-6">
											<img src="<?php echo yii::getAlias('@web'). '/theme/img/hospitals/AKH-Banner.jpg'; ?>" alt="">
										</div>
									</div>
								</div>
							</div>
							<div role="tabpanel" id="2tab" class="tab-pane fade">
								<div class="tab-status">
									<div class="mb20">
									<img src="<?php echo yii::getAlias('@web'). '/theme/img/hospitals/SPP-1-856.jpg'; ?>" alt="" class="img-responsive" style="width: 100%">
									<div class="col-md-8 mv30">
										<p>
											HMC’s Ambulatory Care Center (ACC) is an innovative new facility offering an exciting new approach to surgical care in Qatar.
											<br>
											For the first time in our history, our patients will have the opportunity to receive the latest treatment using advanced clinical and surgical practices offered within the same day and in a single dedicated location.
											 
											<br>
											This means that within 23 hours of receiving surgery or a medical procedure, patients will be able to leave hospital and return to recover in the comfort of their own home, without the need for an overnight stay.

											<br>
											Some surgical inpatient beds will also be available.
											<br>

											Patients will also be supported on their journey to recovery by our outpatient clinics which are also located in the same building. Clinical imaging, laboratory and pharmacy services are also available, taking any stress out of their experience and enabling them to focus on the road to wellness.

											<br>
											Located in the heart of Hamad bin Khalifa Medical City, comfort and care is at the heart of the ACC. This is why we’ve done everything we can to make sure the time our patients spend with us is as convenient and straightforward as possible.

											<br>
											Here is what our patients can expect:
											<br>
											A patient-friendly environment with family friendly waiting and recovery areas.
											<br>
											The highest quality care provided an experienced team of healthcare professionals trained to the highest international standards. Cutting edge surgical care provided in the most technologically advanced operating theaters and treatment rooms.  Where possible, this includes non-invasive techniques, robotic surgery and laparoscopic equipment to ensure a faster healing time and less stress.
											<br>
											Dedicated space for a friend or family member to spend time with our patients both before and after surgery.
											<br>
											An on-site restaurant, gift shop, and cafe offering an extensive selection of food, beverages and items to enhance visitors’ experience.
											<br>
											<br>
											Free Wi-Fi is accessible throughout the ACC for patients and their visitors.
											<br>
											Post-procedure and treatment follow-up phone calls and care advice upon the return home if required.
											<br>

											We look forward to welcoming you to our new facility.

											<br>
											Al Wakra Hospital is an impressive general hospital that has been designed, built and staffed with the changing needs and expectations of the growing community in the country’s south in mind. Al Wakra Hospital provides comprehensive, high quality healthcare to people of all ages, from emergency care, to general medicine and surgery and highly specialized treatments. The hospital is committed to delivering diagnostic and treatment services to its patients in an integrated and efficient way. The local community has greatly benefitted since the opening of the hospital as they are now able to access state-of-the-art healthcare services close to home and no longer need to travel to Doha for much of their hospital care.
											
										</p>
									</div>
									<div class="col-md-4 mv50">
										<img src="<?php echo yii::getAlias('@web'). '/theme/img/hospitals/About2.jpg'; ?>" class="img-responsive" alt="">
									</div>
									</div>
								</div>
							</div>

							<div role="tabpanel" id="3tab" class="tab-pane fade in">
								<div class="tab-status">
									<div class="mb20">
									<img src="<?php echo yii::getAlias('@web'). '/theme/img/hospitals/SPP-2-3856.jpg'; ?>" alt="" class="img-responsive" style="width: 100%">
									<div class="col-md-8 mv30">
										<p>
											The podiatry clinic relocated from Hamad General Hospital (HGH) to the Ambulatory Care Center in May 2017. Additional clinics will move from both HGH and Rumailah Hospital in the coming months and details will be communicated in due course.
										</p>
										<br>
										<p>We look forward to welcoming you to our new facility.
										</p>
									</div>
									<div class="col-md-4 mv50">
										<img src="<?php echo yii::getAlias('@web'). '/theme/img/hospitals/2.jpg'; ?>" class="img-responsive" alt="">
									</div>
									</div>
								</div>
							</div>


							<div role="tabpanel" id="4tab" class="tab-pane fade in">
								<div class="tab-status">
									<div class="mb20">
									<img src="<?php echo yii::getAlias('@web'). '/theme/img/hospitals/DSC_1202-856.jpg'; ?>" alt="" class="img-responsive" style="width: 100%">
									<div class="col-md-8 mv30">
										<p>
											A hospital visit can be stressful, especially for our smallest patients and their families. Our pediatric day surgery team is specially trained to care for our youngest patients, help them understand what will be happening and ensure their time with us is as stress free as possible. We want to help children understand that hospitals are not scary places and we are all there to help them to get better.
										</p>
										<br>
										<p>We look forward to welcoming you to our new facility.
										</p>
									</div>
									<div class="col-md-4 mv30">
										<img src="<?php echo yii::getAlias('@web'). '/theme/img/hospitals/DSC_1202-856.jpg'; ?>" alt="" class="img-responsive" style="width: 100%">
									</div>
									</div>
								</div>
							</div>

							<div role="tabpanel" id="5tab" class="tab-pane fade in">
								<div class="tab-status">
									<div class="mb20">
									<img src="<?php echo yii::getAlias('@web'). '/theme/img/hospitals/SPP-27-856.jpg'; ?>" alt="" class="img-responsive" style="width: 100%">
									<div class="col-md-8 mv30">
										<h3>Overview</h3>
										<p>
											A number of medical procedures are carried out within our Ambulatory Care Center outpatient clinics by our highly qualified staff. Patients are advised to speak to their clinician about any planned procedure who will be happy to advise on how to prepare for it, what to expect and any required follow-up and after-care.
										</p>
										<br>
									</div>
									<div class="col-md-4 mv30">
										<img src="<?php echo yii::getAlias('@web'). '/theme/img/hospitals/DSC_1202-856.jpg'; ?>" alt="" class="img-responsive" style="width: 100%">
									</div>
									</div>
								</div>
							</div>

							<div role="tabpanel" id="7tab" class="tab-pane fade in">
								<div class="tab-status">
									<div class="mb20">
									<img src="<?php echo yii::getAlias('@web'). '/theme/img/hospitals/SPP-19-856.jpg'; ?>" alt="" class="img-responsive" style="width: 100%">
									<div class="col-md-8 mv30">
										<h3>Overview</h3>
										<p>
											A number of medical procedures are carried out within our Ambulatory Care Center outpatient clinics by our highly qualified staff. Patients are advised to speak to their clinician about any planned procedure who will be happy to advise on how to prepare for it, what to expect and any required follow-up and after-care.
										</p>
										<br>
									</div>
									<div class="col-md-4 mv30">
										<img src="<?php echo yii::getAlias('@web'). '/theme/img/hospitals/DSC_1202-856.jpg'; ?>" alt="" class="img-responsive" style="width: 100%">
									</div>
									</div>
								</div>
							</div>

							<div role="tabpanel" id="8tab" class="tab-pane fade in">
								<div class="tab-status">
									<div class="mb20">
									<img src="<?php echo yii::getAlias('@web'). '/theme/img/hospitals/DSC_8634-856.jpg'; ?>" alt="" class="img-responsive" style="width: 100%">
									<div class="col-md-8 mv30">
										<p>
											In addition to the procedure or treatment received, we also provide our patients with all the support services needed, including laboratory, clinical imaging and pharmacy services as well as outpatient clinics all at a single location.
										</p>
										<br>
									</div>
									<div class="col-md-4 mv30">
										<img src="<?php echo yii::getAlias('@web'). '/theme/img/hospitals/DSC_1202-856.jpg'; ?>" alt="" class="img-responsive" style="width: 100%">
									</div>
									</div>
								</div>
							</div>


							<div role="tabpanel" id="9tab" class="tab-pane fade in">
								<div class="tab-status">
									<div class="mb20">
									<img src="<?php echo yii::getAlias('@web'). '/theme/img/hospitals/SPP-87-856.jpg'; ?>" alt="" class="img-responsive" style="width: 100%">
									<div class="col-md-8 mv30">
										<p>
											In addition to the procedure or treatment received, we also provide our patients with all the support services needed, including laboratory, clinical imaging and pharmacy services as well as outpatient clinics all at a single location.
										</p>
										<br>
									</div>
									<div class="col-md-4 mv30">
										<img src="<?php echo yii::getAlias('@web'). '/theme/img/hospitals/DSC_1202-856.jpg'; ?>" alt="" class="img-responsive" style="width: 100%">
									</div>
									</div>
								</div>
							</div>


							<div role="tabpanel" id="10tab" class="tab-pane fade in">
								<div class="tab-status">
									<div class="col-md-12">
		                                <aside class="widget about-widget">
		                                    <h4 class="widget-title clr-white" style="background:#3156a3;">
		                                        <span class='clr-white'>News And Events</span>
		                                    </h4>
		                                    <div class="iconbox2">
		                                        <div class="box-icon boXstyl bg-slb" style="margin-left:0 !important;">
		                                            <a href="#" class="clr-primary med_date">
		                                                <p class="fs13pX clr-white pv5 ph5 " style="margin:0;">06 August <br>2018</p>
		                                            </a>
		                                        </div>
		                                        <div class="box-content ml100">
		                                            <div class="box-heading">
		                                                <a href="#" class='clr-black'>
		                                                    <h4 class="fw400 text-uppercase ls1">HMC Cautions against Leaving Children alone in Parked Vehicless</h4>
		                                                    </a>
		                                            </div>
		                                            <div class="box-para mt20">
		                                                <p>Hamad Medical Corporation (HMC) is cautioning the public about the importance of protecting children, the elderly, outdoor workers, and others who may be vulnerable to heat-related illnesses.</p>
		                                            </div>
		                                            <div class="pv10 text-right">
		                                                <a class="btn btn-primary bdr0">Read More >> </a>
		                                            </div>
		                                        </div>
		                                    <div class="seprator4black" style="margin:20px auto !important;"></div>    
		                                    <div class="iconbox2">
		                                        <div class="box-icon boXstyl bg-slb" style="margin-left:0 !important;">
		                                            <a href="#" class="clr-primary med_date">
		                                                <p class="fs13pX clr-white pv5 ph5 " style="margin:0;">05 August <br>2018</p>
		                                            </a>
		                                        </div>
		                                        <div class="box-content ml100">
		                                            <div class="box-heading">
		                                                <a href="#" class='clr-black'>
		                                                    <h4 class="fw400 text-uppercase ls1">Global Incidence Rate for Zika Virus down but CDC Medical Director says Residents Traveling to Endemic Countries must still take Precautions</h4>
		                                                    </a>
		                                            </div>
		                                            <div class="box-para mt20">
		                                                <p>While the global incidence rate for the Zika virus has decreased when compared to this time last year, Dr. Muna Al Maslamani, Medical Director of Hamad Medical Corporation’s (HMC) Communicable Disease Center (CDC), says residents planning to travel to cou</p>
		                                            </div>
		                                            <div class="pv10 text-right">
		                                                <a class="btn btn-primary bdr0">Read More >> </a>
		                                            </div>
		                                        </div>
		                                    </div>
		                                    <div class="seprator4black" style="margin:20px auto !important;"></div>
		                                    <div class="iconbox2">
		                                        <div class="box-icon boXstyl bg-slb" style="margin-left:0 !important;">
		                                            <a href="#" class="clr-primary med_date">
		                                                <p class="fs13pX clr-white pv5 ph5 " style="margin:0;">05 August <br>2018</p>
		                                            </a>
		                                        </div>
		                                        <div class="box-content ml100">
		                                            <div class="box-heading">
		                                                <a href="#" class='clr-black'>
		                                                    <h4 class="fw400 text-uppercase ls1">Nearly 35,000 new Organ Donors Registered since Ramadan</h4>
		                                                    </a>
		                                            </div>
		                                            <div class="box-para mt20">
		                                                <p>Nearly 35,000 people have registered to become an organ donor since May when Hamad Medical Corporation (HMC) launched its annual organ donation campaign. The kicked off during Ramadan and will run until the end of this year. Since the Qatar Organ Donor Re</p>
		                                            </div>
		                                            <div class="pv10 text-right">
		                                                <a class="btn btn-primary bdr0">Read More >> </a>
		                                            </div>
		                                        </div>
		                                    </div>
		                                    <div class="seprator4black" style="margin:20px auto !important;"></div>    
		                                    <div class="iconbox2">
		                                        <div class="box-icon boXstyl bg-slb" style="margin-left:0 !important;">
		                                            <a href="#" class="clr-primary med_date">
		                                                <p class="fs13pX clr-white pv5 ph5 " style="margin:0;">05 August <br>2018</p>
		                                            </a>
		                                        </div>
		                                        <div class="box-content ml100">
		                                            <div class="box-heading">
		                                                <a href="#" class='clr-black'>
		                                                    <h4 class="fw400 text-uppercase ls1">05 August 2018
		                                                        Rumailah Hospital Introduces first of its kind Mothers Support Group</h4>
		                                                    </a>
		                                            </div>
		                                            <div class="box-para mt20">
		                                                <p>Thought to be the first of its kind in the region, a mother’s support group launched last March at Hamad Medical Corporation’s (HMC) Rumailah Hospital is enabling the parents of children with long-term medical conditions to take a more active role in thei</p>
		                                            </div>
		                                            <div class="pv10 text-right">
		                                                <a class="btn btn-primary bdr0">Read More >> </a>
		                                            </div>
		                                        </div>
		                                    </div>
		                                    <div class="seprator4black" style="margin:20px auto !important;"></div>    
		                                    <div>
		                                        <p class="text-center">
		                                            <a href="" class="btn btn-primary bdr0 btn-md">View All >> </a>
		                                        </p>
		                                    </div>
		                                </aside>
                            		</div>
								</div>
							</div>


							<div role="tabpanel" id="6tab" class="tab-pane fade in">
								<div class="tab-status">
									<div class="mb20">
									<img src="<?php echo yii::getAlias('@web'). '/theme/img/hospitals/2.jpg'; ?>" alt="" class="img-responsive" style="width: 100%">
									<div class="col-md-12 mv30">
										<p>
											Please contact us:
											<br>
											<strong>By phone </strong>: (+974) 4474 5555
											<br>
											<strong>By fax</strong> : (+974) 4474 5281
											<br>
											<strong>HMC Customer Service Center – Nesma’ak </strong>– 16060 (Sunday to Thursday 7am to 10pm, Friday 2pm to 10pm, Saturday 10am to 6pm)
											<br>
											<strong>
											Via email </strong>: nesmaak@hamad.qa
											<br>
											<strong>Via mail</strong> : Al Khor Hospital, P.O. Box: 3050, Doha – Qatar
											<br>
											We welcome your comments, questions, concerns, and feedback.
										</p>
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