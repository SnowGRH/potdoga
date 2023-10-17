<form action="/api/task" method="post">
    {{csrf_field()}}
    {{method_field('post')}}
    <input type="text" name="status" placeholder="status">
    <input type="text" name="id" placeholder="id">
    <input type="text" name="subject_id" placeholder="subject_id">
    <input type="submit" value="Ok">
</form>