@extends('layouts.app')

@section('styles')
    <style>
        .img-resize {
            width: 20em;
            height: auto;
        }
        .project-img {
            width: 32em;
            height: auto;
        }
        .border-beginner {
            border-color: #A8E6CF;
        }
        .border-intermediate {
            border-color: #FFD54F;
        }
        .border-proficient {
            border-color: #FF8A65;
        }
        .border-expert {
            border-color: #4A90E2;
        }
        .exp-beginner {
            color: #A8E6CF;
        }
        .exp-intermediate {
            color: #FFD54F;
        }
        .exp-proficient {
            color: #FF8A65;
        }
        .exp-expert {
            color: #4A90E2;
        }
    </style>
@endsection

@section('modals')
@endsection

@php
    $stacks = [
        ['name' => 'PHP', 'level' => 'proficient'],
        ['name' => 'Laravel', 'level' => 'proficient'],
        ['name' => 'C#', 'level' => 'intermediate'],
        ['name' => '.NET', 'level' => 'intermediate'],
        ['name' => 'Javascript', 'level' => 'proficient'],
        ['name' => 'React', 'level' => 'intermediate'],
        ['name' => 'REST API', 'level' => 'proficient'],
        ['name' => 'SQL', 'level' => 'intermediate'],
        ['name' => 'HTML', 'level' => 'proficient'],
        ['name' => 'CSS', 'level' => 'proficient'],
        ['name' => 'ASP.NET', 'level' => 'intermediate'],
        ['name' => 'Blazor', 'level' => 'beginner'],
        ['name' => 'MVC', 'level' => 'proficient'],
        ['name' => 'Web API', 'level' => 'intermediate'],
        ['name' => 'Git', 'level' => 'intermediate'],
        ['name' => 'Bootstrap', 'level' => 'proficient'],
        ['name' => 'Tailwind CSS', 'level' => 'proficient'],
    ]
@endphp

