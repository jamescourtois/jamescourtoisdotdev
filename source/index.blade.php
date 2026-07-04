@extends('_layouts.main')

@section('body')

<div class="relative w-full min-h-dvh flex flex-col items-center justify-center">
	
	@include('_layouts.face', ['class' => 'z-[9]'])
	<div class="p-4 mx-auto text-center w-full relative z-[99]">
			<div class="relative z-[99]">
				<h1 class="text-4xl lg:text-6xl font-extrabold">James Courtois</h1>
				<ul class="text-xl list-none flex flex-col gap-2 my-4 font-semibold">
					<li>Full Stack Web Developer</li>
					<li>
						<svg class="fill-current size-[0.95rem] translate-y-[-2px] inline-block" version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
							<path d="M16 0c-5.523 0-10 4.477-10 10 0 10 10 22 10 22s10-12 10-22c0-5.523-4.477-10-10-10zM16 16c-3.314 0-6-2.686-6-6s2.686-6 6-6 6 2.686 6 6-2.686 6-6 6z"></path>
						</svg>
						Based in St. Louis, MO
					</li>
				</ul>
				<ul class="list-none flex gap-4 my-4 items-center justify-center">
					<li><a href="#samples" class="min-w-[100px] inline-block mt-2 text-lg cursor-pointer font-semibold rounded-full duration-150 bg-black/75 hover:bg-black dark:bg-white/75 dark:hover:bg-white text-white dark:text-black px-4 py-2">Websites</a></li>
					<li><a href="#about" class="min-w-[100px] inline-block mt-2 text-lg cursor-pointer font-semibold rounded-full duration-150 bg-black/75 hover:bg-black dark:bg-white/75 dark:hover:bg-white text-white dark:text-black px-4 py-2">About</a></li>
					<li><a href="#contact" class="min-w-[100px] inline-block mt-2 text-lg cursor-pointer font-semibold rounded-full duration-150 bg-black/75 hover:bg-black dark:bg-white/75 dark:hover:bg-white text-white dark:text-black px-4 py-2">Contact</a></li>
				</ul>
			</div>
	</div>
</div>
<div id="samples" class="scroll-m-16 relative z-[99] px-4 mb-16 lg:mb-24">
	<h2 class="my-4 text-4xl lg:text-5xl text-center max-w-[800px] px-4 mx-auto">Here are <span class="font-extrabold">{{$projects->count()}} examples</span> of sites I've built that are humming along.</h2>
	<p class="text-center px-4 block text-gray-500 mb-16">(<span class="hidden lg:inline">Click</span><span class="lg:hidden">Tap</span> one to launch a new tab.)</p>
	<ul class="list-none grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3 pb-8">
		@foreach ($projects as $project)
			<li class="group relative col-span-1 text-center flex flex-col items-center justify-center border border-black/75 duration-150 overflow-hidden">
				<img class="block w-full h-auto group-hover:scale-110 duration-150 overflow-hidden"  srcset="assets/images/{{$project->image}}.webp 1200w, assets/images/{{$project->image}}_mobile.webp 600w" src="assets/images/{{$project->image}}" loading="lazy" decoding="async" alt="Screenshot of {{$project->title}}">
				<a target="_blank" class="absolute inset-0 z-10" href="{{ $project->url }}">
					<span class="sr-only">View {{ $project->title }}</span>
				</a>
				<span class="font-bold text-xl lg:text-2xl block p-2 absolute bottom-0 left-0 w-full bg-white/40 dark:bg-black/50 backdrop-blur group-hover:bg-white dark:text-white group-hover:dark:bg-black duration-300 text-black">{{ $project->title }}</span>
			</li>
		@endforeach
	</ul>
</div>

