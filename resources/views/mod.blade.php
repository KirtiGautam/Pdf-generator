<html>
    <body>
        Choose role for {{$user[0]->name}}: 
        <form action="/role/change?id={{ $user[0]->id }}" method="get">
            <select name="changed" >
                <option value="admin">Admin</option>
                <option value="executive">Executive</option>
            </select>
            <input type="submit" value="Change role">
        </form>
    </body>
</html>