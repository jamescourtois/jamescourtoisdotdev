@extends('_layouts.main')

@section('body')

<div class="w-full min-h-dvh flex flex-col items-center justify-center">
	
	@include('_layouts.face', ['class' => 'lg:scale-120 lg:mb-8'])
	
	<div class="p-4 mx-auto text-center w-full">
			<h1 class="text-4xl lg:text-6xl font-extrabold">James Courtois</h1>
			<ul class="text-xl list-none flex flex-col gap-2 my-4">
				<li>Full Stack Web Developer</li>
				<li>
					<svg class="fill-current size-[0.95rem] translate-y-[-2px] inline-block" version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
						<path d="M16 0c-5.523 0-10 4.477-10 10 0 10 10 22 10 22s10-12 10-22c0-5.523-4.477-10-10-10zM16 16c-3.314 0-6-2.686-6-6s2.686-6 6-6 6 2.686 6 6-2.686 6-6 6z"></path>
					</svg>
					Based in St. Louis, MO
				</li>
			</ul>
			<ul class="list-none flex gap-4 my-4 items-center justify-center">
				<li><a href="#samples" class="inline-block mt-2 text-xl cursor-pointer font-extrabold rounded-full bg-black dark:bg-white text-white dark:text-black px-8 py-4">Websites</a></li>
				<li><a href="#contact" class="inline-block mt-2 text-xl cursor-pointer font-extrabold rounded-full bg-black dark:bg-white text-white dark:text-black px-8 py-4">Contact</a></li>
			</ul>
	</div>
</div>
<div id="samples" class="scroll-m-16">
	<h2 class="my-4 text-4xl lg:text-5xl text-center max-w-[800px] mx-auto">Here are <span class="font-extrabold">{{$projects->count()}} examples</span> of sites I've built that are still humming along.</h2>
	<p class="text-center px-4 block text-gray-500 mb-16">(<span class="hidden lg:inline">Click</span><span class="lg:hidden">Tap</span> one to launch a new tab.)</p>
	<ul class="list-none grid grid-cols-1 gap-4 px-4 md:grid-cols-2 lg:grid-cols-3 pb-8">
		@foreach ($projects as $project)
			<li class="relative col-span-1 text-center flex flex-col items-center justify-center border border-black dark:border-white">
				<img class="block w-full h-auto " src="assets/images/{{$project->image}}" alt="Screenshot of {{$project->title}}">
				<a target="_blank" class="absolute inset-0 z-10" href="{{ $project->url }}">
					<span class="sr-only">View {{ $project->title }}</span>
				</a>
				<span class="font-bold text-xl lg:text-2xl block p-2">{{ $project->title }}</span>
			</li>
		@endforeach
	</ul>
</div>

<div class="py-16 px-4 lg:py-24">
		<h2 id="contact" class="scroll-m-8 my-4 text-4xl lg:text-5xl text-center max-w-[800px] mx-auto mb-12">You probably already know how to contact me. If not, reach out below.</h2>
		<form id="contact-form" action="https://api.form-data.com/f/JFPRHf1ZOogCA1" method="POST" class="lg:min-h-[490px] max-w-[800px] relative mx-auto p-8 lg:p-16 border border-black dark:border-white">
				<div class="flex flex-col md:flex-row min-w-full -mx-3 mb-4">
						<div class="px-3 flex-1">
								<label for="name" class="block mb-2 text-xl">What is Your Name?*</label>
								<input id="name" placeholder="e.g. Guy Fieri"  name="name" required="required" class="border border-black dark:border-white block w-full outline-none mb-2 px-4 py-3 ">
						</div>
				
						<div class="px-3 flex-1">
								<label for="email" class="block text-xl mb-2">What is your email address?*</label>
								<input type="email" id="email" placeholder="e.g. welcome@flavortown.com" name="email" required="required" class="border border-black dark:border-white block w-full outline-none mb-2 px-4 py-3 ">
						</div>
		
				</div>   
				<div class="w-full mb-6"><label for="message"
						class="block text-xl mb-2">To what do I owe the pleasure?*</label><textarea id="message" rows="4"
						name="message" placeholder="e.g. Dear James, I will pay you one billion dollars for a website..." required="required"
						class="border-black dark:border-white border block w-full outline-none appearance-none mb-2 px-4 py-3"></textarea>
				</div>
	
				<div class="flex w-full"><button type="submit" class="inline-block mt-2 text-xl cursor-pointer font-extrabold rounded-full bg-black dark:bg-white text-white dark:text-black px-8 py-4"><span>Submit</span></button></div>
		</form>
</div>
@endsection
