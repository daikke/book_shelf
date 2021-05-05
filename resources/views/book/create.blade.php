<form>
  <div>
    <label>
      書籍名:<input type="text" name="name">
    </label>
  </div>
  <div>
    <label>
      ISBN:<input type="text" name="isbn">
    </label>
  </div>
  <div>
    <label>
      ジャンル:
      <select name="genre">
        @foreach ($genres as $genre)
          <option value={{$genre->id}}>{{ $genre->name }}</option>
        @endforeach
      </select>
    </label>
  </div>
  <div>
    <label>
      備考:<textarea name="remark"></textarea>
    </label>
  </div>
  <div>
    <label>
      なにこれ3行:<input type="text" name="first_about"><input type="text" name="second_about"><input type="text" name="third_about">
    </label>
  </div>
  <input type="submit" value="送信">
</form>