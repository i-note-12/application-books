<h1>書籍一覧</h1>
<div>
  <label for="category_id">カテゴリ</label>
  <select name="" id="">選択する</select>
  <label for="title">タイトル</label>
  <input type="text" id="title" name="title" value="{{ old('title') }}">
  <label for="auther">作者</label>
  <input type="text" id="auther" name="auther" value="{{ old('auther') }}">
  <label for="recommend_level">レコメンド</label>
  <input type="text" id="recommend_level" name="recommend_level" value="{{ old('recommend_level') }}">
</div>
<table>
  <tr>
    <th>カテゴリ</th>
    <th>タイトル</th>
    <th>作者</th>
    <th>概要</th>
    <th>レコメンド</th>
    <th></th>
  </tr>
  <tr>
    <td>category_id</td>
    <td>title </td>
    <td>auther</td>
    <td>summary</td>
    <td>recommend_level</td>
    <td><a href="">詳細を見る</a></td>
  </tr>
</table>