<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <h1>TO DO List APPP</h1> 
    <div class="container">
    <a href="tasks/create" style="float:right" class="btn btn-primary mb-2">Create New Task</a>
    <table class="table table-striped">
        <thead class="table-dark">
            <th class="text-center">Task_Code</th>
            <th class="text-center">Task_Title</th>
            <th class="text-center">Task_Discription</th>
            <th class="text-center">Created_at</th>
            <th class="text-center">Task_Details</th>
            <th class="text-center">Edit_Task</th>
            
            <th class="text-center">Delete_Task</th>

        </thead>
        <tbody>
            @foreach($tasks as $elem)
            <tr>
                <td>{{$elem->id}}</td>
                <td>{{$elem->Title}}</td>
                <td>{{$elem->Discription}}</td>
                <td>{{$elem->created_at}}</td>
                <td><a href="tasks/{{$elem->id}}" class="btn btn-info mb-2">Details</a></td>
                <td><a href="tasks/{{$elem->id}}/edit" class="btn btn-success mb-2">Edit</a></td>
                
                
                <td>
    <form action="{{ route('tasks.destroy', $elem->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</td>

    </form>
</td>

            </tr> 
            @endforeach
        </tbody>
    </table>   
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>