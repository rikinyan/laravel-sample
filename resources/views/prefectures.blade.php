<html>
  <head>
    <title>prefectures list</title>
  </head>
  <body>
    <div>
      <form action="/prefectures" method="post">
        @csrf
        @method('PUT')
        <div>
          name<input type="text" name='name'>
        </div>
        <div>
          description<textarea name="description" cols="30" rows="10"></textarea>
        </div>
        <div>
          <input type="submit" value="登録">
        </div>
      </form>
    </div>
    <table border="1">
      <tr>
        <th>id</th>
        <th>name</th>
        <th>description</th>
        <th>created_at</th>
      </tr>      
      @foreach ($prefectures as $prefecture)
      <tr>
        <td>$prefecture->id</td>
        <td>$prefecture->name</td>
        <td>$prefecture->description</td>
        <td>$prefecture->created_at</td>
      </tr>
      @endforeach
    </table>
  </body>
</html>