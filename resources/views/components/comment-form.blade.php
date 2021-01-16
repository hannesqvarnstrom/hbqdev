<div class="card px-3">
    <h6>Have something to add? Comment here!</h6>
<form method='POST' action='/comments'>
    @csrf
    <input type='hidden' name='post' value='{{$post->id}}'>
    <div class="form-group"><label for="cname">Name:</label><input class='form-control'  type="text" name='name' id='cname'></div>
    <div class="form-group"><label for="cemail">Email:</label><input class='form-control' type="text" name='email' id='cemail'></div>
    <label for="cbody">Write your comment here:</label><div class="form-group"><textarea class='form-control' cols="30" rows="5" name='body' id='cbody'></textarea></div>
    <button type='submit' class='btn btn-primary btn-lg'>Post comment</button> 
</form>
</div>