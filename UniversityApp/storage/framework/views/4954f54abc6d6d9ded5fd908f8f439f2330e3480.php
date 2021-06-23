  <?php echo Form::open(['action'=>'SearchEngineController@search','method' => 'GET']); ?>

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
  <?php echo Form::close(); ?>

</form>
</div><?php /**PATH C:\xampp\htdocs\UniversityApp\resources\views/lang/en/search/search.blade.php ENDPATH**/ ?>