<style type="text/css">

html {
	-webkit-font-smoothing: antialiased!important;
	-moz-osx-font-smoothing: grayscale!important;
	-ms-font-smoothing: antialiased!important;
}

.md-step a:link, .md-step a:active, .md-step a:visited, .md-step a:hover {
	text-decoration:none;
}

.md-step.next, .md-step.done {
    color: currentColor;
    cursor: not-allowed;
    opacity: 0.5;
    text-decoration: none;
    pointer-events: none;
    cursor: default;
  }

.md-stepper-horizontal {
	display:table;
	width:100%;
	margin:14px auto;
	background-color:#FFFFFF;
	box-shadow: 0 3px 8px -6px rgba(0,0,0,.50);
}
.md-stepper-horizontal .md-step {
	display:table-cell;
	position:relative;
	padding:24px;
}
.md-stepper-horizontal .md-step:hover,
.md-stepper-horizontal .md-step:active {
	background-color:rgba(0,0,0,0.04);
}
.md-stepper-horizontal .md-step:active {
	border-radius: 15% / 75%;
}
.md-stepper-horizontal .md-step:first-child:active {
	border-top-left-radius: 0;
	border-bottom-left-radius: 0;
}
.md-stepper-horizontal .md-step:last-child:active {
	border-top-right-radius: 0;
	border-bottom-right-radius: 0;
}
.md-stepper-horizontal .md-step:hover .md-step-circle {
	background-color:#757575;
}
.md-stepper-horizontal .md-step:first-child .md-step-bar-left,
.md-stepper-horizontal .md-step:last-child .md-step-bar-right {
	display:none;
}
.md-stepper-horizontal .md-step .md-step-circle {
	width:30px;
	height:30px;
	margin:0 auto;
	background-color:#999999;
	border-radius: 50%;
	text-align: center;
	line-height:30px;
	font-size: 16px;
	font-weight: 600;
	color:#FFFFFF;
}
.md-stepper-horizontal.green .md-step.active .md-step-circle {
	background-color:#00AE4D;
}
.md-stepper-horizontal.orange .md-step.active .md-step-circle {
	background-color:#F96302;
}
.md-stepper-horizontal .md-step.active .md-step-circle {
	background-color: rgb(33,150,243);
}
.md-stepper-horizontal .md-step.done .md-step-circle:before {
	font-family:'FontAwesome';
	font-weight:100;
	content: "\f00c";
}
.md-stepper-horizontal .md-step.done .md-step-circle *,
.md-stepper-horizontal .md-step.editable .md-step-circle * {
	display:none;
}
.md-stepper-horizontal .md-step.editable .md-step-circle {
	-moz-transform: scaleX(-1);
	-o-transform: scaleX(-1);
	-webkit-transform: scaleX(-1);
	transform: scaleX(-1);
}
.md-stepper-horizontal .md-step.editable .md-step-circle:before {
	font-family:'FontAwesome';
	font-weight:100;
	content: "\f040";
}
.md-stepper-horizontal .md-step .md-step-title {
	margin-top:16px;
	font-size:16px;
	font-weight:600;
}
.md-stepper-horizontal .md-step .md-step-title,
.md-stepper-horizontal .md-step .md-step-optional {
	text-align: center;
	color:rgba(0,0,0,.26);
}
.md-stepper-horizontal .md-step.active .md-step-title {
	font-weight: 600;
	color:rgba(0,0,0,.87);
}
.md-stepper-horizontal .md-step.active.done .md-step-title,
.md-stepper-horizontal .md-step.active.editable .md-step-title {
	font-weight:600;
}
.md-stepper-horizontal .md-step .md-step-optional {
	font-size:12px;
}
.md-stepper-horizontal .md-step.active .md-step-optional {
	color:rgba(0,0,0,.54);
}
.md-stepper-horizontal .md-step .md-step-bar-left,
.md-stepper-horizontal .md-step .md-step-bar-right {
	position:absolute;
	top:36px;
	height:1px;
	border-top:1px solid #DDDDDD;
}
.md-stepper-horizontal .md-step .md-step-bar-right {
	right:0;
	left:50%;
	margin-left:20px;
}
.md-stepper-horizontal .md-step .md-step-bar-left {
	left:0;
	right:50%;
	margin-right:20px;
}
.disabled {
  pointer-events: none;
  cursor: default;
}

</style>

<div class="row" style="margin-bottom: 0.5em;">
	<div class="col-sm">
		<div class="md-stepper-horizontal orange">
			@foreach ( $stepper as $step )
			<div class="md-step
				@if ($step->isCurrent())
				active
				@else
				next
				@endif
			">
					<div class="md-step-circle"><span>{!! config('laravel-fflch-stepper.steps')[$step->getName()]['icon'] ?? '' !!}</span></div>
					<div class="md-step-title">{{ $step->getName() }}</div>
					<div class="md-step-optional">{{ config('laravel-fflch-stepper.steps')[$step->getName()]['description'] ?? '' }}</div>
				
					<div class="md-step-bar-left"></div>
					<div class="md-step-bar-right"></div>
			</div>
			@endforeach
		</div>
	</div>
</div>
