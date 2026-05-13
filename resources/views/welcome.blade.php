<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind Merge - Laravel 12</title>
    <meta name="description" content="Smart Tailwind CSS class merging for Laravel components">
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100">

    <div class="max-w-6xl mx-auto py-8 px-4">
        
        <!-- Header -->
        <div class="text-center mb-10">
            <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-2">
                Tailwind Merge
            </h1>
            <p class="text-gray-600 dark:text-gray-400">
                Smart class merging for Laravel components
            </p>
        </div>

        <!-- Simple Components Demo -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            
            <!-- Buttons -->
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                <h2 class="text-lg font-semibold mb-4 text-gray-900 dark:text-white">Buttons</h2>
                <div class="flex flex-wrap gap-3">
                    <x-button>Default</x-button>
                    <x-button variant="success">Success</x-button>
                    <x-button variant="danger">Danger</x-button>
                    <x-button variant="outline">Outline</x-button>
                </div>
            </div>

            <!-- Badges -->
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                <h2 class="text-lg font-semibold mb-4 text-gray-900 dark:text-white">Badges</h2>
                <div class="flex flex-wrap gap-2">
                    <x-badge variant="primary">New</x-badge>
                    <x-badge variant="success">Active</x-badge>
                    <x-badge variant="danger">Error</x-badge>
                    <x-badge variant="warning">Beta</x-badge>
                </div>
            </div>

            <!-- Circles -->
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                <h2 class="text-lg font-semibold mb-4 text-gray-900 dark:text-white">Circles</h2>
                <div class="flex gap-4">
                    <x-circle />
                    <x-circle class="bg-blue-500" />
                    <x-circle class="bg-green-500" />
                    <x-circle class="bg-purple-500" />
                </div>
            </div>

            <!-- Alerts -->
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                <h2 class="text-lg font-semibold mb-4 text-gray-900 dark:text-white">Alerts</h2>
                <div class="space-y-2">
                    <x-alert variant="success" icon="✓" title="Success">
                        Operation completed
                    </x-alert>
                    <x-alert variant="error" icon="✗" title="Error">
                        Something went wrong
                    </x-alert>
                </div>
            </div>

        </div>

        <!-- Tailwind Merge Demo -->
        <div class="mt-8 bg-white dark:bg-gray-800 rounded-lg shadow p-6">
            <h2 class="text-lg font-semibold mb-4 text-gray-900 dark:text-white">How Tailwind Merge Works</h2>
            
            <div class="space-y-4">
                <div>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-2">Base Classes:</p>
                    <code class="block bg-gray-100 dark:bg-gray-900 p-3 rounded text-sm">
                        @twMerge('px-4 py-2 bg-red-500 text-white rounded')
                    </code>
                </div>
                
                <div>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-2">With Override (bg-blue-500):</p>
                    <code class="block bg-gray-100 dark:bg-gray-900 p-3 rounded text-sm">
                        @twMerge('px-4 py-2 bg-red-500 text-white rounded bg-blue-500')
                    </code>
                    <p class="text-xs text-gray-500 mt-1">→ Last class "bg-blue-500" wins, overriding "bg-red-500"</p>
                </div>
            </div>
        </div>

    </div>

</body>

</html>