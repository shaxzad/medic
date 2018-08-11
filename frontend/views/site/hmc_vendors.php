<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model \frontend\models\ContactForm */
?>

 <section class="joinus">
	<div class="container">
		<?php 
			$this->title = 'HMC Vendors';
			$this->params['breadcrumbs'][] = "Quick Links";
			$this->params['breadcrumbs'][] = $this->title;
		 ?>
		<div class="row mb50 mt10">
			<div class="col-md-12">
				<div class="tab1">
					<div role="tabpanel" id="#myTab" class="nav nav-tabs">
						<ul role="tablist" class="nav nav-tabs">
							<li role="presentation" class="active">
								<a href="#1tab" aria-controls="1tab" role="tab" data-toggle="tab">HMC Vendors</a>
							</li>
							<li role="presentation">
								<a href="#2tab" aria-controls="2tab" role="tab" data-toggle="tab">Supply Chain Managment</a>
							</li>
							<li role="presentation">
								<a href="#3tab" aria-controls="3tab" role="tab" data-toggle="tab">Tender Committee</a>
							</li>
							<li role="presentation">
								<a href="#4tab" aria-controls="4tab" role="tab" data-toggle="tab">Supplier News</a>
							</li>
						</ul>
						<div class="tab-content">
							<div role="tabpanel" id="1tab" class="tab-pane fade in active">
								<div class="tab-status">
									<div class="row">
										<div class="col-md-12">
											<div class="mb20">
												<img src="<?php echo yii::getAlias('@web'). '/theme/img/quicklinks/2.jpg'; ?>" alt="" class="img-responsive" style="width: 100%">
											</div>
											<hr>
										</div>
									</div>
									<div class="row">
										<div class="col-md-8">
											<div class="mv30">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
												tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
												quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
												consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
											</div>  
										</div>
										<div class="col-md-4">
											
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
											Full documents for the floated tenders can be obtained from the Supply Chain Management Reception Office, during working hours between 7:00-11:00 AM against the non-refundable payment of:
										</li>
										<li>
											Tender should be accompanied with a Tender bond issued by a bank accredited in Qatar and applicable to HMC. Such bond should be valid for 120 days from the opening date of the tender. The successful tenders should submit a performance bond of 10% of the contract value, which should be valid for 90 days after the end of contract.
										</li>
										<li>
											Offers should be valid for 90 days commencing from the opening date and HMC reserves the right to increase (unlimited) or decrease (20% of the total order value) the quantities of items or works, during the contract period, in accordance with the terms & conditions of the contract.
										</li>
									</ul>
									</div>
								</div>
							</div>

							<div role="tabpanel" id="3tab" class="tab-pane fade in">
								<div class="tab-status">
									<div class="row">
										<div class="col-md-12">
				                            <div class="collapse3">
				                                <div id="accordion3" role="tablist" aria-multiselectable="true" class="panel-group">
				                                    <div class="panel panel-default">
				                                        <div role="tab" id="headingOne-3" class="panel-heading">
				                                            <a data-toggle="collapse" data-parent="#accordion3" href="#collapseOne-3" aria-expanded="true" aria-controls="collapseOne-3" class="active">
				                                                <h4 class="panel-title">Tender <?php echo date('Y-M-D') ?>
				                                                    <span class="fa fa-chevron-down pull-right"></span>
				                                                </h4>
				                                            </a>
				                                        </div>
				                                        <div id="collapseOne-3" role="tabpanel" aria-labelledby="headingOne-3" class="panel-collapse collapse in">
				                                        	<img src="<?php echo yii::getAlias('@web'). '/theme/img/quicklinks/2.jpg'; ?>" alt="" class="img-responsive" style="width: 100%">

				                                        </div>
				                                    </div>
				                                    <div class="panel panel-default panel-default-custom">
				                                        <div role="tab" id="headingTwo-3" class="panel-heading panel-heading-custom">
				                                            <a data-toggle="collapse" data-parent="#accordion3" href="#collapseTwo-3" aria-expanded="false" aria-controls="collapseTwo-3" class="collapsed">
				                                                <h4 class="panel-title">
				                                                	Tender <?php echo date('Y-M-D') ?>
				                                                    <span class="fa fa-chevron-down pull-right"></span>
				                                                </h4>
				                                            </a>
				                                        </div>
				                                        <div id="collapseTwo-3" role="tabpanel" aria-labelledby="headingTwo-3" class="panel-collapse collapse">
				                                        	<img src="<?php echo yii::getAlias('@web'). '/theme/img/quicklinks/2.jpg'; ?>" alt="" class="img-responsive" style="width: 100%">
				                                        </div>
				                                    </div>
				                                    <div class="panel panel-default panel-default-custom">
				                                        <div role="tab" id="headingThree-3" class="panel-heading panel-heading-custom">
				                                            <a data-toggle="collapse" data-parent="#accordion3" href="#collapseThree-3" aria-expanded="false" aria-controls="collapseThree-3" class="collapsed">
				                                                <h4 class="panel-title">
				                                                	Tender <?php echo date('Y-M-D') ?>
				                                                    <span class="fa fa-chevron-down pull-right"></span>
				                                                </h4>
				                                            </a>
				                                        </div>
				                                        <div id="collapseThree-3" role="tabpanel" aria-labelledby="headingThree-3" class="panel-collapse collapse">
				                                            <p class="panel-body">
				                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee.
				                                            </p>
				                                        </div>
				                                    </div>
				                                </div>
				                            </div>
										</div>
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