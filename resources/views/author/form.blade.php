<?php
/**
 * @var \App\Models\Author $model
 */
?>
<form method="post">
    @csrf
    <input type="text" name="full_name" value="{{$model->full_name}}"><br><br>
    <input type="submit">
</form>
