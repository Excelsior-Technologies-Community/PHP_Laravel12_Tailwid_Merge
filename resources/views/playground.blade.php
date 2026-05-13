<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind Merge - Playground</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100">

    <div class="max-w-7xl mx-auto py-8 px-4">
        
        <!-- Header -->
        <div class="text-center mb-10">
            <h1 class="text-4xl font-bold mb-2">🎮 Tailwind Merge Playground</h1>
            <p class="text-gray-600 dark:text-gray-400">Test and experiment with Tailwind class merging</p>
            <a href="/" class="inline-block mt-4 text-blue-500 hover:text-blue-600">← Back to Home</a>
        </div>

        <!-- Feature 1: Live Class Editor -->
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 mb-6">
            <h2 class="text-xl font-semibold mb-4">🎨 Live Class Editor</h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium mb-2">Enter Tailwind Classes:</label>
                    <textarea id="classInput" rows="4" class="w-full p-3 border rounded-lg font-mono text-sm bg-gray-50 dark:bg-gray-900" 
                        placeholder="px-4 py-2 bg-red-500 bg-blue-500 text-white rounded-lg">px-4 py-2 bg-red-500 bg-blue-500 text-white rounded-lg shadow-md</textarea>
                    <div class="flex gap-2 mt-3">
                        <button onclick="mergeClasses()" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">🔄 Merge</button>
                        <button onclick="resetClasses()" class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600">📝 Reset</button>
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium mb-2">Live Preview:</label>
                    <div id="previewBox" class="p-4 border-2 border-dashed rounded-lg min-h-[120px] flex items-center justify-center">
                        <div id="previewElement" class="inline-block transition-all">
                            Hover Me!
                        </div>
                    </div>
                    <div class="mt-3">
                        <label class="block text-sm font-medium mb-2">Merged Classes:</label>
                        <div id="mergedOutput" class="p-2 bg-gray-100 dark:bg-gray-900 rounded text-xs font-mono break-all"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Feature 2: Responsive Preview -->
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 mb-6">
            <h2 class="text-xl font-semibold mb-4">📱 Responsive Preview</h2>
            <div class="flex gap-2 mb-4">
                <button onclick="setViewport('mobile')" class="px-4 py-2 bg-gray-200 dark:bg-gray-700 rounded-lg hover:bg-blue-500 hover:text-white">Mobile</button>
                <button onclick="setViewport('tablet')" class="px-4 py-2 bg-gray-200 dark:bg-gray-700 rounded-lg hover:bg-blue-500 hover:text-white">Tablet</button>
                <button onclick="setViewport('desktop')" class="px-4 py-2 bg-gray-200 dark:bg-gray-700 rounded-lg hover:bg-blue-500 hover:text-white">Desktop</button>
            </div>
            <div id="responsiveFrame" class="border rounded-lg overflow-auto mx-auto transition-all" style="width:100%">
                <div class="p-4 bg-blue-500 text-white text-center">
                    Responsive Component
                    <div class="text-xs mt-2" id="sizeIndicator">Width: 100%</div>
                </div>
            </div>
        </div>

        <!-- Feature 3: Preset Templates -->
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 mb-6">
            <h2 class="text-xl font-semibold mb-4">🎨 Preset Templates</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mb-4">
                <button onclick="loadPreset('button')" class="px-4 py-2 bg-gray-100 dark:bg-gray-700 rounded-lg hover:bg-blue-500 hover:text-white">Button</button>
                <button onclick="loadPreset('card')" class="px-4 py-2 bg-gray-100 dark:bg-gray-700 rounded-lg hover:bg-blue-500 hover:text-white">Card</button>
                <button onclick="loadPreset('badge')" class="px-4 py-2 bg-gray-100 dark:bg-gray-700 rounded-lg hover:bg-blue-500 hover:text-white">Badge</button>
                <button onclick="loadPreset('alert')" class="px-4 py-2 bg-gray-100 dark:bg-gray-700 rounded-lg hover:bg-blue-500 hover:text-white">Alert</button>
                <button onclick="loadPreset('input')" class="px-4 py-2 bg-gray-100 dark:bg-gray-700 rounded-lg hover:bg-blue-500 hover:text-white">Input</button>
                <button onclick="loadPreset('navbar')" class="px-4 py-2 bg-gray-100 dark:bg-gray-700 rounded-lg hover:bg-blue-500 hover:text-white">Navbar</button>
            </div>
            <div id="presetPreview" class="p-4 bg-gray-100 dark:bg-gray-900 rounded-lg min-h-[100px] flex items-center justify-center">
                <div class="text-gray-500">Click any preset above</div>
            </div>
        </div>

        <!-- Feature 4: CSS to Tailwind Converter -->
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 mb-6">
            <h2 class="text-xl font-semibold mb-4">🔄 CSS to Tailwind Converter</h2>
            <div class="grid md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium mb-2">CSS Code:</label>
                    <textarea id="cssInput" rows="3" class="w-full p-3 border rounded-lg font-mono text-sm bg-gray-50 dark:bg-gray-900" 
                        placeholder="padding: 10px 20px; background: blue; color: white; border-radius: 8px;"></textarea>
                    <button onclick="convertCss()" class="mt-3 px-4 py-2 bg-purple-500 text-white rounded-lg hover:bg-purple-600">Convert</button>
                </div>
                <div>
                    <label class="block text-sm font-medium mb-2">Tailwind Classes:</label>
                    <div id="tailwindResult" class="p-3 bg-gray-100 dark:bg-gray-900 rounded-lg font-mono text-sm min-h-[100px]"></div>
                </div>
            </div>
        </div>

        <!-- Feature 5: Component Builder -->
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 mb-6">
            <h2 class="text-xl font-semibold mb-4">🏗️ Component Builder</h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div class="space-y-3">
                    <div>
                        <label class="block text-sm font-medium mb-1">Background:</label>
                        <select id="builderBg" class="w-full p-2 border rounded-lg" onchange="updatePreview()">
                            <option value="bg-blue-500">Blue</option>
                            <option value="bg-red-500">Red</option>
                            <option value="bg-green-500">Green</option>
                            <option value="bg-purple-500">Purple</option>
                            <option value="bg-pink-500">Pink</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Size:</label>
                        <select id="builderSize" class="w-full p-2 border rounded-lg" onchange="updatePreview()">
                            <option value="px-4 py-2">Medium</option>
                            <option value="px-2 py-1">Small</option>
                            <option value="px-6 py-3">Large</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Border Radius:</label>
                        <select id="builderRadius" class="w-full p-2 border rounded-lg" onchange="updatePreview()">
                            <option value="rounded">Default</option>
                            <option value="rounded-lg">Large</option>
                            <option value="rounded-full">Full</option>
                            <option value="rounded-none">None</option>
                        </select>
                    </div>
                    <button onclick="copyComponentCode()" class="w-full px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600">📋 Copy Code</button>
                </div>
                <div>
                    <label class="block text-sm font-medium mb-2">Preview:</label>
                    <div id="builderPreview" class="p-4 bg-gray-100 dark:bg-gray-900 rounded-lg flex items-center justify-center min-h-[150px]">
                        <div id="builderElement" class="bg-blue-500 text-white px-4 py-2 rounded">Component</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Feature 6: Class Analyzer -->
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6">
            <h2 class="text-xl font-semibold mb-4">📊 Class Analyzer</h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium mb-2">Enter Classes:</label>
                    <textarea id="analyzerInput" rows="3" class="w-full p-3 border rounded-lg font-mono text-sm bg-gray-50 dark:bg-gray-900" 
                        placeholder="flex items-center justify-between p-4 bg-white shadow rounded-lg">flex items-center justify-between p-4 bg-white shadow rounded-lg</textarea>
                    <button onclick="analyzeClasses()" class="mt-3 px-4 py-2 bg-teal-500 text-white rounded-lg hover:bg-teal-600">Analyze</button>
                </div>
                <div>
                    <label class="block text-sm font-medium mb-2">Analysis Results:</label>
                    <div id="analysisResult" class="space-y-2">
                        <div class="p-2 bg-gray-100 dark:bg-gray-900 rounded">Total Classes: <span id="totalClasses">-</span></div>
                        <div class="p-2 bg-gray-100 dark:bg-gray-900 rounded">Estimated Size: <span id="estimatedSize">-</span> KB</div>
                        <div class="p-2 bg-gray-100 dark:bg-gray-900 rounded">Conflicts: <span id="conflictCount">-</span></div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
        // ============================================
        // FEATURE 1: Live Class Editor
        // ============================================
        function mergeClasses() {
            const input = document.getElementById('classInput').value;
            const classArray = input.trim().split(/\s+/);
            
            const conflictGroups = {};
            const result = [];
            
            for(let i = classArray.length - 1; i >= 0; i--) {
                const cls = classArray[i];
                if(!cls) continue;
                
                let prefix = cls.split('-')[0];
                if(prefix === 'bg' || prefix === 'text' || prefix === 'p' || prefix === 'm' || 
                   prefix === 'px' || prefix === 'py' || prefix === 'mx' || prefix === 'my' ||
                   prefix === 'rounded' || prefix === 'shadow') {
                    if(!conflictGroups[prefix]) {
                        conflictGroups[prefix] = cls;
                        result.unshift(cls);
                    }
                } else {
                    if(!result.includes(cls)) {
                        result.unshift(cls);
                    }
                }
            }
            
            const merged = result.join(' ');
            document.getElementById('mergedOutput').innerHTML = merged || '(empty)';
            
            const preview = document.getElementById('previewElement');
            preview.className = merged + ' inline-block transition-all';
            preview.textContent = merged ? 'Preview' : 'No classes';
        }
        
        function resetClasses() {
            document.getElementById('classInput').value = 'px-4 py-2 bg-blue-500 text-white rounded-lg shadow-md hover:shadow-xl';
            mergeClasses();
        }
        
        // ============================================
        // FEATURE 2: Responsive Preview
        // ============================================
        function setViewport(size) {
            const frame = document.getElementById('responsiveFrame');
            const indicator = document.getElementById('sizeIndicator');
            
            if(size === 'mobile') {
                frame.style.width = '320px';
                indicator.innerHTML = 'Width: 320px (Mobile)';
            } else if(size === 'tablet') {
                frame.style.width = '768px';
                indicator.innerHTML = 'Width: 768px (Tablet)';
            } else {
                frame.style.width = '100%';
                indicator.innerHTML = 'Width: 100% (Desktop)';
            }
        }
        
        // ============================================
        // FEATURE 3: Preset Templates
        // ============================================
        function loadPreset(type) {
            const preview = document.getElementById('presetPreview');
            
            if(type === 'button') {
                preview.innerHTML = '<button class="px-6 py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600 shadow-md transition">Click Me</button>';
            } else if(type === 'card') {
                preview.innerHTML = '<div class="w-64 bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6"><h3 class="font-bold mb-2">Card Title</h3><p class="text-gray-600 dark:text-gray-400">Card content here</p></div>';
            } else if(type === 'badge') {
                preview.innerHTML = '<span class="px-3 py-1 bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200 rounded-full text-sm">New Badge</span>';
            } else if(type === 'alert') {
                preview.innerHTML = '<div class="p-4 bg-blue-100 dark:bg-blue-900/30 border-l-4 border-blue-500 text-blue-800 dark:text-blue-200 rounded">Success! Operation completed.</div>';
            } else if(type === 'input') {
                preview.innerHTML = '<input type="text" class="px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter text">';
            } else if(type === 'navbar') {
                preview.innerHTML = '<nav class="flex gap-4 p-4 bg-gray-800 text-white rounded-lg"><a href="#">Home</a><a href="#">About</a><a href="#">Contact</a></nav>';
            }
        }
        
        // ============================================
        // FEATURE 4: CSS to Tailwind Converter
        // ============================================
        function convertCss() {
            const css = document.getElementById('cssInput').value.toLowerCase();
            let result = '';
            
            if(css.includes('background: blue') || css.includes('background:blue')) {
                result = 'bg-blue-500 ';
            } else if(css.includes('background: red')) {
                result = 'bg-red-500 ';
            } else if(css.includes('background: green')) {
                result = 'bg-green-500 ';
            } else if(css.includes('background: purple')) {
                result = 'bg-purple-500 ';
            } else {
                result = 'bg-gray-500 ';
            }
            
            if(css.includes('color: white')) {
                result += 'text-white ';
            } else if(css.includes('color: black')) {
                result += 'text-black ';
            }
            
            if(css.includes('padding:')) {
                if(css.includes('10px') && css.includes('20px')) {
                    result += 'px-5 py-2.5 ';
                } else {
                    result += 'p-4 ';
                }
            }
            
            if(css.includes('border-radius:')) {
                result += 'rounded-lg ';
            }
            
            if(css.includes('display: flex')) {
                result += 'flex ';
            }
            
            if(css.includes('justify-content: center')) {
                result += 'justify-center ';
            }
            
            if(result === '') {
                result = 'p-4 bg-blue-500 text-white rounded-lg';
            }
            
            document.getElementById('tailwindResult').innerHTML = '<code class="text-green-600 dark:text-green-400">' + result.trim() + '</code>';
        }
        
        // ============================================
        // FEATURE 5: Component Builder
        // ============================================
        function updatePreview() {
            const bg = document.getElementById('builderBg').value;
            const size = document.getElementById('builderSize').value;
            const radius = document.getElementById('builderRadius').value;
            
            const element = document.getElementById('builderElement');
            element.className = bg + ' text-white ' + size + ' ' + radius;
            element.textContent = 'Component';
        }
        
        function copyComponentCode() {
            const bg = document.getElementById('builderBg').value;
            const size = document.getElementById('builderSize').value;
            const radius = document.getElementById('builderRadius').value;
            
            // Using regular string, not template literal with PHP
            const code = '<button class="' + bg + ' text-white ' + size + ' ' + radius + '">\n    Button Text\n</button>';
            
            navigator.clipboard.writeText(code);
            alert('Component code copied to clipboard!');
        }
        
        // ============================================
        // FEATURE 6: Class Analyzer
        // ============================================
        function analyzeClasses() {
            const input = document.getElementById('analyzerInput').value;
            const classes = input.trim().split(/\s+/).filter(c => c);
            const total = classes.length;
            const size = (total * 0.08).toFixed(2);
            
            let conflicts = 0;
            const seen = {};
            
            for(let i = 0; i < classes.length; i++) {
                const cls = classes[i];
                let prefix = cls.split('-')[0];
                if(prefix === 'bg' || prefix === 'text' || prefix === 'p' || prefix === 'm') {
                    if(seen[prefix]) {
                        conflicts++;
                    }
                    seen[prefix] = cls;
                }
            }
            
            document.getElementById('totalClasses').innerHTML = total;
            document.getElementById('estimatedSize').innerHTML = size;
            document.getElementById('conflictCount').innerHTML = conflicts;
        }
        
        // ============================================
        // INITIALIZE
        // ============================================
        window.onload = function() {
            resetClasses();
            analyzeClasses();
            updatePreview();
            loadPreset('button');
        };
    </script>

</body>  

</html>