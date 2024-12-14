<!DOCTYPE html>
<html lang="ja">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<header class="h-28 bg-teal-500 content-center">
    <div class="flex">
        <h1 class="ml-10 font-medium text-5xl text-gray-600">お家<span class="text-3xl">で</span>図書館</h1>
        <ul class="flex mr-10 mt-2.5 text-base text-gray-600" style="margin-left: auto;">
            <li>本の一覧</li>
            <li class="ml-9">マイページ</li>
            <li class="ml-9">ログアウト</li>
        </ul>
    </div>
</header>
<div class="bg-green-100">
    <div class="py-7 pl-6 w-36 bg-teal-400 relative top-14">
        <span class="text-white font-sans text-xl">Register a book</span><br>
        <p class="mt-2 text-teal-700">本の登録</p>
    </div>
    <div class="text-center" style="margin-top:-100px">
        <form method="post" action="{{ route('book.store') }}" >
        @csrf
            <div class="text-gray-600">
                <dl class="my-11 flex m-auto w-2/3">
                    <dt class="w-72"><span class="text-lg mr-1 text-red-600">*</span><label for="title" class="text-xl">Title :<br><span class="text-sm ml-2.5 text-gray-500">タイトル</span></label></dt>
                    <dd class="w-2/3">
                        <input class="h-10 w-full rounded" type="text" id="title" name="title" value="{{ old('title') }}">
                    </dd>
                </dl>
                <dl class="my-11 flex m-auto w-2/3">
                    <dt class="w-72"><span class="text-lg mr-1 text-red-600">*</span><label for="category_id" class="text-lg">Category :<br><span class="text-sm ml-2.5 text-gray-500">カテゴリ</span></label></dt>
                    <dd class="w-2/3">
                        <input class="h-10 w-full rounded" type="text" id="category_id" name="category_id" value="{{ old('category_id') }}">
                    </dd>
                </dl>
                <dl class="my-11 flex m-auto w-2/3">
                    <dt class="w-72"><span class="text-lg mr-1 text-red-600">*</span><label for="author" class="text-lg">Author :<br><span class="text-sm ml-2.5 text-gray-500">作者</span></label></dt>
                    <dd class="w-2/3">
                        <input class="h-10 w-full rounded" type="text" id="author" name="author" value="{{ old('author') }}">
                    </dd>
                </dl>
                <dl class="my-11 flex m-auto w-2/3">
                    <dt class="w-72"><span class="text-lg mr-1 text-red-600">*</span><label for="summary" class="text-lg">Summary :<br><span class="text-sm ml-2.5 text-gray-500">概要</span></label></dt>
                    <dd class="w-2/3">
                        <input class="w-full rounded" type="text" id="summary" name="summary" value="{{ old('summary') }}">
                    </dd>
                </dl>
                <dl class="my-11 flex m-auto w-2/3">
                    <dt class="w-72"><label for="recommend_point" class="text-lg">Recommendation Points :<br><span class="text-sm ml-2.5 text-gray-500">おすすめポイント</span></label></dt>
                    <dd class="w-2/3">
                        <textarea class="w-full rounded" type="text" id="recommend_point" name="recommend_point" value="{{ old('recommend_point') }}"></textarea>
                    </dd>
                </dl>
                <dl class="my-11 flex m-auto w-2/3">
                    <dt class="w-72"><label for="recommend_level" class="text-lg">Recommendation Level :<br><span class="text-sm ml-2.5 text-gray-500">レコメンド</span></label></dt>
                    <dd class="w-2/3">
                        <input class="w-full rounded" type="text" id="recommend_level" name="recommend_level" value="{{ old('recommend_level') }}">
                    </dd>
                </dl>
                <dl class="my-11 flex m-auto w-2/3">
                    <dt class="w-72"><span class="text-lg mr-1 text-red-600">*</span><label for="image_cover" class="text-lg">Image Cover :<br><span class="text-sm ml-2.5 text-gray-500">画像1（表紙）</span></dt>
                    <dd class="w-2/3">
                        <input class="w-full" type="file" id="image_cover" name="image_cover" value="{{ old('image_cover') }}">
                    </dd>
                </dl>
                <dl class="my-11 flex m-auto w-2/3">
                    <dt class="w-72"><label for="image_2" class="text-lg">Image :<br><span class="text-sm ml-2.5 text-gray-500">画像2</span></dt>
                    <dd class="w-2/3">
                        <input class="w-full" type="file" id="image_2" name="image_2" value="{{ old('image_2') }}">
                    </dd>
                </dl>
                <dl class="my-11 flex m-auto w-2/3">
                    <dt class="w-72"><label for="image_3" class="text-lg">Image :<br><span class="text-sm ml-2.5 text-gray-500">画像3</span></label></dt>
                    <dd class="w-2/3">
                        <input class="w-full" type="file" id="image_3" name="image_3" value="{{ old('image_3') }}">
                    </dd>
                </dl>
                <dl class="my-11 flex m-auto w-2/3">
                    <dt class="w-72"><span class="text-lg mr-1 text-red-600">*</span><label for="publish_year" class="text-lg">Publication Year :<br><span class="text-sm ml-2.5 text-gray-500">発行年</span></label></dt>
                    <dd class="w-2/3">
                        <input class="w-full" type="file" id="publish_year" name="publish_year" value="{{ old('publish_year') }}">
                    </dd>
                </dl>
            </div>
            <button type="submit" name="is_draft" class="py-3 px-12 text-white text-xl hover:bg-teal-600">下書に保存する</button>
            <button type="submit" name="is_store" class="py-3 px-14 text-white text-xl hover:bg-teal-600">本を登録する</button>
        </form>
    </div>
</div>

    <footer class="h-52 bg-teal-500">
        <div class="">
            <div class="text-white text-center">
                <img alt="OUCHI DE TOSHO KAN" src="" class="">
                <p class="">どこからでも</p>
                <a href="#" class=""><span class="">GitHub</span></a>
                <p class="axq azf">© 2024 OUCHI de TOSHOKAN, All rights reserved.</p>
            </div>
        </div>
    </footer>
    </body>
    </html>