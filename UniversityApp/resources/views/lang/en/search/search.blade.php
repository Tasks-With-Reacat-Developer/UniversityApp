  {!! Form::open(['action'=>'SearchEngineController@search','method' => 'GET']) !!}
  <table>
    <tbody>
      <tr>
      <td style="width:100%">
    <input class="form-control" style="width:98%"  name="query" placeholder="Search" type="text">
      </td>
    <td>
      <button class="btn btn-outline-dark btn-lg" style="border-radius:0.50rem" type="submit" >Search</button>
   </td>
  </tr>
    </tbody>
  </table>
  {!! Form::close() !!}
</form>
</div>