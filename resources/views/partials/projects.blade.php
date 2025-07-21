{{-- Projects Section --}}
<section id="projects" class="py-20 bg-gray-900/50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-montserrat font-bold text-white mb-4">
                Featured <span class="text-blue-400">Projects</span>
            </h2>
            <div class="w-20 h-1 bg-gradient-to-r from-blue-500 to-purple-500 mx-auto mb-8"></div>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                A showcase of my academic and real-world software development projects
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
                $projectColors = [
                    'Laravel' => 'bg-red-600 text-white',
                    'MySQL' => 'bg-blue-600 text-white',
                    'Blade' => 'bg-orange-600 text-white',
                    'Tailwind CSS' => 'bg-teal-600 text-white',
                    'Python' => 'bg-yellow-600 text-gray-900',
                    'SQLite3' => 'bg-purple-600 text-white',
                    'Tkinter' => 'bg-green-600 text-white',
                    'CodeIgniter 4' => 'bg-pink-600 text-white',
                    'Bootstrap' => 'bg-indigo-600 text-white',
                ];

                $projects = [
                    [
                        'title' => 'Learning Management System',
                        'description' =>
                            'A custom-built LMS for Filamer Christian University CCS as a thesis project. Features include course management, user access control, quizzes, and grading.',
                        'tech' => ['Laravel', 'MySQL', 'Blade', 'Tailwind CSS'],
                    ],
                    [
                        'title' => 'Barangay Booking System',
                        'description' =>
                            'An appointment scheduling system for barangay offices developed during OJT using Python. Allows citizens to book services and request documents online.',
                        'tech' => ['Python', 'SQLite3', 'Tkinter'],
                    ],
                    [
                        'title' => 'Clinic Booking System',
                        'description' =>
                            'A medical appointment system created in Python for streamlining patient scheduling and doctor assignments in local clinics.',
                        'tech' => ['Python', 'SQLite3', 'Tkinter'],
                    ],
                    [
                        'title' => 'Fitness Center Management System',
                        'description' =>
                            'A system built with Python for managing gym memberships, session bookings, and trainer schedules for a fitness center.',
                        'tech' => ['Python', 'SQLite3', 'Tkinter'],
                    ],
                    [
                        'title' => 'Point of Sale (POS) Systems',
                        'description' =>
                            'Custom POS systems developed for small businesses, with features like sales tracking and inventory control. Most were built with Laravel, others with CodeIgniter.',
                        'tech' => ['Laravel', 'Tailwind CSS', 'CodeIgniter 4', 'Bootstrap', 'MySQL'],
                    ],
                    [
                        'title' => 'Portfolio Website',
                        'description' =>
                            'My personal portfolio built with Laravel and Tailwind CSS to showcase my resume, projects, and technical skills.',
                        'tech' => ['Laravel 12', 'Blade', 'Tailwind CSS'],
                    ],
                ];
            @endphp

            @foreach ($projects as $project)
                <div
                    class="bg-gray-800/50 backdrop-blur-sm border border-gray-700 rounded-xl group hover:border-blue-500/50 transition-all duration-300 p-6 flex flex-col justify-between h-full">
                    <div>
                        <h3 class="text-xl font-semibold text-white mb-2">{{ $project['title'] }}</h3>
                        <p class="text-gray-300 text-sm mb-4">{{ $project['description'] }}</p>
                    </div>
                    <div class="flex flex-wrap gap-2 mt-auto">
                        @foreach ($project['tech'] as $tech)
                            <span
                                class="px-3 py-1 rounded-full text-xs
                                {{ $projectColors[$tech] ?? 'bg-gray-700 text-gray-300' }}">
                                {{ $tech }}
                            </span>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
