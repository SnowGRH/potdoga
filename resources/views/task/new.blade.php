<form action="/api/task" method="post">
    {{csrf_field()}}
    {{method_field('post')}}
    <input type="text" name="name" placeholder="name">
    <input type="text" name="email" placeholder="email">
    <input type="submit" value="Ok">
</form>