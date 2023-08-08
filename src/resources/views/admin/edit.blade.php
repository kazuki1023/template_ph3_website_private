@extends('layouts.admin')
@section('content')

    <form action="{{ route('admin.update', $question->id) }}" method="POST" enctype="multipart/form-data" class="text-center">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-4 mt-3">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            項目名
                        </th>
                        <th scope="col" class="px-6 py-3">
                            内容
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            問題番号
                        </th>
                        <td class="px-6 py-4">
                            <input type="text" id="disabled-input" aria-label="disabled input"
                                class=" bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed"
                                value="{{ $question->id }}" disabled name="id">
                        </td>
                    </tr>
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            問題文
                        </th>
                        <td class="px-6 py-4">
                            <div class="">
                                @error('content')
                                    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50" role="alert">
                                        <span class="font-medium">エラー!</span> {{ $message }}
                                    </div>
                                @enderror
                                <input type="text" id="default-input"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    value="{{ $question->content }}" name="content" required="required">
                            </div>
                        </td>
                    </tr>
                    @foreach ($question->choices as $i => $choice)
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                選択肢 {{ $i + 1 }}
                                @if ($choice->valid == 1)
                                    <span
                                        class="bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full">正解</span>
                                @else
                                    <span
                                        class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full">不正解</span>
                                @endif
                            </th>
                            <td class="px-6 py-4">
                                @error('choice{{ $i + 1 }}')
                                    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50" role="alert">
                                        <span class="font-medium">エラー!</span> {{ $message }}
                                    </div>
                                @enderror
                                <input type="text" id="default-input"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    value="{{ $choice->name }}" name="choice{{ $choice->id }}">
                            </td>
                        </tr>
                    @endforeach
                <tr class="bg-white border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        正解の選択肢
                    </th>
                    <td class="px-6 py-4">
                            <ul
                                class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex">
                                @foreach ($question->choices as $i => $choice)
                                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                                        <div class="flex items-center pl-3">
                                            <input id="horizontal-list-radio-license-{{ $i + 1 }}" type="radio"
                                                value="{{ $choice->id }}" name="list-radio"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2"
                                                @if ($choice->valid == 1) checked @endif>
                                            <label for="horizontal-list-radio-license-{{ $i + 1 }}"
                                                class="w-full py-3 ml-2 text-sm font-medium text-gray-900">選択肢{{ $i + 1 }}</label>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </td>
                    </tr>
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            画像
                        </th>
                        <td class="px-6 py-4">
                            <div class="">
                                @error('image')
                                    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50" role="alert">
                                        <span class="font-medium">エラー!</span> {{ $message }}
                                    </div>
                                @enderror
                                <img src="{{ asset('/storage/img/questions/' . $question->image) }}">
                                <input
                                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none upload-limit"
                                    id="file_input" type="file" name="image" accept=".jpg, .svg, .png"
                                    placeholder="1MG以下の写真しか対応してません">
                                <p class="mt-1 text-sm text-gray-500" id="file_input_help">SVG, PNG, or
                                    JPG .</p>
                            </div>
                        </td>
                    </tr>
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            補足
                        </th>
                        <td class="px-6 py-4">
                            <div class="">
                                @error('supplement')
                                    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50" role="alert">
                                        <span class="font-medium">エラー!</span> {{ $message }}
                                    </div>
                                @enderror
                                <input type="text" id="default-input"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    value="{{ $question->supplement }}" name="supplement">
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        @csrf
        @method('PUT')
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none mt-2"
            onclick="location.href={{ route('admin.update', $question->id) }}">更新する</button>
    </form>
    <form action="{{ route('admin.delete', $question->id) }}" method="POST" enctype="multipart/form-data"" class="text-center">
        @csrf
        @method('DELETE')
        <button type="submit"
            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2"
            onclick="location.href='{{ route('admin.delete', $question->id) }}'">削除する</button>
    </form>
@endsection