@section('content')
    <div class="container mx-auto">
        <div class="w-3/4 mx-auto my-12 md:grid grid-cols-3 gap-4">
            <div class="col-span-2 mb-6 text-lg sm:text-xl brand-text">
                <p class="brand-text-secondary">Hello World! I am</p>
                <p class="text-3xl font-semibold mt-2">David Le</p>
                <p class="brand-text-accent mt-2">Fullstack Web Developer</p>
                <p class="mt-2">
                    I am a web developer with a passion for creating innovative and user-friendly web solutions.
                    Enthusiastic about problem-solving and constantly eager to learn new technologies in web development, I am keen to explore new opportunities to enhance my skills and contribute to impactful projects.
                </p>
                <div class="flex justify-start items-center mt-5">
                    <a href="{{ asset('resumes/CV David Le.pdf') }}" target="_blank" class="hover:scale-105 transform brand-text-bg brand-accent shadow-md font-medium text-xl px-5 py-2.5 me-2 my-4 hover:bg-red-400"
                    >
                        Get my resume
                    </a>
                </div>
            </div>
            <div class="col-span-1 flex justify-center items-center">
                <img class="img-resize rounded bg-gray-800 shadow-lg border-2 brand-border-accent" src="{{ asset('images/profile-picture-transparent.png') }}" alt="profile">
            </div>
        </div>

        <div id="about" class="mb-12">
            <h1 class="text-3xl font-bold text-center mb-8"><span class="border-b-4 brand-border-accent brand-text-secondary">About me</span></h1>
            <div class="flex justify-center items-center text-sm sm:text-xl">
                <p class="w-3/4">
                    I have completed a vocational education program in .NET web development. Following this, I have gained valuable professional experience as a full-stack developer, with a particular focus on working with PHP and Laravel.
                    My experience in the industry has made me proficient in developing and maintaining complex web-based applications.
                    Additionally, I am always open to learning new tools and frameworks, allowing me to effectively contribute to the creation of high-quality end products.
                    <br>
                    <br>
                    I also work on personal projects in my spare time to further develop my skills and seize opportunities to learn new technologies.
                </p>
            </div>
        </div>

        <div id="skills" class="mb-12 w-3/4 mx-auto">
            <h1 class="text-3xl font-bold text-center mb-8"><span class="border-b-4 brand-border-accent brand-text-secondary">Skills</h1>
            <div class="flex justify-center items-center mx-auto mb-5">
                <ul class="flex flex-wrap justify-center items-center gap-2 text-sm">
                    <li class="flex items-center">
                        <span class="exp-beginner mr-2"><i class="bi bi-circle-fill"></i></span> Beginner
                    </li>
                    <li class="flex items-center">
                        <span class="exp-intermediate mr-2"><i class="bi bi-circle-fill"></i></span> Intermediate
                    </li>
                    <li class="flex items-center">
                        <span class="exp-proficient mr-2"><i class="bi bi-circle-fill"></i></span> Proficient
                    </li>
                    <li class="flex items-center">
                        <span class="exp-expert mr-2"><i class="bi bi-circle-fill"></i></span> Expert
                    </li>
                </ul>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-5 gap-4 text-xs sm:text-lg">
                @foreach($stacks as $stack)
                    <div class="border py-2 px-1 text-center exp-{{ $stack['level'] }} border-{{ $stack['level'] }}">
                        <span>{{ $stack['name'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>

        <div id="projects" class="mb-12">
            <h1 class="text-3xl font-bold text-center mb-8"><span class="border-b-4 brand-border-accent brand-text-secondary">Projects</h1>
            <div class="flex flex-col justify-center sm:justify-between items-center space-y-4 gap-4 px-4 sm:px-0">
                <div class="w-3/4 flex gap-8">
                    <div class="hidden sm:block">
                        <img class="rounded project-img" src="{{ asset('images/haf-page.PNG') }}" alt="happyasianfood">
                    </div>
                    <div class="sm:w-3/4 mx-auto sm:mx-0">
                        <h2 class="text-xl font-semibold">Happy Asian Food</h2>
                        <p class="brand-text-secondary">
                            Made with: PHP, Laravel, Javascript, TailwindCSS
                        </p>
                        <p>
                            Developed a responsive website for a newly launched Asian restaurant, showcasing its menu, ambiance, and contact information.
                            Integrated user-friendly navigation and an engaging design to attract and inform potential diners effectively.
                        </p>
                        <button
                            type="button"
                            class="border hover:scale-105 transform shadow-md text-md px-5 py-2.5 me-2 my-4 font-normal go-to-url brand-border-accent brand-text-accent"
                            data-url="https://happyasianfood.com/"
                        >
                            Visit page
                        </button>
                    </div>
                </div>

                <div class="sm:w-3/4 flex gap-8">
                    <div class="hidden sm:block">
                        <img class="rounded project-img" src="{{ asset('images/logoipsum-page.PNG') }}" alt="logoipsum">
                    </div>
                    <div class="w-3/4 mx-auto sm:mx-0">
                        <h2 class="text-xl font-semibold">Logoipsum (WIP)</h2>
                        <p class="brand-text-secondary">
                            Made with: PHP, Laravel, Javascript, TailwindCSS
                        </p>
                        <p>
                            Currently developing a comprehensive e-commerce website as a side project.
                            This initiative aims to create a fully functional online platform, featuring product listings, shopping cart functionality, and secure payment processing.
                        </p>
                        <button
                            type="button"
                            class="border hover:scale-105 transform shadow-md text-md px-5 py-2.5 me-2 my-4 font-normal go-to-url brand-border-accent brand-text-accent"
                            data-url="https://poolexdee.com/"
                        >
                            Visit page
                        </button>
                    </div>
                </div>

                <div class="sm:w-3/4 flex gap-8">
                    <div class="hidden sm:block">
                        <img class="rounded project-img border" src="{{ asset('images/payshare.PNG') }}" alt="payshare">
                    </div>
                    <div class="w-3/4 mx-auto sm:mx-0">
                        <h2 class="text-xl font-semibold">PayShare</h2>
                        <p class="brand-text-secondary">
                            Made with: PHP, Laravel, Javascript, TailwindCSS, ExchangeRate-API
                        </p>
                        <p>
                            Payshare is a web application designed to facilitate the management of shared expenses within a group.
                            It allows users to create groups, add members, and efficiently track and manage shared bills.
                            Additionally, the application features a currency converter, making it an ideal solution for travelers.
                        </p>
                        <button
                            type="button"
                            class="border hover:scale-105 transform shadow-md text-md px-5 py-2.5 me-2 my-4 font-normal go-to-url brand-border-accent brand-text-accent"
                            data-url="{{ route('payshare.index') }}"
                        >
                            Demo
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div id="contact">
            <h1 class="text-3xl font-bold text-center mb-8"><span class="border-b-4 brand-border-accent brand-text-secondary">Contact</h1>
            <div class="flex justify-center items-center">
                <p class="w-3/4 sm:text-xl">
                    I am open to discussing potential job opportunities or collaborations.
                    With experience in web development, I am interested in roles that allow me to work on exciting and challenging projects.
                    If you have a project or role in mind, feel free to reach out and let's discuss.
                </p>
            </div>
            <div class="flex justify-center items-center mt-8 gap-8 text-5xl">
                <div class="hover:scale-110 transform origin-center">
                    <a href="mailto:davidle90@hotmail.com" target="_blank"><i class="bi bi-envelope"></i></a>
                </div>
                <div class="hover:scale-110 transform origin-center text-blue-400">
                    <a href="https://linkedin.com/in/david-le-24680275" target="_blank"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
            <div class="flex justify-center items-center mt-5">
                <a href="{{ asset('resumes/CV David Le.pdf') }}" target="_blank" class="hover:scale-105 transform brand-text-bg brand-accent shadow-md font-medium text-xl px-5 py-2.5 me-2 my-4 hover:bg-red-400"
                >
                    Get my resume
                </a>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('.go-to-url').on('click', function(event) {
                event.preventDefault();
                let url = $(this).data('url');
                window.open(url, '_blank');
            });
        });
    </script>
@endsection
