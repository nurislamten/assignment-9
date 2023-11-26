Task1:
composer create-project --prefer-dist laravel/laravel your-project-name

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password

Task2:
php artisan make:migration create_projects_table --create=projects

php artisan make:migration create_blog_posts_table --create=blog_posts

php artisan migrate

php artisan make:seeder ProjectsSeeder

php artisan db:seed --class=ProjectsSeeder

php artisan db:seed --class=BlogPostsSeeder

Task3:
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your Website Title</title>
 
</head>
<body>
    <header>
      
        <nav>
       
        </nav>
    </header>
    
    <main>
       
        @yield('content') 
    </main>
Task4:
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Portfolio Navigation</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav class="navbar">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About Me</a></li>
            <li><a href="projects.html">Projects</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
    </nav>
</body>
</html>


body, ul {
    margin: 0;
    padding: 0;
}

/* Style the navbar */
.navbar {
    background-color: #333;
    color: #fff;
}

.navbar ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

.navbar ul li {
    display: inline;
}

.navbar ul li a {
    display: inline-block;
    padding: 20px;
    text-decoration: none;
    color: #fff;
}

.navbar ul li a:hover {
    background-color: #555;
}

Task5:
@extends('layouts.app')

@section('content')
    <h1>Welcome to the Home Page</h1>
>

    @extends('layouts.app')

@section('content')
    <h1>About Me</h1>
  
@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    @include('partials.navbar')

    <div class="container">
        @yield('content')
    </div>


</body>
</html>

<nav class="navbar">
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('about') }}">About Me</a></li>
        <li><a href="{{ route('projects') }}">Projects</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
    </ul>
</nav>
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');
Task6:
@extends('layouts.app')

@section('content')
    <section class="intro-section">
        <div class="intro-text">
            <h1>Welcome, I'm [Your Name]</h1>
            <p>I'm a [Your Title/Profession] passionate about [Your Skills/Expertise].</p>
            <a href="#skills" class="btn">Explore My Skills</a>
        </div>
    </section>

    <section class="skills-section" id="skills">
        <div class="skills-content">
            <h2>My Skills</h2>
            <p>Here are some of the skills I specialize in:</p>
            <ul>
                <li>Skill 1</li>
                <li>Skill 2</li>
                <li>Skill 3</li>
          
            </ul>
        </div>
    </section>
@endsection


.intro-section {
    background-color: #f7f7f7;
    padding: 80px 20px;
    text-align: center;
}

.intro-text {
    max-width: 600px;
    margin: 0 auto;
}

.intro-text h1 {
    font-size: 2.5rem;
    margin-bottom: 20px;
}

.intro-text p {
    font-size: 1.2rem;
    color: #444;
    margin-bottom: 30px;
}

.btn {
    display: inline-block;
    padding: 12px 24px;
    text-decoration: none;
    background-color: #3498db;
    color: #fff;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #2980b9;
}

.skills-section {
    padding: 60px 20px;
    text-align: center;
}

.skills-content {
    max-width: 800px;
    margin: 0 auto;
}

.skills-content h2 {
    font-size: 2rem;
    margin-bottom: 20px;
}

.skills-content p {
    font-size: 1.1rem;
    color: #444;
    margin-bottom: 30px;
}

.skills-content ul {
    list-style: none;
    padding: 0;
}

.skills-content ul li {
    font-size: 1.1rem;
    margin-bottom: 10px

}

Task7:
@extends('layouts.app')

@section('content')
    <section class="about-section">
        <div class="about-content">
            <h2>About Me</h2>
            <p>Hello! I'm [Your Name], and I'm passionate about [Your Passion/Field]. Here's a bit about my background:</p>
            <div class="details">
                <h3>Education</h3>
                <ul>
                    <li>
                        <h4>Degree Name</h4>
                        <p>University Name | Graduation Year</p>
                        <p>Description about the degree, courses, etc.</p>
                    </li>
               
                </ul>
                <h3>Work Experience</h3>
                <ul>
                    <li>
                        <h4>Job Title</h4>
                        <p>Company Name | Duration</p>
                        <p>Description of responsibilities, achievements, etc.</p>
                    </li>
               
                </ul>
                <h3>Certifications</h3>
                <ul>
                    <li>
                        <h4>Certification Name</h4>
                        <p>Issuing Organization | Year</p>
                        <p>Description or details about the certification</p>
                    </li>
              
                </ul>
            </div>
        </div>
        </section>
@endsection
Task8:
use App\Models\Project; 

public function showProjects()
{
    $projects = Project::all();
    return view('projects', compact('projects'));

}
Route::get('/projects', 'YourController@showProjects')->name('projects');
@extends('layouts.app')

@section('content')
    <section class="projects-section">
        <div class="projects-content">
            <h2>My Projects</h2>
            <div class="projects-grid">
                @foreach($projects as $project)
                    <div class="project-card">
                        <h3>{{ $project->title }}</h3>
                        <p>{{ $project->description }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

<div class="project-card">
    <h3>Project Name 1</h3>
    <p>Description of Project 1</p>

</div>
Task9:
@extends('layouts.app')

@section('content')
    <section class="contact-section">
        <div class="contact-content">
            <h2>Contact Me</h2>
            <form method="POST" action="{{ route('contact.submit') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit">Submit</button>
            </form>
        </div>
    </section>
@endsection
use Illuminate\Http\Request;

public function submitContactForm(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string',
    ]);

   

    return redirect()->back()->with('success', 'Your message has been sent
    
    successfull
    Route::post('/contact', 'ContactController@submitContactForm')->name('contact.submit');