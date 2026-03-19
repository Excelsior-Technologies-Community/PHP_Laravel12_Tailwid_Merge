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