<div class="w-full my-16 lg:my-24 px-4 overflow-hidden relative z-[99] scroll-m-16" id="about">
	<h2 class="block text-center text-4xl lg:text-5xl mb-8 font-semibold max-w-[800px] mx-auto">I love coding with open source community-driven tech.</h2>
	<p class="max-w-[800px] mx-auto mb-12">My 10 years of web development experience are built on top of 5 years of designing for digital brands. You will see a lot of WordPress sites listed above as I have shipped countless custom WP themes and plugins. I love the Laravel ecosystem for both full stack apps and static sites (like this one). I never shy away from complex CSS animations and new JavaScript frameworks. When I want to unplug, you can find me outside with my dog, at home cooking new recipes, or shooting a few games of pool.</p>
	<ul class="list-none flex flex-wrap items-center justify-center gap-x-16 gap-y-2 w-full max-w-[1024px] mx-auto bg-white/75 p-8">
		<li class="flex relative h-[70px] min-h-[70px]"><img class="h-[full] w-auto max-w-[140px] block m-0 py-2"  loading="lazy" decoding="async" src="/assets/images/new-php-logo.svg" title="PHP" alt="PHP Logo"></li>
		<li class="flex relative h-[70px] min-h-[70px]"><img class="h-[full] w-auto max-w-[140px] block m-0"  loading="lazy" decoding="async" src="/assets/images/laravel-logolockup-rgb-laravel_black.svg" title="Laravel" alt="Laravel Logo"></li>
		<li class="flex relative h-[70px] min-h-[70px]"><img class="h-[full] w-auto max-w-[140px] block m-0 py-4"  loading="lazy" decoding="async" src="/assets/images/Ruby_On_Rails_Logo.svg" title="Ruby on Rails" alt="Ruby on Rails Logo"></li>
		<li class="flex relative h-[70px] min-h-[70px]"><img class="h-[full] w-auto max-w-[140px] block m-0 py-2"  loading="lazy" decoding="async" src="/assets/images/logo-mysql.svg" title="MySQL" alt="MySQL Logo"></li>
		<li class="flex relative h-[70px] min-h-[80px]"><img class="h-[full] w-auto max-w-[140px] block m-0 py-1"  loading="lazy" decoding="async" src="/assets/images/composer.svg" title="Composer" alt="Composer Logo"></li>
		<li class="flex relative h-[70px] min-h-[70px]"><img class="h-[full] w-auto max-w-[140px] block m-0 py-2"  loading="lazy" decoding="async" src="/assets/images/nodejsDark.svg" title="Node.js" alt="Node.js Logo"></li>
		<li class="flex relative h-[60px] min-h-[60px]"><img class="h-[full] w-auto max-w-[140px] block m-0 py-3"  loading="lazy" decoding="async" src="/assets/images/Git-Logo-2Color.svg" title="Git" alt="Git Logo"></li>
		<li class="flex relative h-[70px] min-h-[70px]"><img class="h-[full] w-auto max-w-[100px] block m-0 "  loading="lazy" decoding="async" src="/assets/images/vite.svg" title="Vite" alt="Vite Logo"></li>
		<li class="flex relative h-[70px] min-h-[70px]"><img class="h-[full] w-auto max-w-[160px] block m-0 py-3"  loading="lazy" decoding="async" src="/assets/images/Vue.js.svg" title="Vue.js" alt="Vue.js Logo"></li>
		<li class="flex relative h-[70px] min-h-[70px]"><img class="h-[full] w-auto max-w-[160px] block m-0"  loading="lazy" decoding="async" src="/assets/images/alpine_long.svg" title="Alpine.js" alt="Alpine.js Logo"></li>
		<li class="flex relative h-[70px] min-h-[70px]"><img class="h-[full] w-auto max-w-[140px] block m-0"  loading="lazy" decoding="async" src="/assets/images/tailwindcss-logotype.svg" title="Tailwind CSS" alt="TailwindCSS Logo"></li>
		<li class="flex relative h-[70px] min-h-[70px]"><img class="h-[full] w-auto max-w-[140px] block m-0"  loading="lazy" decoding="async" src="/assets/images/WordPress-logotype-standard.svg" title="WordPress" alt="WordPress Logo"></li>
		<li class="flex relative h-[70px] min-h-[70px]"><img class="h-[full] w-auto max-w-[120px] block m-0"  loading="lazy" decoding="async" src="/assets/images/shopify_logo_whitebg.svg" title="Shopify" alt="Shopify Logo"></li>
		<li title="Jigsaw by Tighten" class="flex gap-1 items-center justify-center uppercase font-semibold text-black cursor-default"><img class="h-[25px] w-auto block m-0"  loading="lazy" decoding="async" src="/assets/images/jigsaw-logo.svg" alt="Jigsaw Logo"><span>Jigsaw</span></li>
	</ul>
</div>

<div class="my-16 lg:my-24 px-4 relative z-[99]">
		<h2 id="contact" class="scroll-m-8 my-4 text-4xl lg:text-5xl text-center max-w-[800px] mx-auto mb-12 font-semibold">You probably already know how to contact me. If not, reach out below.</h2>
		<form id="contact-form" action="https://api.form-data.com/f/JFPRHf1ZOogCA1" method="POST" class="lg:min-h-[490px] max-w-[800px] relative mx-auto p-8 lg:p-16 bg-white/50 dark:bg-black dark:bg-white/5">
				<div class="flex flex-col md:flex-row min-w-full -mx-3 mb-4">
						<div class="px-3 flex-1">
								<label for="name" class="block mb-2 text-xl">What is your name?*</label>
								<input id="name" placeholder="e.g. Guy Fieri"  name="name" required="required" class=" bg-white/50 dark:bg-white/5 focus:bg-white dark:focus:bg-white/10 block w-full outline-none mb-2 px-4 py-3 ">
						</div>
				
						<div class="px-3 flex-1">
								<label for="email" class="block text-xl mb-2">What is your email address?*</label>
								<input type="email" id="email" placeholder="e.g. welcome@flavortown.com" name="email" required="required" class="bg-white/50 dark:bg-white/5 focus:bg-white dark:focus:bg-white/10 block w-full outline-none mb-2 px-4 py-3 ">
						</div>
		
				</div>   
				<div class="w-full mb-6"><label for="message"
						class="block text-xl mb-2">To what do I owe the pleasure?*</label><textarea id="message" rows="4"
						name="message" placeholder="e.g. Knock knock. Who's there? Irma. Irma who? Irma gerd I like your website!" required="required"
						class="block w-full bg-white/50 dark:bg-white/5 focus:bg-white dark:focus:bg-white/10 outline-none appearance-none mb-2 px-4 py-3"></textarea>
				</div>
	
				<div class="flex w-full"><button type="submit" class="inline-block mt-2 text-xl cursor-pointer font-extrabold rounded-full duration-150 bg-black/75 hover:bg-black dark:bg-white/75 dark:hover:bg-white text-white dark:text-black px-6 py-3"><span>Submit</span></button></div>
		</form>
</div>
@endsection
