@include('users.layouts.header.header')
	<div class="page-content">
		<!-- Slider Revolution Section -->
		<section class="home-slider style-home-slider-hp-1">
        	<!-- the ID here will be used in the inline JavaScript below to initialize the slider -->
       		<div id="rev_slider_1" class="rev_slider fullscreenbanner" data-version="5.4.5">
	            <ul>
	                <!-- BEGIN SLIDE 1 -->
	                <li data-transition="boxslide">
	                    <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
	                    <img src="{{Storage::url($first_Slider->picture)}}" alt="{{asset($first_Slider->picture)}}" class="rev-slidebg">

	                    <!-- BEGIN LAYER -->
	                    <div class="tp-caption tp-resizeme slide-caption-title-1"
	                        data-frames='[{"delay":500,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"y:-20px;opacity:0;","ease":"Power3.easeInOut"}]'
                    		data-fontsize="['20', '25', '30', '35']"
                    		data-lineheight="['32', '35', '40', '45']"
                    		data-color="#d59f9f"
                    		data-textAlign="['center', 'center', 'center', 'center']"
	                        data-x="['center','center','center','center']"
	                        data-y="['middle','middle','middle','middle']"
	                        data-hoffset="['0', '0', '0', '0']"
							data-voffset="['-227', '-200', '-175', '-130']"
							data-width="['187', '250', '300', '350']"
							data-whitespace="normal"
							data-basealign="slide"
							data-responsive_offset="off" >
							{{ App\Setting::orderBy('id', 'DESC')->get()->first()->appname}}
	                	</div>
	                    <div class="tp-caption tp-resizeme slide-caption-title-2"
	                        data-frames='[{"delay":1000,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"y:-20px;opacity:0;","ease":"Power3.easeInOut"}]'
	                        data-fontsize="['90', '90', '80', '80']"
	                        data-lineheight="['70', '70', '60', '60']"
							data-color="#fff"
                    		data-textAlign="['center', 'center', 'center', 'center']"
	                        data-x="['center','center','center','center']"
	                        data-y="['middle','middle','middle','middle']"
	                        data-hoffset="['0', '0', '0', '0']"
							data-voffset="['-140', '-117', '-110', '-90']"
							data-width="['1200', '850', '850', '800']"
							data-whitespace="normal"
							data-basealign="slide"
							data-responsive_offset="off" >
							{{$first_Slider->name}}
	                	</div>
	                	<div class="tp-caption tp-resizeme slide-caption-title-3"
	                        data-frames='[{"delay":0,"speed":300,"frame":"0","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
	                        data-fontsize="['80', '80', '80', '90']"
	                        data-lineheight="['60', '60', '50', '50']"
							data-color="['#666','#fff','#fff','#fff']"
                    		data-textAlign="['center', 'center', 'center', 'center']"
	                        data-x="['right','right','right','right']"
	                        data-y="['bottom','bottom','bottom','bottom']"
	                        data-hoffset="['27', '18', '18', '60']"
							data-voffset="['28', '30', '30', '30']"
							data-width="['250', '250', '300', '350']"
							data-whitespace="normal"
							data-basealign="slide"
							data-responsive_offset="off" >
							01
	                	</div>
	                	<div class="tp-caption tp-resizeme slide-caption-title-3"
	                        data-frames='[{"delay":0,"speed":300,"frame":"0","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
	                        data-fontsize="['13', '15', '20', '35']"
	                        data-lineheight="['32', '35', '40', '45']"
							data-color="['#666','#fff','#fff','#fff']"
                    		data-textAlign="['center', 'center', 'center', 'center']"
	                        data-x="['right','right','right','right']"
	                        data-y="['bottom','bottom','bottom','bottom']"
	                        data-hoffset="['14', '-23', '-20', '35']"
							data-voffset="['63', '56', '50', '37']"
							data-width="['187', '250', '300', '350']"
							data-whitespace="normal"
							data-basealign="slide"
							data-responsive_offset="off" >
							/
	                	</div>
	                	<div class="tp-caption tp-resizeme slide-caption-title-3"
	                        data-frames='[{"delay":0,"speed":300,"frame":"0","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
	                        data-fontsize="['20', '25', '30', '40']"
	                        data-lineheight="['32', '35', '40', '45']"
							data-color="['#666','#fff','#fff','#fff']"
                    		data-textAlign="['center', 'center', 'center', 'center']"
	                        data-x="['right','right','right','right']"
	                        data-y="['bottom','bottom','bottom','bottom']"
	                        data-hoffset="['-6', '-43', '-40', '15']"
							data-voffset="['63', '56', '50', '37']"
							data-width="['187', '250', '300', '350']"
							data-whitespace="normal"
							data-basealign="slide"
							data-responsive_offset="off" >
							03
	                	</div>
		          		<!-- END LAYER -->
	                </li>
	                <!-- END SLIDE 1 -->

					<!-- BEGIN SLIDE 2 -->
	                <li data-transition="boxslide">
	                    <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
	                    <img src="{{ Storage::url($second_Slider->picture)}}" alt="{{asset($second_Slider->picture)}}" class="rev-slidebg">

	                    <!-- BEGIN LAYER -->
	                    <div class="tp-caption tp-resizeme slide-caption-title-1"
	                        data-frames='[{"delay":500,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"y:-20px;opacity:0;","ease":"Power3.easeInOut"}]'
                    		data-fontsize="['20', '25', '30', '35']"
                    		data-lineheight="['32', '35', '40', '45']"
                    		data-color="#3d4552"
                    		data-textAlign="['center', 'center', 'center', 'center']"
	                        data-x="['center','center','center','center']"
	                        data-y="['middle','middle','middle','middle']"
	                        data-hoffset="['0', '0', '0', '0']"
							data-voffset="['-227', '-200', '-175', '-130']"
							data-width="['187', '250', '300', '350']"
							data-whitespace="normal"
							data-basealign="slide"
							data-responsive_offset="off" >
							{{ App\Setting::orderBy('id', 'DESC')->get()->first()->appname}}
	                	</div>
	                    <div class="tp-caption tp-resizeme slide-caption-title-2"
	                        data-frames='[{"delay":1000,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"y:-20px;opacity:0;","ease":"Power3.easeInOut"}]'
	                        data-fontsize="['90', '90', '80', '80']"
	                        data-lineheight="['70', '70', '60', '60']"
							data-color="#fff"
                    		data-textAlign="['center', 'center', 'center', 'center']"
	                        data-x="['center','center','center','center']"
	                        data-y="['middle','middle','middle','middle']"
	                        data-hoffset="['0', '0', '0', '0']"
							data-voffset="['-140', '-117', '-110', '-90']"
							data-width="['1200', '850', '850', '800']"
							data-whitespace="normal"
							data-basealign="slide"
							data-responsive_offset="off" >
							{{$second_Slider->name}}
	                	</div>
	                	<div class="tp-caption tp-resizeme slide-caption-title-3"
	                        data-frames='[{"delay":0,"speed":300,"frame":"0","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
	                        data-fontsize="['80', '80', '80', '90']"
	                        data-lineheight="['60', '60', '50', '50']"
							data-color="['#666','#fff','#fff','#fff']"
                    		data-textAlign="['center', 'center', 'center', 'center']"
	                        data-x="['right','right','right','right']"
	                        data-y="['bottom','bottom','bottom','bottom']"
	                        data-hoffset="['27', '27', '27', '60']"
							data-voffset="['28', '30', '30', '30']"
							data-width="['250', '250', '300', '350']"
							data-whitespace="normal"
							data-basealign="slide"
							data-responsive_offset="off" >
							02
	                	</div>
	                	<div class="tp-caption tp-resizeme slide-caption-title-3"
	                        data-frames='[{"delay":0,"speed":300,"frame":"0","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
	                        data-fontsize="['13', '15', '20', '35']"
	                        data-lineheight="['32', '35', '40', '45']"
							data-color="['#666','#fff','#fff','#fff']"
                    		data-textAlign="['center', 'center', 'center', 'center']"
	                        data-x="['right','right','right','right']"
	                        data-y="['bottom','bottom','bottom','bottom']"
	                        data-hoffset="['3', '-23', '-20', '32']"
							data-voffset="['63', '56', '50', '37']"
							data-width="['187', '250', '300', '350']"
							data-whitespace="normal"
							data-basealign="slide"
							data-responsive_offset="off" >
							/
	                	</div>
	                	<div class="tp-caption tp-resizeme slide-caption-title-3"
	                        data-frames='[{"delay":0,"speed":300,"frame":"0","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
	                        data-fontsize="['20', '25', '30', '40']"
	                        data-lineheight="['32', '35', '40', '45']"
							data-color="['#666','#fff','#fff','#fff']"
                    		data-textAlign="['center', 'center', 'center', 'center']"
	                        data-x="['right','right','right','right']"
	                        data-y="['bottom','bottom','bottom','bottom']"
	                        data-hoffset="['-17', '-43', '-40', '15']"
							data-voffset="['63', '56', '50', '37']"
							data-width="['187', '250', '300', '350']"
							data-whitespace="normal"
							data-basealign="slide"
							data-responsive_offset="off" >
							03
	                	</div>
		          		<!-- END LAYER -->
	                </li>
	                <!-- END SLIDE 2 -->

	                <!-- BEGIN SLIDE 3 -->
	                <li data-transition="boxslide">
	                    <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
	                    <img src="{{ Storage::url($third_Slider->picture)}}" alt="{{asset('uploads/categories/'.$third_Slider->picture)}}" class="rev-slidebg">

	                    <!-- BEGIN LAYER -->
	                    <div class="tp-caption tp-resizeme slide-caption-title-1"
	                        data-frames='[{"delay":500,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"y:-20px;opacity:0;","ease":"Power3.easeInOut"}]'
                    		data-fontsize="['20', '25', '30', '35']"
                    		data-lineheight="['32', '35', '40', '45']"
                    		data-color="#3d4552"
                    		data-textAlign="['center', 'center', 'center', 'center']"
	                        data-x="['center','center','center','center']"
	                        data-y="['middle','middle','middle','middle']"
	                        data-hoffset="['0', '0', '0', '0']"
							data-voffset="['-227', '-200', '-175', '-130']"
							data-width="['187', '250', '300', '350']"
							data-whitespace="normal"
							data-basealign="slide"
							data-responsive_offset="off" >
							{{ App\Setting::orderBy('id', 'DESC')->get()->first()->appname}}
	                	</div>
	                    <div class="tp-caption tp-resizeme slide-caption-title-2"
	                        data-frames='[{"delay":1000,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"y:-20px;opacity:0;","ease":"Power3.easeInOut"}]'
	                        data-fontsize="['90', '90', '80', '80']"
	                        data-lineheight="['70', '70', '60', '60']"
							data-color="#fff"
                    		data-textAlign="['center', 'center', 'center', 'center']"
	                        data-x="['center','center','center','center']"
	                        data-y="['middle','middle','middle','middle']"
	                        data-hoffset="['0', '0', '0', '0']"
							data-voffset="['-140', '-117', '-110', '-90']"
							data-width="['1200', '850', '850', '800']"
							data-whitespace="normal"
							data-basealign="slide"
							data-responsive_offset="off" >
							{{$third_Slider->name}}
	                	</div>
	                	<div class="tp-caption tp-resizeme slide-caption-title-3"
	                        data-frames='[{"delay":0,"speed":300,"frame":"0","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
	                        data-fontsize="['80', '80', '80', '90']"
	                        data-lineheight="['60', '60', '50', '50']"
							data-color="['#666','#fff','#fff','#fff']"
                    		data-textAlign="['center', 'center', 'center', 'center']"
	                        data-x="['right','right','right','right']"
	                        data-y="['bottom','bottom','bottom','bottom']"
	                        data-hoffset="['27', '27', '27', '60']"
							data-voffset="['28', '30', '30', '30']"
							data-width="['250', '250', '300', '350']"
							data-whitespace="normal"
							data-basealign="slide"
							data-responsive_offset="off" >
							03
	                	</div>
	                	<div class="tp-caption tp-resizeme slide-caption-title-3"
	                        data-frames='[{"delay":0,"speed":300,"frame":"0","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
	                        data-fontsize="['13', '15', '20', '35']"
	                        data-lineheight="['32', '35', '40', '45']"
							data-color="['#666','#fff','#fff','#fff']"
                    		data-textAlign="['center', 'center', 'center', 'center']"
	                        data-x="['right','right','right','right']"
	                        data-y="['bottom','bottom','bottom','bottom']"
	                        data-hoffset="['3', '-23', '-20', '32']"
							data-voffset="['63', '56', '50', '37']"
							data-width="['187', '250', '300', '350']"
							data-whitespace="normal"
							data-basealign="slide"
							data-responsive_offset="off" >
							/
	                	</div>
	                	<div class="tp-caption tp-resizeme slide-caption-title-3"
	                        data-frames='[{"delay":0,"speed":300,"frame":"0","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
	                        data-fontsize="['20', '25', '30', '40']"
	                        data-lineheight="['32', '35', '40', '45']"
							data-color="['#666','#fff','#fff','#fff']"
                    		data-textAlign="['center', 'center', 'center', 'center']"
	                        data-x="['right','right','right','right']"
	                        data-y="['bottom','bottom','bottom','bottom']"
	                        data-hoffset="['-17', '-43', '-40', '15']"
							data-voffset="['63', '56', '50', '37']"
							data-width="['187', '250', '300', '350']"
							data-whitespace="normal"
							data-basealign="slide"
							data-responsive_offset="off" >
							03
	                	</div>
		          		<!-- END LAYER -->
	                </li>
	                <!-- END SLIDE 3 -->
	            </ul>
			</div>
		</section>
		<!-- End Slider Revolution Section -->

		<!-- Categories Section -->
		<section class="categories-hp-1 section-box">
			<div class="container">
				<div class="categories-content">
					<div class="row">
						<!-- Categories 1 -->
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
							<div class="categories-detail">
								<a href="{{route('shop.category',['id' => $first_Slider->id,'slug' => str_slug($first_Slider->name)])}}" class="images">
                                    <img src="{{ Storage::url($first_Slider->picture)}}" alt="{{$first_Slider->name}}">
                                </a>
								<div class="product">
									<a href="{{route('shop.category',['id' => $first_Slider->id,'slug' => str_slug($first_Slider->name)])}}">
										<span class="name">
											<span class="line">- </span>
											{{$first_Slider->name}}
										</span>
										<span class="quantity">- {{$first_Slider->products->count()}} Products</span>
									</a>
								</div>
							</div>
						</div>
						<!-- Categories 2 -->
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
							<div class="categories-detail">
								<a href="{{route('shop.category',['id' => $second_Slider->id,'slug' => str_slug($second_Slider->name)])}}" class="images">
                                    <img src="{{ Storage::url($second_Slider->picture)}}" alt="{{$second_Slider->name}}">
                                </a>
								<div class="product">
									<a href="{{route('shop.category',['id' => $second_Slider->id,'slug' => str_slug($second_Slider->name)])}}">
										<span class="name">
											<span class="line">- </span>
											{{$second_Slider->name}}
										</span>
										<span class="quantity">- {{$second_Slider->products->count()}} Products</span>
									</a>
								</div>
							</div>
						</div>
						<!-- Categories 3 -->
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
							<div class="categories-detail">
								<a href="{{route('shop.category',['id' => $third_Slider->id,'slug' => str_slug($third_Slider->name)])}}" class="images">
                                    <img src="{{ Storage::url($third_Slider->picture)}}" alt="{{$third_Slider->name}}">
                                </a>
								<div class="product">
									<a href="{{route('shop.category',['id' => $third_Slider->id,'slug' => str_slug($third_Slider->name)])}}">
										<span class="name">
											<span class="line">- </span>
											{{$third_Slider->name}}
										</span>
										<span class="quantity">- {{$third_Slider->products->count()}} Products</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Categories Section -->


	</div>
@include('users.layouts.footer.footer')
