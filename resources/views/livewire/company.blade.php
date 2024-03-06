<div>
    @foreach ($companys as $company)
    <p class="text-gray-500 dark:text-gray-400">Du bist in der</p>
    <p class="font-semibold text-gray-900 underline dark:text-white decoration-blue-500">
        {{ $company->name }}</p>
    <p class="text-gray-500 dark:text-gray-400"> beschäftigt</p>
    @endforeach
    <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
</div>
