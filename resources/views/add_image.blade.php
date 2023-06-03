<form action="{{ route('add_image') }}" enctype='multipart/form-data' method="post"> 
@csrf 
    <input type="file" name="image">  
    <input type="submit" value="写真を登録する"> 
</form>

<img src="{{asset('storage/'.$image->path)}}" alt="">