<html>
    <body>
        Choose role for {{$user[0]->name}}: 
        <form action="/role/change" method="get">
            <input type="text" name="id" id="" value='{{ $user[0]->id }}' style="visibility: hidden">
            <select name="changed" >
                <option value="admin">Admin</option>
                <option value="executive">Executive</option>
            </select>
            <input type="submit" value="Change role">
        </form>
    </body>

</html>