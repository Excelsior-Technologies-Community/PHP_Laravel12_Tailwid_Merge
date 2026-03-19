# PHP_Laravel12_Tailwid_Merge


## Project Description

PHP_Laravel12_Tailwid_Merge is a Laravel 12 project demonstrating the usage of Tailwind Merge, a package that automatically merges conflicting Tailwind CSS classes.

This project showcases how to create reusable Blade components like Circle and Button, how to override default classes, and how to use the @twMerge Blade directive to clean up conflicting Tailwind classes automatically.

It provides a clean, modern UI layout using Tailwind CSS v3 and Vite.



## Features

- Reusable Blade Components – Circle and Button

- Automatic Class Merging – Tailwind Merge resolves conflicts

- Blade Directive Example – @twMerge

- Responsive and Interactive UI – hover effects, shadows, scale animations

- Modern Tailwind UI Layout – Cards layout for examples

- Full Laravel 12 Compatibility



## Technologies Used

1. Laravel 12 – PHP framework for backend

2. Tailwind CSS v3 – Utility-first CSS framework

3. Tailwind Merge – Resolve conflicting Tailwind CSS classes

4. Vite – Modern frontend bundler for compiling CSS/JS

5. PHP 8+ – Required for Laravel 12

6. Node.js & NPM – For frontend dependencies




---



## Installation Steps


---


## STEP 1: Create Laravel 12 Project

### Open terminal / CMD and run:

```
composer create-project laravel/laravel PHP_Laravel12_Tailwid_Merge "12.*"

```

### Go inside project:

```
cd PHP_Laravel12_Tailwid_Merge

```

#### Explanation:

Installs a fresh Laravel 12 project and moves into the project folder for development.



## STEP 2: Database Setup (Optional)

### Update database details:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel12_Tailwid_Merge
DB_USERNAME=root
DB_PASSWORD=

```

### Create database in MySQL / phpMyAdmin:

```
Database name: laravel12_Tailwid_Merge

```

### Then Run:

```
php artisan migrate

```


#### Explanation:

Sets up the database connection; migrations create default tables. 

This step is optional as Tailwind Merge does not require a database.




## STEP 3: Install Package

### Run:

```
composer require gehrisandro/tailwind-merge-laravel

```

### Publish Config

```
php artisan vendor:publish --provider="TailwindMerge\Laravel\TailwindMergeServiceProvider"

```



#### Explanation:

Installs the Tailwind Merge Laravel package and publishes its config file to allow customization.





## STEP 4: Install Tailwind v3  

### Run:

```
npm install
npm install -D tailwindcss@3 postcss autoprefixer
npx tailwindcss init -p

```

#### Explanation:

Installs Tailwind CSS and generates the configuration files for styling the UI.






## STEP 5: Configure Tailwind

### tailwind.config.js

```
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    theme: {
        extend: {},
    },
    plugins: [],
}

```

#### Explanation:

Configures Tailwind to scan Blade and JS files for class names.





## STEP 6: resources/css/app.css

### Run:

```
@tailwind base;
@tailwind components;
@tailwind utilities;

```

#### Explanation:

Imports Tailwind’s base, components, and utilities into your CSS, and compiles it for the browser.






## STEP 7: Check vite.config.js

### Open file:

```
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css'],
            refresh: true,
        }),
    ],
});

```

#### Explanation:

Ensures Vite compiles your CSS correctly and supports hot reload.




## STEP 8: Create Circle Component

This is just a reusable UI element 

### Run command:

```
php artisan make:component Circle

php artisan make:component Button

```


### resources/views/components/circle.blade.php

```
<div {{ $attributes->twMerge('w-14 h-14 rounded-full bg-red-500 shadow-lg transition-transform hover:scale-110') }}></div>

```

#### Explanation:

Creates reusable Blade components for Circle and Button UI elements.

Circle component merges default Tailwind classes with any overrides provided via $attributes.




### Open: resources/views/components/button.blade.php

```
<button 
    {{ $attributes->twMerge('px-5 py-2.5 rounded-lg font-medium text-white bg-gray-800 hover:bg-gray-700 transition duration-300 shadow-lg hover:shadow-xl active:scale-95') }}
