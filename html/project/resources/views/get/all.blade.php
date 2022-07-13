<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
　　　　<h1>取得データ</h1>
        <!-- All -->
        <table>
            <tr>
                <th>
                    ID
                </th>
                <th>
                    名前
                </th>
                <th>
                    電話番号
                </th>
                <th>
                    ジェンダー
                </th>
            </tr>

            @foreach($list as $item)
                <tr>
                    <td>
                        {{$item -> id}}
                    </td>
                    <td>
                        {{$item -> name}}
                    </td>
                    <td>
                        {{$item -> phonenumber}}
                    </td>
                    <td>
                        {{$item -> gender}}
                    </td>
                </tr>
            @endforeach
                
        </table>
    </body>
</html>
