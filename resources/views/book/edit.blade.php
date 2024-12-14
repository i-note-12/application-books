<h1>本の編集</h1>
<form method="post" action="/create-redirect" >
    <ul>
      <li>
        <label for="title">タイトル</label>
        <input type="text" id="title" name="title" value="{{ old('title') }}">
      </li>
      <li>
        <label for="category_id">カテゴリ</label>
        <input type="text" id="category_id" name="category_id" value="{{ old('category_id') }}">
      </li>
      <li>
        <label for="auther">作者</label>
        <input type="text" id="auther" name="auther" value="{{ old('auther') }}">
      </li>
      <li>
        <label for="summary">概要</label>
        <input type="text" id="summary" name="summary" value="{{ old('summary') }}">
      </li>
      <li>
        <label for="recommend_point">おすすめポイント</label>
        <input type="text" id="recommend_point" name="recommend_point" value="{{ old('recommend_point') }}">
      </li>
      <li>
        <label for="recommend_level">レコメンド</label>
        <input type="text" id="recommend_level" name="recommend_level" value="{{ old('recommend_level') }}">
      </li>
      <li>
        <label for="image_cover">画像1（表紙）</label>
        <input type="file" id="image_cover" name="image_cover" value="{{ old('image_cover') }}">
      </li>
      <li>
        <label for="image_2">画像2</label>
        <input type="file" id="image_2" name="image_2" value="{{ old('image_2') }}">
      </li>
      <li>
        <label for="image_3">画像3</label>
        <input type="file" id="image_3" name="image_3" value="{{ old('image_3') }}">
      </li>
      <li>
        <label for="publish_year">発行年</label>
        <input type="file" id="publish_year" name="publish_year" value="{{ old('publish_year') }}">
      </li>
    </ul>
    <button type="submit">本を登録する</button>
    <button type="submit">下書に保存する</button>
  </form>