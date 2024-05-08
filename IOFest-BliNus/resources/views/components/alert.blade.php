@php
$backgroundColorBox = [
'simple' => 'bg-gray-200',
'success' => 'bg-green-300',
'danger' => 'bg-red-500',
'warning' => 'bg-yellow-300',
// Add more mappings as needed
];

$colorText = [
'simple' => 'text-black',
'success' => 'text-black',
'danger' => 'text-white',
'warning' => 'text-black',
];

$backgroundColor = $backgroundColorBox[$type] ?? 'bg-gray-300';
$textColor = $colorText[$type] ?? 'text-black';
@endphp

<div class="p-5 w-full {{ $backgroundColor }} rounded-lg border border-gray-200 flex items-center justify-center text-sm mb-4 overflow-hidden">
    <p class="text-center {{ $textColor }}">{{$message}}</p>
</div>