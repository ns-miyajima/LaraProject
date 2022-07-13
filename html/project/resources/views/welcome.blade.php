<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
    </head>
    <body>
　　　　<h1>取得データ</h1>
        @isset($message)
         {{$message}}
         @endisset
        <!-- All -->
        <form action="/office_mas" method="post" id="All">
            @csrf
            axreq:All<input type="hidden" name="axreq" value="All">
            <input type="submit" value="送信" form="All"><br>
        </form>

        <!-- Single --><hr>
        <form action="/office_mas" method="post" id="Single">
            @csrf
            axreq:Single<input type="hidden" name="axreq" value="Single"><br>
            id:<input type="lavel" name="id" value="1">
            <input type="submit" value="送信" form="Single">
        </form>

        <!-- addSingle --><hr>
        
        <form action="/office_mas" method="post" id="AddSingle">
            @csrf
            axreq:AddSingle<input type="hidden" name="axreq" value="AddSingle"><br>
            name:<input type="text" name="name"><br>
            phonenumber:<input type="text" name="phonenumber"><br>
            gender:<input type="text" name="gender"><br>
            <input type="submit" value="送信" form="AddSingle">
        </form>

   
       

        
    </body>
</html>
