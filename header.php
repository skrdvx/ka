<!doctype html>

<html <?php language_attributes(); ?> class="no-js">
<head>
	<title><?php wp_title(''); ?></title>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="360">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<!-- Icons -->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
	<?php wp_head(); ?>
	<!-- Counters -->
	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	ga('create', 'UA-81026057-1', 'auto');
	ga('send', 'pageview');
	</script>
	<script type="text/javascript">
	(function (d, w, c) {
				(w[c] = w[c] || []).push(function() {
							try {
									w.yaCounter38590155 = new Ya.Metrika({
											id:38590155,
											clickmap:true,
											trackLinks:true,
											accurateTrackBounce:true,
											webvisor:true,
											trackHash:true
									});
							} catch(e) { }
					});

					var n = d.getElementsByTagName("script")[0],
							s = d.createElement("script"),
							f = function () { n.parentNode.insertBefore(s, n); };
					s.type = "text/javascript";
					s.async = true;
					s.src = "https://mc.yandex.ru/metrika/watch.js";

					if (w.opera == "[object Opera]") {
							d.addEventListener("DOMContentLoaded", f, false);
					} else { f(); }
			})(document, window, "yandex_metrika_callbacks");
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/38590155" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<script>
	!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
	n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
	document,'script','https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '1623387591306408');
	fbq('track', "PageView");</script>
	<noscript><img height="1" width="1" style="display:none"
	src="https://www.facebook.com/tr?id=1623387591306408&ev=PageView&noscript=1"
	/></noscript>

	</head>
	<?php if (isset($post->post_name)) { $slug = $post->post_name; } else { $slug = 'other'; } ?>
	<body <?php body_class($slug); ?> id="page-<?php echo($slug); ?>">

		<header role="banner">

				<nav id="nav" class="ui fixed menu" role="navigation">
					<div class="ui container">
						<a class="item" href="<?php echo get_site_url(); ?>">
							<svg class="logo" width="50" height="50" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
								<rect height="50" width="50" y="0" x="0" stroke-width="0" fill="transparent"/>
							  <path d="m14.6,37.04535c-0.1,1.4 0.1,2.7 0.1,4.1c1.3,0 3.2,-0.2 4.6,-0.4c-0.1,-1.3 -0.1,-2.3 -0.3,-3.4c-1.3,-0.3 -3,-0.2 -4.4,-0.3z" clip-rule="evenodd" fill-rule="evenodd"/>
							  <path d="m19.5,43.04535c-1.4,0 -2.9,0 -4.3,0c-0.5,1.4 -0.3,4.1 -0.3,5.7c1.4,0.2 3.4,0.1 4.7,-0.1c0.2,-1.8 0,-3.9 -0.1,-5.6z" clip-rule="evenodd" fill-rule="evenodd"/>
							  <path d="m31.4,50.00738c-0.4,-1.4 -0.7,-3 -0.9,-4.6c-1.2,-0.1 -2.9,0.2 -4.5,0.1c-0.6,1.3 -0.6,3.1 -1.2,4.5l6.6,0z" clip-rule="evenodd" fill-rule="evenodd"/>
							  <path d="m7.5,32.24535c0,0.2 0.1,0.4 0.2,0.6c0.2,-0.1 0,-0.6 -0.2,-0.6z" clip-rule="evenodd" fill-rule="evenodd"/>
							  <path d="m7.8,32.24535c0.1,-0.1 0,-0.4 -0.2,-0.4c0,0.2 0.1,0.3 0.2,0.4z" clip-rule="evenodd" fill-rule="evenodd"/>
							  <path d="m26.4,43.64535c1,0.1 2.6,0.3 3.4,0.3c-0.3,-2.2 -0.7,-4.4 -1.3,-6.4c-0.3,0 -0.5,0 -0.8,0c-0.5,1.9 -0.9,4 -1.3,6.1z" clip-rule="evenodd" fill-rule="evenodd"/>
							  <path d="m33.6,1.54535c-0.1,0 -0.3,0 -0.4,0c-1,2.7 -1.7,5.6 -2.4,8.4c1.6,0.1 2.5,-0.3 4,-0.2c-0.5,-2.7 -0.9,-5.5 -1.2,-8.2z" clip-rule="evenodd" fill-rule="evenodd"/>
							  <path d="m25,2.14535c-1.9,-0.2 -4.8,-0.1 -7.2,-0.1c-0.2,0 -0.2,0.3 -0.4,0.3c0.3,1.7 0.3,3.8 0.6,5.5c2.3,-0.4 5,-0.4 7.2,-0.9c-0.1,-1.6 0.1,-3.5 -0.2,-4.8z" clip-rule="evenodd" fill-rule="evenodd"/>
							  <path d="m41.6,7.54535c0.4,2.7 0.8,5.5 1.2,8.2c0.1,0 0.3,0 0.4,0c1,-2.7 1.7,-5.5 2.4,-8.4c-1.6,-0.1 -2.5,0.3 -4,0.2z" clip-rule="evenodd" fill-rule="evenodd"/>
							  <path d="m1.5,48.54535c2.6,0 4.9,-0.2 7.1,-0.5c0.5,-2.9 -0.1,-6.3 0.1,-9.6c-2.1,-0.3 -5.3,-0.2 -7.3,-0.2c0.2,3.5 -0.3,7 0.1,10.3z" clip-rule="evenodd" fill-rule="evenodd"/>
							  <path d="m2.4,0.00738c0.1,2.1 0,4.4 0.4,6.2c1.9,-1.8 3,-4.4 4.9,-6.2l-5.3,0z" clip-rule="evenodd" fill-rule="evenodd"/>
							  <path d="m47.6954,33.82577c0,-2.7 0.6,-4.8 0.6,-7.6c-2.1,0.1 -4.3,0.2 -6.5,0.2c-0.3,2.4 0.1,5.4 -0.2,7.8c-0.7,-0.1 -1.6,0.1 -2,-0.1c0,-4.8 -0.2,-10.5 0.2,-15.2c0.6,0.1 1.2,-0.3 1.6,-0.2c1.4,0.4 0.1,4 0.3,5.3c1.8,0.5 4.5,0.3 6.7,0.5c0.1,-1.5 0.2,-4.1 0.1,-5.6c0.4,-0.1 1,-0.1 1.5,-0.1l0,-18.8l-0.1,0c-1.6,6 -3.3,11.9 -5.1,17.9c-1.6,0 -2.4,0 -3.9,0c-1,-6.2 -2.4,-12 -3.7,-17.9l-1.8,0c1,6.1 2.4,11.9 3.7,17.7c-0.5,0.1 -2.1,0.3 -2.4,-0.1c-1,-1.4 -0.9,-3.8 -1.4,-5.7c-1.6,0.1 -2.9,-0.2 -4.5,-0.1c-0.8,1.6 -1.1,3.5 -1.7,5.2c-0.7,0.1 -1.8,0.5 -2.8,0.2c1.6,-5.8 3.2,-11.6 4.9,-17.3l-9.9,0c2,0 4.1,0.1 6.1,0c0,3.2 -0.2,6.2 -0.3,9.3l-2.1,0.3c-0.6,0 -1.2,0.1 -1.8,0.1l-4.4,0.4c-0.2,0 -0.5,0 -0.8,0.1c-0.2,2.4 0.6,4.8 0.7,7.2c-0.7,0 -1.1,0.4 -2,0.2c-0.8,-5.9 -1.3,-11.7 -2.2,-17.5c0.2,0 0.4,0 0.6,0l-4.8,0c-2,2.8 -4.1,5.5 -6.3,8.1c2.2,3.4 5.3,5.8 8,8.8c-1.2,0.1 -2.3,0.5 -3.2,0.2c-1,-0.3 -2.3,-2.5 -3,-3.3c-1.1,-1.3 -2.1,-2.5 -3,-3.3c-0.4,2.3 0.6,4.7 0.4,6.9c-0.8,0.1 -1.9,0.1 -2.4,0c-0.2,-5.9 -0.4,-11.7 -0.8,-17.4l0,0l0,32.9c1.8,-4.7 3.5,-9.6 5.2,-14.4c1.4,0 2.7,0 4.1,0c1.1,5.3 2.8,10.7 4.1,15.5c-0.7,0.2 -2.3,0.2 -2.8,-0.1c-1.3,-4.2 -2.2,-8.7 -3.4,-12.9c-1.5,4.2 -2.7,8.5 -4.5,12.4c-0.8,0.1 -1.9,0.3 -2.7,0.1l0,2.3c3.3,-0.1 7.6,-0.1 11.1,0c-0.1,4.7 -0.1,9.8 -0.2,14.1l2.1,0c-0.1,-4.7 -0.1,-10.3 0,-14.6c2.2,-0.3 4.9,-0.3 6.9,0.1c1.3,0.9 1.9,5.3 0.4,6.5c0.3,0.5 1.1,0.7 1.3,1.3c0.6,1.4 0.3,6.1 -0.7,6.8c0,0 0,0 -0.1,0l1.4,0c1.4,-5.1 3.1,-9.9 4.4,-15c1,-0.2 2.5,-0.4 3.5,-0.1c1.3,5.1 2.6,10.1 3.9,15.1l16,0l0,-16.3c-0.5,0.2 -1.6,0.3 -2.3,0.1zm-39.8,0.3c-0.3,-1.3 -0.7,-2.7 -1,-4c-0.5,1.3 -0.9,2.7 -1.4,4l-1.4,0c0.6,-1.7 1.2,-3.4 1.9,-5.2l1.8,0c0.4,1.7 0.9,3.5 1.3,5.2l-1.2,0zm5.6,-22.1c-0.3,-2 -0.4,-4.6 -0.9,-6.2c-0.7,2.1 -1,4.5 -1.7,6.5c-0.7,0.1 -1.6,0.3 -2.3,0.3c-0.5,-2 -0.7,-4.7 -1,-6.8c-0.1,-0.4 -0.2,-0.8 0,-1.1c0.4,0 0.8,0 1.2,0c0.5,2 0.3,4.6 1.1,6.5c0.8,-2 1.2,-4.2 1.7,-6.4c0.7,-0.2 1.4,-0.1 2.1,-0.2c0.5,2.3 0.7,4.9 1.1,7.3c-0.3,0 -0.9,0.1 -1.3,0.1zm10.8,22.1c-3.3,-0.1 -7,-0.3 -10.1,-0.2c-0.2,-5 0,-10.4 0.1,-15.5c3.2,0.1 6.7,0 9.8,0.3c0.2,0.5 0,1.4 -0.1,1.9c-2.6,0.2 -5.2,-0.4 -7.4,0c-0.5,1.3 -0.3,3.4 -0.3,5.1c2.1,0.5 5,0.2 7.2,0.6c-0.1,0.7 0.2,1.1 0.2,1.7c-2.2,0.3 -4.6,0 -6.8,-0.1c-0.5,1 -0.3,2.6 -0.3,3.9c2.1,0.5 5.7,0.2 7.8,0.2c0.3,0.7 0.1,1.6 -0.1,2.1zm4.8,-15.3c0.9,0.2 2,0.2 3.1,0.2c0,0.1 0,0.1 0,0.2c-0.3,0 -0.6,0.1 -0.7,0.2c0.2,0 0.5,0 0.7,0c0,0.3 0,0.5 0,0.8c-1,0 -2.1,0.1 -3.2,0.1c0.1,-0.5 0.1,-1 0.1,-1.5zm8.8,15.3c-0.6,0.1 -1.7,0 -2.3,-0.1c-0.1,-4.2 0.2,-8.6 -0.1,-12.6c-2.1,4 -4,8.2 -6,12.3c-1.2,-0.1 -2.6,0.1 -3.5,0c-0.3,-4.8 -0.2,-9.8 -0.2,-14.9c0.7,-0.2 1.7,-0.1 2.2,0.1c0.1,3.4 0,7.8 0.5,11.3c2.1,-3.7 4,-7.6 6,-11.5c1.1,0 2.4,-0.2 3.3,-0.1c0.1,0 0.2,0 0.2,0c-0.2,4.9 0,10.7 -0.1,15.5z" clip-rule="evenodd" fill-rule="evenodd"/>
							  <path d="m39.9,0.00738c0.7,1.4 0.7,3.4 1.1,5.1c1.6,-0.1 2.9,0.2 4.5,0.1c0.8,-1.5 1.1,-3.4 1.7,-5.2l-7.3,0z" clip-rule="evenodd" fill-rule="evenodd"/>
							</svg>
						</a>
						<div class="item">
							<div class="browse">
								<div class="burger">
									<i class="line line-1"></i>
									<i class="line line-2"></i>
									<i class="line line-3"></i>
								</div>
								<span class="text hidden">Меню</span>
							</div>
						</div>
						<div class="menu">
							<a class="item" href="/#portfolio">Работы</a>
							<a class="item" href="/#services">Услуги</a>
							<?php /* <a class="item" href="/#team">Мы</a> */ ?>
							<a class="item" href="/#contact">Контакты</a>
						</div>
						<div class="right phone">
							<div class="item">
								<a href="tel:+78124020029">+7 (812) 402-00-29</a>
							</div>
						</div>
					</div>
				</nav>

		</header>
