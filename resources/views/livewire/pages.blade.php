<div class="overflow-x-auto border-b border-gray-500 ">
    <table class="min-w-full leading-normal  ">
        <thead class="overflow-x-auto ">
            <tr>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    URL
                </th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    Tittel
                </th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    Sidevisninger
                </th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    Sessions
                </th>
                <!-- Legg til flere kolonner etter behov -->
            </tr>
        </thead>
        <tbody>
            @foreach ($urls as $url)
                <tr>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">
                            <a href="{{ route('url.view', ['url_code' => $url->url]) }}">{{ $url->url }}</a>
                        </p>
                    </td>

                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">{{ $url->title }}</p>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">{{ $url->count }}</p>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">{{ $url->sessions }}
                        </p>
                    </td>

                    <!-- Vis flere felt etter behov -->
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="py-4 px-3">
        <div class="flex">
            <div class="flex space-x-4 items-center mb-3">
                <label for="">Per page</label>
                <select>
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="50">50</option>
                </select>
            </div>
        </div>

    </div>
</div>
