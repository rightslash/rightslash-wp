<div class="row">
			<div class="col-md-12">
				<ul class="process-steps">
					<li class="process-step">
						<div class="process-icon">
							<i class="fa fa-file-archive" aria-hidden="true"></i>
						</div>
						<h3>Place your order</h3>
						<p>Place your order including your project requirements along with the corresponding files and complete the 10% upfront payment to send it to production.</p>
					</li>
					<li class="process-step">
						<div class="process-icon">
							<!--<i class="fa fa-list-alt" aria-hidden="true"></i>-->
							<i class="fa fa-eye" aria-hidden="true"></i>
						</div>
						<h3>Review details</h3>
						<p>Once we receive files and details, a manager will review the project and clear every part with you. We need you to mention everything essential so that we can finish on time and of the highest quality.</p>
					</li>
					<li class="process-step">
						<div class="process-icon">
							<i class="fa fa-cogs" aria-hidden="true"></i>
						</div>
						<h3>Production</h3>
						<p>Once we get everything clear our manager will transfers your project to production according to their experties, keeping you in the loop.</p>
					</li>
					<li class="process-step">
						<div class="process-icon">
							<i class="fa fa-filter" aria-hidden="true"></i>
						</div>
						<h3>Testing</h3>
						<p>After the production part our QA specialist carefully goes through it to make sure it follows our standards and your requirements, double-check all bugs and make any tweaks and adjustments needed.</p>
					</li>
					<li class="process-step">
						<div class="process-icon">
							<i class="fa fa-smile" aria-hidden="true"></i>
						</div>
						<h3>Enjoy the Result</h3>
						<p>Once you are completely satisfied with the outcome and pay the remaining bills, we grant you access to all source files with 20 days of free technical support and assistance.</p>
					</li>
				</ul>
			</div>
		</div>


/*process*/
.process-block h2{
	text-align: center;
	margin-bottom: 10px;
	font-size: 32px;
}
.process-block h2+p{
	text-align: center;
	margin-bottom: 80px;
	color: #908f8f;
    font-size: 18px;
}
.process-steps{
	width: 100%;
	position: relative;
	padding-left: 0;
}
.process-steps:before{
	content: "";
	width: 2px;
	top: 0;
	bottom: 94px;
	left: 50%;
	transform: translateX(-50%);
	background: #eaeaea;
	position: absolute;
}
.process-step{
	width: 50%;
	position: relative;
	padding: 0 50px 10px 20px;
	min-height: 170px;
}
.process-steps li:nth-child(even){
	left: 50%;
	padding-left: 50px;
	padding-right: 20px;
}
.process-steps li:nth-child(odd){
	text-align: right;
}
.process-icon{
	position: absolute;
	left: calc(100% - 35px);
	width: 70px;
	height: 70px;
	text-align: center;
	background: #ff7d00;
	border-radius: 50%;
}
.process-icon i{
	color: #fff;
	font-size: 26px;
	line-height: 70px;
}
.process-steps li:nth-child(even) .process-icon{
	left: -35px;
}
.process-step h3{
	font-size: 20px;
    margin-bottom: 10px;
    padding-top: 18px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 3px;
    color: #333;
}
.process-step p{
	font-size: 15px;
	color: #5f5f5f;
}