>
    {{ $slot }}
</button>

```

#### Explanation:

Button component merges default styling with any custom classes passed in.




### Open: resources/views/welcome.blade.php

```
<!DOCTYPE html>
<html>

<head>
    <title>Tailwind Merge Laravel 12 - Card UI</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-900 text-gray-200 min-h-screen">

    <div class="max-w-5xl mx-auto py-12 px-6">

        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-extrabold text-white mb-2">🚀 Tailwind Merge UI</h1>

        </div>

        <!-- Cards Container -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

            <!-- Circle Card -->
            <div class="bg-gray-800 rounded-xl shadow-xl p-6 flex flex-col items-center">
                <h2 class="text-xl font-semibold mb-4 text-white">Circle Example</h2>
                <div class="flex gap-6">
                    <div class="text-center">
                        <p class="text-gray-400 mb-2">Default</p>
                        <x-circle />
                    </div>
                    <div class="text-center">
                        <p class="text-gray-400 mb-2">Override</p>
                        <x-circle class="bg-blue-500 shadow-blue-500/50" />
                    </div>
                </div>
            </div>

            <!-- Button Card -->
            <div class="bg-gray-800 rounded-xl shadow-xl p-6 flex flex-col items-center">
                <h2 class="text-xl font-semibold mb-4 text-white">Button Example</h2>
                <div class="flex flex-wrap gap-4 justify-center">
                    <x-button>
                        Default
                    </x-button>
                    <x-button class="bg-blue-500 hover:bg-blue-600 shadow-blue-500/40">
                        Blue
                    </x-button>
                    <x-button class="bg-green-500 hover:bg-green-600 shadow-green-500/40">
                        Success
                    </x-button>
                </div>
            </div>

            <!-- Directive Card -->
            <div class="bg-gray-800 rounded-xl shadow-xl p-6 flex flex-col">
                <h2 class="text-xl font-semibold mb-4 text-white">Blade Directive</h2>
                <div class="bg-black/40 border border-gray-700 rounded-lg p-4 font-mono text-green-400">
                    @twMerge('p-2 bg-red-500 bg-green-500 text-white')
                </div>
            </div>

            <!-- Explanation Card -->
            <div class="bg-gray-800 rounded-xl shadow-xl p-6 flex flex-col">
                <h2 class="text-xl font-semibold mb-4 text-white">Explanation</h2>
                <ul class="list-disc pl-6 space-y-2 text-gray-400">
                    <li>✨ Automatically removes conflicting Tailwind classes</li>
                    <li>⚡ Last class always wins</li>
                    <li>🎯 Smart merging for responsive & state classes</li>
                    <li>🚀 Perfect for reusable UI components</li>
                </ul>
            </div>

        </div>

    </div>
</body>

</html>

```


#### Explanation:

Displays all components and directive examples, showing how Tailwind Merge resolves conflicts.





## STEP 9: Test It

### Run server:

```
php artisan serve

```

### Run Vite:

```
npm run dev

```

### Open browser:

```
http://127.0.0.1:8000

```


#### Explanation:

Serves the project locally and compiles assets with Vite for live UI testing.




## Expected Output:


<img src="screenshots/Screenshot 2026-03-19 171436.png" width="900">


---

## Project Folder Structure:

```
PHP_Laravel12_Tailwid_Merge
│
├── app/
│   └── View/
│       └── Components/
│           ├── Circle.php
│           └── Button.php
│
├── bootstrap/
├── config/
│   └── tailwind-merge.php
├── database/
├── node_modules/
├── public/
├── resources/
│   ├── css/
│   │   └── app.css
│   └── views/
│       ├── components/
│       │   ├── circle.blade.php
│       │   └── button.blade.php
│       └── welcome.blade.php
├── routes/
│   └── web.php
├── storage/
├── tests/
├── vite.config.js
├── package.json
├── composer.json
└── README.md

```
