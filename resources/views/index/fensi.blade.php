
<div style="width: 99%; height: 600px; border: 1px solid black;overflow: auto" id="list">
    <table>
        <tr>
            <td style="width:200px;color:red;">用户名</td>
            <td style="color:red">贡献值</td>
        </tr>
        @foreach ($data as $v)
        <tr>
                <td>{{$v->f_name}}</td>
                <td>{{$v->f_jf}}</td>
            </tr>
        @endforeach
       
    </table>
</div>
