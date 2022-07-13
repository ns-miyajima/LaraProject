<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <style>
            #submit{
                text-align : center;
            }
        </style>
    </head>
    <body>
　　　　<h1>取得データ</h1>
        <!-- All -->
        <form action="/office_mas" method="post">
        <input type="hidden" name="axreq" value="Update">
            @csrf
            <table>
                <tr>
                    <td></td>
                    <td>変更前</td>
                    <td>変更後</td>
                </tr>
                <tr>
                    <th>
                        ID
                    </th>
                    <td>
                        {{$list -> id}}
                    </td>
                    <td>
                        <input type="lavel" name="id" value="{{$list -> id}}">
                    </td>
                </tr>
                <tr>
                    <th>
                        名前
                    </th>
                    <td>
                        {{$list -> name}}
                    </td>
                    <td>
                        <input type="text" name="name">
                    </td>
                </tr>
                <tr>
                    <th>
                        電話番号
                    </th>
                    <td>
                        {{$list -> phonenumber}}
                    </td>
                    <td>
                        <input type="text" name="phonenumber">
                    </td>
                </tr>
                <tr>
                    <th>
                        ジェンダー
                    </th>
                    <td>
                        {{$list -> gender}}
                    </td>
                    <td>
                        <input type="text" name="gender">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td  id="submit" colspan="2">
                        <input type="submit" value="変更">
                    </td>
                </tr>
                
            </table>
        </form>
    </body>
</html>


